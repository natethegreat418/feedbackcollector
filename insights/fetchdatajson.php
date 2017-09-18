<?php
  $connect = mysqli_connect("mysql.marcustechnologies.info", "nathanmarcus", "Caw50Tum", "marcustechnologies_feedbackdata");
  $sql = "SELECT * FROM feedback_data";
  $result = mysqli_query($connect, $sql);
  $json_array = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $json_array[] = $row;
  }
  echo json_encode($json_array);
?>
