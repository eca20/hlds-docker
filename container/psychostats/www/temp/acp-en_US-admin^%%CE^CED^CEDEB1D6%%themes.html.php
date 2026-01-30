<?php /* Smarty version 2.6.18, created on 2026-01-30 18:33:33
         compiled from acp/themes.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/themes.html', 16, false),array('modifier', 'escape', 'acp/themes.html', 21, false),array('modifier', 'truncate', 'acp/themes.html', 68, false),array('modifier', 'abbrnum', 'acp/themes.html', 72, false),array('modifier', 'upper', 'acp/themes.html', 76, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "crumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">

<?php echo $this->_tpl_vars['message']; ?>
 

<?php if ($this->_tpl_vars['allow']['install']): ?>
<div class="ps-theme-install">
<form action="<?php echo smarty_function_url(array(), $this);?>
" method="post">
	<div><h2>Install new theme:</h2></div>
	<?php if ($this->_tpl_vars['submit'] && ! $this->_tpl_vars['confirm']): ?>		<div>
		<label>XML URL Location:</label>
		<span><strong><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></strong></span>
		<input name="submit" value="1" type="hidden">
		<input name="url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden">
	</div>
	<div>&nbsp;</div>
	<div><h2>Please confirm theme installation!</h2></div>
	<div>
		Are you sure you want to install this theme?
		<input name="confirm" value="Yes" type="submit" class="btn">
		/ 
		<input name="cancel"  value="No" type="submit" class="btn">
		<p><strong>Themes should only be installed from trusted sources!</strong></p>
	</div>
<?php if ($this->_tpl_vars['newtheme']['theme_exists']): ?>
	<div class="theme-warn">
		<p>
			<strong>Warning:</strong> This theme already exists on the local server. 
			If you choose to install this theme it will overwrite the existing theme on your server.
			This is ok if you're installing a newer version.
		</p>
	</div>
<?php endif; ?>
	<div>&nbsp;</div>
	<div class="theme-info">
		<?php if ($this->_tpl_vars['newtheme']['image']): ?><div class="image"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="No preview available" title="Preview of <?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></div><?php endif; ?>
		<div>
			<label>Short Name:</label>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if ($this->_tpl_vars['newtheme']['parent']): ?><em>(parent: <?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['parent'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</em><?php endif; ?></span>
		</div>
		<div>
			<label>Title:</label>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
		</div>
		<div>
			<label>Version:</label>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['version'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
		</div>
		<div>
			<label>Author:</label>
			<?php if ($this->_tpl_vars['newtheme']['_author']['email']): ?>
			<span><a href="mailto:<?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['_author']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['author'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span>
			<?php else: ?>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['author'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
			<?php endif; ?>
		</div>
		<div>
			<label>File:</label>
			<span><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newtheme']['file'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '44', '...', true, true) : smarty_modifier_truncate($_tmp, '44', '...', true, true)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span>
		</div>
		<div>
			<label>File Size:</label>
			<span><?php if ($this->_tpl_vars['newtheme']['_file']['size']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['_file']['size'])) ? $this->_run_mod_handler('abbrnum', true, $_tmp) : smarty_modifier_abbrnum($_tmp)); ?>
<?php else: ?><em>Unknown</em><?php endif; ?></span>
		</div>
		<div>
			<label>File Type:</label>
			<span><?php if ($this->_tpl_vars['newtheme']['_file']['type']): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newtheme']['_file']['type'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><em>Unknown</em><?php endif; ?></span>
		</div>
		<div class="theme-desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['newtheme']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
		<div class="clear"></div>
	</div>
	<?php else: ?> 	<div class="row">
		<label>XML URL Location:</label>
		<input name="url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field">
		<input name="submit" value="Fetch" type="submit" class="btn">
	</div>
<?php if ($this->_tpl_vars['theme_dirs']): ?>
	<div class="row-sep">
		<p>
		You can also reinstall a local theme in the list below. 
		</p>
		<p>
		These themes are already in your themes directory but are not installed in your database.
		</p>
	</div>
	<div class="row">
		<label>Select Theme:</label>
		<select name="dir">
			<option value="">Select theme to reinstall&nbsp;&nbsp;</option>
	<?php $_from = $this->_tpl_vars['theme_dirs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['d']['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['d']['directory'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</option>
	<?php endforeach; endif; unset($_from); ?>
		</select>
		<input name="reinstall" value="Reinstall" type="submit" class="btn">
	</div>
<?php endif; ?>
	<?php endif; ?>
</form>
</div>
<?php else: ?>
		<div class="warning" style="width: 90%; margin: 0 auto 1em;">
		<h4>Themes can not be installed!</h4>
		<p>Your server environment will not allow new themes to be installed due to the following reasons.</p>
		<ul>
<?php if (! $this->_tpl_vars['allow']['url']): ?>			<li>allow_url_fopen INI setting is disabled. See: <a href="http://php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen">php:allow_url_fopen</a></li><?php endif; ?>
<?php if (! $this->_tpl_vars['allow']['write']): ?>			<li>Theme directory <em><?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['template_dir'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em> is not writable by web server. Please fix permissions.</li><?php endif; ?>
		</ul>
	</div>
<?php endif; ?>

<div class="ps-table-frame">
	<div class="ps-frame-header"><a href="" onclick="return false"><span><?php echo $this->_tpl_vars['total_themes']; ?>
 Installed Themes</span></a></div>
	<div class="ps-table-inner">
		<table class='ps-table ps-theme-table'>
		<tr>
			<th><p><span class="asc"></span>Preview</p></th>
			<th class="active"><p><a href=""><span class="asc">Theme</span></a></p></th>
			<th><p><a href=""><span class="asc">Version</span></a></p></th>
			<th><p><a href=""><span class="asc">Author</span></a></p></th>
			<th class="ctrl"><p><a href=""><span class="asc">Controls</span></a></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes_row.html', 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_from = $this->_tpl_vars['t']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes_row.html', 'smarty_include_vars' => array('t' => $this->_tpl_vars['c'],'child' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; else: ?>
		<tr><td colspan="5" class="no-data">
			No Themes Installed
		</td></tr>
<?php endif; unset($_from); ?>

		</table>
	</div>
</div>

</div> </div> 
	<div class="clear"></div>
</div> 