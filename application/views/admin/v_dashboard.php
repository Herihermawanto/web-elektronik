  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $iphone['total_data']; ?><sup style="font-size: 20px"></sup></h3>
                <p>Data Iphone</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo base_url('admin'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $samsung['total_data']; ?><sup style="font-size: 20px"></sup></h3>
                <p>Data Samsung</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo base_url('admin'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $xiaomi['total_data']; ?><sup style="font-size: 20px"></sup></h3>
                <p>Data Xiaomi</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo base_url('admin'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $pendataan['total_data']; ?><sup style="font-size: 20px"></sup></h3>
                <p>Data Pendataan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo base_url('pages'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
        </div>
        <!-- <div class="row"> -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $permohonan['total_pengajuan']; ?><sup style="font-size: 20px"></sup></h3>
                <p>Data Permohonan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $permohonan_acc['total_pengajuan']; ?><sup style="font-size: 20px"></sup></h3>
                <p>Data Permohonan Di Terima</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $permohonan_tolak['total_pengajuan']; ?></h3>

                <p>Data Permohonan Di Tolak</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $permohonan_konfirmasi['total_pengajuan']; ?></h3>

                <p>Data Permohonan Menunggu Konfirmasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        <!-- </div> -->

        <div class="row">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Data Grafik Elektronik</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Chartjs</li>
                  </ol> 
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Line Grafik</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body bg-light">
                      <div class="chart">
                        <canvas id="chart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Line Grafik</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body bg-light">
                      <div class="chart">
                        <canvas id="chart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <!-- <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Line Grafik</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="chart">
                        <canvas id="chart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>

                  </div>
                </div> -->
              </div>
            </div>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </body>
</html>
<!-- select sum(tbl.dataPangan) from ( select count(bidangUsaha) as dataPangan from tbl_periodesatu WHERE bidangUsaha ="Pangan" UNION ALL select count(bidangUsaha) as dataPangan from tbl_periodedua WHERE bidangUsaha="pangan" )tbl; -->
<!-- 
   $query = $this->db->query("SELECT SUM(tbl.dataPangan) FROM ( SELECT COUNT(bidangUsaha) AS dataPangan FROM tbl_periodesatu WHERE bidangUsaha ='Pangan' UNION ALL select COUNT(bidangUsaha) AS dataPangan from tbl_periodedua WHERE bidangUsaha='pangan' )tbl;");
              $jml = $query->num_rows();
 -->