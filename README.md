# 導入手順

## docker インストール

## docker-compose インストール

## 環境セットアップ
```bash
$ docker-compose up -d --build
$ docker-compose exec app bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```

### Linux 環境の場合、下記も実行
```bash
$ chmod 777 storage/logs/
$ chmod 777 storage/framework/sessions/
$ chmod 777 storage/framework/views/
$ chmod 777 storage/framework/cache/
```
