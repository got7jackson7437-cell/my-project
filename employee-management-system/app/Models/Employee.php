<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'empID';
    
    protected $fillable = ['empTitle', 'empName', 'empLname'];
    
    // ความสัมพันธ์กับ Position
    public function positions()
    {
        return $this->belongsToMany(Position::class, 'emp_salaries', 'empID', 'ptID')
                    ->withPivot('Salary');
    }
    
    // ความสัมพันธ์กับ EmpSalary  
    public function empSalaries()
    {
        return $this->hasMany(EmpSalary::class, 'empID');
    }
}