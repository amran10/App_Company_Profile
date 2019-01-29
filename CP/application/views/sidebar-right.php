<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Right Sidebar | Initio - Free, multipurpose html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/gt_favicon.png') ?>">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">

	<!--[if lt IE 9]> <script src="<?php echo base_url('assets/js/html5shiv.js') ?>"></script> <![endif]-->
</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="title">Anthony Russel</span>
			<span class="tagline">A mystery person<br>
				<a href="">anthony.russel42@example.com</a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url() ?>index.php/wjberanda">Home</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_about">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url() ?>index.php/c_sidebarleft">Left Sidebar</a></li>
							<li><a href="<?php echo base_url() ?>index.php/c_sidebarright">Right Sidebar</a></li>
							<li><a href="<?php echo base_url() ?>index.php/c_single">Blog Post</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url() ?>index.php/c_blog">Blog</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">

		<div class="row topspace">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Lorem ipsum dolor sit amet, consectetur.</h1>
				</header>

				<p><img src="<?php echo base_url('assets/images/s2.jpg') ?>" alt=""></p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
				<h3>Necessitatibus</h3>
				<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
				<blockquote>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</blockquote>
				<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus!</li>
					<li>Laboriosam, aliquam totam asperiores nam velit voluptatum non quidem.</li>
					<li>Voluptatem, libero quia voluptatum ab modi facere dolore assumenda?</li>
					<li>Expedita, officia tenetur doloremque nulla temporibus ab voluptates adipisci.</li>
					<li>Nostrum, nesciunt, inventore amet temporibus officia perferendis doloremque nulla.</li>
					<li>Dolorum, ex earum maiores perspiciatis modi sequi odit mollitia.</li>
				</ul>
				
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">

				<div class="widget">
					<h4>Lorem ipsum dolor sit</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
				</div>
				<div class="widget">
					<h4>Lorem ipsum dolor sit</h4>
					<ul>
						<li><a href="">Lorem ipsum </a>dolor sit amet.</li>
						<li>Nostrum, dolores labore tempore error.</li>
						<li>Qui esse impedit vitae repellat.</li>
						<li>Aliquam, laborum corporis molestiae nihil.</li>
						<li>Voluptate, labore non adipisci nihil!</li>
					</ul>
				</div>
				
			</aside>			
			<!-- /Sidebar -->
			
		</div>
	</div>	<!-- /container -->
	
</main>


<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+62878-0239-0549<br>
						<a href="mailto:#">amranhakimsiregar@gmail.com</a><br>
						<br>
						Sarijadi Street, Bandung City, TN 37015
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href="http://www.twitter.com/muh_amran1" target="_blank"><i class="fa fa-twitter fa-2"></i></a>
						<a href="http://www.instagram.com/amranhakim_" target="_blank"><i class="fa fa-instagram fa-2"></i></a>
						<a href="http://www.github.com/amran10" target="_blank"><i class="fa fa-github fa-2"></i></a>
						<a href="http://www.facebook.com/muhammad_amran" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Text widget</h3>
				<div class="widget-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
				</div>
			</div>

			<?php echo form_open_multipart(site_url('c_sidebarright/input_komentar')); ?>
				<div class="col-md-3 widget">
					<h3 class="widget-title">Comment</h3>
					<div style="width:80%; padding-top : 2px;" align="center">
						<div align="left">
							<input id="nama" name="nama" type="text" value="" placeholder="Name *" class="form-control" />
						</div>
					</div>
					<div style="width:80%; padding-top : 2px;" align="center">
						<div align="left">
							<input id="email" name="email" type="text" value="" placeholder="Email *" class="form-control" />
						</div>
					</div>
					<div style="width:80%; padding-top : 2px;" align="center">
						<div align="left">
							<textarea id="komentar" name="komentar" type="text" value="" placeholder="Fill in Your Comment" class="form-control" /></textarea>
						</div>
					</div>
					<div>
						<button class="btn btn-primary btn-round" type="submit" name="submit">Send</button>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<!-- <p>Algoritma Heuristic Miner</p> -->
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2019, Muhammad Amran<br></p> 
						<!-- Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a>  -->
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/template.js') ?>"></script>
</body>
</html>
