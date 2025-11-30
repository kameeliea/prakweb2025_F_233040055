<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
</head>

<body class="p-6">
    <nav>
        <a href="/">Home</a> |
        <a href="/categories">Categories</a> |
        <a href="/posts">Posts</a>
    </nav>
    <hr>
    {{ $slot }}
    <hr>
    <footer>Footer &copy; 2025</footer>
</body>

</html>