<?php
/* Smarty version 3.1.33, created on 2019-11-13 22:29:58
  from '/var/www/loris/modules/login/templates/form_passwordexpiry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc67c6a2ab61_19205739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc3eb1b9d0634382d69e9d181a6e3a1f2ca0760' => 
    array (
      0 => '/var/www/loris/modules/login/templates/form_passwordexpiry.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc67c6a2ab61_19205739 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="panel panel-default panel-center">
    <div class="panel-heading">
      <h3 class="panel-title">Update Password</h3>
    </div>
    <div class="panel-body">
      <p><b>Password Strength Rules</b></p>
      <ul>
        <li>The password must be at least 8 characters long</li>
        <li>The password must contain at least 1 letter, 1 number and 1 character from !@#$%^*()</li>
        <li>The password and the user name must not be the same</li>
        <li>The password and the email address must not be the same</li>
      </ul>
      <form method="post">
        <div class="form-group">
          <input type="password" name="password" size="40" class="form-control"
                 placeholder="New Password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" />
        </div>
        <div class="form-group">
          <input type="password" name="confirm" size="40" class="form-control"
                 placeholder="Confirm Password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" />
          <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
            <span id="helpBlock" class="help-block">
                <b class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</b>
              </span>
          <?php }?>
        </div>
        <div class="form-group">
          <input type="submit" name="expiry" class="btn btn-primary btn-block"
                 value="Save"/>
        </div>
        <input type="hidden" name="login" value="true" />
        <input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
      </form>
    </div>
  </div>
</div>
<?php }
}
