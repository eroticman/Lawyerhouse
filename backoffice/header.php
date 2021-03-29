<?php 
require_once 'init.php';
require_once 'auth.php';
?>
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
			<span class="sr-only">Toggle navigation</span>
			<span class="hamburger-bar"></span>
		</button>
		<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
			<i class="icon wb-more-horizontal" aria-hidden="true"></i>
		</button>
		<div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
			<span class="navbar-brand-text hidden-xs-down"> Lawyer House </span>
		</div>
	</div>

	<div class="navbar-container container-fluid">
		<!-- Navbar Collapse -->
		<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
			<!-- Navbar Toolbar -->
			<ul class="nav navbar-toolbar">
				<li class="nav-item hidden-float" id="toggleMenubar">
					<a class="nav-link" data-toggle="menubar" href="#" role="button">
						<i class="icon hamburger hamburger-arrow-left">
							<span class="sr-only">Toggle menubar</span>
							<span class="hamburger-bar"></span>
						</i>
					</a>
				</li>
			</ul>
			<!-- End Navbar Toolbar -->

			<!-- Navbar Toolbar Right -->
			<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
						<span class="avatar avatar-online">
							<img src="assets/images/logo.png" alt="Administrator">
							<i></i>
						</span>
					</a>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="logout.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
					</div>
				</li>		
			</ul>
			<!-- End Navbar Toolbar Right -->
		</div>
		<!-- End Navbar Collapse -->
	</div>
</nav>



<div class="site-menubar">
	<div class="site-menubar-body">
		<div>
			<div>
				<ul class="site-menu" data-plugin="menu">
					<li class="site-menu-item <?php echo ($current_file == 'index.php') ? 'active' : ''; ?>">
						<a class="animsition-link" href="index.php">
							<i class="site-menu-icon icon fa-home" aria-hidden="true"></i>
							<span class="site-menu-title">Home</span>
						</a>
					</li>
					<li class="site-menu-item <?php echo ( in_array($current_file, array('slide.php', 'slide_add.php', 'slide_edit.php') ) ) ? 'active' : ''; ?>">
						<a class="animsition-link" href="slide.php">
							<i class="site-menu-icon icon fa-play-circle-o" aria-hidden="true"></i>
							<span class="site-menu-title">Banner Slide</span>
						</a>
					</li>
					<li class="site-menu-item <?php echo ( in_array($current_file, array('team.php', 'team_add.php', 'team_edit.php') ) ) ? 'active' : ''; ?>">
						<a class="animsition-link" href="team.php">
							<i class="site-menu-icon icon fa-users" aria-hidden="true"></i>
							<span class="site-menu-title">Team</span>
						</a>
					</li>
					<li class="site-menu-item <?php echo ( in_array($current_file, array('blog.php', 'blog_add.php', 'blog_edit.php') ) ) ? 'active' : ''; ?>">
						<a class="animsition-link" href="blog.php">
							<i class="site-menu-icon icon fa-paper-plane" aria-hidden="true"></i>
							<span class="site-menu-title">News & Blog</span>
						</a>
					</li>
					<li class="site-menu-item <?php echo ( in_array($current_file, array('service.php', 'service_add.php', 'service_edit.php') ) ) ? 'active' : ''; ?>">
						<a class="animsition-link" href="service.php">
							<i class="site-menu-icon icon fa-legal" aria-hidden="true"></i>
							<span class="site-menu-title">Service</span>
						</a>
					</li>
					<li class="site-menu-item <?php echo ( in_array($current_file, array('real_estate.php', 'real_estate_add.php', 'real_estate_edit.php') ) ) ? 'active' : ''; ?>">
						<a class="animsition-link" href="real_estate.php">
							<i class="site-menu-icon icon fa-bank" aria-hidden="true"></i>
							<span class="site-menu-title">Real Estate</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="site-menubar-footer">
		<a href="logout.php" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
			<span class="icon wb-power" aria-hidden="true"></span>
		</a>
	</div>
</div>