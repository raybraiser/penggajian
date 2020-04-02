<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Data Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <table class="table">
        <?php foreach ($result_karyawan->result() as $data_karyawan) { ?>
            <tr>
                <td style="width: 300px;">NIP Karyawan</td>
                <td><?php echo $data_karyawan->nip_karyawan; ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">Nama Karyawan</td>
                <td><?php echo $data_karyawan->nama_karyawan; ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">Jenis Kelamin</td>
                <td>
                    <?php 
                        if ($data_karyawan->jenis_kelamin == 'L') {
                            echo "Laki - Laki";
                        } else {
                            echo "Perempuan";
                        }
                    ?>
                        
                </td>
            </tr>
            <tr>
                <td style="width: 300px;">Tanggal Lahir</td>
                <td><?php echo date('d-m-Y', strtotime($data_karyawan->tanggal_lahir)); ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">No Telp / HP</td>
                <td><?php echo $data_karyawan->no_telepon; ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">Email</td>
                <td><?php echo $data_karyawan->email; ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">Alamat</td>
                <td><?php echo $data_karyawan->alamat; ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">Jabatan</td>
                <td><?php echo $data_karyawan->nama_jabatan; ?></td>
            </tr>
            <tr>
                <td style="width: 300px;">Tanggal Mulai Kerja</td>
                <td><?php echo date('d-m-Y', strtotime($data_karyawan->tanggal_masuk)); ?></td>
            </tr>
            <tr>
                <td>
                    <a href="<?php echo base_url('karyawan'); ?>" class="btn btn-primary">Kembali</a>
                    <a href="<?php echo base_url('karyawan/edit/'.$data_karyawan->id_karyawan); ?>" class="btn btn-info">Edit</a>
                </td>
            </tr>
        <?php } ?>
        </table>

    </div>

    </div>

</div>
<!-- /.container-fluid -->