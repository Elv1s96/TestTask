<?php
/* Smarty version 3.1.30, created on 2018-10-11 18:22:00
  from "C:\xampp\htdocs\testtask\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf78a8ce37b2_62909918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1754f0cf7048bb725120ae392ec4cded73570598' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testtask\\View\\index.tpl',
      1 => 1539274849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5bbf78a8ce37b2_62909918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14089201925bbf78a8cdf939_06500299', 'body');
?>




<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_14089201925bbf78a8cdf939_06500299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- <link rel="stylesheet" href="/style.css"> -->
    <?php echo '<script'; ?>
 src="/News/style.js"><?php echo '</script'; ?>
>
    <div class="form-group">
        <label for="category_id">Отсортировать по:</label>
        <form action="/main/index" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По-умолчанию</button>
        </form>
        <form action="/main/newtoold" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">От новых до старых</button>
        </form>
        <form action="/main/abc" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По алфавиту</button>
        </form>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['new']->value) {
?>
        <section id="profiles" class="page">
            <div class="container">
                <div class="container-fluid">
                    <div class="row" id="profile-grid">
                        <div class="">
                            <div class="panel panel-default">
                                <div class="panel-default">
                                    <a href="#" title="Big picture" class="thumb">
                                        <img src="/files/show/<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
/c0c0c0&amp;text=image0x206" class="img-responsive img-rounded center-block " data-toggle="modal" style="height: 500px; width:700px !important;" data-target=".modal-profile-lg">
                                    </a>
                                </div>
                                <div class="">
                                    <p class="" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['new']->value['name'];?>
</p>
                                    <p style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['new']->value['created_at'];?>
</p>
                                    <div class="panel-heading" >
                                        <p><?php echo $_smarty_tpl->tpl_vars['new']->value['content'];?>
</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title"></h3>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- //.modal-profile -->

<?php
}
}
/* {/block 'body'} */
}
