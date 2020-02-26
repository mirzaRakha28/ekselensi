<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin</title>
    <link rel="stylesheet" href="<?=base_url('')?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="<?=base_url('')?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/styles.css">
</head>

<body>
    <div class="login-dark" style="height: 100vh;">
        <span id="gagal"><?= isset($_SESSION['loginGagal']) ? 'gagal' :'' ?></span>
        <?php unset($_SESSION['loginGagal']); ?>
        <form action="<?= base_url('admin/login/userLogin')?>" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <script src="<?=base_url('')?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url('')?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('')?>assets/js/Sidebar-Menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        const gagal = document.querySelector("#gagal");
        if(gagal.innerText == "gagal"){
            Swal.fire({
                title   : 'Login Gagal',
                text    :'Email atau Password Salah!',
                icon    : 'error',
                confirmButtonColor: '#d33',
                confirmButtonText:'<i class="fa fa-thumbs-down"></i> Coba Lagi!',
            })
        }
    </script>
</body>

</html>