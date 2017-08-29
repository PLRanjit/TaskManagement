<?php
$return_arr = array();

$fetch = mysqli_query($con,"SELECT * FROM task"); 

while ($row = mysqli_fetch_array($fetch, mysqli_ASSOC)) {
    $row_array['project_name'] = $row['project_name'];
    $row_array['col1'] = $row['col1'];
    $row_array['col2'] = $row['col2'];

    array_push($return_arr,$row_array);
}

echo json_encode($return_arr);
?>