@extends('layout')

@section('content')

    <h1>หลักสูตร</h1>
    <a href="{{ route('create') }}" class="btn btn-primary mb-3"> + เพิ่มหลักสูตร</a>
    @if (@session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        
    
        
    @endif

    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <a href="#" class="btn btn-secondary">View</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <form action="#" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>

            </div>
            
        @endforeach

        @else
        <div class="alert alert-info"> ยังไม่มีโพสต์ในระบบ</div>
        
    @endif
@endsection