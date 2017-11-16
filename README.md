# abcode
用于压力测试的代码

## Install
    git clone https://github.com/fanrong33/abcode.git

## Ab Test Research

####t2.medium

	ab -n 10000 -c 500 http://52.53.3.12/index.html
	

| Metrics   | QPS       | CPU | Load |
|----------------|:--------------|:----------|:-------------|
| Static HTML       | 5287/sec | 19%  | 0.50 |
| picture           | 2937/sec | 32%  | 0.32 |
| phpinfo           | 800/sec  | 85%  | 1.39 |
| error_log         | 9000/sec | 98%  | 0.50 |
| request ip2       | 389/sec  | 100% |      |
| WhichBrowser      | 125/sec  | 100% |      |
| ThinkPHP          | 1700/sec | 100% | 1.00 |
| memcache (set+get)| 4500/sec | 98%  | 0.53 |
| memcache(get)     | 5200/sec | 76%  | 0.62 |
| SSDB (setx+get)   | 1170/sec | 99%  | 1.20 |
| SSDB (setx)       | 1430/sec | 100% | 1.10 |

####c4.large

| Metrics   | QPS       | CPU | Load |
|----------------|:--------------|:----------|:-------------|
| Static HTML       | 12560/sec | 29%  | 0.37 |
| picture           | 2650/sec | 26%  | 0.13 |
| phpinfo           | 679/sec  | 98%  | 1.60 |
| error_log         | 7236/sec | 63%  | 0.91 |
| request ip2       | 364/sec  | 100% |      |
| WhichBrowser      | 107/sec  | 100% | 9.6  |
| ThinkPHP          | 1500/sec | 100% | 0.7  |
| memcache (set+get)| 3960/sec | 81%  | 0.68 |
| memcache(get)     | 4400/sec | 87%  | 0.80 |
| SSDB (setx+get)   | 1095/sec | 99%  | 1.30 |
| SSDB (setx)       | 1340/sec | 94%  | 1.28 |
| MySQL (conn)      | 2976/sec | 76%  | 0.60 |
| MySQL (select)    | 2686/sec | 99%  | 1.60 |
| MySQL (insert)    | 2767/sec | 100% | 0.61 |
| MySQL (update)    | 2800/sec | 100% | 1.70 |