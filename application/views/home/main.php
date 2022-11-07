          <!-- Content wrapper -->
          <div class="content-wrapper mb-4">
            <!-- Content -->
            <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3 text-center justify-content-center" role="tablist">
                      <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">Kompetisi</button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">Pameran Teknologi</button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">Bootcamp</button>
                      </li>
                    </ul>
                    <div class="tab-content bg-transparent" style="border: none !important; box-shadow:none !important;">
                      <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">
                        <div class="row">
                          <div class="col-12">
                          <h3 class="pb-3">- Kompetisi Umum</h3>
                          </div>
                          <?php foreach($umum as $data){ ?>
                          <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card h-100">
                              <img class="card-img" src="<?php echo base_url('theme/') ?>assets/img/elements/dn19.png" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo htmlentities($data->kompetisi, ENT_QUOTES, 'UTF-8');?></h5>
                                <p class="card-text">
                                    Biaya Registrasi : <br> Rp. <?= number_format($data->price) ?>  <br>
                                </p>
                                <p class="card-text">
                                    Deadline Pendaftaran : <br> <?= date('d F Y', strtotime( $data->deadline)) ?> <br>
                                </p>
                                <div class="btn-group w-100" role="group" aria-label="Basic example">
                                  <a href="<?php echo htmlentities($data->guidebook, ENT_QUOTES, 'UTF-8');?>" class="btn btn-outline-light text-dark border border-secondary"><i class="bx bxs-download fs-4 lh-0"></i> Guidebook</a>
                                  <a href="<?= base_url(str_replace(" ","_", strtolower($data->kompetisi))) ?>" class="btn btn-secondary"> <i class="bx bxs-user-plus fs-4 lh-0"></i> Registrasi</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div>   
                        <div class="row mt-5">
                          <div class="col-12">
                          <h3 class="pb-3">- Kompetisi Mahasiswa</h3>
                          </div>
                          <?php foreach($mahasiswa as $data){ ?>
                          <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card h-100">
                              <img class="card-img-top" src="<?php echo base_url('theme/') ?>assets/img/elements/dn19.png" alt="Card image cap">
                              <div class="card-body">
                              <h5 class="card-title"><?php echo htmlentities($data->kompetisi, ENT_QUOTES, 'UTF-8');?></h5>
                                <p class="card-text">
                                    Biaya Registrasi : <br> Rp. <?= number_format($data->price) ?>  <br>
                                </p>
                                <p class="card-text">
                                    Deadline Pendaftaran : <br> <?= date('d F Y', strtotime( $data->deadline)) ?> <br>
                                </p>
                                <div class="btn-group w-100" role="group" aria-label="Basic example">
                                  <a href="<?php echo htmlentities($data->guidebook, ENT_QUOTES, 'UTF-8');?>" class="btn btn-outline-light text-dark border border-secondary"><i class="bx bxs-download fs-4 lh-0"></i> Guidebook</a>
                                  <a href="<?= base_url(str_replace(" ","_", strtolower($data->kompetisi))) ?>" class="btn btn-secondary"> <i class="bx bxs-user-plus fs-4 lh-0"></i> Registrasi</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div> 
                      </div>
                      <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <div class="row">
                          <div class="col-12">
                          <h3 class="pb-3">- Pameran Teknologi</h3>
                          </div>
                          <?php foreach($pamtek as $data){ ?>
                          <div class="col-md-6 col-lg-3 mb-3">
                            <a href="<?= base_url('pamtek/id/') ?><?php echo htmlentities($data->id, ENT_QUOTES, 'UTF-8');?>">  
                            <div class="card h-100">
                              <img class="card-img-top" src="<?php echo base_url('file/') ?><?php echo htmlentities($data->foto, ENT_QUOTES, 'UTF-8');?>" alt="<?php echo htmlentities($data->judul, ENT_QUOTES, 'UTF-8');?>">
                              <div class="card-body">
                              <h5 class="card-title"><?php echo htmlentities($data->judul, ENT_QUOTES, 'UTF-8');?></h5>
                                <p class="card-text  text-dark">
                                Angkatan :  <?php echo htmlentities($data->angkatan, ENT_QUOTES, 'UTF-8');?>  <br>
                                </p>
                                <p class="card-text  text-dark">
                                    Unit :  <?php echo htmlentities($data->unit, ENT_QUOTES, 'UTF-8');?> <br>
                                </p>
                                <!-- <div class="btn-group w-100" role="group" aria-label="Basic example">
                                  <a href="<?= base_url('pamtek/id/') ?><?php echo htmlentities($data->id, ENT_QUOTES, 'UTF-8');?>" class="btn btn-primary"> Lihat Karya</a>
                                </div> -->
                              </div>
                            </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div> 
                      </div>
                      <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                        <div class="row">
                          <div class="col-12">
                          <h3 class="pb-3">- Bootcamp</h3>
                          </div>
                          <?php foreach($lainnya as $data){ ?>
                          <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card h-100">
                              <img class="card-img-top" src="<?php echo base_url('theme/') ?>assets/img/elements/dn19.png" alt="Card image cap">
                              <div class="card-body">
                              <h5 class="card-title"><?php echo htmlentities($data->kompetisi, ENT_QUOTES, 'UTF-8');?></h5>
                                <p class="card-text">
                                biaya registrasi per tim (3 orang) : <br> Rp. <?= number_format($data->price) ?>  <br>
                                </p>
                                <p class="card-text">
                                    Deadline Pendaftaran : <br> <?= date('d F Y', strtotime( $data->deadline)) ?> <br>
                                </p>
                                <div class="btn-group w-100" role="group" aria-label="Basic example">
                                  <a href="<?php echo htmlentities($data->guidebook, ENT_QUOTES, 'UTF-8');?>" class="btn btn-outline-light text-dark border border-secondary"><i class="bx bxs-download fs-4 lh-0"></i> Guidebook</a>
                                  <a href="<?= base_url(str_replace(" ","_", strtolower($data->kompetisi))) ?>" class="btn btn-secondary"> <i class="bx bxs-user-plus fs-4 lh-0"></i> Registrasi</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
            <!-- / Content -->
          </div>
