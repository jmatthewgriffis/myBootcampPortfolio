<?php include("frame_top.php"); ?>
<?php include("frame_header.php"); ?>
<?php include("frame_nav.php"); ?>
<?php include("frame_sidebar.php"); ?>
 
<div class="content">
  <div id="music">
      
    <header class="pagespec">
     <img src="images/music.png" alt="music" /><h2>Music</h2>
    </header>

	<section><!--put pieces here-->
		<article class="music"><!--individual piece-->
			<section class="work">
				<audio controls="controls">
					<source src="downloads/platformal_ware.wav" type="audio/wav" />
					Your browser does not support the audio element.
				</audio>
			</section>
			<section class="desc">
				<h3>Platformal Ware (December 2011)</h3>
				<p>This is the soundtrack to a game demo (<a href="games.php">available here</a>) I created as 
				part of my application to Parsons The New School for Design. I composed, performed and recorded 
				the music myself using a Casio electronic keyboard, a drum, an external mic, and a laptop.</p>
			</section>
		</article>
	</section>

  </div><!--end music-->
</div><!--end content-->

<?php include("frame_bottom.php"); ?>