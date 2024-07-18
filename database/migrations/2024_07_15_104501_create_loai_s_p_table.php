<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiSPTable extends Migration
{
    public function up()
    {
        Schema::create('loaiSP', function (Blueprint $table) {
            $table->id(); // Tạo trường id tự động tăng
            $table->string('tenLoai', 30)->unique(); // Tạo trường tenLoai duy nhất
            $table->integer('thuTu')->default(0); // Tạo trường thuTu với giá trị mặc định 0
            $table->boolean('anHien')->default(1); // Tạo trường anHien với giá trị mặc định 1
            $table->string('urlHinh', 200)->nullable(); // Tạo trường urlHinh nullable
            $table->timestamps(); // Tạo trường created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('loaiSP'); // Xóa bảng nếu rollback
    }
}
