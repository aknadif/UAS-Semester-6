<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
body {
  background-color: #a8dadc;
}
h2 {
  color: #1d3557;
}

.container {
  height:400px;
  width: 800px;
  background-color: #f1faee;
  margin-top: 200px;
  border-radius: 25px;
}
.btn-ubah {
  color: #f1faee;
  background-color: #457b9d;
}
.card{
  padding :20px;
  margin-top: 120px;
  border-radius: 20px;
}
</style>

<div class="container">
  <div class="d-flex justify-content-around">

  <div class="card" style="width: 18rem;">
  <div class="card-body text-center">
    <h5 class="card-title">Data Karyawan</h5>
    <a href="/karyawan" class="btn btn-tambah btn-sm">Click</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body text-center">
    <h5 class="card-title">Data Barang</h5>
    <a href="/barang" class="btn btn-tambah btn-sm">Click</a>
  </div>
</div>

  </div>
  <div class="text-center">
        <a href="logout" class="btn btn-tambah btn-md" style="text-decoration: none; margin-top: 20px;">Logout</a>
    </div>
</div>



<?= $this->endSection(); ?>