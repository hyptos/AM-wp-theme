<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="container">
			
				    <div id="main" class="" role="main">
				    	<br />
				    	<div class="row" id="about">
				    		<div class="span1"><img src="wp-content/themes/AM-wp-theme-master/library/img/me.PNG" alt="teuteu" class="img-polaroid"></div>
				    		<div class="span8"><blockquote><p>Hi, I'm Antoine Martin and I'm a <span id="title">web Developer<span> in Lyon - France. I like designing web application mostly in PHP ! Take a look at some of my recent work :)</p></blockquote></div>
				    	</div>
				    	
				   <div id="services" class="row">
				   	<div class="span12">
				   		<h2>Services</h2>
				   	</div>
			        <div class="span3">
			          <h2>Heading</h2>
			          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			          <p><a class="btn" href="#">View details »</a></p>
			        </div>
			        <div class="span3">
			          <h2>Heading</h2>
			          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			          <p><a class="btn" href="#">View details »</a></p>
			       </div>
			        <div class="span3">
			          <h2>Heading</h2>
			          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			          <p><a class="btn" href="#">View details »</a></p>
			        </div>
			      </div>		
			      
			      <div id="work" class="row">
			      	<div class="span12">
				   		<h2>Recent Work</h2>
				   	</div>
			        <div class="span3">
			          <h2>Heading</h2>
			          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			          <p><a class="btn" href="#">View details »</a></p>
			        </div>
			        <div class="span3">
			          <h2>Heading</h2>
			          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			          <p><a class="btn" href="#">View details »</a></p>
			       </div>
			        <div class="span3">
			          <h2>Heading</h2>
			          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			          <p><a class="btn" href="#">View details »</a></p>
			        </div>
			      </div>
			      <div class="row">	
			      	<div class="span12">
				   		<h2>Blog</h2>
				   	</div>
				  </div>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							
							    <p class="meta"><?php _e('Posted', 'bonestheme'); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <?php _e('by', 'bonestheme'); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>.</p>
						
						    </header> <!-- end article header -->
					
						    <section class="post-content clearfix">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">

    							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

						    </footer> <!-- end article footer -->
						    
						    <?php // comments_template(); // uncomment if you want to use them ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { // if experimental feature is active ?>
						
						        <?php bones_page_navi(); // use the page navi function ?>
						
					        <?php } else { // if it is disabled, display regular wp prev & next links ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', 'bonestheme')) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', 'bonestheme')) ?></li>
							        </ul>
						        </nav>
					        <?php } ?>		
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="post-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->			

<?php get_footer(); ?>
