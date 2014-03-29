<?php

if($this->preference->item('webshop_slideshow')=="jmpress")
{
  if(!empty($slides))
  {
    echo '<section id="jms-slideshow" class="jms-slideshow">'."\n";
    // find the image 
    $numimage = count($slides);
    $input = array(
      '', 
      'data-y="500" data-scale="0.4" data-rotate-x="30"', 
      'data-x="2000" data-z="3000" data-rotate="170"', 
      'data-x="3000"', 
      'data-x="4500" data-z="1000" data-rotate-y="45"'
    );
    $rand_keys = array_rand($input, $numimage);
    //echo $input[$rand_keys[0]] . "\n";
    //echo $input[$rand_keys[1]] . "\n";
    foreach ($slides as $slide)
    {
      $imageinfo = $slide['image'];
      $slideimg=convert_image_path($imageinfo);
      $data_order =  $slide['slide_order']-1;// array is 0,1,2 and so on
      $slide_order = $slide['slide_order'];
      $data_atr = $input[$rand_keys[$data_order]] . "\n";
      //$order = $slide_order - 1;
      echo '<div class="step" data-color="color-'.$slide_order.'" '.$data_atr.'>'."\n";
      // echo '<div class="step" data-color="color-">'."\n";
      echo '<div class="jms-content">'."\n";
      echo '<h3>'.$slide['shortdesc']. '</h3>'."\n";
      echo '<p>'.$slide['longdesc']. '</p>'."\n";
      echo '<a class="jms-link" href="'.$slide['readmorelink'].'">Read more</a>'."\n";
      echo '</div>'."\n".'<img src="'.$slideimg.'" />'."\n".'</div>'."\n";

      //'<img class="hideme" src="'. $slideimg. '" alt="' . $slide['name'] .
      //'" />';
    }
    echo  '</section>'."\n";
  }
}
elseif($this->preference->item('webshop_slideshow')=="nivoslider")
{
  if(!empty($slides))
  {
    echo '<div class="slider-wrapper theme-default">
      <div class="ribbon"></div>
      <div id="slideshow" class="nivoSlider pics">';
    foreach ($slides as $slide)
    {
      $imageinfo = $slide['image'];
      $slideimg=convert_image_path($imageinfo);
      echo '<img class="hideme" src="'. $slideimg. '" alt="' . $slide['name'] .
        '" />';
    }
    echo "</div>";
    echo "</div>";
  }
}
elseif($this->preference->item('webshop_slideshow')=="blueimpslide")
{
  echo '<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    </div>';
  echo '<div id="links">';
  foreach ($slides as $slide)
  {
    $imageinfo = $slide['image'];
    $slideimg=convert_image_path($imageinfo);
    echo '<a href="'.$slideimg.'" >';
    echo "<img class='hideme' src='".$slideimg."'>";
    echo "\n</a>\n";
  }
  echo "</div>";
}
elseif($this->preference->item('webshop_slideshow')=="slidejs")
{
  if(!empty($slides))
  {
    echo "<div id=\"slides\">";
    foreach ($slides as $slide)
    {
      $imageinfo = $slide['image'];
      $slideimg=convert_image_path($imageinfo);
      echo '<img class="" src="'. $slideimg. '" alt="' . $slide['name'] .
        '" />';
    }
    echo '<a href="#" class="slidesjs-previous slidesjs-navigation"><i class="fa fa-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="fa fa-chevron-right icon-large"></i></a>';
    echo "</div>";
  }
}
  else
{
  if(!empty($slides))
  {
    echo "<div id=\"slideshow\" class=\"pics\">";
    foreach ($slides as $slide)
    {
      $imageinfo = $slide['image'];
      $slideimg=convert_image_path($imageinfo);
      echo '<img class="hideme" src="'. $slideimg. '" alt="' . $slide['name'] .
        '" />';
    }
    echo "</div>";
  }
}


