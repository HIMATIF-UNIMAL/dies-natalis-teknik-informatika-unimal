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
                                  <th>Asal Universitas</th>
                                  <th>No. WA</th>
                                  <th>kTM / KRS</th>
                                  <th>Bukti</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->univ, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><a href="<?= base_url('file/'.$data->ktm) ?>"><?php echo htmlentities($data->ktm, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td><a href="<?= base_url('file/'.$data->bukti) ?>"><?php echo htmlentities($data->bukti, ENT_QUOTES, 'UTF-8');?></a></td>
                                  <td>
                                  <a href="<?= base_url('problem_solving_coding/aksi_terima/'.$data->id) ?>" class="btn btn-icon btn-success">
                                    <span class="tf-icons bx bx-check"></span>
                                  </a>
                                  <a href="<?= base_url('problem_solving_coding/aksi_tolak/'.$data->id) ?>" class="btn btn-icon btn-danger">
                                    <span class="tf-icons bx bx-x"></span>
                                  </a>
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