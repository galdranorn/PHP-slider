<?php
/* Smarty version 3.1.32, created on 2019-08-27 16:21:04
  from 'D:\PROGRAMOWANIE\Programy\MAMP\htdocs\frontend\zadanie\templates\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d655870a1a462_95867785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4280db2eabb6fc3cdef4e1f03a4e440958f3d7d1' => 
    array (
      0 => 'D:\\PROGRAMOWANIE\\Programy\\MAMP\\htdocs\\frontend\\zadanie\\templates\\slider.tpl',
      1 => 1566922860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d655870a1a462_95867785 (Smarty_Internal_Template $_smarty_tpl) {
?><SECTION class="new-products">
    <H1 class="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</H1>
    <H2 class="subtitle"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</H2>
    
    <DIV class="container">
        <DIV id="slider" class="slider row">
            
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['product']->value) {
?> 
            <DIV class="product-box col-sm-12 col-md-6 col-lg-3">
                <DIV class="product-content">
                    <DIV class="price">
                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                            <?php $_smarty_tpl->_assignInScope('oldPrice', ((1+($_smarty_tpl->tpl_vars['product']->value['discount']/100))*$_smarty_tpl->tpl_vars['product']->value['price']));?>
                            <SPAN class="discount"><?php echo $_smarty_tpl->tpl_vars['product']->value['discount'];?>
%</SPAN>
                            <SPAN class="actual-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 zł</SPAN>
                            <SPAN class="old-price"><?php echo $_smarty_tpl->tpl_vars['oldPrice']->value;?>
 zł</SPAN>
                        <?php } else { ?>
                            <SPAN class="actual-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 zł</SPAN>
                        <?php }?>
                    </DIV>

                    <DIV class="image">
                        <IMG src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value["prod-title"];?>
"/>
                    </DIV>

                    <DIV class="name">
                            <p class="description"><?php echo $_smarty_tpl->tpl_vars['product']->value["prod-title"];?>
</p>
                            <DIV id="hover<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="hover">
                                <A href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" class="link">Kup teraz</A>
                            </DIV>
                    </DIV>
                </DIV>
            </DIV>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </DIV>
    </DIV>
    
</SECTION><?php }
}
