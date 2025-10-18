<div class="container" style="margin-top: 50px">
  <div class="row">
    <div class="col-sm-2 col-md-2"></div>
    <div class="col col-sm-10 col-md-10">
      <form action="<?= site_url('form/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group col col-md-7">
          <label>ประเภทปัญหา</label>
          <select name="case_type" class="form-control" required>
            <?php if(set_value('case_type')!=''){?>
            <option value="<?= set_value('case_type'); ?>"><?= set_value('case_type'); ?></option>
            <?php } else{
            echo '<option value="">Choose...</option>';
            }
            ?>
            <option value="คอมพิวเตอร์">-คอมพิวเตอร์-</option>
            <option value="แขนโรบอท">-โปรแกรม-</option>
            <option value="ประปา">-ประปา -</option>
            <option value="ไฟฟ้า">-ไฟฟ้า-</option>
            <option value="อื่นๆ">-อื่นๆ-</option>
          </select>
        </div>
        <div class="form-group col col-md-7">
          <label>รายละเอียดปัญหา</label>
          <textarea name="case_detail" class="form-control" required minlength="5" placeholder="*ต้องการข้อมูล"><?= set_value('case_detail'); ?></textarea>
          <span class="fr"><?= form_error('case_detail'); ?></span>
        </div>
        <div class="form-group col col-md-7">
          <label>สถานที่</label>
          <textarea name="case_loc" class="form-control" required minlength="5" placeholder="*ระบุ Station ตำแหน่งที่ทำงานให้ครบ"><?= set_value('case_loc'); ?></textarea>
          <span class="fr"><?= form_error('case_loc'); ?></span>
        </div>
        <div class="form-group col col-md-5">
          <label>ชื่อผู้แจ้ง</label>
          <input type="text" name="p_name" class="form-control" required minlength="3" placeholder="*ระบุชื่อ" value="<?= set_value('p_name'); ?>">
          <span class="fr"><?= form_error('p_name'); ?></span>
        </div>
        <div class="form-group col col-md-5">
          <label>อีเมลผู้แจ้ง</label>
          <input type="email" name="p_email" class="form-control" required  placeholder="*อีเมล์ติดต่อ" value="<?= set_value('p_email'); ?>">
          <span class="fr"><?= form_error('p_email'); ?></span>
        </div>
        <div class="form-group col  col-md-5">
          <label>ภาพประกอบ (บังคับ)</label>
          <input type="file" name="p_img" class="form-control"  accept="image/*" required>
          <span class="fr"><?= $error;?></span>
        </div>
        <div class="form-group col col-md-5">
          <button type="submit" class="btn btn-primary" style="width: 100%">แจ้งซ่อม</button>
        </div>
      </form>
    </div>
  </div>
</div>