<nav class="navbar navbar-default" style="background-color:  #337ab7;">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	</div>
	<div id="navbar" class="collapse navbar-collapse" >
	  <?php if(!empty($_SESSION["userid"])) { ?>
	  <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="#" style="background-color: #337ab7;"> <Strong style="color: White;">WELCOME, <?php echo $_SESSION["name"]; ?></Strong></a></li>
		<li><a href="logout.php">Logout</a></li>          
	  </ul>
	  <?php } ?>
	</div>
  </div>
</nav>
