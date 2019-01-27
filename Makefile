# Jenkind Makefile
#  this file should be located in jenkins/workspace/<project_name>   
# git push https://username:password@myrepository.biz/file.git

VERSION ?= 0.1.0
APPLICATION ?= jenkins-pipelines
BUILD_DIR ?= bin

all: $(BUILD_DIR)

$(BUILD_DIR):
	if [ ! -d "build" ] ; then mkdir build; cd build; git init ; echo "git init" > mkdir.log; else cd build; echo "build dir exists" > exists.log ; pwd; ls -al; fi ; make -f ../Makefile checkout
#        GOOS=linux GOARCH=amd64 CGO_ENABLED=0 go build -a -installsuffix cgo -o $(BUILD_DIR)/$(APPLICATION) .

checkout : 
	echo -n "git checkout: "; pwd ;  git status 
	git branch 
	git branch -a
	git config --global fetch.default https://github.com/ristrategies/web1.0/
	# git checkout -b <new branch name> <from branch>
	git checkout -b build0.1.0  
	git pull https://github.com/ristrategies/web1.0/ jenkinspipline1

clean: 
	echo -n "Cleaning. Version: ${BUILDVER}: " 
	rm -rf build
