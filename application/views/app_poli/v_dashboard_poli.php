<div class="main-content-inner">
    <div class="row">
        <!--seo fact area start--> 
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Total Kunjungan</div>
                                <h2><?= $total_kunjungan?></h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Kunjungan Hari Ini</div>
                                <h2><?= $kunjungan_hari_ini?></h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Belum Dilihat</div>
                                <h2><?= $belum_dilihat?></h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div>
                    </div>
                </div>
                                                
            </div>
        </div>    
        
        <div class="main-content-inner">

<div class="row">
<html>
  <head>
  <?php
  $data = $this->M_rekammedis->grafik('tb_pendaftaran')->num_rows();
//   $data1 = $this->M_rekammedis->grafik('detail_pinjam')->num_rows();
//   $data2 = $this->M_rekammedis->grafik('barang')->num_rows();
  
  
  ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Kunjungan',     <?=$data?>],
        //   ['Pengembalian',      <?=$data1?>],
        //   ['Stok Rusak',      <?=$data2?>],
        ]);

        var options = {
          title: 'Kunjungan Pasien'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
        <!--testimonial area end--> 
    </div>
</div>