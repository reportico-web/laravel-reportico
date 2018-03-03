			<div id="swPrpSubmitPane">
{% if not IS_ADMIN_SCREEN %}
{% if SHOW_HIDE_PREPARE_GO_BUTTONS == "show" %}
    				<input type="submit" class="{{ BOOTSTRAP_STYLE_GO_BUTTON }}prepareAjaxExecute swHTMLGoBox" id="prepareAjaxExecute" name="submitPrepare" value="{{ T_GO }}">
{% endif %}
{% if SHOW_HIDE_PREPARE_RESET_BUTTONS == "show" %}
    				<input type="submit" class="{{ BOOTSTRAP_STYLE_RESET_BUTTON }}reporticoSubmit" name="clearform" value="{{ T_RESET }}">
{% endif %}
{% else %}
    				<input type="submit" class="{{ BOOTSTRAP_STYLE_GO_BUTTON }}prepareAjaxExecute swHTMLGoBox" id="prepareAjaxExecute" name="submitPrepare" value="{{ T_GO }}">
{% endif %}
{% if SHOW_MINIMAINTAIN %} 
<div style="float: left">
{% if not REPORTICO_BOOTSTRAP_MODAL %}
                    <input type="submit" class="prepareMiniMaintain swMiniMaintain" style="margin-right: 30px" title="{{ T_EDIT }} {{ T_EDITCRITERIA }}" id="submit_mainquercrit" value="{{ T_EDITCRITERIA }}" name="mainquercrit_ANY">
{% else %}
                    <input type="submit" class="{{ BOOTSTRAP_STYLE_TOOLBAR_BUTTON }}prepareMiniMaintain swMiniMaintain" style="margin-right: 30px" title="{{ T_EDIT }} {{ T_EDITCRITERIA }}" id="submit_mainquercrit" value="{{ T_EDITCRITERIA }}" name="mainquercrit_ANY">

{% endif %}
</div>
{% endif %}
                    &nbsp;
			</div>
