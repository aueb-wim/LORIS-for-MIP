<?php
/* Smarty version 3.1.33, created on 2019-10-23 15:14:52
  from '/var/www/loris/modules/imaging_browser/templates/form_viewSession.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0443ccfd9f3_86231283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3e3d5e6177f53b1606e89e0f00f7e229109933' => 
    array (
      0 => '/var/www/loris/modules/imaging_browser/templates/form_viewSession.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db0443ccfd9f3_86231283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/loris/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- Main table -->
<?php if ($_smarty_tpl->tpl_vars['show3DViewer']->value) {?>
<input type="button" name="button" value="3D Viewer" class="button" id = "dccid" name = "dccid" style = "background-color: #816e91" onclick="window.open('BrainBrowser/display.html?sessionID=<?php echo $_smarty_tpl->tpl_vars['subject']->value['sessionID'];?>
')" /></td>

</br>
<?php }?>
</tr>
<div>
<?php echo $_smarty_tpl->tpl_vars['headerTable']->value;?>

</div>

<div class="panel panel-default">
    <div class="panel-heading" id="panel-main-heading">
        <h3 class="panel-title"><?php if (count($_smarty_tpl->tpl_vars['files']->value)) {
echo count($_smarty_tpl->tpl_vars['files']->value);?>
 file(s) displayed.</h3>
        <span class="pull-right clickable mri-arrow glyphicon glyphicon-chevron-up"></span>
    </div> <!-- closing panel-heading div-->
   <div class="panel-body">
      <?php
$__section_file_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_file_0_total = $__section_file_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_file'] = new Smarty_Variable(array());
if ($__section_file_0_total !== 0) {
for ($__section_file_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] = 0; $__section_file_0_iteration <= $__section_file_0_total; $__section_file_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']++){
?>
          <div id="image-<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['FileID'];?>
"></div>
          <?php echo '<script'; ?>
>
          ReactDOM.render(
                  RImagePanel({
                      'BaseURL' : "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
",

                      'FileID'   : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['FileID'];?>
",
                      'Filename' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Filename'];?>
",
                      'QCStatus' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['QCStatus'];?>
",
                      'Checkpic' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['CheckPic'];?>
",

                      'HasQCPerm': <?php if ($_smarty_tpl->tpl_vars['has_qc_permission']->value) {?>true<?php } else { ?>false<?php }?>,
                      'FileNew'  : <?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['New']) {?>true<?php } else { ?>false<?php }?>,
                      "Selected" : "<?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Selected']) {
echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Selected'];
}?>",

                      "Caveat" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Caveat'];?>
",
                      "SNR" : "<?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SNR']) {
echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SNR'];
}?>",
                      'HeaderInfo' : {
                          'XStep' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Xstep'];?>
",
                          'YStep' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Ystep'];?>
",
                          'ZStep' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Zstep'];?>
",
                          'OutputType' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['OutputType'];?>
",
                          'AcquisitionDate' : "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['AcquisitionDate']);?>
",
                          'CoordinateSpace' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['CoordinateSpace'];?>
",
                          "InsertedDate" : "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['FileInsertDate']);?>
",
                          "AcquisitionProtocol" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['AcquisitionProtocol'];?>
",
                          "SeriesDescription" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SeriesDescription'];?>
",
                          "SeriesNumber" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SeriesNumber'];?>
",
                          "SeriesUID" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SeriesUID'];?>
",
                          "EchoTime" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['EchoTime'];?>
",
                          "RepetitionTime" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['RepetitionTime'];?>
",
                          "SliceThickness" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SliceThickness'];?>
",
                          "NumVolumes" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Time'];?>
",
                          "Pipeline" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Pipeline'];?>
",
                          "Algorithm" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['Algorithm'];?>
",
                          "TotalRejected" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['TotalRejected'];?>
",
                          "InterlaceRejected" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['InterlaceRejected'];?>
",
                          "IntergradientRejected"  : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['IntergradientRejected'];?>
",
                          "SlicewiseRejected" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SlicewiseRejected'];?>
"
                      },

                      'Fullname' : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['FullFilename'];?>
",
                      "XMLProtocol" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['XMLprotocol'];?>
",
                      "XMLReport" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['XMLreport'];?>
",
                      "NrrdFile" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['NrrdFile'];?>
",
                      "OtherTimepoints" : "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['OtherTimepoints'];?>
",
                      "SeriesUID": "<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['SeriesUID'];?>
"
                  }),
                  document.getElementById("image-<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_file']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_file']->value['index'] : null)]['FileID'];?>
" )
                  );
          <?php echo '</script'; ?>
>
       <?php
}
}
?>
   </div> <!-- closing panel-body div-->
</div>
<?php } else { ?>
    <h3>No data available</h3>
</div>
<?php }
}
}
