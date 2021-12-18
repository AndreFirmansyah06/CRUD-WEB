    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main Row -->
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Tambah Data Spare Part</h4>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('sparepart/create'); ?>" method="POST" role="form">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-10">
                                        <input type="text" name="nama1" id="nama1" class="form-control" value="<?= set_value('nama1'); ?>">
                                        <?= form_error('nama1'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="brand" class="col-sm-2 col-form-label">Jenis</label>
                                    <div class="col-10">
                                        <input type="text" name="brand1" id="brand1" class="form-control" value="<?= set_value('brand1'); ?>">
                                        <?= form_error('brand1'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="cpu" class="col-sm-2 col-form-label">Stok</label>
                                    <div class="col-10">
                                        <input type="text" name="stok1" id="stok1" class="form-control" value="<?= set_value('stok1'); ?>">
                                        <?= form_error('stok1'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-10">
                                        <input type="text" name="harga1" id="harga1" class="form-control" value="<?= set_value('harga1'); ?>">
                                        <?= form_error('harga1'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-info btn-block fas fa-check-circle">Submit</button>
                                    <a href="<?= site_url('sparepart/index'); ?>" class="btn btn-default btn-block">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Row End -->
        </div>
    </section>
    <!-- Main Content End -->
</div>