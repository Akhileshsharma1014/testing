</div><br><br>
	
	<footer class="col-md-12 text-center" id="footer">&copy; Copyright 2015-2018 Sharma's Shop</footer>
<!-- modal details -->

	
<script>
	jQuery(window).scroll(function(){
	  var vscroll = jQuery(this).scrollTop();
	  jQuery('#logotext').css({
		  "transform" : "translate(0px, "+vscroll/2.8+"px)"
	  });
	  
	  var vscroll = jQuery(this).scrollTop();
	  jQuery('#back-flower').css({
		  "transform" : "translate(0px, -"+vscroll/1+"px)"
	  });
	  
	  var vscroll = jQuery(this).scrollTop();
	  jQuery('#fore-flower').css({
		  "transform" : "translate(0px, -"+vscroll/1+"px)"
	  });
	});
	
	function detailsmodal(id){
		var data = {"id" : id};
		jQuery.ajax({
			url : '/shop/includes/detailsmodal.php',
			method : "post",
			data : data,
			success : function(data){
				jQuery('body').append(data);
				jQuery('#details-modal').modal('toggle');
			},
			error: function(){
				alert("Something went wrong!");
			}
		});
	}
</script>
</body>
</html>