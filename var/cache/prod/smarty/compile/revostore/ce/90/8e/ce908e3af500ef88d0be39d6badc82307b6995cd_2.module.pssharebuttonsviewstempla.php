<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:56
  from 'module:pssharebuttonsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dbc4b24dc6_67771161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:pssharebuttonsviewstempla',
      1 => 1699797846,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dbc4b24dc6_67771161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18345625606550dbc4b214d5_31461754', 'social_sharing');
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'productcustom','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}
/* {block 'social_sharing'} */
class Block_18345625606550dbc4b214d5_31461754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_sharing' => 
  array (
    0 => 'Block_18345625606550dbc4b214d5_31461754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
      <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SOCIAL_SHARING'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SOCIAL_SHARING'] == 1) {?>
      <div class="line clearfix"></div>
        <div class="social-sharing">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_share_links']->value, 'social_share_link');
$_smarty_tpl->tpl_vars['social_share_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->value) {
$_smarty_tpl->tpl_vars['social_share_link']->do_else = false;
?>
              <li class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['social_share_link']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 icon-gray">
                <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['social_share_link']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['social_share_link']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['social_share_link']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                </a>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      <?php }?>
  <?php }
}
}
/* {/block 'social_sharing'} */
}
