<!doctype html>
<html class="fixed has-top-menu">
    <head>
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>@yield('title')</title>
		<meta name="keywords" content="GED" />
		<meta name="description" content="GED">
		<meta name="author" content="Subent congo">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" /> 

        @yield('specific_sheets')

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>

		<script src="{{ asset('master/style-switcher/style.switcher.localstorage.js') }}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header header-nav-menu">
				<div class="logo-container">
					<a href="# class="logo">
						<img src="{{ asset('img/logo.png') }}" width="75" height="35" alt="Porto Admin" />
					</a>
					<button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse" data-bs-target=".header-nav">
						<i class="fas fa-bars"></i>
					</button>

					<!-- start: header nav menu -->
					<div class="header-nav collapse">
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
									<li class="">
									    <a class="nav-link" href="layouts-default.html">
									        Dashboard
									    </a>    
									</li>
									<li class="dropdown">
									    <a class="nav-link dropdown-toggle" href="#">
									        eCommerce
									    </a>
									    <ul class="dropdown-menu">
									        <li>
									            <a class="nav-link" href="ecommerce-dashboard.html">
									                Dashboard
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-products-list.html">
									                Products List
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-products-form.html">
									                Products Form
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-category-list.html">
									                Categories List
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-category-form.html">
									                Category Form
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-coupons-list.html">
									                Coupons List
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-coupons-form.html">
									                Coupons Form
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-orders-list.html">
									                Orders List
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-orders-detail.html">
									                Orders Detail
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-customers-list.html">
									                Customers List
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="ecommerce-customers-form.html">
									                Customers Form
									            </a>
									        </li>
									    </ul>
									</li>
									<li class="dropdown active">
									    <a class="nav-link dropdown-toggle" href="#">
									        Layouts
									    </a>
									    <ul class="dropdown-menu">
									        <li>
									            <a class="nav-link" href="index.html">
									                Landing Page
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-default.html">
									                Default
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-modern.html">
									                Modern
									            </a>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link">
									                Boxed
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="layouts-boxed.html">
									                        Static Header
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-boxed-fixed-header.html">
									                        Fixed Header
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link">
									                Horizontal Menu Header
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="layouts-header-menu.html">
									                        Pills
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-header-menu-stripe.html">
									                        Stripe
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-header-menu-top-line.html">
									                        Top Line
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-dark.html">
									                Dark
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-dark-header.html">
									                Dark Header
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-two-navigations.html">
									                Two Navigations
									            </a>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link">
									                Tab Navigation
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="layouts-tab-navigation-dark.html">
									                        Tab Navigation Dark
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-tab-navigation.html">
									                        Tab Navigation Light
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-tab-navigation-boxed.html">
									                        Tab Navigation Boxed
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-light-sidebar.html">
									                Light Sidebar
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-left-sidebar-collapsed.html">
									                Left Sidebar Collapsed
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-left-sidebar-scroll.html">
									                Left Sidebar Scroll
									            </a>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link">
									                Left Sidebar Big Icons
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="layouts-left-sidebar-big-icons.html">
									                        Left Sidebar Big Icons Dark
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-left-sidebar-big-icons-light.html">
									                        Left Sidebar Big Icons Light
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link">
									                Left Sidebar Panel
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="layouts-left-sidebar-panel.html">
									                        Left Sidebar Panel Dark
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-left-sidebar-panel-light.html">
									                        Left Sidebar Panel Light
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link">
									                Left Sidebar Sizes
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="layouts-sidebar-sizes-xs.html">
									                        Left Sidebar XS
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-sidebar-sizes-sm.html">
									                        Left Sidebar SM
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="layouts-sidebar-sizes-md.html">
									                        Left Sidebar MD
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li>
									            <a class="nav-link" href="layouts-square-borders.html">
									                Square Borders
									            </a>
									        </li>
									    </ul>
									</li>
									<li class="dropdown">
									    <a class="nav-link dropdown-toggle" href="#">
									        Pages
									    </a>
									    <ul class="dropdown-menu">
									        <li>
									            <a class="nav-link" href="pages-signup.html">
									                Sign Up
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-signin.html">
									                Sign In
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-recover-password.html">
									                Recover Password
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-lock-screen.html">
									                Locked Screen
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-user-profile.html">
									                User Profile
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-session-timeout.html">
									                Session Timeout
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-calendar.html">
									                Calendar
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-timeline.html">
									                Timeline
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-media-gallery.html">
									                Media Gallery
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-invoice.html">
									                Invoice
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-blank.html">
									                Blank Page
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-404.html">
									                404
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-500.html">
									                500
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-log-viewer.html">
									                Log Viewer
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="pages-search-results.html">
									                Search Results
									            </a>
									        </li>
									    </ul>
									</li>
									<li class="dropdown dropdown-mega">
									    <a class="nav-link dropdown-toggle" href="#">UI Elements</a>
									    <ul class="dropdown-menu">
									        <li>
									            <div class="dropdown-mega-content">
									                <div class="row">
									                    <div class="col-lg-3">
									                        <ul class="dropdown-mega-sub-nav">
									                            <li>
									                                <a class="nav-link" href="ui-elements-typography.html">
									                                    Typography
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="#">
									                                    Icons <span class="mega-sub-nav-toggle toggled float-end" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
									                                </a>
									                                <ul class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-1 collapse in">
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-icons-elusive.html">
									                                            Elusive
									                                        </a>
									                                    </li>
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-icons-font-awesome.html">
									                                            Font Awesome
									                                        </a>
									                                    </li>
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-icons-line-icons.html">
									                                            Line Icons
									                                        </a>
									                                    </li>
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-icons-meteocons.html">
									                                            Meteocons
									                                        </a>
									                                    </li>
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-icons-box-icons.html">
									                                            Box Icons
									                                        </a>
									                                    </li>
									                                </ul>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-tabs.html">
									                                    Tabs
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-cards.html">
									                                    Cards
									                                </a>
									                            </li>
									                        </ul>
									                    </div>
									                    <div class="col-lg-3">
									                        <ul class="dropdown-mega-sub-nav">
									                            <li>
									                                <a class="nav-link" href="ui-elements-widgets.html">
									                                    Widgets
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-portlets.html">
									                                    Portlets
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-buttons.html">
									                                    Buttons
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-alerts.html">
									                                    Alerts
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-notifications.html">
									                                    Notifications
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-modals.html">
									                                    Modals
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-lightbox.html">
									                                    Lightbox
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-progressbars.html">
									                                    Progress Bars
									                                </a>
									                            </li>
									                        </ul>
									                    </div>
									                    <div class="col-lg-3">
									                        <ul class="dropdown-mega-sub-nav">
									                            <li>
									                                <a class="nav-link" href="ui-elements-sliders.html">
									                                    Sliders
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-carousels.html">
									                                    Carousels
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-accordions.html">
									                                    Accordions
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-toggles.html">
									                                    Toggles
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-nestable.html">
									                                    Nestable
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-tree-view.html">
									                                    Tree View
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-scrollable.html">
									                                    Scrollable
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-grid-system.html">
									                                    Grid System
									                                </a>
									                            </li>
									                        </ul>
									                    </div>
									                    <div class="col-lg-3">
									                        <ul class="dropdown-mega-sub-nav">
									                            <li>
									                                <a class="nav-link" href="ui-elements-charts.html">
									                                    Charts
									                                </a>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="#">
									                                    Animations <span class="mega-sub-nav-toggle toggled float-end" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-2"></span>
									                                </a>
									                                <ul class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-2 collapse">
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-animations-appear.html">
									                                            Appear
									                                        </a>
									                                    </li>
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-animations-hover.html">
									                                            Hover
									                                        </a>
									                                    </li>
									                                </ul>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="#">
									                                    Loading <span class="mega-sub-nav-toggle toggled float-end" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-3"></span>
									                                </a>
									                                <ul class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-3 collapse">
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-loading-overlay.html">
									                                            Overlay
									                                        </a>
									                                    </li>
									                                    <li>
									                                        <a class="nav-link" href="ui-elements-loading-progress.html">
									                                            Progress
									                                        </a>
									                                    </li>
									                                </ul>
									                            </li>
									                            <li>
									                                <a class="nav-link" href="ui-elements-extra.html">
									                                    Extra
									                                </a>
									                            </li>
									                        </ul>
									                    </div>
									                </div>
									            </div>
									        </li>
									    </ul>
									</li>
									<li class="dropdown">
									    <a href="#" class="nav-link dropdown-toggle">More</a>
									    <ul class="dropdown-menu">
									        <li class="dropdown-submenu">
									            <a class="nav-link" href="#">
									                Maps
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="maps-google-maps.html">
									                        Basic
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="maps-google-maps-builder.html">
									                        Map Builder
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="maps-vector.html">
									                        Vector
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li>
									            <a class="nav-link" href="extra-ajax-made-easy.html">
									                Ajax
									            </a>            
									        </li>
									        <li class="">
									            <a class="nav-link" href="mailbox-folder.html">
									                Mailbox
									                <span class="float-end badge badge-primary">182</span>
									            </a>            
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link" href="#">
									                Forms
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="forms-basic.html">
									                        Basic
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="forms-advanced.html">
									                        Advanced
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="forms-validation.html">
									                        Validation
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="forms-layouts.html">
									                        Layouts
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="forms-wizard.html">
									                        Wizard
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="forms-code-editor.html">
									                        Code Editor
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link" href="#">
									                Tables
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link" href="tables-basic.html">
									                        Basic
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="tables-advanced.html">
									                        Advanced
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="tables-responsive.html">
									                        Responsive
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="tables-editable.html">
									                        Editable
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="tables-ajax.html">
									                        Ajax
									                    </a>
									                </li>
									                <li>
									                    <a class="nav-link" href="tables-pricing.html">
									                        Pricing
									                    </a>
									                </li>
									            </ul>
									        </li>
									        <li class="dropdown-submenu">
									            <a class="nav-link" href="#">
									                Menu Levels
									            </a>
									            <ul class="dropdown-menu">
									                <li>
									                    <a class="nav-link">
									                        First Level
									                    </a>
									                </li>
									                <li class="dropdown-submenu">
									                    <a class="nav-link" href="#">
									                        Second Level
									                    </a>
									                    <ul class="dropdown-menu">
									                        <li>
									                            <a class="nav-link">
									                                Second Level Link #1
									                            </a>
									                        </li>
									                        <li>
									                            <a class="nav-link">
									                                Second Level Link #2
									                            </a>
									                        </li>
									                        <li class="dropdown-submenu">
									                            <a class="nav-link" href="#">
									                                Third Level
									                            </a>
									                            <ul class="dropdown-menu">
									                                <li>
									                                    <a class="nav-link">
									                                        Third Level Link #1
									                                    </a>
									                                </li>
									                                <li>
									                                    <a class="nav-link">
									                                        Third Level Link #2
									                                    </a>
									                                </li>
									                            </ul>
									                        </li>
									                    </ul>
									                </li>
									            </ul>
									        </li>
									        <li>
									            <a class="nav-link" href="https://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
									                Front-End <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em>
									            </a>            
									        </li>
									        <li>
									            <a class="nav-link" href="https://www.okler.net/forums/topic/porto-admin-changelog/">
									                Changelog
									            </a>            
									        </li>

								</ul>
							</nav>
						</div>
					</div>
					<!-- end: header nav menu -->
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active" data-target=".search"><i class="bx bx-search"></i></a>
					<form action="https://www.okler.net/previews/porto-admin/4.0.0/pages-search-results.html" class="search nav-form d-none d-xl-inline-block">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
						</div>
					</form>

					<span class="separator"></span>

					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-list-ol"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-end badge badge-default">3</span>
									Tasks
								</div>

								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Generating Sales Report</span>
												<span class="message float-end text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Importing Contacts</span>
												<span class="message float-end text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Uploading something big</span>
												<span class="message float-end text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-1">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-envelope"></i>
								<span class="badge">4</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-end badge badge-default">230</span>
									Messages
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('img/%21sample-user.jpg') }}" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('img/%21sample-user.jpg') }}" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('img/%21sample-user.jpg') }}" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{ asset('img/%21sample-user.jpg') }}" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-end">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-end badge badge-default">3</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="bx bx-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2021</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-end">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-bs-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img/%21logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Default Layout</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Layouts</span></li>

								<li><span>Default</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
                    @yield('content')
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>

								<ul>
									<li>
										<time datetime="2021-04-19T00:00+00:00">04/19/2021</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/%21sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/%21sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/%21sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/%21sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('vendor/jquery-cookie/jquery.cookie.js') }}"></script>
		<script src="{{ asset('master/style-switcher/style.switcher.js') }}"></script>
		<script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('vendor/common/common.js') }}"></script>
		<script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

		<!-- Specific Page Vendor -->
        @yield('specific_scripts')

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>

		<script src="{{ asset('js/examples/examples.header.menu.js') }}"></script>
		<script src="{{ asset('js/examples/examples.dashboard.js') }}"></script>

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6db7acd22fd74f75","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
</body>
</html>