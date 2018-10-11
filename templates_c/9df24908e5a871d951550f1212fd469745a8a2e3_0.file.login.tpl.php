<?php
/* Smarty version 3.1.30, created on 2018-10-11 11:15:13
  from "C:\xampp\htdocs\testtask\View\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf14a1e990e3_13339396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df24908e5a871d951550f1212fd469745a8a2e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testtask\\View\\login.tpl',
      1 => 1516900382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5bbf14a1e990e3_13339396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14366762765bbf14a1e95264_21202788', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_14366762765bbf14a1e95264_21202788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Login</h3>
    <form action="/auth/login" method="POST">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login" id="login">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pass" id="pwd">
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
    Has no account? <a href="/auth/register"> Register </a>
<?php
}
}
/* {/block 'body'} */
}
