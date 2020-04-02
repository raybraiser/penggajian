<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
        $status_session_hapus = $this->session->flashdata('hapus_gaji');
        if ($status_session_hapus == 'sukses') {
            echo '<div class="alert alert-success" role="alert">Sukses!, Data berhasil dihapus.</div>';
        } elseif ($status_session_hapus == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Gagal!, Data gagal dihapus.</div>';
        }

        $status_session_insert = $this->session->flashdata('insert_gaji');
        if ($status_session_insert == 'sukses') {
            echo '<div class="alert alert-success" role="alert">Sukses!, Data berhasil disimpan.</div>';
        } elseif ($status_session_insert == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Gagal!, Data gagal disimpan.</div>';
        }

        $status_session_update = $this->session->flashdata('update_gaji');
        if ($status_session_update == 'sukses') {
            echo '<div class="alert alert-success" role="alert">Sukses!, Data berhasil diupdate.</div>';
        } elseif ($status_session_update == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Gagal!, Data gagal diupdate.</div>';
        }

    ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Gaji Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="container">
        <a class="btn btn-primary" href="gaji/add">Tambah Gaji Karyawan</a>
        <hr>
        <table class="table">
            <tr>
                <th>Kode Gaji</th>
                <th>NIP</th>
                <th>Nama Karyawan</th>
                <th>Tanggal Penerimaan</th>
                <th>Nominal</th>
            </tr>
            <?php foreach ($result_gaji->result() as $data_gaji) { ?>
                <tr>
                    <td><?php echo $data_gaji->kode_penggajian; ?></td>
                    <td><?php echo $data_gaji->nip; ?> Tahun</td>
                    <td><?php echo $data_gaji->nama_karyawan; ?></td>
                    <td><?php echo $data_gaji->tanggal_penerimaan; ?></td>
                    <td><?php echo number_format($data_gaji->nominal); ?></td>
                </tr>    
            <?php } ?>
        </table>
    </div>

    </div>

</div>
<!-- /.container-fluid -->


<div class="modal fade" id="modalHapusAturanGaji" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <b>Anda yakin ingin menghapus data aturan gaji ini ?</b><br><br>
                <a class="btn btn-ok"><i class="fas fa-trash"></i> Hapus</a>
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Batal</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

$('#modalHapusAturanGaji').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
})

</script>
