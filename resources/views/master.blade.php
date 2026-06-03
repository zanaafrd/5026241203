<!DOCTYPE html>
<html>

<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">


        <!-- A grey horizontal navbar that becomes vertical on small screens -->
        <nav class="navbar navbar-expand-sm bg-light">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/blog">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog/tentang">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog/kontak">KONTAK</a>
                </li>
            </ul>

        </nav>
        <hr />
        <br />
        <br />
        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman') </h3>


        <!-- bagian konten blog -->
        @yield('konten')


        <br />
        <br />
        <hr />
        <footer>
            <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
        </footer>
    </div>
</body>

</html>
