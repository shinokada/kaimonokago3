<?php
$lang = $this->data['short_lang'];
if(empty($lang)){
  $lang = "en";
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<meta name="description" content="<?php 
if(isset($pagecontent['metadesc']))
{
  echo $pagecontent['metadesc'];
}
?>" />
<meta name="keywords" content="<?php 
if(isset($pagecontent['metakeyword']))
{
  echo $pagecontent['metakeyword'];
}
?>" />
<base href="<?php echo base_url();?>" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php print $this->bep_site->get_variables()?>
<?php print $this->bep_assets->get_header_assets();?>
<?php //print $this->kk_assets->get_header_assets();?>
<?php print $this->bep_site->get_js_blocks()?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--></head>
<body>
<div id="container">
<?php $this->load->view($this->config->item('backendpro_template_shop') . 'header');?>
<?php $this->load->view($this->config->item('backendpro_template_shop') . 'menu');?>
</div>
<div id="wrapper">
<div class="inside">
<div id="main">
<?php 
//   print displayStatus();
print (isset($content)) ? $content : NULL; 
if( isset($page))
{
  if( isset($module))
  {
    $this->load->view($module.'/'.$page);
  } 
  else 
  {
    $this->load->view($page);
  }
}
?>
</div><!--End of main-->
<?php $this->load->view($this->config->item('backendpro_template_shop') . 'left');?>
<?php $this->load->view($this->config->item('backendpro_template_shop') . 'right');?>

</div><!-- end of inside -->
<div id="footer">
<?php $this->load->view($this->config->item('backendpro_template_shop') . 'footer');?>
</div><!-- END of FOOTER  -->
</div><!--End of wrapper-->

<?php print $this->bep_assets->get_footer_assets();?>
<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'sharethis'); ?>
<?php  $this->load->view($this->config->item('backendpro_template_shop') . 'google_analytics'); ?>

</body>
</html>
