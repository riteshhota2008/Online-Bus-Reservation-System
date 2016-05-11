<html>
<head>

<!-- Compiled and minified CSS -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <title>Admin | Bus Reservation System </title>


</head>
<body>

<table class="bordered">
    <thead>
    <tr>
        <th data-field="id">Order No.</th>
        <th data-field="name">Bus</th>
        <th data-field="price">Travel Date</th>
        <th data-field="price">Travel Month</th>
        <th data-field="price">Type</th>
        <th data-field="price">From</th>
        <th data-field="price">To</th>
        <th data-field="price">Route</th>
        <th data-field="price">Mobile</th>
        <th data-field="price">Passenger Name</th>
        <th data-field="price">Passenger Age</th>
        <th data-field="price">Passenger Gender</th>
        <th data-field="price">Birth Preference</th>


    </tr>
    </thead>

    <tbody>


<?php
include('config.php');
$result = $db->prepare("SELECT * FROM Bus_reservation ORDER BY id ASC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
    echo '<tr>
        <td>'.$row['id'] . '</td><td>
      '.$row['bus'].'
    </td><td>'.$row['travel_date'].'</td><td>'.$row['travel_month'].'</td><td>'.$row['travel_type'].'</td><td>'.$row['travel_from'].'

</td><td>'.$row['travel_to'].'</td><td>'.$row['root'].'</td><td>'.$row['mob'].'</td><td>'.$row['BX_NAME'].'</td><td>'.$row['BX_age'].'</td><td>'.$row['BX_gender'].'</td><td>'.$row['BX_birth'].'</td></tr>';
}
?>
    </tr>
    </tbody>
</table>


</body>
</html>