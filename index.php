<?php include('header.php'); ?>
				
<section>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/01.jpg" alt="panier_legume">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/02.jpg" alt="image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>				

<div class="restos">
	<ul class="center-block">
		<li><img src="images/restaurant_lachimere_gf.jpg" alt="restaurant de lyon" class="img-circle"/></li>
		<li><img src="images/alatraboule4_gf.jpg" alt="restaurant Toulouse" class="img-circle"/></li>
	</ul>
</div>
</section>
<?php include('footer.php'); ?>

