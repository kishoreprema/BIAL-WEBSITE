<?php
/* Smarty version 3.1.33, created on 2023-01-10 18:16:15
  from '/var/www/html/modules/address_book/themes/default/filter_adress_book.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63bd5e17829483_35800696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10973ebb5cdd9328cdb5e73b81de4e611166d792' => 
    array (
      0 => '/var/www/html/modules/address_book/themes/default/filter_adress_book.tpl',
      1 => 1664271816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd5e17829483_35800696 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
            <td width="13%" align="right"><?php echo $_smarty_tpl->tpl_vars['Phone_Directory']->value;?>
:</td>
            <td width="15%" align="left">
                <select name="select_directory_type" onchange='submit();'>
                    <option value="internal" <?php echo $_smarty_tpl->tpl_vars['internal_sel']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Internal']->value;?>
</option>
                    <option value="external" <?php echo $_smarty_tpl->tpl_vars['external_sel']->value;?>
><?php echo $_smarty_tpl->tpl_vars['External']->value;?>
</option>
                </select>
            </td>
            <td width="43%" align="right"><?php echo $_smarty_tpl->tpl_vars['field']->value['LABEL'];?>
: </td>
            <td width="32%" align="left" nowrap>
                <?php echo $_smarty_tpl->tpl_vars['field']->value['INPUT'];?>
 &nbsp;<?php echo $_smarty_tpl->tpl_vars['pattern']->value['INPUT'];?>
&nbsp;&nbsp;
                <input class="button" type="submit" name="report" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
">
            </td>
    </tr>
</table>


<?php }
}
