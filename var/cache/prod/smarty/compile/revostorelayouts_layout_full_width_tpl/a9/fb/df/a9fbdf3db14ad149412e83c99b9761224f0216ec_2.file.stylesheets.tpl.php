<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:20
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dba0af1713_78119898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9fbdf3db14ad149412e83c99b9761224f0216ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\_partials\\stylesheets.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dba0af1713_78119898 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stylesheet']->value['uri'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stylesheet']->value['media'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['css_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
font-elegant.css" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  
<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT1_DATA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT1_DATA'] != '') {?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT1_DATA'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" media="all" />
<?php }
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT2_DATA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT2_DATA'] != '') {?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT2_DATA'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" media="all" />
<?php }
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT3_DATA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT3_DATA'] != '') {?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT3_DATA'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" media="all" />
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <style>
    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stylesheet']->value['content'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
