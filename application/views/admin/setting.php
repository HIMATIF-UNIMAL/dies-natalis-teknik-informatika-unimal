            <!-- Content -->
            <div class="container flex-grow-1 container-p-y">
              <div class="row justify-content-center">
                <div class="col-10">
                <div class="card mb-4">
                  <div class="card-header d-flex">
                    <h5 class="mb-0"><?= $setting['kompetisi'] ?></h5>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="<?= base_url(str_replace(" ","_", strtolower($setting['kompetisi'])).'/simpan_setting') ?>">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Deadline</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="date" value="<?= $setting['deadline'] ?>" name="deadline" class="form-control" >
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Biaya Registrasi</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="number" value="<?= $setting['price'] ?>" name="price" class="form-control" >
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Link guidebook</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="text" value="<?= $setting['guidebook'] ?>" name="guidebook" class="form-control" >
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Link WA</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="text" value="<?= $setting['wa'] ?>" name="wa" class="form-control" >
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status Pendaftaran</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                          <select id="defaultSelect" name="status" class="form-select">
                            <?php if($setting['status'] == 1){ ?>
                              <option value="1">Buka</option>
                              <option value="0">Tutup</option>
                            <?php }else{ ?>
                              <option value="0">Tutup</option>
                              <option value="1">Buka</option>
                            <?php } ?>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jadwal Pertandingan</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="date" value="<?= $setting['jadwal'] ?>" name="jadwal" class="form-control" >
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <!-- / Content -->