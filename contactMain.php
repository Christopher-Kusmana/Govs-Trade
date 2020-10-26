<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactStyle.css">
    <title>Contact</title>
  </head>
  <body>
    <div class = "gridContainer">
        <div id = "links">
            <a>Portfolio</a>
            <a>Marketplace</a>
            <a>Leaderboard</a>
            <a>Your Friends</a>
            <a href = "contactMain.php">Contact Us</a>
        </div>
        <div id = "content">
          <h1>Contact Us</h1>
          <br>

          <!-- Need to make these emails work somehow -->
          <div id = "devInfo">
          	<h3>Developer Contact Information</h3>
          	<ul>
          		<li>Chris Kusmana: christopherkusmanateg@gmail.com</li>
            	<li>Chris Foraste: chris.foraste@gmail.com</li>
          	</ul>
          	<br>
          </div>

          <h3>Contact Us on Github</h3>
          <a href = "https://github.com/Christopher-Kusmana/Govs-Trade">https://github.com/Christopher-Kusmana/Govs-Trade</a>
          <br>
          <br>

          <!-- Need to attach these results to a JS file -->
          <div id="formAndHeader">
          	<h3>Contact Form</h3>
          	<form id="contactForm">

          		<label for="contactForm">Your Name:</label>
            	<input type="text" id="name" name="name"  orm="contactForm" required>
            	<br>
            	<br>

            	<label for="contactForm">Your Email:</label>
            	<input type="email" id="email" name="email" orm="contactForm" required>
            	<br>
            	<br>

            	<label for="contactForm">Briefly describe your issue:</label>
            	<br>
            	<textarea rows=2 name="issue" id="issue" columns=50 required></textarea>
            	<br>
            	<br>

            	<label for="contactForm" id="issueLabel">If possible, please upload a screenshot:</label>
            	<input type="file" id="screenshot" name="screenshot" form="contactForm">
            	<br>
            	<br>

            	<input type = "submit">
          	</form>
          </div>
        </div>
    </div>
  </body>
</html>
