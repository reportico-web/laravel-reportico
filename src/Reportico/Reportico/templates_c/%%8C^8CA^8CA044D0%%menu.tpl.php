<?php /* Smarty version 2.6.26, created on 2014-07-11 14:29:23
         compiled from menu.tpl */ ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_CALLED']): ?>
<?php if (! $this->_tpl_vars['EMBEDDED_REPORT']): ?>
<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE><?php echo $this->_tpl_vars['TITLE']; ?>
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
<LINK id="reportico_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEET']; ?>
">
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
<?php echo '/jquery.dataTables.js"></script>
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
<input type="hidden" name="reportico_session_name" value="<?php echo $this->_tpl_vars['SESSION_ID']; ?>
" /> 

<?php if (true || $this->_tpl_vars['SHOW_REPORT_MENU']): ?>

<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2' || $this->_tpl_vars['BOOTSTRAP_STYLES'] == '3'): ?>
<!-- BOOTSTRAP VERSION -->
<?php if ($this->_tpl_vars['SHOW_HIDE_NAVIGATION_MENU'] == 'show' || $this->_tpl_vars['SHOW_HIDE_DROPDOWN_MENU'] == 'show'): ?>
    <div class="navbar navbar-default" role="navigation">
<?php else: ?>
    <div style="display:none" class="navbar navbar-default" role="navigation">
<?php endif; ?>
    <!--div class="navbar navbar-default navbar-static-top" role="navigation"-->
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
        <div class="navbar-inner">
<?php endif; ?>
        <div class="container" style="width: 100%">
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#reportico-bootstrap-collapse"-->
<?php else: ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#reportico-bootstrap-collapse">
<?php endif; ?>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<?php if ($this->_tpl_vars['SHOW_HIDE_DROPDOWN_MENU'] == 'show' && $this->_tpl_vars['DROPDOWN_MENU_ITEMS']): ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
            <a href="#" class="brand" style="float: left"><?php echo $this->_tpl_vars['MENU_TITLE']; ?>
 :</a>
<?php else: ?>
            <a href="#" class="navbar-brand"><?php echo $this->_tpl_vars['MENU_TITLE']; ?>
 :</a>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
            <div class= "nav-collapse collapse" id="reportico-bootstrap-collapse">
<?php else: ?>
            <div class= "nav-collapse collapse in" id="reportico-bootstrap-collapse">
<?php endif; ?>
                <ul class="nav navbar-nav">
<?php if ($this->_tpl_vars['SHOW_HIDE_DROPDOWN_MENU'] == 'show' && $this->_tpl_vars['DROPDOWN_MENU_ITEMS']): ?>
<?php unset($this->_sections['menu']);
$this->_sections['menu']['name'] = 'menu';
$this->_sections['menu']['loop'] = is_array($_loop=$this->_tpl_vars['DROPDOWN_MENU_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu']['show'] = true;
$this->_sections['menu']['max'] = $this->_sections['menu']['loop'];
$this->_sections['menu']['step'] = 1;
$this->_sections['menu']['start'] = $this->_sections['menu']['step'] > 0 ? 0 : $this->_sections['menu']['loop']-1;
if ($this->_sections['menu']['show']) {
    $this->_sections['menu']['total'] = $this->_sections['menu']['loop'];
    if ($this->_sections['menu']['total'] == 0)
        $this->_sections['menu']['show'] = false;
} else
    $this->_sections['menu']['total'] = 0;
if ($this->_sections['menu']['show']):

            for ($this->_sections['menu']['index'] = $this->_sections['menu']['start'], $this->_sections['menu']['iteration'] = 1;
                 $this->_sections['menu']['iteration'] <= $this->_sections['menu']['total'];
                 $this->_sections['menu']['index'] += $this->_sections['menu']['step'], $this->_sections['menu']['iteration']++):
$this->_sections['menu']['rownum'] = $this->_sections['menu']['iteration'];
$this->_sections['menu']['index_prev'] = $this->_sections['menu']['index'] - $this->_sections['menu']['step'];
$this->_sections['menu']['index_next'] = $this->_sections['menu']['index'] + $this->_sections['menu']['step'];
$this->_sections['menu']['first']      = ($this->_sections['menu']['iteration'] == 1);
$this->_sections['menu']['last']       = ($this->_sections['menu']['iteration'] == $this->_sections['menu']['total']);
?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['title']; ?>
<span class="caret"></span></a>
              <ul class="dropdown-menu reportico-dropdown">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if (isset ( $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items'][$this->_sections['menuitem']['index']]['reportname'] )): ?>
<li ><a class="reportico-dropdown-item" href="<?php echo $this->_tpl_vars['RUN_REPORT_URL']; ?>
&project=<?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['project']; ?>
&xmlin=<?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items'][$this->_sections['menuitem']['index']]['reportfile']; ?>
"><?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items'][$this->_sections['menuitem']['index']]['reportname']; ?>
</a></li>
<?php endif; ?>
<?php endfor; endif; ?>

              </ul>
            </li>
<?php endfor; endif; ?>
<?php endif; ?>
            </ul>
<?php if ($this->_tpl_vars['SHOW_HIDE_NAVIGATION_MENU'] == 'show'): ?>
            <ul class= "nav navbar-nav pull-right navbar-right">
<?php else: ?>
            <ul style="display:none" class= "nav navbar-nav pull-right navbar-right">
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_TOPMENU']): ?>
<?php if ($this->_tpl_vars['SHOW_LOGOUT']): ?>
            <li> <input class="span <?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swAdminButton2" type="submit" name="logout" value="<?php echo $this->_tpl_vars['T_LOGOFF']; ?>
"></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_LOGIN']): ?>
<?php if (strlen ( $this->_tpl_vars['PROJ_PASSWORD_ERROR'] ) > 0): ?>
                                <div style="color: #ff0000;"><?php echo $this->_tpl_vars['T_PASSWORD_ERROR']; ?>
</div>
<?php endif; ?>
            <li>
				<div style="inline-block; margin-top: 6px"><?php echo $this->_tpl_vars['T_ENTER_PROJECT_PASSWORD']; ?>
<input type="password" name="project_password" value="">
				<input class="span2 swAdminButton" type="submit" name="login" value="<?php echo $this->_tpl_vars['T_LOGIN']; ?>
">
                </div>
			</li>
<?php endif; ?>
<?php endif; ?>
<?php if (( $this->_tpl_vars['SHOW_ADMIN_BUTTON'] )): ?>
<?php if (strlen ( $this->_tpl_vars['ADMIN_MENU_URL'] ) > 0): ?> 
              <li>
                    <a class="swAdminButton2" href="<?php echo $this->_tpl_vars['ADMIN_MENU_URL']; ?>
"><?php echo $this->_tpl_vars['T_ADMIN_HOME']; ?>
</a>
              </li>
<?php endif; ?>
<?php endif; ?>
<?php if (( $this->_tpl_vars['SHOW_DESIGN_BUTTON'] )): ?>
<?php if (! $this->_tpl_vars['DEMO_MODE']): ?>
            <li style="float:right">
			    <a class="swLinkMenu2" href="<?php echo $this->_tpl_vars['CONFIGURE_PROJECT_URL']; ?>
"><?php echo $this->_tpl_vars['T_CONFIG_PROJECT']; ?>
</a>
            </li>
            <li style="float:right">
			    <a class="swLinkMenu2" href="<?php echo $this->_tpl_vars['CREATE_REPORT_URL']; ?>
"><?php echo $this->_tpl_vars['T_CREATE_REPORT']; ?>
</a>
            </li>
<?php endif; ?>
<?php endif; ?>
</div>
</ul>
        </div>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
        </div>
<?php endif; ?>
</div>

<!-- BOOTSTRAP VERSION -->
<?php endif; ?> 
<?php else: ?>
<?php if ($this->_tpl_vars['SHOW_HIDE_DROPDOWN_MENU'] == 'show' && $this->_tpl_vars['DROPDOWN_MENU_ITEMS']): ?>
<ul id="dropmenu" class="jd_menu" style="clear: none;float: left;width: 100%; ">
<?php unset($this->_sections['menu']);
$this->_sections['menu']['name'] = 'menu';
$this->_sections['menu']['loop'] = is_array($_loop=$this->_tpl_vars['DROPDOWN_MENU_ITEMS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu']['show'] = true;
$this->_sections['menu']['max'] = $this->_sections['menu']['loop'];
$this->_sections['menu']['step'] = 1;
$this->_sections['menu']['start'] = $this->_sections['menu']['step'] > 0 ? 0 : $this->_sections['menu']['loop']-1;
if ($this->_sections['menu']['show']) {
    $this->_sections['menu']['total'] = $this->_sections['menu']['loop'];
    if ($this->_sections['menu']['total'] == 0)
        $this->_sections['menu']['show'] = false;
} else
    $this->_sections['menu']['total'] = 0;
if ($this->_sections['menu']['show']):

            for ($this->_sections['menu']['index'] = $this->_sections['menu']['start'], $this->_sections['menu']['iteration'] = 1;
                 $this->_sections['menu']['iteration'] <= $this->_sections['menu']['total'];
                 $this->_sections['menu']['index'] += $this->_sections['menu']['step'], $this->_sections['menu']['iteration']++):
$this->_sections['menu']['rownum'] = $this->_sections['menu']['iteration'];
$this->_sections['menu']['index_prev'] = $this->_sections['menu']['index'] - $this->_sections['menu']['step'];
$this->_sections['menu']['index_next'] = $this->_sections['menu']['index'] + $this->_sections['menu']['step'];
$this->_sections['menu']['first']      = ($this->_sections['menu']['iteration'] == 1);
$this->_sections['menu']['last']       = ($this->_sections['menu']['iteration'] == $this->_sections['menu']['total']);
?>
<li style="margin-left: 20px; margin-top: 0px">
<a href="<?php echo $this->_tpl_vars['MAIN_MENU_URL']; ?>
&project=<?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['project']; ?>
"><?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['title']; ?>
</a>
<ul style="padding: 0px; margin: 0px">
<?php unset($this->_sections['menuitem']);
$this->_sections['menuitem']['name'] = 'menuitem';
$this->_sections['menuitem']['loop'] = is_array($_loop=$this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if (isset ( $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items'][$this->_sections['menuitem']['index']]['reportname'] )): ?>
<li ><a href="<?php echo $this->_tpl_vars['RUN_REPORT_URL']; ?>
&project=<?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['project']; ?>
&xmlin=<?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items'][$this->_sections['menuitem']['index']]['reportfile']; ?>
"><?php echo $this->_tpl_vars['DROPDOWN_MENU_ITEMS'][$this->_sections['menu']['index']]['items'][$this->_sections['menuitem']['index']]['reportname']; ?>
</a></li>
<?php endif; ?>
<?php endfor; endif; ?>
</ul>
</li>
<?php endfor; endif; ?>
</ul>
<?php endif; ?>
<?php endif; ?>
<H1 class="swTitle"><?php echo $this->_tpl_vars['TITLE']; ?>
</H1>
<?php if (! $this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php if ($this->_tpl_vars['SHOW_TOPMENU']): ?>
<?php if ($this->_tpl_vars['SHOW_HIDE_NAVIGATION_MENU'] == 'show'): ?>
	<TABLE class="swPrpTopMenu">
<?php else: ?>
	<TABLE style="display:none" class="swPrpTopMenu">
<?php endif; ?>
		<TR>
                        <TD class="swPrpTopMenuCell" style="width: 50%">
<?php if (( $this->_tpl_vars['SHOW_ADMIN_BUTTON'] )): ?>
			<a class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swLinkMenu" href="<?php echo $this->_tpl_vars['ADMIN_MENU_URL']; ?>
"><?php echo $this->_tpl_vars['T_ADMIN_HOME']; ?>
</a>
<?php endif; ?>
<?php if (( $this->_tpl_vars['SHOW_DESIGN_BUTTON'] )): ?>
<?php if (! $this->_tpl_vars['DEMO_MODE']): ?>
			<a class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swLinkMenu" href="<?php echo $this->_tpl_vars['CONFIGURE_PROJECT_URL']; ?>
"><?php echo $this->_tpl_vars['T_CONFIG_PROJECT']; ?>
</a>
			<a class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swLinkMenu" href="<?php echo $this->_tpl_vars['CREATE_REPORT_URL']; ?>
"><?php echo $this->_tpl_vars['T_CREATE_REPORT']; ?>
</a>
<?php endif; ?>
<?php endif; ?>
			</TD>
<?php if (strlen ( $this->_tpl_vars['DBUSER'] ) > 0): ?> 
			<TD class="swPrpTopMenuCell"><?php echo $this->_tpl_vars['T_LOGGED_IN_AS']; ?>
 <?php echo $this->_tpl_vars['DBUSER']; ?>
</TD>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['DBUSER'] ) == 0): ?> 
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['MAIN_MENU_URL'] ) > 0): ?> 
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_LOGIN']): ?>
			<TD align="left" class="swPrpTopMenuCell">
<br><br><br><br>
<?php if (strlen ( $this->_tpl_vars['PROJ_PASSWORD_ERROR'] ) > 0): ?>
                                <div style="color: #ff0000;"><?php echo $this->_tpl_vars['T_PASSWORD_ERROR']; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['DEMO_MODE']): ?>
<?php echo $this->_tpl_vars['T_ENTER_PROJECT_PASSWORD_DEMO']; ?>

<?php else: ?>
<?php echo $this->_tpl_vars['T_ENTER_PROJECT_PASSWORD']; ?>

<?php endif; ?>
<BR><input type="password" name="project_password" value=""></div>
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swLinkMenu reporticoSubmit" type="submit" name="login" value="<?php echo $this->_tpl_vars['T_LOGIN']; ?>
"><br><br><br><br><br>
			</TD>
<?php endif; ?>
			<TD style="text-align: center">
<?php if (count ( $this->_tpl_vars['LANGUAGES'] ) > 1 || ( $this->_tpl_vars['SHOW_DESIGN_BUTTON'] )): ?>
&nbsp; &nbsp; &nbsp; &nbsp;
                <?php echo $this->_tpl_vars['T_CHOOSE_LANGUAGE']; ?>
<BR>
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
                <input class="swMntButton reporticoSubmit" type="submit" name="submit_language" value="<?php echo $this->_tpl_vars['T_GO']; ?>
">
<?php endif; ?>
			</TD>
<?php if ($this->_tpl_vars['SHOW_LOGOUT']): ?>
			<TD width="15%" style="padding-left: 10px; text-align: right;" class="swPrpTopMenuCell">
				<input class="<?php echo $this->_tpl_vars['BOOTSTRAP_STYLE_ADMIN_BUTTON']; ?>
swLinkMenu reporticoSubmit" type="submit" name="logout" value="<?php echo $this->_tpl_vars['T_LOGOFF']; ?>
">
			</TD>
<?php endif; ?>
		</TR>
	</TABLE>
<?php endif; ?>
<?php endif; ?>

	<TABLE class="swMenu">
		<TR> <TD>&nbsp;</TD> </TR>
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