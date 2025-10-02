@extends('layout')

@section('content')

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <h1>เพิ่มหลักสูตร</h1>
        
        <div class="mb-3">
            <label for="title">ชื่อหลักสูตร</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content">คำอธิบายหลักสูตร</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="hours">จำนวนชั่วโมงที่เรียน</label>
            <input type="number" name="hours" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
    </form>

@endsection