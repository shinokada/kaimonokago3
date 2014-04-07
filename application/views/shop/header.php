<div id="header">
  <?php $this->load->view($this->config->item('backendpro_template_shop') . 'logo');?>

  <?php $this->load->view($this->config->item('backendpro_template_shop') . 'languages');?>

  <?php $this->load->view($this->config->item('backendpro_template_shop') . 'cart'); ?>

  <div id="flags"><!-- start of search-->
    <?php
    echo form_open($this->data['mainmodule']."/search");
    $data = array(
    "name"      => "term",
    "id"        => "term",
    "maxlength" => "64",
    "size"      => "15"
    );
    echo form_input($data);
    echo form_submit("submit",lang('webshop_search'));
    echo form_close();
    ?>
  </div><!-- end of search-->

  <div class="cb">&nbsp;</div>
</div><!-- End of div header-->


<?php
$base=$this->config->item('base_url');
$mystring = $base;
$findme   = 'localhost';
$pos = strpos($mystring, $findme);
if(ENVIRONMENT=='development' OR $pos)
{
/* echo "<pre>"; */
/*   foreach ($this->data['alllangs'] as $key=>$value) */
/*   { */
/*     print_r($value['langname']); */
/*   } */
/*   echo "</pre>"; */
}
?>
