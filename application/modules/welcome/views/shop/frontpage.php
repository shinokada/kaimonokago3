<div id="maintop">

    <?php print displayStatus();?>

<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'inc/slideshow'); ?>


<?php
// print_r ($pagecontent);
if(isset($pagecontent['content']))
{// this if is for the installation without this it will display an error
  echo "<div id=\"pagecont\" >";
  echo $pagecontent['content'];
  echo "</div>";
}
;?>
</div><!-- end of #maintop -->
<div id="frontproducttable">

<?php
foreach ($images as $image)
{
  $imageinfo = $image['thumbnail'];
  $thumbnail=convert_image_path($imageinfo);

  echo '<div class="vt ac" >'."\n".'<div class="frontpro">'."\n".'<div class="vt">'."\n";
  echo '<a href="' . site_url().'/'.$module. '/product/'.$image['id']. '">';
  echo "<img src='".$thumbnail."' border='0' class='thumbnail'/></a>\n</div>\n<div class='vt al'>\n";
  echo '<span class="hdrproduct"><a href="' . site_url(). '/'.$module.'/product/'.$image['id']. '">'."\n";
  echo $image['name']. "</a></span><br />\n";
  echo $image['shortdesc']."</div>\n";
  echo "<div class='vt ar'><b>".$this->lang->line('webshop_price')."</b>: <span class='price'>".$this->lang->line('webshop_currency_symbol').$image['price']."</span><br />\n";
  echo '<a href="' . site_url()."/".$module. '/cart/'.$image['id']. '"><p class="addtocart">'.$this->lang->line('webshop_buy').'</p></a></div>';
  echo "\n</div>\n</div>\n";
}


echo "<div class=\"clearboth\" ></div>";
?>

</div><!-- end of #frontproducttable -->

<?php
$base=$this->config->item('base_url');
$mystring = $base;
$findme   = 'localhost';
$pos = strpos($mystring, $findme);
if(ENVIRONMENT=='development' OR $pos)
{

echo "<pre>";
print_r ($this->data['mainnav']);
echo "</pre>";
echo "<pre>images is: ";
print_r($images);
echo "</pre>";

echo "<pre>multilang is: ";
print_r ($this->data['multilang']);
echo "</pre>";
echo "<pre>mylanguage: ";
print_r ($this->data['mylanguage']);
echo "</pre>";
echo "<pre>lang_id: ";
print_r ($this->data['lang_id']);
echo "</pre>";
echo "<pre>language: ";
var_dump ($this->data['language']);
echo "</pre>";
echo "<pre>mylanguate1: ";
print_r ($this->data['mylanguage1']);
echo "</pre>";
echo "<pre>sessionlang: ";
//var_dump ($this->data['sessionlang']);
echo "</pre>";

echo "<pre>get_class is: ";
print_r($get_class);
echo "</pre>";
echo "<pre>module name is: ";
print_r($module);
echo "</pre>";
echo "<pre>index path is: ";
print_r($index_path);
echo "</pre>";
echo "<pre>cat_parent is: ";
print_r ($this->data['cat_parent']);
echo "</pre>";
echo "<pre>parent: ";
print_r ($this->data['parent']);
echo "</pre>";
echo "<pre>navlist: ";
print_r ($this->data['navlist']);
echo "</pre>";

echo "<pre>slides is: ";
print_r($slides);
echo "</pre>";
}
?>
