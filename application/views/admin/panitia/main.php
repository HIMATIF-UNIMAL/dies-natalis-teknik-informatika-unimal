<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="card-title mb-0">
                      <h5>Data Panitia</h5>
                      </div>
                      <div>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class=" bx bx-plus"></i> Tambah Panitia</button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $no=1; foreach($hasil as $data){ ?>
                              <tr>
                                <td><?= $no++ ?></td>
                                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                  <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $data->id ?>"><i class=" bx bx-pencil"></i></a>
                                      <a href="<?= base_url('page/hapus_panitia/'.$data->id ) ?>" onclick="confirm('apakah kamu yakin?')" class="btn btn-danger"><i class=" bx bx-trash"></i></a>
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

             <!-- Modal -->
          <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Panitia</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('page/simpan_panitia') ?>" method="post">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Nama</label>
                        <input type="text" id="nameBasic" name="nama" class="form-control" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col mb-0">
                        <label for="emailBasic" class="form-label">Username</label>
                        <input type="text" id="emailBasic" name="username" class="form-control" placeholder="xxxx@xxx.xx">
                      </div>
                      <div class="col mb-0">
                        <label for="dobBasic" class="form-label">Password</label>
                        <input type="text" id="dobBasic" name="password" class="form-control" placeholder="*******">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        <?php foreach($hasil as $data){ ?>
          <!-- Modal -->
          <div class="modal fade" id="edit<?= $data->id ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Panitia</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('page/edit_panitia') ?>" method="post">
                <input type="hidden" name="id" value="<?= $data->id ?>">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Nama</label>
                        <input type="text" id="nameBasic" name="nama" class="form-control" value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col mb-0">
                        <label for="emailBasic" class="form-label">Username</label>
                        <input type="text" id="emailBasic" name="username" class="form-control" value="<?php echo htmlentities($data->username, ENT_QUOTES, 'UTF-8');?>" placeholder="xxxx@xxx.xx">
                      </div>
                      <div class="col mb-0">
                        <label for="dobBasic" class="form-label">Password</label>
                        <input type="text" id="dobBasic" name="password" class="form-control" placeholder="*******">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>