<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Music Website</title>
        <link rel="stylesheet" href="style.css">
        </head>
<body>  
      
      <marquee behavior="scroll" direction="right" scrollamount="15">
      <h1>M.A.P<h1>
      </marquee>
      <div class = "navbar">
      <a href ="index1.php">HOME</a>
      <a href="search.php">SEARCH</a>
      <a href="api.html">API</a>
      <a href="#lesson">IMAGES</a>
      <!-- <a href = "register.php" class ="button" target="_blank">LOGIN</a> -->
      <a href = "about.php" class ="button" >ABOUT</a>
      <a href="#">CONTACT</a>
  </div>
    

    <div class="container">
        <div class="songList">
 <marquee behavior="scroll" direction="right">
            <h1 align ="center">MUSIC ADVISOR AND PLAYER</h1>
</marquee>
            <div class="songItemContainer">
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00<i id="0" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp"> 02:00<i id="1" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00<i id="2" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00 <i id="3" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00 <i id="5" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00 <i id="6" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00<i id="7" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00 <i id="8" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">02:00<i id="9" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
            </div>
        </div>
        <div class="songBanner"></div>
    </div>

    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i> 
        </div>
        <div class="songInfo">
            <img src="playing.gif" width="42px" alt="" id="gif"> <span id="masterSongName"> Kushi Jab Bhi Teri ....</span>
        </div>
    </div>

<h1 align = "left" id ="lesson"> Images <h1>
<div class="bg"></div>
        <div class="images" id ="lesson">

       <div class="photo">
       <marquee behavior="scroll" direction="right" scrollamount="15">
       <img src="10.png" alt="photo" />
       </marquee>
       </div>
  
       <div class="photo">
       <marquee behavior="scroll" direction="left" scrollamount="15">
       <img src="mus.jpg" alt="photo" />
       </marquee>
       </div>

       <div class="photo">
       <marquee behavior="scroll" direction="left" scrollamount="15">
       <img src="mus1.jpg" alt="photo" />
       </marquee>
       </div>

       <div class="photo">
       <marquee behavior="scroll" direction="right" scrollamount="15">
       <img src="5.jpg" alt="photo" />
       </marquee>
       </div>
       </div>

<h1 align = "left" id ="lesson1"> About <h1>
<p style="font-size: 25px" align ="center"> 
By using music Advisor system, <br>
the music provider can predict <br>
and then offer the appropriate <br>
songs to their users based on the <br>
characteristics of the music that <br>
has been heard previously.Our research <br>
would like to develop a music Advisor <br>
system that can give recommendations <br>
based on similarity of features on audio signal.<br>
</p>

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/568568c564.js" crossorigin="anonymous"></script>
</body>
</html>