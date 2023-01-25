<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SPP</title>
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/../assets/css/style.css ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="http://127.0.0.1:8000/assets/img/logo.png" alt="logo" width="80" class="">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login Siswa</h4>
                            </div>

                            <span class="text-muted mx-3 mt-2">Silahkan login dengan NISN dan Password yang telah diberikan</span>
                            <div class="card-body">
                                <form method="POST" action="http://127.0.0.1:8000/login/siswa/proses" class="needs-validation" novalidate="">
                                    <input type="hidden" name="_token" value="v8hWBPbQcrsMmlqP8RjA6hIwp3PjCAusJzmEeUsA">
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input id="nisn" type="text" class="form-control" name="nisn" tabindex="1" value="" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your NISN
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            <p>Untuk petugas silahkan login <a href="http://127.0.0.1:8000/login">disini</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://127.0.0.1:8000/../assets/js/scripts.js "></script>
</body>

</html>