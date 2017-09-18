<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'php-Parts/head.php'; ?>
  <link rel="stylesheet" href="CSS/index.css" type="text/css">
</head>

<body>
  <?php
  if (isset ($_COOKIE['FeedbackForm']))
  {
    include 'php-Parts/already-submitted.php';
  }
  else
  {
    include 'php-Parts/feedbackform.php';
  }
  ?>

  <?php include 'php-Parts/footer.php'; ?>
  <script>
  //Controls form validation/validation rules/error messaging//
  $().ready(function () {
    $("#feedbackForm").validate({
      rules: {
        optradio: {
          required: true
        }
      },
      messages: {
        optradio: {
          required: "Please select one emoji."
        }
      },
      errorPlacement: function (error, element) {
        error.insertAfter("#submit");
      }
    });
  });
  </script>
</body>

</html>
