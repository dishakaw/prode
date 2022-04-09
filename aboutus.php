<html lang='en'>
    <head>
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset="UTF-8">
        <title>ABOUT US</title>
        
        <a href="page_home.html">
        <style>
          @import url('https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700;800;900&display=swap');
*
{
    margin: 0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    background: #16384c;
    margin-top: 100px;
}
.container
{
    position: relative;
    width: 1100px;
    display:flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 30px;
}
.card
{
    position: relative;
    height:420px;
   max-width: 300px;
   background: #ffff;
   margin:30px 10px;
   padding: 20px 15px;
   display: flex;
   flex-direction: column;
   box-shadow: 0 5px 202px rgba(0,0,0,0.5);
   transition: 0.3s ease-in-out;
}
.card:hover
{
    height:420px;
}
.imgBx
{
    position: relative;
    width:260px;
    height: 260px;
    top: -60px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}
.imgBx img
{
    max-width: 100%;
    border-radius: 4px;
}
.content
{
    position: relative;
    margin-top: -10px;
    padding:10px 15px;
    text-align: center;
     visibility: visible;
    color: #111;
    opacity: 100;
        transition :0.3s ease-in-out;
}
.card:hover
{
    visibility: visible;
    opacity: 1;
    margin-top: -40px;
    transition-delay: 0.3s;
}
        </style>
    </head>
    <body>
            <section>
                <div class="container">
                 <div class="card"> 
                      <div class="imgBx">
                        <img src="D.jpg">
                      </div>
                      <div class="content">
                          <h3>DISHA KAW<br><span>ROLLNO=
                            1020160</span>
                          </h3>
                        </div>
                    </div> 
                 <div class="card"> 
                      <div class="imgBx">
                        <img src="P.jpeg">
                      </div>
                      <div class="content">
                          <h3>PARTH JUVATKAR<br><span>ROLLNO=
                            1020157</span>
                          </h3>
                        </div>
                    </div>
                 <div class="card"> 
                      <div class="imgBx">
                        <img src="V.jpeg">
                      </div>
                      <div class="content">
                          <h3>VEDANT INGLE<br><span>ROLLNO=
                            1020149</span>
                          </h3>
                        </div>
                    </div>
                 <div class="card"> 
                      <div class="imgBx">
                        <img src="J.jpeg">
                      </div>
                      <div class="content">
                          <h3>JOANNE DANIEL<br><span>ROLLNO=
                            1020123</span>
                          </h3>
                        </div>
                    </div>  
                </div>
            </section>
    </body>