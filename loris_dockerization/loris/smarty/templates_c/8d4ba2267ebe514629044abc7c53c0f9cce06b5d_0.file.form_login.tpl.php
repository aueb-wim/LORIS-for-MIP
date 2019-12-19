<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:44:02
  from '/var/www/loris/modules/login/templates/form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47ba208b1d4_18604281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d4ba2267ebe514629044abc7c53c0f9cce06b5d' => 
    array (
      0 => '/var/www/loris/modules/login/templates/form_login.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da47ba208b1d4_18604281 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <section class="col-md-4 col-md-push-8">
      <div class="panel panel-default login-panel">
        <div class="panel-heading">
          <h3 class="panel-title">Login to LORIS</h3>
        </div>
        <div class="panel-body">
          <?php if ($_smarty_tpl->tpl_vars['study_logo']->value) {?>
            <section class="study-logo">
              <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['study_logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>
"/>
            </section>
          <?php }?>
          <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="helpBlock" />
              <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
                <span id="helpBlock" class="help-block">
                    <b class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</b>
                </span>
              <?php }?>
            </div>
            <div class="form-group">
              <input type="submit" name="login" class="btn btn-primary btn-block" value="Login" />
            </div>
          </form>
          <div class="help-links">
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login/password-reset/">Forgot your password?</a><br/>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login/request-account/">Request Account</a>
          </div>
          <div class="help-text">
            A WebGL-compatible browser is required for full functionality (Mozilla Firefox, Google Chrome)
          </div>
        </div>
      </div>
    </section>
    <section class="col-md-8 col-md-pull-4">
      <div class="panel panel-default study-panel">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['study_title']->value;?>
</h3>
        </div>
        <div class="panel-body">
          <section class="study-description">
            <p><?php echo $_smarty_tpl->tpl_vars['study_description']->value;?>
</p>
          </section>
        </div>
      </div>
    </section>
  </div>
</div>
<?php }
}
