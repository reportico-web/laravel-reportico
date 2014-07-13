<?php /* Smarty version 2.6.26, created on 2014-07-11 14:29:18
         compiled from admin.tpl */ ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_CALLED']): ?>
<?php if (! $this->_tpl_vars['EMBEDDED_REPORT']): ?>
<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE><?php echo $this->_tpl_vars['T_ADMINTITLE']; ?>
</TITLE>
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEET']; ?>
">
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/bootstrap2/bootstrap.min.css">
<?php else: ?>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/bootstrap3/bootstrap.min.css">
<?php endif; ?>
<?php endif; ?>
<?php echo $this->_tpl_vars['OUTPUT_ENCODING']; ?>

</HEAD>
<BODY class="swMenuBody">
<?php else: ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php if (! $this->_tpl_vars['REPORTICO_BOOTSTRAP_PRELOADED']): ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/bootstrap2/bootstrap.min.css">
<?php else: ?>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/bootstrap3/bootstrap.min.css">
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEET']; ?>
">
<?php endif; ?>
<?php if ($this->_tpl_vars['AJAX_ENABLED']): ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_PRELOADED']): ?>
<?php if (! $this->_tpl_vars['REPORTICO_JQUERY_PRELOADED']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/jquery.js"></script>
'; ?>

<?php endif; ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/ui/jquery.ui.datepicker.js"></script>
'; ?>

<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/reportico.js"></script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php if (! $this->_tpl_vars['REPORTICO_BOOTSTRAP_PRELOADED']): ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['JSPATH']; ?>
/bootstrap2/bootstrap.min.js"></script>
<?php else: ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['JSPATH']; ?>
/bootstrap3/bootstrap.min.js"></script>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_PRELOADED']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/ui/i18n/jquery.ui.datepicker-'; ?>
<?php echo $this->_tpl_vars['AJAX_DATEPICKER_LANGUAGE']; ?>
<?php echo '.js"></script>
'; ?>

<?php endif; ?>
<?php if (! $this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/jquery.jdMenu.js"></script>
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/jquery.jdMenu.css">
'; ?>

<?php endif; ?>
<?php echo '
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/ui/themes/base/jquery.ui.core.css">
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/ui/themes/base/jquery.ui.theme.css">
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/ui/themes/base/jquery.ui.datepicker.css">
<script type="text/javascript">var reportico_datepicker_language = "'; ?>
<?php echo $this->_tpl_vars['AJAX_DATEPICKER_FORMAT']; ?>
<?php echo '";</script>
<script type="text/javascript">var reportico_this_script = "'; ?>
<?php echo $this->_tpl_vars['SCRIPT_SELF']; ?>
<?php echo '";</script>
<script type="text/javascript">var reportico_ajax_script = "'; ?>
<?php echo $this->_tpl_vars['REPORTICO_AJAX_RUNNER']; ?>
<?php echo '";</script>
'; ?>

<?php if ($this->_tpl_vars['REPORTICO_BOOTSTRAP_MODAL']): ?>
<script type="text/javascript">var reportico_bootstrap_modal = true;</script>
<?php else: ?>
<script type="text/javascript">var reportico_bootstrap_modal = false;</script>
<?php endif; ?>
<?php echo '
<script type="text/javascript">var reportico_ajax_mode = "'; ?>
<?php echo $this->_tpl_vars['REPORTICO_AJAX_MODE']; ?>
<?php echo '";</script>
'; ?>

<?php if ($this->_tpl_vars['REPORTICO_DYNAMIC_GRIDS']): ?>
<script type="text/javascript">var reportico_dynamic_grids = true;</script>
<?php if ($this->_tpl_vars['REPORTICO_DYNAMIC_GRIDS_SORTABLE']): ?>
<script type="text/javascript">var reportico_dynamic_grids_sortable = true;</script>
<?php else: ?>
<script type="text/javascript">var reportico_dynamic_grids_sortable = false;</script>
<?php endif; ?>
<?php if ($this->_tpl_vars['REPORTICO_DYNAMIC_GRIDS_SEARCHABLE']): ?>
<script type="text/javascript">var reportico_dynamic_grids_searchable = true;</script>
<?php else: ?>
<script type="text/javascript">var reportico_dynamic_grids_searchable = false;</script>
<?php endif; ?>
<?php if ($this->_tpl_vars['REPORTICO_DYNAMIC_GRIDS_PAGING']): ?>
<script type="text/javascript">var reportico_dynamic_grids_paging = true;</script>
<?php else: ?>
<script type="text/javascript">var reportico_dynamic_grids_paging = false;</script>
<?php endif; ?>
<script type="text/javascript">var reportico_dynamic_grids_page_size = <?php echo $this->_tpl_vars['REPORTICO_DYNAMIC_GRIDS_PAGE_SIZE']; ?>
;</script>
<?php else: ?>
<script type="text/javascript">var reportico_dynamic_grids = false;</script>
<?php endif; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_PRELOADED']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/jquery.dataTables.min.js"></script>
'; ?>

<LINK id="PRP_StyleSheet" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/jquery.dataTables.css">
<?php endif; ?>
<?php if ($this->_tpl_vars['REPORTICO_CHARTING_ENGINE'] == 'NVD3'): ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_PRELOADED']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/nvd3/d3.min.js"></script>
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/nvd3/nv.d3.js"></script>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/nvd3/nv.d3.css">
'; ?>

<?php endif; ?>
<?php endif; ?>
<div id="reportico_container">

<FORM class="swMenuForm" name="topmenu" method="POST" action="<?php echo $this->_tpl_vars['SCRIPT_SELF']; ?>
">
<div style="height: 78px" class="swAdminBanner">
<div style="float: right;">
<img height="78px" src="<?php echo $this->_tpl_vars['REPORTICO_URL_DIR']; ?>
/images/reportico100.png"/>

</div>
<div style="height: 78px">
<H1 class="swTitle" style="text-align: center; padding-top: 30px; padding-left: 200px;"><?php echo $this->_tpl_vars['T_ADMINTITLE']; ?>
</H1>
</div>
</div>
<input type="hidden" name="reportico_session_name" value="<?php echo $this->_tpl_vars['SESSION_ID']; ?>
" /> 
<?php if ($this->_tpl_vars['SHOW_TOPMENU']): ?>
	<TABLE class="swPrpTopMenu">
		<TR>
<?php if (( $this->_tpl_vars['DB_LOGGEDON'] )): ?>
<?php if (strlen ( $this->_tpl_vars['DBUSER'] ) > 0): ?> 
			<TD class="swPrpTopMenuCell"><?php echo $this->_tpl_vars['T_LOGGED_ON_AS']; ?>
 <?php echo $this->_tpl_vars['DBUSER']; ?>
</TD>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['DBUSER'] ) == 0): ?> 
			<TD style="width: 15%" class="swPrpTopMenuCell">&nbsp;</TD>
<?php endif; ?>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['MAIN_MENU_URL'] ) > 0): ?> 
			<TD style="text-align:center">&nbsp;</TD>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_LOGOUT']): ?>
			<TD width="15%" align="right" class="swPrpTopMenuCell">
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swPrpSubmit reporticoSubmit" type="submit" name="adminlogout" value="<?php echo $this->_tpl_vars['T_LOGOFF']; ?>
">
			</TD>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_LOGIN']): ?>
			<TD width="50%"></TD>
			<TD width="35%" align="right" class="swPrpTopMenuCell">
<?php echo $this->_tpl_vars['T_ADMIN_INSTRUCTIONS']; ?>

				<br><input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_TEXTFIELD']; ?>
" type="password" name="admin_password" value="">
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swPrpSubmit reporticoSubmit" type="submit" name="login" value="<?php echo $this->_tpl_vars['T_LOGIN']; ?>
">
<?php if (strlen ( $this->_tpl_vars['ADMIN_PASSWORD_ERROR'] ) > 0): ?>
				<div style="color: #ff0000;"><?php echo $this->_tpl_vars['T_ADMIN_PASSWORD_ERROR']; ?>
</div>
<?php endif; ?>
			</TD>
			<TD width="15%" align="right" class="swPrpTopMenuCell">
			</TD>
<?php endif; ?>
		</TR>
	</TABLE>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_SET_ADMIN_PASSWORD']): ?>
<div style="text-align:center;">
<?php if (strlen ( $this->_tpl_vars['SET_ADMIN_PASSWORD_ERROR'] ) > 0): ?>
				<div style="color: #ff0000;"><?php echo $this->_tpl_vars['SET_ADMIN_PASSWORD_ERROR']; ?>
</div>
<?php endif; ?>
				<br>
				<br>
<?php echo $this->_tpl_vars['T_SET_ADMIN_PASSWORD_INFO']; ?>

				<br>
<?php echo $this->_tpl_vars['T_SET_ADMIN_PASSWORD_NOT_SET']; ?>

				<br>
<?php echo $this->_tpl_vars['T_SET_ADMIN_PASSWORD_PROMPT']; ?>

				<br>
				<input type="password" name="new_admin_password" value=""><br>
				<br>
<?php echo $this->_tpl_vars['T_SET_ADMIN_PASSWORD_REENTER']; ?>
 <br><input type="password" name="new_admin_password2" value=""><br>
<br>
<br>
<?php if (count ( $this->_tpl_vars['LANGUAGES'] ) > 0): ?>
				<?php echo $this->_tpl_vars['T_CHOOSE_LANGUAGE']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_language">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['LANGUAGES']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo ''; ?><?php if ($this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['active']): ?><?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" selected value="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['value']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?><?php else: ?><?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['value']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?><?php endif; ?><?php echo ''; ?>

<?php endfor; endif; ?>
                </select>
<?php endif; ?>
<br>
				<br>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swPrpSubmit reporticoSubmit" type="submit" name="submit_admin_password" value="<?php echo $this->_tpl_vars['T_SET_ADMIN_PASSWORD']; ?>
">
				<br>
				
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_REPORT_MENU']): ?>
	<TABLE class="swMenu">
		<TR> <TD>&nbsp;</TD> </TR>
<?php if (! $this->_tpl_vars['SHOW_SET_ADMIN_PASSWORD']): ?>
<?php if (count ( $this->_tpl_vars['LANGUAGES'] ) > 0): ?>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_CHOOSE_LANGUAGE']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_language">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['LANGUAGES']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo ''; ?><?php if ($this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['active']): ?><?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" selected value="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['value']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?><?php else: ?><?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['value']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?><?php endif; ?><?php echo ''; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_language" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
<?php endif; ?>
<?php if (count ( $this->_tpl_vars['PROJECT_ITEMS'] ) > 0): ?>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_RUN_SUITE']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_menu_project">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECT_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_menu_project" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
<?php endif; ?>
<?php endif; ?>
<?php if (count ( $this->_tpl_vars['PROJECT_ITEMS'] ) > 0): ?>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_CREATE_REPORT']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_design_project">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECT_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_design_project" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_CONFIG_PARAM']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_configure_project">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECT_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_configure_project" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_DELETE_PROJECT']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_delete_project">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECT_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_delete_project" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
<?php endif; ?>
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['MENU_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo '<TR><TD class="swMenuItem">'; ?><?php if ($this->_tpl_vars['MENU_ITEMS'][$this->_sections['menuitem']['index']]['label'] == 'BLANKLINE'): ?><?php echo '&nbsp;'; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['MENU_ITEMS'][$this->_sections['menuitem']['index']]['label'] == 'LINE'): ?><?php echo '<hr>'; ?><?php else: ?><?php echo '<a class="swMenuItemLink" href="'; ?><?php echo $this->_tpl_vars['MENU_ITEMS'][$this->_sections['menuitem']['index']]['url']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['MENU_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</TD></TR>'; ?>

<?php endfor; endif; ?>
		
		<TR> <TD>&nbsp;</TD> </TR>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><a href="<?php echo $this->_tpl_vars['REPORTICO_URL_DIR']; ?>
/doc/li_reportico.html"><?php echo $this->_tpl_vars['T_DOCUMENTATION']; ?>
</a>
			</TD>
		</TR>
	</TABLE>
<?php else: ?>
	<TABLE class="swMenu">
		<TR> <TD>&nbsp;</TD> </TR>
<?php if (! $this->_tpl_vars['SHOW_SET_ADMIN_PASSWORD']): ?>
<?php if (count ( $this->_tpl_vars['LANGUAGES'] ) > 1): ?>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_CHOOSE_LANGUAGE']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_language">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['LANGUAGES']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo ''; ?><?php if ($this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['active']): ?><?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" selected value="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['value']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?><?php else: ?><?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['value']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['LANGUAGES'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?><?php endif; ?><?php echo ''; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_language" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
<?php endif; ?>
<?php if ($this->_tpl_vars['PROJECT_ITEMS']): ?>
<?php endif; ?>
<?php if (count ( $this->_tpl_vars['PROJECT_ITEMS'] ) > 0): ?>
		<TR> 
			<TD class="swMenuItem" style="width: 30%"><?php echo $this->_tpl_vars['T_RUN_SUITE']; ?>

				<select class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_DROPDOWN']; ?>
swPrpDropSelectRegular" name="jump_to_menu_project">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECT_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menuitem']['show'] = true;
$this->_sections['menuitem']['max'] = $this->_sections['menuitem']['loop'];
$this->_sections['menuitem']['step'] = 1;
$this->_sections['menuitem']['start'] = $this->_sections['menuitem']['step'] > 0 ? 0 : $this->_sections['menuitem']['loop']-1;
if ($this->_sections['menuitem']['show']) {
    $this->_sections['menuitem']['total'] = $this->_sections['menuitem']['loop'];
    if ($this->_sections['menuitem']['total'] == 0)
        $this->_sections['menuitem']['show'] = false;
} else
    $this->_sections['menuitem']['total'] = 0;
if ($this->_sections['menuitem']['show']):

            for ($this->_sections['menuitem']['index'] = $this->_sections['menuitem']['start'], $this->_sections['menuitem']['iteration'] = 1;
                 $this->_sections['menuitem']['iteration'] <= $this->_sections['menuitem']['total'];
                 $this->_sections['menuitem']['index'] += $this->_sections['menuitem']['step'], $this->_sections['menuitem']['iteration']++):
$this->_sections['menuitem']['rownum'] = $this->_sections['menuitem']['iteration'];
$this->_sections['menuitem']['index_prev'] = $this->_sections['menuitem']['index'] - $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['index_next'] = $this->_sections['menuitem']['index'] + $this->_sections['menuitem']['step'];
$this->_sections['menuitem']['first']      = ($this->_sections['menuitem']['iteration'] == 1);
$this->_sections['menuitem']['last']       = ($this->_sections['menuitem']['iteration'] == $this->_sections['menuitem']['total']);
?>
<?php echo '<OPTION label="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '" value="'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['PROJECT_ITEMS'][$this->_sections['menuitem']['index']]['label']; ?><?php echo '</OPTION>'; ?>

<?php endfor; endif; ?>
				</select>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swMntButton reporticoSubmit" type="submit" name="submit_menu_project" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
			</TD>
		</TR>
<?php endif; ?>
<?php endif; ?>
		<TR> <TD>&nbsp;</TD> </TR>
	</TABLE>
<?php endif; ?>

	<!--TABLE class="swStatus"><TR><TD>Select a Report From the List Above</TD></TR></TABLE-->
<?php if (strlen ( $this->_tpl_vars['ERRORMSG'] ) > 0): ?> 
			<TABLE class="swError">
				<TR>
					<TD><?php echo $this->_tpl_vars['ERRORMSG']; ?>
</TD>
				</TR>
			</TABLE>
<?php endif; ?>
</FORM>



<!--div class="smallbanner">Powered by <a href="http://www.reportico.org/" target="_blank">reportico <?php echo $this->_tpl_vars['REPORTICO_VERSION']; ?>
</a></div-->
</div>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_CALLED']): ?>
<?php if (! $this->_tpl_vars['EMBEDDED_REPORT']): ?> 
</BODY>
</HTML>
<?php endif; ?>
<?php endif; ?>