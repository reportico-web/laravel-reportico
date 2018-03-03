{% if (SHOW_ADMIN_BUTTON) %}
{% if ADMIN_MENU_URL|length>0 %} 
              <li style="display: inline-block">
                    <a class="nav-link swAdminButton2 reportico-dropdown-link" href="{{ ADMIN_MENU_URL|raw }}">{{ T_ADMIN_MENU }}</a>
              </li>
{% endif %}
{% endif %}
