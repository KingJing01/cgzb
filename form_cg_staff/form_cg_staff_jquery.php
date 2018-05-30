
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    if (false == scSetFocusOnField($("#id_ac_" + sField))) {
      setTimeout(function () { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["ygbh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ygxm" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["xb" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bm" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["zw" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["zjhm" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["yddh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["kyzt" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["ygbh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ygbh" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ygxm" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ygxm" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["xb" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["xb" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bm" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bm" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["zw" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["zw" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["zjhm" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["zjhm" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["yddh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["yddh" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["kyzt" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["kyzt" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("bm" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("zw" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onChange_call(sFieldName, iFieldSeq) {
  var oField, fieldId, fieldName;
  oField = $("#id_sc_field_" + sFieldName + iFieldSeq);
  fieldId = oField.attr("id");
  fieldName = fieldId.substr(12);
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_ygbh' + iSeqRow).bind('blur', function() { sc_form_cg_staff_ygbh_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_staff_ygbh_onfocus(this, iSeqRow) });
  $('#id_sc_field_ygxm' + iSeqRow).bind('blur', function() { sc_form_cg_staff_ygxm_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_staff_ygxm_onfocus(this, iSeqRow) });
  $('#id_sc_field_xb' + iSeqRow).bind('blur', function() { sc_form_cg_staff_xb_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cg_staff_xb_onfocus(this, iSeqRow) });
  $('#id_sc_field_bm' + iSeqRow).bind('blur', function() { sc_form_cg_staff_bm_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cg_staff_bm_onfocus(this, iSeqRow) });
  $('#id_sc_field_zw' + iSeqRow).bind('blur', function() { sc_form_cg_staff_zw_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cg_staff_zw_onfocus(this, iSeqRow) });
  $('#id_sc_field_zjhm' + iSeqRow).bind('blur', function() { sc_form_cg_staff_zjhm_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_staff_zjhm_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_cg_staff_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cg_staff_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_yddh' + iSeqRow).bind('blur', function() { sc_form_cg_staff_yddh_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_staff_yddh_onfocus(this, iSeqRow) });
  $('#id_sc_field_kyzt' + iSeqRow).bind('blur', function() { sc_form_cg_staff_kyzt_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_staff_kyzt_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cg_staff_ygbh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_ygbh();
  scCssBlur(oThis);
}

function sc_form_cg_staff_ygbh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_ygxm_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_ygxm();
  scCssBlur(oThis);
}

function sc_form_cg_staff_ygxm_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_xb_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_xb();
  scCssBlur(oThis);
}

function sc_form_cg_staff_xb_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_bm_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_bm();
  scCssBlur(oThis);
}

function sc_form_cg_staff_bm_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_zw_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_zw();
  scCssBlur(oThis);
}

function sc_form_cg_staff_zw_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_zjhm_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_zjhm();
  scCssBlur(oThis);
}

function sc_form_cg_staff_zjhm_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_email_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_email();
  scCssBlur(oThis);
}

function sc_form_cg_staff_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_yddh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_yddh();
  scCssBlur(oThis);
}

function sc_form_cg_staff_yddh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_staff_kyzt_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_staff_validate_kyzt();
  scCssBlur(oThis);
}

function sc_form_cg_staff_kyzt_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

