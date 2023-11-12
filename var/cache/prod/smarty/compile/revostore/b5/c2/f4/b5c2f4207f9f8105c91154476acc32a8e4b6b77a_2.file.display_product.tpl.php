<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:19
  from 'C:\xampp\htdocs\litgo_presta\modules\ybc_specificprices\views\templates\hook\display_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550db9fe726a4_69330855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c2f4207f9f8105c91154476acc32a8e4b6b77a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\modules\\ybc_specificprices\\views\\templates\\hook\\display_product.tpl',
      1 => 1699797845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ybc_specificprices/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_6550db9fe726a4_69330855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="ybc_countdown col-sm-12 col-md-6 col-lg-6">
    <div id="ybc_specificprices">
        <h3 class="h1 products-section-title text-uppercase">
            <span><i class="fa fa-tags"></i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </h3>
        <div class="ets-product-specific">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10402076296550db9fe71de5_49253427', 'product_miniature');
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
/* {block 'product_miniature'} */
class Block_10402076296550db9fe71de5_49253427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_10402076296550db9fe71de5_49253427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:modules/ybc_specificprices/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php
}
}
/* {/block 'product_miniature'} */
}
