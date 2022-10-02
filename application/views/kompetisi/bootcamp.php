<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row justify-content-center">
                <div class=" col-lg-8 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="<?php echo base_url('theme/') ?>assets/img/backgrounds/dn19.jpg" alt="Card image cap">
                    <div class="card-body">
                    <div class="row justify-content-between align-content-center">
                        <div class="col-6  align-content-center">
                          <h5 class="card-title pt-2"><?= $setting['kompetisi'] ?></h5>
                        </div>
                        <p class="card-text">
                          Deadline Pendaftaran : <?= date('d F Y', strtotime( $setting['deadline'])) ?> <br>
                          Biaya registrasi : Rp. <?= number_format($setting['price']) ?> 
                        </p>
                        <?php echo form_open_multipart('kompetisi/daftar_bootcamp');?>
                          <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span> </label>
                            <input type="email" class="form-control" name="email" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Asal Instansi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="instansi" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Bukti Pembayaran <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="foto" required>
                            <div class="form-text">
                              ekstensi yang diizinkan png, jpg, pdf
                            </div>
                          </div>
                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Delegasi 1</small>
                          <div class="row">
                            <div class=" col-6 mb-3">
                              <label class="form-label">nama <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama1" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">NIM <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="nim1" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Jurusan <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="jurusan1" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">no. wa <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="wa1" required>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Delegasi 2</small>
                          <div class="row">
                            <div class=" col-6 mb-3">
                              <label class="form-label">nama <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama2" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">NIM <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="nim2" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Jurusan <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="jurusan2" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">no. wa <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="wa2" required>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Delegasi 3</small>
                          <div class="row">
                            <div class=" col-6 mb-3">
                              <label class="form-label">nama <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama3" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">NIM <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="nim3" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Jurusan <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="jurusan3" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">no. wa <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="wa3" required>
                            </div>
                          </div>
                          
                          <div class="text-md-end text-center mt-4 mb-3">
                            <button class="btn btn-secondary w-px-200 te" type="submit">Daftar</button>
                          </div>
                          <small class="text-muted">NOTE : (<span class="text-danger">*</span>) Wajib diisi</small>
                          <?php echo form_close(); ?> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->