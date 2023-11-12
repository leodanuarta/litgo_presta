<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:20
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dba0c53417_37185052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3423b8be4f76bc7e89c40d6b5b767866c5eb7bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dba0c53417_37185052 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['notif']->value['message'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
