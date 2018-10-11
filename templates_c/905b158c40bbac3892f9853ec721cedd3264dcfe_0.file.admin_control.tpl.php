<?php
/* Smarty version 3.1.30, created on 2018-10-11 18:19:14
  from "C:\xampp\htdocs\testtask\View\admin_control.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf7802b3b3a5_22770889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '905b158c40bbac3892f9853ec721cedd3264dcfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testtask\\View\\admin_control.tpl',
      1 => 1539274750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_layout.tpl' => 1,
  ),
),false)) {
function content_5bbf7802b3b3a5_22770889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17318149255bbf7802b37520_29608718', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_17318149255bbf7802b37520_29608718 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3> Create News</h3>
    <form action="/admin/control/create" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">News Name:</label>
            <input type="text" class="form-control" name="news_name" id="news_name">
        </div>
        <div class="form-group">
            <label for="weight">Content:</label>
            <textarea  class="form-control" rows="15" name="content" id="content"></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Picture:</label>
            <input type="file" class="form-control" name="picture" id="picture">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
    <h1>Проверка</h1>
    <form action="/admin/control/check" method="POST">
        <button type="submit" class="btn btn-success">ПРОВЕРИТЬ</button>
    </form>
<?php
}
}
/* {/block 'body'} */
}
