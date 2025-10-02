<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $primaryKey = 'ptID';    // กำหนด Primary Key
    
    protected $fillable = ['ptName'];  // ฟิลด์ที่อนุญาตให้ Mass Assignment
    
    // ความสัมพันธ์: Position มีหลาย Employee ผ่าน emp_salaries
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'emp_salaries', 'ptID', 'empID')
                    ->withPivot('Salary');
    }
}