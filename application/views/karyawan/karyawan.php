<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
        $status_session_hapus = $this->session->flashdata('hapus_karyawan');
        if ($status_session_hapus == 'sukses') {
            echo '<div class="alert alert-success" role="alert">Sukses!, Data berhasil dihapus.</div>';
        } elseif ($status_session_hapus == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Gagal!, Data gagal dihapus.</div>';
        }

        $status_session_insert = $this->session->flashdata('insert_karyawan');
        if ($status_session_insert == 'sukses') {
            echo '<div class="alert alert-success" role="alert">Sukses!, Data berhasil disimpan.</div>';
        } elseif ($status_session_insert == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Gagal!, Data gagal disimpan.</div>';
        }

        $status_session_update = $this->session->flashdata('update_karyawan');
        if ($status_session_update == 'sukses') {
            echo '<div class="alert alert-success" role="alert">Sukses!, Data berhasil diupdate.</div>';
        } elseif ($status_session_update == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Gagal!, Data gagal diupdate.</div>';
        }

    ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <a class="btn btn-primary" href="karyawan/add">Tambah Karyawan</a>
        <hr>
        <table class="table">
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Mulai Kerja</th>
                <th>Opsi</th>
            </tr>
            <?php foreach ($result_karyawan->result() as $data_karyawan) { ?>
                <tr>
                    <td><?php echo $data_karyawan->nip_karyawan; ?></td>
                    <td><?php echo $data_karyawan->nama_karyawan; ?></td>
                    <td><?php echo $data_karyawan->nama_jabatan; ?></td>
                    <td><?php echo date('m-d-Y', strtotime($data_karyawan->tanggal_masuk)); ?></td>
                    <td>
                        <a class='btn btn-sm' href="<?php echo base_url('karyawan/edit/'.$data_karyawan->id_karyawan) ?>"><i class='fas fa-edit'></i></a>
                        <a class='btn btn-sm' data-toggle='modal' data-target='#modalHapusKaryawan' data-href="<?php echo base_url('karyawan/delete/'.$data_karyawan->id_karyawan) ?>"><i class='fas fa-trash'></i></a>
                    </td>
                </tr>    
            <?php } ?>
        </table>
    </div>

    </div>

</div>
<!-- /.container-fluid -->


<div class="modal fade" id="modalHapusKaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <b>Anda yakin ingin menghapus data karyawan ini ?</b><br><br>
                <a class="btn btn-ok"><i class="fas fa-trash"></i> Hapus</a>
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Batal</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

$('#modalHapusKaryawan').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
})
</script>
