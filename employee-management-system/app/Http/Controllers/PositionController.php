<?php
namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    // แสดงหน้ารายการตำแหน่ง
    public function index()
    {
        $positions = Position::all();
        return view('positions.index', compact('positions'));
    }
    
    // แสดงฟอร์มเพิ่มตำแหน่ง
    public function create()
    {
        return view('positions.create');
    }
    
    // บันทึกตำแหน่งใหม่
    public function store(Request $request)
    {
        // Validate ข้อมูล
        $request->validate([
            'ptName' => 'required|string|max:255'
        ]);
        
        // บันทึกลงฐานข้อมูล
        Position::create(['ptName' => $request->ptName]);
        
        return redirect()->route('positions.index')
                        ->with('success', 'เพิ่มตำแหน่งสำเร็จ');
    }
}