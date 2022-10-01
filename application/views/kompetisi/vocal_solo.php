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
                        <div class="col-6 text-end">
                          <a href=" <?= $setting['guidebook'] ?>" target="_blank" class="btn btn-primary btn-sm"><i class="bx bxs-download fs-4 lh-0"></i> Guide Book</a>
                        </div>
                        <p class="card-text">
                          Deadline Pendaftaran : <?= date('d F Y', strtotime( $setting['deadline'])) ?> <br>
                          Biaya registrasi : Rp. <?= number_format($setting['price']) ?> 
                        </p>
                        <?php echo form_open_multipart('kompetisi/daftar_vocal_solo');?>
                          <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span> </label>
                            <input type="email" class="form-control" name="email" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">No. Wa <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="wa" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Jurusan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="jurusan" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">KTM/KRS Berjalan <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="ktm" required>
                            <div class="form-text">
                              ekstensi yang diizinkan png, jpg, pdf
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Bukti Pembayaran <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="foto" required>
                            <div class="form-text">
                              ekstensi yang diizinkan png, jpg, pdf
                            </div>
                          </div>
                          <div class="text-md-end text-center mt-4 mb-3">
                            <button class="btn btn-primary w-px-200 te" type="submit">Daftar</button>
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
