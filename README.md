# Check_delivery_status
送り状の配送状況を一覧できるようにします｡




## ドットインストールとの相違点

create database check_delivery_status;
grant all on check_delivery_status.* to dbuser@localhost identified by 'hw8JUMe6';
\q

#### 05 postsテーブルを作ってみよう

postテーブルでなくinvoiceテーブルを作成する

php artisan make:migration create_invoices_table --create=invoices


migration ファイル

```php

    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->date('shipping_date');  // 出荷日
            $table->string('company'); // 配送会社
            $table->string('invoice_number'); // 送り状番号
            $table->string('memo'); // メモ欄
            $table->string('status'); // 配達状況
            $table->string('site_url'); // 公式サイトURL
            $table->boolean('flag') // フラグ
            $table->timestamps();
        });
    }

```

#### 07 Postモデルを作ってみよう

php artisan make:model Invoice

#### 10 viewでテンプレートを呼びだそう
