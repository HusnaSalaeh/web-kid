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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Assessment /</span> ช่วงอายุแรกเกิด 1 เดือน
            </h4>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">การประเมินช่วงอายุแรกเกิด 1 เดือน</h5>
                        <!-- Assessment -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <h5 class="fw-semibold d-block">คำชี้แจง</h5>
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input " type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1" onclick="javascript: return false;" />
                                            <label class="form-check-label" for="inlineRadio1">ผ่าน
                                                (เด็กทำได้ติ๊กลงในช่องนี้)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2" onclick="javascript: return false;" />
                                            <label class="form-check-label" for="inlineRadio2">ไม่ผ่าน
                                                (เด็กทำไม่ได้ติ๊กลงในช่องนี้)</label>
                                        </div>
                                    </div>
                                    <div style="width:100%;" class="col-md-6">
                                        <div class="embed-responsive embed-responsive-1by1">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <form id="Assessment" method="POST" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="fw-semibold d-block">
                                                1.ท่านอนคว่ำยกศรีษะและหันไปข้างใดข้างหนึ่งได้</h5>
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="pass1">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions1" id="pass1" value="option1" />
                                                    ผ่าน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="fail1">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions1" id="fail1" value="option2" />
                                                    ไม่ผ่าน</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <i class='bx bxs-videos'></i>
                                                </div>
                                                <div class="flex-grow-1 row">
                                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                        <h6 class="mb-0"> แนบคลิปวิดีโอ</h6>
                                                        <small class="text-muted">View Click -></small>
                                                    </div>
                                                    <div class="col-4 col-sm-5 text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            <i class="bx bx-link-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="fw-semibold d-block">2.มองตามถึงกึ่งกลางลำตัว</h5>
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="pass2">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions2" id="pass2" value="option1" />
                                                    ผ่าน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="fail2">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions2" id="fail2" value="option2" />
                                                    ไม่ผ่าน</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <i class='bx bxs-videos'></i>
                                                </div>
                                                <div class="flex-grow-1 row">
                                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                        <h6 class="mb-0"> แนบคลิปวิดีโอ</h6>
                                                        <small class="text-muted">View Click -></small>
                                                    </div>
                                                    <div class="col-4 col-sm-5 text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            <i class="bx bx-link-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="fw-semibold d-block">
                                                3.สะดุ้งหรือเคลื่อนไหวร่างกายเมื่อได้ยินเสียงพูดระดับปกติ</h5>
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="pass3">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions3" id="pass3" value="option1" />
                                                    ผ่าน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="fail3">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions3" id="fail3" value="option2" />
                                                    ไม่ผ่าน</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <i class='bx bxs-videos'></i>
                                                </div>
                                                <div class="flex-grow-1 row">
                                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                        <h6 class="mb-0"> แนบคลิปวิดีโอ</h6>
                                                        <small class="text-muted">View Click -></small>
                                                    </div>
                                                    <div class="col-4 col-sm-5 text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            <i class="bx bx-link-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="fw-semibold d-block">4.ส่งเสียงอ้อแอ้</h5>
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="pass4">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions4" id="pass4" value="option1" />
                                                    ผ่าน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="fail4">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions4" id="fail4" value="option2" />
                                                    ไม่ผ่าน</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <i class='bx bxs-videos'></i>
                                                </div>
                                                <div class="flex-grow-1 row">
                                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                        <h6 class="mb-0"> แนบคลิปวิดีโอ</h6>
                                                        <small class="text-muted">View Click -></small>
                                                    </div>
                                                    <div class="col-4 col-sm-5 text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            <i class="bx bx-link-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="fw-semibold d-block">5.มองจ้องหน้าได้นาน 1-2 วินาที</h5>
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="pass5">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions5" id="pass5" value="option1" />
                                                    ผ่าน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="fail5">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions5" id="fail5" value="option2" />
                                                    ไม่ผ่าน</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <i class='bx bxs-videos'></i>
                                                </div>
                                                <div class="flex-grow-1 row">
                                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                        <h6 class="mb-0"> แนบคลิปวิดีโอ</h6>
                                                        <small class="text-muted">View Click -></small>
                                                    </div>
                                                    <div class="col-4 col-sm-5 text-end">
                                                        <button type="button"
                                                            class="btn btn-icon btn-outline-secondary">
                                                            <i class="bx bx-link-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">บันทึกข้อมูล</button>
                                        <button type="reset" class="btn btn-outline-secondary">ล้างข้อมูล</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /Assessment -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->
            <?php 
    include 'include-file/footer.php';
?>