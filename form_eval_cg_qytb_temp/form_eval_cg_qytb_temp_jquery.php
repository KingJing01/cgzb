
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

  $('#sc-ui-checkbox-isflag_-control').click(function() { scJQCheckboxControl('isflag_', '__ALL__', this); });

  $('.sc-ui-checkbox-all-all').click(function() { scJQCheckboxControl('__ALL__', '__ALL__', this); });
  $('.sc-ui-checkbox-record-all').click(function() { scJQCheckboxControl('__ALL__', '__REC__', this); });

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
  scEventControl_data["zbggbh_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cgbbh_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cgbmc_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qymc_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bj_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["tjsj_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isflag_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["zbggbh_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["zbggbh_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cgbbh_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cgbbh_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cgbmc_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cgbmc_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qymc_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qymc_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bj_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bj_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tjsj_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tjsj_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isflag_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isflag_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
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
  $('#id_sc_field_zbggbh_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_zbggbh__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_eval_cg_qytb_temp_zbggbh__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_eval_cg_qytb_temp_zbggbh__onfocus(this, iSeqRow) });
  $('#id_sc_field_cgbbh_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_cgbbh__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_eval_cg_qytb_temp_cgbbh__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_eval_cg_qytb_temp_cgbbh__onfocus(this, iSeqRow) });
  $('#id_sc_field_cgbmc_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_cgbmc__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_eval_cg_qytb_temp_cgbmc__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_eval_cg_qytb_temp_cgbmc__onfocus(this, iSeqRow) });
  $('#id_sc_field_qymc_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_qymc__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_eval_cg_qytb_temp_qymc__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_eval_cg_qytb_temp_qymc__onfocus(this, iSeqRow) });
  $('#id_sc_field_bj_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_bj__onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_eval_cg_qytb_temp_bj__onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_eval_cg_qytb_temp_bj__onfocus(this, iSeqRow) });
  $('#id_sc_field_tjsj_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_tjsj__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_eval_cg_qytb_temp_tjsj__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_eval_cg_qytb_temp_tjsj__onfocus(this, iSeqRow) });
  $('#id_sc_field_tjsj__hora' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_tjsj__hora_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_eval_cg_qytb_temp_tjsj__hora_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_eval_cg_qytb_temp_tjsj__hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_isflag_' + iSeqRow).bind('blur', function() { sc_form_eval_cg_qytb_temp_isflag__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_eval_cg_qytb_temp_isflag__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_eval_cg_qytb_temp_isflag__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_eval_cg_qytb_temp_zbggbh__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_zbggbh_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_zbggbh__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_zbggbh__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_cgbbh__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_cgbbh_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_cgbbh__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_cgbbh__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_cgbmc__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_cgbmc_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_cgbmc__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_cgbmc__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_qymc__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_qymc_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_qymc__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_qymc__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_bj__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_bj_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_bj__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_bj__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_tjsj__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_tjsj_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_tjsj__hora_onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_tjsj_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_tjsj__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_tjsj__hora_onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_tjsj__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_tjsj__hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_isflag__onblur(oThis, iSeqRow) {
  do_ajax_form_eval_cg_qytb_temp_validate_isflag_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_eval_cg_qytb_temp_isflag__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_eval_cg_qytb_temp_isflag__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_tjsj_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_tjsj_" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['tjsj_']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['tjsj_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['tjsj_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

function scJQCheckboxControl(sColumn, sSeqRow, oCheckbox) {
  var iSeqRow = '';

  if ('__ALL__' == sColumn || 'isflag_' == sColumn) {
    iSeqRow = ('__REC__' == sSeqRow) ? $(oCheckbox).attr('alt') : '';
    scJQCheckboxControl_isflag_(iSeqRow, oCheckbox.checked);
    if ('__REC__' == sSeqRow) {
      nm_check_insert(iSeqRow);
    }
    else {
      if ('__ALL__' == sColumn || 'isflag_' == sColumn) {
         for (var i = 1; i <= iAjaxNewLine; i++) {
           nm_check_insert(i);
         }
      }
    }
    if ('__ALL__' == sColumn && '__ALL__' == sSeqRow) {
      var $oCheckbox = $(".sc-ui-checkbox-record-all");
      for (var i = 0; i < $oCheckbox.length; i++) {
        if (oCheckbox.checked != $oCheckbox[i].checked) {
          $oCheckbox[i].checked = oCheckbox.checked;
        }
      }
    }
  }

} // scJQCheckboxControl

function scJQCheckboxControl_isflag_(iSeqRow, bChecked) {
  if ('__ALL__' == iSeqRow) {
    var $oCheckbox = $(".sc-ui-checkbox-isflag_");
  }
  else {
    var $oCheckbox = $(".sc-ui-checkbox-isflag_" + iSeqRow);
  }

  var bChanged = false;
  for (var i = 0; i < $oCheckbox.length; i++) {
    if (bChecked != $oCheckbox[i].checked && !$oCheckbox[i].disabled) {
      $oCheckbox[i].checked = bChecked;
      nm_check_insert(iSeqRow);
      bChanged = true;
    }
  }
} // scJQCheckboxControl_isflag_

