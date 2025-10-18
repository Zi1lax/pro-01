<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
 
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
</script>
<script>
$(document).ready(function() {
$('#example').DataTable( {
"aaSorting" :[[0,'desc']],
"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );
</script>
<div class="container" style="margin-top: 10px">
  <div class="row">
    <div class="col col-sm-12 col-md-12">
      <h3>::ติดตามงานงานซ่อม::</h3>
      <!-- datatable : id example & class display -->
      <table id="example" class="table table-bordered table-striped table-hover  display">
        <thead style="background-color: #c8cfca;">
          <tr>
            <th style="width: 5%;">No.</th>
            <th style="width: 15%;">ประเภท</th>
            <th style="width: 40%;">รายละเอียด</th>
            <th style="width: 25%;">ผู้แจ้ง</th>
            <th style="width: 15%;">สถานะ</th>
            <th style="width: 5%;">view</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query as $rs) { ?>
          <tr>
            <td align="center"><?= $rs->id;?></td>
            <td><?= $rs->case_type;?></td>
            <td><?=
              '<b>'.$rs->case_detail.'</b>'
              .'<br>'
              .'ว/ด/ป '
              .date('d/m/Y H:i:s',strtotime($rs->date_save))
              .' น.'
            ;?></td>
            <td>
              <?=
              '<b> แจ้งโดย '.$rs->p_name
              .'</b><br>'
              .'email : '
              .$rs->p_email
            ;?></td>
            <td>
              <?php
              if($rs->case_status==1){
              echo 'รอดำเนินการ';
              }elseif($rs->case_status==2){
              echo 'กำลังดำเนินการ';
              }elseif($rs->case_status==3){
              echo 'เสร็จสิ้น';
              }else{
              echo 'ยกเลิก';
              }
              ?>
            </td>
            <td><a href="<?= site_url('form/detail/'.$rs->id);?>" class="btn btn-info btn-sm" target="_blank"> view </a></td>
          </tr>
          <?php  } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>