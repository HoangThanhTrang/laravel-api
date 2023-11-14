<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('amount');//số lượng
            $table->string('status');//billed, paid,void -> lập hóa đơn , đã thanh toán , vô hiệu
            $table->dateTime('billed_date');
            $table->dateTime('paid_date')->nullable();// cho phép null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
