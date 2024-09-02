<html>
    <head>
        <link href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title></title>
        <link rel="stylesheet"type="text/css"href="register.css">
    </head>
    <body>
        <section class="h-100 h-custom" style="background-color: #8fc4b7;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card rounded-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                      class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                      alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">REGISTRASI PEGAWAI</h3>
                      <form action="proses_register.php" method="post">
                      <form class="px-md-2">
          
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" name="nama" class="form-control" />
                          <label class="form-label" >Nama</label>
                        </div>

                        <form class="px-md-2">
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="text" name="alamat" class="form-control" />
                              <label class="form-label" >Alamat</label>
                            </div>
          
                        <div class="row">
                          
                          <div class="col-md-6 mb-4">


          
                            <select name="gender" class="form-control">
                              <option value="1" disabled>Gender</option>
                              <option value="2">Laki-laki</option>
                              <option value="3">Perempuan</option>
                            </select>
          
                          </div>
                        </div>

                        <form class="px-md-2">
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="text" name="no_tlp" class="form-control" />
                              <label class="form-label">Nomor Telepon</label>
                            </div>
          
                            <form class="px-md-2">
          
                                <div data-mdb-input-init class="form-outline mb-4">
                                  <input type="text" name="jabatan" class="form-control" />
                                  <label class="form-label">Jabatan</label>
                                </div>

                                <?php
                                include "koneksi.php";
                                $qry_jabatan=mysqli_query($conn,"select * from jabatan");
                                while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                                    echo '<option 
                                    value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';
                                }
                                ?>

                        <form class="px-md-2">
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="text" name="username" class="form-control" />
                              <label class="form-label" >Username</label>
                            </div>
          
                        <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                          <div class="col-md-6">
          
                            <div data-mdb-input-init class="form-outline">
                              <input type="password" name="password" class="form-control" />
                              <label class="form-label" >Password</label>
                            </div>
          
                          </div>
                        </div>
          
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1">Submit</button>
          
                      </form>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>