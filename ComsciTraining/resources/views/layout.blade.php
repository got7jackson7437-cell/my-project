<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">ComsciTraining</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('index') }}">หลักสูตร</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">วิทยากร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ตารางอบรม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ตรวจสอบสถานะ</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>