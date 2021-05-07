<!--

@author: Saurabh Shukla
@email-id: ss7586@rit.edu
@Course: ISTE-646 (Foundations of Web Technologies-II)
@Term: Spring 2021
@File name: header.php


-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/~ss7586/ISTE646/Final/assets/css/style.css" rel="stylesheet" >
 <!-- <link rel="shortcut icon" type="image/png" href="/~ss7586/ISTE646/Final/assets/media/favicon.png" >
 --> 
 <link rel="icon" type="image/png" href="/~ss7586/ISTE646/Final/assets/media/logo.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <!-- Creating logo of website --> 
  <div class="bannerImageL">
    <img src="/~ss7586/ISTE646/Final/assets/media/logo.png" alt="logo" width="100" height="80">
</div>

<!-- Creating logo of website --> 
<div class="bannerImageR">
  <img src="/~ss7586/ISTE646/Final/assets/media/logo.png" alt="logo" width="100" height="80">
</div>
  <h1>I      N      D      I     A</h1>


   <!-- Global navigation bar -->

   
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">History 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a  href="Cultural_history.php">Cultural history</a>
    <a href="Geography.php">Geography</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Places 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a  href="Transportation.php">Hotel & Transportation</a>
    <a href="Places.php">Places to visit</a>
    <a href="Food.php">Food & Cuisine</a>
    <a href="Sports.php">Sports</a>
    </div>
  </div> 
  <a href="Facts.php">Feedback</a>
  <a href="reference.php">Reference</a>
  <a href="grading.php">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

</body>
</html>
