<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Fill in the blanks 3</title>
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
       #HomePage,#HINTS_FILLUP_LEVEL1, .btn{
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
                    <h2><strong>Level 3</strong></h2>
                </div><br />
    <p>1."Final"class cannot be subclassed.</p>
    <p> 2."Native" is used to specify that the method is not implemented in Java, but rather in another language.</p>
    <p>3."Super" is used to access members of the base class.</p>
    <p>4."Private" members are not accessible outside object scope.</p>
    <p>5."Protected" protected members are accessible from object and the sub class objects.</p>
            <div id="disappear001"><div id="center001"><button class="button001" onclick="submit001()">Submit</button></div></div><br />
                <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
                <button id = "HomePage" >
                <a  href="page_home.php" target ="_self">Home Page</a>
                </button>
                    <br />
                <br />
                </div>
        </div>
    </body>
    </html>