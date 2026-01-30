<?php /* Smarty version 2.6.18, created on 2026-01-30 18:16:54
         compiled from acp/plugins.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'acp/plugins.html', 18, false),array('modifier', 'datetime', 'acp/plugins.html', 57, false),array('function', 'url', 'acp/plugins.html', 19, false),array('function', 'cycle', 'acp/plugins.html', 50, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "crumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--left column block -->
<div id="ps-main-column">

<div class="ps-column-frame">
<div class="ps-column-header"><a href="" onclick="return false"><span>Plugins Not Installed</span></a></div>
<div id="ps-id-pending-plugins" class="ps-column-content">
<?php $_from = $this->_tpl_vars['pending_plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
<p>
	<label><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['base'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label>
	<span><a id="install-<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['base'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" href="<?php echo smarty_function_url(array('install' => $this->_tpl_vars['p']['base']), $this);?>
" title="Click to install plugin"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/lightning.png" alt="Install Plugin"></a></span>
</p>
<?php endforeach; else: ?>
<p class="msgrow">
	<label>No Pending Plugins</label>
</p>
<?php endif; unset($_from); ?>
</div>
</div>

</div>
<!--end of left column -->

<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">

<?php echo $this->_tpl_vars['message']; ?>
 

<div class="ps-table-frame">
	<div class="ps-frame-header"><a href="" onclick="return false"><span><?php echo $this->_tpl_vars['total_installed']; ?>
 Installed Plugins</span></a></div>
	<div class="ps-table-inner">
		<table class='ps-table ps-plugin-table'>
		<tr>
			<th class="active"><p><a href=""><span class="asc">Order</span></a></p></th>
			<th><p><a href=""><span class="asc">Plugin</span></a></p></th>
			<th><p><a href=""><span class="asc">Version</span></a></p></th>
			<th><p><a href=""><span class="asc">Install Date</span></a></p></th>
			<th><p><a href=""><span class="asc">Controls</span></a></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['installed_plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
		<tr<?php echo smarty_function_cycle(array('name' => 'plugins','values' => ", class='even'",'advance' => false), $this);?>
>
			<td class="idx"><?php echo ''; ?><?php if ($this->_tpl_vars['p']['up']): ?><?php echo '<a href="'; ?><?php echo smarty_function_url(array('move' => 'up','id' => $this->_tpl_vars['p']['plugin']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_up.png" alt="Move Up"></a>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['p']['down']): ?><?php echo '<a href="'; ?><?php echo smarty_function_url(array('move' => 'down','id' => $this->_tpl_vars['p']['plugin']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_down.png" alt="Move Down"></a>'; ?><?php endif; ?><?php echo ''; ?>
</td>
			<td class="item"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['plugin'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['version'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['installdate'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>
</td>
			<td>
<?php if ($this->_tpl_vars['p']['enabled']): ?>
				<a href="<?php echo smarty_function_url(array('disable' => $this->_tpl_vars['p']['plugin']), $this);?>
" title="Click to Disable Plugin"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/lightbulb.png" alt="Disable Plugin"></a>
<?php else: ?>
				<a href="<?php echo smarty_function_url(array('enable' => $this->_tpl_vars['p']['plugin']), $this);?>
" title="Click to Enable Plugin"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/lightbulb_off.png" alt="Enable Plugin"></a>
<?php endif; ?>
				&nbsp;<a id="uninstall-<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['plugin'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" href="<?php echo smarty_function_url(array('uninstall' => $this->_tpl_vars['p']['plugin']), $this);?>
" title="Click to Uninstall Plugin"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/page_delete.png" alt="Delete Plugin"></a>
			</td>
		</tr>
		<tr<?php echo smarty_function_cycle(array('name' => 'plugins','values' => ", class='even'"), $this);?>
>
			<td colspan="5" class="description"><?php echo $this->_tpl_vars['p']['description']; ?>
</td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="5" class="no-data">
			No Plugins Installed
		</td></tr>
<?php endif; unset($_from); ?>

		</table>
	</div>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 