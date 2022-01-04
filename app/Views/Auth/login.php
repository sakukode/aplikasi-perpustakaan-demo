<?php echo $this->extend('App\Views\layouts\secondary'); ?>

<?php echo $this->section('title'); ?>
Masuk
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<p class="login-box-msg">Silahkan login dengan akun Kamu</p>

<?php echo view('App\Auth\_message_block'); ?>

<form action="<?php echo route_to('login'); ?>" method="post">
	<?php echo csrf_field(); ?>

	<?php if ($config->validFields === ['email']) : ?>
		<div class="input-group mb-3">
			<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?php echo lang('Auth.email'); ?>">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-envelope"></span>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="input-group mb-3">
			<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?php echo lang('Auth.emailOrUsername'); ?>">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-envelope"></span>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="input-group mb-3">
		<input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-lock"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<?php if ($config->allowRemembering) : ?>
			<div class="col-8">
				<div class="icheck-primary">
					<input type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
					<label for="remember">
						Ingat Saya
					</label>
				</div>
			</div>
		<?php endif; ?>
		<!-- /.col -->
		<div class="col-4">
			<button type="submit" class="btn btn-primary btn-block">Masuk</button>
		</div>
		<!-- /.col -->
	</div>
</form>
<br>
<p class="mb-1">
	<a href="<?php echo route_to('forgot'); ?>">Lupa Password</a>
</p>
<p class="mb-0">
	<a href="<?php echo route_to('register'); ?>" class="text-center">Daftar Member Baru</a>
</p>
<?php echo $this->endSection('content'); ?>