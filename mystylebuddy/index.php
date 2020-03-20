<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>My Style Buddy</title>
  <link href="css/reset.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
  <div id="page">
    <aside id="sidebar">
      <nav><a class="logo" href="#top" id="nav-logo"><span>Foobar</span>My Style Buddy</a>
        <ul>
          <li class="active" id="nav-1"><a href="#home">Home</a></li>

          <li id="nav-3"><a href="#about">App Link</a></li>
          <li id="nav-4"><a href="#contact">Contact</a></li>
        </ul>
        <div class="bg_bottom"></div>
      </nav>
    </aside>
    <div id="main-content">
     <section id="top"></section><!-- do not remove ;)-->
     <section id="home">
      <div id="loader" class="loader"></div>
      <div id="ps_container" class="ps_container"> <span class="ribbon"></span>
        <div class="ps_image_wrapper"> 
          <!-- First initial image --> 
          <img src="images/1.jpg" alt="" /> </div>
          <!-- Navigation items -->
          <div class="ps_next"></div>
          <div class="ps_prev"></div>
          <!-- Dot list with thumbnail preview -->
          <ul class="ps_nav">
            <li class="selected"><a href="images/1.jpg" rel="images/thumbs/1.jpg">Image 1</a></li>
            <li><a href="images/2.jpg" rel="images/thumbs/2.jpg">Image 2</a></li>
            <li><a href="images/3.jpg" rel="images/thumbs/3.jpg">Image 3</a></li>
            <li><a href="images/4.jpg" rel="images/thumbs/4.jpg">Image 4</a></li>
            <li><a href="images/5.jpg" rel="images/thumbs/5.jpg">Image 5</a></li>
            <li class="ps_preview">
              <div class="ps_preview_wrapper"> 
                <!-- Thumbnail comes here --> 
              </div>
              <!-- Little triangle --> 
              <span></span> </li>
            </ul>
          </div>
          <!--end ps_container-->
          <header class="divider intro-text">
           <div class="ps_image_wrapper"> 
            <!-- First initial image --> 
            <img src="images/1.jpg" alt="" /> </div>
            <h2>We Create Your Style </h2>
            A web application, which recommends the clothing specifically for females based on their appearance inputs i.e. Skin Color, Body Shape, Age  and clothing color preference. The results will be sorted based on the Occasion i.e., Festival, Formals, Meetings, Social etc.

            <!-- <div class="contact-me"><a class="contact button" href="#contact">Contact Me</a></div>-->
          </header>
          <div class="recent-work columns">

            <div class="two-column">
              <figure><a href="images/pricing_table_3.jpg" rel="recent_work" class="zoom"><img src="images/work_1.jpg" alt="Image"></a></figure>
            </div>
            <div class="two-column last">
              <figure><a href="images/pricing_table_3.jpg" rel="recent_work" class="zoom"><img src="images/work_2.jpg" alt="Image"></a></figure>
            </div>
          </div>
          <div class="my-services columns">
            <h3>Our Services</h3>
            <div class="three-column">
              <h3><a href="./index.php#about">Create your own style</a></h3>

            </div>
            <div class="three-column">
              <h3>Online shopping</h3>

            </div>
            <div class="three-column last">
              <h3>Shops Nearby</h3>

            </div>
          </div>

          <section id="about" class="clearfix">
            <header>
              <h5>Enter Your Details</h5>

            </header>


            <form action="your_style.php" method="POST">      

              <br>               

              <table width="400" height="50" border="1" align="center" bordercolor="#006600" cellpadding="10" >
                <tr>
                  <td width="100"><h3>Body-Type:</h3></td>
                  <td width="100"><label for="Body_Type"></label>
                    <select name="Body_Type" id="Body_Type">
                      <option  value="select">Select your body type</option> 
                      <option  value="Fat">Fat</option>  
                      <option  value="Thin">Thin</option>  
                      <option  value="Medium">Medium</option>  
                    </select>
                  </td>
                </tr>
                <tr>
                  <td width="100"><h3>Age:</h3></td>
                  <td width="100"><label for="Age"></label>
                    <select name="Age" id="Age">
                      <option  value="select1">Your age</option>

                      <option  value="Kids" >Kids</option>  
                      <option  value="16-20">16-20</option>  
                      <option  value="20-25">20-25</option> 
                      <option  value="26-30">26-30</option>  
                      <option  value="30-40">30-40</option>
                      <option  value="40+">40+</option>  

                    </select>
                  </td>
                </tr>
                <tr>
                  <td width="100"><h3>Height</h3></td>
                  <td width="100"><label for="Height"></label>
                    <select name="Height" id="Height">
                      <option  value="select2">Your height</option>
                      <option  value="Tall">Tall (6 ft+)</option>  
                      <option  value="Medium">Medium  (5.3 ft to 6 ft)</option> 
                      <option  value="Short">Short (Less than 5.3 ft)</option>  

                    </select>
                  </td>
                </tr>
                <tr>
                  <td width="100"><h3>Skin-Color</h3></td>
                  <td width="100"><label for="Skin_Color"></label>
                    <select name="Skin_Color" id="Skin_Color">
                      <option  value="select3">Your skin colour</option>
                      <option  value="Fair">Fair</option>  
                      <option  value="Dark">Dark</option>  
                      <option  value="Medium">Medium</option> 

                    </select>
                  </td>
                </tr>

                <tr>
                  <td width="100"><h3>Occassion</h3></td>
                  <td width="100"><label for="Occassion"></label>
                    <select name="Occassion" id="Occassion">
                      <option  value="select4">Select the occasion type</option>
                      <option  value="formal">Formal</option>  
                      <option  value="casual">Casual</option>  
                      <option  value="ethnic">Ethnic</option> 
                      
                    </select>
                  </td>
                </tr>
              </table>
              <br>
              <div>   <input type="submit" name="Submit" value="Submit"> 
              </div>



              <br>
            </form>

          </section> <!--end section-->
          <section id="contact" class="clearfix">
           <p><h3>Contact Details:</h3><br><br><h3>Lavita Talukdar</h3>Research Engineer,<br> Department of Computer Science and Engineering,<br>
            Indian Institute of Technology,</br>Mumbai- 400 076</br>Contact Number: 9920128438<br>Homepage: <a href="http://www.cse.iitb.ac.in/~lavita" target="_blank">http://www.cse.iitb.ac.in/~lavita</a></p><br>
            <p><h3>Ankit Bahuguna</h3>Research Engineer,<br> Department of Computer Science and Engineering,<br>
              Indian Institute of Technology,</br>Mumbai- 400 076</br>Contact Number: 9769603295<br>Homepage: <a href="http://www.cfilt.iitb.ac.in/~bahuguna" target="_blank">http://www.home.iitb.ac.in/~bahuguna</a></p><br>
              <p><h3>Abhilash Gupta</h3>B.Tech,<br> Department of Computer Science and Engineering,<br>
                Indian Institute of Technology,</br>Mumbai- 400 076</br>Contact Number: 7385447506<br>Homepage: <a href="http://www.cse.iitb.ac.in/~lell" target="_blank">http://www.cse.iitb.ac.in/~lell</a></p><br>


              </section> <!--end section-->


            </div>
          </div>

        </body>
        </html>
