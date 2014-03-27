<div id="links">
application/modules/welcome/views/shop/inc/gallerypart.php

<?php

  foreach ($galleryimages as $image)
  {
  $imageinfo = $image['image'];
  $thumbnail=convert_image_path($imageinfo);
  $imagelink=base_url().$thumbnail;
  echo '<a href="' .$imagelink. '" title="'.$image['shortdesc'].'" data-gallery>';
    echo "<img src='".$imagelink."' width='125' height='115'>";
    echo "\n</a>\n";
  }

  ?>
</div>
