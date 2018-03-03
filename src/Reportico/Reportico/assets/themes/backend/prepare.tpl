{% autoescape false %}
{% include 'backend/header.inc.tpl' %}

<div id="reportico_container">

    <script>
        reportico_criteria_items = [];
{% if CRITERIA_ITEMS is defined %}
{% for critno in CRITERIA_ITEMS %}
        reportico_criteria_items.push("{{critno.name}}");
{% endfor %}
{% endif %}
    </script>
{% if PDF_DELIVERY_MODE is defined %}
<script type="text/javascript">var reportico_pdf_delivery_mode = "{{ PDF_DELIVERY_MODE }}";</script>
{% endif %}

<FORM class="swPrpForm" id="criteriaform" name="topmenu" method="POST" action="{{ SCRIPT_SELF }}">
<input type="hidden" name="reportico_session_name" value="{{ SESSION_ID }}" />

<!-- Menu Bar -->
{% include 'backend/prepare-menu-bar.inc.tpl' %}

<!-- Output options -->
{% include 'backend/prepare-design-options.inc.tpl' %}

<!-- Report Title -->
{% include 'backend/prepare-title.inc.tpl' %}

<!-- Report Output options -->
<div class="swPrpCritBox" style="background-color: #ffffff" id="critbody">
{% if SHOW_OUTPUT and not IS_ADMIN_SCREEN %}
{% include 'backend/prepare-output-table-form.inc.tpl' %}
{% include 'backend/prepare-output-formats.inc.tpl' %}
{% include 'backend/prepare-output-show-hide-options.inc.tpl' %}
{% endif %}
</div>

<!-- Criteria Items and Expand Box -->
{% if SHOW_CRITERIA %}
<div id="criteriabody">
  <div class="swPrpCritBox" style="display: table">
    <div id="swPrpCriteriaBody" style="display: table-row">
      <div class="swPrpCritEntry" style="float:left;">
         {% include 'backend/prepare-criteria-items-header.inc.tpl' %}
         {% include 'backend/prepare-criteria-items.inc.tpl' %}
         {% include 'backend/prepare-criteria-items-trailer.inc.tpl' %}
      </div>
      <div class="swPrpExpand" style="float:left">
        <div class="swPrpExpandBox">
          <div class="swPrpExpandRow">
            <div id="swPrpExpandCell" valign="top">
               {% include 'backend/prepare-expand-contents.inc.tpl' %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endif %}

</FORM>
{% include 'backend/prepare-modals.inc.tpl' %}
{% include 'backend/reportico-banner.inc.tpl' %}
</div>
{% include 'backend/footer.inc.tpl' %}

{% endautoescape %}
