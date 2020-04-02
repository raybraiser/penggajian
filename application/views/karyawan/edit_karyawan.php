<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <form method="post" action="/penggajian/index.php/karyawan/update/">
            <?php foreach ($result_karyawan->result() as $data_karyawan) { ?>
            <input type="hidden" name="idKaryawan" class="form-control" required="required" value="<?php echo $data_karyawan->id_karyawan; ?>" placeholder="Ketik NIP Karyawan">

            <div class="form-group">
                <label>NIP Karyawan</label>
                <input type="text" name="nipKaryawan" class="form-control" required="required" value="<?php echo $data_karyawan->nip_karyawan; ?>" placeholder="Ketik NIP Karyawan">
            </div>

            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="namaKaryawan" class="form-control" required="required" value="<?php echo $data_karyawan->nama_karyawan; ?>" placeholder="Ketik Nama Karyawan">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="custom-select" name="jenisKelamin">
                    <option value="L" <?php if($data_karyawan->jenis_kelamin == "L" ) echo 'selected="selected"'; ?> >Laki - Laki</option>
                    <option value="P" <?php if($data_karyawan->jenis_kelamin == "P" ) echo 'selected="selected"'; ?> >Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" name="tanggalLahir" id="tanggalLahir" class="form-control" value="<?php echo $data_karyawan->tanggal_lahir; ?>" required="required" placeholder="Tanggal Lahir">
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
                <input type="number" name="nomorHandphone" class="form-control" value="<?php echo $data_karyawan->no_telepon; ?>" required="required" placeholder="Ketik Nomor Handphone">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $data_karyawan->email; ?>" required="required" placeholder="Ketik Email">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $data_karyawan->alamat; ?>" required="required" placeholder="Ketik Alamat">
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select class="custom-select" name="jabatan" required="required" >
                <?php 

                    foreach ($jabatan->result() as $data) {
                        echo '<option value="'.$data->id_jabatan.'" '.(($data->id_jabatan == $data_karyawan->jabatan)?'selected="selected"':"").'>'.$data->jabatan.'</option>';
                    }

                ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Masuk Kerja</label>
                <input type="text" name="tanggalMasuk" id="tanggalMasuk" class="form-control" value="<?php echo $data_karyawan->tanggal_masuk; ?>"required="required" placeholder="Tanggal Masuk Kerja">
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

        <?php } ?>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    </div>

</div>
<!-- /.container-fluid -->