<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <form method="post" action="save/">
            <div class="form-group">
                <label>NIP Karyawan</label>
                <input type="text" name="nipKaryawan" class="form-control" required="required" placeholder="Ketik NIP Karyawan">
            </div>

            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="namaKaryawan" class="form-control" required="required" placeholder="Ketik Nama Karyawan">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="custom-select" name="jenisKelamin">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" name="tanggalLahir" id="tanggalLahir" class="form-control" required="required" placeholder="Tanggal Lahir">
            </div>

            <script type="text/javascript">
              $( function() {
                $( "#tanggalLahir" ).datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+0",
                });
              } );
            </script>

            <div class="form-group">
                <label>Nomor Handphone</label>
                <input type="number" name="nomorHandphone" class="form-control" required="required" placeholder="Ketik Nomor Handphone">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required="required" placeholder="Ketik Email">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required="required" placeholder="Ketik Alamat">
            </div>

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
                <label>Tanggal Masuk Kerja</label>
                <input type="text" name="tanggalMasuk" id="tanggalMasuk" class="form-control" required="required" placeholder="Tanggal Masuk Kerja">
            </div>

            <script type="text/javascript">
              $( function() {
                $( "#tanggalMasuk" ).datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+0",
                });
              } );
            </script>


        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    </div>

</div>
<!-- /.container-fluid -->