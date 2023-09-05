<?php 
    include 'include-file/header.php';
?>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
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
              <h4 class="mb-2">สร้างบัญชี 🚀</h4>
              <p class="mb-4">กรุณากรอกข้อมูลบัญชีของคุณ</p>

              <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">ชื่อผู้ใช้</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="กรุณากรอกชื่อผู้ใช้"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">อีเมล</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="กรุณากรอกอีเมล" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">รหัสผ่าน</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">ฉันยอมรับนโยบาย
                      <a href="javascript:void(0);">ความเป็นส่วนตัวและข้อกำหนด</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>มีบัญชีอยู่แล้ว? </span>
                <a href="index.php">
                  <span>ลงชื่อเข้าใช้แทน</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->
    <?php 
    include 'include-file/footer.php';
?>