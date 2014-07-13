<?php /* Smarty version 2.6.26, created on 2014-07-11 14:41:47
         compiled from execute.tpl */ ?>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_CALLED']): ?>
<?php if (! $this->_tpl_vars['EMBEDDED_REPORT']): ?>
<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE><?php echo $this->_tpl_vars['TITLE']; ?>
</TITLE>
<?php echo $this->_tpl_vars['OUTPUT_ENCODING']; ?>

</HEAD>
<?php if ($this->_tpl_vars['REPORT_PAGE_STYLE']): ?>
<?php if ($this->_tpl_vars['REPORTICO_STANDALONE_WINDOW']): ?>
<BODY class="swRepBody swRepBodyStandalone" <?php echo $this->_tpl_vars['REPORT_PAGE_STYLE']; ?>
;">
<?php else: ?>
<BODY class="swRepBody">
<?php endif; ?>
<?php else: ?>
<?php if ($this->_tpl_vars['REPORTICO_STANDALONE_WINDOW']): ?>
<BODY class="swRepBody swRepBodyStandalone">
<?php else: ?>
<BODY class="swRepBody">
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES']): ?>
<?php if ($this->_tpl_vars['BOOTSTRAP_STYLES'] == '2'): ?>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/bootstrap2/bootstrap.min.css">
<?php else: ?>
<LINK id="bootstrap_css" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/bootstrap3/bootstrap.min.css">
<?php endif; ?>
<?php endif; ?>
<LINK id="PRP_StyleSheet" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEET']; ?>
">
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
<LINK id="PRP_StyleSheet" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEET']; ?>
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
<script type="text/javascript">var reportico_report_title = "'; ?>
<?php echo $this->_tpl_vars['TITLE']; ?>
<?php echo '";</script>
<script type="text/javascript">var reportico_css_path = "'; ?>
<?php echo $this->_tpl_vars['STYLESHEET']; ?>
<?php echo '";</script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['REPORTICO_CHARTING_ENGINE'] == 'FLOT'): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/flot/jquery.flot.js"></script>
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/flot/jquery.flot.axislabels.js"></script>
'; ?>

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
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_PRELOADED']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/jquery.dataTables.min.js"></script>
'; ?>

<LINK id="PRP_StyleSheet" REL="stylesheet" TYPE="text/css" HREF="<?php echo $this->_tpl_vars['STYLESHEETDIR']; ?>
/jquery.dataTables.css">
<?php endif; ?>
<?php if ($this->_tpl_vars['PRINTABLE_HTML']): ?>
<?php echo '
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['JSPATH']; ?>
<?php echo '/reportico.js"></script>
<script type="text/javascript">
/*
* Where multiple data tables exist due to graphs
* resize the columns of all tables to match the first
*/
function resizeOutputTables(window)
{
  var tableArr = reportico_jquery(".swRepPage");
  var tableDataRow = reportico_jquery(\'.swRepResultLine:first\');

  var cellWidths = new Array();
  reportico_jquery(tableDataRow).each(function() {
    for(j = 0; j < reportico_jquery(this)[0].cells.length; j++){
       var cell = reportico_jquery(this)[0].cells[j];
       if(!cellWidths[j] || cellWidths[j] < cell.clientWidth) cellWidths[j] = cell.clientWidth;
    }
  });

  var tablect = 0;
  reportico_jquery(tableArr).each(function() {
    tablect++;
    if ( tablect == 1 )
        return;

    reportico_jquery(this).find(".swRepResultLine:first").each(function() {
      for(j = 0; j < reportico_jquery(this)[0].cells.length; j++){
        reportico_jquery(this)[0].cells[j].style.width = cellWidths[j]+\'px\';
      }
   });
 });
}
</script>
'; ?>

<?php endif; ?>
<div id="reportico_container">
<div class="swRepForm">
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
<?php if ($this->_tpl_vars['SHOW_LOGIN']): ?>
			<TD width="10%"></TD>
			<TD width="55%" align="left" class="swPrpTopMenuCell">
<?php if (strlen ( $this->_tpl_vars['PROJ_PASSWORD_ERROR'] ) > 0): ?>
                                <div style="color: #ff0000;"><?php echo $this->_tpl_vars['PASSWORD_ERROR']; ?>
</div>
<?php endif; ?>
				Enter the report project password. <br><input type="password" name="project_password" value=""></div>
				<input class="swLinkMenu" type="submit" name="login" value="Login">
			</TD>
<?php endif; ?>
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
<?php echo $this->_tpl_vars['CONTENT']; ?>

</div>
</div>
<?php if (! $this->_tpl_vars['REPORTICO_AJAX_CALLED']): ?>
<?php if (! $this->_tpl_vars['EMBEDDED_REPORT']): ?>
</BODY>
</HTML>
<?php endif; ?>
<?php endif; ?>
