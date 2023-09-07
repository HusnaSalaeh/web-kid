    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="../assets/img/favicon/favicon.ico" width="48px" alt="icon">
                        </span>
                        <div style="padding-top:15px;">
                            <span class="app-brand-text demo text-body fw-bolder text-uppercase">Kids-D</span>
                            <p>(Development)</p>
                        </div>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">หน้าหลัก</div>
                        </a>
                    </li>
                    <!-- <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit"></i>
                <div data-i18n="Analytics">แก้ไขข้อมูลส่วนตัว</div>
              </a>
            </li> -->
                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">ข้อมูลส่วนตัว</span>
                    </li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="add-parent-child-information.php"
                            class="menu-link <?php if($menu=="add_info"){echo "active";} ?> ">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Tables">เพิ่มข้อมูลผู้ปกครอง/ลูก</div>
                        </a>
                    </li>
                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">การประเมิน</span></li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="assessment-list.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Tables">ทำแบบประเมิน</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="assessment-result.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Tables">ผลการประเมิน</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="assessment-result2.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Tables">ผลการประเมิน2</div>
                        </a>
                    </li>
                    <!--  -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
                    <li class="menu-item">
                        <a href="https://line.me/en/" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Support">เกี่ยวกับเรา</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../logout.php" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div data-i18n="Support">ออกจากระบบ</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->