<?php
namespace App\Http\Controllers;

use App\Models\EmpSalary;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลพนักงานพร้อมตำแหน่งและเงินเดือน แบ่งหน้าละ 3 คน
        $employees = EmpSalary::with(['employee', 'position'])
                              ->paginate(3);
        
        return view('home', compact('employees'));
    }
}