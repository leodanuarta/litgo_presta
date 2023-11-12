<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:06:49
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\checkout\cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dbf9eb1140_82412453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cefe3bf5dc7a77b52d33d8c5d719da137c61abf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\checkout\\cart-empty.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dbf9eb1140_82412453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4824902346550dbf9eaab87_19606040', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19906791916550dbf9eac6c2_24730160', 'continue_shopping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11999195916550dbf9eb0237_18802032', 'cart_actions');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9524037756550dbf9eb0817_76898893', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9144755916550dbf9eb0b14_29442209', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8344589316550dbf9eb0de9_29192261', 'display_reassurance');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'content'} */
class Block_4824902346550dbf9eaab87_19606040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4824902346550dbf9eaab87_19606040',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'content'} */
/* {block 'continue_shopping'} */
class Block_19906791916550dbf9eac6c2_24730160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_19906791916550dbf9eac6c2_24730160',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="label" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['index'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
class Block_11999195916550dbf9eb0237_18802032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_actions' => 
  array (
    0 => 'Block_11999195916550dbf9eb0237_18802032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout text-xs-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </div>
<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
class Block_9524037756550dbf9eb0817_76898893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_9524037756550dbf9eb0817_76898893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
class Block_9144755916550dbf9eb0b14_29442209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_9144755916550dbf9eb0b14_29442209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
class Block_8344589316550dbf9eb0de9_29192261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_8344589316550dbf9eb0de9_29192261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
