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
                            <h2 class="text-center fw-bold mt-2">Detail Karyawan</h2>
                            <table class="table table-bordered mt-4">  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Id Karyawan</label></td>  
                                    <td width="70%"><?= $karyawan['id_karyawan']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">NIK</label></td>  
                                    <td width="70%"><?= $karyawan['NIK']; ?></td>  
                                </tr> 
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Nama</label></td>  
                                    <td width="70%"><?= $karyawan['nama_karyawan']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Alamat</label></td>  
                                    <td width="70%"><?= $karyawan['alamat_karyawan']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Gender</label></td>  
                                    <td width="70%"><?= $karyawan['gender_karyawan']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Divisi</label></td>  
                                    <td width="70%"><?= $karyawan['divisi_karyawan']; ?></td>  
                                </tr>  
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Level</label></td>  
                                    <td width="70%"><?= $karyawan['level_karyawan']; ?></td>  
                                </tr>   
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Tanggal Inputan</label></td>  
                                    <td width="70%"><?= $karyawan['created_at']; ?></td>  
                                </tr> 
                                <tr>  
                                    <td width="30%"><label class="fw-bold">Tanggal Update</label></td>  
                                    <td width="70%"><?= $karyawan['updated_at']; ?></td>  
                                </tr>   

                            </table>
                        </div> 
                        <div class="text-end">
                        <a href="<?= base_url('/karyawan');?>" type="button" class="btn btn-secondary btn-sm mb-4">Kembali</a>
                        </div>
         

        </div>
    </div>
</div>

<?= $this->endSection(); ?>