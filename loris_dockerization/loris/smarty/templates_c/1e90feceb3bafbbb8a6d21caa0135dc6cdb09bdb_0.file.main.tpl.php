<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:44:10
  from '/var/www/loris/smarty/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47baa395d83_92955368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e90feceb3bafbbb8a6d21caa0135dc6cdb09bdb' => 
    array (
      0 => '/var/www/loris/smarty/templates/main.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da47baa395d83_92955368 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html style="height:100%; background:transparent">
    <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value != "dynamictabs") {?>
    <head>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/fontawesome/css/all.css" type="text/css" />
        <link type="image/x-icon" rel="icon" href="/images/favicon.ico">

                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/loris.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
        let loris = new LorisHelper(<?php echo $_smarty_tpl->tpl_vars['jsonParams']->value;?>
, <?php echo json_encode($_smarty_tpl->tpl_vars['userPerms']->value);?>
, <?php echo json_encode($_smarty_tpl->tpl_vars['studyParams']->value);?>
);
        <?php echo '</script'; ?>
>
        <?php
$__section_jsfile_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['jsfiles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_jsfile_0_total = $__section_jsfile_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_jsfile'] = new Smarty_Variable(array());
if ($__section_jsfile_0_total !== 0) {
for ($__section_jsfile_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_jsfile']->value['index'] = 0; $__section_jsfile_0_iteration <= $__section_jsfile_0_total; $__section_jsfile_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_jsfile']->value['index']++){
?>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsfiles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_jsfile']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_jsfile']->value['index'] : null)];?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <?php
}
}
?>

        <?php
$__section_cssfile_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cssfiles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cssfile_1_total = $__section_cssfile_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cssfile'] = new Smarty_Variable(array());
if ($__section_cssfile_1_total !== 0) {
for ($__section_cssfile_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cssfile']->value['index'] = 0; $__section_cssfile_1_iteration <= $__section_cssfile_1_total; $__section_cssfile_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cssfile']->value['index']++){
?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssfiles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cssfile']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cssfile']->value['index'] : null)];?>
">
        <?php
}
}
?>

        <title>
            <?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>

        </title>
        <?php echo '<script'; ?>
 type="text/javascript">
          $(document).ready(function() {
            <?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value != '' && empty($_smarty_tpl->tpl_vars['error_message']->value)) {?>
              const breadcrumbs = [<?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value;?>
];

              ReactDOM.render(
                RBreadcrumbs({
                  breadcrumbs: breadcrumbs,
                  baseURL: loris.BaseURL
                }),
                document.getElementById("breadcrumbs")
              );
              document.title = document.title.concat(breadcrumbs.reduce(function (carry, item) {
                return carry.concat(' - ', item.text);
              }, ''));
            <?php }?>

            // Initialize bootstrap tooltip for site affiliations
            $('#site-affiliations').tooltip({
              html: true,
              container: 'body'
            });
          });
        <?php echo '</script'; ?>
>
        <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/jqueryslidemenu.css" rel="Stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/simple-sidebar.css" rel="stylesheet">

         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    </head>
    <?php }?>
    <body>
            <?php if ($_smarty_tpl->tpl_vars['FormAction']->value) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['FormAction']->value;?>
" method="post">
        <?php }?>

    <div id="wrap">
        <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value != "dynamictabs") {?>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav-left">
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-chevron-down" style="color:white"></span>
                    </button>
                    <button type="button" class="navbar-toggle help-button">
                        <span class="sr-only">Toggle navigation</span>
                        <img width=17 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/help.gif">
                    </button>
                   <?php if ($_smarty_tpl->tpl_vars['bvl_feedback']->value) {?>
                   <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-edit" style="color:white"></span>
                    </button>
                   <?php }?>


                   <!-- toggle sidebar in mobile view -->
                    <?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
                        <a id="menu-toggle" href="#" class="navbar-brand">
                            <span class="glyphicon glyphicon-th-list"></span>
                        </a>
                    <?php }?>

                   <!-- toggle feedback in mobile view -->


                    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/">LORIS<?php if ($_smarty_tpl->tpl_vars['sandbox']->value) {?>: DEV<?php }?></a>
               </div>
               <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['Visible'] == 1 && $_smarty_tpl->tpl_vars['tab']->value['subtabs']) {?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">
                                        <?php echo $_smarty_tpl->tpl_vars['tab']->value['Label'];?>
 <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['subtabs'], 'mySubtab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mySubtab']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['mySubtab']->value['Visible'] == 1) {?>
                                                <?php if (substr($_smarty_tpl->tpl_vars['mySubtab']->value['Link'],0,4) == 'http') {?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['mySubtab']->value['Link'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['mySubtab']->value['Label'];?>

                                                        </a>
                                                    </li>
                                                <?php } else { ?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mySubtab']->value['Link'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['mySubtab']->value['Label'];?>

                                                        </a>
                                                    </li>
                                                <?php }?>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="nav-right">
                        <?php if ($_smarty_tpl->tpl_vars['bvl_feedback']->value) {?>
                        <li class="hidden-xs hidden-sm">
                            <a href="#" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </li>
                        <?php }?>

                        <li class="hidden-xs hidden-sm">
                            <a href="#" class="navbar-brand pull-right help-button">
                                <img width=17 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/help.gif">
                            </a>
                        </li>
                        <li class="nav">
                            <a href="#"
                               id="site-affiliations"
                               data-toggle="tooltip"
                               data-placement="bottom"
                               title="<?php echo $_smarty_tpl->tpl_vars['user']->value['SitesTooltip'];?>
">
                                Site Affiliations: <?php echo $_smarty_tpl->tpl_vars['userNumSites']->value;?>

                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right:25px;">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['Real_name'], ENT_QUOTES, 'UTF-8', true);?>
 <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user_accounts/my_preferences/">
                                        My Preferences
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?logout=true">
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
               </div>
            </nav>
        <?php }?>
        <div id="page" class="container-fluid">
		<?php if ($_smarty_tpl->tpl_vars['control_panel']->value || $_smarty_tpl->tpl_vars['feedback_panel']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
				<div id = "page_wrapper_sidebar" class ="wrapper">
			<?php }?>
		    <div id="bvl_panel_wrapper">
                <!-- Sidebar -->
                            <?php echo $_smarty_tpl->tpl_vars['feedback_panel']->value;?>

			    <?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
                    <div id="sidebar-wrapper" class="sidebar-div">
                       <div id="sidebar-content">
                            <?php echo $_smarty_tpl->tpl_vars['control_panel']->value;?>

                        </div>
                    </div>
		    <?php }?>
                    <!--    Want to wrap page content only when sidebar is in view

                    if not then just put page content in the div #page    -->
        <div id="page-content-wrapper">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value == "dynamictabs") {?>
                <?php if ($_smarty_tpl->tpl_vars['console']->value) {?>
                    <div class="alert alert-warning" role="alert">
                        <h3>Console Output</h3>
                        <div>
                        <pre><?php echo $_smarty_tpl->tpl_vars['console']->value;?>
</pre>
                        </div>
                    </div>
                <?php }?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value != "dynamictabs") {?>
            <div class="page-content inset">

                <?php if ($_smarty_tpl->tpl_vars['console']->value) {?>
                    <div class="alert alert-warning" role="alert">
                        <h3>Console Output</h3>
                        <div>
                        <pre><?php echo $_smarty_tpl->tpl_vars['console']->value;?>
</pre>
                        </div>
                    </div>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value != '' && empty($_smarty_tpl->tpl_vars['error_message']->value)) {?>
                    <div id="breadcrumbs"></div>
                <?php }?>
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['error_message']->value != '') {?>
                                <p>
                                    The following errors occurred while attempting to display this page:
                                    <ul>
                                        <?php
$__section_error_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['error_message']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_error_2_total = $__section_error_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_error'] = new Smarty_Variable(array());
if ($__section_error_2_total !== 0) {
for ($__section_error_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_error']->value['index'] = 0; $__section_error_2_iteration <= $__section_error_2_total; $__section_error_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_error']->value['index']++){
?>
                                            <li>
                                                <strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['error_message']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_error']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_error']->value['index'] : null)];?>

                                                </strong>
                                            </li>
                                        <?php
}
}
?>
                                    </ul>

                                    If this error persists, please
                                    <a target="issue_tracker_url" href="<?php echo $_smarty_tpl->tpl_vars['issue_tracker_url']->value;?>
">
                                        report a bug to your administrator
                                    </a>.
                                </p>
                                <p>
                                    <a href="javascript:history.back()">
                                        Please click here to go back
                                    </a>.
                                </p>
                            <?php }?>

                          <div id="lorisworkspace">
                            <?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

                          </div>
                        </div>
            </div>


            <!-- </div> -->
	</div>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

            <?php }?>
		</div>

	</div>

        <?php if ($_smarty_tpl->tpl_vars['control_panel']->value || $_smarty_tpl->tpl_vars['feedback_panel']->value) {?>
        </div></div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['dynamictabs']->value != "dynamictabs") {?>
            <?php if ($_smarty_tpl->tpl_vars['control_panel']->value) {?>
            <div id="footer" class="footer navbar-bottom wrapper">
            <?php } else { ?>
            <div id="footer" class="footer navbar-bottom">
            <?php }?>
                <center>
                    <ul id="navlist" style="margin-top: 5px; margin-bottom: 2px;">
                        <li id="active">
                            |
                        </li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['link']->value['windowName'];?>
" rel="noopener noreferrer">
                                        <?php echo $_smarty_tpl->tpl_vars['link']->value['label'];?>

                                    </a>
                                    |
                                </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </center>
                <div align="center" colspan="1">
                    Powered by LORIS &copy; <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
. All rights reserved.
                </div>
      		<div align="center" colspan="1">
                    Created by <a href="http://mcin-cnim.ca/" target="_blank">
                         MCIN
                    </a>
                </div>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['FormAction']->value) {?>
        </form>
        <?php }?>

        <a id="login-modal-button" href="#" data-toggle="modal" data-target="#login-modal" style="display: none;">Login</a>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Login to Your Account
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <font color="red" align="middle" id="login-modal-error" style="display: none;">
                                    Incorrect username or password
                                </font>
                            </div>
                            <div class="form-group col-xs-12">
                                <input id="modal-username" name="username" class="form-control" type="text" value="" placeholder="User">
                            </div>
                            <div class="form-group col-xs-12">
                                <input id="modal-password" name="password" class="form-control" type="password" placeholder="Password">
                            </div>
                            <div class="form-group col-xs-12">
                                <input class="btn btn-primary col-xs-12" id="modal-login" name="login" type="submit" value="Login">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
}
