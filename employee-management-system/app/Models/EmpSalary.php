<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpSalary extends Model
{
    protected $fillable = ['empID', 'ptID', 'Salary'];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'empID');
    }
    
    public function position()  
    {
        return $this->belongsTo(Position::class, 'ptID');
    }
}