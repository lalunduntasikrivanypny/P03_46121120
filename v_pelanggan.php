<html lang="en"><head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=ASET;?>/images/favicon-32x32.png" type="image/png">
	<!--plugins-->
	<link href="<?=ASET;?>/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="<?=ASET;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=ASET;?>/css/app.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php ("aplikasi/views/bagian/bagian_kiri.php");?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php ("aplikasi/views/bagian/bagian_atas.php");?>
		<!--end header -->
		<!--start page wrapper -->
	 <!--start content-->
     <main class="page-content">
            <!--breadcrumb-->
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center">DAFTAR PELANGGAN</i></h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th scope="col">Kode Pelanggan</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp Pelanggan</th>
                                    <th scope="col">Frekuensi Penawaran </th>
                                    <th scope="col">Lihat </th>
                                    <th scope="col"> Edit</th>
                                    <th scope="col"> Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['pelanggan'] as $miw => $isi) : ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?= $isi['kode_pelanggan']; ?></th>
                                        <td><?= $isi['nama_pelanggan']; ?></td>
                                        <td><?= $isi['alamat']; ?></td>
                                        <td><?= $isi['no_telp_pelanggan']; ?></td>
                                        <td><?= $isi['frekuensi_penawaran']; ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-light btn-sm" id="tombol-lihat">LIHAT</button>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" id="tombol-edit">EDIT</button>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger btn-sm" id="tombol-delete">DELETE</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-dark btn-sm" id="tombol-tambah">TAMBAH</button>

                    </div>
                </div>

            </div>

    </div>

    <div class="col-6">

    </div>

    </div>


    <!--end breadcrumb-->



    </main>
    <!--end page main-->
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<?php ("aplikasi/views/bagian/bagian_bawah.php");?>
	<!--end wrapper-->
	<!--start switcher-->
	<?php ("aplikasi/views/bagian/bagian_kanan.php");?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=ASET;?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=ASET;?>/js/jquery.min.js"></script>
	<script src="<?=ASET;?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=ASET;?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=ASET;?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="<?=ASET;?>/js/app.js"></script>


</body>

</html>



<!-- ini modal daftar -->

<div class="modal fade" id="inputnya_daftarpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <h4 align="center" style="color:cyan">SILAHKAN INPUT PELANGGAN</h4>
            </div>

            <div class="modal-body">

                <div class="form-group mb-4">
                    <label for="" style="color:black"><strong>Kode Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:black"><strong>Nama Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:black"><strong>Alamat</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:black"><strong>No Telp Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="modal-footer">
                <button data-bs-dismiss="modal">SELESAI</button>
            </div>
        </div>
    </div>

</div>

<!-- ini modal lihat -->

<div class="modal fade" id="inputnya_lihatpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header" style="color:crimson">
                <h4><strong>SILAHKAN LIHAT</i></strong></h4>
                < </div>

                    <div class="modal-body">

                        <div class="form-group mb-4">
                            <label for="" style="color:coral"><strong>Kode Pelanggan</strong></label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group mb-4">
                            <label for="" style="color:coral"><strong>Nama Pelanggan</strong></label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group mb-4">
                            <label for="" style="color:coral"><strong>Alamat</strong></label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group mb-4">
                            <label for="" style="color:coral"><strong>No Telp Pelanggan</strong></label>
                            <input type="text" class="form-control">
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button data-bs-dismiss="modal">SELESAI</button>
                    </div>
            </div>
        </div>

    </div>
</div>
<!-- ini modal edit -->

    <div class="modal fade" id="inputnya_editpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">

                <div class="modal-header" style="color:greenyellow">
                    <h4> <strong>SILAHKAN EDIT</strong> </h4>
                </div>

                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>Kode Pelanggan</strong></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>Nama Pelanggan</strong></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>Alamat</strong></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:indianred"><strong>No Telp Pelanggan</strong></label>
                        <input type="text" class="form-control">
                    </div>


                </div>

                <div class="modal-footer">
                    <button data-bs-dismiss="modal">SELESAI</button>
                </div>
            </div>
        </div>

    </div>

    <!-- ini modal delete -->

    <div class="modal fade" id="inputnya_deletepelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">

                <div class="modal-header" style="color:firebrick">
                    <h4><strong> SILAHKAN HAPUS </strong></h4>
                </div>

                <div class="modal-body">

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Kode Pelanggan</strong></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Nama Pelanggan</strong></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>Alamat</strong></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="" style="color:black"><strong>No Telp Pelanggan</strong></label>
                        <input type="text" class="form-control">
                    </div>


                </div>

                <div class="modal-footer">
                    <button data-bs-dismiss="modal">SELESAI</button>
                </div>
            </div>
        </div>

    </div>

   <!-- ini script daftar -->
<script>
    $("#tombol-tambah").click(function() {
        $("#inputnya_daftarpelanggan").modal("show")

    })
</script>

<!-- ini script lihat -->
<script>
    $("#tombol-lihat").click(function() {
        $("#inputnya_lihatpelanggan").modal("show")

    })
</script>

<!-- jnmn -->
<script>
    $("#tombol-lihat").click(function() {
        $("#inputnya_lihatpelanggan").modal("show")

    })
</script>

<!-- ini script edit -->
<script>
    $("#tombol-edit").click(function() {
        $("#inputnya_editpelanggan").modal("show")

    })
</script>

<!-- ini script hapus-->
<script>
    $("#tombol-delete").click(function() {
        $("#inputnya_deletepelanggan").modal("show")

    })
</script>

<script>
    $("#tombol-selesai").click(function() {
        $("#inputnya_editpelanggan").modal("hide")

    })
</script>

<!-- mkm -->
<div class="modal fade" id="inputnya_lihatpelanggan" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                SILAHKAN LIHAT^^
            </div>

            <div class="modal-body">

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Kode Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Nama Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>Alamat</strong></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="" style="color:coral"><strong>No Telp Pelanggan</strong></label>
                    <input type="text" class="form-control">
                </div>


            </div>

            <div class="modal-footer">
                <button data-bs-dismiss="modal">SELESAI</button>
            </div>
        </div>
    </div>

</div>