# Fashionably Late

お問い合わせフォームでは名前やお問い合わせの種類、内容を登録できます。
管理画面では登録した内容を検索・管理できます。

## Docker ビルド

git clone git@github.com:matsu9889/test1.git
docker-compose up -d --build

## Laravel 環境構築

docker-compose exec php bash
composer install
cp .env.example .env .env ファイルの作成参照
php artisan key:generate
php artisan migrate
php artisan db:seed

## .env ファイルの作成

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=test_db
DB_USERNAME=test_user
DB_PASSWORD=test_pass

## 使用技術（実行環境）

・PHP 8.4
・Laravel 8.83
・MySQL mysql:8.0
・nginx:1.21

## ER 図

![ER図](index.drawio-1.png)

## URL

お問い合わせフォーム：http://localhost/
会員登録画面：http://localhost/register
ログイン画面：http://localhost/login
管理画面：http://localhost/admin
