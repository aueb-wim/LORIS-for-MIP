<?php
/* Smarty version 3.1.33, created on 2019-10-15 13:55:19
  from '/var/www/loris/modules/configuration/templates/form_configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da5a59710ea11_23938176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4674b80f4c9651bd1baae912de1039e608c99c7' => 
    array (
      0 => '/var/www/loris/modules/configuration/templates/form_configuration.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da5a59710ea11_23938176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'createRadio' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createRadio_1823216875da5a59527d116_08651307',
  ),
  'createInstrument' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createInstrument_1823216875da5a59527d116_08651307',
  ),
  'createScanType' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createScanType_1823216875da5a59527d116_08651307',
  ),
  'createLookUpCenterNameUsing' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createLookUpCenterNameUsing_1823216875da5a59527d116_08651307',
  ),
  'createEmail' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createEmail_1823216875da5a59527d116_08651307',
  ),
  'createTextArea' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createTextArea_1823216875da5a59527d116_08651307',
  ),
  'createText' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_createText_1823216875da5a59527d116_08651307',
  ),
  'printConfigItem' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_printConfigItem_1823216875da5a59527d116_08651307',
  ),
  'printForm' => 
  array (
    'compiled_filepath' => '/var/www/loris/smarty/templates_c/e4674b80f4c9651bd1baae912de1039e608c99c7_0.file.form_configuration.tpl.php',
    'uid' => 'e4674b80f4c9651bd1baae912de1039e608c99c7',
    'call_name' => 'smarty_template_function_printForm_1823216875da5a59527d116_08651307',
  ),
));
?>

















<p>Please enter the various configuration variables into the fields below. For information on how to configure LORIS, please refer to the Help section and/or the Developer's guide.</p>
<p>To configure study subprojects <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/configuration/subproject/">click here</a>.
    To configure study projects <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/configuration/project/">click here</a>.
</p>
<br>

<div class="col-md-3">
<ul class="nav nav-pills nav-stacked" role="tablist" data-tabs="tabs">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parentMenuItems']->value, 'menuItem', false, NULL, 'tabnav', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tabnav']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabnav']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tabnav']->value['index'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabnav']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabnav']->value['first'] : null)) {?>
        <li class="active"><a href="#<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['Name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['Label'];?>
</a></li>
        <?php } else { ?>
        <li><a href="#<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['Name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['Label'];?>
</a></li>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>

<div class="col-md-9">
    <div class="tab-content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value, 'topItem', false, NULL, 'configContent', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['index'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_configContent']->value['first'] : null)) {?>
        <div class="tab-pane active" id="<?php echo $_smarty_tpl->tpl_vars['topItem']->value['Name'];?>
">

        <?php } else { ?>
        <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['topItem']->value['Name'];?>
">

        <?php }?>
            <h3><?php echo $_smarty_tpl->tpl_vars['topItem']->value['Label'];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['topItem']->value['Description'];?>
</p>
            <hr>
            <div class="col-md-11">
            <form class="form-horizontal" role="form" method="post">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topItem']->value['Children'], 'configChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['configChild']->value) {
?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printConfigItem', array('node'=>$_smarty_tpl->tpl_vars['configChild']->value), true);?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 submit-area">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
/* smarty_template_function_createRadio_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createRadio_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createRadio_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['v']->value == "1" || $_smarty_tpl->tpl_vars['v']->value == "0") {?>
    <label class="radio-inline">
        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value == "1") {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>Yes
    </label>
    <label class="radio-inline">
        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value == "0") {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>No
    </label>
    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value == "true" || $_smarty_tpl->tpl_vars['v']->value == "false") {?>
    <label class="radio-inline">
        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="true" <?php if ($_smarty_tpl->tpl_vars['v']->value == "true") {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>Yes
    </label>
    <label class="radio-inline">
        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="false" <?php if ($_smarty_tpl->tpl_vars['v']->value == "false") {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>No
    </label>
    <?php }
}}
/*/ smarty_template_function_createRadio_1823216875da5a59527d116_08651307 */
/* smarty_template_function_createInstrument_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createInstrument_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createInstrument_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instruments']->value, 'label', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['name']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
<?php
}}
/*/ smarty_template_function_createInstrument_1823216875da5a59527d116_08651307 */
/* smarty_template_function_createScanType_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createScanType_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createScanType_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scan_types']->value, 'label', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['name']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
<?php
}}
/*/ smarty_template_function_createScanType_1823216875da5a59527d116_08651307 */
/* smarty_template_function_createLookUpCenterNameUsing_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createLookUpCenterNameUsing_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createLookUpCenterNameUsing_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lookup_center']->value, 'label', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
            <option <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['name']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
<?php
}}
/*/ smarty_template_function_createLookUpCenterNameUsing_1823216875da5a59527d116_08651307 */
/* smarty_template_function_createEmail_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createEmail_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createEmail_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <input class="form-control" type="email" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>
<?php
}}
/*/ smarty_template_function_createEmail_1823216875da5a59527d116_08651307 */
/* smarty_template_function_createTextArea_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createTextArea_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createTextArea_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <textarea class="form-control" rows="4" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</textarea>
<?php
}}
/*/ smarty_template_function_createTextArea_1823216875da5a59527d116_08651307 */
/* smarty_template_function_createText_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_createText_1823216875da5a59527d116_08651307')) {
function smarty_template_function_createText_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value == "Yes") {?>disabled<?php }?>>
<?php
}}
/*/ smarty_template_function_createText_1823216875da5a59527d116_08651307 */
/* smarty_template_function_printConfigItem_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_printConfigItem_1823216875da5a59527d116_08651307')) {
function smarty_template_function_printConfigItem_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<div class="form-group">
    <div class="col-sm-3" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['node']->value['Description'];?>
">
        <label class="col-sm-12 control-label config-name"><?php echo $_smarty_tpl->tpl_vars['node']->value['Label'];?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['sandbox']->value) {?><div class="config-dev-name pull-right"><i><?php echo $_smarty_tpl->tpl_vars['node']->value['Name'];?>
</i></div><?php }?>
    </div>
    <div class="col-sm-9">
        <?php if (isset($_smarty_tpl->tpl_vars['node']->value['Children']) && $_smarty_tpl->tpl_vars['node']->value['Children']) {?>
            Child nodes go here
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printConfigItem', array('node'=>$_smarty_tpl->tpl_vars['node']->value['Children']), true);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printForm', array('node'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?>
            <button class="btn btn-success add" id="<?php echo $_smarty_tpl->tpl_vars['node']->value['ID'];?>
" type="button" <?php if ($_smarty_tpl->tpl_vars['node']->value['Disabled'] == "Yes") {?>disabled<?php }?>>
                <span class="glyphicon glyphicon-plus"></span> Add field
            </button>
        <?php }?>
    </div>
</div>
<?php
}}
/*/ smarty_template_function_printConfigItem_1823216875da5a59527d116_08651307 */
/* smarty_template_function_printForm_1823216875da5a59527d116_08651307 */
if (!function_exists('smarty_template_function_printForm_1823216875da5a59527d116_08651307')) {
function smarty_template_function_printForm_1823216875da5a59527d116_08651307(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="config-form-group" id="<?php echo $_smarty_tpl->tpl_vars['node']->value['ID'];?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['Value'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?><div class="input-group entry"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'boolean') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createRadio', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'instrument') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createInstrument', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'scan_type') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createScanType', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'email') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createEmail', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'textarea') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createTextArea', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'lookup_center') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createLookUpCenterNameUsing', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createText', array('k'=>$_smarty_tpl->tpl_vars['k']->value,'v'=>$_smarty_tpl->tpl_vars['v']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?>
            <div class="input-group-btn">
                <button class="btn btn-danger btn-remove" type="button" name="remove-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['node']->value['Disabled'] == "Yes") {?>disabled<?php }?>>
                    <span class="glyphicon glyphicon-remove"></span>&nbsp;
                </button>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?></div><?php }?>
    <?php
}
} else {
?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?><div class="input-group entry"><?php }?>
        <?php ob_start();
echo ("add-").($_smarty_tpl->tpl_vars['node']->value['ID']);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('id', $_prefixVariable1);?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'instrument') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createInstrument', array('k'=>$_smarty_tpl->tpl_vars['id']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'scan_type') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createScanType', array('k'=>$_smarty_tpl->tpl_vars['id']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'email') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createEmail', array('k'=>$_smarty_tpl->tpl_vars['id']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'textarea') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createTextArea', array('k'=>$_smarty_tpl->tpl_vars['id']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['DataType'] == 'lookup_center') {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createLookUpCenterNameUsing', array('k'=>$_smarty_tpl->tpl_vars['id']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'createText', array('k'=>$_smarty_tpl->tpl_vars['id']->value,'d'=>$_smarty_tpl->tpl_vars['node']->value['Disabled']), true);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?>
            <div class="input-group-btn">
                <button class="btn btn-danger btn-remove remove-new" type="button" <?php if ($_smarty_tpl->tpl_vars['node']->value['Disabled'] == "Yes") {?>disabled<?php }?>>
                    <span class="glyphicon glyphicon-remove"></span>&nbsp;
                </button>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['node']->value['AllowMultiple'] == 1) {?></div><?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}}
/*/ smarty_template_function_printForm_1823216875da5a59527d116_08651307 */
}
