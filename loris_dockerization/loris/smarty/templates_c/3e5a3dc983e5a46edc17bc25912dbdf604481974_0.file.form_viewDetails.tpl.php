<?php
/* Smarty version 3.1.33, created on 2019-10-23 14:54:57
  from '/var/www/loris/modules/dicom_archive/templates/form_viewDetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db03f918a5130_89427018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e5a3dc983e5a46edc17bc25912dbdf604481974' => 
    array (
      0 => '/var/www/loris/modules/dicom_archive/templates/form_viewDetails.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db03f918a5130_89427018 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Tarchive Metadata</h2>
<table class="table table-hover table-primary table-bordered details-outer-table">
  <tr>
    <th>Acquisition ID</th>
    <td>
      <a class="dicom_archive" style="cursor: pointer"
         data-patientname="<?php echo $_smarty_tpl->tpl_vars['archive']->value['PatientName'];?>
">
         <?php echo $_smarty_tpl->tpl_vars['archive']->value['DicomArchiveID'];?>

      </a>
    </td>
  </tr>
  <tr>
    <th>Patient ID</th>
    <td<?php if ($_smarty_tpl->tpl_vars['archive']->value['patientIDValid'] == 0) {?> class="error"<?php }?>><?php echo $_smarty_tpl->tpl_vars['archive']->value['PatientID'];?>
</td>
  </tr>
  <tr>
    <th>Patient Name</th>
    <td<?php if ($_smarty_tpl->tpl_vars['archive']->value['patientNameValid'] == 0) {?> class="error"<?php }?>><?php echo $_smarty_tpl->tpl_vars['archive']->value['PatientName'];?>
</td>
  </tr>
  <tr>
    <th>Patient Birthdate</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['PatientDoB'];?>
</td>
  </tr>
  <tr>
    <th>Patient Biological Sex</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['PatientSex'];?>
</td>
  </tr>
  <tr>
    <th>Date acquired</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['DateAcquired'];?>
</td>
  </tr>
  <tr>
    <th>Scanner Model</th>
    <td>
      <?php echo $_smarty_tpl->tpl_vars['archive']->value['ScannerManufacturer'];?>
 <?php echo $_smarty_tpl->tpl_vars['archive']->value['ScannerModel'];?>

      (Serial Number: <?php echo $_smarty_tpl->tpl_vars['archive']->value['ScannerSerialNumber'];?>
)
    </td>
  </tr>
  <tr>
    <th>Scanner Software Version</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['ScannerSoftwareVersion'];?>
</td>
  </tr>
  <tr>
    <th>Acquired at</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['CenterName'];?>
</td>
  </tr>
  <tr>
    <th>Number of Acquisitions</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['AcquisitionCount'];?>
</td>
  </tr>
  <tr>
    <th>Archived by</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['CreatingUser'];?>
</td>
  </tr>
  <tr>
    <th>Last update</th>
    <td><?php if (!isset($_smarty_tpl->tpl_vars['archive']->value['LastUpdate'])) {?>Never<?php }?></td>
  </tr>
  <tr>
    <th>Summary type version</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['sumTypeVersion'];?>
</td>
  </tr>
  <tr>
    <th>Source location</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['SourceLocation'];?>
</td>
  </tr>
  <tr>
    <th>Archive type version</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['tarTypeVersion'];?>
</td>
  </tr>
  <tr>
    <th>Archive location</th>
    <td><?php echo $_smarty_tpl->tpl_vars['archive']->value['ArchiveLocation'];?>
</td>
  </tr>
  <tr>
    <th>Archiving log</th>
    <td>
      <pre><?php echo $_smarty_tpl->tpl_vars['archive']->value['CreateInfo'];?>
</pre>
    </td>
  </tr>
  <tr>
    <th>md5sum of Archive</th>
    <td>
      <pre><br><b><?php echo $_smarty_tpl->tpl_vars['archive']->value['md5sumArchive'];?>
</pre>
      </b></td>
  </tr>
  <tr>
    <th>md5sum of Dicom unzipped</th>
    <td><br><b>
        <pre><?php echo $_smarty_tpl->tpl_vars['archive']->value['md5sumDicomOnly'];?>
</pre>
      </b></td>
  </tr>
  <tr>
    <th class="valign-top">Series</th>
    <td>
      <a data-toggle="collapse" href="#series-data" aria-expanded="false" aria-controls="series-data">
        Show/Hide series (<?php echo count($_smarty_tpl->tpl_vars['archive_series']->value);?>
)
      </a>
      <div id="series-data" class="collapse">
        <table class="table table-hover table-primary table-bordered">
        <tr class="info">
          <th>Series Number</th>
          <th>Series Description</th>
          <th>Protocol Name</th>
          <th>Sequence Name</th>
          <th>Echo Time</th>
          <th>Repetition Time</th>
          <th>Inversion Time</th>
          <th>Slice Thickness</th>
          <th>Phase Encoding</th>
          <th>Number of Files</th>
          <th>SeriesUID</th>
        </tr>
        <?php
$__section_record_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['archive_series']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_record_0_total = $__section_record_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_record'] = new Smarty_Variable(array());
if ($__section_record_0_total !== 0) {
for ($__section_record_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] = 0; $__section_record_0_iteration <= $__section_record_0_total; $__section_record_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']++){
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SeriesNumber'];?>
</td>
            <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SeriesDescription'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['ProtocolName'])===null||$tmp==='' ? "Unknown" : $tmp);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SequenceName'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['EchoTime'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['RepetitionTime'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['InversionTime'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SliceThickness'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['PhaseEncoding'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['NumberOfFiles'];?>
</td>
            <td>
              <a href="#" class="dicom_archive"
                 data-patientname="<?php echo $_smarty_tpl->tpl_vars['archive']->value['PatientName'];?>
"
                 data-seriesuid="<?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SeriesUID'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['archive_series']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SeriesUID'];?>

              </a>
            </td>
          </tr>
        <?php
}
}
?>
      </table>
      </div>
    </td>
  </tr>
  <tr>
    <th class="valign-top">Files</th>
    <td>
      <a data-toggle="collapse" href="#files-data" aria-expanded="false" aria-controls="files-data">
        Show/Hide files (<?php echo count($_smarty_tpl->tpl_vars['archive_files']->value);?>
)
      </a>
      <div id="files-data" class="collapse">
        <table class="table table-hover table-primary table-bordered">
          <tr class="info">
            <th>SeriesNumber</th>
            <th>FileNumber</th>
            <th>EchoNumber</th>
            <th>SeriesDescription</th>
            <th>Md5Sum</th>
            <th>FileName</th>
          </tr>
          <?php
$__section_record_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['archive_files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_record_1_total = $__section_record_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_record'] = new Smarty_Variable(array());
if ($__section_record_1_total !== 0) {
for ($__section_record_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] = 0; $__section_record_1_iteration <= $__section_record_1_total; $__section_record_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']++){
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['archive_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SeriesNumber'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['archive_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['FileNumber'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['archive_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['EchoNumber'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['archive_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['SeriesDescription'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['archive_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['Md5Sum'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['archive_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_record']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_record']->value['index'] : null)]['FileName'];?>
</td>
            </tr>
          <?php
}
}
?>
        </table>
      </div>
    </td>
  </tr>
</table>
<?php }
}
