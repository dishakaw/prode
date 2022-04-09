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
<p>1.Number of primitive data types in Java are <input type="text" class="check003" id="input001" size="15" /><text class="button002" id="check001"></text>.</p>
<p> 2.Arrays in java are <input id="input002" size="15" /><text class="button002" id="check002"></text>.</p>
<p>3.Class string belong to package <input id="input003" size="15" /> <text class="button002" id="check003"></text>.</p>
<p>4.Output of Math.floor(3.6) is <input id="input004" size="15" /><text class="button002" id="check004"></text>.</p>
<p>5.Java Programming is invented by <input id="input005" size="15" /><text class="button002" id="check005"></text>.</p>
        <div id="disappear001"><div id="center001"><button class="button001" onclick="submit001()">Submit</button></div></div><br />
            <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
            <button id = "nextLevel" >
            <a  href="fillup2.php" target ="_self">Next Level</a>
            </button>
            <button id = "HINTS_FILLUP_LEVEL1" >
            <a  href="hint1_fillup.php" target ="_self">HINTS</a>
            </button>
                <br />
            <br />
            </div>
    </div>
    <script>
        var g;
        var h;
        var i;
        var j;
        var k;
        function submit001() 
        {
            b = input001.value;
            c = input002.value;
            d = input003.value;
            e = input004.value;
            f = input005.value;
            if (b == "8" || b == "Eight" || b=="eight") {
                g = 1;
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                g=0;
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (c == "objects" || c == "Objects") {
                h = 1
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                h=0;
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (d == "java.string" ) {
                i = 1;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                i=0;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (e == "3.0" || e== "3" ) {
                j = 1;
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                j=0;
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (f == "James Gosling" || f == "james gosling") {
                k = 1;
                input005.value = f;
                check005.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                k=0;
                input005.value = f;
                check005.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            {
            var a=g+h+i+j+k;
                

                message001.innerHTML = " Score : "+a;
                disappear001.innerHTML = "";
                reload001.innerHTML = "<div id=center001><button class=button001 onclick=repeat001()>Repeat</button></div>";

            }
            

        }
        
            function repeat001() {
                location.reload();
            }
    </script>
    
</body>
</html>