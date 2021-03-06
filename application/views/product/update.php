<!-- Site wrapper -->
<div class="wrapper">
	<!-- Navbar -->
	<?= $navbar; ?>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<?= $sidebar; ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1><?= $title; ?></h1>
					</div>
					<!-- <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Blank Page</li>
						</ol>
					</div> -->
				</div>
			</div>
			<!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">

			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Edit Data</h3>
				</div>
				<form action="" method="post">
					<div class="card-body">
						<input type="hidden" name="id" id="id" value="<?= $product['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $product['nama']; ?>">
							<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" id="harga" name="harga" value="<?= $product['harga']; ?>">
							<?= form_error('harga', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="berat">Berat</label>
							<input type="text" class="form-control" id="berat" name="berat" value="<?= $product['berat']; ?>">
							<?= form_error('berat', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="stok">Stok</label>
							<input type="text" class="form-control" id="stok" name="stok" value="<?= $product['stok']; ?>">
							<?= form_error('stok', '<small class="text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="kategori">Kategori</label>
							<select name="category" id="category" class="form-control">
								<option value="">--Pilih Kategori--</option>
								<?php foreach ($category as $c) : ?>
									<?php if ($c['id'] == $product['id_kategori']) : ?>
										<option value="<?= $c['id'] ?>" selected><?= $c['cat']; ?></option>
									<?php else : ?>
										<option value="<?= $c['id'] ?>"><?= $c['cat	']; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</div>
				</form>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->