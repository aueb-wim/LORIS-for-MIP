<?php
/* Smarty version 3.1.33, created on 2019-11-26 23:29:42
  from '/var/www/loris/modules/configuration/templates/form_project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd9946a81610_58692422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a085991e5a24adf96282839065caf61bc72226e5' => 
    array (
      0 => '/var/www/loris/modules/configuration/templates/form_project.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd9946a81610_58692422 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/configuration/js/project.js">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/configuration/js/SubprojectRelations.js"><?php echo '</script'; ?>
>
<p>Use this page to manage the configuration of existing projects, or to add a new one.</p>
<p>To configure study subprojects <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/configuration/subproject/">click here</a>.</p>

<div class="col-md-3">
<ul class="nav nav-pills nav-stacked" role="tablist" data-tabs="tabs">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project', false, 'ProjectID', 'configContent', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ProjectID']->value => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['index'];
?>
    <li <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first'] : null)) {?>class="active"<?php }?>><a href="#project<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
" data-toggle="tab" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first'] : null)) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['project']->value['Name'];?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <li <?php if (count($_smarty_tpl->tpl_vars['projects']->value) == 0) {?>class="active"<?php }?>><a href="#projectnew" data-toggle="tab" <?php if (count($_smarty_tpl->tpl_vars['projects']->value) == 0) {?>class="active"<?php }?>>New ProjectID</a></li>
</ul>
</div>

<div class="col-md-7">
    <div class="tab-content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project', false, 'ProjectID', 'tabContent', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ProjectID']->value => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tabContent']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabContent']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tabContent']->value['index'];
?>
    <div id="project<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
" class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabContent']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabContent']->value['first'] : null)) {?> active<?php }?>">
        <h2><?php echo $_smarty_tpl->tpl_vars['project']->value['Name'];?>
 (ProjectID: <?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
)</h2>
        <br>
        <form class="form-horizontal" role="form" method="post" id="form<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
">
            <fieldset>
                <input type="hidden" name="ProjectID" value="<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
" class="ProjectID">
                    <div class="form-group">
                        <div class="col-sm-12 col-md-3" data-toggle="tooltip" data-placement="right" title="<?php echo 'Full descriptive title of the project';?>
">
                            <label class="col-sm-12 control-label">Project Name</label>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control projectName" name="Name" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['Name'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 col-md-3" data-toggle="tooltip" data-placement="right" title="<?php echo 'The target number will be used to generate the recruitment progress bar on the dashboard';?>
">
                            <label class="col-sm-12 control-label">Recruitment Target</label>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control projectrecruitmentTarget" name="recruitmentTarget" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['recruitmentTarget'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button id="saveproject<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
" class="btn btn-primary saveproject">Save</button>
                            <button class="btn btn-default" type="reset">Reset</button>
                            <label class="saveStatus"></label>
                        </div>
                    </div>
                    <div class="relatedsubprojects" id="subprojects<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
"></div>
                <?php echo '<script'; ?>
>
                    var filterTable = RSubprojectRelations({
                        ProjectID : <?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
,
                        Relations: <?php echo json_encode($_smarty_tpl->tpl_vars['project']->value['subprojects']);?>

                    });
                    ReactDOM.render(filterTable, document.getElementById("subprojects<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
"));
                <?php echo '</script'; ?>
>

            </fieldset>
        </form>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div id="projectnew" class="tab-pane <?php if (count($_smarty_tpl->tpl_vars['projects']->value) == 0) {
echo count($_smarty_tpl->tpl_vars['projects']->value);?>
 active<?php }?>">
        <h2>New Project</h2>
        <br>
        <form class="form-horizontal" role="form" method="post" id="form<?php echo $_smarty_tpl->tpl_vars['ProjectID']->value;?>
">
            <fieldset>
                <input type="hidden" name="ProjectID" value="new" class="ProjectID">
                <div class="form-group">
                    <div class="col-sm-12 col-md-3" data-toggle="tooltip" data-placement="right" title="<?php echo 'Full descriptive title of the project';?>
">
                        <label class="col-sm-12 control-label">Project Name</label>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <input class="form-control projectName" name="Name" placeholder="Please add a project title here" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-md-3" data-toggle="tooltip" data-placement="right" title="<?php echo 'The target number will be used to generate the recruitment progress bar on the dashboard';?>
">
                        <label class="col-sm-12 control-label">Recruitment Target</label>
                    </div>
                    <div class="col-sm-12 col-md-9">
			            <input class="form-control projectrecruitmentTarget" name="recruitmentTarget" placeholder="Please add a recruitment target here" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button id="saveprojectnew" class="btn btn-primary saveproject">Save</button>
                        <button class="btn btn-default" type="reset">Reset</button>
                        <label class="saveStatus"></label>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<?php }
}
