{% autoescape false %}
{% include 'backend/header.inc.tpl' %}
<div id="reportico_container">
<FORM class="swMenuForm" name="topmenu" method="POST" action="{{ SCRIPT_SELF }}">
<input type="hidden" name="reportico_session_name" value="{{ SESSION_ID }}" /> 

{% include 'backend/menu-menu-bar.inc.tpl' %}

<!-- BOOTSTRAP VERSION -->
<H1 class="swTitle">{{ TITLE }}</H1>
	<TABLE class="swMenu">
		<TR> <TD>&nbsp;</TD> </TR>
{% for menuitem in MENU_ITEMS %}
		<TR> 
			<TD class="swMenuItem">
{% if  menuitem.label == "TEXT" %}
				{{ menuitem.url|raw }}
{% else %}
{% if  menuitem.label == "BLANKLINE" %}
				&nbsp;
{% else %}
{% if  menuitem.label == "LINE" %}
				<hr>
{% else %}
				<a class="swMenuItemLink" href="{{ menuitem.url }}">{{ menuitem.label }}</a>
{% endif %}
{% endif %}
{% endif %}
			</TD>
		</TR>
{% endfor %}
		
		<TR> <TD>&nbsp;</TD> </TR>
	</TABLE>

{% if ERRORMSG|length>0 %} 
			<TABLE class="swError">
				<TR>
					<TD>{{ ERRORMSG }}</TD>
				</TR>
			</TABLE>
{% endif %}
</FORM>
{% include 'backend/reportico-banner.inc.tpl' %}
</div>
{% include 'backend/footer.inc.tpl' %}
{% endautoescape %}
