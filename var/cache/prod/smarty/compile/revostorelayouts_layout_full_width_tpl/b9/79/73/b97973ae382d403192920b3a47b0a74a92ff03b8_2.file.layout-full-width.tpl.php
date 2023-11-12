<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:20
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dba06dccf5_40433528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97973ae382d403192920b3a47b0a74a92ff03b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\layouts\\layout-full-width.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dba06dccf5_40433528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20588484476550dba06dbd77_98482871', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2128604966550dba06dc207_67097670', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14184826516550dba06dc667_69212036', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_20588484476550dba06dbd77_98482871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_20588484476550dba06dbd77_98482871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_2128604966550dba06dc207_67097670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2128604966550dba06dc207_67097670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_11950590446550dba06dc832_11699938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_14184826516550dba06dc667_69212036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_14184826516550dba06dc667_69212036',
  ),
  'content' => 
  array (
    0 => 'Block_11950590446550dba06dc832_11699938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11950590446550dba06dc832_11699938', 'content', $this->tplIndex);
?>

        </div>
    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
