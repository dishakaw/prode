<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fill in the blanks 1</title>
</head>
<body>
    <style>
         
   .main-div{
       background: url(bg.jpg) no-repeat center center fixed; 
       background-repeat: no-repeat;
       background-size: cover;
       background-attachment: fixed;
       width: 100%;
       min-height: 100vh;
       display: grid;
       place-items: center;
   }
   #nextLevel,#HINTS_FILLUP_LEVEL1, .btn{
    background-color: green;
            color: white;
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
   }
   
        p {
            text-align: center;
        }
        #frame001 {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            width: default;
            height: 500px;
            padding: 5px;
            align-content: center;
        }

        #color001 {
            color: black;
            font-size: large;
            text-align: center;
        }

        #center001 {
            text-align: center;
        }

        .button001 {
            background-color: blue;
            color: white;
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
        }

        .button002 {
            width: 10px;
            height: 10px;
        }
    </style>
    <div class="main-div">
    <div id="frame001">
        <div id="color001">
            <div id="center001">
                <h2><strong>Level 1</strong></h2>
            </div><br />
<p>1.Number of primitive data types in Java are: EIGHT.</p>
<p> 2.Arrays in java are "OBJECTS".</p>
<p>3.Class string belong to package "JAVA.STRING" .</p>
<p>4.Output of Math.floor(3.6) is "3".</p>
<p>5.Java Programming is invented by "James Gosling" .</p>
        <div id="disappear001"><div id="center001"><button class="button001" onclick="submit001()">Submit</button></div></div><br />
            <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
            <button id = "nextLevel" >
            <a  href="fillup2.php" target ="_self">Next Level</a>
            </button>
                <br />
            <br />
            </div>
    </div>
</body>
</html>