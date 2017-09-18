<?php
if ($_POST) {
  $value = 'submittedfeedback';
  $link = mysqli_connect("mysql.marcustechnologies.tech", "nathanmarcus", "", "marcustechnologies_feedbackdata");
  $query = "INSERT INTO feedback_data VALUES ('".$_POST["optradio"]."','".$_POST["departmentselect"]."','".$_POST["usercomments"]."')";
  mysqli_query($link, $query);
  mysqli_close($link);
  setcookie("FeedbackForm", $value, strtotime('today 23:59'));
  header("Location: http://localhost/feedbacktool/feedback-success.php" . $_SERVER['REQUEST_URI']);
  exit();
}
?>
