<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:19
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\modules\ybc_blog_free\views\templates\hook\home_blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550db9f912bb4_10198653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c35d6e4c4fa64eaa0e673213bfef6a634a13906' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\modules\\ybc_blog_free\\views\\templates\\hook\\home_blocks.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550db9f912bb4_10198653 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogNewsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogPopularPostsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogFeaturedPostsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogGalleryBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
}
}
