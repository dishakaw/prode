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
   #HomePage,#HINTS_FILLUP_LEVEL1,.btn{
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
<p>1. <input type="text" class="check003" id="input001" size="15" /><text class="button002" id="check001"></text> class cannot be subclassed.</p>
<p> 2. <input id="input002" size="15" /><text class="button002" id="check002"></text> is used to specify that the method is not implemented in Java, but rather in another language.</p>
<p>3. <input id="input003" size="15" /> <text class="button002" id="check003"></text> is used to access members of the base class.</p>
<p>4. <input id="input004" size="15" /><text class="button002" id="check004"></text> members are not accessible outside object scope.</p>
<p>5. <input id="input005" size="15" /><text class="button002" id="check005"></text> members are accessible from object and the sub class objects.</p>
        <div id="disappear001"><div id="center001"><button class="button001" onclick="submit001()">Submit</button></div></div><br />
            <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
            <button id = "HomePage" >
                <a  href="page_home.php" target ="_self">Home Page</a>
                </button>    
                <button id = "HINTS_FILLUP_LEVEL1" >
                    <a  href="hint3_fillup.php" target ="_self">HINTS</a>
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
            if (b == "Final" || b == "final") {
                g = 1;
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                g=0;
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (c == "Native" || c == "native") {
                h = 1
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                h=0;
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (d == "Super" || d == "super") {
                i = 1;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                i=0;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (e == "Private" || e == "private") {
                j = 1;
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                j=0;
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (f == "Protected" || f == "protected") {
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