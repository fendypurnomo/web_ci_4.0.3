<?php
$model			= new \App\Models\Administrator\RecoveryAccount\RecoveryAccountModel();
$formInput	= $model->formInput;
$formButton	= $model->formButton;
?>

<div ng-controller="forgotPasswordCtrl">
	<div class="d-flex flex-column align-items-center justify-content-center vh-100">
		<div class="forgot-password px-3 py-4">
			<h1 class="text-center">Setel Ulang Kata Sandi</h1>
			<p class="text-center">Masukkan kata sandi baru Anda pada kolom bawah ini untuk mensetel ulang kata sandi Anda.</p>
			<form id="resetPasswordForm" class="my-4" name="forgotPasswordForm" ng-submit="submit('recoveryAccount/resetPassword')" form-validate="errors" novalidate>
				<div class="form-group">
					<?= form_password($formInput['newPass'], '', $formInput['inputClass']); ?>
					<div class="invalid-feedback" ng-class="{'d-block': forgotPasswordForm.$errText.newPass.$invalid}" ng-bind="forgotPasswordForm.$errText.newPass.message"></div>
				</div>
				<div class="form-group">
					<?= form_password($formInput['confirmNewPass'], '', $formInput['inputClass']); ?>
					<div class="invalid-feedback" ng-class="{'d-block': forgotPasswordForm.$errText.confirmNewPass.$invalid}" ng-bind="forgotPasswordForm.$errText.confirmNewPass.message"></div>
				</div>
				<?= form_button($formButton['submit'], $formButton['spinner'] . 'Perbaharui Kata Sandi'); ?>
			</form>
			<p class="text-center mb-0">Sudah punya akun? <a href="signin">Masuk</a></p>
		</div>
	</div>
</div>