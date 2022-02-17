<?php
$model			= new \App\Models\Administrator\Signin\SigninModel();
$formInput	= $model->formInput;
$formButton	= $model->formButton;
?>

<div ng-controller="signinCtrl">
	<div class="d-flex flex-column align-items-center justify-content-center vh-100">
		<div class="login px-3 py-4">
			<div role="alert" ng-class="{'alert alert-dismissible fade show': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error'}" ng-if="flash">
				{{flash.message}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<h1 class="text-center my-4">Masuk</h1>
			<form id="signinForm" class="my-4" name="signinForm" accept-charset="utf-8" ng-submit="submit('authenticate')" form-validate="errors" novalidate>
				<div class="form-group">
					<?= form_input($formInput['name']); ?>
					<div class="invalid-feedback" ng-class="{'d-block': signinForm.$errText.name.$invalid}" ng-bind="signinForm.$errText.name.message"></div>
				</div>
				<div class="form-group">
					<div class="d-flex align-items-center">
						<?= form_input($formInput['pass']); ?>
						<span id="eye" class="position-absolute waves" ng-click="showHidePassword()">
							<i class="far fa-fw {{showHideEye}}"></i>
						</span>
					</div>
					<div class="invalid-feedback" ng-class="{'d-block': signinForm.$errText.pass.$invalid}" ng-bind="signinForm.$errText.pass.message"></div>
				</div>
				<div class="form-group text-right">
					<a href="forgotPassword">Lupa sandi?</a>
				</div>
				<?= form_button($formButton['submit']); ?>
			</form>
			<p class="text-center mb-0">Belum punya akun? <a href="signup">Daftar</a></p>
		</div>
	</div>
</div>