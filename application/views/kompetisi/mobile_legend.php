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
                          <a href=" <?= $setting['guidebook'] ?>" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="bx bxs-download fs-4 lh-0"></i> Guide Book</a>
                        </div>
                        <p class="card-text">
                          Deadline Pendaftaran : <?= date('d F Y', strtotime( $setting['deadline'])) ?> <br>
                          Biaya registrasi : Rp. <?= number_format($setting['price']) ?> 
                        </p>
                        <?php echo form_open_multipart('kompetisi/daftar_mobile_legend');?>
                          <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span> </label>
                            <input type="email" class="form-control" name="email" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nama Team <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="tim" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">no. WA<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="wa" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Bukti Pembayaran <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="bukti" required>
                            <div class="form-text">
                              ekstensi yang diizinkan png, jpg, pdf
                            </div>
                          </div>
                          
                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Captain</small>

                          <div class="row">
                            <div class="col-12 mb-3">
                              <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Nickname <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nickname" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Id number <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="id_number" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="krs" required>
                              <div class="form-text">
                              ekstensi yang diizinkan png, jpg, pdf
                            </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="foto" required>
                              <div class="form-text">
                              ekstensi yang diizinkan png, jpg, pdf
                            </div>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Anggota 1</small>
                          <div class="row">
                            <div class=" col-12 mb-3">
                              <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama1" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Nickname <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nickname1" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">id number <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="id_number1" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="krs1" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="foto1" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Anggota 2</small>
                          <div class="row">
                            <div class=" col-12 mb-3">
                              <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama2" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Nickname <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nickname2" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">id number <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="id_number2" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="krs2" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="foto2" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Anggota 3</small>
                          <div class="row">
                            <div class=" col-12 mb-3">
                              <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama3" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Nickname <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nickname3" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">id number <span class="text-danger">*</span></label>
                              <input type="number" class="form-control" name="id_number3" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="krs3" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="foto3" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Anggota 4</small>
                          <div class="row">
                            <div class=" col-12 mb-3">
                              <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nama4" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Nickname <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="nickname4" required>
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">id number <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="id_number4" required>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="krs4" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto <span class="text-danger">*</span></label>
                              <input type="file" class="form-control" name="foto4" required>
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Anggota Cadangan 1</small>
                          <div class="row">
                            <div class=" col-12 mb-3">
                              <label class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama5">
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Nickname</label>
                              <input type="text" class="form-control" name="nickname5">
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">id number</label>
                              <input type="number" class="form-control" name="id_number5">
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan</label>
                              <input type="file" class="form-control" name="krs5">
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto</label>
                              <input type="file" class="form-control" name="foto5">
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                          </div>

                          <hr class="m-0 my-4">
                          <small class="text-light fw-semibold pb-5">Anggota cadangan 2</small>
                          <div class="row">
                            <div class=" col-12 mb-3">
                              <label class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama6">
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">Nickname</label>
                              <input type="text" class="form-control" name="nickname6">
                            </div>
                            <div class=" col-6 mb-3">
                              <label class="form-label">id number</label>
                              <input type="number" class="form-control" name="id_number6">
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">KRS Berjalan</label>
                              <input type="file" class="form-control" name="krs6">
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
                            </div>
                            <div class="col-6 mb-3">
                              <label class="form-label">Foto</label>
                              <input type="file" class="form-control" name="foto6" >
                              <div class="form-text">
                                ekstensi yang diizinkan png, jpg, pdf
                              </div>
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
            <?php
              if($this->session->flashdata('validasi') == 1 ){
                echo '<div class="position-fixed" style="z-index: 9999999">
                <div id="toast" class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 start-50 translate-middle-x show" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">GAGAL!</div>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                    Pastikan file yang anda input berekstensi jpg, png atau pdf 
                  </div>
                </div>
              </div>
              ';
              }
            ?>