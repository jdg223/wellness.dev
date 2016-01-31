<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	@include('partials.header')
		<body class="dashboard">
		  @include('partials.nav')
		  @include('partials.menubar')
		  @include('partials.gridmenu')

			
		  @yield('content')


		  @include('partials.footer')
		  @yield('scripts')
		</body>
</html>