<?php
/* Smarty version 3.1.31, created on 2018-07-31 00:47:50
  from "H:\wamp64\www\modx\setup\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b5fb1b62ecea3_28302807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cfd0ac79cb6e676703ac8d521a61d7f661e16c1' => 
    array (
      0 => 'H:\\wamp64\\www\\modx\\setup\\templates\\footer.tpl',
      1 => 1531307210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5fb1b62ecea3_28302807 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'H:\\wamp64\\www\\modx\\core\\model\\smarty\\plugins\\modifier.replace.php';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_prefixVariable1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
