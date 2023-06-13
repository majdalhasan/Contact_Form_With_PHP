<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Contact Form</title>
</head>

<body>
  <!-- Start Form -->
  <div class="container">
    <h2 class="text-center">Contact Me</h2>
    <form class="contact-form">
      <input class="form-control" type="text" name="username" placeholder="Your Name"> <i class="fa fa-user fa-fw"></i>
      <input class="form-control" type="email" name="email" placeholder="Your E-Mail"> <i class="fa-solid fa-envelope fa-fw"></i>
      <input class="form-control" type="number" name="mobile" placeholder="Your Mobile"> <i class="fa-sharp fa-solid fa-phone fa-fw"></i>
      <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea> 
      <input class="btn btn-success btn-block" type="submit" value="Send Message"><i class="fa-solid fa-paper-plane fa-fw send-icon"></i>
    </form>
  </div>
  <!-- End Form -->
  <script src="js/jquery-3.7.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>