
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
  scEventControl_data["zbggbh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cgbbh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cgbmc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qylogin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["lxr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qymc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bj" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["jsfile" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["swfile" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qtfile" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["zbggbh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["zbggbh" + iSeqRow]["change"]) {
    return true;
  }
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
  if (scEventControl_data["bj" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bj" + iSeqRow]["change"]) {
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
  if ("zbggbh" + iFieldSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = oField.val();
    return;
  }
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_zbggbh' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_zbggbh_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_cg_qytb_zbggbh_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cg_qytb_zbggbh_onfocus(this, iSeqRow) });
  $('#id_sc_field_cgbbh' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_cgbbh_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cg_qytb_cgbbh_onfocus(this, iSeqRow) });
  $('#id_sc_field_cgbmc' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_cgbmc_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cg_qytb_cgbmc_onfocus(this, iSeqRow) });
  $('#id_sc_field_qylogin' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_qylogin_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_cg_qytb_qylogin_onfocus(this, iSeqRow) });
  $('#id_sc_field_lxr' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_lxr_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_cg_qytb_lxr_onfocus(this, iSeqRow) });
  $('#id_sc_field_qymc' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_qymc_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_cg_qytb_qymc_onfocus(this, iSeqRow) });
  $('#id_sc_field_bj' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_bj_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cg_qytb_bj_onfocus(this, iSeqRow) });
  $('#id_sc_field_jsfile' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_jsfile_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cg_qytb_jsfile_onfocus(this, iSeqRow) });
  $('#id_sc_field_swfile' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_swfile_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cg_qytb_swfile_onfocus(this, iSeqRow) });
  $('#id_sc_field_qtfile' + iSeqRow).bind('blur', function() { sc_form_cg_qytb_qtfile_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cg_qytb_qtfile_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cg_qytb_zbggbh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_zbggbh();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_zbggbh_onchange(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_event_zbggbh_onchange();
}

function sc_form_cg_qytb_zbggbh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_cgbbh_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_cgbbh();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_cgbbh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_cgbmc_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_cgbmc();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_cgbmc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_qylogin_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_qylogin();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_qylogin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_lxr_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_lxr();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_lxr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_qymc_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_qymc();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_qymc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_bj_onblur(oThis, iSeqRow) {
  do_ajax_form_cg_qytb_validate_bj();
  scCssBlur(oThis);
}

function sc_form_cg_qytb_bj_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cg_qytb_jsfile_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_cg_qytb_jsfile_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_cg_qytb_swfile_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_cg_qytb_swfile_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_cg_qytb_qtfile_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_cg_qytb_qtfile_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_tjsj" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_tjsj" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['tjsj']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['tjsj']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['tjsj']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_jsfile" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_cg_qytb_ul_save.php",
    dropZone: $("#hidden_field_data_jsfile" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'jsfile'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_jsfile" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_jsfile" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_jsfile" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_jsfile" + iSeqRow).hide();
      }
      if (fileData && fileData[0] && fileData[0].error && "acceptFileTypes" == fileData[0].error) {
        oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl']; ?>"};
        scAjaxShowDebug(oTemp);
        return;
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_jsfile" + iSeqRow).val("");
      $("#id_sc_field_jsfile_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_jsfile_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_jsfile" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_jsfile" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_jsfile" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_jsfile" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_swfile" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_cg_qytb_ul_save.php",
    dropZone: $("#hidden_field_data_swfile" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'swfile'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_swfile" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_swfile" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_swfile" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_swfile" + iSeqRow).hide();
      }
      if (fileData && fileData[0] && fileData[0].error && "acceptFileTypes" == fileData[0].error) {
        oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl']; ?>"};
        scAjaxShowDebug(oTemp);
        return;
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_swfile" + iSeqRow).val("");
      $("#id_sc_field_swfile_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_swfile_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_swfile" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_swfile" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_swfile" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_swfile" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_qtfile" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_cg_qytb_ul_save.php",
    dropZone: $("#hidden_field_data_qtfile" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'qtfile'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_qtfile" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_qtfile" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_qtfile" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_qtfile" + iSeqRow).hide();
      }
      if (fileData && fileData[0] && fileData[0].error && "acceptFileTypes" == fileData[0].error) {
        oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl']; ?>"};
        scAjaxShowDebug(oTemp);
        return;
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_qtfile" + iSeqRow).val("");
      $("#id_sc_field_qtfile_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_qtfile_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_qtfile" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_qtfile" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_qtfile" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_qtfile" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

