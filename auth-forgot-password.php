<?php 
    include 'include-file/header.php';
?>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Forgot Password -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img src="./assets/img/favicon/favicon.ico" alt="">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Kid-D</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">ลืมรหัสผ่าน? 🔒</h4>
              <p class="mb-4">กรอกอีเมลของคุณแล้วเราจะส่งคำแนะนำในการรีเซ็ตรหัสผ่านไปให้คุณ</p>
              <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">อีเมล</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="กรุณากรอกอีเมล"
                    autofocus
                  />
                </div>
                <button class="btn btn-primary d-grid w-100">ส่งลิงค์รีเซ็ต</button>
              </form>
              <div class="text-center">
                <a href="index.php" class="d-flex align-items-center justify-content-center">
                  <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                  กลับไปหน้าเข้าสู่ระบบ
                </a>
              </div>
            </div>
          </div>
          <!-- /Forgot Password -->
        </div>
      </div>
    </div>

    <!-- / Content -->
    <?php 
    include 'include-file/footer.php';
?>