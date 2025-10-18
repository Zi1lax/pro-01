<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         รายการแจ้งซ่อมของคุณ  <?php  echo $_SESSION['admin_name'];?> 
         <a href="<?=site_url('member/form');?>" class="btn btn-primary">+แจ้งซ่อม</a>
        </h1>
    </section>
    <!-- Top menu -->
 
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
 
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="info">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">No.</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ประเภท</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 45%;">รายละเอียด</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สถานะ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เปิดดู</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $rs) { ?>
                                        <tr role="row">
                                            <td align="center"><?= $rs->id;?></td>
                                            <td><?= $rs->case_type;?></td>
                                            <td><?=
                                                $rs->case_detail
                                                .' , '
                                                .' สถานที่ '
                                                 .$rs->case_loc
                                                .',  ว/ด/ป '
                                                .date('d/m/Y H:i:s',strtotime($rs->date_save))
                                                .' น.'
                                            ;?></td>
                                            <td>
                                                <?php
                                                            if($rs->case_status==1){
                                                            echo 'รอดำเนินการ';
                                                            }else if($rs->case_status==2){
                                                            echo 'อยู่ระหว่างดำเนินการ';
                                                            }else if($rs->case_status==3){
                                                            echo 'ส่งซ่อมภายนอก';
                                                            }else if($rs->case_status==4){
                                                            echo 'ดำเนินการเสร็จสิ้น';
                                                            }else{
                                                            echo 'ยกเลิก';
                                                            }
                                                            ?>
                                            </td>
                                            <td>
                                                <a href="<?php   echo site_url('member/detail/'.$rs->id); ?>" class="btn btn-success btn-xs">
                                                    เปิดดู
                                                </a>
                                            </td>
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div><!-- /.box-body -->
                </div>
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->