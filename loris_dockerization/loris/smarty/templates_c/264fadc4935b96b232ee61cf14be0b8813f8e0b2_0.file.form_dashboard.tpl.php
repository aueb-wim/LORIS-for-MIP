<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:44:10
  from '/var/www/loris/modules/dashboard/templates/form_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47baa3379c6_04721722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264fadc4935b96b232ee61cf14be0b8813f8e0b2' => 
    array (
      0 => '/var/www/loris/modules/dashboard/templates/form_dashboard.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:progress_bar.tpl' => 2,
  ),
),false)) {
function content_5da47baa3379c6_04721722 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/c3.css">

<div class="row">
    <div class="col-lg-8">

        <!-- Welcome panel -->
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="welcome">Welcome, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.</h3>
                <p class="pull-right small login-time">Last login: <?php echo $_smarty_tpl->tpl_vars['last_login']->value;?>
</p>
                <?php if (!is_null($_smarty_tpl->tpl_vars['project_description']->value)) {?>
                    <p class="project-description"><?php echo $_smarty_tpl->tpl_vars['project_description']->value;?>
</p>
                <?php }?>
            </div>
            <!-- Only add the welcome panel footer if there are links -->
            <?php if ($_smarty_tpl->tpl_vars['dashboard_links']->value != '') {?>
                <div class="panel-footer">|
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dashboard_links']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['link']->value['windowName'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['label'];?>
</a>
                        |
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
        </div>

        <!-- Recruitment -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Recruitment</h3>
                <span class="pull-right clickable glyphicon glyphicon-chevron-up"></span>
                <div class="pull-right">
                    <div class="btn-group views">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Views
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li class="active"><a data-target="overall-recruitment">View overall recruitment</a></li>
                            <li><a data-target="recruitment-site-breakdown">View site breakdown</a></li>
                            <li><a data-target="recruitment-project-breakdown">View project breakdown</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="recruitment-panel" id="overall-recruitment">
                    <?php $_smarty_tpl->_subTemplateRender('file:progress_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('project'=>$_smarty_tpl->tpl_vars['recruitment']->value["overall"]), 0, false);
?>
                </div>
                <div class="recruitment-panel hidden" id="recruitment-site-breakdown">
                    <?php if ($_smarty_tpl->tpl_vars['recruitment']->value['overall']['total_recruitment'] != 0) {?>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div>
                                <h5 class="chart-title">Total recruitment per site</h5>
                                <div id="recruitmentPieChart"></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div>
                                <h5 class="chart-title">Biological sex breakdown by site</h5>
                                <div id="recruitmentBarChart"></div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <p>There have been no candidates registered yet.</p>
                    <?php }?>
                </div>
                  <div class="recruitment-panel hidden" id="recruitment-project-breakdown">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recruitment']->value, 'project', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['project']->value) {
?>
                          <?php if ($_smarty_tpl->tpl_vars['ID']->value != "overall") {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:progress_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('project'=>$_smarty_tpl->tpl_vars['project']->value), 0, true);
?>
                          <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Study Progression</h3>
                <span class="pull-right clickable glyphicon glyphicon-chevron-up"></span>
                <div class="pull-right">
                    <div class="btn-group views">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Views
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li class="active"><a data-target="scans-line-chart-panel">View scans per site</a></li>
                            <li><a data-target="recruitment-line-chart-panel">View recruitment per site</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div id="scans-line-chart-panel">
                    <h5 class="chart-title">Scan sessions per site</h5>
                    <?php if ($_smarty_tpl->tpl_vars['total_scans']->value != 0) {?>
                        <div id="scanChart"></div>
                    <?php } else { ?>
                        <p>There have been no scans yet.</p>
                    <?php }?>
                </div>
                <div id="recruitment-line-chart-panel" class="hidden">
                    <h5 class="chart-title">Recruitment per site</h5>
                    <?php if ($_smarty_tpl->tpl_vars['recruitment']->value['overall']['total_recruitment'] != 0) {?>
                        <div id="recruitmentChart"></div>
                    <?php } else { ?>
                        <p>There have been no candidates registered yet.</p>
                    <?php }?>
                </div>
            </div>
        </div>
        <small><i>Note that the Recruitment and Study Progression charts include data from ineligible, excluded, and consent withdrawn candidates.</i></small>
    </div>

    <div class="col-lg-4">
        <!-- My Tasks -->
        <?php if ($_smarty_tpl->tpl_vars['new_scans']->value != '' || $_smarty_tpl->tpl_vars['conflicts']->value != '' || $_smarty_tpl->tpl_vars['incomplete_forms']->value != '' || $_smarty_tpl->tpl_vars['radiology_review']->value != '' || $_smarty_tpl->tpl_vars['violated_scans']->value != '' || $_smarty_tpl->tpl_vars['pending_users']->value != '' || $_smarty_tpl->tpl_vars['issues_assigned']->value != '') {?>
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">My Tasks</h3>
                        <span class="pull-right clickable glyphicon glyphicon-chevron-up"></span>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="list-group tasks">
                            <?php if ($_smarty_tpl->tpl_vars['conflicts']->value != '' && $_smarty_tpl->tpl_vars['conflicts']->value != 0) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/conflict_resolver/" class="list-group-item conflict_resolver">
                                    <div class="row">
                                        <div class="col-xs-8 text-left">
                                            <div class="huge"><?php echo $_smarty_tpl->tpl_vars['conflicts']->value;?>
</div>
                                            Data entry conflict<?php if ($_smarty_tpl->tpl_vars['conflicts']->value != 1) {?>s<?php }?>
                                        </div>
                                        <div class="col-xs-4 text-right alert-chevron">
                                            <span class="glyphicon glyphicon-chevron-right medium"></span>
                                            <p class="small task-site"><?php echo $_smarty_tpl->tpl_vars['conflicts_site']->value;?>
</p>
                                        </div>
                                    </div>
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['incomplete_forms']->value != '' && $_smarty_tpl->tpl_vars['incomplete_forms']->value != 0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['incomplete_forms_site']->value == "Sites: all") {?>
                                     <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/statistics/statistics_site" class="list-group-item statistics">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['incomplete_forms']->value;?>
</div>
                                                Incomplete form<?php if ($_smarty_tpl->tpl_vars['incomplete_forms']->value != 1) {?>s<?php }?>
                                            </div>
                                            <div class="col-xs-4 text-right alert-chevron">
                                                <span class="glyphicon glyphicon-chevron-right medium"></span>
                                                <p class="small task-site"><?php echo $_smarty_tpl->tpl_vars['incomplete_forms_site']->value;?>
</p>
                                            </div>
                                        </div>
                                     </a>
                                <?php } else { ?>
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['incomplete_forms']->value;?>
</div>
                                                Incomplete form<?php if ($_smarty_tpl->tpl_vars['incomplete_forms']->value != 1) {?>s<?php }?>
                                            </div>
                                            <div class="col-xs-4 text-right alert-chevron">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_site']->value, 'centerID', false, 'ind');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ind']->value => $_smarty_tpl->tpl_vars['centerID']->value) {
?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/statistics/statistics_site/?CenterID=<?php echo $_smarty_tpl->tpl_vars['centerID']->value;?>
">
                                                        <p style="color:#555" class="small task-site"><?php echo $_smarty_tpl->tpl_vars['incomplete_forms_site']->value[$_smarty_tpl->tpl_vars['ind']->value];?>

                                                            <span class="glyphicon glyphicon-chevron-right small"></span>
                                                        </p>
                                                    </a>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['new_scans']->value != '' && $_smarty_tpl->tpl_vars['new_scans']->value != 0) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/imaging_browser/?pendingNew=N&pendingNew=P" class="list-group-item new-scans">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['new_scans']->value;?>
</div>
                                                New and pending imaging session<?php if ($_smarty_tpl->tpl_vars['new_scans']->value != 1) {?>s<?php }?>
                                            </div>
                                            <div class="col-xs-4 text-right alert-chevron">
                                                <span class="glyphicon glyphicon-chevron-right medium"></span>
                                                <p class="small task-site"><?php echo $_smarty_tpl->tpl_vars['new_scans_site']->value;?>
</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['violated_scans']->value != '' && $_smarty_tpl->tpl_vars['violated_scans']->value != 0) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/mri_violations/" class="list-group-item mri_violations">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['violated_scans']->value;?>
</div>
                                                Violated scan<?php if ($_smarty_tpl->tpl_vars['violated_scans']->value != 1) {?>s<?php }?>
                                            </div>
                                            <div class="col-xs-4 text-right alert-chevron">
                                                <span class="glyphicon glyphicon-chevron-right medium"></span>
                                                <p class="small task-site"><?php echo $_smarty_tpl->tpl_vars['violated_scans_site']->value;?>
</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['pending_users']->value != '' && $_smarty_tpl->tpl_vars['pending_users']->value != 0) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/user_accounts/?pendingApproval=Y" class="list-group-item pending-accounts">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['pending_users']->value;?>
</div>
                                                Account<?php if ($_smarty_tpl->tpl_vars['pending_users']->value != 1) {?>s<?php }?> pending approval
                                            </div>
                                            <div class="col-xs-4 text-right alert-chevron">
                                                <span class="glyphicon glyphicon-chevron-right medium"></span>
                                                <p class="small task-site"><?php echo $_smarty_tpl->tpl_vars['pending_users_site']->value;?>
</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['issues_assigned']->value != '' && $_smarty_tpl->tpl_vars['issues_assigned']->value != 0) {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/issue_tracker/?#My%20Issues" class="list-group-item issue_tracker">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['issues_assigned']->value;?>
</div>
                                                Issue<?php if ($_smarty_tpl->tpl_vars['issues_assigned']->value != 1) {?>s<?php }?> assigned to you
                                            </div>
                                            <div class="col-xs-4 text-right alert-chevron">
                                                <span class="glyphicon glyphicon-chevron-right medium"></span>
                                                <p class="small task-site"><?php echo $_smarty_tpl->tpl_vars['issues_assigned_site']->value;?>
</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        <?php }?>

        <!-- Document Repository -->
        <?php if ($_smarty_tpl->tpl_vars['document_repository_notifications']->value != '') {?>
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Document Repository Notifications</h3>
                        <span class="pull-right clickable glyphicon glyphicon-chevron-up"></span>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="list-group document-repository-item">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['document_repository_notifications']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                                <a href="/document_repository/Files/<?php echo $_smarty_tpl->tpl_vars['link']->value['Data_dir'];?>
"
                                   download="<?php echo $_smarty_tpl->tpl_vars['link']->value['File_name'];?>
" class="list-group-item">
                                    <?php if ($_smarty_tpl->tpl_vars['link']->value['new'] == 1) {?>
                                        <span class="pull-left new-flag">NEW</span>
                                    <?php }?>
                                    <span class="pull-right text-muted small">Uploaded: <?php echo $_smarty_tpl->tpl_vars['link']->value['Date_uploaded'];?>
</span>
                                    <br>
                                    <?php echo $_smarty_tpl->tpl_vars['link']->value['File_name'];?>

                                </a>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <!-- /.list-group -->
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/document_repository/" class="btn btn-default btn-block">Document Repository
                            <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        <?php }?>

       <!-- Behavioural Feedback -->
        <?php if ($_smarty_tpl->tpl_vars['bvl_feedback_notifications']->value != '') {?>
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Behavioural Feedback Notifications</h3>
                        <span class="pull-right clickable glyphicon glyphicon-chevron-up"></span>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="list-group bvl-feedback-item">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bvl_feedback_notifications']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;
echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" class="list-group-item">
                                    <?php if ($_smarty_tpl->tpl_vars['link']->value['new'] == 1) {?>
                                        <span class="pull-left new-flag">NEW</span>
                                    <?php }?>
                                    <span class="pull-right text-muted small">Updated: <?php echo $_smarty_tpl->tpl_vars['link']->value['Testdate'];?>
</span>
                                    <br>
                                    <?php echo $_smarty_tpl->tpl_vars['link']->value['Name'];?>
: <?php echo $_smarty_tpl->tpl_vars['link']->value['Comment'];?>

                                </a>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        <?php }?>
 
    </div>
</div>
<?php }
}
