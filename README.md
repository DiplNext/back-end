### For local dev:
1) Make directory for docker:
```
mkdir ./storage/docker
```
```
 mkdir -p ./storage/docker/logs/php \
 ./storage/docker/logs/supervisor \
 ./storage/docker/supervisor/run
```
2) Copy .env.example
```
cp .env.example .env
```
3) Add current user to app
```
echo UID=$(id -u) >> .env
echo GID=$(id -g) >> .env
```
4) Run docker services
```
docker-compose up -d --build
```
5) Install Composer dependencies in docker container
```
docker-compose exec moldagroteh-app composer install --optimize-autoloader
```
6) Install npm dependencies
```
docker-compose exec moldagroteh-app npm i
```
7) Set Application key
```
docker-compose exec moldagroteh-app php artisan key:generate
```

### For production build:
1) Make directory for docker:
```
mkdir ./storage/docker
```
```
 mkdir -p ./storage/docker/logs/php \
 ./storage/docker/logs/supervisor \
 ./storage/docker/supervisor/run
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

4) Add current user to app
```
echo UID=$(id -u) >> .env
echo GID=$(id -g) >> .env
```

5) Run docker services
```
docker-compose up -d --build
```
6) Install Composer dependencies in docker container
```
docker-compose exec moldagroteh-app composer install --optimize-autoloader --no-dev
```
7) Remove npm prepare script
```
docker-compose exec moldagroteh-app npm set-script prepare ""
```
8) Install npm dependencies
```
docker-compose exec moldagroteh-app npm i
```
9) Set Application key
```
docker-compose exec moldagroteh-app php artisan key:generate
```
