<?php /* Smarty version 2.6.18, created on 2026-01-30 18:19:35
         compiled from default/msg/error.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/msg/error.html', 2, false),)), $this); ?>
<div id="error">
	<h1><?php echo ((is_array($_tmp=@$this->_tpl_vars['message_title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Fatal Error') : smarty_modifier_default($_tmp, 'Fatal Error')); ?>
</h1>
	<p><?php echo $this->_tpl_vars['message']; ?>
</p>
</div>