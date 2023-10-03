<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Hapus baris berikut -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Tambahkan ini di dalam bagian <head> dokumen HTML Anda -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/login/log-user/main.css">
    <style>
        .login-reg-panel {
            display: flex;
            flex-direction: row;
        }

        .register-show {
            display: none;
        }
    </style>
    <title>Login</title>
</head>
<body>

<div class="login-reg-panel">
    <div class="login-info-box">
        <h2><span>Welcome Back!</span></h2>
        <label id="label-register" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
    </div>

    <div class="register-info-box">
        <h2>Belum punya akun?</h2>
        <label id="label-login" for="log-login-show">Daftar</label>
        <input type="radio" name="active-log-panel" id="log-login-show">
    </div>

    <div class="white-panel">
        <div class="login-show" id="login-show">
            <!-- Form login -->
            <?php 
            echo validation_errors(' <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i></h5>',' </div>');

            if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i></h5>';
                echo $this->session->flashdata('error');
                echo '</div>';
            }

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Succes</h5>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            echo form_open('auth/login_user');
            ?>
            <form class="form-detail" action="<?= site_url('auth/login_user') ?>" method="post">
                <div class="form-row">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <div class="form-row">
                        <div class="form-row">
                        <div class="col-12">
                            <!-- Tambahkan reCAPTCHA di sini dengan margin-bottom untuk memberikan jarak ke bawah -->
                            <div class="g-recaptcha" data-sitekey="6LcNk0AoAAAAAKOZGYjmPymET--Zvke2-KWiRuKs" style="margin-bottom: 20px;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-8">
                            <a href="<?= base_url() ?>" class="btn btn-success btn-lg btn-block">
                            <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                        <div class="col-8 text-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="register-show" id="register-show">
            <h2>DAFTAR</h2>
            <!-- Form registration -->
            <form class="form-detail" action="<?= site_url('auth/register_user') ?>" method="post">
                <div class="form-row">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="confirm_password" placeholder="Konfirmasi Password">
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>template/login/log-user/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function closeAlert(button) {
        const alert = button.parentElement;
        alert.style.display = "none"; // Menyembunyikan elemen alert saat tombol close diklik
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Saat halaman dimuat ulang, panggil fungsi displayActiveTab lagi
    window.addEventListener("beforeunload", () => {
        displayActiveTab();
    });

    window.setTimeout(function () {
        console.log("Before alert fade");
        $('.alert').fadeTo(500, 0).slideUp(500, function () {
            console.log("After alert fade");
            $(this).remove();
        });
    }, 3000);

    document.addEventListener("DOMContentLoaded", function () {
    const logRegShow = document.getElementById("log-reg-show");
    const logLoginShow = document.getElementById("log-login-show");
    const loginShow = document.getElementById("login-show");
    const registerShow = document.getElementById("register-show");

    // Inisialisasi tampilan awal
    loginShow.style.display = "block";
    registerShow.style.display = "none";

    logRegShow.addEventListener("click", function () {
        loginShow.style.display = "none";
        registerShow.style.display = "block";
    });

    logLoginShow.addEventListener("click", function () {
        loginShow.style.display = "block";
        registerShow.style.display = "none";
    });
});
</script>
</body>
</html>
