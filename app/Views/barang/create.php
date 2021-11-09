<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
body {
  background-color: #a8dadc;
}
h1 {
  color: #1d3557;
}
label{
    color: #1d3557;  
}
.container {
  width: 800px;
  background-color: #f1faee;
  margin-top: 200px;
  border-radius: 25px;
}
.btn-tambah {
  color: #f1faee;
  background-color: #457b9d;
}
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold mt-4">Tambah Stock Barang Baru</h1>
            <form action="<?= base_url('/barang/save');?>" method="post" enctype="multipart/form-data" class="mt-4">
            <?= csrf_field(); ?>
                        <div class="form-group  mb-3">
                            <label for="nama_barang" class="fw-bold">Nama Barang</label>
                            <input name="nama_barang" id='nama_barang' type="text" class="form-control" placeholder="Nama Barang .." required>
                        </div>
                        <div class="form-group  mb-3">
                            <label for="harga_jual" class="fw-bold">Harga Jual</label>
                            <input name="harga_jual" id="harga_jual" type="text" class="form-control" placeholder="Harga Jual Barang .." required>
                        </div>
                        <div class="form-group  mb-3">
                            <label for="jumlah" class="fw-bold">Jumlah</label>
                            <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Jumlah .." required>
                        </div>

                <div class="text-end">    
                <a href="<?= base_url('/barang');?>" type="button" class="btn btn-secondary mb-4">Back</a>
                <button type="submit" name="submit" class="btn btn-tambah mb-4">Create</button>
                </div>

                												
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>