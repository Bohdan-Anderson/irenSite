<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title></title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<script type="text/javascript">
	var rootFileLocation = "<?php bloginfo('template_directory'); ?>";
	</script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>

	<!-- ligth box stuff -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightbox.js"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/lightbox.css" type="text/css" media="screen" />




</head>
<body>
<div id="nav">
	<div id="expand"> + </div>
	<div id="navContent">
		<ul>
			<li><a id="galleryButton">Gallery</a></li>
			<li><a id="artistStatmentButton">Artist Statment</a></li>
			<li><a id="sculture" id="sculture">Sculture</a>
				<ul>
					<li><a id="shows">Shows & Exhibitions</a></li>
					<li><a id="awardsLink"> Awards</a></li>
					<li><a id="privateCollectionLink">Private Collection</a></li>
					<li><a id="edAndPro">Education & Professional Affiliations</a></li>
				</ul>
			</li>
			<li><a id="contactButton">Contact</a></li>
		</ul>

	</div>
</div>



<div id="splash" class="container">
	<div id="splashPad"></div>
	<div id="center" style="margin-top:50px;">
		<img src="<?php bloginfo('template_directory'); ?>/img/SlopesSmall.png">
	</div>
	<div id="center" style="margin-top:-75px;">
		<img src="<?php bloginfo('template_directory'); ?>/img/white-01.png" height="300px" width="auto">
	</div>
	<div id="splashContent">
		<a id="continue">Continue</a>
	</div>
	<div id="splashPad"></div>

</div>
<div id="gallery" class="container">
	<div id="galleryNav">
		<span>Option one</span>
		<span>Option two</span>
		<span>Option three</span>
	</div>
	<div id="gallerContent">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="piece" >
					<a href="<?php if ( has_post_thumbnail() ) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
							echo $large_image_url[0];
						}?>" rel="lightbox[gallery]" title="<?php the_title(); ?> <br>

						<?php
							$posttags = get_the_tags();
							if ($posttags) {
								echo "Medium: ";
								foreach($posttags as $tag) {
									//if ($tag !== end($posttags)){
										if(count($posttags) <2){
											echo $tag->name . ' ';
										}elseif($tag === end($posttags)){
											echo $tag->name . ' ';
										} else {
											echo $tag->name . ' & ';
										}
									//}
								}
							}
						?>

						<br>
						<?php
							$custom_fields = get_post_custom();
							$my_custom_field = $custom_fields['my_meta_box_check'];
							foreach ( $my_custom_field as $key => $value )
								if ($value == "on") {
									echo "sold";
								} else {

								}
						?>">
					<div id="imageContainer">
						<img src="
						<?php if ( has_post_thumbnail() ) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
							echo $large_image_url[0];
						}?>">
					</div>
					<div id="explination">
						<span id="name"><?php the_title(); ?></span>
						<br>
						<span id="sold">
							<?php
								$custom_fields = get_post_custom();
								$my_custom_field = $custom_fields['my_meta_box_check'];
								foreach ( $my_custom_field as $key => $value )
									if ($value == "on") {
										echo "sold";
									} else {

									}
							?>
						</span>
					</div>
				</a>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	<div id="clear"></div>
	</div>
	<div id="gellerContentDynamic"></div>
</div>
<div id="artistStatment" class="container">
	<div id="artistStatmentContent">
		<div id="conTitle">
			<h2>Artist Statment</h2>
		</div>
		<div id="article">
			<img class="alignright size-full wp-image-20" style="float: right;" alt="photo" src="<?php bloginfo('template_directory'); ?>/img/portrait.png" width="118" height="159" />
			<p>The basis for my creativity in stone can be summarized as FEEL, FLOW &amp; FORM.  Focusing on the abstract allows my creativity to find its own end. When working with stone, I am constantly feeling the curves and lines I am creating. Feeling the stone then dictates what follows next. The continuous flow of the work is critical. In the end, the form is pleasing to the eye and flows as a whole.<br />
			I sculpt mainly in soapstone, alabaster and limestone. Since I use hand tools almost exclusively, I develop my sculptures slowly and allow the direction to reveal itself. My style is to create sculptures that are simple.</p>
		</div>
	</div>
</div>


<div id="sculptor" class="container">
	<div id="aboutContent">
		<div id="conTitle">
			<h2>Shows & Exhibitions</h2>
		</div>
		<ul>
			<li><h3>2009</h3>
			<table border="0" cellspacing="0">
				<tr>
					<td>Open Juried Show</td>
					<td>Beaux-Arts Brampton</td>
				</tr>
				<tr>
					<td>Open Mind – 135th Annual Open Juried Show</td>
					<td>Ontario Society of Artists</td>
				</tr>
				<tr>
					<td>Open Juried Show for Students</td>
					<td>Metallic Art Society of Canada</td>
				</tr>
				<tr>
					<td>57th Annual Open Juried Exhibition</td>
					<td>Colour & Form Society</td>
				</tr>
				</table>
			</li>
			<li><h3>2010</h3>
			<table border="0" cellspacing="0">
				<tr>
					<td>Open Juried Show</td>
					<td>Beaux-Arts Brampton</td>
				</tr>
				<tr>
					<td>11th Annual Juried Show</td>
					<td>Artworks Oakville</td>
				</tr>
				<tr>
					<td>Biennial Open Juried Exhibition</td>
					<td>Colour & Form Society</td>
				</tr>
				<tr>
					<td>Expressions in Art Show</td>
					<td>St. Vladimir</td>
				</tr>
				<tr>
					<td>Christmas Show</td>
					<td>Ukrainian Canadian Art</td>
				</tr>
			</table>
			</li>
			<li><h3>2011</h3>
			<table border="0" cellspacing="0">
				<tr>
					<td>Our Summer Show</td>
					<td>with L. Ireland & H. Klaassen</td>
				</tr>
				<tr>
					<td>Fall Art Exhibition</td>
					<td>Ukrainian Association of Visual Artists of Canada</td>
				</tr>
				<tr>
					<td>Expressions in Art Show</td>
					<td>St. Vladimir</td>
				</tr>
				<tr>
					<td>Christmas Show</td>
					<td>Ukrainian Canadian Art</td>
				</tr>
			</table>
			</li>
			<li><h3>2012</h3>
			<table border="0" cellspacing="0">
				<tr>
					<td>34th Annual Juried Show of Fine Arts</td>
					<td>Visual Arts Mississauga</td>
				</tr>
				<tr>
					<td>139th Annual Open Juried Exhibition</td>
					<td>Ontario Society of Artists</td>
				</tr>
				<tr>
					<td>Open Juried Show 2012</td>
					<td>Beaux-Arts Brampton</td>
				</tr>
				<tr>
					<td>CFS Biennial Art Exhibition</td>
					<td>Colour and Form Society</td>
				</tr>
				<tr>
					<td>Invitational Art Show</td>
					<td>World Federation of Ukrainian</td>
				</tr>
				<tr>
					<td>Fall Art Exhibition</td>
					<td>Ukrainian Association of Visual Artists of Canada</td>
				</tr>
				<tr>
					<td>Expressions in Art Show</td>
					<td>St.Vladimir</td>
				</tr>
				<tr>
					<td>Christmas Show</td>
					<td>Ukrainian Canadian Art Foundation</td>
				</tr>
			</table>
			</li>
			<li><h3>2013</h3>
			<table border="0" cellspacing="0">
				<tr>
					<td>Annual Art Show & Sale</td>
					<td>Kingway Lambton United Church</td>
				</tr>
			</table>
			</li>
		</ul>
	</div>
</div>

<div id="awards" class="container">
	<div id="conTitle">
		<h2>Awards</h2>
	</div>
	<ul>
		<li>Show Sculpture Award</li>
		<li>Biennial Open Juried Exhibition	Colour & Form Society</li>
	</ul>
</div>

<div id="privateCollection" class="container">
	<div id="privateCollectionContent">
		<div id="conTitle">
		<h2>Private Collection</h2>
		</div>
		<ul>
			<li>
				<table border="0">
					<tr>
						<td>'Shades of Green</td>
						<td>Private Collection</td>
					</tr>
					<tr>
						<td>Soapstone Sculpture</td>
					</tr>
					<tr>
						<td style="color:#000">a</td>
					</tr>
				</table>
			</li>
			<li>
				<table border="0">
					<tr>
						<td>'The Crest'</td>
						<td>Private Collection</td>
					</tr>
					<tr>
						<td>Soapstone Sculpture</td>
					</tr>
				</table>
			</li>
		</ul>
	</div>
</div>

<div id="edAndAffil" class="container">
	<div id="conTitle">
		<h2>Education</h2>
	</div>
	<ul>
		<li>Wilfrid Laurier University</li>
		<li>Haliburton School of Arts</li>
		<li>Toronto School of Art</li>
		<li>Private Studies</li>
	</ul>

	<div id="conTitle">
		<h2>Professional Affiliations</h2>
	</div>
	<ul>Ukrainian Association of Visual Artists of Canada</ul>
</div>

<div id="contact" class="container">
	<div id="contactPadding"></div>
	<h2 id="specialH2">Contact</h2>
	for inquires call or email:
		<p>
			tel: 416-235-0455 <br>
			email: <a href="mailto:irene.sirko@gmail.com">irene.sirko@gmail.com</a>
		</p>
	<div id="contactPadding"></div>
</div>



<script type="text/javascript">

	addEvent("continue","gallery");
	addEvent("galleryButton","gallery");
	addEvent("artistStatmentButton","artistStatment");
	addEvent("sculture","sculptor")
	addEvent("shows","sculptor");
	addEvent("awardsLink","awards");
	addEvent("privateCollectionLink","privateCollection");
	addEvent("edAndPro","edAndAffil");
	addEvent("contactButton","contact");

	console.log($(document.getElementById("sculptor")).offset().top);

	function addEvent(to, go){
		document.getElementById(to).addEventListener('click', function(){scrollTo(go);});
	}

	function scrollTo(location){
		var top = $(document.getElementById(location)).offset().top;
		var body = $("body,html");
		$(body).animate({scrollTop : top},1000);
	}

	function changeContent(file){
		document.getElementById('gallerContent').style.display = "none";
		var articles = document.getElementById("gellerContentDynamic");
		articles.style.display = "block";
		$(articles).load(file);
	}

	function backToGallery(){
		document.getElementById('gallerContent').style.display = "block";
		document.getElementById("gellerContentDynamic").style.display = "none";
	}
</script>

</body>
</html>