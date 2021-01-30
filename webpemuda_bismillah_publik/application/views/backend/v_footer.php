<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">Bismillah Admin</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/pemuda_bismillah/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/pemuda_bismillah/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/pemuda_bismillah/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/pemuda_bismillah/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/pemuda_bismillah/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/pemuda_bismillah/dist/js/demo.js"></script>
<!-- page script -->
<script>
  function konfirmasi(idRegister,idEvent) {
      console.log(idRegister);
      if (confirm("Anda yakin ingin mengkonfirmasi")) {
        window.location.href = ('<?php echo base_url(); ?>index.php/manager/konfirmasi/'+idRegister+'/'+idEvent);
      } else {
        txt = "You pressed Cancel!";
      }
  }

  function kirimTiket(idRegister,idPeserta) {
      console.log(idRegister);
      if (confirm("Anda yakin ingin mengirim Tiket Ke peserta")) {
        window.location.href = ('<?php echo base_url(); ?>index.php/manager/kirim_tiket/'+idRegister+'/'+idPeserta);
      } else {
        txt = "You pressed Cancel!";
      }
  }
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

    
    
  

  });

</script>
</body>
</html>