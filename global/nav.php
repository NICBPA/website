 	<nav class="is-hidden">
		<div class="logo"><a href="index.php">
			<img src="_/img/indy-logo-ani.gif">
			<img src="_/img/indy-logo-ani.png">
			<img style="position: relative; opacity: 0; z-index: -20;" src="_/img/indy-logo-ani.png">
		</a></div>
		<ul>
			<!-- <li><em>choose a category...</em></li> -->
			<li><a class="color-red" href="historyofindy.php">History of Indy</a></li>
			<li><a class="color-green" href="memorials.php">Memorials</a></li>
			<li><a class="color-blue" href="artsandculture.php">Arts & Culture</a></li>
			<li><a class="color-orange" href="historicalsites.php">Historical Sites</a></li>
		</ul>
		<?php define("category", basename(dirname(__FILE__))); include 'global/footernav.html';?>
	</nav>
	

<div class="navbar-wrapper is-shown">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.php"><img src="_/img/indy-logo.png"></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
				<ul class="nav">
					<li><a class="color-red" href="historyofindy.php">History of Indy</a></li>
					<li><a class="color-green" href="memorials.php">Memorials</a></li>
					<li><a class="color-blue" href="artsandculture.php">Arts & Culture</a></li>
					<li><a class="color-orange" href="historicalsites.php">Historical Sites</a></li>
				</ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->

<div id="container">