    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Daftar Unit Kendaraan</h4>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-condensed mb-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kendaraan</th>
                                        <th>Spesifikasi</th>
                                        <th>Brand</th>
                                        <th>Transmisi</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; 
                                    foreach($DataBarang as $item) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item->nama; ?></td>
                                            <td><?= $item->spesifikasi; ?></td>
                                            <td><?= $item->brand; ?></td>
                                            <td><?= $item->transmisi; ?></td>
                                            <td><?= $item->stok; ?></td>
                                            <td><?= $item->price; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->