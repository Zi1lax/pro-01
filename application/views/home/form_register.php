<div class="container" style="margin-top: 50px; font-family: 'Kanit', sans-serif;">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <!-- Card Container -->
      <div class="card shadow-lg rounded-lg" style="border: 2px solid #002D72;">
        <!-- Header -->
        <div class="card-header text-center" style="background-color: #002D72; color: #FFD700;">
          <h4 class="mt-3">ฟอร์มสมัครสมาชิกระบบแจ้งซ่อม</h4>
          <h6>มหาวิทยาลัยราชภัฏเพชรบุรี</h6>
        </div>

        <!-- Form -->
        <div class="card-body" style="background-color: #f0f2f5;">
          <form action="<?= site_url('register/save'); ?>" method="post" class="form-horizontal">

            <!-- Email/Username -->
            <div class="mb-3">
              <label for="admin_email" class="form-label" style="color: #002D72;">
                <i class="fa fa-envelope"></i> Email/Username
              </label>
              <input type="email" name="admin_email" class="form-control" required placeholder="กรอกอีเมลหรือชื่อผู้ใช้" value="<?= set_value('admin_email'); ?>">
              <small class="text-danger"><?= form_error('admin_email'); ?></small>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="admin_pwd" class="form-label" style="color: #002D72;">
                <i class="fa fa-lock"></i> Password
              </label>
              <input type="password" name="admin_pwd" class="form-control" required placeholder="ภาษาอังกฤษ/ตัวเลข/ขั้นต่ำ 2 ตัว" minlength="2" value="<?= set_value('admin_pwd'); ?>">
              <small class="text-danger"><?= form_error('admin_pwd'); ?></small>
            </div>

            <!-- ชื่อ - สกุล -->
            <div class="mb-3">
              <label for="admin_name" class="form-label" style="color: #002D72;">
                <i class="fa fa-user"></i> ชื่อ - สกุล
              </label>
              <input type="text" name="admin_name" class="form-control" required placeholder="ชื่อ - สกุล ขั้นต่ำ 4 ตัว" minlength="4" value="<?= set_value('admin_name'); ?>">
              <small class="text-danger"><?= form_error('admin_name'); ?></small>
            </div>

            <!-- เบอร์โทรศัพท์ -->
            <div class="mb-4">
              <label for="admin_phone" class="form-label" style="color: #002D72;">
                <i class="fa fa-phone"></i> เบอร์โทรศัพท์
              </label>
              <input type="text" name="admin_phone" class="form-control" required placeholder="กรอกเบอร์โทรศัพท์ ขั้นต่ำ 4 ตัว" minlength="4" value="<?= set_value('admin_phone'); ?>">
              <small class="text-danger"><?= form_error('admin_phone'); ?></small>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button class="btn text-white" type="submit" style="background-color: #002D72;">
                <i class="fa fa-user-plus"></i> สมัครสมาชิก
              </button>
              <a class="btn btn-danger" href="<?= site_url(''); ?>" role="button">
                <i class="fa fa-times-circle"></i> ยกเลิก
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
