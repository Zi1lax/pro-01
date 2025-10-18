<!-- Import Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="container" style="margin-top: 50px; font-family: 'Kanit', sans-serif;">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-6 col-sm-12">
      <!-- Card Container -->
      <div class="card shadow-lg rounded-lg" style="border: 3px solid #002D72;">
        <!-- Logo Header -->
        <div class="card-header text-center" style="background-color: #002D72; color: #FFD700;">
          <h4 class="mt-2">ระบบแจ้งซ่อมออนไลน์</h4>
          <h6>คณะเทคโนโลยีสารสนเทศ</h6>
        </div>

        <!-- Login Form -->
        <div class="card-body">
          <form action="<?= site_url('login/authen');?>" method="post" class="form-horizontal">

            <!-- Email/Username -->
            <div class="mb-3">
              <label for="admin_email" class="form-label" style="color: #002D72;">
                <i class="fa fa-envelope"></i> Email/Username
              </label>
              <input type="email" name="admin_email" class="form-control" required minlength="3" placeholder="กรอกอีเมลหรือชื่อผู้ใช้" value="<?= set_value('admin_email'); ?>">
              <small class="text-danger"><?= form_error('admin_email'); ?></small>
            </div>

            <!-- Password -->
            <div class="mb-4">
              <label for="admin_pwd" class="form-label" style="color: #002D72;">
                <i class="fa fa-lock"></i> Password
              </label>
              <input type="password" name="admin_pwd" class="form-control" required placeholder="กรอกรหัสผ่าน" value="<?= set_value('admin_pwd'); ?>">
              <small class="text-danger"><?= form_error('admin_pwd'); ?></small>
            </div>

            <!-- Submit Button -->
            <div class="d-grid mb-3">
              <button type="submit" class="btn text-white" style="background-color: #002D72;">
                <i class="fa fa-sign-in-alt"></i> เข้าสู่ระบบ
              </button>
            </div>

            

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
