<div class="navbar navbar-default" id="navbar-second">
	<ul class="nav navbar-nav no-border visible-xs-block">
		<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
	</ul>

	<div class="navbar-collapse collapse" id="navbar-second-toggle">
		<ul class="nav navbar-nav navbar-nav-material">

			@if(Auth::user()->role === 'admin')
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Manage <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-250">

						<li class="dropdown-header">Manage Sections</li>

						<li><a href="{{ route('factories.index') }}"><i class="icon-store2"></i> Factories</a></li>
						<li><a href="{{ route('items.index') }}"><i class="icon-file-empty"></i> Items</a></li>
						<li><a href="{{ route('labs.index') }}"><i class="icon-library2"></i> Labs</a></li>
						<li><a href="{{ route('standards.index') }}"><i class="icon-certificate"></i> Standards</a></li>
						<li><a href="{{ route('users.index') }}"><i class="icon-users2"></i> Users</a></li>
						<li><a href="{{ route('vendors.index') }}"><i class="icon-ship position-left"></i> Vendors</a></li>

					</ul>

				</li>

				<li class="dropdown">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-safe position-left"></i> Item Test Records <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-250">
						<li class="dropdown-header">Manage Sections</li>
						<li><a href="{{ route('items-test-records.index') }}"><i class="icon-cog4"></i> Manage</a></li>
						<li><a href="{{ route('items-test-records.create') }}"><i class="icon-add"></i> Add New</a></li>
					</ul>

				</li>
			@endif
			<li><a href="{{ route('export-coc') }}"><i class="icon-cc position-left"></i> Export Cerfiticate of Conformity</a></li>
			<li><a href="{{ route('export-item-test-report') }}"><i class="icon-database-export position-left"></i> Export Item Safety Test</a></li>
			<li><a href="{{ route('export-item-test-reports-all') }}"><i class="icon-database-export position-left"></i> Export All Safety Tests</a></li>
		</ul>
	</div>
</div>