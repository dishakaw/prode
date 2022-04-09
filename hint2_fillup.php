<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Fill in the blanks 2</title>
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
                    <h2><strong>Level 2</strong></h2>
                </div><br />
    <p>1.Abstract class and "Interface" are used for runtime Polymorphism.</p>
    <p> 2."Final" variables cannot be changed after initialization.</p>
    <p>3."This" keyword is used to reference to the current object.</p>
    <p>4."Transient" variables cannot be serialized.</p>
    <p>5."Volatile" is a declaration that a variable can be accessed by multiple threads.</p>
            <div id="disappear001"><div id="center001"><button class="button001" onclick="submit001()">Submit</button></div></div><br />
                <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
                <button id = "nextLevel" >
                <a  href="fillup3.php" target ="_self">Next Level</a>
                </button>
                    <br />
                <br />
                </div>
        </div>
    </body>
    </html>