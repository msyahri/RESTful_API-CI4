<style>
  .btn-dt {
    background-color: #007bff;
  };
  .btn-dt:hover {
    background-color: #1d598c;
  }
</style>
<script>
  $(function() {
    $("#sortable").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

      dom: "Bfrtip",
      buttons: [
        { extend: 'collection', text: 'Export', className: "btn-dt",
        buttons: [
          { extend: "pdf", className: "pdf"},
          { extend: "excel", className: "excel"},
          { extend: "csv", className: "csv"}
        ],
      },
      { extend: 'print', text: 'Print', className: "btn-dt"}
      ],

      dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
        "<'row'<'col-md-12'tr>>" +
        "<'row'<'col-md-5'i><'col-md-7'p>>"


    }).buttons().container().appendTo('#sortable_wrapper .col-md-6:eq(0)');
  });
</script>



<!-- SAMPLE OF DATA TABLES -->
<!-- <script>
  $(function () {
    $("#sortable").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#sortable_wrapper .col-md-6:eq(0)');
    $('#sortables').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->