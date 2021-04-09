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

	<table id="memListTable" class="display" style="width:100%">
	    <thead>
	        <tr>
	        	<th>id.</th>
	            <th>First name</th>
	            <th>Last name</th>
	            <th>Email</th>
	            <th>Gender</th>
	            <th>Country</th>
	            <th>Created</th>
	            <th>Status</th>
	            <th>Kelas</th>
	            <th>Harga</th>
	            <th>Mapel</th>
	            <th>Aksi</th>
	        </tr>
	    </thead>
	</table>

	<?php
		// Kondisi Pilihan data yg tampil
		// jika bernilai 1 maka akan tampil kelas One dan jika bernilai 0 yg akan tampil data kelas zerro 
		$nilai = 0;
	?>
    <script>
		$(document).ready(function(){
		    var table = $('#memListTable').DataTable( { 
		         "processing": true,
		         "serverSide": true,
		         "ajax": "getData.php?nilai=<?= $nilai; ?>",
		         "columnDefs": 
		         [
		         	{
		         	 	"targets": 9,
		             	"render": $.fn.dataTable.render.number( '.', '', '', 'Rp. ' )
		             
		         	},
		         	{
		         		"targets": -1,
		             	"data": null,
		             	"defaultContent": "<center><button class='btn btn-success btn-xs tblEdit'>Edit </button> <button class='btn btn-success btn-xs tblDelete'>Delete</button></center>" 
		         	}
		        ]
		    });

		    // Penomoran 
		    table.on('draw.dt', function () {
	            var info = table.page.info();
	            table.column(0, { search: 'applied', order: 'applied', page: 'applied' }).nodes().each(function (cell, i) {
	                cell.innerHTML = i + 1 + info.start;
	            });
	        });
	        
		    // table.on( 'order.dt search.dt', function () {
		    //     table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
		    //         cell.innerHTML = i+1;
		    //     } );
		    // } ).draw();

		    $('#memListTable tbody').on( 'click', '.tblEdit', function () {
		        var data = table.row( $(this).parents('tr')).data();
		        var data3 = data[3];
		        var data3 = btoa(data3);
		        window.location.href = "edit.php?id="+ data3;
		    });

		    $('#memListTable tbody').on( 'click', '.tblDelete', function () {
		        var data = table.row( $(this).parents('tr')).data();
		        window.location.href = "delete.php?id="+ data[0];
		    });

		});
	</script>
</body>
</html>

<script>
	// Define the string
	var string = 'Hello World!';

	// Encode the String
	var encodedString = btoa(string);
	console.log(encodedString); // Outputs: "SGVsbG8gV29ybGQh"

	// Decode the String
	var decodedString = atob(encodedString);
	console.log(decodedString); // Outputs: "Hello World!"
</script>