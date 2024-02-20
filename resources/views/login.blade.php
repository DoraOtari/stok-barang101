<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main> 
        <div class="row d-flex justify-content-center vh-100 align-items-center mx-0"style="background-color: darkorchid">
            @if (session('pesan'))
                <div class="alert alert-success" role="alert">
                    <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
                </div>
            @endif
            <div class="col-lg-4">
                <img src="{{ asset('gambar-login.png') }}" class="img-fluid">
            </div>
            <div class="col-lg-4">
                <div class="card shadow-lg" style="background-color: rgba(255, 255, 255, 0.4);">
                    <div class="card-body">
                        <h4 class="card-title">SignUp</h4>
                        <p class="card-text">silahkan login untuk melanjutkan</p>
                        <form action="{{ url('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    placeholder="masukan username anda" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="masukan password anda" />
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn" style="background-color: blueviolet;color: white">
                                    Submit
                                </button>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('/register') }}" class="text-white my-2">
                                    Belum punya akun? Daftar Sekarang
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
