<?php
/* Smarty version 3.1.33, created on 2019-10-23 15:14:52
  from '/var/www/loris/modules/imaging_browser/templates/imaging_session_controlpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0443ce11e38_90225787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82cdb0229c524b4d48f8f5f8e29367d9be99dfa0' => 
    array (
      0 => '/var/www/loris/modules/imaging_browser/templates/imaging_session_controlpanel.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db0443ce11e38_90225787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/loris/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
    <h3>Navigation</h3>
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['subject']->value['backURL']) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['subject']->value['backURL'];?>
">
                    <span class="text-default">
                        <span class="glyphicon glyphicon-backward"></span>&nbsp;Back to list
                    </span>
                </a>
             </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subject']->value['prevTimepoint']['URL'] != '') {?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['subject']->value['prevTimepoint']['URL'];?>
">
                   <span class="text-default">
                       <span class="glyphicon glyphicon-step-backward"></span>&nbsp;Previous
                   </span>
                 </a>
            <?php }?>
       	    <?php if ($_smarty_tpl->tpl_vars['subject']->value['nextTimepoint']['URL'] != '') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['subject']->value['nextTimepoint']['URL'];?>
">
                  <span class="text-default">
                      &nbsp;&nbsp;Next&nbsp;<span class="glyphicon glyphicon-step-forward"></span>
                  </span>
                </a>
           </li>
        <?php }?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['prevTimepoint']->value['URL'] != '' && $_smarty_tpl->tpl_vars['nextTimepoint']->value['URL'] != '') {?><br><br><?php }?>
    <h3>Volume Viewer</h3>
       <input id="bbonly" type="button" class="btn btn-volume-viewer" accesskey="d" value="3D Only">
       <input id="bboverlay" type="button" class="btn btn-volume-viewer" accesskey="c" value="3D + Overlay">

    <h3>Links</h3>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subject']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/instruments/<?php echo $_smarty_tpl->tpl_vars['link']->value['BEName'];?>
/?commentID=<?php echo $_smarty_tpl->tpl_vars['link']->value['CommentID'];?>
&sessionID=<?php echo $_smarty_tpl->tpl_vars['subject']->value['sessionID'];?>
&candID=<?php echo $_smarty_tpl->tpl_vars['subject']->value['candid'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['FEName'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subject']->value['tarchiveIDLoc'], 'tarchiveLoc', false, 'tarchive');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarchive']->value => $_smarty_tpl->tpl_vars['tarchiveLoc']->value) {
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/dicom_archive/viewDetails/?tarchiveID=<?php echo $_smarty_tpl->tpl_vars['tarchive']->value;?>
&backURL=<?php echo rawurlencode($_smarty_tpl->tpl_vars['backURL']->value);?>
">DICOM Archive <?php echo $_smarty_tpl->tpl_vars['tarchive']->value;?>
</a></li>
            <li><a href="/mri/jiv/get_file.php?file=<?php echo $_smarty_tpl->tpl_vars['tarchiveLoc']->value['ArchiveLocation'];?>
&patientName=<?php echo $_smarty_tpl->tpl_vars['tarchiveLoc']->value['PatientName'];?>
" class="btn btn-primary btn-small">
                    <span class="glyphicon glyphicon-cloud-download"></span><span class="hidden-xs"> Download DICOM <?php echo $_smarty_tpl->tpl_vars['tarchive']->value;?>
</span>
                </a>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['mantis']->value) {?>
            <li><a target="mantis" href="<?php echo $_smarty_tpl->tpl_vars['issue_tracker_url']->value;?>
">Report a Bug (Mantis)</a></li>
        <?php }?>
    </ul>

    <h3>Visit Level QC</h3>
    <div class="visit-level-feedback">
          <a class="btn btn-default" href="#"
               onClick="javascript:open_popup('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/feedback_mri_popup.php?sessionID=<?php echo $_smarty_tpl->tpl_vars['subject']->value['sessionID'];?>
')">
                 <span class="text-default">
                     <span class="glyphicon glyphicon-pencil feedback-text"></span>
                     <span class="hidden-xs feedback-text"> Visit Level Feedback</span>
                 </span>
        </a>
     </div>

   <br>

    <div class='div-controlpanel-bottom'>
        <div class="form-group">
            <label>QC Status</label>
            <?php if ($_smarty_tpl->tpl_vars['subject']->value['has_permission']) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['subject']->value['status_options'],'selected'=>$_smarty_tpl->tpl_vars['subject']->value['mriqcstatus'],'name'=>'visit_status','tabindex'=>1,'class'=>"form-control input-sm",'style'=>"width:100px"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['subject']->value['mriqcstatus'];
}?>
   <br>
       	    <label>QC Pending</label>
       	    <?php if ($_smarty_tpl->tpl_vars['subject']->value['has_permission']) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['subject']->value['pending_options'],'selected'=>$_smarty_tpl->tpl_vars['subject']->value['mriqcpending'],'name'=>'visit_pending','tabindex'=>2,'class'=>"form-control input-sm",'style'=>"width:100px"),$_smarty_tpl);
} else {
if ($_smarty_tpl->tpl_vars['subject']->value['mriqcpending'] == 'Y') {?>Yes<?php } else { ?>No<?php }
}?>
   <br>
       	    <label>Visit Level Caveat</label>
       	    <?php if ($_smarty_tpl->tpl_vars['subject']->value['has_permission']) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['subject']->value['caveat_options'],'selected'=>$_smarty_tpl->tpl_vars['subject']->value['mricaveat'],'name'=>'visit_caveat','tabindex'=>3,'class'=>"form-control input-sm",'style'=>"width:100px"),$_smarty_tpl);
} else {
if ($_smarty_tpl->tpl_vars['subject']->value['mricaveat'] == 'true') {?>True<?php } else { ?>False<?php }
}?>
   <br>
            <?php if ($_smarty_tpl->tpl_vars['subject']->value['has_permission']) {?><input class="btn btn-default" type="submit" accesskey="s" value="Save" name="save_changes"><?php }?>
        </div>
   </div>
</td>
<td class='td-cpanel-fake'><table class='table-cpanel-fake'></table>
<!-- /Control Panel -->
<?php }
}
