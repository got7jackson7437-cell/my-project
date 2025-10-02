@extends('layouts.app')
@section('title', 'ตำแหน่งงาน')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-briefcase me-2"></i>จัดการตำแหน่งงาน</h2>
                <a href="{{ route('positions.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>เพิ่มตำแหน่งใหม่
                </a>
            </div>
        </div>
    </div>
    
    <!-- Positions Table -->
    <div class="card">
        <div class="card-body">
            @if($positions->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>รหัสตำแหน่ง</th>
                            <th>ชื่อตำแหน่ง</th>
                            <th>วันที่สร้าง</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($positions as $position)
                            <tr>
                                <td>{{ $position->ptID }}</td>
                                <td>{{ $position->ptName }}</td>
                                <td>{{ $position->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info text-center">
                    ยังไม่มีตำแหน่งงานในระบบ
                </div>
            @endif
        </div>
    </div>
</div>
@endsection