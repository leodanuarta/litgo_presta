<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:06:50
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\checkout\_partials\cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dbfa3ef8e4_66968189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '611fb0d78e5409bc550d79c13cb9537e5727007d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\checkout\\_partials\\cart-detailed.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_6550dbfa3ef8e4_66968189 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
  <ul class="cart-items">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <li class="cart-item"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
      <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations']) > 1) {?>
      <hr>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php } else { ?>
    <span class="no-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
  <?php }?>
</div>
<?php }
}
