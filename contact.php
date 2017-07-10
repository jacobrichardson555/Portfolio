<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
  </head>
  <body>
    <header>
      <h1>Jacob Richardson</h1>
      <h3>Designer|Developer</h3>
      <nav>
        <ul>
          <a href="index.html"><li>Home</li></a>
          <li class="dropLi">
            <a href="projects.html" class="dropButton">Projects</a>
            <ul class="dropMenu">
              <a href="frontend.html"><li>Front End Development</li></a>
              <a href="email.html"><li>e-mail Development</li></a>
              <a href="react.html"><li>React Applications</li></a>
            </ul>
          </li>
          <a href="about.html"><li>About</li></a>
          <a href="#"><li  class="selected">Contact</li></a>
        </ul>
      </nav>
    </header>
    <div class="mainWrapper">
      <div class="message">
        <h1>Interested in working with me?</h1>
        <h3>Please fill out the form and tell me a little about your project, and I will get back with you as soon as possible</h3>
      </div>
      <div class="formWrapper">
        <form method="post" action="formemail.php" name="myemailform">
          <input type="text" name="name" placeholder="Name">
          <br><br>
          <input type="text" name="email" placeholder="email">
          <br><br>
          <input type="text" name="timeline" placeholder="Timeline">
          <br><br>
          <input type="text" name="budget" placeholder="Budget">
          <br><br>
          <textarea name="message" rows="5" cols="40" placeholder="Tell me a little about your project"></textarea>
          <br><br>
          <input type="submit" name="submit" value="Submit" class="submitBtn">
        </form>
      </div>
    </div>
    <footer>
      <p>&copy Jacob Richardson 2017</p>
      <a href="https://www.facebook.com/jacob.richardson.399?pnref=about.overview.rel"><img src="./img/facebook-logo.png" alt="facebook logo" width="60"/></a>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
