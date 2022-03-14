<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="shortcut icon" href="Assets/favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gisselle Petty - Freelance Programmer</title>
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
        <a >Gisselle Petty</a>
    </div>

    <div class="aboutMe">
        <img src="Assets/Headshot.png" alt="headshot-Photo" id="headshot" height="400" width="400">

        <div class="aboutMe-Writing">
            <p id="myTitle">Software Developer</p>
            <p id="myName">Gisselle Petty</p>
            <p id="intro">Thank you for visiting my page! Some quick things. I love to code!
                I am experienced in C++, C, Python, Javascript, HTML, CSS, and Mac OS. 
                I am currently an undergraduate Computer Science major at UC Davis. I'm also a tad bit creative,
                so check out my other projects! Take a look around!
            </p>
        </div>

        <form method="get" action="documents/GissellePettyResume.pdf">
            <button type="submit" id="downloadCV">Download CV</button>
        </form>
        
        <button id="contactBtn">Contact</button>
    </div>




    <div class="Skills-Title">
        <p>What I Do</p>

        <hr id="Skills-Line" color="#006ac7">
    </div>

    <div class="skills-Container">

        <div class="logoImgs">
            <img src="Assets/GearsClipArt.png" id="gearsClipArt" height="60" width="60">
            <img src="Assets/ComputerScreenClipArt.png" id="computerScreenLogo" height="50" width="50">
        </div>

        <div class="row1-skills">
            <div class="backEnd">
                <p>Back-End Development</p>
                <p id="info">
                    I've dabbled in Python, Swift, C/C++, but out of the two I prefer the latter.
                    Even though C++ can have a heavy syntax, I find the language powerful and fulfilling.
                    Check out my 2D game, Squidward's Adventure, full programmed in C++.
                </p>
            </div>
            <div class="webDesign">
                <p>Web Design</p>
                <p id="info">
                    I've always found the artistry behind the challenge of crafting a website exciting. 
                    The decisions a painter makes using their pallette and the ones a programmer decides using
                    their keyboard are interchangeable. Explore more of my website and other HTML or Javascript
                    projects!
                </p>
            </div>
        </div>

        <div class="row2-skills">
            <div class="filmmaking">
                <p>Filmmaking</p>
                <p id="info">
                    Not just programming, but I also dabble with the camera. Check out my filmography! I love
                    telling the unexpecteced story.
                </p>
            </div>
            <div class="illustration">
                <p>Illustration</p>
                <p id="info">
                    Almost every asset I've used in a project has come from my own production. Which may be why
                    some projects have taken longer than others. I figured that if someone else hasn't created 
                    the specific asset I want and need, why don't I make it myself? Enjoy my illustrations page!
                </p>
            </div>
          </div>
    </div>
    
</body>
</html>

