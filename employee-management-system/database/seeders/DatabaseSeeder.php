<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;
use App\Models\Employee;
use App\Models\EmpSalary;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มตำแหน่งงาน
        $positions = [
            'ผู้จัดการ',
            'พนักงานขาย', 
            'เจ้าหน้าที่บัญชี',
            'โปรแกรมเมอร์',
            'พนักงานทั่วไป'
        ];
        
        foreach($positions as $positionName) {
            Position::create(['ptName' => $positionName]);
        }
        
        // เพิ่มพนักงานตัวอย่าง
        $employees = [
            ['empTitle' => 'นาย', 'empName' => 'สมชาย', 'empLname' => 'ใจดี', 'ptID' => 1, 'salary' => 50000],
            ['empTitle' => 'นาง', 'empName' => 'สมหญิง', 'empLname' => 'รักงาน', 'ptID' => 2, 'salary' => 25000],
            ['empTitle' => 'นางสาว', 'empName' => 'สมฤทัย', 'empLname' => 'ขยันทำงาน', 'ptID' => 3, 'salary' => 30000],
        ];
        
        foreach($employees as $emp) {
            $employee = Employee::create([
                'empTitle' => $emp['empTitle'],
                'empName' => $emp['empName'], 
                'empLname' => $emp['empLname']
            ]);
            
            EmpSalary::create([
                'empID' => $employee->empID,
                'ptID' => $emp['ptID'],
                'Salary' => $emp['salary']
            ]);
        }
    }
}