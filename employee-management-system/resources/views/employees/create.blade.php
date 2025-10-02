@extends('layouts.app')
@section('title', 'เพิ่มพนักงาน')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        <i class="fas fa-plus me-2"></i>เพิ่มพนักงานใหม่
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        
                        <!-- คำนำหน้า (Radio Buttons) -->
                        <div class="mb-3">
                            <label class="form-label">คำนำหน้า <span class="text-danger">*</span></label>
                            <div class="mt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="empTitle" 
                                           id="mr" value="นาย" {{ old('empTitle') == 'นาย' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="mr">นาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="empTitle" 
                                           id="mrs" value="นาง" {{ old('empTitle') == 'นาง' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="mrs">นาง</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="empTitle" 
                                           id="miss" value="นางสาว" {{ old('empTitle') == 'นางสาว' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="miss">นางสาว</label>
                                </div>
                            </div>
                            @error('empTitle')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- ชื่อ และ สกุล -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="empName" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('empName') is-invalid @enderror" 
                                           id="empName" name="empName" value="{{ old('empName') }}" required>
                                    @error('empName')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="empLname" class="form-label">สกุล <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('empLname') is-invalid @enderror" 
                                           id="empLname" name="empLname" value="{{ old('empLname') }}" required>
                                    @error('empLname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <!-- ตำแหน่ง (Selection) -->
                        <div class="mb-3">
                            <label for="ptID" class="form-label">ตำแหน่ง <span class="text-danger">*</span></label>
                            <select class="form-select @error('ptID') is-invalid @enderror" id="ptID" name="ptID" required>
                                <option value="">เลือกตำแหน่ง</option>
                                @foreach($positions as $position)
                                    <option value="{{ $position->ptID }}" {{ old('ptID') == $position->ptID ? 'selected' : '' }}>
                                        {{ $position->ptName }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ptID')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- เงินเดือน -->
                        <div class="mb-3">
                            <label for="salary" class="form-label">เงินเดือน <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" class="form-control @error('salary') is-invalid @enderror" 
                                       id="salary" name="salary" value="{{ old('salary') }}" step="0.01" min="0" required>
                                <span class="input-group-text">บาท</span>
                            </div>
                            @error('salary')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('employees.index') }}" class="btn btn-secondary me-md-2">
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