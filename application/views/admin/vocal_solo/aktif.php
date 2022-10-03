<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="card-title mb-0">
                      <h5><?= $setting['kompetisi'] ?></h5>
                      </div>
                      <div>
                        <a href="<?= base_url('cipta_puisi/pdf') ?>" class="btn btn-danger btn-sm"><i class='bx bxs-file-pdf'></i> Absensi</a>
                      </div>
                    </div>                    
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Nama</th>
                                  <th>Jurusan</th>
                                  <th>No. WA</th>
                                  <th>kTM / KRS</th>
                                  <th>Bukti</th>
                                  <th>Waktu Validasi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->jurusan, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><a href="<?= base_url('file/'.$data->ktm) ?>"><?php echo htmlentities($data->ktm, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td><a href="<?= base_url('file/'.$data->bukti) ?>"><?php echo htmlentities($data->bukti, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td><?php echo htmlentities($data->validasi, ENT_QUOTES, 'UTF-8');?></td>
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