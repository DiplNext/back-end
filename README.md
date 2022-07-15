### For local dev:
1) Make directory for docker:
```
mkdir ./storage/docker
```
2) Copy .env.example
```
cp .env.example .env
```
3) Run docker services
```
docker-compose up -d --build
```

### For production build:
1) Make directory for docker:
```
mkdir ./storage/docker
```
2) Copy .env.example
```
cp .env.example .env
```
**3) Edit .env file**
1. Set APP_NAME=api.moldagroteh.md
2. Set APP_ENV=production
3. Set APP_DEBUG=false
4. Set APP_URL=https://api.agropiese.md

4) Run docker services
```
docker-compose up -d --build
```
