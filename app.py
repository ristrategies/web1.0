# add new comment to test push to remote branch
import time
import socket

import redis
from flask import Flask


app = Flask(__name__)
#cache = redis.Redis(host='redis', port=6379)
cache = redis.Redis(host='localhost', port=6379)



def get_hit_count():
    retries = 5
    while True:
        try:
            return cache.incr('hits')
        except redis.exceptions.ConnectionError as exc:
            if retries == 0:
                raise exc
            retries -= 1
            time.sleep(0.5)


@app.route('/')
def hello():
    count = get_hit_count()
    #with open("test.txt", "r") as ins:
       #for line in ins:
           #count = socket.gethostbyname(line.strip())

    return 'Hello World! I have been seen {} times.\n'.format(count)
    #return 'Hello World! I have been seen ', count

if __name__ == "__main__":
    app.run(host="0.0.0.0", debug=True)


