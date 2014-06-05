<div class="row">
	<div class="large-12 columns">
		<nav class="top-bar" data-topbar>

		<ul class="title-area">
			<li class="name">
			<h1><a href="<?PHP echo $url; ?>"> <?PHP echo $site['name']; ?></a></h1>
			</li>

			<li class="toggle-topbar menu-icon">
				<a href="">Menu</a>
			</li>

		</ul>
		<section class="top-bar-section">

<?PHP if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) 
			{ 
				include $dir . '/app/themes/dums/nav_admin.php';
			} 
			?>


		<!-- Medium & below (Right) -->
		<ul class="right show-for-medium-up">
			<li class="active"><a href="<?PHP echo $url.'/app/themes/dums/page.logout.php'; ?>">Log Out</a></li>
			
			<li class="has-dropdown">
			<a href="#">Menu</a>
				<ul class="dropdown">
					<li><a href="#">Objects</a></li>
					<li><a href="#">Files</a></li>
					<li><a href="#">First link in dropdown</a></li>
					<li class="has-dropdown"><a href="#">Dropdown Level 1a</a>
						<ul class="dropdown">
							<li><a href="#">Dropdown Level 2a</a></li>
							<li class="has-dropdown"><a href="#">Dropdown Level 1a</a>
								<ul class="dropdown">
									<li><a href="#">Dropdown Level 2a</a></li>
								</ul>
						</ul>
				</ul>
			</li>
		</ul>

	
		<!-- Medium & Up (Left) -->
			<ul class="left show-for-medium-up">
				<li><a href="<?PHP echo $url.'/dashboard'; ?>">Home</a></li>
			</ul>
			</section>
		</nav>
	</div>
</div>
