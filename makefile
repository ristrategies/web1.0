#****************************************************************************
#** initial. 0.01 - Jan. 31,2003 -
#****************************************************************************/

all: test.test



test.test : app.py
	#docker-compose -p app-localRedis build
	echo "run docker"
	touch test.test
