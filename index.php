﻿<?php

    include('main-header.html.php');
?>

         <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        
      <img src="images/shoeissuebanner.png" alt="Chania" >
    </div>

    

    <div class="item">
        
      <img src="images/banner8.jpg" alt="Flower" >
        </div>

    <div class="item">
        
      <img src="images/banner7.jpg" alt="Flower" >
        </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <br>
        <br>
        <br>
  <div class="container">
            
            <div class="welcome-text">
             <h4>If you have a pair of feet, you’re going to need at least one pair of shoes. From men to ladies and children to babies, there’s a shoe (or boot… or moccasin… or sneaker!) for everybody.The perfect pair can add instant “WOW” factor to any carefully crafted ensemble. </h4>
            
            <h4>It’s a proven fact that a woman can never have too many shoes. Though they may not admit it, men love shoes, too.
             Kids (and parents) will go nuts over our fun options for children. Light-up sneakers, sheepskin UGG boots, Sanuk flip-flops and baby booties are just a few of the shoe types we carry for kids of all ages – from infants to pre-teens and everyone in between</h4>
            
            <h4>At ShoeStop, we understand that the shoe won’t always fit. That is exactly why we work hard to provide first-class customer service, hassle-free returns, and free shipping BOTH ways!</h4>
            
                    </div></div> 
        

        <br>
        <br>
		
        <div class="container">
            <div class="col-md-4  well wow bounceInLeft animated" style="visibility:visible;animation-name: bounceInLeft;">
			<div class='thumbnail' style='height:300px;width:300px;margin:0 auto'>
                <div>
                     <a href="category.html.php?category=WOMEN" role="button" class="btn btn-default">WOMEN</a>
                </div>
			
                <div >
                    <img src="images/women.jpg" style="align: center" class="pull-bottom">
                </div>
			</div>
            </div>
            <div class="col-md-4  well wow bounceInLeft animated" style="visibility:visible;animation-name: bounceInLeft;">
			<div class='thumbnail' style='height:300px;width:300px;margin:0 auto'>
                <div>
                    <a href="category.html.php?category=MEN" role="button" class="btn btn-default">MEN</a>
                </div>
                <div>
                     <img src="images/men.jpg" class="pull-bottom">
                </div>
			</div>	
            </div>
            <div class="col-md-4  well wow bounceInLeft animated" style="visibility:visible;animation-name: bounceInLeft;">
			<div class='thumbnail' style='height:300px;width:300px;margin:0 auto'>
                <div>
                    <a href="category.html.php?category=KIDS" role="button" class="btn btn-default">KIDS</a>
                </div>
                <div>
                    <img src="images/kid.jpg" class="pull-bottom">
                </div>
			</div>
            </div>
        
        </div>
        
        
            <div class="container">
                <?php
	 include_once 'footer.php';
	 ?>
               
         
    </body>
</html>