<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToDienthoaiTable extends Migration
{
    public function up()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->text('baiViet')->nullable(); // Thêm trường baiViet
            $table->string('ghiChu', 500)->nullable(); // Thêm trường ghiChu
            $table->unsignedBigInteger('idLoai')->nullable(); // Thêm trường idLoai

            // Khai báo khóa ngoại
            $table->foreign('idLoai')->references('id')->on('loaiSP')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->dropForeign(['idLoai']); // Xóa khóa ngoại
            $table->dropColumn('baiViet'); // Xóa trường baiViet
            $table->dropColumn('ghiChu'); // Xóa trường ghiChu
            $table->dropColumn('idLoai'); // Xóa trường idLoai
        });
    }
}
