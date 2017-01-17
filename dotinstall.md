### ドットインストールLaravel入門とのコマンドの相違点

#### 03 アプリケーションの設定をしていこう
create database check_delivery_status;

grant all on check_delivery_status.* to dbuser@localhost identified by 'hw8JUMe6';

#### 05 postsテーブルを作ってみよう

postテーブルでなくinvoiceテーブルを作成する

php artisan make:migration create_invoices_table --create=invoices


#### 07 Postモデルを作ってみよう

php artisan make:model Invoice


#### 13 PostsControllerを作ってみよう

php artisan make:controller InvoicesController
