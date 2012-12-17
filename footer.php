			
			<footer class="footer" role="contentinfo">
			<div id="green-separation"></div>
				<div id="inner-footer" class="container">
					<div class="row">
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
					
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
			<div id="credits" class="container">				
					<p class="attribution">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
			</div>
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script type="text/javascript">
		$(function() {  
	    var pull        = $('#pull');  
	        menu        = $('nav ul');  
	        menuHeight  = menu.height();  
	  
		    $(pull).on('click', function(e) {  
		        e.preventDefault();  
		        menu.slideToggle();  
		    });  
		});  
		$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 320 && menu.is(':hidden')) {  
        menu.removeAttr('style');  
    }  
});   
	</script>
	</body>

</html> <!-- end page. what a ride! -->