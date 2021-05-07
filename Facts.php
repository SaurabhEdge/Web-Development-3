<!--

@author: Saurabh Shukla
@email-id: ss7586@rit.edu
@Course: ISTE-646 (Foundations of Web Technologies-II)
@Term: Spring 2021
@File name: Facts.html

-->

<?php  include 'phpDB.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>India: Facts</title>
  <link href="/~ss7586/ISTE646/Final/assets/css/style.css" rel="stylesheet" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type = "text/javascript" src="/~ss7586/ISTE646/Final/assets/js/script.js"></script>
  <link rel="icon" type="image/png" href="/~ss7586/ISTE646/Final/assets/media/logo.png" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>

    <!-- php include  -->
    <?php  include 'header.php';?>

    <h3>Feedback Form</h3>
    <ul class="output">
       <?php
        foreach($records as $this_row){
            echo "<br><li style= color:green>". $this_row["name"]. "</li>: " . $this_row["comment"]. "@ " . $this_row["last modified date"]. "<br>";
        }
        ?>

      </ul>


    <form name="myForm" action="/~ss7586/ISTE646/Final/Facts.php" method="POST" onsubmit="return validateForm()">
        <br><hr><h3>What do you have to say about website?</h3>
        <div>
            First Name: &nbsp;
            <input type="text" name="name" placeholder="Your name">
        </div>
        <br/>
        <div>
            <textarea id="cmtTEXT" name="comment" rows="4" cols="50" placeholder="say what?"></textarea>
        </div>
        <br/>
        <div class="g-recaptcha" data-sitekey="your_key"></div>
        <br/>
        <?php 
    
    $secretKey = "your_s_key";
    $responseKey = $_POST['g-recaptcha-response'];
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";

    $response= file_get_contents($url);
    $response=json_decode($response);

    if($response->success){
        echo " Captcha Checked Successfully !";

    }
    else{
        echo "Invalid Captcha or not Checked!";
    }
    
    ?>
    <br><br>
        <div>
            <input type="submit" value="Add to List">
        </div>
    </form>
    <div class="status">
    


    </div>

    

    <script>
        function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        var y= document.forms["myForm"]["comment"].value;
        if (x == "" || y== "") {
            alert("Fields can't be empty!");
            return false;
        }
        }
</script>
   <!-- php include  -->
<?php  include 'footer.php';?>
        </body>
        </html>

        
