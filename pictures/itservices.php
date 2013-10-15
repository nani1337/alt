
<?php

require_once("../include/pictures.php");
require_once("../include/comments.php");
require_once("../include/html_functions.php");
require_once("../include/functions.php");

session_start();

$pictures = Pictures::get_recent_pictures(10);

?>



<div class="column prepend-1 span-24 first last"></div >

<?php our_header("recent"); ?>


<div class="column prepend-1 span-24 first last">
<font face="Calibri (Body)"> 
 <p><h2>"Innovation is not only about being original - it is about making a difference.
To Alttius, innovation is novelty in how we create and distribute value."</h2>
<br>
Today, organizations operate in a demanding business environment that makes a service-oriented IT framework which prioritizes flexibility, speed and efficiency, a must. It is imperative for business enterprises to implement best practices and processes to ensure efficiency across various operational facets. At Alttius, you will find the answer to your requirement when you choose from a complete range of IT services, and leverage on our domain knowledge and business expertise.</p> 

<hr>
<!--<table border="1">
<><tr>
<td><p>
<a href= "/" target="/" >  Online Banking with FREE Online Bill Pay</a>  
<br>No stamps, envelopes, or checks to write give you more time to spend on the things you enjoy. </p>
</td>
<td><img src="home1.jpg" alt="alttius.com"width="250" height="80"></td>
<td><a href= "/" target="/" >Privacy and Security</a>
The 2000 employees of Altoro Mutual are dedicated to protecting your privacy and security. We pledge to provide you with the information and resources that you need to help secure your information and keep it confidential. This is our promise. </td>
</tr>
<tr>
<td><img src="home2.jpg" alt="alttius.com"width="250" height="80"> </td>
<td><a href= "/" target="/" > Business Credit Cards</a>
You're always looking for ways to improve your company's bottom line. You want to be informed, improve efficiency and control expenses. Now, you can do it all - with a business credit card account from  </td>
<td><img src="home3.jpg" alt="alttius.com"width="250" height="80"> </td>
</tr>
<tr>
<td></td>
<td><a href= "/" target="/" > Retirement Solutions</a>
Retaining good employees is a tough task. See how can assist you in accomplishing this feat through effective Retirement Solutions. </td>
<td><a href= "/" target="/" >Win an 8GB iPod Nano</a>
Completing this short survey will enter you in a draw for 1 of 50 iPod Nanos. We look forward to hearing your important feedback. </td>
></tr></table> -->

<table border ="1"cellspacing="100">
<font face="Calibri (Body)"> 
<tr>
<td><img src="serviceslogo1.jpg" alt="alttius.com"width="250" height="80">
</td>
<td><b>Application Development & Maintenance (Turnkey)</b> 
<br>
<br>
<font face="Calibri (Body)"> At Alttius, our IT Solutions paradigm is structured to reflect the realities of today’s business landscape. Each organization has to deal with varied requirements related to operations, infrastructure, customer service, personnel and external factors.</font>
<td>
</tr>
 <tr>
<td><img src="serviceslogo2.jpg" alt="alttius.com"width="250" height="80">
</td>
<td> 	
<b>Testing Services</b>
<br>
<br>
<font face="Calibri (Body)"> Alttius offers quality consulting and testing services tailored to help the BFSI industry overcome challenges and constraints they face in adopting the latest technologies and dealing with legacy applications.</font>
</td>
</tr>
<tr>
<td><img src="serviceslogo3.jpg" alt="alttius.com"width="250" height="80">
</td>
<td><b>Products Consulting</b>
<br>
<br>
<font face="Calibri (Body)"> The Product Consulting service offering from Alttius springs forth from our combined acumen spanning the solution and service domains across diverse industry verticals. A fine blend of innovative approaches to the ERP space, vast experience in custom implementations and deep insights into various business scenarios has been instrumental in shaping our Product Consulting practice.</font>
</td>
</tr>
<tr>
<td><img src="serviceslogo4.jpg" alt="alttius.com"width="250" height="80">
</td>
<td><b>Development Outsourcing (Onsite/Offsite)</b>
<br>
<br>
<font face="Calibri (Body)"> In line with our approach to the custom-built IT solution space, we have kept our options open. What this means is that we will find a solution that fits your business and definitely not the other way around.</font>
</td>
</tr>
</font>
</font>
</div>



<!--<h2>Recently uploaded pictures</h2><--


  <!-- <?php thumbnail_pic_list($pictures); ?><--


<?php our_footer(); ?>



