<?php /* Smarty version 2.6.18, created on 2026-01-30 18:19:35
         compiled from default/overall_header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/overall_header.html', 4, false),array('modifier', 'escape', 'default/overall_header.html', 4, false),array('function', 'url', 'default/overall_header.html', 37, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'PsychoStats') : smarty_modifier_default($_tmp, 'PsychoStats')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="Stormtrooper">
	<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php echo $this->_reg_objects['theme'][0]->rel_links(null);?>

<?php echo $this->_reg_objects['theme'][0]->css_links(null);?>

<?php echo $this->_reg_objects['theme'][0]->js_sources(null);?>

</head>

<body class="psychostats">
<noscript>
	<div id="no-js">
	<div id="error">
		These pages will not display without javascript enabled.
	</div>
	</div>
</noscript>
<div id="ps-container">
	
<!--#OVERALL_HEADER_LOGO#-->
<div id="ps-overall-header">
	<div id="ps-overall-right">
			</div>
	<div id="ps-overall-logo"></div>
</div>
<!---->

<!--#OVERALL_HEADER_MENU#-->
<div id="ps-overall-menu">
<div id="ps-menu-right">
<?php if (! $this->_tpl_vars['maintenance'] && ps_user_is_admin ( ) || $this->_tpl_vars['show_login'] && $this->_tpl_vars['cookieconsent']): ?>
<a id="ps-login-link" href="<?php echo smarty_function_url(array('_base' => 'login.php'), $this);?>
" title="Quick Login Popup"><img id="ps-login-img" src="<?php echo $this->_reg_objects['theme'][0]->parent_url(null);?>
/img/menu-login-icon.png" alt="Login"></a>
<?php endif; ?>
<?php if (! $this->_tpl_vars['maintenance'] || ps_user_is_admin ( )): ?>
<a href="credits.php" title="Credits"><img class="ps-icon" src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/ps_logo_16X16.png" alt="Credits"></a>
<?php endif; ?>
</div>
<ul>
<?php if (! $this->_tpl_vars['maintenance'] || ps_user_is_admin ( )): ?>
<?php if ($this->_tpl_vars['conf']['main']['site_url']): ?>
	<li class="first"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['site_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Go to <?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['site_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Home</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'index.php'), $this);?>
">Players</a></li>
<?php else: ?>
	<li class="first"><a href="<?php echo smarty_function_url(array('_base' => 'index.php'), $this);?>
">Players</a></li>
<?php endif; ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'clans.php'), $this);?>
">Clans</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'weapons.php'), $this);?>
">Weapons</a></li>
<?php if ($this->_tpl_vars['use_roles']): ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'roles.php'), $this);?>
">Roles</a></li>
<?php endif; ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'maps.php'), $this);?>
">Maps</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'awards.php'), $this);?>
">Awards</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'server.php'), $this);?>
">Servers</a></li>
<?php if ($this->_tpl_vars['conf']['theme']['map']['google_key']): ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'overview.php'), $this);?>
">Overview</a></li>
<?php endif; ?>
<?php else: ?>
<?php if ($this->_tpl_vars['conf']['main']['site_url']): ?>
	<li class="first"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['site_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Go to <?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Home</a></li>
<?php else: ?>
	<li class="first"><a href="index.php" title="Home">Home</a></li>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['show_admin'] && $this->_tpl_vars['cookieconsent']): ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'admin/index.php'), $this);?>
">Admin</a></li>
<?php endif; ?>
<?php if (! $this->_tpl_vars['maintenance'] && ! ps_user_logged_in ( ) && $this->_tpl_vars['show_login'] && $this->_tpl_vars['cookieconsent']): ?>
	<li><a href="login.php" title="Login, Register and Reset Password">Login</a></li>
<?php endif; ?>
<?php if (ps_user_logged_in ( )): ?>
	<li><a href="logout.php">Logout</a></li>
<?php endif; ?>
</ul>
</div>
<!---->

<?php if (! $this->_tpl_vars['maintenance'] && ! ps_user_logged_in ( ) && $this->_tpl_vars['cookieconsent']): ?>
<!--#LOGIN_POPUP#-->
<form method="post" action="<?php echo smarty_function_url(array('_base' => 'login.php','_ref' => 1), $this);?>
">
<div id="ps-login-popup" style="display: none">
<div id="ps-login-inner">
	<?php if ($this->_tpl_vars['show_register']): ?><div id="ps-login-reg">Newbie? -- <a href="register.php">Register!</a></div><?php endif; ?>
	<p>
	<label>Username</label>
	<input id="username" name="username" type="text" class="field" value="">
	<input name="submit" value="1" type="hidden">
	<input name="key" value="<?php echo $this->_tpl_vars['form_key']; ?>
" type="hidden">
	</p>
	<p>
	<label>Password</label>
	<input id="password" name="password" type="password" class="field" value="">
	<button type="submit"><img src="<?php echo $this->_reg_objects['theme'][0]->parent_url(null);?>
/img/go.png" alt="go"></button>
	</p>
	<div id="ps-login-options">
		<input id="ps-remember-login" name="autologin" type="checkbox" value="1">
		<label for="ps-remember-login">Remember me!</label>
	</div>
</div>
</div>
</form>
<!---->
<?php else: ?>
<!--#LOGOUT_POPUP#-->
<div id="ps-login-popup" style="display: none">
<div id="ps-login-inner">
	<h4>Logged in as <b><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b></h4>
	<p><a href="<?php echo smarty_function_url(array('_base' => 'logout.php','_ref' => 1), $this);?>
">Click here to logout!</a></p>
</div>
</div>
<!---->
<!--#LOGGEDIN_POPUP#-->
<div id="ps-loggedin-popup" style="display: none">
	Welcome, <b><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><br>
	You have been logged in.<br>
	This window will close in a few seconds.
</div>
<!---->
<?php endif; ?>

<?php if ($this->_tpl_vars['maintenance'] && ps_user_is_admin ( )): ?>
<div id="error"><h1>NOTICE:</h1>PsychoStats is currently in maintenance mode and can only be viewed by users with admin access.</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['notice']): ?>
<div id="error"><?php echo $this->_tpl_vars['notice']; ?>
</div>
<?php endif; ?>