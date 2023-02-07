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
< Connection: keep-alive
< Content-Type: text/html;charset=utf-8
< Content-Length: 0
< 
* Connection #0 to host 100.77.158.125 left intact
```
