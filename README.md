# php_x-debug
#rodar ferramenta para ler os arquivos cachegrind.out para windows
```
docker run --rm -v /path/to/xdebug/files:/tmp -p 80:80 jokkedk/webgrind:latest
```