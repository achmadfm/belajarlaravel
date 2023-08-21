<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Sistem Blade template Laravel</title>
</head>

<body>
    <header>
        <h2>Blog Achmad Fausi M</h2>
        <nav>
            <a href="/">Home</a>
            |
            <a href="/tentang">Tentang</a>
            |
            <a href="/kontak">Kontak</a>
        </nav>
    </header>
    <br />
    <br />
    <br />

    <h3>@yield('judul')</h3>

    @yield('konten')

    <br />
    <br />
    <hr />
    <footer>
        <p>Copyright &copy; 2023-2024 <a href="#">www.saika.co.id</a></p>
    </footer>
</body>

</html>