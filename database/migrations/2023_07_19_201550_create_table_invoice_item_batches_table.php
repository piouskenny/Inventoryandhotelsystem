<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInvoiceItemBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_invoice_item_batches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();
            // $table->unsignedBigInteger('customertable_id')->nullable();
            $table->foreignId('invoice_item_id')->constrained()->cascadeOnDelete();
            $table->foreignId('warehousestore_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('department')->default('STORE');
            $table->foreignId('stock_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('stockbatch_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId("customer_id")->nullable()->constrained()->nullOnDelete();
            $table->string("store")->default('quantity');
            $table->decimal("cost_price",20,5);
            $table->decimal("selling_price",20,5);
            $table->decimal("profit",20,5);
            $table->integer('quantity');
            $table->date("invoice_date");
            $table->time("sales_time");
            $table->timestamps();

            // $table->foreign('customertable_id')->references('id')->on('customer_table')->constrained()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_invoice_item_batches');
    }
}
