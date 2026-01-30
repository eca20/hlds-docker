<?php /* Smarty version 2.6.18, created on 2026-01-30 18:15:44
         compiled from acp/conf.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/conf.html', 25, false),array('function', 'confsection', 'acp/conf.html', 33, false),array('function', 'confvarlabel', 'acp/conf.html', 85, false),array('function', 'confvarinput', 'acp/conf.html', 86, false),array('modifier', 'ucfirst', 'acp/conf.html', 25, false),array('modifier', 'escape', 'acp/conf.html', 25, false),array('modifier', 'nl2br', 'acp/conf.html', 88, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "crumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['install_dir_insecure']): ?> 	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'insecure.html', 'smarty_include_vars' => array('title' => 'Insecure Install Directory','dir' => $this->_tpl_vars['install_dir'],'message' => 'The installation directory should be removed after installation is completed! If you do not remove this directory anyone will be able to access your database!!')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!-- admin menu -->
<div id="ps-main-column">
<div class="ps-column-frame">
<div class="ps-column-header"><a href="" onclick="return false"><span>Configuration Menu</span></a></div>
<div class="ps-column-content">
<dl id="ps-admin-menu">
<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conftype'] => $this->_tpl_vars['ct_section']):
?>
	<dt <?php if ($this->_tpl_vars['conftype'] == $this->_tpl_vars['ct']): ?>id="menu-general"<?php endif; ?> class="folder first <?php if ($this->_tpl_vars['conftype'] == $this->_tpl_vars['ct']): ?><?php if (is_array ( $this->_tpl_vars['section_errors'] ) && $this->_tpl_vars['section_errors']['general']): ?>err <?php endif; ?><?php if ($this->_tpl_vars['s'] == 'general'): ?>sel<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['conftype'] == $this->_tpl_vars['ct']): ?>
			<a id="link-general" href="<?php echo smarty_function_url(array('ct' => $this->_tpl_vars['conftype']), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['conftype'])) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		<?php else: ?>
			<a href="<?php echo smarty_function_url(array('ct' => $this->_tpl_vars['conftype'],'q' => $this->_tpl_vars['q']), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['conftype'])) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		<?php endif; ?>
	</dt>
	<?php $_from = $this->_tpl_vars['ct_section']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sec']):
?>
		<dd id="menu-<?php echo ((is_array($_tmp=$this->_tpl_vars['sec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="edit <?php echo ((is_array($_tmp=$this->_tpl_vars['sec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (is_array ( $this->_tpl_vars['section_errors'] ) && $this->_tpl_vars['section_errors'][$this->_tpl_vars['sec']]): ?> err <?php endif; ?><?php if ($this->_tpl_vars['s'] == $this->_tpl_vars['sec']): ?> sel<?php endif; ?>"><?php echo ''; ?><?php if ($this->_tpl_vars['conftype'] == $this->_tpl_vars['ct']): ?><?php echo '<a id="link-'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['sec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" href="#">'; ?><?php echo smarty_function_confsection(array('var' => 'label','ct' => $this->_tpl_vars['conftype'],'sec' => $this->_tpl_vars['sec']), $this);?><?php echo '</a>'; ?><?php else: ?><?php echo '<a href="'; ?><?php echo smarty_function_url(array('ct' => $this->_tpl_vars['conftype'],'s' => $this->_tpl_vars['sec'],'q' => $this->_tpl_vars['q']), $this);?><?php echo '">'; ?><?php echo smarty_function_confsection(array('var' => 'label','ct' => $this->_tpl_vars['conftype'],'sec' => $this->_tpl_vars['sec']), $this);?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?>
</dd>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; else: ?>
	<dt>No matching config</dt>
<?php endif; unset($_from); ?>
</dl>
</div>
</div>

</div>

<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">

<?php echo $this->_tpl_vars['message']; ?>


<div id="conf-search">
	<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
		Search Config: <input name="q" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['q'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field search">
	</form>
</div>

<div class="ps-tabs">
<ul style="display: none">
	<li id="tab-general" class="<?php if (is_array ( $this->_tpl_vars['section_errors'] ) && $this->_tpl_vars['section_errors']['general']): ?>err <?php endif; ?><?php if ($this->_tpl_vars['s'] == 'general'): ?>sel<?php endif; ?>"><a href="#"><?php echo smarty_function_confsection(array('var' => 'label','sec' => 'general','ct' => $this->_tpl_vars['ct']), $this);?>
</a></li>
<?php $_from = $this->_tpl_vars['section']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sec']):
?>
	<li id="tab-<?php echo ((is_array($_tmp=$this->_tpl_vars['sec'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="<?php if (is_array ( $this->_tpl_vars['section_errors'] ) && $this->_tpl_vars['section_errors'][$this->_tpl_vars['sec']]): ?>err <?php endif; ?><?php if ($this->_tpl_vars['s'] == $this->_tpl_vars['sec']): ?>sel<?php endif; ?>"><a href="#"><?php echo smarty_function_confsection(array('var' => 'label','sec' => $this->_tpl_vars['sec'],'ct' => $this->_tpl_vars['ct']), $this);?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>

<div id="ps-conf-form">
<div class="ps-form">
<form id='form' action="<?php echo smarty_function_url(array(), $this);?>
" method="post">
<?php $_from = $this->_tpl_vars['conf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conf_key'] => $this->_tpl_vars['conf_options']):
?>
<div id="div-<?php echo $this->_tpl_vars['conf_key']; ?>
" class="form-div"<?php if ($this->_tpl_vars['conf_key'] != $this->_tpl_vars['s']): ?> style="display: none"<?php endif; ?>>
	<div class="section-desc"><?php echo smarty_function_confsection(array('var' => 'value','ct' => $this->_tpl_vars['ct'],'sec' => $this->_tpl_vars['conf_key']), $this);?>
</div>
	<fieldset>
<?php if ($this->_tpl_vars['errors']['fatal']): ?><div class="err fatal"><h4>Fatal Error</h4><p><?php echo $this->_tpl_vars['errors']['fatal']; ?>
</p></div><?php endif; ?>
<?php $_from = $this->_tpl_vars['conf_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['o']):
?>
<?php if (! $this->_tpl_vars['o']['locked']): ?>
		<div id="row-<?php echo $this->_tpl_vars['o']['id']; ?>
" <?php if ($this->_tpl_vars['errors'][$this->_tpl_vars['o']['id']]): ?> class="err"<?php endif; ?>>
<?php if ($this->_tpl_vars['advanced_config']): ?>
			<a href="<?php echo smarty_function_url(array('_base' => 'var.php','id' => $this->_tpl_vars['o']['id'],'del' => 1), $this);?>
" class="del"><img class="del"  src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/delete.png" alt="Delete"></a>
			<a href="<?php echo smarty_function_url(array('_base' => 'var.php','id' => $this->_tpl_vars['o']['id']), $this);?>
"><img class="edit" src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/pencil.png" alt="Edit"></a>
<?php endif; ?>
			<?php if ($this->_tpl_vars['errors'][$this->_tpl_vars['o']['id']]): ?><p class="err" id="err-<?php echo $this->_tpl_vars['o']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors'][$this->_tpl_vars['o']['id']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p><?php endif; ?>
			<?php echo smarty_function_confvarlabel(array('var' => $this->_tpl_vars['o']), $this);?>

			<?php echo smarty_function_confvarinput(array('var' => $this->_tpl_vars['o']), $this);?>

<?php if ($this->_tpl_vars['o']['help']): ?>
			<div class="var-help" id="help-<?php echo $this->_tpl_vars['o']['id']; ?>
" style="display: none"><?php echo ((is_array($_tmp=$this->_tpl_vars['o']['help'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
<?php endif; ?>
		</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	</fieldset>
</div>
<?php endforeach; endif; unset($_from); ?>

		<fieldset>
		<div class="submit">
			<input name="submit" value="1" type="hidden">
			<input name="key" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form_key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden">
			<input name="ct" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ct'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden">
			<input name="s" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['s'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden">
			<input name="q" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['q'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden">
			<input class="btn save" type="submit" value="Save">
			<input name="cancel" class="btn cancel" type="submit" value="Cancel">
<?php if ($this->_tpl_vars['advanced_config']): ?>
			<input name="new" class="btn new" type="submit" value="New Variable">
<?php endif; ?>

		</div>
	</fieldset>
</form>
</div>
</div>
</div> </div> 
	<div class="clear"></div>
</div> 