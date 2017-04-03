<?php
include_once './all_cities.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Find a worker</title>
	<!-- Google Material Design Lite -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<!-- getmdl-select -->
	<link rel="stylesheet" type="text/css" href="getmdl-select/getmdl-select.css">
	<script type="text/javascript" src="getmdl-select/getmdl-select.js"></script>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- Always shows a header, even in smaller screens. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">

		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<!-- Title -->
				<span class="mdl-layout-title">Find My Worker!</span>
			</div>
		</header>

		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Employer's name</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="">My profile</a>
				<a class="mdl-navigation__link" href="">Link</a>
				<a class="mdl-navigation__link" href="">Link</a>
				<a class="mdl-navigation__link" href="">Logout</a>
			</nav>
		</div>

		<main class="mdl-layout__content">
			<div class="page-content">

				<!-- Search Box -->
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--10-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
							<input class="mdl-textfield__input" list="skills" id="skillInput" autofocus autocomplete>
							<datalist id="skills"></datalist>
							<label class="mdl-textfield__label" for="skillInput">What skill are you looking for?</label>
						</div>
					</div>
					<div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
							<input class="mdl-textfield__input" list="cities" id="cityInput" autofocus autocomplete>
							<datalist id="cities">
							<?php
								foreach ($all_cities as $city) {
									echo "<option value='$city'></option>";
								}
							?>
							</datalist>
							<label class="mdl-textfield__label" for="cityInput">City</label>
						</div>
					</div>
				</div>

				<!-- Search Results -->
				<div class="mdl-grid">
					<div class="mdl-layout-spacer"></div>
					<div id="resultCell" class="mdl-cell mdl-cell--10-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>
					<div class="mdl-layout-spacer"></div>
				</div>
			</div>
		</main>
	</div>

	<!-- Dialog polyfills -->
	<link rel="stylesheet" type="text/css" href="./dialog-polyfill/dialog-polyfill.css">
	<script type="text/javascript" src="dialog-polyfill/dialog-polyfill.js"></script>
	
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="search.js"></script>
	<dialog id="connectionError" class="mdl-dialog">
		<div class="mdl-dialog__content">
			<p class="errorMsg"></p>
		</div>
		<div class="mdl-dialog__actions mdl-dialog__actions--full-width">
			<button type="button" class="mdl-button close">OK</button>
		</div>
	</dialog>
</body>
</html>