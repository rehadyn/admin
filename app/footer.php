<footer class="main-footer">
    <strong>Copyright &copy; Reza Hadiwijaya Dynasti <a href="https://rehad.id">REHAD.ID</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1
    </div>
</footer>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Toastr -->
<script src=" plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Ekko Lightbox -->
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Filterizr-->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- kanba -->
<script src="dist/js/kanba.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#exportmhs").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#exportmhs_wrapper .col-md-6:eq(0)');
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
<script>
    //    menu actiov saat di klik
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav-sidebar a').filter(function () {
            return this.href == url;
        }).addClass('active');
        $('ul.nav-treeview a').filter(function () {
            return this.href == url;
        }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    });
</script>
<script>
    document.querySelector('#p1').addEventListener('mdl-componentupgraded', function () {
        this.MaterialProgress.setProgress(44);
    });
</script>
<div class="kanban__title">
    <script>
        $('.kanban-card').on('click', function () {
            // Get the column that the card is currently in
            var currentColumn = $(this).closest('.kanban-column');

            // Get the column that you want to move the card to
            var targetColumn = $('#column-2');

            // Move the card to the target column
            $(this).appendTo(targetColumn);
        });
    </script>
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'sukses') {
            echo "<script>
        toastr.success('Data Berhasil Ditambahkan')
        </script>";
        } else if ($_GET['status'] == 'gagal') {
            echo "<script>
        toastr.error('Data Gagal Ditambahkan')
        </script>";
        }
    }
    ?>
    <script>
        $(function () {

        })
    </script>