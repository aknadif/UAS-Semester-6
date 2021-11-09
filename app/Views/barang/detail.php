<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
body {
  background-color: #a8dadc;
}
h2 {
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
        
           
                        <div class="table-responsive">  
                            <h2 class="text-center fw-bold mt-2">Detail Barang</h2>
                            <table class="table table-bordered mt-4">  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Id</label></td>  
                                    <td width="70%"><?= $barang['id']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Nama</label></td>  
                                    <td width="70%"><?= $barang['nama_barang']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Harga Jual</label></td>  
                                    <td width="70%"><?= $barang['harga_jual']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Jumlah</label></td>  
                                    <td width="70%"><?= $barang['jumlah']; ?></td>  
                                </tr>   
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Tanggal Inputan</label></td>  
                                    <td width="70%"><?= $barang['created_at']; ?></td>  
                                </tr> 
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Tanggal Update</label></td>  
                                    <td width="70%"><?= $barang['updated_at']; ?></td>  
                                </tr>   

                            </table>
                        </div> 
                        <div class="text-end">
                        <a href="<?= base_url('/barang');?>" type="button" class="btn btn-secondary btn-sm mb-4">Kembali</a>
                        </div>
         

        </div>
    </div>
</div>

<?= $this->endSection(); ?>