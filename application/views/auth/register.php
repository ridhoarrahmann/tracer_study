<section class='w-100 h-100'>
    <div class="row">
        <div class="col-md-6 d-none d-lg-block .d-xl-none " data-bg-size="cover" data-bg-position="center">
            <img src="<?= base_url('assets/img/auth.jpg')?>" class="img-as-bg" >
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
        <span>
            <h2>Selamat Datang !</h2>
            <h5>Daftar akun untuk melanjutkan</h5>
            <div class="register-form">
            <form action="<?= base_url('auth/register')?>" method="POST">

            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" id="namaLengkap" class="form-control" name="name" >
            <small class="text-danger"><?= form_error('name'); ?></small>
            <label for="email" class="form-label">E-Mail</label>
            <input type="email" id="email" class="form-control" name="email">
            <small class="text-danger"><?= form_error('email'); ?></small>

            <!-- <label for="nisn" class="form-label">NISN</label>
            <input type="text" id="nisn" class="form-control" name="nis" >
            <small class="text-danger"><?= form_error('nis'); ?></small>

            <label for="tahunLulus" class="form-label">Tahun Lulus</label>
            <input type="number" min="2020" max="2099" value="2020" id="tahunLulus" class="form-control" name="graduate_year">
            <small class="text-danger"><?= form_error('graduate_year'); ?></small> -->

            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password1">
            <small class="text-danger"><?= form_error('password1'); ?></small>
            
            <label for="password" class="form-label"> Confirm Password</label>
            <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password2">
            <small class="text-danger"><?= form_error('password2'); ?></small>
            
            <small><a href="">Sudah memiliki Akun? Login</a></small>
            <br>
            
            <button class="btn btn-primary btn-login " type="submit">Selanjutnya</button>
            </form>
            </div>
        </span>
       
        </div>
    </div>

</section>