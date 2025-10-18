<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ฟอร์มแก้ไขข้อมูลอุปกรณ์
        </h1>
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
                            <form role="form" action="<?= site_url('device/editdata'); ?>" method="post" class="form-horizontal">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                          ชื่ออุปกรณ์
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="d_name" class="form-control" required placeholder="ชื่ออุปกรณ์ ขั้นต่ำ 4 ตัว" value="<?= $rsedit->d_name; ?>" minlength="4">
                                            <span class="fr"><?= form_error('d_name'); ?></span>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="hidden" name="d_id" value="<?= $rsedit->d_id;?>">
                                            <span class="fr"><?= form_error('d_id'); ?></span>
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?=  site_url('device'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->