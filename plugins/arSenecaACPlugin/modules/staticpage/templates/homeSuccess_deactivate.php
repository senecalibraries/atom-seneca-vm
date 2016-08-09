<div id="homepage-hero" class="row">

  <?php $cacheKey = 'homepage-nav-'.$sf_user->getCulture() ?>
  <?php if (!cache($cacheKey)): ?>
    <div class="span8" id="homepage-nav">
      <p><?php echo __('Browse by') ?></p>
      <ul>
        <?php $icons = array(
          'browseInformationObjects' => '/images/icons-large/icon-archival.png',
          'browseDigitalObjects' => '/images/icons-large/icon-media.png'
          'browseActors' => '/images/icons-large/icon-people.png',
          'browseSubjects' => '/images/icons-large/icon-subjects.png',
          'browsePlaces' => '/images/icons-large/icon-places.png') ?>
        <?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID) ?>
        <?php if ($browseMenu->hasChildren()): ?>
          <?php foreach ($browseMenu->getChildren() as $item): ?>
            <li>
              <a href="<?php echo url_for($item->getPath(array('getUrl' => true, 'resolveAlias' => true))) ?>">
                <?php if (isset($icons[$item->name])): ?>
                  <?php echo image_tag($icons[$item->name], array('width' => 42, 'height' => 42, 'alt' => '')) ?>
                <?php endif; ?>
                <?php echo esc_specialchars($item->getLabel(array('cultureFallback' => true))) ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
    <?php cache_save($cacheKey) ?>
  <?php endif; ?>

  <div class="span3" id="intro">
      <h2>
        <span class="title">Welcome to Seneca College Archives</span>
        
      </h2>

      <p>Seneca College Archives is a division of Seneca Libraries.</p>

      <p>The Archives identifies, preserves, and makes available for use the documentary heritage of Seneca College of Applied Arts and Technology. </p>

      <p>We collect inactive records of long-term historical value produced by the departments and faculties of Seneca College, as well as the records of individuals and organizations closely associated with the College.</p> 

      <p>Records in our collection include textual records, moving image records, graphic records, architectural drawings, publications, objects, and more.</p>

      <p>Our resources are open to all members of the College community and the public for the purposes of research, teaching, publication, television and radio programmes, and general interest.</p>

      <p>This AtoM page provides digital access to the holdings of the Archives. Although most of our collections are described on this page, some collections may not yet be. For additional information records not fully described on this page, please contact the archivist.</p> 

  </div>

</div>

<div id="homepage" class="row">

  <div class="span3">
    <?php echo get_component('default', 'popular', array('limit' => 10, 'sf_cache_key' => $sf_user->getCulture())) ?>
  </div>

</div>
