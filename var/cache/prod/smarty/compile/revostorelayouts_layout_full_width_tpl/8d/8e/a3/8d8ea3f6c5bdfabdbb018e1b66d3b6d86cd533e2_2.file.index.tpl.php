<?php
/* Smarty version 3.1.48, created on 2023-11-12 21:05:20
  from 'C:\xampp\htdocs\litgo_presta\themes\revostore\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6550dba0520002_53438862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8ea3f6c5bdfabdbb018e1b66d3b6d86cd533e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\litgo_presta\\themes\\revostore\\templates\\index.tpl',
      1 => 1699797847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550dba0520002_53438862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14662932296550dba051eaf5_78152325', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_18590412956550dba051ed41_41272897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_6826237526550dba051f662_95561188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybccustom3'),$_smarty_tpl ) );?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14662932296550dba051eaf5_78152325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14662932296550dba051eaf5_78152325',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18590412956550dba051ed41_41272897',
  ),
  'page_content' => 
  array (
    0 => 'Block_6826237526550dba051f662_95561188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18590412956550dba051ed41_41272897', 'page_content_top', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

        <div class="tabs-home col-xs-12 col-sm-12">
            <ul class="tabs-home-nav">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'tabHome'),$_smarty_tpl ) );?>

            </ul>
            <div class="tabs-home-content">
                <div class="row">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'tabHomeContent'),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6826237526550dba051f662_95561188', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
