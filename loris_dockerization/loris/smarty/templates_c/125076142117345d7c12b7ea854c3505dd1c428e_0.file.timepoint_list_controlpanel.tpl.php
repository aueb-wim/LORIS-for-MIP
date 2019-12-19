<?php
/* Smarty version 3.1.33, created on 2019-11-30 03:25:16
  from '/var/www/loris/modules/timepoint_list/templates/timepoint_list_controlpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1c4fc5e12f2_30547519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '125076142117345d7c12b7ea854c3505dd1c428e' => 
    array (
      0 => '/var/www/loris/modules/timepoint_list/templates/timepoint_list_controlpanel.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1c4fc5e12f2_30547519 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isDataEntryPerson']->value) {?>
<a class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/create_timepoint/?candID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
&identifier=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
">Create time point</a>
<?php }
if ($_smarty_tpl->tpl_vars['isDataEntryPerson']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['candidate_parameters_edit']->value) {?>
        <a class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/candidate_parameters/?candID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
&identifier=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
">Edit Candidate Info</a>
    <?php } elseif ($_smarty_tpl->tpl_vars['candidate_parameters_view']->value) {?>
        <button class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/candidate_parameters/?candID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
&identifier=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
">View Candidate Info</button>
    <?php }
}
}
}
