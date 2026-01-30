<?php /* Smarty version 2.6.18, created on 2026-01-30 18:15:44
         compiled from acp/insecure.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'acp/insecure.html', 2, false),array('modifier', 'escape', 'acp/insecure.html', 2, false),)), $this); ?>
<div class="insecure">
	<h3><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Insecure Directory!') : smarty_modifier_default($_tmp, 'Insecure Directory!')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
	<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['dir'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h4>
	<p><?php echo $this->_tpl_vars['message']; ?>
</p>
</div>