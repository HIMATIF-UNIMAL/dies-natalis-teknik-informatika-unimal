<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Rating Pengunjung</h5>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Tanggal/Waktu</th>
                                  <th>Judul Karya</th>
                                  <th>Nama</th>
                                  <th>Asal Instansi</th>
                                  <th>Komentar</th>
                                  <th>Total Rating</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($hasil as $data){ ?>
                              <tr>
                                  <td><?php echo htmlentities($data->date, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->judul, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->instansi, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->komen, ENT_QUOTES, 'UTF-8');?></td>
                                  <td><?php echo htmlentities($data->jumlah, ENT_QUOTES, 'UTF-8');?></td>
                                  <td>
                                    <?php
                                     if($data->komen != '') {
                                    ?>
                                    <a href="<?= base_url('pamtek/hapus_komentar/'.$data->id_rating) ?>" class="btn btn-danger"><i class="bx bx-trash"></i> Hapus Komentar</a>
                                    <?php
                                     }
                                    ?>
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