<?php /* Smarty version 2.6.18, created on 2026-01-30 18:05:02
         compiled from acp/events.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/events.html', 18, false),array('function', 'cycle', 'acp/events.html', 46, false),array('modifier', 'escape', 'acp/events.html', 23, false),array('modifier', 'default', 'acp/events.html', 53, false),)), $this); ?>
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
			<form action="<?php echo smarty_function_url(array('_base' => 'events_edit.php'), $this);?>
" method="post">
				<input type="submit" value="New Event" class="btn left">
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
		<table id='ev-table' class='ps-table ps-event-table'>
		<tr class='hdr'>
			<th><p>#</p></th>
			<th class="active"><p><a href=""><span class="asc">Order</span></a></p></th>
			<th><p><a href=""><span class="asc">Event Name</span></a></p></th>
			<th><p><a href=""><span class="asc">Alias</span></a></p></th>
			<th><p><a href=""><span class="asc">Code</span></a></p></th>
			<th><p><a href=""><span class="asc">Game</span></a></p></th>
			<th><p><a href=""><span class="asc">Mod</span></a></p></th>
			<th><p><a href=""><span class="asc"><abbr title="Checked if not ignored">?</abbr></span></a></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['events'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['events']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['e']):
        $this->_foreach['events']['iteration']++;
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
>
			<td class="iter"><?php echo $this->_foreach['events']['iteration']+$this->_tpl_vars['start']; ?>
</td>
			<td class="idx"><?php echo '<a '; ?><?php if (! $this->_tpl_vars['e']['up']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="up" href="'; ?><?php echo smarty_function_url(array('move' => 'up','id' => $this->_tpl_vars['e']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_up.png" alt="Move Up"></a><a '; ?><?php if (! $this->_tpl_vars['e']['down']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="dn" href="'; ?><?php echo smarty_function_url(array('move' => 'down','id' => $this->_tpl_vars['e']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_down.png" alt="Move Down"></a>'; ?>
</td>
			<td class="item"><a href="<?php echo smarty_function_url(array('_base' => 'events_edit.php','id' => $this->_tpl_vars['e']['id']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['e']['eventname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><span class='sub'><?php echo ((is_array($_tmp=$this->_tpl_vars['e']['regex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['e']['alias'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['e']['codefile'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['e']['gametype'])) ? $this->_run_mod_handler('default', true, $_tmp, '*') : smarty_modifier_default($_tmp, '*')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['e']['modtype'])) ? $this->_run_mod_handler('default', true, $_tmp, '*') : smarty_modifier_default($_tmp, '*')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['e']['ignore']): ?>stop<?php else: ?>accept<?php endif; ?>.png" alt="<?php if ($this->_tpl_vars['e']['ignore']): ?>Ignored<?php else: ?>Active<?php endif; ?>"></td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="8" class="no-data">
			No Events Defined!
			<br>
			<a href="<?php echo smarty_function_url(array('_base' => 'events_edit.php'), $this);?>
">Click here to add an event</a>
		</td></tr>
<?php endif; unset($_from); ?>

		</table>
	</div>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 