<?php
/* Smarty version 3.1.32, created on 2019-08-26 14:22:27
  from 'D:\PROGRAMOWANIE\Programy\MAMP\htdocs\frontend\zadanie\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d63eb232ae7f5_48169490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab10110e0dc1f2b55d7225add7841a43f8bf614a' => 
    array (
      0 => 'D:\\PROGRAMOWANIE\\Programy\\MAMP\\htdocs\\frontend\\zadanie\\templates\\index.tpl',
      1 => 1566829315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:slider.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d63eb232ae7f5_48169490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
