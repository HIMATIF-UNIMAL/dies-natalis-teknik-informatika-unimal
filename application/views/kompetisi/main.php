          <!-- Content wrapper -->
          <div class="content-wrapper mb-4">
            <!-- Content -->
            <div class="container">
              <div class="row mt-5">
                <div class="col-md">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img class="card-img card-img-left" src="<?php echo base_url('theme/') ?>assets/img/elements/dn19.png" alt="Card image">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content
                            is a
                            little bit longer.
                          </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content
                            is a
                            little bit longer.
                          </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <img class="card-img card-img-right" src="<?php echo base_url('theme/') ?>assets/img/elements/dn19.png" alt="Card image">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
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
                        <a href="<?php echo htmlentities($data->guidebook, ENT_QUOTES, 'UTF-8');?>" class="btn btn-outline-primary"><i class="bx bxs-download fs-4 lh-0"></i> Guidebook</a>
                        <a href="<?= base_url(str_replace(" ","_", strtolower($data->kompetisi))) ?>" class="btn btn-primary"> <i class="bx bxs-user-plus fs-4 lh-0"></i> Registrasi</a>
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
                        <a href="<?php echo htmlentities($data->guidebook, ENT_QUOTES, 'UTF-8');?>" class="btn btn-outline-primary"><i class="bx bxs-download fs-4 lh-0"></i> Guidebook</a>
                        <a href="<?= base_url(str_replace(" ","_", strtolower($data->kompetisi))) ?>" class="btn btn-primary"> <i class="bx bxs-user-plus fs-4 lh-0"></i> Registrasi</a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div> 
            </div>
            <!-- / Content -->
          </div>
