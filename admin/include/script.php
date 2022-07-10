
<!-- jQuery -->
<script src="\mentordemo/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="\mentordemo/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="\mentordemo/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="\mentordemo/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="\mentordemo/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="\mentordemo/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="\mentordemo/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="\mentordemo/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="\mentordemo/admin/plugins/moment/moment.min.js"></script>
<script src="\mentordemo/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="\mentordemo/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="\mentordemo/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="\mentordemo/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="\mentordemo/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="\mentordemo/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="\mentordemo/admin/dist/js/demo.js"></script>
<!-- jQuery -->
<script src="\mentordemo/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="\mentordemo/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="\mentordemo/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="\mentordemo/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="\mentordemo/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="\mentordemo/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="\mentordemo/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>