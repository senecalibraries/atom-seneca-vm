<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<?php echo get_component_slot('header') ?>

<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAuthenticated()): ?>
  <div id="top-bar">
    <nav>
      <?php echo get_component('menu', 'userMenu') ?>
      <?php echo get_component('menu', 'quickLinksMenu') ?>
      <?php echo get_component('menu', 'changeLanguageMenu') ?>
      <?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
    </nav>
  </div>
<?php endif; ?>

<div id="header">

  <div class="container">

    <div id="header-lvl1">
      <div class="row">
        <div class="span12">

          <ul id="header-nav" class="nav nav-pills">

            <li><?php echo link_to(__('Home'), 'http://10.10.10.10/') ?></li> 
            <li><?php echo link_to(__('About Our Holdings'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
            <li><?php echo link_to(__('Services'), array('module' => 'staticpage', 'slug' => 'services')) ?></li>
            <li><?php echo link_to(__('News & Events'), array('module' => 'staticpage', 'slug' => 'news')) ?></li>
            <li><?php echo link_to(__('Contact Us'), array('module' => 'staticpage', 'slug' => 'contact')) ?></li>

            <?php if (!$sf_user->isAuthenticated()): ?>
              <li><?php echo link_to(__('Log in'), array('module' => 'user', 'action' => 'login')) ?></li>
            <?php endif; ?>

          </ul>

        </div>
      </div>
    </div>

    <div id="header-lvl2">
      <div class="row">

        <div id="logo-and-name" class="span12">
            <h1><?php echo link_to(image_tag('/plugins/arSenecaACPlugin/images/logo.png', array('alt' => __('Seneca Archives'))), 'http://www.senecacollege.ca', array('rel' => 'home')) ?></h1>
        </div>
      </div>
   </div>
 

</div>

 <div id="header-lvl3">
      <div class="row">
        <div id="header-search" class="span12">
          <?php echo get_component('search', 'box') ?>
        </div>
      </div>
   </div>

   <div id="header-lvl4">
       <div class="row">
    </div>

    
</div>
