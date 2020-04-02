<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Jabatan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <form method="post" action="/penggajian/index.php/jabatan/update/">
            <?php foreach ($result_jabatan->result() as $data_jabatan) { ?>
            <input type="hidden" name="idJabatan" class="form-control" value="<?php echo $data_jabatan->id_jabatan; ?>">
            <div class="form-group">
                <label>Kode Jabatan</label>
                <input type="text" name="kodeJabatan" class="form-control" value="<?php echo $data_jabatan->kode_jabatan; ?>" placeholder="Ketik Kode Jabatan">
            </div>

            <div class="form-group">
                <label>Nama Jabatan</label>
                <input type="text" name="namaJabatan" class="form-control" value="<?php echo $data_jabatan->jabatan; ?>" placeholder="Ketik Nama Jabatan">
            </div>

            <div class="form-group">
                <label>Standar Gaji</label>
                <input type="text" name="standarGaji" class="form-control" value="<?php echo $data_jabatan->standar_gaji; ?>" placeholder="Ketik Standar Gaji">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="keteranganJabatan" rows="3"><?php echo $data_jabatan->keterangan; ?></textarea>
            </div>
            <?php } ?>

        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    </div>

</div>
<!-- /.container-fluid -->