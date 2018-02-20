  <?php include("template-parts/common/site-footer.php"); ?>

  <script src="<?php echo get_stylesheet_directory_uri().'/js/manifest.js?v=1.0.9'; ?>"></script>
  <script src="<?php echo get_stylesheet_directory_uri().'/js/vendor.js?v=1.0.9'; ?>"></script>
  <script src="<?php echo get_stylesheet_directory_uri().'/js/scripts.js?v=1.0.9'; ?>"></script>

  <script>(function(d,s,id){if(!d.getElementById(id)){var js=d.createElement(s);js.id=id;js.async=true;js.src="//platform.houzz.com/js/widgets.js?"+(new Date().getTime());var ss=d.getElementsByTagName(s)[0];ss.parentNode.insertBefore(js,ss);}})(document,"script","houzzwidget-js");</script>

  <?php wp_footer(); ?>
</body>
</html>
