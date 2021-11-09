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
.btn-ubah {
  color: #f1faee;
  background-color: #457b9d;
}
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold mt-4">Ubah Data Barang</h1>
            <form action="<?= base_url('/barang/update');?>/<?= $barang['id']; ?>" method="post" enctype="multipart/form-data" class="mt-4">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $barang['id']; ?>">
            
                        <div class="form-group  mb-3">
                            <label for="jumlah" class="fw-bold">Jumlah</label>
                            <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Jumlah .." required value="<?= $barang['jumlah']; ?>">
                        </div>

                <div class="text-end">    
                <a href="<?= base_url('/barang');?>" type="button" class="btn btn-secondary mb-4">Back</a>
                <button type="submit" name="submit" class="btn btn-ubah mb-4">Ubah</button>
                </div>

                												
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>