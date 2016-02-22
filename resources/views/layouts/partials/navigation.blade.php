<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="{{ route('real.main') }}">Homepage</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="page-scroll" href="{{ route('real.main') }}">Main</a></li>
				<li><a class="page-scroll" href="{{ route('real.index') }}">Index</a></li>
				<li><a class="page-scroll" href="{{ route('real.create') }}">Create</a></li>
				<li><a class="page-scroll" href="{{ route('real.show') }}">Show</a></li>
			</ul>
		</div>
	</div>
</nav>
