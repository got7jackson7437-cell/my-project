@extends('layouts.app')
@section('title', 'เพิ่มตำแหน่งงาน')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        <i class="fas fa-plus me-2"></i>เพิ่มตำแหน่งงานใหม่
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Form สำหรับเพิ่มตำแหน่ง -->
                    <form action="{{ route('positions.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="ptName" class="form-label">
                                ชื่อตำแหน่ง <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control @error('ptName') is-invalid @enderror" 
                                   id="ptName" 
                                   name="ptName" 
                                   value="{{ old('ptName') }}" 
                                   required>
                            @error('ptName')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('positions.index') }}" class="btn btn-secondary me-md-2">
                                <i class="fas fa-arrow-left me-1"></i>ย้อนกลับ
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>บันทึก
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection