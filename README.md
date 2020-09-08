# meshinavi

## GitHubからクローン

```
git clone ***
```

## 環境変数ファイル(Docker用)をコピーして修正

```
cp .env-dev .env
```

<br>

MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORDを修正します。
※今回はMYSQL_DATABASEのみ変更します。

`.env`

```diff
  MYSQL_ROOT_PASSWORD=password
- MYSQL_DATABASE=laravel
+ MYSQL_DATABASE=meshinavi
  MYSQL_USER=user
  MYSQL_PASSWORD=password
```

<br>

## 環境変数ファイル(Laravel用)をコピーして修正

```
cp server/.env.example server/.env
```

`server/.env`

```diff
  APP_NAME=Laravel
  APP_ENV=local
  APP_KEY=
  APP_DEBUG=true
  APP_URL=http://localhost

  LOG_CHANNEL=stack

  DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
+ DB_HOST=db
  DB_PORT=3306
- DB_DATABASE=laravel
+ DB_DATABASE=tabelog
- DB_USERNAME=root
+ DB_USERNAME=user
- DB_PASSWORD=
+ DB_PASSWORD=password

  BROADCAST_DRIVER=log
  CACHE_DRIVER=file
  QUEUE_CONNECTION=sync
  SESSION_DRIVER=file
  SESSION_LIFETIME=120

# 省略
```

## ライブラリインストール

```
composer install
```

## アプリケーションキー(APP_KEY)を設定する

```
php artisan key:generate
```

## migrate 実行(--seedオプションでseedも実行)

```
php artisan migrate --seed
```

## ブラウザで確認

[localhost](http://localhost)
