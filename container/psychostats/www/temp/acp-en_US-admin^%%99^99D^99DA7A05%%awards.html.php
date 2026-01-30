<?php /* Smarty version 2.6.18, created on 2026-01-30 18:17:50
         compiled from acp/awards.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/awards.html', 18, false),array('function', 'cycle', 'acp/awards.html', 62, false),array('modifier', 'escape', 'acp/awards.html', 23, false),array('modifier', 'default', 'acp/awards.html', 69, false),)), $this); ?>
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
		<div class="filter">
			<form action="<?php echo smarty_function_url(array('_base' => 'awards_edit.php'), $this);?>
" method="post">
				<input type="submit" value="New Award" class="btn left">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'ajax.html', 'smarty_include_vars' => array('float' => 'left','size' => 'small-snake')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</form>
			<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
				<input name="filter" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" class="field">
				<select name="type" class="field">
					<option value=""> * (Type) </option>
<?php $_from = $this->_tpl_vars['awardtypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['type'] == $this->_tpl_vars['t']): ?> selected=""<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
				</select> &nbsp; 
				<select name="gametype" class="field">
					<option value=""> * (Gametype) </option>
<?php $_from = $this->_tpl_vars['gametypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['g']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['g'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['gametype'] == $this->_tpl_vars['g']): ?> selected=""<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['g'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
				</select> : 
				<select name="modtype" class="field">
					<option value=""> * (Modtype) </option>
<?php $_from = $this->_tpl_vars['modtypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['m'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['modtype'] == $this->_tpl_vars['m']): ?> selected=""<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['m'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
				</select>
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
	<div class="ps-table-inner">
		<table id='aw-table' class='ps-table ps-awards-table'>
		<tr class='hdr'>
			<th class="active"><p><span class="asc">Order</span></p></th>
			<th><p><span class="asc">Award Name</span></p></th>
			<th><p><span class="asc">Type</span></p></th>
			<th><p><span class="asc">Game</span></p></th>
			<th><p><span class="asc">Mod</span></p></th>
			<th><p><span class="asc"><abbr title="Is award enabled?">?</abbr></span></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['awards']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
>
			<td class="idx"><?php echo '<a '; ?><?php if (! $this->_tpl_vars['a']['up']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="up" href="'; ?><?php echo smarty_function_url(array('move' => 'up','id' => $this->_tpl_vars['a']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_up.png" alt="Move Up"></a><a '; ?><?php if (! $this->_tpl_vars['a']['down']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="dn" href="'; ?><?php echo smarty_function_url(array('move' => 'down','id' => $this->_tpl_vars['a']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_down.png" alt="Move Down"></a>'; ?>
</td>
			<td class="item"><a href="<?php echo smarty_function_url(array('_base' => 'awards_edit.php','id' => $this->_tpl_vars['a']['id']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['a']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><span class='sub'><?php echo ((is_array($_tmp=$this->_tpl_vars['a']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['a']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['a']['gametype'])) ? $this->_run_mod_handler('default', true, $_tmp, '*') : smarty_modifier_default($_tmp, '*')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['a']['modtype'])) ? $this->_run_mod_handler('default', true, $_tmp, '*') : smarty_modifier_default($_tmp, '*')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['a']['enabled']): ?>tick<?php else: ?>cross<?php endif; ?>.png" alt="<?php if ($this->_tpl_vars['a']['enabled']): ?>Enabled<?php else: ?>Disabled<?php endif; ?>"></td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="6" class="no-data">
			No Awards Defined
			<br/>
			<a href="<?php echo smarty_function_url(array('_base' => 'awards_edit.php'), $this);?>
">Click here to add an award</a>
		</td></tr>
<?php endif; unset($_from); ?>

		</table>
	</div>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 