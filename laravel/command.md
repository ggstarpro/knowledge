# PHP
docker exec -it [:コンテナ名] bash

# LOG
docker logs [:コンテナ名] -f

# Model
php artisan make:model [:モデル名] -m

# Migration
php artisan make:migration create_[:テーブル名]

# Controller
php artisan make:controller [:コントローラ名]Controller --resource

# Seeder
php artisan make:seeder [:seeder名]Seeder

php artisan db:seed --class=[:モデル名]Seeder

# database 実行
* php artisan db:seed
* php artisan migrate:refresh --seed
* php artisan migrate:fresh --seed

# Faker
php artisan make:factory [:モデル名]Factory --model=[:モデル名]

# Request
php artisan make:request [:リクエスト名]Request

# Rule
php artisan make:rule [:ルール名]Rule

# コンポーネントクラス
php artisan make:component [:コンポーネント名]

# PHPUnit
php artisan make:test [:コントローラ名]ControllerTest

# balde修正
option + shift + F
