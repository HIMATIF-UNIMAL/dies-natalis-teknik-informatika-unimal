          <script type="text/javascript">
              window.onload = () => {
                  $('#pengunjung').modal('show');
              }
          </script>
          <!-- Content wrapper -->
          <div class="content-wrapper mb-4">
            <!-- Content -->
            <div class="container flex-grow-1 container-p-y">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="card mb-5">
                    <h5 class="card-header">Form Pengunjung</h5>
                    <div class="card-body">
                      <form action="<?= base_url('pamtek/tambah_pengunjung') ?>" method="post">
                        <div class="mb-3 row">
                          <label class="col-md-2 col-form-label">Nama</label>
                          <div class="col-md-10">
                            <input class="form-control" type="text" name="nama" placeholder="Nama Pengunjung...">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-md-2 col-form-label">Instansi</label>
                          <div class="col-md-10">
                            <input class="form-control" type="text" name="instansi" placeholder="Asal Instansi...">
                          </div>
                        </div>
                        <div class="text-end">
                          <button class="btn btn-primary" type="submit" >Tambah</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Data Pengunjung</h5>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Nama</th>
                                  <th>Asal Instansi</th>
                                  <th>Kode</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->instansi, ENT_QUOTES, 'UTF-8');?></td>
                                  <td>
                                    <div class="form-password-toggle">
                                      <div class="input-group">
                                        <input type="password" class="form-control" readonly value="<?= $data->id  ?>" aria-describedby="basic-default-password2">
                                        <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>

<!-- Content -->
