<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('project_name');
            $table->string('number_of_words');
            $table->string('total_cost');
            $table->string('project_type');
            $table->string('payment_status');
            $table->string('status');
            $table->string('category');
            $table->string('sub_category');
            $table->string('requested_turnaround_time');
            $table->string('journal_Specific_formatting');
            $table->string('file');
            $table->string('english_style');
            $table->longText('comment');
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
        Schema::dropIfExists('orders');
    }
}
