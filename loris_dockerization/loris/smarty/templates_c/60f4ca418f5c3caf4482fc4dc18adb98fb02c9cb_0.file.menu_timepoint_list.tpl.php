<?php
/* Smarty version 3.1.33, created on 2019-11-30 03:25:16
  from '/var/www/loris/modules/timepoint_list/templates/menu_timepoint_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1c4fc635230_37848546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f4ca418f5c3caf4482fc4dc18adb98fb02c9cb' => 
    array (
      0 => '/var/www/loris/modules/timepoint_list/templates/menu_timepoint_list.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1c4fc635230_37848546 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- table with candidate profile info -->
<table cellpadding="2" class="table table-info table-bordered dynamictable" style="max-width:auto">
  <!-- column headings -->
  <thead>
  <tr class="info">
    <th>
      DOB
    </th>
    <?php if ($_smarty_tpl->tpl_vars['candidate']->value['EDC'] != '') {?>
      <th>
        EDC
      </th>
    <?php }?>
    <th>
      Biological Sex
    </th>
    <?php if ($_smarty_tpl->tpl_vars['candidate']->value['ProjectTitle'] != '') {?>
      <th>
        Project
      </th>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidate']->value['DisplayParameters'], 'value', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
      <th>
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

      </th>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tr>
  </thead>
  <!-- candidate data -->
  <tbody>
  <tr>
    <td>
      <?php echo $_smarty_tpl->tpl_vars['candidate']->value['DoB'];?>

    </td>
    <?php if ($_smarty_tpl->tpl_vars['candidate']->value['EDC'] != '') {?>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['candidate']->value['EDC'];?>

      </td>
    <?php }?>
    <td>
      <?php echo $_smarty_tpl->tpl_vars['candidate']->value['Sex'];?>

    </td>
    <?php if ($_smarty_tpl->tpl_vars['candidate']->value['ProjectTitle'] != '') {?>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['candidate']->value['ProjectTitle'];?>

      </td>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidate']->value['DisplayParameters'], 'value', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

      </td>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tr>
  </tbody>
</table>

<div class="col-xs-12 row">
    <!-- <div class="col-xs-1"> -->
        <h3>Actions:&nbsp&nbsp</h3> 
    <!-- </div> -->
    <!-- <div class="col-xs-4"> -->
        <?php echo $_smarty_tpl->tpl_vars['actions']->value;?>

           <a class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/imaging_browser/?DCCID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
">
              View Imaging datasets</a>

    <!-- </div> -->
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- table title -->
<strong>List of Visits (Time Points)</strong>
<!-- list of timepoints table -->
<table style="margin-top:0" class="table table-hover table-primary table-bordered dynamictable" cellpadding="2">
    <!-- table column headings -->
    <thead>
        <tr class="info">
            <th>Visit Label<BR>(Click to Open)</th>
            <th>Subproject</th>
            <th>Site</th>
            <th>Stage</th>
            <th>Stage Status</th>
            <th>Date of Stage</th>
            <th>Sent To DCC</th>
            <th>Imaging Scan Done</th>
            <th>Feedback</th>
            <th>BVL QC</th>
            <th>BVL Exclusion</th>
            <th>Registered By</th>
        </tr>
    </thead>
    <tbody>
    <?php
$__section_timepoint_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['timePoints']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_timepoint_0_total = $__section_timepoint_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_timepoint'] = new Smarty_Variable(array());
if ($__section_timepoint_0_total !== 0) {
for ($__section_timepoint_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] = 0; $__section_timepoint_0_iteration <= $__section_timepoint_0_total; $__section_timepoint_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']++){
?>
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/instrument_list/?candID=<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
&sessionID=<?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['SessionID'];?>
"><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Visit_label'];?>
</a></td>

            <td><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['SubprojectTitle'];?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['CenterName'];?>
</td>

            <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['staticStage'] != '' || $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Current_stage'] == "Not Started") {?>
            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Current_stage'];?>
</td>
            <?php } else { ?>
            <td><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Current_stage'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['currentStatus'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['currentDate'];?>
</td>
            <?php }?>

            <td>
            <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Submitted'] == "Y") {?>
        	    <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/check_blue.gif" border="0" />
            <?php } else { ?>
        	    -
            <?php }?>
            </td>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Scan_done'] != '') {?>
                    <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Scan_done'] == 'Y') {?>
                        <?php $_smarty_tpl->_assignInScope('scan_done', "Yes");?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/imaging_browser/viewSession/?sessionID=<?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['SessionID'];?>
" class="timepoint_list">
                        <?php echo $_smarty_tpl->tpl_vars['scan_done']->value;?>
</a>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('scan_done', "No");?>
                        <?php echo $_smarty_tpl->tpl_vars['scan_done']->value;?>

                    <?php }?>
            <?php } else { ?>
                <img alt="Data Missing" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/help2.gif" border=0>
            <?php }?>
            </td>
   
            <td bgColor="<?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['feedbackColor'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['feedbackCount']) {?>
                <?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['feedbackStatus'];?>

            <?php } else { ?>
                -
            <?php }?>
            </td>

            <td>
            <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['BVLQCStatus']) {?>
                <?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['BVLQCType'];?>

            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/delete.gif" border="0" />
            <?php }?>
            </td>

            <td>
            <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['BVLQCExclusion']) {?>
                <?php if ($_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['BVLQCExclusion'] == 'Not Excluded') {?>
                Pass
                <?php } else { ?>
                Fail
                <?php }?>
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/delete.gif" border="0" />
            <?php }?>
            </td>

            <td>
                <?php echo $_smarty_tpl->tpl_vars['timePoints']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_timepoint']->value['index'] : null)]['Real_name'];?>

            </td>
        </tr>
    <?php }} else {
 ?>
        <tr><td colspan="10">No timepoints have been registered yet.</td></tr>
    <?php
}
?>
    </tbody>
</table>
<?php }
}
