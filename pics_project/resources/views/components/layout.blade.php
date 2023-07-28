@props([
    'title' => ''
])

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | PicsProject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg border-bottom bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">PicsProject</a>
            <div class="d-flex">
                @auth
                    <a href="{{ route('image.create') }}" class="btn btn-success">Upload</a>&nbsp;
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary">Profile</a>&nbsp;
                    <x-form action="{{ route('logout') }}" method="POST">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure ?')">Logout</button>
                    </x-form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>&nbsp;
                    <a href="{{ route('register') }}" class="btn btn-danger">Register</a>&nbsp;
                @endauth
            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-light text-muted py-3 mt-5 border-top">
        <div class="container-fluid">
            <p>&copy; 2023 - PicsProject</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
