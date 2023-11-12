<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:19
  from 'C:\xampp\htdocs\litgo_presta\modules\ybc_specificprices\views\templates\hook\_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550db9fefe6b3_26431272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca8788d72dfa37751061c5faa48b1701f99497de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\modules\\ybc_specificprices\\views\\templates\\hook\\_product.tpl',
      1 => 1699797845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550db9fefe6b3_26431272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16759737556550db9fef60c9_77715015', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_902022206550db9fef6f75_22232950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product_special_img">
            <div class="table table_img">
                <div class="table-cell">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                        <img src = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
                    </a>
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']))) {?>
                        <div id="ets_clock_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" data-date-to="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ets_clock"></div>
                    <?php }?>
                </div>
            </div>
        </div>
      <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_948649446550db9fef9eb5_59706760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_10016062816550db9fefaaf3_52016396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_14254181906550db9fefb118_53347774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="product-price-and-shipping">
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                            <span class="regular-price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                      <?php }?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                          <span itemprop="price" class="price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                              <span class="discount-percentage"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percentage'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                          <?php }?>
                    </div>
                  <?php }?>
                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_miniature_item'} */
class Block_16759737556550db9fef60c9_77715015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_16759737556550db9fef60c9_77715015',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_902022206550db9fef6f75_22232950',
  ),
  'product_name' => 
  array (
    0 => 'Block_948649446550db9fef9eb5_59706760',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_10016062816550db9fefaaf3_52016396',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_14254181906550db9fefb118_53347774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902022206550db9fef6f75_22232950', 'product_thumbnail', $this->tplIndex);
?>

      <div class="product-description">
        
        <div class="table">
            <div class="table-cell">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_948649446550db9fef9eb5_59706760', 'product_name', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10016062816550db9fefaaf3_52016396', 'product_reviews', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14254181906550db9fefb118_53347774', 'product_price_and_shipping', $this->tplIndex);
?>

                  
              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['description_short'])) && $_smarty_tpl->tpl_vars['product']->value['description_short'] != '') {?>
                <div class="short_description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],150,'...' ));?>
</div>
              <?php }?>
              
            </div>
        </div>
    </div>
    
    </div>
     </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
