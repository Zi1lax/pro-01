<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
       แบบฟอร์มแจ้งซ่อม  <?php  echo $_SESSION['admin_name'];?>
       
        </h1>
    </section>
    <!-- Top menu -->
    
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            
            <div class="box-body">
                <div id="example1_wrapper" >
                    <div class="row">
                        <div class="col-sm-1"></div>
                         <div class="col-sm-10">
                            <h4>แบบฟอร์มแจ้งซ่อม</h4>
                            <hr>

                            <form action="<?= site_url('member/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                           
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">ประเภทปัญหา</div>
                                    <div class="col-sm-5">
                                    <select name="case_type" class="form-control" required>
                                        <?php if(set_value('case_type')!=''){?>
                                        <option value="<?= set_value('case_type'); ?>"><?= set_value('case_type'); ?></option>

                                        <?php } else{
                                        echo '<option value="">Choose...</option>';
                                      

                                        foreach ($rs as $row) { ?>
                                        <option value="<?=$row->d_name;?>">-<?=$row->d_name;?>-</option>
                                    <?php }   } ?>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                     <div class="col-sm-2 control-label">รายละเอียดปัญหา</div>
                                     <div class="col-sm-5">
                                    <textarea name="case_detail" class="form-control" required minlength="5" placeholder="*ต้องการข้อมูล"><?= set_value('case_detail'); ?></textarea>
                                    <span class="fr"><?= form_error('case_detail'); ?></span>
                                </div>
                                </div>
                                <div class="form-group">
                                      <div class="col-sm-2 control-label">สถานที่</div>
                                      <div class="col-sm-5">
                                    <textarea name="case_loc" class="form-control" required minlength="5" placeholder="*ระบุ Station ตำแหน่งที่ทำงานให้ครบ"><?= set_value('case_loc'); ?></textarea>
                                    <span class="fr"><?= form_error('case_loc'); ?></span>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">ชื่อผู้แจ้ง</div>
                                    <div class="col-sm-5">
                                    <input type="text" name="p_name" class="form-control" required minlength="3" placeholder="*ระบุชื่อ" value="<?=$_SESSION['admin_name']; ?>" readonly>
                                     
                                </div>
                                </div>
                                <div class="form-group">
                                      <div class="col-sm-2 control-label">อีเมลผู้แจ้ง</div>
                                      <div class="col-sm-5">
                                    <input type="email" name="p_email" class="form-control" required  placeholder="*อีเมล์ติดต่อ" value="<?=$_SESSION['admin_email']; ?>" readonly>
                                     
                                </div>
                                </div>
                                <div class="form-group">
                                      <div class="col-sm-2 control-label">ภาพประกอบ (บังคับ)</div>
                                      <div class="col-sm-5">
                                    <input type="file" name="p_img" class="form-control"  accept="image/*" required>
                                    <span class="fr"><?=$error;?> </span>
                                </div>
                                </div>
                                <div class="form-group">
                                     <div class="col-sm-2 control-label"></div>
                                      <div class="col-sm-5">
                                        <input type="hidden" name="member_id" value="<?=$_SESSION['id'];?>">
                                    <button type="submit" class="btn btn-success" style="width: 100%">แจ้งซ่อม</button>
                                </div>
                                </div>
                        
                            </form>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
            </section><!-- /.content -->
            </div><!-- /.content-wrapper -->