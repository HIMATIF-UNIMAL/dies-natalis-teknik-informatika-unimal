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
                                  <th>Nama Tim</th>
                                  <th>No. WA</th>
                                  <th>Bukti</th>
                                  <th>Validasi</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><?php echo htmlentities($data->tim, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                    <td><a href="<?= base_url('file/'.$data->bukti) ?>"><?php echo htmlentities($data->bukti, ENT_QUOTES, 'UTF-8');?></a></td>
                                    <td><?php echo htmlentities($data->validasi, ENT_QUOTES, 'UTF-8');?></td>
                                  <td>
                                    <a target="_blank" class="btn btn-icon btn-success" href="<?= base_url('tiket/mobile_legend/'.$data->slug) ?>">
                                      <span class="tf-icons bx bxs-file-doc"></span>
                                    </a>
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
                  <h5 class="modal-title" id="exampleModalLabel1">Detail Anggota</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body">

                          <small class="text-light fw-semibold pb-5">Captain</small>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nickname</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nickname, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->id_number, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Foto</label><br>
                            <a href="<?= base_url('file/'.$data->foto) ?>" target="_blank"><?php echo htmlentities($data->foto, ENT_QUOTES, 'UTF-8');?></a>
                          </div>

                          <hr class=" my-2">
                          <small class="text-light fw-semibold pb-5">Anggota 1</small>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nickname</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nickname1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->id_number1, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Foto</label><br>
                            <a href="<?= base_url('file/'.$data->foto1) ?>" target="_blank"><?php echo htmlentities($data->foto1, ENT_QUOTES, 'UTF-8');?></a>
                          </div>

                          <hr class=" my-2">
                          <small class="text-light fw-semibold pb-5">Anggota 2</small>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nickname</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nickname2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->id_number2, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Foto</label><br>
                            <a href="<?= base_url('file/'.$data->foto2) ?>" target="_blank"><?php echo htmlentities($data->foto2, ENT_QUOTES, 'UTF-8');?></a>
                          </div>

                          <hr class=" my-2">
                          <small class="text-light fw-semibold pb-5">Anggota 3</small>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nickname</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nickname3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->id_number3, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Foto</label><br>
                            <a href="<?= base_url('file/'.$data->foto3) ?>" target="_blank"><?php echo htmlentities($data->foto3, ENT_QUOTES, 'UTF-8');?></a>
                          </div>

                          <hr class=" my-2">
                          <small class="text-light fw-semibold pb-5">Anggota 4</small>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama4, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nickname</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nickname4, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-control" value="<?php echo htmlentities($data->id_number4, ENT_QUOTES, 'UTF-8');?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Foto</label><br>
                            <a href="<?= base_url('file/'.$data->foto4) ?>" target="_blank"><?php echo htmlentities($data->foto4, ENT_QUOTES, 'UTF-8');?></a>
                          </div>

                          
                    </div>
                  <div class="modal-footer text-center">
                    <button type="button" class="btn btn-outline-secondary text-center" data-bs-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
        <?php } ?>