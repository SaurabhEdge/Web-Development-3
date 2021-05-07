<!--

@author: Saurabh Shukla
@email-id: ss7586@rit.edu
@Course: ISTE-646 (Foundations of Web Technologies-II)
@Term: Spring 2021
@File name: Cultural_history.html
@reference: https://traveltriangle.com/blog/places-of-indian-cultural-heritage/
            https://www.iexplore.com/articles/travel-guides/south-and-southeast-asia/india/history-and-culture
            https://knowindia.gov.in/culture-and-heritage/ancient-history.php
            https://www.livescience.com/28634-indian-culture.html

-->

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- meta tag for media quesry and external style sheet connect-->
    <meta charset="utf-8" />
    <title>India: Cultural History </title>
  <link href="/~ss7586/ISTE646/Final/assets/css/style.css" rel="stylesheet" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/~ss7586/ISTE646/Final/assets/media/logo.png" />
</head>
<body>
     <!-- php include  -->
<?php  include 'header.php';?>
   
 <!-- Creating global data list for information -->
<br>
      <h3><b> History </b></h3>
      <dl><dt></dt>
        <dd><br>- <code class="cite">INDIA</code>, <code class="cite">Hindustan</code>, 
          <code class="cite">Bharat</code>, <code class="cite">Republic of India</code> are the name of same country and
             it is the largest democracy in world. With roughly <code class="cite">one-sixth of the world’s 
             total population</code>, India is the second most populous country. </dd>
        <dd><br>- Its capital is <code class="cite">New Delhi</code>. Its government is a constitutional republic that 
            represents a highly diverse population consisting of millions of ethnic groups 
            and likely thousands of languages. </dd>
            <dd> <br>
              <figure class="right_next zoomin">
                <img src="/~ss7586/ISTE646/Final/assets/media/indian-flag.png" alt="flag" 
                width="300" height="200" class="responsive_img_1">
                <figcaption class="glen-cap">Indian Flag </figcaption>
                </figure>
             </dd>
        <dd><br>- As per <code class="cite">historical facts</code>, India was intermittently invaded by incursions 
            from beyond its northern mountain wall. Especially important was the coming 
            of Islam, brought from the northwest by Arab, Turkish, Persian, and other 
            raiders beginning early in the 8th century CE. </dd>
           
        <dd><br>- Eventually, some of those raiders stayed; by the 13th century much of the 
            subcontinent was under Muslim rule, and the number of Muslims steadily increased.
             Only after the arrival of the Portuguese navigator Vasco da Gama in 1498 and 
             the subsequent establishment of European maritime supremacy in the region did 
             India become exposed to major external influences arriving by sea, a process
              that culminated in the decline of the ruling Muslim elite and absorption of 
              the subcontinent within the British Empire. </dd>
        <dd><br>- Direct administration by the British, which began in 1858, effected a political 
            and economic unification of the subcontinent. When British rule came to an end in
             1947, the subcontinent was partitioned along religious lines into two separate 
             countries—India, with a majority of Hindus, and Pakistan, with a majority of 
             Muslims; the eastern portion of Pakistan later split off to form Bangladesh.</dd>
        <dd><br>- Many British institutions stayed in place (such as the parliamentary system of government);
             English continued to be a widely used lingua franca; and India remained within the 
             Commonwealth. Hindi became the official language (and several other local languages
              achieved official status), while a vibrant English-language intelligentsia thrived. </dd>
      
      </dl>
      <br>
      <h3><b> Religional Diversity </b></h3>
<div class="zoom">
  <figure >
    <img src="/~ss7586/ISTE646/Final/assets/media/post.jpg" alt="religion" 
    width="400" height="280" class="responsive_img">
    </figure>
</div>

 <!-- Creating Pie chart to demonstrate religional diversity -->

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


 <!-- Image gallary  -->
<h3><b>Festival Celebration Gallary</b></h3><br><br>

<div class="img-hover-zoom img-hover-zoom--blur">
        <img src="assets/media/festival1.jpg" alt="cs_logo" width="270" height="270"  >
        <img src="assets/media/festival2.jpg" alt="cs_logo" width="270" height="270"  >
        <img src="assets/media/festival3.jpg" alt="cs_logo" width="270" height="270"  >
        <img src="assets/media/festival4.jpg" alt="cs_logo" width="270" height="270"  >
        <img src="assets/media/festival5.jpg" alt="cs_logo" width="270" height="270" > 
        <img src="assets/media/festival6.jpg" alt="cs_logo" width="270" height="270"  >
        <img src="assets/media/festival7.jpg" alt="cs_logo" width="270" height="270"  >
        <img src="assets/media/festival8.jpg" alt="cs_logo" width="270" height="270"  >

</div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Religion', 'Followers'],
['Hinduism', 79.8],
['Islam', 14.2],
['Christianity', 2.3],
['Sikhism', 1.7],
['Buddhism', 0.7],
['Janism', 0.4],
['Others', 0.9]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Religion Followers in INDIA', 'width':650, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<br>

   <!-- php include  -->
  <?php  include 'footer.php';?>
        </body>
        </html>