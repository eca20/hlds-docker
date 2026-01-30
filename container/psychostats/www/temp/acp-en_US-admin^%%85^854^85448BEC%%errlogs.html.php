<?php /* Smarty version 2.6.18, created on 2026-01-30 18:15:37
         compiled from acp/errlogs.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/errlogs.html', 18, false),array('function', 'cycle', 'acp/errlogs.html', 43, false),array('modifier', 'escape', 'acp/errlogs.html', 22, false),array('modifier', 'datetime', 'acp/errlogs.html', 44, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "crumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="ps-main-column">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manage_menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">

<div class="ps-table-frame no-ani">
	<div class="ps-table-header">
		<div id="filter" class="filter">
			<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
				<input type="submit" 	value="Download as Text" class="btn left">
				<input name="start" 	value="<?php echo $this->_tpl_vars['start']; ?>
" type="hidden">
				<input name="limit" 	value="<?php echo $this->_tpl_vars['limit']; ?>
" type="hidden">
				<input name="filter" 	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden">
				<input name="view" 	value="text" type="hidden">
			</form>
			<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
				<input name="filter" 	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" size="20" class="field">
				<input type="submit" 	value="Filter" class="btn">
				<input name="start" 	value="<?php echo $this->_tpl_vars['start']; ?>
" type="hidden">
				<input name="limit" 	value="<?php echo $this->_tpl_vars['limit']; ?>
" type="hidden">
			</form>
		</div>
		<?php echo $this->_tpl_vars['pager']; ?>

	</div>
	<div class="ps-table-inner">
		<table class='ps-table ps-errlog-table'>
		<tr>
			<th class="active"><p><a href=""><span class="desc">Timestamp</span></a></p></th>
			<th><p><a href=""><span>Severity</span></a></p></th>
			<th><p><a href=""><span>User</span></a></p></th>
			<th><p><a href=""><span>Message</span></a></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['l']):
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
>
			<td class="error-log"><?php echo ((is_array($_tmp=$this->_tpl_vars['l']['timestamp'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>
</td>
			<td><?php echo $this->_tpl_vars['l']['severity']; ?>
</td>
			<td><?php if ($this->_tpl_vars['l']['userid']): ?><a href="<?php echo smarty_function_url(array('_base' => 'users.php','_ref' => 1,'filter' => $this->_tpl_vars['l']['username']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['l']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php else: ?>-<?php endif; ?></td>
			<td class="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['l']['msg'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="4" class="no-data">
			No Error Logs Found
		</td></tr>
<?php endif; unset($_from); ?>
		</table>
	</div>
	<?php if ($this->_tpl_vars['pager']): ?><div class="ps-table-footer"><?php echo $this->_tpl_vars['pager']; ?>
</div><?php endif; ?>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 