<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="{{ asset('build/img/cmn/logosvg') }}" type="image/svg+xml">
    @vite(['resources/css/reset.css', 'resources/scss/app.scss'])

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/ea21566daa.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<!-- flatpickr -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>

	<!-- DataTables -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" />
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

	<!-- inputmask -->
    @vite(['resources/js/jquery.inputmask.min.js'])

	<!-- 通知はtoastrを利用する -->
</head>

<body>
	<header class="sphd">
		<a class="sphd_logo" href="{{ route('cockpit.dashboard') }}" title="{{ config('app.name', 'Laravel-Admin') }}">
			<svg class="sphd_logo_img" viewBox="0 0 55 46.5">
				<polygon class="-path01" points="54.5,0.5 36.54,5.34 36.67,46 54.5,46 "></polygon>
				<polygon class="-path02" points="0.5,15.04 18.5,10.2 54.3,46 36.67,46 18.46,27.79 18.46,46 0.5,46 "></polygon>
			</svg>
			<span class="sphd_logo_ttl">NMS</span>
		</a>
		<button id="sphd_menu" class="sphd_menu" type="button">
			<span class="-top"></span>
			<span class="-btm"></span>
		</button>
	</header>
	<div class="wrapper">
        <x-side-nav />
		<main class="main">
			<header class="main_hd">
				<h1 class="main_hd_ttl mb-0">{{ $title }}</h1>
                <x-bread-crumd :breadcrumd="$bread_crumd" />
			</header>
			<div class="main_cnt">
				{{ $slot }}
			</div>
		</main>
		<footer class="footer">
			<div class="footer_copy">© <a class="-noicon" href="https://www.networld-jp.net/" target="_blank">NETWORLD INC</a>. All Rights Reserved.</div>
			<dl class="footer_ver">
				<dt>Version</dt>
				<dd>1.0.0</dd>
			</dl>
		</footer>
	</div>
	<script>
		$(":input").inputmask();

		flatpickr(".calendar", {
			'locale': 'ja',
		});
	</script>
    @vite(['resources/js/common.js'])
    @vite(['resources/js/main.js'])
</body>

</html>