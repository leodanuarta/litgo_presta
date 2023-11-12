<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:20
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dba05eda10_71557862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1946967c85ea97de4ddf124b576580567ff74b54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\page.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dba05eda10_71557862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10679026326550dba05ea6d5_93901175', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2717273786550dba05eaba0_26975152 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h2><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h2>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_15016050496550dba05ea904_01219400 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2717273786550dba05eaba0_26975152', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7111056796550dba05ecb59_31846331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4027581816550dba05ece29_23231477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8102696996550dba05ec952_21770119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7111056796550dba05ecb59_31846331', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4027581816550dba05ece29_23231477', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_18434525316550dba05ed451_45105161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12154990196550dba05ed2a0_36020998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18434525316550dba05ed451_45105161', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10679026326550dba05ea6d5_93901175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10679026326550dba05ea6d5_93901175',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15016050496550dba05ea904_01219400',
  ),
  'page_title' => 
  array (
    0 => 'Block_2717273786550dba05eaba0_26975152',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8102696996550dba05ec952_21770119',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7111056796550dba05ecb59_31846331',
  ),
  'page_content' => 
  array (
    0 => 'Block_4027581816550dba05ece29_23231477',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12154990196550dba05ed2a0_36020998',
  ),
  'page_footer' => 
  array (
    0 => 'Block_18434525316550dba05ed451_45105161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15016050496550dba05ea904_01219400', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8102696996550dba05ec952_21770119', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12154990196550dba05ed2a0_36020998', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
