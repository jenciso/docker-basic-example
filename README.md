## Docker basic example

Simple example to use Docker 

To build 

``` 
docker build . 
```

```
docker build . -t myapp:latest
```

docker run

```
docker run -p 8080:80 myapp:latest
``` 

Test:

```
curl -vs http://localhost:8080
``` 

