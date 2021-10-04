<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>KTA - KOSOVA TOURING ASSISTANCE</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('css/global/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('js/theme/main/jquery.min.js')}}"></script>
	<script src="{{asset('js/theme/main/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('js/theme/app.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button type="button" class="navbar-toggler sidebar-mobile-main-toggle">
				<i class="icon-transmission"></i>
			</button>
			<button data-target="#navbar_search" type="button" class="navbar-toggler" data-toggle="collapse">
				<i class="icon-search4"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="{{asset('images/logo.png')}}" class="d-none d-sm-block" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar_search">
			<div class="navbar-search d-flex align-items-center py-3 py-lg-0">
				<div class="form-group-feedback form-group-feedback-left flex-grow-1">
					<input type="text" class="form-control" placeholder="Search">
					<div class="form-control-feedback">
						<i class="icon-search4 text-white opacity-50"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="order-1 order-lg-2 d-flex flex-1 flex-lg-0 justify-content-end align-items-center">
			<span class="badge badge-success d-none d-lg-inline-block mr-3">Active</span>

			<ul class="navbar-nav flex-row align-items-center h-100">
				<li class="nav-item nav-item-dropdown-lg dropdown">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="modal" data-target="#notifications">
						<i class="icon-bell2"></i>
						<span class="badge badge-warning badge-pill">3</span>
					</a>
				</li>

				<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
						<img src="../../../../global_assets/images/demo/users/face11.jpg" class="rounded-pill" height="34" alt="">
						<span class="d-none d-lg-inline-block ml-2">Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right wmin-lg-250 py-2">
						<div class="dropdown-item d-flex py-2">
							<div class="flex-1">
								<div class="font-weight-semibold">Account summary</div>
								<span class="text-muted font-size-sm">Profile, overview</span>
							</div>
							<span class="btn btn-dark-100 btn-icon btn-sm text-body border-transparent rounded-pill ml-1">
								<i class="icon-arrow-right8"></i>
							</span>
						</div>

						<div class="dropdown-item d-flex py-2">
							<div class="flex-1">
								<div class="font-weight-semibold">Privacy</div>
								<span class="text-muted font-size-sm">Access, permissions</span>
							</div>
							<span class="btn btn-dark-100 btn-icon btn-sm text-body border-transparent rounded-pill ml-1">
								<i class="icon-arrow-right8"></i>
							</span>
						</div>

						<div class="dropdown-item d-flex py-2">
							<div class="flex-1">
								<div class="font-weight-semibold">Payments</div>
								<span class="text-muted font-size-sm">Expenses, subscription</span>
							</div>
							<span class="btn btn-dark-100 btn-icon btn-sm text-body border-transparent rounded-pill ml-1">
								<i class="icon-arrow-right8"></i>
							</span>
						</div>

						<div class="dropdown-item d-flex py-2">
							<div class="flex-1">
								<div class="font-weight-semibold">Settings</div>
								<span class="text-muted font-size-sm">Security, app config</span>
							</div>
							<span class="btn btn-dark-100 btn-icon btn-sm text-body border-transparent rounded-pill ml-1">
								<i class="icon-arrow-right8"></i>
							</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg align-self-start">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- Header -->
				<div class="sidebar-section sidebar-header">
					<div class="sidebar-section-body d-flex align-items-center justify-content-center pb-0">
						<h5 class="sidebar-resize-hide flex-1 mb-0">Navigation</h5>
						<div>
							<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
								<i class="icon-transmission"></i>
							</button>

							<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
								<i class="icon-cross2"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- /header -->


				<!-- User menu -->
				<div class="sidebar-section sidebar-user">
					<div class="sidebar-section-body d-flex justify-content-center">
						<a href="#">
							<img src="{{asset('images/default_user.png')}}" class="rounded-circle" alt="">
						</a>

						<div class="sidebar-resize-hide flex-1 ml-3">
							<div class="font-weight-semibold">Besart Zeka</div>
							<div class="font-size-sm line-height-sm text-muted">
								Web developer
							</div>
						</div>
					</div>
				</div>					
				<!-- /user menu -->

				
				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<!-- /main -->

						<!-- Layout -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu nav-item-open nav-item-expanded">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_navbar_fixed.html" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_navbar_hideable.html" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_no_header.html" class="nav-link active">No header</a></li>
								<li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
								<li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
								<li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
								<li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>
						<!-- /layout -->
							
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Basic card -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Basic card</h5>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Start your development with no hassle!</h6>
						<p class="mb-3">Common problem of templates is that all code is deeply integrated into the core. This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra code easily just by removing the path to specific LESS file with component styling. All plugins and their options are also in separate files. Use only components you actually need!</p>

						<h6 class="font-weight-semibold">What is this?</h6>
						<p class="mb-3">Starter kit is a set of pages, useful for developers to start development process from scratch. Each layout includes base components only: layout, page kits, color system which is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup. CSS files are compiled without any plugins or components. Starter kit was moved to a separate folder for better accessibility.</p>

						<h6 class="font-weight-semibold">How does it work?</h6>
						<p>You open one of the starter pages, add necessary plugins, uncomment paths to files in components.less file, compile new CSS. That's it. I'd also recommend to open one of main pages with functionality you need and copy all paths/JS code from there to your new page, it's just faster and easier.</p>
					</div>
				</div>
				<!-- /basic card -->


				<!-- Basic table -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Basic table</h5>
					</div>

					<div class="card-body">
						Seed project includes the most basic components that can help you in development process - basic grid example, card, table and form layouts with standard components. Nothing extra. Easily turn on and off styles of different components in <code>_config.scss</code> file so that your CSS is always as clean as possible. Bootstrap components are always enabled though.
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /basic table -->


				<!-- Form layouts -->
				<div class="row">
					<div class="col-lg-6">

						<!-- Horizontal form -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Horizontal form</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
		                	</div>

		                	<div class="collapse show">
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Text input</label>
											<div class="col-lg-9">
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Password</label>
											<div class="col-lg-9">
												<input type="password" class="form-control">
											</div>
										</div>

				                        <div class="form-group row">
				                        	<label class="col-lg-3 col-form-label">Select</label>
				                        	<div class="col-lg-9">
					                            <select name="select" class="custom-select">
					                                <option value="opt1">Basic select</option>
					                                <option value="opt2">Option 2</option>
					                                <option value="opt3">Option 3</option>
					                                <option value="opt4">Option 4</option>
					                                <option value="opt5">Option 5</option>
					                                <option value="opt6">Option 6</option>
					                                <option value="opt7">Option 7</option>
					                                <option value="opt8">Option 8</option>
					                            </select>
				                            </div>
				                        </div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Textarea</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
											</div>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /horizotal form -->

					</div>

					<div class="col-lg-6">

						<!-- Vertical form -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Vertical form</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
		                	</div>

		                	<div class="collapse show">
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Text input</label>
											<input type="text" class="form-control">
										</div>

				                        <div class="form-group">
				                        	<label>Select</label>
				                            <select name="select" class="custom-select">
				                                <option value="opt1">Basic select</option>
				                                <option value="opt2">Option 2</option>
				                                <option value="opt3">Option 3</option>
				                                <option value="opt4">Option 4</option>
				                                <option value="opt5">Option 5</option>
				                                <option value="opt6">Option 6</option>
				                                <option value="opt7">Option 7</option>
				                                <option value="opt8">Option 8</option>
				                            </select>
				                        </div>

										<div class="form-group">
											<label>Textarea</label>
											<textarea rows="4" cols="4" class="form-control" placeholder="Default textarea"></textarea>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /vertical form -->

					</div>
				</div>
				<!-- /form layouts -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-third">
				<i class="icon-menu mr-2"></i>
				Bottom navbar
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-third">
			<span class="navbar-text">
				&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
			</span>

			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item"><a href="#" class="navbar-nav-link">Help center</a></li>
				<li class="nav-item"><a href="#" class="navbar-nav-link">Policy</a></li>
				<li class="nav-item"><a href="#" class="navbar-nav-link font-weight-semibold">Upgrade your account</a></li>
				<li class="nav-item dropup">
					<a href="#" class="navbar-nav-link" data-toggle="dropdown">
						<i class="icon-share4 d-none d-lg-inline-block"></i>
						<span class="d-lg-none">Share</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-dribbble3"></i> Dribbble</a>
						<a href="#" class="dropdown-item"><i class="icon-pinterest2"></i> Pinterest</a>
						<a href="#" class="dropdown-item"><i class="icon-github"></i> Github</a>
						<a href="#" class="dropdown-item"><i class="icon-stackoverflow"></i> Stack Overflow</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /footer -->

</body>
</html>
