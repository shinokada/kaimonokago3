<!-- sharethis buttons -->
<?php

if ($this->preference->item('sharethis_pub_key'))
{
  $this->load->helper('sharethis');
  echo '<div id="sthoverbuttons" class="sthoverbuttons-pos-left">';
  echo sharethis();
  echo "</div>";
}

?>
<!-- end of sharethis -->

