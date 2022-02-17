<?php
$model			= new \App\Models\Administrator\Signup\SignupModel();
$formInput	= $model->formInput;
$classInput	= $model->classInput;
$classRadio	= $model->classRadio;
$classLabel	= $model->classLabel;
$spanDanger	= $model->spanDanger;
$formButton	= $model->formButton;
?>

<div ng-controller="signupCtrl">
	<div class="d-flex flex-column vh-100">
		<div class="container my-auto">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-4">
					<h1 class="text-center">Daftar</h1>
					<form id="signupForm" class="my-4" name="signupForm" ng-submit="submit('registerAccount')" form-validate="errors" novalidate>
						<div class="form-row mx-0">
							<div class="form-group col-md-6 px-0 pr-md-2 pl-md-0">
								<?= form_label('Nama Depan ' . $spanDanger, 'fName'); ?>
								<?= form_input($formInput['fName'], '', $classInput); ?>
								<div class="invalid-feedback" ng-class="{'d-block': signupForm.$errText.fName.$invalid}" ng-bind="signupForm.$errText.fName.message"></div>
							</div>
							<div class="form-group col-md-6 px-0 pr-md-0 pl-md-2">
								<?= form_label('Nama Belakang ' . $spanDanger, 'lName'); ?>
								<?= form_input($formInput['lName'], '', $classInput); ?>
								<div class="invalid-feedback" ng-class="{'d-block': signupForm.$errText.lName.$invalid}" ng-bind="signupForm.$errText.lName.message"></div>
							</div>
						</div>
						<div class="form-row mx-0">
							<div class="form-group col-md-12 px-0">
								<?= form_label('E-mail ' . $spanDanger, 'email'); ?>
								<?= form_input($formInput['email'], '', $classInput); ?>
								<div class="invalid-feedback" ng-class="{'d-block': signupForm.$errText.email.$invalid}" ng-bind="signupForm.$errText.email.message"></div>
							</div>
						</div>
						<div class="form-row mx-0">
							<div class="form-group col-md-12 px-0">
								<?= form_label('Sandi ' . $spanDanger, 'pass'); ?>
								<?= form_password($formInput['pass'], '', $classInput); ?>
								<div class="invalid-feedback" ng-class="{'d-block': signupForm.$errText.pass.$invalid}" ng-bind="signupForm.$errText.pass.message"></div>
							</div>
						</div>
						<div class="form-row mx-0">
							<div class="form-group col-md-12 px-0">
								<?= form_label('Konfirmasi Sandi ' . $spanDanger, 'confirmPass'); ?>
								<?= form_password($formInput['confirmPass'], '', $classInput); ?>
								<div class="invalid-feedback" ng-class="{'d-block': signupForm.$errText.confirmPass.$invalid}" ng-bind="signupForm.$errText.confirmPass.message"></div>
							</div>
						</div>
						<div class="form-row mx-0">
							<div class="form-group col-md-12 px-0">
								<div class="custom-control custom-radio custom-control-inline">
									<?= form_radio($formInput['genderMan'], '1', '', $classRadio); ?>
									<?= form_label('Laki-laki', 'gender', $classLabel); ?>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<?= form_radio($formInput['genderWoman'], '2', '', $classRadio); ?>
									<?= form_label('Perempuan', 'genderWoman', $classLabel); ?>
								</div>
								<div class="invalid-feedback" ng-class="{'d-block': signupForm.$errText.gender.$invalid}" ng-bind="signupForm.$errText.gender.message"></div>
							</div>
						</div>
						<?= form_button($formButton['submit']); ?>
					</form>
					<p class="text-center mb-0">Sudah punya akun? <a href="signin">Masuk</a></p>
				</div>
			</div>
		</div>
	</div>
</div>