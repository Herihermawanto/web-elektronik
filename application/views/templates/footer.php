<footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script> 
<!-- Kode grafikDashboard -->
<script>
    var data_nama1 = [];
    var data_jumlah1 = [];

    $.post("<?php echo base_url('admin/chartdata') ?>",
    function(dataGrafik1){
        var obj1 = JSON.parse(dataGrafik1);
        $.each(obj1, function(test1, item1){
            data_nama1.push(item1.produk);
            data_jumlah1.push(item1.jumlah);
        });
             // setup Bar
            const data = {
                labels: data_nama1,
                datasets: [{
                label: 'Data Elektronik',
                data: data_jumlah1,
                borderColor: ['green'],
                pointStyle: 'circle',
                pointRadius: 10,
                pointHoverRadius: 15,
                borderWidth: 4
                }]
            };
             // config Bar
            const configBar = {
                type: 'line',
                data,
                options: {
                    scales: {
                        y: {
                        beginAtZero: true
                    }
                 }
                }
            };
            // render init block bar
            const chart1 = new Chart(
            document.getElementById('chart1'),
            configBar
            );
        });

        var data_nama2 = [];
        var data_jumlah2 = [];

        $.post("<?php echo base_url('admin/chartdata') ?>",
        function(dataGrafik2){
            var obj2 = JSON.parse(dataGrafik2);
                $.each(obj2, function(test2, item2){
                data_nama2.push(item2.produk);
                data_jumlah2.push(item2.jumlah);
                });
            //  Setup Line
            const dataLine = {
                labels: data_nama2,
                datasets: [{
                label: 'Data Elektronik',
                data: data_jumlah2,
                borderColor: ['green'],
                pointStyle: 'circle',
                pointRadius: 10,
                pointHoverRadius: 15,
                borderWidth: 4
                }]
            };
            //  config Line
            const configLine = {
            type: 'bar',
            data: dataLine,
            options: {
            scales: {
            y: {
                    beginAtZero: true
                        }
                    }
                }
            };
            // render init block line
            const chart2 = new Chart(
                document.getElementById('chart2'),
                configLine
            );
        });

        var data_nama3 = [];
        var data_jumlah3 = [];

        $.post("<?php echo base_url('admin/chartdata') ?>",
        function(dataGrafik3){
            var obj3 = JSON.parse(dataGrafik3);
                $.each(obj3, function(test3, item3){
                data_nama3.push(item3.produk);
                data_jumlah3.push(item3.jumlah);
                });
            //  Setup Line
            const dataLine = {
                labels: data_nama3,
                datasets: [{
                label: 'Data Xiaomi',
                data: data_jumlah3,
                borderColor: ['green'],
                pointStyle: 'circle',
                pointRadius: 10,
                pointHoverRadius: 15,
                borderWidth: 4
                }]
            };
            //  config Line
            const configLine = {
            type: 'line',
            data: dataLine,
            options: {
            scales: {
            y: {
                    beginAtZero: true
                        }
                    }
                }
            };
            // render init block line
            const chart3 = new Chart(
                document.getElementById('chart3'),
                configLine
            );
        });
</script>
</body>
</html>
