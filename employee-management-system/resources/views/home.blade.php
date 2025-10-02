@extends('layouts.app')

@section('title', 'หน้าแรก - ระบบจัดการพนักงาน')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">
                <i class="fas fa-home me-2"></i>
                ข้อมูลพนักงานทั้งหมด
            </h2>
        </div>
    </div>
    
    @if($employees->isEmpty())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i>
                    ยังไม่มีข้อมูลพนักงานในระบบ
                    <div class="mt-2">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-1"></i>
                            เพิ่มพนักงานใหม่
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- Employee Cards -->
        <div class="row">
            @foreach($employees as $empSalary)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column">
                            <!-- ตำแหน่งงาน (ตัวอักษรใหญ่ หนา) -->
                            <h4 class="card-title text-primary fw-bold mb-3">
                                {{ $empSalary->position->ptName }}
                            </h4>
                            
                            <!-- ชื่อ-สกุล -->
                            <div class="mb-3">
                                <h5 class="text-dark mb-1">
                                    {{ $empSalary->employee->empTitle }}{{ $empSalary->employee->empName }} {{ $empSalary->employee->empLname }}
                                </h5>
                            </div>
                            
                            <!-- เงินเดือนปัจจุบัน -->
                            <div class="mt-auto">
                                <p class="mb-1 text-muted small">เงินเดือนปัจจุบัน</p>
                                <h5 class="text-success fw-bold mb-0">
                                    {{ number_format($empSalary->Salary, 0) }} บาท
                                </h5>
                            </div>
                        </div>
                        
                        <div class="card-footer bg-light border-0">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                อัปเดตล่าสุด: {{ $empSalary->updated_at->format('d/m/Y') }}
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        @if($employees->hasPages())
            <div class="row mt-4">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg">
                                {{-- Previous Page Link --}}
                                @if ($employees->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">
                                            <i class="fas fa-chevron-left"></i>
                                            <span class="ms-1">ก่อนหน้า</span>
                                        </span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $employees->previousPageUrl() }}">
                                            <i class="fas fa-chevron-left"></i>
                                            <span class="ms-1">ก่อนหน้า</span>
                                        </a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($employees->getUrlRange(1, $employees->lastPage()) as $page => $url)
                                    @if ($page == $employees->currentPage())
                                        <li class="page-item active">
                                            <span class="page-link">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($employees->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $employees->nextPageUrl() }}">
                                            <span class="me-1">ถัดไป</span>
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">
                                            <span class="me-1">ถัดไป</span>
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- แสดงข้อมูลการแบ่งหน้า -->
                    <div class="text-center mt-3">
                        <p class="text-muted">
                            แสดงผล {{ $employees->firstItem() }} ถึง {{ $employees->lastItem() }} 
                            จากทั้งหมด {{ $employees->total() }} รายการ
                        </p>
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>

@endsection

@section('styles')
<style>
    .card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }
    
    .pagination .page-link {
        border-radius: 8px;
        margin: 0 2px;
        border: 1px solid #dee2e6;
        color: #495057;
        padding: 12px 16px;
        font-weight: 500;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: white;
        box-shadow: 0 2px 4px rgba(13, 110, 253, 0.25);
    }
    
    .pagination .page-link:hover {
        background-color: #e9ecef;
        border-color: #adb5bd;
        color: #0d6efd;
        text-decoration: none;
    }
    
    .pagination .page-item.disabled .page-link {
        color: #adb5bd;
        background-color: #fff;
        border-color: #dee2e6;
    }
    
    .card-title {
        font-size: 1.1rem;
        line-height: 1.3;
    }
    
    @media (max-width: 768px) {
        .pagination .page-link {
            padding: 8px 12px;
            font-size: 0.9rem;
        }
        
        .pagination .page-link span {
            display: none;
        }
    }
</style>
@endsection