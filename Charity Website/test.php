<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="Contact my-5">
        <div class="container-fluid">
            <div class="row gap-3">
              <div class="col-12">
                <h1 class="h3 text-center mt-4">CONTACT US</h1>
              </div>
          </div>
        </div>        
      <div class="row py-5 g-3">
        <div class="col-md-6 first_col">
          <h1 class="text-center mt-3">CONTACT US</h1>
          <form class="p-4 mt-5">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Enter Your Name</label>
              <input type="text" class="form-control" id="exampleFormControlInpiut1" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email Id</label>
              <input type="email" class="form-control" id="exampleFormControlInpiut1" placeholder="Enter your Email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Contact number</label>
              <input type="text" class="form-control" id="exampleFormControlInpiut1" placeholder="Enter your number">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Enter any message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="md-3">
              <button class="btn btn-dark aa">Send Now</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <img src="pexels-burst-374631.jpg" class="img-fluid">
        </div>
      </div>
      <div class="last_row">
        <div class="row row-cols-1 row-cols-md-3 p-3">
          <div class="col">
            <h4>Call Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minima, temporibus quisquam molestias odit
            </p>
          </div>
          <div class="col">
            <h4>Call Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minima, temporibus quisquam molestias odit
            </p>
          </div>
          <div class="col">
            <h4>Call Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minima, temporibus quisquam molestias odit
            </p>
          </div>
            </div>
          </form>
        </div>
      </div>
        </div>
      </div>
    

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
    } else {
        // Send the email
        $to = "your-email@example.com";
        $subject = "Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";

        if (mail($to, $subject, $body)) {
            echo "Thank you for contacting us. We will get back to you soon!";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>