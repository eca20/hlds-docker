<?php /* Smarty version 2.6.18, created on 2026-01-30 18:05:10
         compiled from acp/servers_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/servers_edit.html', 19, false),array('modifier', 'escape', 'acp/servers_edit.html', 25, false),)), $this); ?>
<script>
delete_message = "Are you sure you want to delete the server?";
</script>
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


<div class="ps-form-container" id="ps-<?php echo $this->_tpl_vars['page']; ?>
-form">
<div class="ps-form">
<form method="post" action="<?php echo smarty_function_url(array(), $this);?>
">
<fieldset>
<legend><?php if ($this->_tpl_vars['id']): ?>Edit<?php else: ?>New<?php endif; ?> Server</legend>
<?php if ($this->_tpl_vars['errors']['fatal']): ?><div class="err fatal"><h4>Fatal Error</h4><p><?php echo $this->_tpl_vars['errors']['fatal']; ?>
</p></div><?php endif; ?>

<div<?php if ($this->_tpl_vars['errors']['enabled']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-enabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['enabled'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Enabled?</label>
	<label class="for" for="enabled1"><input id="enabled1" name="enabled" value="1" <?php if ($this->_tpl_vars['form']['enabled']): ?>checked="" <?php endif; ?>type="radio" class="radio"> Yes</label>
	<label class="for" for="enabled2"><input id="enabled2" name="enabled" value="0" <?php if (! $this->_tpl_vars['form']['enabled']): ?>checked="" <?php endif; ?>type="radio" class="radio"> No</label>
</div>

<div<?php if ($this->_tpl_vars['errors']['host']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-host"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['host'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Server Host:</label>
	<input name="host" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['host'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field" autocomplete="off">
</div>
<div<?php if ($this->_tpl_vars['errors']['port']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-port"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['port'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Server Port:</label>
	<input name="port" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['port'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field short" autocomplete="off">
</div>

<div<?php if ($this->_tpl_vars['errors']['alt']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-alt"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['alt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Connection IP:</label>
	<input name="alt" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['alt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field" autocomplete="off">
	<p class="small">
		The connection IP is an optional alternate IP (or hostname) to use for connecting to the server. This is useful 
		when a server is on a local LAN with a private IP but has a public IP for Internet users to connect to.
	</p>
</div>

<div<?php if ($this->_tpl_vars['errors']['querytype']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-querytype"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['querytype'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Query Type:</label>
	<select name="querytype" class="field">
<?php $_from = $this->_tpl_vars['querytypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qt'] => $this->_tpl_vars['label']):
?>
		<option value="<?php echo $this->_tpl_vars['qt']; ?>
"<?php if ($this->_tpl_vars['qt'] == $this->_tpl_vars['form']['querytype']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['label']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
	</select>
</div>

<div<?php if ($this->_tpl_vars['errors']['rcon']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-rcon"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['rcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>RCON Password:</label>
	<input name="rcon" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['rcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="password" class="field" autocomplete="off">
</div>

</fieldset>
<fieldset>
<div class="submit">
	<input name="submit" value="1" type="hidden">
	<input name="ref" value="<?php echo $this->_tpl_vars['ref']; ?>
" type="hidden">
	<input name="key" value="<?php echo $this->_tpl_vars['form_key']; ?>
" type="hidden">
	<input name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" type="hidden">
	<input class="btn save" type="submit" value="Save">
<?php if ($this->_tpl_vars['id']): ?>
	<input id="btn-delete" class="btn delete" type="submit" value="Delete" name="del">
<?php endif; ?>
	<input name="test" class="btn test" type="submit" value="Test">
	<input name="cancel" class="btn cancel" type="submit" value="Cancel">
</div>
</fieldset>
</form>
</div>
</div>


</div> 
</div> 
</div> 