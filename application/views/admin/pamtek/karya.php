<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Karya Peserta</h5>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>ID Karya</th>
                                  <th>Judul</th>
                                  <th>Angktan</th>
                                  <th>Unit</th>
                                  <th>Total Rating</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><a href="<?= base_url('pamtek/id/'.$data->id,) ?>" target="_blank"><?php echo htmlentities($data->id, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td><?php echo htmlentities($data->judul, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->angkatan, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->unit, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->rating, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><a href="<?= base_url('pamtek/qrcode/'.$data->id,) ?>" class="btn btn-primary btn-icon"><i class='bx bx-qr-scan'></i></a></td>
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