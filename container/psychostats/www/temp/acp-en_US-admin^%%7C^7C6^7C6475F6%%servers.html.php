<?php /* Smarty version 2.6.18, created on 2026-01-30 18:05:08
         compiled from acp/servers.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/servers.html', 19, false),array('function', 'cycle', 'acp/servers.html', 36, false),array('modifier', 'escape', 'acp/servers.html', 41, false),array('modifier', 'default', 'acp/servers.html', 42, false),)), $this); ?>
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
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'ajax.html', 'smarty_include_vars' => array('float' => 'left','size' => 'small-snake')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<form action="<?php echo smarty_function_url(array('_base' => 'servers_edit.php'), $this);?>
" method="get">
				<input type="submit" value="New Server" class="btn">
			</form>
		</div>
		<?php echo $this->_tpl_vars['pager']; ?>

	</div>
	<div class="ps-table-inner">
		<table id='srv-table' class='ps-table ps-server-table'>
		<tr class='hdr'>
			<th class="active"><p><span class="asc">Order</span></p></th>
			<th><p><span class="asc">Server Host</span></p></th>
			<th><p><span class="asc">Conn IP</span></p></th>
			<th><p><span class="asc">Query</span></p></th>
			<th><p><span class="asc">Rcon</span></p></th>
			<th><p><span class="asc"><abbr title="Enabled?">?</abbr></span></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
>
			<td class="idx"><?php echo '<a '; ?><?php if (! $this->_tpl_vars['s']['up']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="up" href="'; ?><?php echo smarty_function_url(array('move' => 'up','id' => $this->_tpl_vars['s']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_up.png" alt="Move Up"></a><a '; ?><?php if (! $this->_tpl_vars['s']['down']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="dn" href="'; ?><?php echo smarty_function_url(array('move' => 'down','id' => $this->_tpl_vars['s']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_down.png" alt="Move Down"></a>'; ?>
</td>
			<td class="item"><a href="<?php echo smarty_function_url(array('_base' => 'servers_edit.php','id' => $this->_tpl_vars['s']['id']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['s']['host'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
:<?php echo $this->_tpl_vars['s']['port']; ?>
</a></td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['s']['alt'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['s']['querytype'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['s']['rcon']): ?>accept<?php else: ?>stop<?php endif; ?>.png" alt="<?php if ($this->_tpl_vars['s']['rcon']): ?>Accept<?php else: ?>Stop<?php endif; ?>"></td>
			<td><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['s']['enabled']): ?>tick<?php else: ?>cross<?php endif; ?>.png" alt="<?php if ($this->_tpl_vars['s']['enabled']): ?>Enable<?php else: ?>Disable<?php endif; ?>"></td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="6" class="no-data">
			No Servers Configured!
			<br>
			<a href="<?php echo smarty_function_url(array('_base' => 'servers_edit.php'), $this);?>
">Click here to add a server</a>
		</td></tr>
<?php endif; unset($_from); ?>

		</table>
	</div>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 