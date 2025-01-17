<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('EMP_ID'); // Số nguyên lớn và tự tăng
            $table->string('LastName', 50);
            $table->string('FirstName', 30);
            $table->string('Email', 100)->nullable();
            $table->string('Phone', 30)->nullable();
            $table->string('Image', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
