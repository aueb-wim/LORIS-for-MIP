<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:41:25
  from '/var/www/loris/smarty/templates/install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da47b05f2a6b3_33407126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fbe2e4dd5820f3ed8c1c4b8ec2a30dc56534350' => 
    array (
      0 => '/var/www/loris/smarty/templates/install.tpl',
      1 => 1563903445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da47b05f2a6b3_33407126 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
            <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/bootstrap/css/custom-css.css">

        <title>Loris SQL Installer</title>
    </head>
    <body>
    <div class="container">
        <div class="page-header">
            <h1>LORIS Installer<?php if ($_smarty_tpl->tpl_vars['PageName']->value) {?>: <?php echo $_smarty_tpl->tpl_vars['PageName']->value;
}?></h1>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="alert alert-danger error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['console']->value) {?><div class="alert alert-warning console"><pre><?php echo $_smarty_tpl->tpl_vars['console']->value;?>
</pre></div><?php }?>
        <div>
                <?php if ($_smarty_tpl->tpl_vars['Page']->value == "MySQLUserPrompt") {?>
            <p>
               Successfully created MySQL database and sourced the schema.
               Now, we need to create a non-administer MySQL username for LORIS to use.
               This user will be created if it does not already exist.
            </p>
            <p>
               This username and password will be saved to the LORIS config
               file, so it's best to make sure you're using a unique password.
            </p>
            <p>
               If you're feeling uninspired, here's a randomly generated password:
                <code><?php echo $_smarty_tpl->tpl_vars['SamplePassword']->value;?>
</code>.
            </p>
        <form method="post">
            <fieldset>
                <legend>LORIS MySQL User</legend>
            <div>
                <label for="lorismysqluser">Username: <input type="text" name="lorismysqluser" placeholder="ie. lorisuser" value="<?php echo $_smarty_tpl->tpl_vars['lorismysqluser']->value;?>
">
            </div>
            <div>
                <label for="lorismysqlpassword">Password: <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['lorismysqlpassword']->value;?>
" name="lorismysqlpassword" placeholder="ie. LORISISTHEBEST!!!1">
            </div>
            <div>
                <label for="lorismysql_already_created">Already Created:
                <input type="checkbox" name="lorismysql_already_created" value="on" <?php echo $_smarty_tpl->tpl_vars['lorismysql_already_created']->value == 'on' ? 'checked' : '';?>
/>
            </div>
            </fieldset>
            <div>
                Check "<strong>Already Created</strong>" only if the appropriate mysql user has already been created!<br/>
                Here is a list of required privileges for that user:<br/>
                <code>SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, REFERENCES, CREATE TEMPORARY TABLES, LOCK TABLES</code>
            </div>
            <hr/>
            <p>
               We also need to set the username and password for the default
               <em>LORIS</em> admin account. This is the account that you will
               use to login to the LORIS frontend. Here's another password that
               you can use for that account if you don't have something else
               in mind: <code><?php echo $_smarty_tpl->tpl_vars['SamplePassword2']->value;?>
</code>.
            </p>
            <fieldset>
                <legend>LORIS Front End Admin</legend>
            <div>
                <label for="frontenduser">Username: <input type="text" name="frontenduser" placeholder="ie. myname" value="<?php echo $_smarty_tpl->tpl_vars['frontenduser']->value;?>
">
            </div>
            <div>
                <label for="frontendpassword">Password: <input type="password" name="frontendpassword" placeholder="ie. LORISISSTILLTHEBEST!!1" value="<?php echo $_smarty_tpl->tpl_vars['frontendpassword']->value;?>
">
            </div>
            </fieldset>
            <input type="hidden" name="formname"        value="createmysqlaccount" />
            <input type="hidden" name="dbname"          value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" />
            <input type="hidden" name="dbhost"          value="<?php echo $_smarty_tpl->tpl_vars['dbhost']->value;?>
" />
            <input type="hidden" name="dbadminuser"     value="<?php echo $_smarty_tpl->tpl_vars['dbadminuser']->value;?>
" />
            <input type="hidden" name="dbadminpassword" value="<?php echo $_smarty_tpl->tpl_vars['dbadminpassword']->value;?>
" />
            <div>
                <input type="submit" />
            </div>
        </form>
    <?php } elseif ($_smarty_tpl->tpl_vars['Page']->value == "Done") {?>
        <?php if ($_smarty_tpl->tpl_vars['configfile']->value) {?>
            <h2>Congratulations! You're done</h2>
            <p>Wrote LORIS config file to <?php echo $_smarty_tpl->tpl_vars['configfile']->value;?>
.</p>
        <?php } else { ?>
            <h2>Almost done!</h2>
            <p>The LORIS username was configured, but the web server
               wasn't able to write to the file <?php echo $_smarty_tpl->tpl_vars['configlocation']->value;?>
.</p>
            <p>Please copy and paste the following into that file
               on the server in which this web server is running or
               contact your system administer for help:</p>
            <div>
                <code><pre><?php echo $_smarty_tpl->tpl_vars['configcontent']->value;?>
</pre></code>
            </div>
        <?php }?>
            <p>
              <?php if ($_smarty_tpl->tpl_vars['configfile']->value) {?>
                You should now be able to
              <?php } else { ?>
                After that you should be able to
              <?php }?> access LORIS by visiting
              <a href="<?php echo $_smarty_tpl->tpl_vars['lorisurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lorisurl']->value;?>
</a> and logging in
              with the front end admin username and password you
              configured on the previous page.
            </p>
    <?php } else { ?>
                <p>Welcome to the LORIS installer.</p>
        <p>This module is the last step in installing LORIS, before
        proceeding to do your study configuration.</p>
        <p>This installer will set up the default users, create the SQL
        database and load the LORIS database schema, set up some basic
        server configuration, and reset the default LORIS username and
        password.
        <p>In order to proceed you'll need the following information:
        <ul>
            <li style="padding: 5px">
                A MySQL hostname that you'll be installing
                LORIS on, which is accessible from this server.
            </li>
            <li style="padding: 5px">
                A MySQL username and password on that server which
                has permissions to create databases, tables, and users
                unless the database, tables and/or users already exists

                This user shoud have <strong>ALL</strong> privileges granted for the database specified.
                <br/>
                * <i>This username and password will not be saved, but is
                only used for installing LORIS.</i>
            </li>
            <li style="padding: 5px">
                The database name for LORIS to use. It's best to name
                your databases after the project being hosted, but if
                you're unsure it's safe to use the default value of
                "LORIS". This database must <strong>not</strong> already
                exist in MySQL.
            </li>
        </ul></p>
        <p>Let's get started.</p>
        <form method="post">
            <fieldset>
                <legend>MySQL Connection Information</legend>
            <div>
                <div class="col-md-2">
                    <label for="serverhost">Server Hostname:</label>
                </div>
                <div class="col-md-10">
                    <input id="serverhost" value="<?php echo $_smarty_tpl->tpl_vars['dbhost']->value;?>
" type="text" name="dbhost" placeholder="ie. localhost">
                </div>
            </div>
            <div>
                <div class="col-md-2">
                    <label for="serveruser">Admin Username:</label>
                </div>
                <div class="col-md-10">
                    <input id="serveruser" value="<?php echo $_smarty_tpl->tpl_vars['dbadminuser']->value;?>
" name="dbadminuser" type="text" placeholder="ie. root">
                </div>
            </div>
            <div>
                <div class="col-md-2">
                    <label for="serverpassword">Admin Password:</label>
                </div>
                <div class="col-md-10">
                    <input id="serverpassword" value="<?php echo $_smarty_tpl->tpl_vars['dbadminpassword']->value;?>
" type="password" name="dbadminpassword" placeholder="ie. LORISISTHEBEST!!!1">
                </div>
            </div>
            <div>
                <div class="col-md-2">
                    <label for="dbname">Database name:</label>
                </div>
                <div class="col-md-10">
                    <input id="dbname" value="<?php if ($_smarty_tpl->tpl_vars['dbname']->value) {
echo $_smarty_tpl->tpl_vars['dbname']->value;
} else { ?>LORIS<?php }?>" type="text" name="dbname">
                </div>
            </div>
            </fieldset>
            <fieldset>
                <legend>Options</legend>
            <div>
                <div class="col-md-2">
                    <label for="use_existing_database">Use existing database:</label>
                </div>
                <div class="col-md-9">
                    <input type="checkbox" id="use_existing_database" name="use_existing_database" value="on" <?php echo $_smarty_tpl->tpl_vars['use_existing_database']->value == 'on' ? 'checked' : '';?>
/>
                                        Check this if the database already exists but does not have Loris installed yet
                </div>
            </div>
            <div>
                <div class="col-md-2">
                    <label for="use_existing_tables">Use existing tables:</label>
                </div>
                <div class="col-md-10">
                    <input type="checkbox" id="use_existing_tables" name="use_existing_tables" value="on" <?php echo $_smarty_tpl->tpl_vars['use_existing_tables']->value == 'on' ? 'checked' : '';?>
/>
                                        Check this if you already installed Loris at the specified database
                </div>
            </div>
            <div>
                <div class="col-md-2">
                    <label for="use_existing_configs">Use existing configs:</label>
                </div>
                <div class="col-md-10">
                    <input type="checkbox" id="use_existing_configs" name="use_existing_configs" value="on" <?php echo $_smarty_tpl->tpl_vars['do_not_update_config']->value == 'on' ? 'checked' : '';?>
/>
                                        Check this if you don't want to update the configuration.
                                    <em>(You really should update the configuration if possible, though)</em>
                </div>
            </div>
            </fieldset>
            <input type="hidden" name="formname" value="validaterootaccount" />
<hr/>
            <div class="col-md-12">
                <input class="btn btn-submit btn-default" type="submit" />
            </div>
        </form>
    <?php }?>
    </div>
    </div>
    </body>
</html>
<?php }
}
