

<footer class="footer text-center">
  <p>&copy; X-System 2018<br /> <i>Todos los derechos reservados</i></p>
</footer>
</div>


</div>
<!-- Contenido de pagina -->
</div>
<!-- wrapper -->

<div class="overlay" style="display: none;"></div>

<!-- jQuery CDN -->
<script src="js/jquery-1.js"></script>
<!-- Moments Js -->
<script type="text/javascript" src="js/moment.js"></script>
<!-- Bootstrap Js CDN -->
<script src="js/bootstrap.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="js/jquery.js"></script>
<!-- DateTime Picker JS -->
<script src="js/bootstrap-datetimepicker.js"></script>
<!-- DataTable js -->
<script src="js/datatables.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  $("#sidebar").mCustomScrollbar({
    theme: "minimal"
  });

  $('#dismiss, .overlay').on('click', function () {
    $('#sidebar').removeClass('active');
    $('.overlay').fadeOut();
  });

  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').addClass('active');
    $('.overlay').fadeIn();
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });

  $('.datetimeField').datetimepicker({format: 'DD/MM/YYYY'});
  $('.timeField').datetimepicker({format: 'LT'});
  var oTable = $('#usrtable').DataTable(
    {
      "order": [],
      "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
      }],
      "bLengthChange": false,
      "info":     false
    }
  );

  $('#txtbuscar').keyup( function () {
    oTable.search(this.value).draw();
    //oTable.fnFilter( this.value );
  } );

});
</script>
