  <!-- Content -->

  <div class="container-fluid flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <h5 class="card-header">Karya Saya</h5>
                      <!-- Account -->
                      <?= $this->session->flashdata('pesan'); ?>
                      <?php echo form_open_multipart('pamtek/update_karya');?>
                        <div class="card-body">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img
                                src="<?= base_url('file/') ?><?= $user['foto'] ?>"
                                alt="user-avatar"
                                class="d-block rounded"
                                height="100"
                                id="uploadedAvatar"
                              />
                            <div class="button-wrapper">
                              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input
                                  type="file"
                                  id="upload"
                                  class="account-file-input"
                                  hidden
                                  accept="image/png, image/jpeg"
                                  name="foto"
                                />
                              </label>
                              <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                              </button>
                              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2MB, Saran Rasio gambar 1:1.</p>
                            </div>
                          </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                          <div class="row">
                            <div class="mb-3 col-md-6">
                              <label class="form-label">unit</label>
                              <input
                                type="text"
                                class="form-control"
                                name="unit"
                                value="<?= $user['unit'] ?>"
                                placeholder="Unit"
                              />
                            </div>
                            <div class="mb-3 col-md-6">
                              <label class="form-label">angkatan</label>
                              <input
                                type="text"
                                class="form-control"
                                name="angkatan"
                                value="<?= $user['angkatan'] ?>"
                                placeholder="Angkatan"
                              />
                            </div>
                            <div class="mb-3 col-md-12">
                              <label class="form-label">Judul</label>
                              <input
                                type="text"
                                class="form-control"
                                name="judul"
                                value="<?= $user['judul'] ?>"
                                placeholder="Judul Karya"
                              />
                            </div>
                            <div class="mb-3 col-md-12">
                              <label for="quotes" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="quotes" name="deskripsi" rows="3" placeholder="Deskripsi Karya..."><?= $user['deskripsi'] ?></textarea>
                            </div>
                          </div>
                          <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                          </div>
                        <?php echo form_close(); ?>   
                      </div>
                      <!-- /Account -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Content -->