    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main Row -->
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Data Unit Kendaraan</h4>
                            <a href="<?= site_url('kendaraan/create'); ?>" class="btn btn-info float-lg-right">
                                <i class="fas fa-plus mr-1"></i>Tambah Unit
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kendaraan</th>
                                        <th>Spesifikasi</th>
                                        <th>Brand</th>
                                        <th>Transmisi</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th style="width: 250px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach($Kendaraan as $item) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item->nama; ?></td>
                                            <td><?= $item->spesifikasi; ?></td>
                                            <td><?= $item->brand; ?></td>
                                            <td><?= $item->transmisi; ?></td>
                                            <td><?= $item->stok; ?></td>
                                            <td><?= $item->price; ?></td>
                                            <td>
                                                <a href="<?= site_url('kendaraan/edit/' . $item->id); ?>" class="btn btn-primary btn-sm m-1 	fas fa-edit">Edit</a>
                                                <a href="<?= site_url('kendaraan/delete/' . $item->id); ?>" class="btn btn-danger btn-sm m-1 	far fa-trash-alt" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Row End -->
        </div>
    </section>
    <!-- Main Content End -->
</div>