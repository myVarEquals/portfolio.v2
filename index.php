<?php

  //Initializing message variables for pass/fail submit
  $alertMessage = '';
  $alertMessageClass = '';

  //Check for Submit Pressed
  if(filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msgSubject = htmlspecialchars($_POST['msgSubject']);
    $message = htmlspecialchars($_POST['message']);

    //Check if all fields hold data
    if(!empty($name) && !empty($email) && !empty($msgSubject) && !empty($message)) {
      //Pass all fields have data
      //Test for valid Email address
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        //Invalid Email
        $alertMessage = 'Please enter valid email';
        $alertMessageClass = 'alert-danger';
      } else {
        //Valid Email
        //Where to
        $toEmail = 'bakerbakerbaker498@gmail.com';
        //Subject for email
        $subject = 'Contact Request From '.$name;
        //Body for email
        $body = '
          <html>
            <head>
              <title>Contact Request</title>
            </head>
            <body>
              <h2>Contact Request</h2>
              <p><strong>Name:</strong> '.$name.'</p>
              <p><strong>Email:</strong> '.$email.'</p>
              <hr>
              <p><strong>Subject:</strong> '.$msgSubject.'</p>
              <p><strong>Message:</strong><br>'.$message.'</p>
            </body>
          </html>
          ';

        //Headers for email

        $headers = 'From: Night Owl Dev _mainaccount@nightowldeveloper.com' . "\r\n" .
          'Reply-To: _mainaccount@nightowldeveloper.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion() . "\r\n" .
          'Content-Type: text/html; charset=UTF-8';



        if(mail($toEmail, $subject, $body, $headers)) {
          //Email sent
          $alertMessage = 'Success!';
          $alertMessageClass = 'alert-success';
        } else {
          $alertMessage = 'Email failed to send';
          $alertMessageClass = 'alert-danger';
        }
      }
    } else {
      //Fail
      $alertMessage = 'Please fill out all fields!';
      $alertMessageClass = 'alert-danger';

    }



  }

?>

<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Nothing+You+Could+Do|Permanent+Marker" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <title>Night Owl Dev</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
  <header>
    <div class="header-background"></div>
    <div class="header-overlay"> </div>
    <div class="header-wrapper">
      <h1 class="head-night">Night</h1>
      <h1 class="head-owl">Owl</h1>
      <h1 class="head-dev">Dev</h1>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#about-anchor">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#gallery-anchor">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact-anchor">Contact</a></li>
        </ul>
      </div>
    </nav><span id="about-anchor">       </span>
    <section class="container-fluid" id="about-section">
      <div class="profile text-center"><img class="selfie" src="http://i67.tinypic.com/20sxirm.png">
        <div class="name">Roger Baker</div>
        <div class="web">Web Developer</div>
      </div>
      <div class="about">
        <h1 class="about-head">About Me</h1>
        <hr>
        <p class="about-para">
          I am a self taught web developer located in southern New Jersey.
          Problem solving is natural and intriguing to me, and I love a good logic challenge.
          My interests in web development include UI/UX design, graphic design/editting, and helping others in getting started on the path I began on.
        </p>
        <div class="skills-list">
          <div class="list langs">
            <h5 class="lang-head">Languages</h5>
            <hr>
            <ul class="lang-list">
              <li>HTML5</li>
              <li>PHP</li>
              <li>CSS3</li>
              <li>Javascript</li>
            </ul>
          </div>
          <div class="list libraries">
            <h5 class="lib-head">Libraries</h5>
            <hr>
            <ul class="lib-list">
              <li>Bootstrap4</li>
              <li>jQuery</li>
            </ul>
          </div>
          <div class="list preprocessors">
            <h5 class="pre-head">Preprocessors</h5>
            <hr>
            <ul class="pre-list">
              <li>Pug</li>
              <li>Scss/Sass</li>
            </ul>
          </div>
          <div class="list other">
            <h5 class="other-head">Other</h5>
            <hr>
            <ul class="other-list">
              <li>Git and Github</li>
              <li>Photoshop</li>
              <li>SVG</li>
            </ul>
          </div>
        </div>
      </div>
    </section><span id="gallery-anchor"> </span>
    <section class="container-fluid text-center" id="gallery-section">
      <h1 class="gallery-header">Gallery</h1>
      <!-- Gallery Wrapper-->
      <div class="gallery-box mx-auto">
        <!-- Items-->
        <div class="gallery-item"><a href="https://codepen.io/bakecaker/pen/RMqWZG" target="_blank">
            <div class="card">
              <div class="card-overlay-dk"></div><img class="card-img" src="../../images/loaders.png">
              <div class="card-overlay"></div>
              <h5 class="title">Pure Css Loaders</h5>
            </div></a></div>
        <div class="gallery-item"><a href="https://codepen.io/bakecaker/pen/MVGovj" target="_blank">
            <div class="card">
              <div class="card-overlay-dk"></div><img class="card-img" src="../../images/svgdraw.png">
              <div class="card-overlay"></div>
              <h5 class="title">SVG Draw Animation                </h5>
            </div></a></div>
        <div class="gallery-item"><a href="https://codepen.io/bakecaker/pen/QmQGqL" target="_blank">
            <div class="card">
              <div class="card-overlay-dk"></div><img class="card-img" src="../../images/mailbox.png">
              <div class="card-overlay"></div>
              <h5 class="title">Codepen Challenge</h5>
            </div></a></div>
        <div class="gallery-item"><a href="https://codepen.io/bakecaker/full/qopmYY/" target="_blank">
            <div class="card">
              <div class="card-overlay-dk"></div><img class="card-img" src="../../images/profile.png">
              <div class="card-overlay"></div>
              <h5 class="title">Profile</h5>
            </div></a></div>
        <div class="gallery-item"><a href="https://codepen.io/bakecaker/project/editor/AaOkOk" target="_blank">
            <div class="card">
              <div class="card-overlay-dk"></div><img class="card-img" src="../../images/business2.png">
              <div class="card-overlay"></div>
              <h5 class="title">Business Site Draft</h5>
            </div></a></div>
        <div class="gallery-item"><a href="https://codepen.io/bakecaker/pen/vdvxEq?editors=1100" target="_blank">
            <div class="card">
              <div class="card-overlay-dk"></div><img class="card-img" src="../../images/business1.png">
              <div class="card-overlay"></div>
              <h5 class="title">Business Site Draft #2</h5>
            </div></a></div>
      </div>
      <div class="gallery-more">
        <h5 class="gallery-more-head">More of my work</h5><a href="https://github.com/myVarEquals" target="_blank"><i class="fab fa-github"></i></a><a href="https://codepen.io/bakecaker/" target="_blank"><i class="fab fa-codepen"></i></a>
      </div>
    </section><span id="contact-anchor">                                          </span>
    <section class="container-fluid text-center" id="contact-section">
      <?php if($alertMessage != ''): ?>
        <div class='alert <?php echo $alertMessageClass; ?>'><?php echo $alertMessage; ?></div>
      <?php endif; ?>
      <h1 class="contact-header">Contact</h1>
      <div class='row justify-content-center'>
        <form action="#contact-anchor" method="POST">
          <div class="input-group mb-3">
            <input class="form-control" type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" id="name" placeholder="Name">
          </div>
          <div class="input-group mb-3">
            <input class="form-control" type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" id="email" placeholder="Email">
          </div>
          <div class="input-group mb-3">
            <input class="form-control" type="text" name="msgSubject" value="<?php echo isset($_POST['msgSubject']) ? $msgSubject : ''; ?>" id="msgSubject" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="3" name='message' placeholder="Your Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
          </div>
          <button type="submit" name ="submit">Submit</button>
        </form>
      <div>
    </section>
    <section id='footer-section'>
      <div class='footer'>
        <h3>Night Owl Dev 2018 &copy;</h3>
      </div>
    </section>
  </main>
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../../javascript/index.js" type="text/javascript"></script>
</body>
