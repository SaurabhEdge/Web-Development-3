<!--

@author: Saurabh Shukla
@email-id: ss7586@rit.edu
@Course: ISTE-646 (Foundations of Web Technologies)
@Term: Spring 2021
@File name: index.html

-->


<!DOCTYPE html>
<html lang="en">
<head>
   <!-- meta tag for media quesry and external style sheet connect-->
	<meta charset="utf-8" />
  <title>India: Home </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/~ss7586/ISTE646/Final/assets/css/style.css" rel="stylesheet" >
  <link rel="icon" type="image/png" href="/~ss7586/ISTE646/Final/assets/media/logo.png" />
</head>

<body >
     <!-- php include  -->
<?php  include 'header.php';?>
     <!-- Creating global data list for information -->

  <dl>
    <dt>  </dt>
    <dd><br><b><u>Project Description:</u></b>
        <p>
          This project focusses on topic " <code class="cite">Where I lived ?</code> " to 
          generate the appropriate content. 
          I have chosen <code class="cite">INDIA</code> as per topic selection criteria to showcase different aspects of it.

          This website give insights of <code class="cite">INDIA</code> step by step considering the factors like <code class="cite"> Cultural history
        </code>, 
          <code class="cite">Geography</code>, <code class="cite">Cuisine</code>, <code class="cite">Sports
        </code> and many more. 
          I have used pictures to depict my points to Audience. 
          <br><br>
          Let’s start this journey!
        </p>       
                     
    </dd>
    <dd><br><b><u>Project Objective:</u></b>
      <p>Objective of this project to <code class="cite">create website</code> 
        for selected topic and showcase the <code class="cite">HTML</code>, <code class="cite">CSS</code>, 
        <code class="cite">JavaScript</code> concept and their application.
        In addition to that, <code class="cite">Navigation</code>, <code class="cite">Content</code>, 
        <code class="cite">Consistency</code> and <code class="cite">principle of CRAP is considered</code>.

      </p>            
  </dd>

  </dl>    
<br> 

 <!-- Creating card layout as Summary of website -->

  <h3><b> Summary: </b></h3><br>
  <div class="row">
    <div class="column">
     <img src="/~ss7586/ISTE646/Final/assets/media/home_1.jpg" alt="Avatar" style="width:100%">
      <div class="card">
        <h4>Cultural History</h4>
        <p>Get the amazing view of Cultural history of incredible India. Right from Ancient to
          current traditions.
        </p>
        <p><a href="Cultural_history.php">See more</a></p>
      </div>
    </div>
  
    <div class="column">
     <img src="/~ss7586/ISTE646/Final/assets/media/home_2.jpg" alt="Avatar" style="width:100%">
      <div class="card">
        <h4>Hotel & Transportation</h4>
        <p> After More than 15 hrs. of travel, you wan't nice & comfy place to 
          relax? have a look to explore the amazing hotels to stay & relax.
        </p>
        <p><a href="Transportation.php">See more</a></p>
      </div>
    </div>
    
    <div class="column">
     <img src="/~ss7586/ISTE646/Final/assets/media/home_3.jpg" alt="Avatar" style="width:100%">
      <div class="card">
        <h4>Cuisine</h4>
        <p>India is known for it's rich cuisine history. Have a look to get 
          brief idea of it & ofcourse try them to whenever you get chance.
        </p>
        <p><a href="Food.php">See more</a></p>
      </div>
    </div>

     <div class="column">
     <img src="/~ss7586/ISTE646/Final/assets/media/home_4.jpg" alt="Avatar" style="width:100%">
      <div class="card">
        <h4>Places to visit</h4>
        <p>
          From world's oldest city to himalaya's.
          India have everything you're looking for. Enjoy the beautiful ride!

        </p>
        <p><a href="Places.php">See more</a></p>
      </div>
    </div>
    
    <div class="column">
     <img src="/~ss7586/ISTE646/Final/assets/media/home_5.jpg" alt="Avatar" style="width:100%">
      <div class="card">
        <h4>Sports in India</h4>
        <p>
          Starting with most popular sport in Asia, Cricket to pinnacle of 
          human strength specif sports are in India.
        </p>
        <p><a href="Sports.php">See more</a></p>
      </div>
    </div>
  </div>
  
<br><br>

   <!-- php include  -->
<?php  include 'footer.php';?>
  </body>
    </html>
    