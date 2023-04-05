<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hello PHP</title>
</head>
<body>
    <nav class="navbar navbar-expand" style="background-color:cornflowerblue;">
        <div class="container">
            <a class="navbar-brand" href="/">Trong Nghia Web</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')
    
    <footer class="bg-light text-center text-lg-start" style="position: fixed; width:100%; bottom: 0;">
        <div class="text-center p-3">
            Copyright 2023: ©Trong Nghia
        </div>
    </footer>

</body>
</html>