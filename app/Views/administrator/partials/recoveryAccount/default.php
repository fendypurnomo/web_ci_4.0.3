<?php
$model      = new \App\Models\Administrator\RecoveryAccount\RecoveryAccountModel();
$formInput  = $model->formInput;
$formButton = $model->formButton;
$session    = session();
?>

<div ng-controller="forgotPasswordCtrl">
	<div class="d-flex flex-column align-items-center justify-content-center vh-100">
		<div class="forgot-password px-3 py-4">
			<h1 class="text-center">Lupa sandi?</h1>
			<p class="text-center">Masukkan alamat e-mail Anda pada kolom dibawah ini, Kami akan kirim tautan setel ulang kata sandi Anda.</p>
			<form id="forgotPasswordForm" class="my-4" name="forgotPasswordForm" ng-submit="submit('recoveryAccount/checkEmail')" form-validate="errors" novalidate>
				<div class="form-group">
					<?= form_input($formInput['email'], '', $formInput['inputClass']); ?>
					<div class="invalid-feedback" ng-class="{'d-block': forgotPasswordForm.$errText.email.$invalid}" ng-bind="forgotPasswordForm.$errText.email.message"></div>
				</div>
				<?= form_button($formButton['submit'], $formButton['spinner'] . 'Kirim Email'); ?>
			</form>
			<p class="text-center mb-0">Sudah punya akun? <a href="signin">Masuk</a></p>
		</div>
	</div>
</div>