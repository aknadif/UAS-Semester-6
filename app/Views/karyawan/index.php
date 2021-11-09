<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="text-center mt-4" style="color: #f1faee;">Level : <?= $level; ?></h1>
<div class="row">
    <div class="col">
        <div class="container">
<h1 class="text-center">Data Karyawan</h1>

<!-- Tambah Karyawan -->
<?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-warning mt-4 alert-dismissible fade show" role="alert"> 
    <?= session()->getFlashdata('pesan'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
    </div>
<?php endif; ?>
<div class="d-flex justify-content-between">
<div class="tambah">
<a href="<?= base_url('/karyawan/create');?>" type="button" class="btn btn-tambah btn-sm">Tambah Karyawan</a>
</div>
<div class="tambah">
<a href="<?= base_url('/login/logout');?>" type="button" class="btn btn-tambah btn-sm">Logout</a>
</div>

</div>
        <table class="table">
            <thead class="thead">
                <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Divisi Karyawan</th>
                <th scope="col">Level Karyawan</th>
                <th scope="col" class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach($karyawan as $b) : ?>
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $b['NIK']; ?></td>
                <td><?= $b['nama_karyawan']; ?></td>
                <td><?= $b['divisi_karyawan']; ?></td>
                <td><?= $b['level_karyawan']; ?></td>
                <td class="text-center">
                <a href="<?= base_url('/karyawan'); ?>/<?= $b['id_karyawan']; ?>" type="button" class="btn btn-primary btn-sm">Detail</a>
                <a href="<?= base_url('/karyawan/ubah'); ?>/<?= $b['id_karyawan']; ?>" type="button" class="btn btn-warning btn-sm">Ubah</a>

                <form action="<?= base_url('/KaryawanController/delete'); ?>/<?= $b['id_karyawan']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus ini?');"> Hapus</button>
                
            
            </form>

                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="/" class="btn btn-tambah btn-md" style="text-decoration: none; margin-top: 20px;">Back</a>
    </div>
    </div>
</div>
</div>
<script>
<?php if ($level == 'Admin') { ?>
    console.log('Admin');
<?php }elseif($level =='Karyawan'){ ?>
    window.onload = function () {  
        let hapus = document.querySelectorAll(".btn-danger");
        let i;
        for (let i = 0; i < hapus.length; i++) {
           hapus[i].remove(); 
        }
        let ubah = document.querySelectorAll(".btn-warning");
        let j;
        for (let j = 0; j < ubah.length; j++) {
           ubah[j].remove(); 
        }         
    }
<?php } else{}; ?>
</script>



<?= $this->endSection(); ?>