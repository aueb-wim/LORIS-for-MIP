<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:44:10
  from '/var/www/loris/modules/dashboard/templates/progress_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47baa33f587_90653440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623d383e4967b0d8e579ff5185e28da786276ecb' => 
    array (
      0 => '/var/www/loris/modules/dashboard/templates/progress_bar.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da47baa33f587_90653440 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php if ($_smarty_tpl->tpl_vars['project']->value['recruitment_target'] != '') {?>
    <h5><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</h5>
    <?php if ($_smarty_tpl->tpl_vars['project']->value['surpassed_recruitment'] == "true") {?>
        <p>The recruitment target (<?php echo $_smarty_tpl->tpl_vars['project']->value['recruitment_target'];?>
) has been passed.</p>
        <div class="progress">
            <div class="progress-bar progress-bar-female" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['project']->value['female_full_percent'];?>
%" data-toggle="tooltip" data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['project']->value['female_full_percent'];?>
%">
                <p>
                <?php echo $_smarty_tpl->tpl_vars['project']->value['female_total'];?>

                <br>
                Females
                </p>
            </div>
            <div class="progress-bar progress-bar-male" data-toggle="tooltip" data-placement="bottom" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['project']->value['male_full_percent'];?>
%"  title="<?php echo $_smarty_tpl->tpl_vars['project']->value['male_full_percent'];?>
%">
                <p>
                <?php echo $_smarty_tpl->tpl_vars['project']->value['male_total'];?>

                <br>
                Males
                </p>
            </div>
            <p class="pull-right small target">Target: <?php echo $_smarty_tpl->tpl_vars['project']->value['recruitment_target'];?>
</p>
        </div>

    <?php } else { ?>
        <div class="progress">
            <div class="progress-bar progress-bar-female" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['project']->value['female_percent'];?>
%" data-toggle="tooltip" data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['project']->value['female_percent'];?>
%">
                <p>
                <?php echo $_smarty_tpl->tpl_vars['project']->value['female_total'];?>

                <br>
                Females
                </p>
            </div>
            <div class="progress-bar progress-bar-male" data-toggle="tooltip" data-placement="bottom" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['project']->value['male_percent'];?>
%"  title="<?php echo $_smarty_tpl->tpl_vars['project']->value['male_percent'];?>
%">
                <p>
                <?php echo $_smarty_tpl->tpl_vars['project']->value['male_total'];?>

                <br>
                Males
                </p>
            </div>
            <p class="pull-right small target">Target: <?php echo $_smarty_tpl->tpl_vars['project']->value['recruitment_target'];?>
</p>
        </div>
    <?php }
} else { ?>
    Please add a recruitment target for <?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
.
<?php }
}
}
