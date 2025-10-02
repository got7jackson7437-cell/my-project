<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use App\Models\EmpSalary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['empSalaries.position'])->get();
        return view('employees.index', compact('employees'));
    }
    
    public function create()
    {
        $positions = Position::all();
        return view('employees.create', compact('positions'));
    }
    
    public function store(Request $request)
    {
        // Validate ข้อมูล
        $request->validate([
            'empTitle' => 'required|in:นาย,นาง,นางสาว',
            'empName' => 'required|string|max:255',
            'empLname' => 'required|string|max:255', 
            'ptID' => 'required|exists:positions,ptID',
            'salary' => 'required|numeric|min:0'
        ]);
        
        // ใช้ Database Transaction เพื่อความปลอดภัย
        DB::transaction(function () use ($request) {
            // สร้างพนักงานใหม่
            $employee = Employee::create([
                'empTitle' => $request->empTitle,
                'empName' => $request->empName,
                'empLname' => $request->empLname
            ]);
            
            // สร้างข้อมูลเงินเดือน
            EmpSalary::create([
                'empID' => $employee->empID,
                'ptID' => $request->ptID,
                'Salary' => $request->salary
            ]);
        });
        
        return redirect()->route('employees.index')
                        ->with('success', 'เพิ่มพนักงานสำเร็จ');
    }
}