<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama lahan</th>
                <th>Posisi lahan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  $no = 1;
            foreach ($lokasi as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama_lahan ?></td>
                    <td><?= $value->latitude ?>, <?= $value->longitude ?></td>
                    <td>
                        <a class='btn btn-xs btn-success'href='<?= base_url('lokasi/edit/' . $value->id_lokasi) ?>'>Edit</a>     
                        <a class='btn btn-xs btn-warning'href='<?= base_url('lokasi/detail/' . $value->id_lokasi) ?>'>Detail</a>     
                        <a onclick='return confirm()'class='btn btn-xs btn-danger'href='<?= base_url('lokasi/delete/' . $value->id_lokasi) ?>'>Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>

    </table>

</div>