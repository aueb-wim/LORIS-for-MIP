<?php
/* Smarty version 3.1.33, created on 2019-10-23 15:14:52
  from '/var/www/loris/modules/imaging_browser/templates/table_session_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0443ccc3549_92664803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c92e6d30315a71db5f15aaeb1f5adfa03963ba4' => 
    array (
      0 => '/var/www/loris/modules/imaging_browser/templates/table_session_header.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db0443ccc3549_92664803 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-hover table-bordered dynamictable" id='table-header-left'>
     <thead>
        <tr class="info">
            <th>QC Status</th>
            <th>Patient Name</th>
            <th>PSCID</th>
            <th>DCCID</th>
            <th>Visit Label</th>
            <th>Site</th>
            <th>QC Pending</th>
            <th>DOB</th>
            <th>Sex</th>
            <th>Output Type</th>
            <th>Scanner</th>
            <th>Subproject</th>
            <?php if ($_smarty_tpl->tpl_vars['useEDC']->value) {?>
            <th>EDC</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['mriqcstatus'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['pscid'];?>
_<?php echo $_smarty_tpl->tpl_vars['subject']->value['candid'];?>
_<?php echo $_smarty_tpl->tpl_vars['subject']->value['visitLabel'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['pscid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['candid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['visitLabel'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['site'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['subject']->value['mriqcpending'] == "Y") {?><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/check_blue.gif" width="12" height="12"><?php } else { ?>&nbsp;<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['dob'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['sex'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['outputType']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['scanner'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['SubprojectTitle'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['useEDC']->value) {?>
            <td><?php echo $_smarty_tpl->tpl_vars['subject']->value['edc'];?>
</td>
            <?php }?>
        </tr>
    </tbody>
</table>
<?php }
}
