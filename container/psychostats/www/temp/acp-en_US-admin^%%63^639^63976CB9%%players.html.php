<?php /* Smarty version 2.6.18, created on 2026-01-30 18:07:37
         compiled from acp/players.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/players.html', 23, false),array('function', 'cycle', 'acp/players.html', 47, false),array('modifier', 'escape', 'acp/players.html', 24, false),)), $this); ?>
<script>
delete_message = "Are you sure you want to delete the selected players?\nDeleting a player does not prevent them from re-appearing in the stats.";
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
			<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
				<input name="filter" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" class="field">
				<label for="all"><input id="all" name="all" type="checkbox" value="1"<?php if ($this->_tpl_vars['all']): ?> checked="checked"<?php endif; ?>> All</label>
				<input type="submit" 	value="Filter" class="btn">
				<input name="order" 	value="<?php echo $this->_tpl_vars['order']; ?>
" type="hidden">
				<input name="sort" 	value="<?php echo $this->_tpl_vars['sort']; ?>
" type="hidden">
				<input name="start" 	value="0" type="hidden">
				<input name="limit" 	value="<?php echo $this->_tpl_vars['limit']; ?>
" type="hidden">
			</form>
		</div>
		<?php echo $this->_tpl_vars['pager']; ?>

	</div>
	<form action="<?php echo smarty_function_url(array('order' => $this->_tpl_vars['order'],'sort' => $this->_tpl_vars['sort'],'start' => $this->_tpl_vars['start'],'limit' => $this->_tpl_vars['limit'],'all' => $this->_tpl_vars['all'],'filter' => $this->_tpl_vars['filter']), $this);?>
" method="post">
	<div class="ps-table-inner">
		<table class='ps-table ps-player-table'>
		<tr>
			<th class="active"><p><span class="asc">Player Name</span></p></th>
			<th><p><span class="asc">Stats</span></p></th>
			<th><p><span class="asc">User</span></p></th>
			<th><p><span class="asc">Skill</span></p></th>
			<th><p><span class="asc">Ranked</span></p></th>
			<th><p><abbr title="Select All"><input id="delete-all" type="checkbox"></abbr></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['plr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['plr']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['p']):
        $this->_foreach['plr']['iteration']++;
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
 id="row-<?php echo ($this->_foreach['plr']['iteration']-1); ?>
">
			<td class="item"><a href="<?php echo smarty_function_url(array('_base' => 'players_edit.php','_ref' => 1,'id' => $this->_tpl_vars['p']['plrid']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
			<td>[ <a href="<?php echo smarty_function_url(array('_base' => '../player.php','id' => $this->_tpl_vars['p']['plrid']), $this);?>
">stats</a> ]</td>
			<td><?php if ($this->_tpl_vars['p']['userid']): ?><a href="<?php echo smarty_function_url(array('_base' => 'users_edit.php','_ref' => 1,'id' => $this->_tpl_vars['p']['userid']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php else: ?>-<?php endif; ?></td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['skill'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['p']['allowrank']): ?>tick<?php else: ?>cross<?php endif; ?>.png" alt="<?php if ($this->_tpl_vars['p']['allowrank']): ?>Allow Player to Rank<?php else: ?>Disallow Rank<?php endif; ?>"></td>
			<td><input name="del[]" value="<?php echo $this->_tpl_vars['p']['plrid']; ?>
" type="checkbox"></td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="6" class="no-data">
			No Players Available
		</td></tr>
<?php endif; unset($_from); ?>
		</table>
	</div>
	<div class="ps-table-footer">
		<div style="display: none" id="delete-warning" class="warning"><b>Warning:</b> Deleting more than a few players at a time may take too long and timeout the request.</div>
		<input id="delete-btn" type="submit" value="Delete Selected">
	</div>
	</form>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 