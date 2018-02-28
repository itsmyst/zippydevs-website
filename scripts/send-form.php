<?php

  $dest_email = "zippydevs@gmail.com";

  $email = check($_POST['email']);
  $message = check($_POST['message']);
  $subject = "New contact form submission: " . email . "!";

  mail($dest_email, $subject, $message);

  header('Location: index.html');
  exit();

  function check($data, $problem='') {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
  }

?>
