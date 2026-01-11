<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom Auth CSS -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="page-transition">


<div class="auth-bg">
    <div class="auth-card" id="authCard">
        @yield('content')
    </div>
</div>



<script>
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            if (!href || href.startsWith('#') || this.target === '_blank') return;

            e.preventDefault();
            document.body.classList.add('page-fade-out');

            setTimeout(() => {
                window.location.href = href;
            }, 300);
        });
    });
</script>



</body>
</html>
