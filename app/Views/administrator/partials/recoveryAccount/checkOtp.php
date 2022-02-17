<?php
$model			= new \App\Models\Administrator\RecoveryAccount\RecoveryAccountModel();
$formInput	= $model->formInput;
$formButton	= $model->formButton;
?>

<div ng-controller="forgotPasswordCtrl">
	<div class="d-flex flex-column align-items-center justify-content-center vh-100">
		<div class="forgot-password px-3 py-4">
			<h1 class="text-center">Masukkan kode OTP</h1>
			<p class="text-center">Periksa pesan masuk e-mail Anda, buka pesan baru yang telah Kami kirimkan. Salin kode OTP dan masukkan pada kolom bawah ini.</p>
			<form id="otpForm" class="my-4" name="forgotPasswordForm" ng-submit="submit('recoveryAccount/checkOtp')" form-validate="errors" novalidate>
				<div class="form-group">
					<?= form_input($formInput['otp'], '', $formInput['inputClass']); ?>
					<div class="invalid-feedback" ng-class="{'d-block': forgotPasswordForm.$errText.otp.$invalid}" ng-bind="forgotPasswordForm.$errText.otp.message"></div>
				</div>
				<?= form_button($formButton['submit'], $formButton['spinner'] . 'Verifikasi OTP'); ?>
			</form>
			<p class="text-center mb-0">Sudah punya akun? <a href="signin">Masuk</a></p>
		</div>
	</div>
</div>