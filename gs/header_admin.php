<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="admin.php">Admin Panel</a>
					</div>
					<div>
						<ul class="nav navbar-nav">
							<li><a href="index.php">Homepage</a></li>
							<li><a href="add_product.php">Add Products</a></li>
							<li><a href="view_product.php">View Products</a></li>
							<?php 
							if($_SESSION['user_type'] == "superadmin") {
								echo "<li><a href='view_user.php'>View Users</a></li>
								<li><a href='add_admin.php'>Add Admin</a></li>";
							}
							?>
							<li><a href="logout.php">Sign Out</a></li>
						</ul>
					</div>
				</div>
			</nav>