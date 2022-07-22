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
            <form action="<?= base_url('auth/registerUserDetails')?>" method="POST">
            <input type="hidden" value=<?= $name?> name="name">
            <input type="hidden" value=<?= $email?> name="email">
            <input type="hidden" value=<?= $password?> name="password">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" id="nis" class="form-control" name="nis" >
            <small class="text-danger"><?= form_error('name'); ?></small>

            <label for="jurusan" class="form-label">Jurusan</label>
            
            <select name="jurusan" id="jurusan" class="form form-control">
                <option value="">Pilih Jurusan</option>
                <option value="rpl">Rekayasa Perangkat Lunak</option>
                <option value="tkj">Teknik Komputer dan jaringan</option>
                <option value="mm">Multimedia</option>
                <option value="bc">Broadcasting</option>
                <option value="akuntansi">Akuntansi</option> 
            </select>
            <small class="text-danger"><?= form_error('email'); ?></small>

        

            <label for="tahunLulus" class="form-label">Tahun Lulus</label>
            <input type="number" min="2020" max="2099" value="2020" id="tahunLulus" class="form-control" name="graduate_year">
            <small class="text-danger"><?= form_error('graduate_year'); ?></small>

            <label for="phone_number" class="form-label">Nomor Telepon</label>
            <input type="number" id="phone_number" class="form-control" aria-describedby="passwordHelpBlock" name="phone_number">
            <small class="text-danger"><?= form_error('password1'); ?></small>
            
            
           
            <button class="btn btn-primary btn-login " type="submit">Buat Akun</button>
            </form>
            </div>
        </span>
       
        </div>
    </div>

</section>