<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:18
  from 'C:\xampp\htdocs\litgo_presta\modules\ybc_newsletter\views\templates\hook\css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550db9e1bb302_91183822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '536ed6a92c4d8bbbb7c49bc415fa3d09fa88ec9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\modules\\ybc_newsletter\\views\\templates\\hook\\css.tpl',
      1 => 1699797845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550db9e1bb302_91183822 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #ynp-submit, .ybc-newsletter-popup:not(.ynpt6) #ynp-close{background:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    .ynpt6 .ynp-email-input{border-bottom-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    .alert-success span{color:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    #uniform-ynp-input-dont-show > span.checked::before{color:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    #ynp-submit:hover, .ybc-newsletter-popup:not(.ynpt6) #ynp-close:hover{background:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_hover']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    <?php if ($_smarty_tpl->tpl_vars['template']->value == 'ynpt1' && $_smarty_tpl->tpl_vars['image']->value) {?>
        .ynp-div-l3{background: url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
') top left no-repeat;}      
    <?php }?>
</style><?php }
}
