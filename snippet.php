add_action( 'oxygen_enqueue_frontend_scripts', 'load_scripts_in_frontend' );

function load_scripts_in_frontend() {
	
if ( ! is_admin() && ! defined( 'SHOW_CT_BUILDER' ) ) {
	
add_action( 'wp_head', function () { ?>
<script>console.log('Header Scripts Run')</script>
<?php } );
	
add_action( 'wp_footer', function () { ?>
<script>console.log('Footer Scripts Run')</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5f7850aef0e7167d0015d78b/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
</script>
<!--End of Tawk.to Script-->
<?php } );
	
}
	
}
