<?php 
include('../condb.php'); 
    include 'include-file/header.php';
?>

  <body>
  <?php 
    include 'include-file/menu.php';
    include 'include-file/navbar.php';
?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
           <!-- Content -->

           <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Assessment /</span> ผลการประเมิน</h4>

              <!-- Toast with Placements -->
              <div
                class="bs-toast toast toast-placement-ex m-2"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
                <div class="toast-header">
                  <i class="bx bx-bell me-2"></i>
                  <div class="me-auto fw-semibold">Bootstrap</div>
                  <small>11 mins ago</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.</div>
              </div>
              <!-- Toast with Placements -->

              <!-- Bootstrap Toasts with Placement -->
              <div class="card mb-4">
                <h5 class="card-header">ผลการประเมิน</h5>
                <div class="card-body">
                  <div class="row gx-3 gy-2 align-items-center">
                    <div class="col-md-12">
                    <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <i class='bx bx-palette me-2' ></i>
                          <div class="me-auto fw-semibold">สีขาว</div>
                          <!-- <small>11 mins ago</small> -->
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> -->
                        </div>
                        <div class="toast-body">
                         ยินดีด้วย! ลูกของคุณผ่านทุกข้อและไม่มีโรคประจำตัว
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                      <a href="1.php" id="showToastPlacement" class="btn btn-primary d-block">ดูประวัติการประเมิน</a>
                      <!-- <button id="showToastPlacement" class="btn btn-primary d-block">ดูประวัติการประเมิน</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Bootstrap Toasts with Placement -->

              <!-- Bootstrap Toasts Styles -->

                <div class="row g-0">
                  <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                <h5 class="card-header">ผลลัพธ์การประเมิน</h5>

                    <div class="d-flex align-items-end row">
                      <div class="col-sm-2 text-center" >
                      </div>
                      <div class="col-sm-8 text-center" >
                        <div class="card-body">
                        <img
                            src="../assets/img/backgrounds/result.png"
                            width="100%"
                            alt="background"
                          />
                        </div>
                      </div>
                  </div>
                </div>
                </div>
              </div>
              <!--/ Bootstrap Toasts Styles -->
            </div>
            <!-- / Content -->

            <?php 
    include 'include-file/footer.php';
?>