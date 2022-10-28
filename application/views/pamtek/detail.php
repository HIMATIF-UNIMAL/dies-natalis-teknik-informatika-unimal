<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row justify-content-center">
                <div class=" col-lg-8 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="<?php echo base_url('file/') ?><?= $karya['foto'] ?>" alt="Card image cap">
                    <div class="card-body">
                      <div class="row justify-content-between align-content-center">
                        <div class="col-12  align-content-center">
                          <h1 class="card-title pt-2"><?= $karya['judul'] ?></h1>
                          <span>Unit: <?= $karya['unit'] ?> <br> Angkatan: <?= $karya['angkatan'] ?></span>
                        </div>
                        <p class="card-text mt-4">
                          Deskripsi: <br>
                          <?= $karya['deskripsi'] ?>
                        </p>
                        <p class="card-text mt-4">
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class=" col-lg-8 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-between align-content-center">
                        <div class="col-12  align-content-center">
                          <h5 class="card-title pt-2">Beri Penilaian Kamu !!</h5>
                        </div>
                          <form action="<?= base_url('pamtek/tambah_rating') ?>" method="post">
                            <input type="hidden" name="id_karya" value="<?= $karya['id'] ?>">
                          <div class="mb-3 col-md-12 mt-3">
                              <label for="quotes" class="form-label">Rating</label>
                              <input id="input-1" name="rating" class="rating rating-loading" required data-min="0" data-max="5" data-step="1">
                          </div>
                          <div class="mb-3 col-md-12">
                              <label for="quotes" class="form-label">Komentar <small class="text-danger">(opsional)</small></label>
                              <textarea class="form-control" id="quotes" name="komentar" rows="3" placeholder="Tulis Komentar Kamu..."></textarea>
                          </div>
                          <div class="text-end">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kode">Kirim</button>
                              <div class="modal fade" id="kode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Kode pengunjung</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <input type="number" class="form-control form-control-lg mb-4" name="kode" required placeholder="Masukan Kode Pengunjung...">
                                        <div>
                                          <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          </form>
                      </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <div class="row justify-content-between align-content-center">
                        <div class="col-12  align-content-center">
                          <h5 class="card-title pt-2">Komentar</h5>
                        </div>
                        <?php foreach($hasil as $data){ ?>
                        <div class="row align-items-center  mt-3">
                          <div class="col-md-2 text-center">
                            <img src="<?= base_url('theme/assets/img/icons/user.png') ?>" width="80" class="img-fluid" alt="">
                          </div>
                          <div class="col-md-10 ">
                            <span class="fw-bold"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></span><br>
                            <small class="text-muted"><?php echo htmlentities($data->instansi, ENT_QUOTES, 'UTF-8');?></small>
                            <p><?php echo htmlentities($data->komen, ENT_QUOTES, 'UTF-8');?></p>
                          </div>
                        </div>
                        <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->