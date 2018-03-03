{% autoescape false %}
<!  -- Error and status message -->
{% include 'backend/message-error.inc.tpl' %}
{% include 'backend/message-status.inc.tpl' %}

{% if STATUSMSG|length==0 and ERRORMSG|length==0 %}
<p>
{% if SHOW_EXPANDED %}
{% include 'backend/prepare-criteria-expand-lookup.inc.tpl' %}
{% else %}
{% include 'backend/prepare-report-description.inc.tpl' %}
{% endif %}
{% endif %}
{% endautoescape%}
