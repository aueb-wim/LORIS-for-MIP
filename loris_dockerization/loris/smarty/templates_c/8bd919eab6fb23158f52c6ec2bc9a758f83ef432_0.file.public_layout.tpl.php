<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:44:02
  from '/var/www/loris/smarty/templates/public_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47ba20a0c83_18363686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd919eab6fb23158f52c6ec2bc9a758f83ef432' => 
    array (
      0 => '/var/www/loris/smarty/templates/public_layout.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da47ba20a0c83_18363686 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/public_layout.css">
  <link type="image/x-icon" rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/favicon.ico">
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
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="flex-wrapper">
        <div class="loris-logo">
          <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/LORIS_logo_white.svg" class="loris-logo" alt="Loris Logo"/>
          </a>
        </div>
        <div class="study-title hidden-xs">
          <?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>

        </div>
        <div class="github-logo">
          <a href="https://github.com/aces/Loris" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/GitHub-Mark-Light-64px.png" alt="Github"/>
          </a>
        </div>
      </div>
    </div>
  </header>

  <section class="main-content">
    <?php echo $_smarty_tpl->tpl_vars['workspace']->value;?>

  </section>

  <footer class="footer">
    Powered by <a href="http://www.loris.ca/" target="_blank">LORIS</a>
    | GPL-3.0 &copy; <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
 <br/>
    Developed at
    <a href="http://www.mni.mcgill.ca" target="_blank">
      Montreal Neurological Institute and Hospital
    </a>
    by <a href="http://mcin-cnim.ca" target="_blank">MCIN</a>
  </footer>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/modernizr/modernizr.min.js"/>
  <?php echo '<script'; ?>
>
    if (!Modernizr.webgl) {
      alert("Please download the latest version of Google Chrome of Mozilla Firefox in order to use Loris!");
    }
  <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
