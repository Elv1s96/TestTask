<?php
/* Smarty version 3.1.30, created on 2018-10-11 17:47:27
  from "C:\xampp\htdocs\testtask\View\admin_news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf708f2580d9_35831932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53936a8efba210e74edd8ca58eec978960eab40b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testtask\\View\\admin_news.tpl',
      1 => 1539272845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_layout.tpl' => 1,
  ),
),false)) {
function content_5bbf708f2580d9_35831932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19726935155bbf708f254251_81769499', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_19726935155bbf708f254251_81769499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/News/main.css" type="text/css" />
    <?php echo '<script'; ?>
 src="/style.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/imtech_pager.js"><?php echo '</script'; ?>
>
    <div class="form-group">
        <label for="category_id">Отсортировать по:</label>
        <form action="/admin/news/index" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По-умолчанию</button>
        </form>
        <form action="/admin/news/newtoold" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">От новых до старых</button>
        </form>
        <form action="/admin/news/abc" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По алфавиту</button>
        </form>
    </div>
    <div class="example">
        <div id="content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['new']->value) {
?>
                <div class="z">
                        <div class="panel panel-default">
                            <img src="/files/show/<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
" alt="..." class="center-block img-responsive" style="height: 500px; width:700px !important;">
                            <div style="text-align:center;">
                                <p><?php echo $_smarty_tpl->tpl_vars['new']->value['name'];?>
</p>
                            </div>
                            <div style="text-align:center;">
                                <p><?php echo $_smarty_tpl->tpl_vars['new']->value['created_at'];?>
</p>
                            </div>
                            <div class="panel-heading custom_class" >
                                <p><?php echo $_smarty_tpl->tpl_vars['new']->value['content'];?>
</p>
                                <p class="text-right"><a href="/admin/control/remove/<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
?a=1" type="submit" class="btn btn-danger">Remove</a></p>
                            </div>

                        </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <div style="text-align: center" id="pagingControls"></div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">
        var pager = new Imtech.Pager();
        $(document).ready(function() {
            // кол-во выводимых параграфов () или div )
            // на одной странице
            pager.paragraphsPerPage = 2;
            // основной контейнер
            pager.pagingContainer = $('#content');
            // обозначаем требуемый блок ('div.z')
            pager.paragraphs = $('div.z', pager.pagingContainer);
            pager.showPage(1);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
