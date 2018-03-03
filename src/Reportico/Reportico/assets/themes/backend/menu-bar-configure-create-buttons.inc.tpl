{% if (SHOW_DESIGN_BUTTON) %}
{% if not DEMO_MODE %}
            <li style="float:right;display:inline-block">
                <a class="reportico-dropdown-link swLinkMenu2" href="{{ CONFIGURE_PROJECT_URL }}">{{ T_CONFIG_PROJECT }}</a>
            </li>
            <li style="float:right;display:inline-block">
                <a class="reportico-dropdown-link swLinkMenu2" href="{{ CREATE_REPORT_URL }}">{{ T_CREATE_REPORT }}</a>
            </li>
{% endif %}
{% endif %}
