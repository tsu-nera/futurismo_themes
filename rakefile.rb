# Rakefile for Sphinx documentation
require 'rake/clean'
require 'syncftp'
require 'pp'

CLEAN.include(["*/**/*.~","*/**/\#*"])
CLOBBER.include(["mymodule/*.~","mymodule/\#*","mymodule/*.org"])

SOURCEDIR     = "src"
BUILDDIR      = "mymodule"

REMOTEDIR     = "./futurismo_dev/wp-content/themes/src/"
BUILDCMD      = "org-babel-tangle"

BROWSER       = "firefox"
URL           = "http://hmi-me.ciao.jp/futurismo_dev/"

ORGS = FileList["src/*.org"]
# ORGS.exclude("README.org")
PHPS = ORGS.ext('php')

task :default => [:build, :push]

directory BUILDDIR
file :build => PHPS do
  system("rm -rf #{BUILDDIR}")
  system("cp -r #{SOURCEDIR} #{BUILDDIR}")
end

rule '.php' => '.org' do |t|
  sh "./#{BUILDCMD} #{t.source}"
end

desc "send all files to ftp server"
task :push => :clobber do
  if system( "ncftpput -R -m lolipop #{REMOTEDIR} #{BUILDDIR}" )
    puts "FTP finished. Access to #{URL}"
  end
end

desc "open url"
task :open do
  system("#{BROWSER} #{URL}")
end
