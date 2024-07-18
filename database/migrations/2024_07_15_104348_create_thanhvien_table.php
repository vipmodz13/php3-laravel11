<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->id(); // Tạo trường id tự động tăng
            $table->string('hoTen', 100); // Tạo trường hoTen
            $table->string('password', 100); // Tạo trường password
            $table->string('email', 200); // Tạo trường email
            $table->string('randomKey', 100)->nullable(); // Tạo trường randomKey nullable
            $table->boolean('active')->default(0); // Tạo trường active với giá trị mặc định 0
            $table->integer('idGroup')->default(0); // Tạo trường idGroup với giá trị mặc định 0
            $table->timestamps(); // Tạo trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanhvien');
    }
};
