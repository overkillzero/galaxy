<?php
/* Smarty version 4.3.4, created on 2023-12-05 10:21:54
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/table/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656e89424d58e4_73218240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b95247bcae9a583e794617acd027e6b476c47c2' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/table/table.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656e89424d58e4_73218240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="table_1" style="width:100%">
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                                       
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <th class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold"></tbody>
</table>
<?php }
}
