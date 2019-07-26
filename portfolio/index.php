<?php get_header(); ?>

<section class="about" id="about">
<!-- 	<h2>About Me</h2>
	<p>
		<span>Hello, I'm Peter Mwita<br></span>I'm a Designer and Developer, life long learner, and ready for new opportunities.A bit about me, I love music,arts and all things creative
	</p>
	<p>
		I believe in user centered design and delivering the best possible experiences to people.I have experience with Html,css,Bootstrap,Flexbox,Javascript,JQuery,Ruby and Rails,Figma and Photoshop as well.
	</p>
	<h3>My Skills</h3>
	<p>Figma</p>
	<div class="container">
		<div class="skills figma">95%</div>
	</div>

	<p>Html 5</p>
	<div class="container">
		<div class="skills html">90%</div>
	</div>

	<p>CSS 3</p>
	<div class="container">
		<div class="skills css">85%</div>
	</div>

	<p>Javascript</p>
	<div class="container">
		<div class="skills js">80%</div>
	</div>

	<p>Jquery</p>
	<div class="container">
		<div class="skills php">75%</div>
	</div>
</section>
<section class="portfolio" id="portfolio">
	<h2>Portfolio</h2>
	<div class="row-halves">
		<div class="col">
		<img src="images/b1.jpg" alt="">
		<h3>Business</h3>
		<p>Building Responsive and thoughtful websites for small and large businesses</p>
	</div>

	<div class="col">
		<img src="images/b7.jpg" alt="">
		<h3>Mobile</h3>
		<p>Fully Responsive, mobile ready designs and implementation for all</p>
	</div>
</div>
<div class="row-halves">
		<div class="col">
		<img src="images/b.jpg" alt="">
		<h3>UX Design</h3>
		<p>Thoughtful and intuitive user experiences.All of my designs will be guaranteed to wow your clients</p>
	</div>

	<div class="col">
		<img src="images/b9.jpg" alt="">
		<h3>Personal</h3>
		<p>I also design and build for personal projects.No Idea is too small and everyone deserves a voice on the Web.</p>
	</div>

</div>
</section>
<section class="contact" id="contact">
	<h2>Contact</h2>
	<div class="container">
		<form action="">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">
			<label for="email">Email</label>
			<input type="text" id="email" name="email">
			<label for="name">Message</label>
			<textarea name="message" id="message" style="height: 200px"></textarea>
			<input type="submit" value="message">
		</form>
	</div> -->

<?php if( have_posts() ) : ?>
<?php while ( have posts() ) : the post(); ?>
	<div id="post-<?php the ID(); ?>" <?php post_class(); ?>>
		<div class="post-header">
		<div class="date"><?php the time ('M j y'); ?></div>
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>">
			<?php the title(); ?></a></h2>
		<div class="author"><?php the_author(); ?></div>
	</div> <!-- end post header -->
		<div class="entry clear">
			<?php if (function_exists('add_theme_support' )) the_post_thumbnail(); ?>
			<?php the content(); ?>
			<?php edit post link(); ?>
			<?php wp_link_pages(); ?> </div>
			<!-- end entry -->
			<div class="post-footer">
				<div class="comments"><?php comments_popup_link ('Leave a Comment', '1 Comment', '% Comments' ); ?></div>
			</div> <!-- end post footer -->
		</div> <!-- end post -->
	<?php endwhile; /* rewind or continue if all posts have been fetched*/ ?>
	<div class="navigation index">
		<div class="alignleft"><?php next posts link ('Older Entries'); ?></div>
		<div class="alignright"><?php previous_posts_link ('Newer Entries'); ?> </div>
	</div> <!-- end navigation -->
	<?php else : ?>
	<?php endif; ?>

</section>

<?php get_footer(); ?>
