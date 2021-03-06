<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giangvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Neu la giang vien thi se co nhung thuoc tinh duoi day
        Schema::create('giang_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_giang_vien', 20);
            $table->string('don_vi' , 200); // giang vien truong ngoai
            $table->integer('user_id')->unsigned(); // khoa ngoai den users table
            $table->integer('bo_mon_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->foreign('bo_mon_id')
                  ->references('id')
                  ->on('bo_mon')
                  ->onDelete('cascade');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
