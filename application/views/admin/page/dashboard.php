          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Hi, <?= $this->session->userdata('nama') ?> 🎉</h5>
                          <p class="mb-4"><?= $salam ?></p>

                          <a href="<?= base_url('auth/logout') ?>" class="btn btn-sm btn-outline-primary">Logout</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="<?= base_url('theme/') ?>assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if($this->session->userdata('role') == 1 ){ ?>
              <div class="row">
                <div class="col-lg-7 mb-4">
                  <div class="card">
                    <h5 class="card-header">Data Pending</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        <thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tipografi</strong></td>
                            <td><?= $tipografi ?></td>
                            <td>
                            <a href="<?= base_url('tipografi/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Desain Poster</strong></td>
                            <td><?= $desain_poster ?></td>
                            <td>
                            <a href="<?= base_url('desain_poster/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Videografi</strong></td>
                            <td><?= $videografi ?></td>
                            <td>
                            <a href="<?= base_url('videografi/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Mobile Legend</strong></td>
                            <td><?= $mobile_legend ?></td>
                            <td>
                            <a href="<?= base_url('mobile_legend/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>PUBGM</strong></td>
                            <td><?= $pubgm ?></td>
                            <td>
                            <a href="<?= base_url('pubgm/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Free Fire</strong></td>
                            <td><?= $free_fire ?></td>
                            <td>
                            <a href="<?= base_url('free_fire/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Cipta Puisi</strong></td>
                            <td><?= $cipta_puisi ?></td>
                            <td>
                            <a href="<?= base_url('cipta_puisi/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Vocal Solo</strong></td>
                            <td><?= $vocal_solo ?></td>
                            <td>
                            <a href="<?= base_url('vocal_solo/pending') ?>" class="btn btn-icon btn-primary">
                              <i class="bx bx-link-alt"></i>
                            </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Log Aktifitas</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <?php foreach ($log as $data) {?>
                        <li class="d-flex mb-3">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0"><?= $data->nama ?></h6>
                              <small class="text-muted d-block mb-1"><?= $data->ip ?></small>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <small class="text-muted"><?= $data->date ?></small>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
            <!-- / Content -->