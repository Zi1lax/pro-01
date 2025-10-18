<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
      รายละเอียดการแจ้งซ่อม ของคุณ <?php  echo $_SESSION['admin_name'];?>
       
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
                            <h4>รายละเอียดการแจ้งซ่อม </h4>
                            <hr>
                            <form  class="form-horizontal">

                                 <div class="form-group">
                                    <div class="col-sm-2 control-label">เลขรับแจ้ง</div>
                                    <div class="col-sm-2">
                                    <input type="text" name="id" class="form-control" disabled   value="<?= $rs_detail->id;?>">
                                    
                                </div>
                                </div>
                           
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">สถานะ</div>
                                    <div class="col-sm-5">
                                    <?php
                                        $st = $rs_detail->case_status;
                                        if($st==1){
                                        $stMsg='รอดำเนินการ';
                                        }elseif ($st==2) {
                                        $stMsg='อยู่ระหว่างดำเนินการ';
                                        }elseif ($st==3) {
                                        $stMsg='ส่งซ่อมภายนอก';
                                        }elseif ($st==4) {
                                        $stMsg='ดำเนินการเสร็จสิ้น';
                                        }else{
                                        $stMsg='ยกเลิก';
                                        }
                                        ?>
                                        <input type="text" style="color:red;"  class="form-control"  value="<?= $stMsg;?>" disabled>
                                </div>
                                </div>

                                 <div class="form-group">
                                     <div class="col-sm-2 control-label">ประเภทปัญหา</div>
                                     <div class="col-sm-5">
                                    <select name="case_type" class="form-control" disabled>
            <option value="<?= $rs_detail->case_type;?>"><?= $rs_detail->case_type;?></option>
          </select>
                                </div>
                                </div>



                                <div class="form-group">
                                     <div class="col-sm-2 control-label">รายละเอียดปัญหา</div>
                                     <div class="col-sm-5">
                                    <textarea name="case_detail" class="form-control" disabled minlength="5" placeholder="*ต้องการข้อมูล"><?= $rs_detail->case_detail;?></textarea>
 
                                </div>
                                </div>


                                <div class="form-group">
                                      <div class="col-sm-2 control-label">สถานที่</div>
                                      <div class="col-sm-5">
                                    <textarea name="case_loc" class="form-control" disabled minlength="5" placeholder="*ระบุ Station ตำแหน่งที่ทำงานให้ครบ"><?= $rs_detail->case_loc;?></textarea>
 
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">ชื่อผู้แจ้ง</div>
                                    <div class="col-sm-5">
                                    <input type="text" name="p_name" class="form-control" disabled minlength="3" placeholder="*ระบุชื่อ" value="<?= $rs_detail->p_name;?>">
                                    <span class="fr"><?= form_error('p_name'); ?></span>
                                </div>
                                </div>
                                <div class="form-group">
                                      <div class="col-sm-2 control-label">อีเมลผู้แจ้ง</div>
                                      <div class="col-sm-5">
                                    <input type="email" name="p_email" class="form-control" disabled  placeholder="*อีเมล์ติดต่อ"  value="<?= $rs_detail->p_email;?>">
                                    <span class="fr"><?= form_error('p_email'); ?></span>
                                </div>
                                </div>
                                <div class="form-group">
                                      <div class="col-sm-2 control-label">ภาพประกอบ (บังคับ)</div>
                                      <div class="col-sm-5">
                                    <img src="<?= base_url('./asset/uploads/'.$rs_detail->p_img); ?>" width="100%">
                                </div>
                                </div>
                                <div class="form-group">
                                     <div class="col-sm-2 control-label"></div>
                                      <div class="col-sm-5">
                                        <a href="<?= site_url('member/');?>"  class="btn btn-primary">กลับหน้าหลัก </a>
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