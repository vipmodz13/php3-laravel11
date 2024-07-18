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
        Schema::create('dienthoai', function (Blueprint $table) {
            $table->id(); // Tạo trường id tự động tăng
            $table->string('tenDT', 30);
            $table->string('moTa', 1000)->nullable(); // Tạo trường moTa nullable
            $table->dateTime('ngayCapNhat'); // Tạo trường ngayCapNhat
            $table->double('gia', 8, 2); // Tạo trường gia
            $table->double('giaKM', 8, 2)->default(0); // Tạo trường giaKM với giá trị mặc định 0
            $table->string('urlHinh', 200)->nullable(); // Tạo trường urlHinh nullable
            $table->integer('soLuongTonKho')->default(0); // Tạo trường soLuongTonKho với giá trị mặc định 0
            $table->boolean('hot')->default(0); // Tạo trường hot với giá trị mặc định 0
            $table->boolean('anHien')->default(1); // Tạo trường anHien với giá trị mặc định 1
            $table->timestamps(); // Tạo trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
