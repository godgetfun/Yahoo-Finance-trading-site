<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
		<link href="/css/css.css" rel="stylesheet"/>
		<link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" media="screen" />
		<link href="/css/csss.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Finance</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
		<script>
function showHint(str)
{
if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
} else {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","gethint.php?q="+str,true);
    xmlhttp.send();
}    
}
</script>
    </head>

    <body>
	
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="float:right;margin-top:20px;margin-right:20px;">About</span></button>
<!-- Modal -->
		<div id="myModal2" class="modal1 fade" role="dialog">
  <div class="modal1-dialog">

    <!-- modal1 content-->
    <div class="modal1-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Download Documentations</h4>
      </div>
      <div class="modal-body">
		<div id="hello">
			<h1 style=text-align:center;> Nakshatra Maheshwari - Portfolio</h1>
			<img src="RIT2012074.jpg" height="300" style=position:relative;/>
			<h3><li>I am currently a 6th semester under graduate of <strong>Indian Intitute of Information Technology, Allahabad</strong></h3>
			<h3><li>I recently pursued <a href="http://www.cs50.net">CS50x </a>certification : Introduction to Computer Science from <font color="red">Harvard University</font></h3>
			<h3><li>I also completed <a href="http://www.cs75.net">CS75 </a>: Building Dynamic Websites from <font color="red">Harvard University</font></h3>
			<h3><li>I have been awarded with Certificate of Honour from <font color="blue">MIT University</font> for 6.00.1x Programming in Python</h3>
			<h3><li>I was awarded with MEC Proficiency Certificate for my performance in Computer Networks by Microsoft &nbsp;&nbsp;&nbsp;Research, India in March 2015</h3>
			<h3><li>I secured rank of 102 in <strong>ACM-ICPC</strong> Online Round and appeared for On-site round at Amritapuri </h3>
			<h3><li>Currently I am Consultant at <strong>IIITA-INDEM</strong>, Secretary of <strong>Gymkhana</strong>, and Firefox Student Ambassador</h3>
			<br>
			<h3>I am very curious and passionate towards contributing or become part of research in some technology which is unknown till date or is upcoming one. Analyzing and making decisions in technical difficulties, aiming and marking the path to the problems are my strengths.I agree that i currently have no idea that what type of company should i join but i know that if i am enjoying some work, then i can do it with perfection.
		Regarding studies, Networking is always my strength and Coding is more than fun to me.I have always tried to learn Computer Science as one subject rather than focusing only on Coding as most of the coders do.
			</h3>
			<h3>My CGPA: 8.57</h3>
			<h3>DOB: 11/11/1993</h3>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" style="float:right;margin-top:60px;margin-right:20px;">Slide-Show</button>

<!-- Modal -->
		<div id="myModal3" class="modal fade" role="dialog">
		  <div class="modal1-dialog">

			<!-- Modal content-->
			<div class="modal1-content">
			  <div class="modal1-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h1 class="modal1-title">Slide-Show</h1>
			  </div>
			  <div class="modal1-body">
								<div class="top">
						<div class="top_top"></div>
						<div class="top_img">
						
						   <div id="slider-wrapper">        
							<div id="slider" class="nivoSlider">
								<img src="/images/bbb.jpg" alt="" />
								<img src="/images/2222.jpg" alt=""/>
								<img src="images/3333.jpg" alt="" />
								<img src="/images/4444.jpg" alt="" />
							</div>        
						</div>

				<script type="text/javascript" src="/js/jquery-1.4.3.min.js"></script>
					<script type="text/javascript" src="/js/jquery.nivo.slider.pack.js"></script>
					<script type="text/javascript">
					$(window).load(function() {
						$('#slider').nivoSlider();
					});
					</script>
						
						</div>
						<div class="top_bot"></div>
					</div>
				</table>
			  </div>
			  
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
        <div class="container">
		
            <div id="top">
			
                <a href="/"><img alt="Finance" src="/img/logo.gif"/></a>
				<a href="/"><center><img alt="Finance" src="/img/logo.png"/></center></a>
				
            </div>
			<!---div >
                <a href="/"><img alt="Finance" src="/img/logo.png"/></a>
            </div-->
            

            <div id="middle">
			<?php
			if(isset($_SESSION["id"]))
				echo "<table class='table table-striped'>
				<tbody>
					<tr>
						<td><a href='index.php' class='btn btn-default'>HOME</a></td>
						<td><a href='buy.php' class='btn btn-danger'>BUY</a></td>
						<td><a href='sell.php' class='btn btn-success'>SELL</a></td>
						<td><a href='history.php' class='btn btn-primary'>HISTORY</a></td>
						<td><a href='quote.php' class='btn btn-warning'>QUOTE</a></td>
						<td><a href='list_quote.php' class='btn btn-info'>LIST QUOTE</a></td>
						<td><a href='passwd.php' class='btn btn-success'>CHANGE PASSWORD</a></td>
						<td><a href='logout.php' class='btn btn-danger'>LOGOUT</a></td>
					</tr>
				</tbody>
			</table>";
			?>
