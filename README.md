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
[root@nas generate_204]# ab -c1000 -n100000 http://127.0.0.1:2333/generate_204
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

Document Path:          /generate_204
Document Length:        0 bytes

Concurrency Level:      1000
Time taken for tests:   10.332 seconds
Complete requests:      100000
Failed requests:        0
Total transferred:      17100000 bytes
HTML transferred:       0 bytes
Requests per second:    9679.06 [#/sec] (mean)
Time per request:       103.316 [ms] (mean)
Time per request:       0.103 [ms] (mean, across all concurrent requests)
Transfer rate:          1616.33 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0   51  17.1     51      85
Processing:    20   52  17.3     51      88
Waiting:        2   26  18.2     18      83
Total:         43  103   4.4    103     111

Percentage of the requests served within a certain time (ms)
  50%    103
  66%    105
  75%    105
  80%    106
  90%    106
  95%    107
  98%    108
  99%    108
 100%    111 (longest request)
```
