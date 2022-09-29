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
                                  <th>Nama</th>
                                  <th>No. WA</th>
                                  <th>Username IG</th>
                                  <th>Bukti</th>
                                  <th>Anggota 1</th>
                                  <th>Anggota 2</th>
                                  <th>Waktu Validasi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->ig, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><a href="<?= base_url('file/'.$data->bukti) ?>"><?php echo htmlentities($data->bukti, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td><?php echo htmlentities($data->nama1, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->nama2, ENT_QUOTES, 'UTF-8');?></td>
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