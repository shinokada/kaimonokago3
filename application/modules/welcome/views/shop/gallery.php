<?php if($galleryname=="bootstrap-image-gallery"): ?>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
  <!-- The container for the modal slides -->
  <div class="slides"></div>
  <!-- Controls for the borderless lightbox -->
  <h3 class="title"></h3>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
  <!-- The modal dialog, which will be used to wrap the lightbox content -->
  <div class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body next"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
            Previous
          </button>
          <button type="button" class="btn btn-primary next">
            Next
            <i class="glyphicon glyphicon-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'inc/gallerypart'); ?>


<?php elseif($galleryname =="photobox"): ?>

<!--[if lt IE 9]><link rel="stylesheet" href="assets/css/photobox.ie.css"><![endif]-->

<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'inc/gallerypart'); ?>


<?php elseif($galleryname =="blueimp"): ?>
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'inc/gallerypart'); ?>

<?php else: ?>

<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'inc/gallerypart'); ?>

<?php endif; ?>

<?php
$base=$this->config->item('base_url');
$mystring = $base;
$findme   = 'localhost';
$pos = strpos($mystring, $findme);
if(ENVIRONMENT=='development' OR $pos)
{
echo "<pre>";
  echo "path: ";
  print_r ($path);
  echo "<br>";
  if(isset($galleryimages))
  {
    echo "galleryimages: ";
    print_r ($galleryimages);
  }
  echo "<br>";
  print_r ($this->data['navlist']);
  print_r($galleryname);
  echo "<br>thumbnail";
  /* print_r($thumbnail); */
  /* echo "<br>imageinfo"; */
  /* print_r($imageinfo); */
  echo "<br>imagelink";
  /* print_r($imagelink); */
  echo "</pre>";
}
?>
