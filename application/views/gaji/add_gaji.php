<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Gaji Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <form method="post" action="save">
            <div class="form-group">
                <label>Kode Penggajian</label>
                <input type="text" name="kodePenggajian" class="form-control" placeholder="Ketik Kode Penggajian">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <select class="custom-select" name="karyawan" required="required" >
                <?php 
                    foreach ($karyawan->result() as $data) {
                        echo '<option value="'.$data->id_karyawan.'">'.$data->nama_karyawan.'</option>';
                    }
                ?>
                </select>
            </div>

        <button type="submit" class="btn btn-primary">Proses</button>
        </form>
    </div>

    </div>

</div>
<!-- /.container-fluid -->