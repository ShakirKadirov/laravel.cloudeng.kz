<!-- filepath: /Users/shakirkadirov/Developer/laravel_cloudeng/my-laravel-project/resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center py-5">
        <h1 class="display-4">Welcome to Laravel</h1>
        <p class="lead">This project is powered by <strong>PHP</strong> and <strong>Laravel</strong>.</p>
        <img src="{{ asset('images/laravel-logo.png') }}" alt="Laravel Logo" class="img-fluid my-4" style="max-width: 200px;">
        <div class="mt-4">
            <a href="https://laravel.com" class="btn btn-primary">
                <i class="fab fa-laravel"></i> Learn More About Laravel
            </a>
            <a href="https://www.php.net" class="btn btn-secondary">
                <i class="fab fa-php"></i> Learn More About PHP
            </a>
        </div>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>