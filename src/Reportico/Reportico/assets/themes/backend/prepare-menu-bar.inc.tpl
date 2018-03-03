<!  -- nav bar  drop down menu items and main menu options -->
{% if SHOW_HIDE_NAVIGATION_MENU == "show" or SHOW_HIDE_DROPDOWN_MENU == "show" %}
    <div class="navbar navbar-default reportico-navbar" role="navigation">
{% else %}
    <div style="display:none" class="navbar navbar-default reportico-navbar" role="navigation">
{% endif %}
        <div class="container-fluid">
            <div class="navbar-header reportico-navbar-header">
                    <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class= "collapse navbar-collapse"  style="display: inline-block !important" id="reportico-bootstrap-collapse" >
{% include 'backend/dropdown-menu.inc.tpl' %}
            </div>
            <div class="collapse navbar-collapse pull-right" style="display: inline-block" id="reportico-bootstrap-collapse2">
{% if SHOW_HIDE_NAVIGATION_MENU == "show"  %}
            <ul style="display:inline-block" class= "nav navbar-nav pull-right navbar-right">
{% else %}
            <ul style="display:none" class= "nav navbar-nav pull-right navbar-right">
{% endif %}
{% if SHOW_TOPMENU %}
{% include 'backend/menu-bar-design.inc.tpl' %}
{% include 'backend/menu-bar-debug-level.inc.tpl' %}
{% include 'backend/menu-bar-project-password.inc.tpl' %}
{% endif %}
{% include 'backend/menu-bar-admin-menu.inc.tpl' %}
{% include 'backend/menu-bar-project-menu.inc.tpl' %}
{% include 'backend/menu-bar-logout.inc.tpl' %}
</ul>
        </div>
</div>
</div>
