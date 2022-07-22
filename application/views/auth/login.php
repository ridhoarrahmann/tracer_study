<section class='w-100 h-100'>
    <div class="row">
        <div class="col-md-6 d-none d-lg-block .d-xl-none " data-bg-size="cover" data-bg-position="center">
            <img src="<?= base_url('assets/img/auth.jpg')?>" class="img-as-bg" >
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
        <span>
            <center>
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="logo">
            </center>
            
            <h2>Selamat Datang !</h2>
            <h5>Masuk ke akun untuk melanjutkan</h5>
            <div class="login-form">
            <form action="<?= base_url('auth') ?>" method="POST">
            <label for="email" class="form-label">email</label>
            <input type="email" id="email" class="form-control" name='email' >

            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name='password' class="form-control" aria-describedby="passwordHelpBlock">

            <small><a href="<?= base_url('auth/register') ?>">Belum memiliki Akun?</a></small>
            <br>
            
            <button class="btn btn-primary btn-login " type="submit">Login</button>
            </form>
            </div>
        </span>
       
        </div>
    </div>

</section>