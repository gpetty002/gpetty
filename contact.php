<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="shortcut icon" href="Assets/favicon.ico"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
</head>
<body>
    <div class="topNav">
        <a href="contact.php">Contact</a>
        <a href="#projects">Projects</a>
        <a href="documents/GissellePettyResume.pdf">Resume</a>
        <a class="active" href="index.php">About Me</a>
        <a href="#logo">
            <img src="Assets/GP-Logo.svg" alt="GP logo" id="logo" height="50" width="50">
        </a>
        <a>Gisselle Petty</a>
    </div>
    
    <div class="contact">
        <div class="title">Contact</div>

        <div class="subTitle">
            <p class="subTitle">Get in Touch with Me</p>
        </div>

        <hr id="subTitle-Line" color="#006ac7">
    
        <form action="https://githsub.com/gpetty002">
            <button type="submit" id="goToGitHub">GitHub</button>
        </form>
        <br>
        <form action="https://www.linkedin.com/in/gisselle-petty-961a10157">
            <button type="submit" id="goToLinkedIn">LinkedIn</button>
        </form>

        <br>

        <form action="php/contactform.php" method="post">
            <input type="text" name="fullName" id="fullName" placeholder="First Name">
            <input type="text" name="email" id="email" placeholder="Email Address">
            <input type="text" name="subject" id="subject" placeholder="Subject">
            <input type="text" name="message" id="message" placeholder="Message" style="text-align:left;">

            <button type="submit" name="sendMessage" id="sendMessage">Send message</button>
        </form>

    </div>

</body>
</html>
