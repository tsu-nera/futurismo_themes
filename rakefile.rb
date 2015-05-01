# Rakefile for Sphinx documentation
require 'rake/clean'
require 'syncftp'
require 'pp'

CLEAN.include(["*/**/*.~","*/**/\#*"])
# CLOBBER.include(["pages/**/*.~","pages/**/\#*","pages/**/*.org"])

FLAGS = "-R"
BOOKMARKNAME  = "lolipop"
LOCALDIR      = "src"
REMOTEDIR     = "./futurismo_dev/wp-content/themes/src/mymodule"

BROWSER       = "firefox"
# URL           = "http://futurismo.biz"
URL           = "http://hmi-me.ciao.jp/futurismo_dev"

task :default => [:open]

desc "pull files from remote server"
task :pull => :clobber do
  if system( "ncftpget #{FLAGS} #{BOOKMARKNAME} #{LOCALDIR} #{REMOTEDIR}" )
    puts "FTP finished. Access to #{URL}"
  end
end

desc "open url"
task :open do
  system("#{BROWSER} #{URL}")
end
