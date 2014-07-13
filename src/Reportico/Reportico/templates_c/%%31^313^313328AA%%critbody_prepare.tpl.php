<?php /* Smarty version 2.6.26, created on 2014-07-12 14:06:15
         compiled from critbody_prepare.tpl */ ?>
	<TABLE class="swPrpCritBox" cellpadding="0">
<!---->
		<TR id="swPrpCriteriaBody">
			<TD class="swPrpCritEntry">
			<div id="btn btn-sm btn-default swPrpSubmitPane">
    				<input type="submit" id="prepareAjaxExecute" name="submitPrepare" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
    				<input type="submit" name="clearform" value="<?php echo $this->_tpl_vars['T_RESET']; ?>
">
			</div>

                <TABLE class="swPrpCritEntryBox">
<?php if (isset ( $this->_tpl_vars['CRITERIA_ITEMS'] )): ?>
<?php unset($this->_sections['critno']);
$this->_sections['critno']['name'] = 'critno';
$this->_sections['critno']['loop'] = is_array($_loop=$this->_tpl_vars['CRITERIA_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['critno']['show'] = true;
$this->_sections['critno']['max'] = $this->_sections['critno']['loop'];
$this->_sections['critno']['step'] = 1;
$this->_sections['critno']['start'] = $this->_sections['critno']['step'] > 0 ? 0 : $this->_sections['critno']['loop']-1;
if ($this->_sections['critno']['show']) {
    $this->_sections['critno']['total'] = $this->_sections['critno']['loop'];
    if ($this->_sections['critno']['total'] == 0)
        $this->_sections['critno']['show'] = false;
} else
    $this->_sections['critno']['total'] = 0;
if ($this->_sections['critno']['show']):

            for ($this->_sections['critno']['index'] = $this->_sections['critno']['start'], $this->_sections['critno']['iteration'] = 1;
                 $this->_sections['critno']['iteration'] <= $this->_sections['critno']['total'];
                 $this->_sections['critno']['index'] += $this->_sections['critno']['step'], $this->_sections['critno']['iteration']++):
$this->_sections['critno']['rownum'] = $this->_sections['critno']['iteration'];
$this->_sections['critno']['index_prev'] = $this->_sections['critno']['index'] - $this->_sections['critno']['step'];
$this->_sections['critno']['index_next'] = $this->_sections['critno']['index'] + $this->_sections['critno']['step'];
$this->_sections['critno']['first']      = ($this->_sections['critno']['iteration'] == 1);
$this->_sections['critno']['last']       = ($this->_sections['critno']['iteration'] == $this->_sections['critno']['total']);
?>
                    <tr class="swPrpCritLine" id="criteria_<?php echo $this->_tpl_vars['CRITERIA_ITEMS'][$this->_sections['critno']['index']]['name']; ?>
">
                        <td class='swPrpCritTitle'>
                            <?php echo $this->_tpl_vars['CRITERIA_ITEMS'][$this->_sections['critno']['index']]['title']; ?>

                        </td>
                        <td class="swPrpCritSel">
                            <?php echo $this->_tpl_vars['CRITERIA_ITEMS'][$this->_sections['critno']['index']]['entry']; ?>

                        </td>
                        <td class="swPrpCritExpandSel">
<?php if ($this->_tpl_vars['CRITERIA_ITEMS'][$this->_sections['critno']['index']]['expand']): ?>
                            <input class="swPrpCritExpandButton" id="reporticoPerformExpand" type="button" name="EXPAND_<?php echo $this->_tpl_vars['CRITERIA_ITEMS'][$this->_sections['critno']['index']]['name']; ?>
" value=">>">
<?php endif; ?>
                        </td>
                    </TR>
<?php endfor; endif; ?>
<?php endif; ?>
                </TABLE>
<?php if (isset ( $this->_tpl_vars['CRITERIA_ITEMS'] )): ?>
<?php if (count ( $this->_tpl_vars['CRITERIA_ITEMS'] ) > 1): ?>
<div id="btn btn-sm btn-default swPrpSubmitPane" style="float:right; margin-bottom:50px">
    <input type="submit" id="prepareAjaxExecute" name="submitPrepare" value="Go">
    <input type="submit" name="clearform" value="Reset">
</div>
<?php endif; ?>
<?php endif; ?>
			</td>
			<TD class="swPrpExpand">
				<TABLE class="swPrpExpandBox">
					<TR class="swPrpExpandRow">
						<TD id="swPrpExpandCell" rowspan="0" valign="top">
<?php if (strlen ( $this->_tpl_vars['ERRORMSG'] ) > 0): ?>
            <TABLE class="swError">
                <TR>
                    <TD><?php echo $this->_tpl_vars['ERRORMSG']; ?>
</TD>
                </TR>
            </TABLE>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['STATUSMSG'] ) > 0): ?> 
			<TABLE class="swStatus">
				<TR>
					<TD><?php echo $this->_tpl_vars['STATUSMSG']; ?>
</TD>
				</TR>
			</TABLE>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['STATUSMSG'] ) == 0 && strlen ( $this->_tpl_vars['ERRORMSG'] ) == 0): ?>
<div style="float:right; ">
<?php if (strlen ( $this->_tpl_vars['MAIN_MENU_URL'] ) > 0): ?>
<!--a class="swLinkMenu" style="float:left;" href="<?php echo $this->_tpl_vars['MAIN_MENU_URL']; ?>
">&lt;&lt; Menu</a-->
<?php endif; ?>
</div>
<p>
<?php if ($this->_tpl_vars['SHOW_EXPANDED']): ?>
							Search <?php echo $this->_tpl_vars['EXPANDED_TITLE']; ?>
 :<br><input  type="text" name="expand_value" size="30" value="<?php echo $this->_tpl_vars['EXPANDED_SEARCH_VALUE']; ?>
">
									<input id="reporticoPerformExpand" class="btn btn-sm btn-default swPrpSubmit" type="button" name="EXPANDSEARCH_<?php echo $this->_tpl_vars['EXPANDED_ITEM']; ?>
" value="Search"><br>

<?php echo $this->_tpl_vars['CONTENT']; ?>

							<br>
							<input class="btn btn-sm btn-default swPrpSubmit" type="button" id="reporticoPerformExpand" name="EXPANDCLEAR_<?php echo $this->_tpl_vars['EXPANDED_ITEM']; ?>
" value="Clear">
							<input class="btn btn-sm btn-default swPrpSubmit" type="button" id="reporticoPerformExpand" name="EXPANDSELECTALL_<?php echo $this->_tpl_vars['EXPANDED_ITEM']; ?>
" value="Select All">
							<input class="btn btn-sm btn-default swPrpSubmit" type="button" id="returnFromExpand" name="EXPANDOK_<?php echo $this->_tpl_vars['EXPANDED_ITEM']; ?>
" value="OK">
<?php endif; ?>
<?php if (! $this->_tpl_vars['SHOW_EXPANDED']): ?>
<?php if (! $this->_tpl_vars['REPORT_DESCRIPTION']): ?>
						&nbsp;<br>
						Enter Your Report Criteria Here. To enter criteria use the appropriate expand key.
						When you are happy select the appropriate output format and click OK.
<?php else: ?>
						&nbsp;<br>
						<?php echo $this->_tpl_vars['REPORT_DESCRIPTION']; ?>

<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
						</TD>
					</TR>
				</TABLE>
			</TD>
		</TR>
			</TABLE>
