<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&
    display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="pt.jpg" alt="BG-Wallpaper">
    <div class="container">
        <h1>Welcome to Travel form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="SubmitMsg">Thanks for submitting Your Form. We are Happy to see you joining us for the trip.</p>

        <form action="index.php" method="post">

      <input type="text" name="name" id="name" placeholder="Enter Your Name">
      <input type="text" name="age" id="age" placeholder="Enter Your Age">
      <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
       <input type="email" name="email" id="email" placeholder="Enter Your Email">
       <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">

    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any Information Here"></textarea>
    <button class="btn">Submit</button>
    


        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testname', '23', 'male', 'testname@gmail.com', '9999999999', 'Hello!!! This is My First PHP project.', current_timestamp()); -->
</body>
</html>