<!-- Import Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

<!-- Header -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="jumbotron text-center" style="margin-bottom: 0; background-color: #002D72; color: #FFD700; font-family: 'Kanit', sans-serif;">
      <img src="/helpdesk2/images/PBRU-logo.png" alt="PBRU Logo" style="height: 150px; width: auto;">
        <h3 class="mb-0">::IT Repair Notification System ::</h3>
      </div>
    </div>
  </div>
</div>

<!-- Navbar -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFD700;">
        <a class="navbar-brand" href="<?= site_url('');?>" style="color: #002D72; font-weight: bold;">HelpDesk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('');?>" style="color: #002D72;">หน้าหลัก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('register');?>" style="color: #002D72;">สมัครสมาชิก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('login');?>" style="color: #002D72;">เข้าสู่ระบบ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
