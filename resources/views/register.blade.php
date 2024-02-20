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
        <div class="row d-flex justify-content-center vh-100 align-items-center mx-0"
            style="background-color: palevioletred">
            <div class="col-lg-4">
                <img src="{{ asset('gambar-login.png') }}" class="img-fluid">
            </div>
            <div class="col-lg-4">
                <div class="card shadow-lg" style="background-color: rgba(255, 255, 255, 0.4);">
                    <div class="card-body">
                        <h4 class="card-title">Register</h4>
                        <p class="card-text">Daftar terlebih dahulu</p>
                        <form action="{{ url('register') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap"
                                    placeholder="masukan anda lengkap anda" />
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" name="role" id="role">
                                    <option selected>--pilih satu--</option>
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>

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
                                <button type="submit" class="btn" style="background-color: deeppink;color: white">
                                    Submit
                                </button>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('/login') }}" class="text-white my-2">
                                    sudah punya akun? Login Sekarang
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
