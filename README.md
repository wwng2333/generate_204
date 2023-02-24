# generate_204
generate_204, powered by workerman.
# install on Debian 11
```bash
apt install php7.4-cli composer git
git clone https://github.com/wwng2333/generate_204.git
cd generate_204
composer install
php main.php start -d
```
# install on Alpine Linux 3.18
```bash
apk add git composer php81-cli php81-posix php81-pcntl
git clone https://github.com/wwng2333/generate_204.git
cd generate_204
composer install
php main.php start -d
```
# Test
```bash
[root@localhost ~]# curl -v 100.77.158.125:2333
*   Trying 100.77.158.125:2333...
* Connected to 100.77.158.125 (100.77.158.125) port 2333 (#0)
> GET / HTTP/1.1
> Host: 100.77.158.125:2333
> User-Agent: curl/7.85.0
> Accept: */*
> 
* Mark bundle as not supporting multiuse
< HTTP/1.1 204 No Content
< Server: workerman
< X-Powered-by: github.com/wwng2333/generate_204
< Connection: close
< Content-Type: text/html;charset=utf-8
< Content-Length: 0
< 
* Closing connection 0
```
# Benchmark
```bash
[root@crazy generate_204]# ab -n 100000 -c 1000 http://127.0.0.1:2333/
This is ApacheBench, Version 2.3 <$Revision: 1903618 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking 127.0.0.1 (be patient)
Completed 10000 requests
Completed 20000 requests
Completed 30000 requests
Completed 40000 requests
Completed 50000 requests
Completed 60000 requests
Completed 70000 requests
Completed 80000 requests
Completed 90000 requests
Completed 100000 requests
Finished 100000 requests


Server Software:        workerman
Server Hostname:        127.0.0.1
Server Port:            2333

Document Path:          /
Document Length:        0 bytes

Concurrency Level:      1000
Time taken for tests:   7.554 seconds
Complete requests:      100000
Failed requests:        0
Total transferred:      17100000 bytes
HTML transferred:       0 bytes
Requests per second:    13237.97 [#/sec] (mean)
Time per request:       75.540 [ms] (mean)
Time per request:       0.076 [ms] (mean, across all concurrent requests)
Transfer rate:          2210.64 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0   32   4.2     32      52
Processing:    12   43   6.6     42      67
Waiting:        1   32   7.8     28      52
Total:         46   75   4.1     75     101

Percentage of the requests served within a certain time (ms)
  50%     75
  66%     77
  75%     78
  80%     78
  90%     79
  95%     80
  98%     86
  99%     88
 100%    101 (longest request)
```
