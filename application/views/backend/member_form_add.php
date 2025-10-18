<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ฟอร์มเพิ่มข้อมูลสมาชิก
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?= site_url('admin/Memberadding'); ?>" method="post" class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                          Email/Username
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="email" name="admin_email" class="form-control" required placeholder="Email/Username" value="<?= set_value('admin_email'); ?>">
                                            <span class="fr"><?= form_error('admin_email'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            Password
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="password" name="admin_pwd" class="form-control" required placeholder="ภาษาอังกฤษ/ตัวเลข/ขั้นต่ำ 2 ตัว"  minlength="2"  value="<?= set_value('admin_pwd'); ?>"   title="ภาษาอังกฤษหรือตัวเลขเท่านั้น">
                                            <span class="fr"><?= form_error('admin_pwd'); ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                           ชื่อ - สกุล
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="admin_name" class="form-control" required placeholder="ชื่อ ขั้นต่ำ 4 ตัว" value="<?= set_value('admin_name'); ?>" minlength="4">
                                            <span class="fr"><?= form_error('admin_name'); ?></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            เบอร์โทร.
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="admin_phone" class="form-control" required placeholder="เบอร์โทร. ขั้นต่ำ 4 ตัว" value="<?= set_value('admin_phone'); ?>" minlength="4">
                                            <span class="fr"><?= form_error('admin_phone'); ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('admin/member'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->