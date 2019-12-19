<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:44:02
  from '/var/www/loris/smarty/templates/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47ba2022a15_94546866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd08ee2912e830063186625f7fa35f043b5a4007' => 
    array (
      0 => '/var/www/loris/smarty/templates/404.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da47ba2022a15_94546866 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <h2>404: Not Found</h2>
    <h3><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">Go to main page</a></div>
</div>
<?php }
}
