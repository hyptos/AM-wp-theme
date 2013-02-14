			
			<footer class="footer" role="contentinfo">
			<div id="green-separation"></div>
				<div id="inner-footer" class="container">
					<div class="row">
			        <div class="span3">
			          <h2>Links</h2>
			          <ul>
			          	<li><a href="#">something</a></li>
			          	<li>Something</li>
			          	<li>Something</li>
			          </ul>
			          <p><a class="btn" href="#">View details »</a></p>
			        </div>
			        <div class="span3">
			          <h2>Social</h2>
			          <ul>
			          	<li>Twitter</li>
			          	<li>Facebook</li>
			          	<li>Github</li>
			          </ul>
			          <p><a class="btn" href="#">View details »</a></p>
			       </div>
			        <div class="span3">
			          <h2>Contact</h2>
			          <ul>
			          	<li>Something</li>
			          	<li>Something</li>
			          	<li>Something</li>
			          </ul>
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