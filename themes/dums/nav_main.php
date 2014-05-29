<div class="row">
	<div class="large-12 columns">
		<nav class="top-bar" data-topbar>

		<ul class="title-area">
			<li class="name">
			<h1><a href="<?PHP echo $url; ?>">My Site</a></h1>
			</li>

			<li class="toggle-topbar menu-icon">
				<a href="">Menu</a></li>
		</ul>
		<section class="top-bar-section">


		<!-- Medium & below (Right) -->
		<ul class="right hide-for-large-up">
			<li class="has-dropdown">
				<a href="#">Admin</a>
				<ul class="dropdown">

					<li class="has-dropdown"><a href="#">Users</a>
						<ul class="dropdown">
							<li><a href="<?PHP echo $url.'/dashboard/adduser.php'; ?>">Add User</a></li>
							<li><a href="#">List User</a></li>
							<li><a href="#">Edit User</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Groups</a>
						<ul class="dropdown">
							<li><a href="#">Add Group</a></li>
							<li><a href="#">List Group</a></li>
							<li><a href="#">Edit Group</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Objects</a>
						<ul class="dropdown">
							<li><a href="#">Add Object</a></li>
							<li><a href="#">List Object</a></li>
							<li><a href="#">Edit Object</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Files</a>
						<ul class="dropdown">
							<li><a href="#">Add Files</a></li>
							<li><a href="#">List Files</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Links</a>
						<ul class="dropdown">
							<li><a href="#">Add Link</a></li>
							<li><a href="#">Edit User</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>


		<!-- Medium & below (Right) -->
		<ul class="right hide-for-large-up">
			
			<li class="active"><a href="#">Right Button</a></li>
			
			<li class="has-dropdown">
			<a href="#">Right Dropdown</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
					<li><a href="#">First link in dropdown</a></li>
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

				<!-- Large & Up Menu (Right)  -->
		<ul class="right show-for-large-up">
			<li class="active">
				<a href="#">Right Button Active</a></li>
			<li class="has-dropdown">
				<a href="#">Right Button Dropdown</a>
			<ul class="dropdown">
			<li><a href="#">First link in dropdown</a></li>
			</ul>
			</li>
		</ul>

		 
		<!-- Medium & Up (Left) -->
			<ul class="left show-for-medium-up">
				<li><a href="#">Home</a></li>
			</ul>
			</section>
		</nav>
	</div>
</div>
