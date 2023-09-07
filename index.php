<!-- auth-login.php -->
<?php 
session_start();
  if(isset($_SESSION['user_id'] )){
        if ($_SESSION['user_level'] == 'admin') {
              header("Location: admin/index.php");
          }
        if ($_SESSION['user_level'] == 'user') {
              header("Location: user/index.php");
          } else {
        echo "<script>alert('User หรือ Password ไม่ถูกต้อง');</script>";
      }
  exit();
}
    include 'include-file/header.php';
?>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.php" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="./assets/img/favicon/favicon.ico" alt="">
                                </span>
                                <div style="padding-top:15px;">
                                    <span
                                        class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">Kids-d</span>
                                    <p> (Development)</p>
                                </div>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">เข้าสู่ระบบ! 👋</h4>
                        <p class="mb-4">กรุณาลงชื่อเข้าใช้บัญชีของคุณ</p>

                        <form id="formAuthentication" class="mb-3" action="action-login-user.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">อีเมล</label>
                                <input type="text" class="form-control" id="email" name="email-username"
                                    placeholder="กรุณากรอกอีเมล" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">รหัสผ่าน</label>
                                    <a href="auth-forgot-password.php">
                                        <small>ลืมรหัสผ่าน?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> จำฉันไว้ </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">เข้าสู่ระบบ</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>ยังไม่มีบัญชี?</span>
                            <a href="auth-register.php">
                                <span>ลงทะเบียนที่นี่</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->
    <?php 
    include 'include-file/footer.php';
?>