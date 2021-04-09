<?php 
$nilai = $_GET['nilai'];
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'serverside' 
); 
 
// DB table to use 
// $table = 'members'; 
$table = <<<EOT
 (
    SELECT 
      a.id, 
      a.first_name, 
      a.last_name, 
      a.email, 
      a.gender, 
      a.country, 
      a.created, 
      a.status, 
      a.id_kelas,
      a.id_mapel,
      b.nama_kelas,
      b.harga_kelas,
      c.nama_mapel,
      c.kesulitan_mapel
    FROM members a
    LEFT JOIN kelas b ON a.id_kelas = b.id_kelas
    LEFT JOIN tb_mapel c ON a.id_mapel = c.id_mapel
 ) temp
EOT;
 
// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'first_name', 'dt' => 1 ), 
    array( 'db' => 'last_name',  'dt' => 2 ), 
    array( 'db' => 'email',      'dt' => 3 ), 
    array( 'db' => 'gender',     'dt' => 4 ), 
    array( 'db' => 'country',    'dt' => 5 ), 
    array( 
        'db'        => 'created', 
        'dt'        => 6, 
        'formatter' => function( $d, $row ) { 
            return date( 'jS M Y', strtotime($d)); 
        } 
    ), 
    array( 
        'db'        => 'status', 
        'dt'        => 7, 
        'formatter' => function( $d, $row ) { 
            return ($d == 1)?'<span style="color: blue;">Active</span> '.$d:'Inactive'; 
        } 
    ),
    array( 'db' => 'nama_kelas',    'dt' => 8 ),
    array( 'db' => 'harga_kelas',    'dt' => 9 ),
    array( 'db' => 'nama_mapel',    'dt' => 10 )
    // array( 'db' => 'kesulitan_mapel',    'dt' => 9 )
); 

// Include SQL query processing class 
require 'ssp.php'; 

// require('ssp.class.php');

// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns, null, "id_kelas = $nilai" )
    // SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns)

);