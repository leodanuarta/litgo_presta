<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:22
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dba284b3f7_57267520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62042965a00820bd1102cb6638b8f42926afc02' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1699797846,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6550dba284b3f7_57267520 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="new_products" class="featured-products clearfix home-block-section col-xs-12 col-sm-12">
  <div class="products product_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
}
