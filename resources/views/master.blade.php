<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta id="token" name="token" value="{{ csrf_token() }}" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/style.css" />
		<title>@yield('title') @ Fashion Different</title>
	</head>
	<body>
		<header>
			<h1 class="{{ Route::current()->getName() }}">
				<a href="{{ route('home') }}" title="Fashion Different">Fashion Different</a>
			</h1>
		</header>

		@include('partials.sidebar')

		<main>
			@yield('main')
		</main>

		<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" class="licence-link">Creative Commons BY-NC-SA 4.0</a>

		<script src="/js/script.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		@yield('scripts')
	</body>
</html>