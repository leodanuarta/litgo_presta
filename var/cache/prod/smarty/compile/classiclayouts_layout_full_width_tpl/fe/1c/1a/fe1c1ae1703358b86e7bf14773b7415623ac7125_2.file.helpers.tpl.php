<?php
/* Smarty version 3.1.48, created on 2023-11-16 22:49:33
  from 'C:\xampp\htdocs\litgo_presta\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65563a0d557f46_68144039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1c1ae1703358b86e7bf14773b7415623ac7125' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1699765716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65563a0d557f46_68144039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\litgo_presta\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\fe\\1c\\1a\\fe1c1ae1703358b86e7bf14773b7415623ac7125_2.file.helpers.tpl.php',
    'uid' => 'fe1c1ae1703358b86e7bf14773b7415623ac7125',
    'call_name' => 'smarty_template_function_renderLogo_145312485565563a0d4c0838_94145455',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_145312485565563a0d4c0838_94145455 */
if (!function_exists('smarty_template_function_renderLogo_145312485565563a0d4c0838_94145455')) {
function smarty_template_function_renderLogo_145312485565563a0d4c0838_94145455(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_145312485565563a0d4c0838_94145455 */
}
