<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:06:50
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dbfa026906_63303199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0608155719b0627cf49028e20e22b0614dbe47ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\checkout\\cart.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_6550dbfa026906_63303199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3806390066550dbfa021b43_64350823', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_16085285986550dbfa022019_97678847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_3074856546550dbfa024303_69814693 extends Smarty_Internal_Block
{
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
/* {block 'cart_totals'} */
class Block_2364481796550dbfa025530_72128994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_19275264556550dbfa025b04_68598767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_5813415916550dbfa0251d7_61760067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="card cart-summary">
    
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2364481796550dbfa025530_72128994', 'cart_totals', $this->tplIndex);
?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19275264556550dbfa025b04_68598767', 'cart_actions', $this->tplIndex);
?>

    
              </div>
            <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_10436274946550dbfa026233_43131287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_3806390066550dbfa021b43_64350823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3806390066550dbfa021b43_64350823',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_16085285986550dbfa022019_97678847',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_3074856546550dbfa024303_69814693',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_5813415916550dbfa0251d7_61760067',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_2364481796550dbfa025530_72128994',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_19275264556550dbfa025b04_68598767',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_10436274946550dbfa026233_43131287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">
    <div class="cart-grid">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16085285986550dbfa022019_97678847', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3074856546550dbfa024303_69814693', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        </div>
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5813415916550dbfa0251d7_61760067', 'cart_summary', $this->tplIndex);
?>

    
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10436274946550dbfa026233_43131287', 'display_reassurance', $this->tplIndex);
?>

      </div>

    </div>
  </div>
<?php
}
}
/* {/block 'content'} */
}
