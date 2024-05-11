<script type="text/javascript" src="assets/DataTables/dataTables.min.js"></script>

<script type="text/javascript">
    var url ='{{ route("kos.dataKos")}}';

    $("#table-data").DataTable({
        "processing": true,
        "serverSide": true,
    });
</script>

