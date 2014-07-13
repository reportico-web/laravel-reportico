<?php /* Smarty version 2.6.26, created on 2014-07-11 14:39:17
         compiled from mini_maintain.tpl */ ?>
<FORM class="swMiniMntForm" name="topmenu" method="POST" action="<?php echo $this->_tpl_vars['SCRIPT_SELF']; ?>
">
<?php if (( $this->_tpl_vars['PARTIALMAINTAIN'] )): ?> 
    <input type="hidden" name="partialMaintain" value="<?php echo $this->_tpl_vars['PARTIALMAINTAIN']; ?>
" />
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['STATUSMSG'] ) > 0): ?> 
			<TABLE class="swStatus">
				<TR>
					<TD><?php echo $this->_tpl_vars['STATUSMSG']; ?>
</TD>
				</TR>
			</TABLE>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['ERRORMSG'] ) > 0): ?> 
			<TABLE class="swError">
				<TR>
					<TD><?php echo $this->_tpl_vars['ERRORMSG']; ?>
</TD>
				</TR>
			</TABLE>
<?php endif; ?>
<input type="hidden" name="reportico_session_name" value="<?php echo $this->_tpl_vars['SESSION_ID']; ?>
" />
	<TABLE class="swMntMainBox" cellspacing="0" cellpadding="0">
		<TR>
			<TD>
<?php echo $this->_tpl_vars['CONTENT']; ?>

			</TD>
		</TR>
	</TABLE>
</FORM>