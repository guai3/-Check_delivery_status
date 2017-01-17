<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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
            $table->boolean('flag'); // フラグ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
