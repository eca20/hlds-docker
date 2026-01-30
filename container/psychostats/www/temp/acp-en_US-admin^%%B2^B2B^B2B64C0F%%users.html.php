<?php /* Smarty version 2.6.18, created on 2026-01-30 18:07:40
         compiled from acp/users.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/users.html', 23, false),array('function', 'cycle', 'acp/users.html', 54, false),array('modifier', 'escape', 'acp/users.html', 28, false),)), $this); ?>
<script>
delete_message = "Are you sure you want to delete the selected users?";
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

<?php echo $this->_tpl_vars['message']; ?>


<div class="ps-table-frame no-ani">
	<div class="ps-table-header">
		<div id="filter" class="filter">
			<form action="<?php echo smarty_function_url(array('_base' => 'users_edit.php'), $this);?>
" method="get">
				<input type="submit" value="New User" class="btn left">
			</form>
			<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
				Search:
				<input name="filter" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" class="field">
				<select name="c" class="field">
					<option value="-1"<?php if ($this->_tpl_vars['c'] == -1): ?> selected=""<?php endif; ?>>Status (all)</option>
					<option value="1" <?php if ($this->_tpl_vars['c'] == 1): ?> selected=""<?php endif; ?>>Confirmed</option>
					<option value="0" <?php if ($this->_tpl_vars['c'] == 0): ?> selected=""<?php endif; ?>>Not Confirmed</option>
				</select>
				<input type="submit" 	value="Filter" class="btn">
				<input name="order" 	value="<?php echo $this->_tpl_vars['order']; ?>
" type="hidden">
				<input name="sort" 	value="<?php echo $this->_tpl_vars['sort']; ?>
" type="hidden">
				<input name="start" 	value="<?php echo $this->_tpl_vars['start']; ?>
" type="hidden">
				<input name="limit" 	value="<?php echo $this->_tpl_vars['limit']; ?>
" type="hidden">
			</form>
		</div>
		<?php echo $this->_tpl_vars['pager']; ?>

	</div>
	<form action="<?php echo smarty_function_url(array('order' => $this->_tpl_vars['order'],'sort' => $this->_tpl_vars['sort'],'start' => $this->_tpl_vars['start'],'limit' => $this->_tpl_vars['limit'],'filter' => $this->_tpl_vars['filter'],'c' => $this->_tpl_vars['c']), $this);?>
" method="post">
	<div class="ps-table-inner">
		<table class='ps-table ps-user-table'>
		<tr>
			<th><p><a href=""><span class="asc">Username</span></a></p></th>
			<th><p><a href=""><span class="asc">Player</span></a></p></th>
			<th><p><a href=""><span class="asc">Access</span></a></p></th>
			<th><p><a href=""><span class="asc">Confirmed</span></a></p></th>
			<th><p><abbr title="Select All"><input id="select-all" type="checkbox"></abbr></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['user'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['u']):
        $this->_foreach['user']['iteration']++;
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
 id="row-<?php echo ($this->_foreach['user']['iteration']-1); ?>
">
			<td class="item"><a href="<?php echo smarty_function_url(array('_base' => 'users_edit.php','_ref' => 1,'id' => $this->_tpl_vars['u']['userid']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['u']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
			<td class="item"><?php if ($this->_tpl_vars['u']['plrid']): ?><a href="<?php echo smarty_function_url(array('_base' => 'players_edit.php','_ref' => 1,'id' => $this->_tpl_vars['u']['plrid']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['u']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php else: ?>-<?php endif; ?></td>
			<td><?php echo $this->_reg_objects['user'][0]->acl_str($this->_tpl_vars['u']['accesslevel']);?>
</td>
			<td><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['u']['confirmed']): ?>tick<?php else: ?>cross<?php endif; ?>.png" alt="<?php if ($this->_tpl_vars['u']['confirmed']): ?>Confirmed<?php else: ?>Not Confirmed<?php endif; ?>"></td>
			<td><?php if ($this->_tpl_vars['u']['userid'] != $this->_tpl_vars['user']['userid']): ?><input name="sel[]" value="<?php echo $this->_tpl_vars['u']['userid']; ?>
" type="checkbox"><?php else: ?>-<?php endif; ?></td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="5" class="no-data">
			No Users Found
		</td></tr>
<?php endif; unset($_from); ?>
		</table>
	</div>
	<div class="ps-table-footer">
		<div style="display: none" id="delete-warning" class="warning"><b>Warning:</b> Deleting more than a few players at a time may take too long and timeout the request.</div>
		With selected: 
		<input id="confirm-btn" name="confirm" type="submit" value="Confirm">
		<input id="delete-btn" name="delete" type="submit" value="Delete">
	</div>
	</form>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 