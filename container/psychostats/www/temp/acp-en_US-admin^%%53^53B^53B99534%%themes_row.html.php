<?php /* Smarty version 2.6.18, created on 2026-01-30 18:33:33
         compiled from acp/themes_row.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'acp/themes_row.html', 1, false),array('function', 'url', 'acp/themes_row.html', 16, false),array('modifier', 'escape', 'acp/themes_row.html', 4, false),array('modifier', 'default', 'acp/themes_row.html', 9, false),)), $this); ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => ", even",'advance' => false), $this);?>
">
			<td class="preview" rowspan="2">
<?php if ($this->_tpl_vars['t']['image']): ?>
	<div class="preview"><img src="../themes/<?php echo $this->_tpl_vars['t']['name']; ?>
/img/<?php echo ((is_array($_tmp=$this->_tpl_vars['t']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" width="50" alt="" title="Preview of  <?php echo ((is_array($_tmp=$this->_tpl_vars['t']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></div>
<?php else: ?>
	<em>none</em>
<?php endif; ?>
			</td>
			<td class="<?php if ($this->_tpl_vars['child']): ?>child <?php endif; ?>item"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['t']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['t']['name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['t']['name'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['t']['version'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['t']['author'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				<?php if ($this->_tpl_vars['t']['website']): ?><a title="Goto to author's website" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['t']['website'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/house.png" alt="Goto Author's Website"></a><?php endif; ?>
			</td>
			<td rowspan="2" class="ctrl">
<?php if ($this->_tpl_vars['t']['name'] != $this->_tpl_vars['conf']['main']['theme']): ?>
				<a href="<?php echo smarty_function_url(array('id' => $this->_tpl_vars['t']['name'],'action' => 'default'), $this);?>
" title="Click to make this the default theme"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/eye-off.png" alt="Make Theme Default"></a>
<?php else: ?>
				<abbr title="This is the default theme"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/eye.png" alt="Default Theme"></abbr>
<?php endif; ?>
<?php if ($this->_tpl_vars['t']['enabled']): ?>
				<a href="<?php echo smarty_function_url(array('id' => $this->_tpl_vars['t']['name'],'action' => 'disable'), $this);?>
" title="Click to Disable Theme"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/lightbulb.png" alt="Disable Theme"></a>
<?php else: ?>
				<a href="<?php echo smarty_function_url(array('id' => $this->_tpl_vars['t']['name'],'action' => 'enable'), $this);?>
" title="Click to Enable Theme"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/lightbulb_off.png" alt="Enable Theme"></a>
<?php endif; ?>
<?php if ($this->_tpl_vars['t']['name'] != 'default'): ?>
				&nbsp;&nbsp;&nbsp;<a id="uninstall-<?php echo ((is_array($_tmp=$this->_tpl_vars['t']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" href="<?php echo smarty_function_url(array('id' => $this->_tpl_vars['t']['name'],'action' => 'uninstall'), $this);?>
" title="Click to Uninstall Theme"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/delete.png" alt="Uninstall Theme"></a>
<?php endif; ?>
			</td>
		</tr>
		<tr class="<?php echo smarty_function_cycle(array('values' => ", even"), $this);?>
">
			<td colspan="3" class="<?php if ($this->_tpl_vars['child']): ?>child <?php endif; ?>description-bottom"><?php echo $this->_tpl_vars['t']['description']; ?>
</td>
		</tr>