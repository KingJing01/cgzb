
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
  scEventControl_data["cgbbh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cgbmc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qylogin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["lxr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qymc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isbsxz" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["istb" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isrw" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["isqualified" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sm" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["kyzt" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cgbbh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cgbbh" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cgbmc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cgbmc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qylogin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qylogin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lxr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lxr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qymc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qymc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isbsxz" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isbsxz" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["istb" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["istb" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isrw" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isrw" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["isqualified" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["isqualified" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sm" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sm" + iSeqRow]["change"]) {
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
  $('#id_sc_field_cgbbh' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_cgbbh_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cg_qysb_cgbbh_onfocus(this, iSeqRow) });
  $('#id_sc_field_cgbmc' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_cgbmc_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cg_qysb_cgbmc_onfocus(this, iSeqRow) });
  $('#id_sc_field_qylogin' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_qylogin_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_cg_qysb_qylogin_onfocus(this, iSeqRow) });
  $('#id_sc_field_lxr' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_lxr_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_cg_qysb_lxr_onfocus(this, iSeqRow) });
  $('#id_sc_field_qymc' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_qymc_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_qysb_qymc_onfocus(this, iSeqRow) });
  $('#id_sc_field_isbsxz' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_isbsxz_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cg_qysb_isbsxz_onfocus(this, iSeqRow) });
  $('#id_sc_field_istb' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_istb_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_qysb_istb_onfocus(this, iSeqRow) });
  $('#id_sc_field_isrw' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_isrw_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_qysb_isrw_onfocus(this, iSeqRow) });
  $('#id_sc_field_isqualified' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_isqualified_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_cg_qysb_isqualified_onfocus(this, iSeqRow) });
  $('#id_sc_field_sm' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_sm_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cg_qysb_sm_onfocus(this, iSeqRow) });
  $('#id_sc_field_kyzt' + iSeqRow).bind('blur', function() { sc_form_cg_qysb_kyzt_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_qysb_kyzt_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cg_qysb_cgbbh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_cgbbh();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_cgbbh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_cgbmc_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_cgbmc();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_cgbmc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_qylogin_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_qylogin();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_qylogin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_lxr_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_lxr();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_lxr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_qymc_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_qymc();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_qymc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_isbsxz_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_isbsxz();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_isbsxz_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_istb_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_istb();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_istb_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_isrw_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_isrw();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_isrw_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_isqualified_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_isqualified();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_isqualified_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_sm_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_sm();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_sm_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qysb_kyzt_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qysb_validate_kyzt();
  scCssBlur(oThis);
}

function sc_form_cg_qysb_kyzt_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dlsj" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dlsj" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dlsj']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dlsj']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dlsj']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

