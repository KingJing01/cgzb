
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
  scEventControl_data["bzmc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ms" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isqs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isjs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["yhlx" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bmlx" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isgdyh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["gdyh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["listorder" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["bzmc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bzmc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ms" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ms" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isqs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isqs" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isjs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isjs" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["yhlx" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["yhlx" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bmlx" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bmlx" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isgdyh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isgdyh" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gdyh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gdyh" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["listorder" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["listorder" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("yhlx" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("bmlx" + iSeq == fieldName) {
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
  $('#id_sc_field_bzmc' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_bzmc_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_shbz_bzmc_onfocus(this, iSeqRow) });
  $('#id_sc_field_ms' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_ms_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cg_shbz_ms_onfocus(this, iSeqRow) });
  $('#id_sc_field_isqs' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_isqs_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_shbz_isqs_onfocus(this, iSeqRow) });
  $('#id_sc_field_isjs' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_isjs_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_shbz_isjs_onfocus(this, iSeqRow) });
  $('#id_sc_field_yhlx' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_yhlx_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_shbz_yhlx_onfocus(this, iSeqRow) });
  $('#id_sc_field_bmlx' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_bmlx_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_shbz_bmlx_onfocus(this, iSeqRow) });
  $('#id_sc_field_isgdyh' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_isgdyh_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cg_shbz_isgdyh_onfocus(this, iSeqRow) });
  $('#id_sc_field_gdyh' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_gdyh_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_shbz_gdyh_onfocus(this, iSeqRow) });
  $('#id_sc_field_listorder' + iSeqRow).bind('blur', function() { sc_form_cg_shbz_listorder_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_cg_shbz_listorder_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cg_shbz_bzmc_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_bzmc();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_bzmc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_ms_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_ms();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_ms_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_isqs_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_isqs();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_isqs_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_isjs_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_isjs();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_isjs_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_yhlx_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_yhlx();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_yhlx_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_bmlx_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_bmlx();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_bmlx_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_isgdyh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_isgdyh();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_isgdyh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_gdyh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_gdyh();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_gdyh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_shbz_listorder_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_shbz_validate_listorder();
  scCssBlur(oThis);
}

function sc_form_cg_shbz_listorder_onfocus(oThis, iSeqRow) {
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

