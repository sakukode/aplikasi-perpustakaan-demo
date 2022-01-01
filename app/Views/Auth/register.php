<?php echo $this->extend('App\Views\layouts\secondary'); ?>

<?php echo $this->section('title');?>
Daftar
<?php echo $this->endSection();?>

<?php echo $this->section('content'); ?>
<p class="login-box-msg">Silahkan Isi Form di bawah ini untuk mendaftar</p>

<?php echo view('App\Views\Auth\_message_block'); ?>

<form action="<?php echo route_to('register'); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="input-group mb-3">
        <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" value="<?php echo old('username'); ?>" placeholder="Username">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" value="<?php echo old('email'); ?>" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" name="fullname" class="form-control <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" value="<?php echo old('fullname'); ?>" placeholder="Nama">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password" autocomplete="off">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Konfirmasi Password" autocomplete="off">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="text" name="phone" class="form-control <?php if (session('errors.phone')) : ?>is-invalid<?php endif ?>" placeholder="No.Hp/Telp" value="<?php echo old('phone'); ?>">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-phone"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <textarea rows="4" name="address" class="form-control <?php if (session('errors.address')) : ?>is-invalid<?php endif ?>" placeholder="Alamat"><?php echo old('address'); ?></textarea>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-map-marker-alt"></span>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </div>
        <!-- /.col -->
    </div>
</form>
<?php echo $this->endSection('content'); ?>