<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                    © DN19. Powered by
                  <a href="https://himatif.unimal.ac.id" target="_blank" class="footer-link">HIMATIF UNIMAL</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    <script src="<?php echo base_url('theme/') ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url('theme/') ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url('theme/') ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url('theme/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url('theme/') ?>assets/vendor/js/menu.js"></script>
    <script src="<?php echo base_url('theme/') ?>assets/js/pages-account-settings-account.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/page/dashboard') AND ( $this->session->userdata('role') == 1)){ ?>
    <script>
      var options = {
        chart: {
          type: 'bar'
        },
        series: [{
          name: 'sales',
          data: [<?php foreach($hasil as $data){echo '"'.$data->rating.'" ,';}?>]
        }],
        xaxis: {
          categories: [<?php foreach($hasil as $data){echo '"'.$data->judul.'" ,';}?>]
        }
      }

      var chart = new ApexCharts(document.querySelector("#rating"), options);

      chart.render();
      <?php } ?>
    </script>


    <!-- Main JS -->
    <script src="<?php echo base_url('theme/') ?>assets/js/main.js"></script>
    <script>
       setTimeout(function () {
          $("#toast").removeClass("show");
        }, 3000);
    </script>
    <!-- Page JS -->
  </body>
</html>