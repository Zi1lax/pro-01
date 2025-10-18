<style>
        .highcharts-figure,
        .highcharts-data-table table {
        min-width: 310px;
        max-width: 100%;
        margin: 1em auto;
        }
        #container {
        height: 400px;
        }
        .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
        }
        .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
        }
        .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
        }
        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
        padding: 0.5em;
        }
        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
        background: #f1f7ff;
        }
        text {
            text-decoration: none !important;
        }
         
        </style>
        <!-- highcharts -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จำนวนงานแยกตามเดือน
        <a href="<?=site_url('report/ByDay');?>" class="btn btn-info"> <i class="fa fa-signal"></i> จำนวนงานซ่อมแยกตามวัน</a>
        <a href="<?=site_url('report/ByMonth');?>" class="btn btn-primary"> <i class="fa fa-signal"></i> จำนวนงานซ่อมแยกตามเดือน</a>
        <a href="<?=site_url('report/ByYear');?>" class="btn btn-success"><i class="fa fa-signal"></i> จำนวนงานซ่อมแยกตามปี</a>
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
                        <div class="col-sm-12">
                            <?php

                                        $report_data = array();
                                        foreach ($queryreport as $rs) {
                                        $report_data[]= '
                                        {
                                            name:'.'"'.$rs->dateSave.'"'.',' //label
                                        .'y:'.$rs->totalJbDay. //ตัวเลขยอดขาย
                                        ','
                                        .'drilldown:'.'"'.$rs->dateSave.'"'.',' //label ด้านล่าง
                                        .'}';
                                        }
                                        //ตัด , ตัวสุดท้ายออก
                                        $report_data = implode(",", $report_data);
                                       // echo $report_data;
                            ?>

                            <figure class="highcharts-figure">
                        <div id="container"></div>
                        <p class="highcharts-description">.</p>
                    </figure>
                    <script>
                        // Create the chart
                    Highcharts.chart('container', {
                    chart: {
                    type: 'column'
                    },
                    title: {
                    text: 'รายงานจำนวนงานซ่อมในระบบ'
                    },
                    subtitle: {
                    text: 'นับข้อมูลแยกตามเดือน'
                    },
                    accessibility: {
                    announceNewData: {
                    enabled: true
                    }
                    },
                    xAxis: {
                    type: 'category'
                    },
                    yAxis: {
                    title: {
                    text: 'จำนวนงานซ่อม-นับข้อมูลแยกตามเดือน'
                    }
                    },
                    legend: {
                    enabled: false
                    },
                    plotOptions: {
                    series: {
                    borderWidth: 0,
                    dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f} งาน'
                    }
                    }
                    },
                    tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} งาน</b> of total<br/>'
                    },
                    series: [
                    {
                    name: "จำนวนงานซ่อม-นับข้อมูลแยกตามเดือน",
                    colorByPoint: true,
                    //เอาข้อมูลมา echo ตรงนี้
                    data: [<?= $report_data;?>]
                    }
                    ]
                    });
                    </script>
                            
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
            </section><!-- /.content -->
            </div><!-- /.content-wrapper -->