<!DOCTYPE html>
<html>
<head>
	<title>DataTables ServerSide</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	<script src="js/jquery-3.5.1.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
</head>
<body>
	<br>
	<h1><center>DataTables Server-side processing</center></h1>
	<br><br>

	<table id="tabelAuthor" class="table table-bordered table-hover">
	    <thead>
	        <tr>
			    <th>Nama Awal</th>
			    <th>Nama Akhir</th>
			    <th>Email</th>
			    <th>Tgl. Lahir</th>
			    <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			    <td>Nama Awal</td>
			    <td>Nama Akhir</td>
			    <td>Email</td>
			    <td>Tgl. Lahir</td>
			    <td></td>
	        </tr>
	    </tbody>
	</table>

    <script type="text/javascript">
		$(document).ready(function() {
		     var table = $('#tabelAuthor').DataTable( { 
		         "processing": true,
		         "serverSide": true,
		         "ajax": "dataTables.php",
		         "columnDefs": [ {
		             "targets": -1,
		             "data": null,
		             "defaultContent": "<center><button class='btn btn-success btn-xs tblEdit'>Edit </button> <button class='btn btn-success btn-xs tblDelete'>Delete</button></center>"
		         }]
		    });
		    {
			    data: 'price',
			    render: $.fn.dataTable.render.number( ',', '.', 2 )
			}
		 
		    $('#tabelAuthor tbody').on( 'click', '.tblEdit', function () {
		        var data = table.row( $(this).parents('tr')).data();
		        window.location.href = "edit.php?id="+ data[4];
		    });

		    $('#tabelAuthor tbody').on( 'click', '.tblDelete', function () {
		        var data = table.row( $(this).parents('tr')).data();
		        window.location.href = "delete.php?id="+ data[4];
		    });
		 });
	</script>
</body>
</html>