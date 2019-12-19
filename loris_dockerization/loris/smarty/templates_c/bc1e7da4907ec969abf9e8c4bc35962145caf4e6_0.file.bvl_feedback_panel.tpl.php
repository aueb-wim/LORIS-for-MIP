<?php
/* Smarty version 3.1.33, created on 2019-11-30 03:25:16
  from '/var/www/loris/smarty/templates/bvl_feedback_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1c4fc59e255_46670299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc1e7da4907ec969abf9e8c4bc35962145caf4e6' => 
    array (
      0 => '/var/www/loris/smarty/templates/bvl_feedback_panel.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1c4fc59e255_46670299 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/panel.css" type="text/css"/>
<meta itemprop="candID" context="<?php echo $_smarty_tpl->tpl_vars['candID']->value;?>
">
<meta itemprop="sessionID" context="<?php echo $_smarty_tpl->tpl_vars['sessionID']->value;?>
">
<meta itemprop="commentID" context="<?php echo $_smarty_tpl->tpl_vars['commentID']->value;?>
">

<body>
  <div class ="panel-wrapper" id="bvl_feedback_menu">
    <div id ="panel_content"></div>
  </div><!-- /panel -->
</body>

<?php echo '<script'; ?>
 type="text/javascript" src ="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bvl_feedback/js/bvl_feedback_panel_jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bvl_feedback/js/react.behavioural_feedback_panel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  var feedback_level = <?php echo json_encode($_smarty_tpl->tpl_vars['feedback_level']->value);?>
;
  var candID = <?php echo json_encode($_smarty_tpl->tpl_vars['candID']->value);?>
;
  var PSCID = <?php echo json_encode($_smarty_tpl->tpl_vars['pscid']->value);?>
;
  var sessionID = <?php echo json_encode($_smarty_tpl->tpl_vars['sessionID']->value);?>
;
  var commentID = <?php echo json_encode($_smarty_tpl->tpl_vars['commentID']->value);?>
;
  var select_option = <?php echo $_smarty_tpl->tpl_vars['FieldNames']->value;?>
;
  var feedback_types = <?php echo json_encode($_smarty_tpl->tpl_vars['feedback_types']->value);?>


  var bvl_panel = RBehaviouralFeedbackPanel({
    feedbackLevel: feedback_level,
    candID: candID,
    pscid: PSCID,
    sessionID: sessionID,
    commentID: commentID,
    selectOptions: select_option,
    feedbackTypes: feedback_types
  });
  ReactDOM.render(bvl_panel, document.getElementById("panel_content"));
<?php echo '</script'; ?>
>

<?php }
}
