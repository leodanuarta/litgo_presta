<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:56
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dbc400f351_03750268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e59d22143dfd76cd5ea6a669236ed60a9d01bb01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_6550dbc400f351_03750268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down<?php if (((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'] == 'layout1')) {?> button_left<?php }?>">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11372186046550dbc4006154_49454642', 'product_cover_tumbnails');
?>

          <div class="arrows js-arrows">
            <i class="material-icons arrow-up js-arrow-up">&#xE316;</i>
            <i class="material-icons arrow-down js-arrow-down">&#xE313;</i>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <h1 class="h1"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236105026550dbc40087c6_58681537', 'product_prices');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2415932466550dbc4008dc1_21308242', 'product_description_short');
?>

          <div class="line clearfix"></div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2849602976550dbc40094a5_19096756', 'product_buy');
?>

        </div>
      </div>
     </div>
   </div>
 </div>
</div>
<?php }
/* {block 'product_cover_tumbnails'} */
class Block_11372186046550dbc4006154_49454642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_11372186046550dbc4006154_49454642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'product_prices'} */
class Block_236105026550dbc40087c6_58681537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_236105026550dbc40087c6_58681537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_2415932466550dbc4008dc1_21308242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_2415932466550dbc4008dc1_21308242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_4684136306550dbc400a8c5_07451417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_11088772606550dbc400ae37_41799833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_12029433506550dbc400e486_10025242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" hidden>
                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_2849602976550dbc40094a5_19096756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_2849602976550dbc40094a5_19096756',
  ),
  'product_variants' => 
  array (
    0 => 'Block_4684136306550dbc400a8c5_07451417',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_11088772606550dbc400ae37_41799833',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_12029433506550dbc400e486_10025242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-actions">
              <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_token']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4684136306550dbc400a8c5_07451417', 'product_variants', $this->tplIndex);
?>

                <div class="line clearfix"></div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11088772606550dbc400ae37_41799833', 'product_add_to_cart', $this->tplIndex);
?>

                <div class="product-additional-info">
                
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','isQuickview'=>"1",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                </div> 
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12029433506550dbc400e486_10025242', 'product_refresh', $this->tplIndex);
?>

            </form>
          </div>
        <?php
}
}
/* {/block 'product_buy'} */
}
