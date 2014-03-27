<div id="links">

<?php

  foreach ($galleryimages as $image)
  {
  $imageinfo = $image['image'];
  $thumbnail=convert_image_path($imageinfo);
  $imagelink=base_url().$thumbnail;
  $colorbox ='colorbox';
  $pos = strpos($galleryname, $colorbox);
  if($pos !== false)
  {
    $class = "class='group1'";
    $datagallery="";
  }
  elseif($galleryname =="bootstrap-image-gallery")
  {
    $class ="";
    $datagallery = "data-gallery";
  }
  else
  {
    $class ="";
    $datagallery="";
  }

  echo '<a href="' .$imagelink. '" title="'.$image['shortdesc'].'"'.$class.' '.$datagallery.'>';
    echo "<img src='".$imagelink."' width='125' height='115'>";
    echo "\n</a>\n";
  }

  ?>
</div>

