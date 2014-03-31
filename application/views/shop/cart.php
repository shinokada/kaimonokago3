   <div id="greenbox"><!-- start of #greenbox -->
        <div class="insideright10">
            <p><span id="cart">
            <a href="<?php echo base_url();?>index.php/<?php echo $this->data['mainmodule'];?>/cart"><?php echo lang('general_shopping_cart'); ?>
            </a></span><br />
<?php
$handlekurv = number_format($this->data['handlekurv'] ,2,'.',',');
if(isset($handlekurv))
{
  echo lang('webshop_currency_symbol').$handlekurv;
}
else
{
  echo lang('webshop_shoppingcart_empty');
}
?>
            </p>
        </div>
    </div><!-- end of #greenbox -->

