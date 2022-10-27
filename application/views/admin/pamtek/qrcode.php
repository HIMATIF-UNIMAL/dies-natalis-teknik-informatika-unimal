<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="card-title mb-0">
                        <h5>QrCode Karya</h5>
                      </div>
                      <div>
                          <button class="btn btn-primary" onclick="cetak()"><i class=" bx bx-printer"></i>cetak</button>
                      </div>
                    </div>
                    <div class="card-body" id="qr">
                      <div class="row justify-content-center">
                        <div id="qrcode" class="text-center" style="width:300px; height:300px;" class="img-fluid"></div>
                        <h1 class="text-center text-dark fw-bold mt-1">Scan Me</h1>
                        <h6 class="text-center text-dark"><?php echo $user['judul']; ?></h6>
                      </div>
                          <script type="text/javascript">
                          var qrcode = new QRCode(document.getElementById("qrcode"), {
                          });
                            qrcode.makeCode('<?= base_url('pamtek/id/') ?><?php echo $user['id']; ?>');
                          </script>
                          <script>
                            function cetak(){
                              var element = document.getElementById('qr');
                              var opt = {
                              margin:       0.1,
                              filename:     'qrcode.pdf',
                              image:        { type: 'jpeg', quality: 9 },
                              html2canvas:  { scale: 4 },
                              jsPDF:        { unit: 'in', format: 'A6' }
                              };
                              html2pdf().set(opt).from(element).save();
                            }
                          </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->