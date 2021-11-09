<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Register</title>
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
  margin-top: 75px;
  border-radius: 25px;
}
.btn-ubah {
  color: #f1faee;
  background-color: #457b9d;
}
</style>
  </head>
  <body>
    <div class="container ">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1 class="mt-4">Sign Up</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form method="post" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="password_conf" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf" required>
                </div>
                <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" aria-label="Default select example" id="level" name="level" required>
                  <option selected>Pilih Level</option>
                  <option value="Admin">Admin</option>
                  <option value="Karyawan">Karyawan</option>
                </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-ubah mb-4">Register</button>
                </div>
                <div class="mb-3 text-center" >
                    <a href="../login" style="text-decoration: none; color: #1d3557;">Sudah punya akun?</a>
                </div>
            </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html