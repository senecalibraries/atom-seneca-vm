<footer>

  <?php if (QubitAcl::check('userInterface', 'translate')): ?>
    <?php echo get_component('sfTranslatePlugin', 'translate') ?>
  <?php endif; ?>

  <?php echo get_component_slot('footer') ?>

  <div id="print-date">
    <?php echo __('Printed: %d%', array('%d%' => date('Y-m-d'))) ?>
  </div>

</footer>

<?php if (null !== $gaKey = sfConfig::get('app_google_analytics_api_key')): ?>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '<?php echo $gaKey ?>']);
    _gaq.push(['_trackPageview']);
    <?php include_slot('google_analytics') ?>
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
<?php endif; ?>

  <!-- BEGIN footer -->
  <div class="wrapper">
    <div class="container main-column">
      <footer id="footer">&copy; 2016 <a href="http://library.senecacollege.ca/">Seneca Libraries</a>. All Rights Reserved. 

      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86824720-1', 'auto');
  ga('send', 'pageview');

      </script>

      </footer>

    </div>
    </div>


    <!-- END footer -->

