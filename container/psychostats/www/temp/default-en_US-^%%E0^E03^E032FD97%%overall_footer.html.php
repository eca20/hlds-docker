<?php /* Smarty version 2.6.18, created on 2026-01-30 18:19:35
         compiled from default/overall_footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/overall_footer.html', 5, false),array('modifier', 'escape', 'default/overall_footer.html', 8, false),)), $this); ?>
<div id="ps-overall-footer">
<div id="ps-footer-middle">
<?php if ($this->_tpl_vars['cookieconsent'] && ! $this->_tpl_vars['maintenance'] || ps_user_is_admin ( ) && $this->_tpl_vars['language_list']): ?>
	<div class="language">
		<form action="<?php echo smarty_function_url(array('_base' => 'index.php','_ref' => 1), $this);?>
" method="post">
		<select name="language" class="language" title="Select a Language">
			<?php $_from = $this->_tpl_vars['language_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
			<option<?php if ($this->_tpl_vars['lang'] == $this->_tpl_vars['language']): ?> selected='selected' class='sel'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		</form>
	</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['cookieconsent'] && ! $this->_tpl_vars['maintenance'] || ps_user_is_admin ( ) && $this->_tpl_vars['theme_list'] && count ( $this->_tpl_vars['theme_list'] ) > 1): ?>
	<div class="theme">
		[ <a href="<?php echo smarty_function_url(array('_base' => 'themes.php'), $this);?>
">Change Theme</a> ]
	</div>
<?php endif; ?>
	<div class="poweredby">
		Powered by <a href="https://github.com/Drek282/PsychoStats/" target="_blank">PsychoStats <?php echo $this->_reg_objects['ps'][0]->version(null);?>
</a>
		<?php if ($this->_tpl_vars['show_benchmark']): ?>
		-- Page loaded in <!--PAGE_BENCHMARK--> seconds with <?php echo $this->_reg_objects['db'][0]->totalqueries;?>
 SQL queries<br>
		<?php endif; ?>
		<?php if (! $this->_tpl_vars['conf']['theme']['permissions']['show_admin'] && $this->_tpl_vars['cookieconsent']): ?>
		<strong>[ <a href="<?php echo smarty_function_url(array('_base' => 'admin/index.php'), $this);?>
">Admin Control Panel</a> ]</strong>
		<?php endif; ?>
    	<?php if (! $this->_tpl_vars['maintenance'] || ps_user_is_admin ( ) && $this->_tpl_vars['show_privacy_policy']): ?>
        <strong>
			[ <a href="<?php echo smarty_function_url(array('_base' => 'privacy.php'), $this);?>
">Privacy Policy</a> ]
        </strong>
		<?php endif; ?>
	</div>
</div>

<!-- COOKIE CONSENT -->
<?php if ($this->_tpl_vars['conf']['main']['security']['enable_cookieconsent']): ?>
<?php if ($this->_tpl_vars['cookieconsent']): ?>
<form method="post">
  <button title="This will also delete all PsychoStats cookies." name="cookieconsent" value="0" class="open-cookieconsent">Reset Cookie Consent</button>
</form>

<?php else: ?>
<div class="form-cookieconsent" id="cookieconsentForm">
  <form method="post" class="form-cccontainer">
	  <input name="key" value="<?php echo $this->_tpl_vars['form_key']; ?>
" type="hidden">
    <p><strong>COOKIE CONSENT:</strong>  This stats software uses cookies to save your theme and language preference and allow users with accounts to log into their account.  These cookies are not used to deliver advertising, they are not tracking cookies and they do not collect any other form of data, personal or otherwise.  If you wish to allow this stats software to set these cookies for the stated purposes, please click on the accept button.</p>
    <?php if ($this->_tpl_vars['conf']['main']['security']['show_privacy_policy']): ?>
      <p class="privacy"><strong>Please see our <a href="privacy.php">Privacy Policy</a> for more details.</strong></p>
    <?php endif; ?>

    <button name="cookieconsent" value="1" class="btn accept">Accept</button>
    <button name="cookieconsent" value="0" class="btn reject">Reject</button>
  </form>
</div> 
<?php endif; ?>
<?php endif; ?>
</div>

</div></body>
</html>