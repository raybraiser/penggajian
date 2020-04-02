<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Aturan Gaji</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <form method="post" action="save">
            <div class="form-group">
                <label>Jabatan</label>
                <select class="custom-select" name="jabatan" required="required" >
                <?php 
                    foreach ($jabatan->result() as $data) {
                        echo '<option value="'.$data->id_jabatan.'">'.$data->jabatan.'</option>';
                    }
                ?>
                </select>
            </div>

            <div class="form-group">
                <label>Masa Kerja (angka tahun)</label>
                <input type="text" name="masaKerja" class="form-control" placeholder="Ketik Masa Kerja">
            </div>

            <div class="form-group">
                <label>Insentif</label>
                <input type="text" name="insentif" class="form-control" placeholder="Ketik Insentif">
            </div>

            <div class="form-group">
                <label>Bonus</label>
                <input type="text" name="bonus" class="form-control" placeholder="Ketik Bonus">
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    </div>

</div>
<!-- /.container-fluid -->