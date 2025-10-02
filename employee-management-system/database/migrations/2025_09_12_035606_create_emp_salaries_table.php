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
    Schema::create('emp_salaries', function (Blueprint $table) {
        $table->unsignedBigInteger('empID');     // Foreign Key
        $table->unsignedBigInteger('ptID');      // Foreign Key
        $table->decimal('Salary', 10, 2);       // เงินเดือน (ทศนิยม 2 ตำแหน่ง)
        $table->timestamps();
        
        // กำหนด Primary Key แบบ Composite
        $table->primary(['empID', 'ptID']);
        
        // กำหนด Foreign Key Constraints
        $table->foreign('empID')->references('empID')->on('employees')->onDelete('cascade');
        $table->foreign('ptID')->references('ptID')->on('positions')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_salaries');
    }
};
