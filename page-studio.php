<?php
/**
 * Template Name: Studio
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package verycoolstudio
 */

get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			</main><!--  .site-main -->
		</div><!--  #primary -->
	</div><!--  #content -->
</div><!--  #white-box -->
<div class="white-page">
	<img class="kyle-photo" src="<?php bloginfo('template_directory'); ?>/img/third-best-selfie-available-of-kyle.png"/>
	<img class="kyle-gif" src="<?php bloginfo('template_directory'); ?>/img/kyle-gif-square.gif"/>
	<div class="bio">
		<h1>Very Cool is the studio of no-award winning designer Kyle Wayne Benson</h1>
		<p>Kyle got started in 2008 as a web developer for Internet Enterprises. In 2015 he received a Type Design Certificate from Cooper Union. He formed Very Cool Studio in March 2017, 20 months after buying the domain.</p>
		<p>His type has been used by <a href="https://fontsinuse.com/uses/10127/apple-music-billboard-ad-berlin">Apple</a>, <a href="https://www.bluehost.com/">BlueHost</a>, <a href="https://www.qualtrics.com/">Qualtrics</a> and on posters in his mom's classroom. His best tweet has 57 “faves”, which is 5-10 times Kyle’s average number of “faves” per tweet.</p>
	</div>
</div>

<div class="gray-page">
	<h2>Projects</h2>
	<ul class="list-box">
		<li><a href="http://skl.sh/1CuoDpS">Skillshare: Designing a Display Face</a><span class="year">2015</span></li>
		<li><a href="http://www.oremisverycool.com/">Orem is Very Cool</a><span class="year">2016</span></li>
		<li><a href="http://passionately.kyleandclaire.com">The Passionately Project</a><span class="year">2013-2014</span></li>
		<li><a href="http://www.bensonsclass.com/">Mr. Benson's Class</a><span class="year">2012</span></li>
		<!-- Good job checking <li><a href="http://www.cupmunicate.com/">Cupmunicate</a><span class="year">2012</span></li> -->
	</ul>
	<h2>Online</h2>
	<ul class="list-box">
		<li><a href="https://instagram.com/verycoolstudio">Instagram</a></li>
		<li><a href="https://twitter.com/kylewaynebenson">Twitter</a></li>
		<li><a href="https://github.com/kylewaynebenson/Glyphs-Scripts">Github</a><span class="year">Glyphs Scripts</span></li>
		<li><a href="https://dribbble.com/kylewaynebenson">Dribbble</a></li>
	</ul>
	<h2>Interviews</h2>
	<ul class="list-box">
		<li><a href="https://dribbble.com/stories/2017/03/29/timeout-kyle-wayne-benson">Dribble Timeout</a><span class="year">2017</span></li>
		<li><a href="http://www.thebalance.cc/home/2014/21-kyle-claire-benson">The Balance Podcast</a><span class="year">2014</span></li>
		<li><a href="http://oneminutewith.com/kyle-wayne-benson">One Minute With</a><span class="year">2014</span></li>
	</ul>
</div>
<div class="yellow-page">
	<div class="friends-enemies">
		<h2>&#x2764;️ Friends &#x2764;</h2>
		<ul class="list-box">
			<li><a href="https://www.instagram.com/trevorchristensen/">Trevor Christensen</a><span class="year">PHOTO</span></li>
			<li><a href="https://fortfoundry.com/">Mattox Schuler</a><span class="year">TYPE</span></li>
			<li><a href="http://beeteeth.com/">Dan Christofferson</a><span class="year">ILLUSTRATION</span></li>
			<li><a href="http://i.imgur.com/FPxZ8WK.gifv">Dogs</a><span class="year">COOL</span></li>
			<li><a href="https://www.instagram.com/kendrickkidd/">Kendrick Kidd</a><span class="year">DESIGN</span></li>
			<li><a href="https://www.instagram.com/andrewcolinbeck/">Andrew Colin Beck</a><span class="year">ILLUSTRATION</span></li>
			<li>Carbonated Water<span class="year">YEAH</span></li>
			<li><a href="https://jonathanballdesign.com/">Jonathan Ball</a><span class="year">TYPE</span></li>
			<li>Soft Pretzels from Whole Foods<span class="year">UH HU</span></li>
		</ul>
	</div>
	<div class="friends-enemies">
		<h2>&#x1f480; Enemies &#x1f480;</h2>
		<ul class="list-box">
			<li>The California DMV<span class="year">PLACE</span></li>
			<li><a href="https://www.instagram.com/trevorchristensen/">Trevor Christensen</a><span class="year">PHOTO</span></li>
			<li>Dudes who love Batman<span class="year">THE WORST</span></li>
			<li>Poverty<span class="year">YET WORSE</span></li>
			<li><a href="http://www.continentaltype.co">Continental Type</a><span class="year">VILE</span></li>
			<li>Memes<span class="year">disrespectful</span></li>
		</ul>
	</div>
</div>

<?php
get_footer();
