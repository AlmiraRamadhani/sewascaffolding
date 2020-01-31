<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/'); ?>img/user2-160x160.jpg" class="img-circle elevation-2"
					alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $admin['name']; ?></a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" role="menu">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-header">Dashboard</li>
				<li class="nav-item">
					<a href="<?= base_url('admin'); ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt fa-fw"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/profile') ?>" class="nav-link">
						<i class="nav-icon fas fa-user fa-fw"></i>
						<p>
							Profile
						</p>
					</a>
				</li>
			</ul>
			<ul class="nav nav-pills nav-sidebar flex-column" role="menu">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-header">Data Admin</li>
				<li class="nav-item">
					<a href="<?= base_url('produk'); ?>" class="nav-link">
						<i class="nav-icon far fa-clock fa-fw"></i>
						<p>
							Data Produk
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('kategori'); ?>" class="nav-link">
						<i class="nav-icon far fa-clock fa-fw"></i>
						<p>
							Data Kategori
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('user'); ?>" class="nav-link">
						<i class="nav-icon fas fa-users fa-fw"></i>
						<p>
							Data User
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('penjualan'); ?>" class="nav-link">
						<i class="nav-icon fas fa-shopping-cart fa-fw"></i>
						<p>
							Data Penjualan
						</p>
					</a>
				</li>
			</ul>
			<ul class="nav nav-pills nav-sidebar flex-column" role="menu">
				<li class="nav-header">User Settings</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/logout'); ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt fa-fw"></i>
						<p>
							Logout
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>