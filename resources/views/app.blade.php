<!DOCTYPE html>
<html lange = "en">
	<head>
		<meta name="viewpoet" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-tocken" content="{{ csrf-tocken() }}">
		<link rel="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/x-icon" href="/favicon.icon">
		<title>Roast</title>
		<script type="text/javascript">
			windows.Laravel = <?php echo json_encode(['csrfTocken' => csrf_tocken()]); ?>
		</script>
	</head>
	<body>
		<div id="app">
			<router-view></router-view>
		</div>
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	</body>
</html>