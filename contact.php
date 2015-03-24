<?php include('inc/header.php');?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>

    <div class="wrapper" id="content" tabindex="0">
      <p class="heading">Contact Us</p>
      <p>Please fill out the form below to contact us and we will do our best to get in touch with you as soon as possible.</p>
      <p>Or give us a call at
        <a href="#" class="phone contact-number"><span></span>01234 567 8901</a>.
      </p>
      <form action="FormMail.php" method="post" class="contact-form">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name:" id="name" required>

        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Email:" id="email" onChange="emailvalidation(this,'The email given is not valid');" required>

        <label for="number">Phone number (Optional):</label>
        <input type="text" name="number" placeholder="Phone number:" id="number">

        <label for="message">Message:</label>
        <textarea rows="4" cols="40" placeholder="Message:" name="message" id="message"></textarea>
        <input type="submit" class="btn search" value="Search">
      </form>
    </div>
  </div>
  <script>
  // Below script found at echoecho.com, used to validate the email input.
  function emailvalidation(entered, alertbox) {
    // E-mail Validation by Henrik Petersen / NetKontoret
    // Explained at www.echoecho.com/jsforms.htm
    // Please do not remove this line and the two lines above.
    with (entered) {
      apos=value.indexOf("@");
      dotpos=value.lastIndexOf(".");
      lastpos=value.length-1;
      if (apos<1 || dotpos-apos<2 || lastpos-dotpos>3 || lastpos-dotpos<2)
      {if (alertbox) {alert(alertbox);} return false;}
      else {return true;}
      }
    }
  </script>

<?php include('inc/footer.php');?>
