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
    Schema::create('employees', function (Blueprint $table) {
        $table->id('empID');          // Primary Key auto increment
        $table->string('empTitle');   // คำนำหน้า (นาย, นาง, นางสาว)
        $table->string('empName');    // ชื่อ
        $table->string('empLname');   // นามสกุล
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
