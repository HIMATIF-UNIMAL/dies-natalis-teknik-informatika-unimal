<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header"><?= $setting['kompetisi']?></h5>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Instansi</th>
                                  <th>Bukti</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                              <td><?php echo htmlentities($data->instansi, ENT_QUOTES, 'UTF-8');?></td>
                                    <td><a href="<?= base_url('file/'.$data->bukti) ?>"><?php echo htmlentities($data->bukti, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td>
                                  <a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#anggota<?= $data->id ?>">
                                    <span class="tf-icons bx bx-user-circle"></span>
                                  </a>
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

            <?php foreach($hasil as $data){ ?>
          <!-- Modal -->
          <div class="modal fade" id="anggota<?= $data->id ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Detail Delegasi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body">

                          <small class="text-light fw-semibold pb-5">Delegasi 1</small>
                          <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nim1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">jurusan</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->jurusan1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">No. WA</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->wa1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>

                          <hr class=" my-2">
                          <small class="text-light fw-semibold pb-5">Delegasi 2</small>
                          <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nim2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">jurusan</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->jurusan2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">No. WA</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->wa2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>

                          <hr class=" my-2">
                          <small class="text-light fw-semibold pb-5">Delegasi 3</small>
                          <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nim3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">jurusan</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->jurusan3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">No. WA</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->wa3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>

                          

                    </div>
                  <div class="modal-footer text-center">
                    <button type="button" class="btn btn-outline-secondary text-center" data-bs-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
        <?php } ?>