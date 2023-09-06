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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">ฟอร์ม/</span> เพิ่มข้อมูลผู้ปกครองและลูก</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">เพิ่มข้อมูลผู้ปกครอง</h5>
                      <small class="text-muted float-end">กรุณากรอกข้อมูลให้ครบทุกช่อง</small>
                    </div>
                    <div class="card-body">
                      <form role="form" action="add-parent-child-information-db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label">ชื่อจริง</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"
                              ><i class='bx bxs-user-rectangle' ></i></span>
                            <input
                              type="text"
                              name="firstName"
                              class="form-control"
                              placeholder="กรุณากรอกชื่อจริง"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">นามสกุล</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class='bx bxs-user-account' ></i></span>
                            <input
                              type="text"
                              name="lastName"
                              id="basic-icon-default-company"
                              class="form-control"
                              placeholder="กรุณากรอกนามสกุล"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">เพศ</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              >
                              <i class='bx bx-male'></i>
                              <i class='bx bx-female'></i>
                          </span>
                            <select class="form-select" id="gender" name="gender">
                            <option value="" disabled selected>กรุณาเลือกเพศ</option>
                            <option value="male" >ชาย</option>
                            <option value="female">หญิง</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">อายุ</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-body'></i></span>
                            <input
                              type="number"
                              name="age"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกอายุ"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">โรคประจำตัว</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-first-aid'></i></span>
                            <input
                              type="text"
                              name="disease"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกโรคประจำตัว"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">จำนวนเด็กในความดูแล</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-user-plus' ></i></span>
                            <input
                              type="number"
                              name="childNo"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกจำนวนเด็กในความดูแล"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                        <!-- <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">ความเกี่ยวข้องกับเด็ก</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-user-pin' ></i></span>
                            <input
                              type="text"
                              name="relation"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกความเกี่ยวข้องกับเด็ก"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div> -->
                        <div class="mb-3">
                        <label for="exampleDataList" class="form-label">ความเกี่ยวข้องกับเด็ก</label>
                        <input
                          class="form-control"
                          list="datalistOptions"
                          id="exampleDataList"
                          name="relation"
                          placeholder="พิมพ์เพื่อค้นหา..."
                        />
                        <datalist id="datalistOptions">
                          <option value="พ่อ"></option>
                          <option value="แม่"></option>
                          <option value="ญาติ"></option>
                        </datalist>
                      </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">โทรศัพท์ที่ติดต่อได้</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-phone' ></i></span>
                            <input
                              type="text"
                              name="telephone"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกเบอร์โทรศัพท์ Ex.090-000-0000"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                        
                        <!-- <button type="submit" class="btn btn-primary">บันทึก</button>
                      </form> -->
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">เพิ่มข้อมูลลูก</h5>
                      <small class="text-muted float-end">กรุณากรอกข้อมูลให้ครบทุกช่อง</small>
                    </div>
                    <div class="card-body">
                      <!-- <form> -->
                      <div class="mb-3">
                          <label class="form-label">ชื่อจริง</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"
                              ><i class='bx bxs-user-rectangle' ></i></span>
                            <input
                              type="text"
                              name="firstName"
                              class="form-control"
                              placeholder="กรุณากรอกชื่อจริง"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">นามสกุล</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class='bx bxs-user-account' ></i></span>
                            <input
                              type="text"
                              name="lastName"
                              id="basic-icon-default-company"
                              class="form-control"
                              placeholder="กรุณากรอกนามสกุล"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">เพศ</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              >
                              <i class='bx bx-male'></i>
                              <i class='bx bx-female'></i>
                          </span>
                            <select class="form-select" id="gender" name="gender">
                            <option value="" disabled selected>กรุณาเลือกเพศ</option>
                            <option value="male" >ชาย</option>
                            <option value="female">หญิง</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">วันเดือนปีเกิด</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-calendar"></i
                            ></span>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="" >
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">อายุ</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-body'></i></span>
                            <input
                              type="number"
                              name="age"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกอายุ"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">น้ำหนักปัจจุบัน</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-body"></i
                            ></span>
                            <input
                              type="number"
                              name="weight"
                              id="basic-icon-default-company"
                              class="form-control"
                              placeholder="กรุณากรอกน้ำหนักปัจจุบัน"
                             
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">ส่วนสูง</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-body"></i
                            ></span>
                            <input
                              type="number"
                              name="height"
                              id="basic-icon-default-company"
                              class="form-control"
                              placeholder="กรุณากรอกส่วนสูง"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">โรคประจำตัว</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class='bx bx-first-aid'></i></span>
                            <input
                              type="text"
                              name="disease"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="กรุณากรอกโรคประจำตัว"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <small class="text-light fw-semibold">โรคทางพัฒนาการ</small>
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="developmentalDisorder" id="none" value="ไม่มี" checked />
                            <label class="form-check-label" for="defaultCheck3"> ไม่มี </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="developmentalDisorder" id="autism" value="ออทิสติก" />
                            <label class="form-check-label" for="defaultCheck1"> โรคออทิสติก </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="developmentalDisorder" id="adhd" value="สมาธิสั้น" />
                            <label class="form-check-label" for="defaultCheck1"> โรคสมาธิสั้น </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="developmentalDisorder" id="brainDisorder" value="ทางสมอง" />
                            <label class="form-check-label" for="defaultCheck1"> โรคทางสมอง </label>
                          </div>
                        </div>
                        
                      
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">น้ำหนักแรกคลอด</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class='bx bxs-baby-carriage'></i></span>
                            <input
                              type="number"
                              name="birthWeight"
                              id="basic-icon-default-company"
                              class="form-control"
                              placeholder="กรุณากรอกน้ำหนักแรกคลอด"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <small class="text-light fw-semibold">ประวัติการคลอด</small>
                          <div class="form-check mt-3">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="birthHistory" id="onDueDate" value="ครบกำหนด"
                              checked
                            />
                            <label class="form-check-label" for="defaultRadio2"> ครบกำหนด </label>
                          </div>
                          <div class="form-check ">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="birthHistory" id="beforeDueDate" value="ก่อนกำหนด"
                            />
                            <label class="form-check-label" for="defaultRadio1"> ก่อนกำหนด </label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-message">ที่อยู่ปัจจุบัน</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"
                              ><i class="bx bx-address"></i
                            ></span>
                            <textarea
                              id="basic-icon-default-message"
                              name="address"
                              class="form-control"
                              placeholder="กรุณากรอกที่อยู่ปัจจุบัน"
                            ></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">บันทึก</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <?php 
    include 'include-file/footer.php';
?>