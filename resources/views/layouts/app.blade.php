@include ('layouts.header')
<body>
	<div id="app">
		@include('layouts.nav')
		<main class="py-4">
			<div class="container">
				@include('layouts.messages')
				@yield('content')
			</div>
		</main>
	</div>
	@include ('layouts.footer')
</body>
</html>
