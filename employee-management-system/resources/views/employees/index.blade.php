@extends('layouts.app')
@section('title', 'พนักงาน')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>
                    <i class="fas fa-user-tie me-2"></i>
                    จัดการพนักงาน
                </h2>
                <a href="{{ route('employees.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>
                    เพิ่มพนักงานใหม่
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if($employees->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>รหัสพนักงาน</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>ตำแหน่ง</th>
                                        <th>เงินเดือน</th>
                                        <th>วันที่สร้าง</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                        @php
                                            $salary = $employee->empSalaries->first();
                                        @endphp
                                        <tr>
                                            <td>{{ $employee->empID }}</td>
                                            <td>{{ $employee->empTitle }}{{ $employee->empName }} {{ $employee->empLname }}</td>
                                            <td>{{ $salary ? $salary->position->ptName : '-' }}</td>
                                            <td>{{ $salary ? number_format($salary->Salary, 2) . ' บาท' : '-' }}</td>
                                            <td>{{ $employee->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <i class="fas fa-info-circle me-2"></i>
                            ยังไม่มีพนักงานในระบบ
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection