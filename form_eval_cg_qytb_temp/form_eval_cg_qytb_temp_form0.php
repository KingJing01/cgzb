<?php
class form_eval_cg_qytb_temp_form extends form_eval_cg_qytb_temp_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("选择投标企业发起评标"); } else { echo strip_tags("选择投标企业发起评标"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_eval_cg_qytb_temp/form_eval_cg_qytb_temp_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_eval_cg_qytb_temp_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo $this->Ini->Nm_lang['lang_othr_smry_info']?>]";
    nm_sumario = nm_sumario.replace("?start?", reg_ini);
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_eval_cg_qytb_temp_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_eval_cg_qytb_temp_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" 
               action="./" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" /> 
<?php
$_SESSION['scriptcase']['error_span_title']['form_eval_cg_qytb_temp'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_eval_cg_qytb_temp'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "选择投标企业发起评标"; } else { echo "选择投标企业发起评标"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo "测评表名称: " . $_SESSION['v_cpbmc'] . "" ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterarsel", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "保存选中", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['sc_btn_0'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "sc_btn_0", "sc_btn_sc_btn_0()", "sc_btn_sc_btn_0()", "sc_sc_btn_0_top", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "放弃选中?", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "放弃选中?", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && ($this->nmgp_botoes['delete'] == "on" || $this->nmgp_botoes['update'] == "on")) { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   
    <TD class="scFormLabelOddMult"  width="10"> <?php echo $this->Ini->Nm_lang['lang_othr_slct_item'] ?><br /><input type="checkbox" class="sc-ui-checkbox-all-all" name="" /> </TD>
   
   <?php if (isset($this->nmgp_cmp_hidden['zbggbh_']) && $this->nmgp_cmp_hidden['zbggbh_'] == 'off') { $sStyleHidden_zbggbh_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['zbggbh_']) || $this->nmgp_cmp_hidden['zbggbh_'] == 'on') {
      if (!isset($this->nm_new_label['zbggbh_'])) {
          $this->nm_new_label['zbggbh_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_zbggbh'] . ""; } ?>

    <TD class="scFormLabelOddMult css_zbggbh__label" id="hidden_field_label_zbggbh_" style="<?php echo $sStyleHidden_zbggbh_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_zbggbh'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cgbbh_']) && $this->nmgp_cmp_hidden['cgbbh_'] == 'off') { $sStyleHidden_cgbbh_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cgbbh_']) || $this->nmgp_cmp_hidden['cgbbh_'] == 'on') {
      if (!isset($this->nm_new_label['cgbbh_'])) {
          $this->nm_new_label['cgbbh_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbbh'] . ""; } ?>

    <TD class="scFormLabelOddMult css_cgbbh__label" id="hidden_field_label_cgbbh_" style="<?php echo $sStyleHidden_cgbbh_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbbh'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cgbmc_']) && $this->nmgp_cmp_hidden['cgbmc_'] == 'off') { $sStyleHidden_cgbmc_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cgbmc_']) || $this->nmgp_cmp_hidden['cgbmc_'] == 'on') {
      if (!isset($this->nm_new_label['cgbmc_'])) {
          $this->nm_new_label['cgbmc_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbmc'] . ""; } ?>

    <TD class="scFormLabelOddMult css_cgbmc__label" id="hidden_field_label_cgbmc_" style="<?php echo $sStyleHidden_cgbmc_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbmc'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['qymc_']) && $this->nmgp_cmp_hidden['qymc_'] == 'off') { $sStyleHidden_qymc_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['qymc_']) || $this->nmgp_cmp_hidden['qymc_'] == 'on') {
      if (!isset($this->nm_new_label['qymc_'])) {
          $this->nm_new_label['qymc_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qymc'] . ""; } ?>

    <TD class="scFormLabelOddMult css_qymc__label" id="hidden_field_label_qymc_" style="<?php echo $sStyleHidden_qymc_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qymc'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['bj_']) && $this->nmgp_cmp_hidden['bj_'] == 'off') { $sStyleHidden_bj_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['bj_']) || $this->nmgp_cmp_hidden['bj_'] == 'on') {
      if (!isset($this->nm_new_label['bj_'])) {
          $this->nm_new_label['bj_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_bj'] . ""; } ?>

    <TD class="scFormLabelOddMult css_bj__label" id="hidden_field_label_bj_" style="<?php echo $sStyleHidden_bj_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_bj'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['tjsj_']) && $this->nmgp_cmp_hidden['tjsj_'] == 'off') { $sStyleHidden_tjsj_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['tjsj_']) || $this->nmgp_cmp_hidden['tjsj_'] == 'on') {
      if (!isset($this->nm_new_label['tjsj_'])) {
          $this->nm_new_label['tjsj_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tjsj'] . ""; } ?>

    <TD class="scFormLabelOddMult css_tjsj__label" id="hidden_field_label_tjsj_" style="<?php echo $sStyleHidden_tjsj_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tjsj'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['isflag_']) && $this->nmgp_cmp_hidden['isflag_'] == 'off') { $sStyleHidden_isflag_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['isflag_']) || $this->nmgp_cmp_hidden['isflag_'] == 'on') {
      if (!isset($this->nm_new_label['isflag_'])) {
          $this->nm_new_label['isflag_'] = "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_isflag'] . ""; } ?>

    <TD class="scFormLabelOddMult css_isflag__label" id="hidden_field_label_isflag_" style="<?php echo $sStyleHidden_isflag_; ?>" > <?php echo $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_isflag'] ?><br /><input type="checkbox" id="sc-ui-checkbox-isflag_-control" /> </TD>
   <?php } ?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_eval_cg_qytb_temp);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_eval_cg_qytb_temp = $this->form_vert_form_eval_cg_qytb_temp;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_eval_cg_qytb_temp))
   {
       $sc_seq_vert = 0;
   }
   foreach ($this->form_vert_form_eval_cg_qytb_temp as $sc_seq_vert => $sc_lixo)
   {
       $this->id_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['id_'];
       $this->tbbh_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tbbh_'];
       $this->qylogin_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qylogin_'];
       $this->lxr_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['lxr_'];
       $this->jsfile_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['jsfile_'];
       $this->swfile_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['swfile_'];
       $this->qtfile_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qtfile_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['zbggbh_'] = true;
           $this->nmgp_cmp_readonly['cgbbh_'] = true;
           $this->nmgp_cmp_readonly['cgbmc_'] = true;
           $this->nmgp_cmp_readonly['qymc_'] = true;
           $this->nmgp_cmp_readonly['bj_'] = true;
           $this->nmgp_cmp_readonly['tjsj_'] = true;
           $this->nmgp_cmp_readonly['isflag_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['zbggbh_']) || $this->nmgp_cmp_readonly['zbggbh_'] != "on") {$this->nmgp_cmp_readonly['zbggbh_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cgbbh_']) || $this->nmgp_cmp_readonly['cgbbh_'] != "on") {$this->nmgp_cmp_readonly['cgbbh_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cgbmc_']) || $this->nmgp_cmp_readonly['cgbmc_'] != "on") {$this->nmgp_cmp_readonly['cgbmc_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['qymc_']) || $this->nmgp_cmp_readonly['qymc_'] != "on") {$this->nmgp_cmp_readonly['qymc_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['bj_']) || $this->nmgp_cmp_readonly['bj_'] != "on") {$this->nmgp_cmp_readonly['bj_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['tjsj_']) || $this->nmgp_cmp_readonly['tjsj_'] != "on") {$this->nmgp_cmp_readonly['tjsj_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['isflag_']) || $this->nmgp_cmp_readonly['isflag_'] != "on") {$this->nmgp_cmp_readonly['isflag_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->zbggbh_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['zbggbh_']; 
       $zbggbh_ = $this->zbggbh_; 
       $sStyleHidden_zbggbh_ = '';
       if (isset($sCheckRead_zbggbh_))
       {
           unset($sCheckRead_zbggbh_);
       }
       if (isset($this->nmgp_cmp_readonly['zbggbh_']))
       {
           $sCheckRead_zbggbh_ = $this->nmgp_cmp_readonly['zbggbh_'];
       }
       if (isset($this->nmgp_cmp_hidden['zbggbh_']) && $this->nmgp_cmp_hidden['zbggbh_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['zbggbh_']);
           $sStyleHidden_zbggbh_ = 'display: none;';
       }
       $bTestReadOnly_zbggbh_ = true;
       $sStyleReadLab_zbggbh_ = 'display: none;';
       $sStyleReadInp_zbggbh_ = '';
       if (isset($this->nmgp_cmp_readonly['zbggbh_']) && $this->nmgp_cmp_readonly['zbggbh_'] == 'on')
       {
           $bTestReadOnly_zbggbh_ = false;
           unset($this->nmgp_cmp_readonly['zbggbh_']);
           $sStyleReadLab_zbggbh_ = '';
           $sStyleReadInp_zbggbh_ = 'display: none;';
       }
       $this->cgbbh_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbbh_']; 
       $cgbbh_ = $this->cgbbh_; 
       $sStyleHidden_cgbbh_ = '';
       if (isset($sCheckRead_cgbbh_))
       {
           unset($sCheckRead_cgbbh_);
       }
       if (isset($this->nmgp_cmp_readonly['cgbbh_']))
       {
           $sCheckRead_cgbbh_ = $this->nmgp_cmp_readonly['cgbbh_'];
       }
       if (isset($this->nmgp_cmp_hidden['cgbbh_']) && $this->nmgp_cmp_hidden['cgbbh_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cgbbh_']);
           $sStyleHidden_cgbbh_ = 'display: none;';
       }
       $bTestReadOnly_cgbbh_ = true;
       $sStyleReadLab_cgbbh_ = 'display: none;';
       $sStyleReadInp_cgbbh_ = '';
       if (isset($this->nmgp_cmp_readonly['cgbbh_']) && $this->nmgp_cmp_readonly['cgbbh_'] == 'on')
       {
           $bTestReadOnly_cgbbh_ = false;
           unset($this->nmgp_cmp_readonly['cgbbh_']);
           $sStyleReadLab_cgbbh_ = '';
           $sStyleReadInp_cgbbh_ = 'display: none;';
       }
       $this->cgbmc_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbmc_']; 
       $cgbmc_ = $this->cgbmc_; 
       $sStyleHidden_cgbmc_ = '';
       if (isset($sCheckRead_cgbmc_))
       {
           unset($sCheckRead_cgbmc_);
       }
       if (isset($this->nmgp_cmp_readonly['cgbmc_']))
       {
           $sCheckRead_cgbmc_ = $this->nmgp_cmp_readonly['cgbmc_'];
       }
       if (isset($this->nmgp_cmp_hidden['cgbmc_']) && $this->nmgp_cmp_hidden['cgbmc_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cgbmc_']);
           $sStyleHidden_cgbmc_ = 'display: none;';
       }
       $bTestReadOnly_cgbmc_ = true;
       $sStyleReadLab_cgbmc_ = 'display: none;';
       $sStyleReadInp_cgbmc_ = '';
       if (isset($this->nmgp_cmp_readonly['cgbmc_']) && $this->nmgp_cmp_readonly['cgbmc_'] == 'on')
       {
           $bTestReadOnly_cgbmc_ = false;
           unset($this->nmgp_cmp_readonly['cgbmc_']);
           $sStyleReadLab_cgbmc_ = '';
           $sStyleReadInp_cgbmc_ = 'display: none;';
       }
       $this->qymc_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qymc_']; 
       $qymc_ = $this->qymc_; 
       $sStyleHidden_qymc_ = '';
       if (isset($sCheckRead_qymc_))
       {
           unset($sCheckRead_qymc_);
       }
       if (isset($this->nmgp_cmp_readonly['qymc_']))
       {
           $sCheckRead_qymc_ = $this->nmgp_cmp_readonly['qymc_'];
       }
       if (isset($this->nmgp_cmp_hidden['qymc_']) && $this->nmgp_cmp_hidden['qymc_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['qymc_']);
           $sStyleHidden_qymc_ = 'display: none;';
       }
       $bTestReadOnly_qymc_ = true;
       $sStyleReadLab_qymc_ = 'display: none;';
       $sStyleReadInp_qymc_ = '';
       if (isset($this->nmgp_cmp_readonly['qymc_']) && $this->nmgp_cmp_readonly['qymc_'] == 'on')
       {
           $bTestReadOnly_qymc_ = false;
           unset($this->nmgp_cmp_readonly['qymc_']);
           $sStyleReadLab_qymc_ = '';
           $sStyleReadInp_qymc_ = 'display: none;';
       }
       $this->bj_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['bj_']; 
       $bj_ = $this->bj_; 
       $sStyleHidden_bj_ = '';
       if (isset($sCheckRead_bj_))
       {
           unset($sCheckRead_bj_);
       }
       if (isset($this->nmgp_cmp_readonly['bj_']))
       {
           $sCheckRead_bj_ = $this->nmgp_cmp_readonly['bj_'];
       }
       if (isset($this->nmgp_cmp_hidden['bj_']) && $this->nmgp_cmp_hidden['bj_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['bj_']);
           $sStyleHidden_bj_ = 'display: none;';
       }
       $bTestReadOnly_bj_ = true;
       $sStyleReadLab_bj_ = 'display: none;';
       $sStyleReadInp_bj_ = '';
       if (isset($this->nmgp_cmp_readonly['bj_']) && $this->nmgp_cmp_readonly['bj_'] == 'on')
       {
           $bTestReadOnly_bj_ = false;
           unset($this->nmgp_cmp_readonly['bj_']);
           $sStyleReadLab_bj_ = '';
           $sStyleReadInp_bj_ = 'display: none;';
       }
       $this->tjsj_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj_'] . ' ' . $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj__hora']; 
       $tjsj_ = $this->tjsj_; 
       $this->tjsj__hora = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj__hora']; 
       $tjsj__hora = $this->tjsj__hora; 
       $sStyleHidden_tjsj_ = '';
       if (isset($sCheckRead_tjsj_))
       {
           unset($sCheckRead_tjsj_);
       }
       if (isset($this->nmgp_cmp_readonly['tjsj_']))
       {
           $sCheckRead_tjsj_ = $this->nmgp_cmp_readonly['tjsj_'];
       }
       if (isset($this->nmgp_cmp_hidden['tjsj_']) && $this->nmgp_cmp_hidden['tjsj_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['tjsj_']);
           $sStyleHidden_tjsj_ = 'display: none;';
       }
       $bTestReadOnly_tjsj_ = true;
       $sStyleReadLab_tjsj_ = 'display: none;';
       $sStyleReadInp_tjsj_ = '';
       if (isset($this->nmgp_cmp_readonly['tjsj_']) && $this->nmgp_cmp_readonly['tjsj_'] == 'on')
       {
           $bTestReadOnly_tjsj_ = false;
           unset($this->nmgp_cmp_readonly['tjsj_']);
           $sStyleReadLab_tjsj_ = '';
           $sStyleReadInp_tjsj_ = 'display: none;';
       }
       $this->isflag_ = $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['isflag_']; 
       $isflag_ = $this->isflag_; 
       $sStyleHidden_isflag_ = '';
       if (isset($sCheckRead_isflag_))
       {
           unset($sCheckRead_isflag_);
       }
       if (isset($this->nmgp_cmp_readonly['isflag_']))
       {
           $sCheckRead_isflag_ = $this->nmgp_cmp_readonly['isflag_'];
       }
       if (isset($this->nmgp_cmp_hidden['isflag_']) && $this->nmgp_cmp_hidden['isflag_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['isflag_']);
           $sStyleHidden_isflag_ = 'display: none;';
       }
       $bTestReadOnly_isflag_ = true;
       $sStyleReadLab_isflag_ = 'display: none;';
       $sStyleReadInp_isflag_ = '';
       if (isset($this->nmgp_cmp_readonly['isflag_']) && $this->nmgp_cmp_readonly['isflag_'] == 'on')
       {
           $bTestReadOnly_isflag_ = false;
           unset($this->nmgp_cmp_readonly['isflag_']);
           $sStyleReadLab_isflag_ = '';
           $sStyleReadInp_isflag_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>" > <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && ($this->nmgp_botoes['delete'] == "on" || $this->nmgp_botoes['update'] == "on")) {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   
    <TD class="scFormDataOddMult" > 
<input type="checkbox" class="sc-ui-checkbox-record-all" name="" alt="<?php echo $sc_seq_vert ?>" /> </TD>
   
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_botoes['delete'] == "on" && $this->nmgp_opcao != "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_botoes['update'] == "on" && $this->nmgp_opcao != "novo") {
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_eval_cg_qytb_temp_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_eval_cg_qytb_temp_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_eval_cg_qytb_temp_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_eval_cg_qytb_temp_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_eval_cg_qytb_temp_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_eval_cg_qytb_temp_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['zbggbh_']) && $this->nmgp_cmp_hidden['zbggbh_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="zbggbh_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($zbggbh_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_zbggbh__line" id="hidden_field_data_zbggbh_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_zbggbh_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_zbggbh__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="zbggbh_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($zbggbh_); ?>"><span id="id_ajax_label_zbggbh_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($zbggbh_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zbggbh_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zbggbh_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cgbbh_']) && $this->nmgp_cmp_hidden['cgbbh_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cgbbh_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cgbbh_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_cgbbh__line" id="hidden_field_data_cgbbh_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cgbbh_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_cgbbh__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="cgbbh_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cgbbh_); ?>"><span id="id_ajax_label_cgbbh_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($cgbbh_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgbbh_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgbbh_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cgbmc_']) && $this->nmgp_cmp_hidden['cgbmc_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cgbmc_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cgbmc_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_cgbmc__line" id="hidden_field_data_cgbmc_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cgbmc_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_cgbmc__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="cgbmc_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cgbmc_); ?>"><span id="id_ajax_label_cgbmc_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($cgbmc_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgbmc_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgbmc_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['qymc_']) && $this->nmgp_cmp_hidden['qymc_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qymc_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($qymc_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_qymc__line" id="hidden_field_data_qymc_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_qymc_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_qymc__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="qymc_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($qymc_); ?>"><span id="id_ajax_label_qymc_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($qymc_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qymc_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qymc_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['bj_']) && $this->nmgp_cmp_hidden['bj_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bj_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($bj_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_bj__line" id="hidden_field_data_bj_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_bj_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_bj__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="bj_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($bj_); ?>"><span id="id_ajax_label_bj_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($bj_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bj_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bj_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['tjsj_']) && $this->nmgp_cmp_hidden['tjsj_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tjsj_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($tjsj_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_tjsj__line" id="hidden_field_data_tjsj_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_tjsj_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_tjsj__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="tjsj_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($tjsj_); ?>"><span id="id_ajax_label_tjsj_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($tjsj_); ?></span>
<?php
$tmp_form_data = $this->field_config['tjsj_']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tjsj_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tjsj_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->tjsj_ = $old_dt_tjsj_;
?>

   <?php if (isset($this->nmgp_cmp_hidden['isflag_']) && $this->nmgp_cmp_hidden['isflag_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="isflag_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->isflag_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->isflag__1 = explode(";", trim($this->isflag_));
  } 
  else
  {
      if (empty($this->isflag_))
      {
          $this->isflag__1= array(); 
      } 
      else
      {
          $this->isflag__1= $this->isflag_; 
          $this->isflag_= ""; 
          foreach ($this->isflag__1 as $cada_isflag_)
          {
             if (!empty($isflag_))
             {
                 $this->isflag_.= ";"; 
             } 
             $this->isflag_.= $cada_isflag_; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOddMult css_isflag__line" id="hidden_field_data_isflag_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_isflag_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_isflag__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_isflag_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isflag_"]) &&  $this->nmgp_cmp_readonly["isflag_"] == "on") { 

$isflag__look = "";
 if (in_array("Y", $this->isflag__1))  { $isflag__look .= "" . $this->Ini->Nm_lang['lang_opt_yes'] . "<br />";} 
?>
<input type="hidden" name="isflag_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($isflag_) . "\">" . $isflag__look . ""; ?>
<?php } else { ?>

<?php

$isflag__look = "";
 if (in_array("Y", $this->isflag__1))  { $isflag__look .= "" . $this->Ini->Nm_lang['lang_opt_yes'] . "<br />";} 
?>
<span id="id_read_on_isflag_<?php echo $sc_seq_vert ; ?>" class="css_isflag__line" style="<?php echo $sStyleReadLab_isflag_; ?>"><?php echo $this->form_encode_input($isflag__look); ?></span><span id="id_read_off_isflag_<?php echo $sc_seq_vert ; ?>" style="<?php echo $sStyleReadInp_isflag_; ?>"><?php echo "<div id=\"idAjaxCheckbox_isflag_" . $sc_seq_vert . "\" style=\"display: inline-block\">\r\n"; ?><TABLE cellpadding="0" cellspacing="0" border="0"><TR>
  <TD class="scFormDataFontOddMult css_isflag__line"> <input type=checkbox class="sc-ui-checkbox-isflag_ sc-ui-checkbox-isflag_<?php echo $sc_seq_vert ?>" name="isflag_<?php echo $sc_seq_vert ?>[]" value="Y"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['Lookup_isflag_'][] = 'Y'; ?>
<?php  if (in_array("Y", $this->isflag__1))  { echo " checked" ;} ?> onClick="nm_check_insert(<?php echo $sc_seq_vert ?>);"  style="float:left; position:relative; top: -3px;"><?php echo $this->Ini->Nm_lang['lang_opt_yes']; ?></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isflag_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isflag_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_zbggbh_))
       {
           $this->nmgp_cmp_readonly['zbggbh_'] = $sCheckRead_zbggbh_;
       }
       if ('display: none;' == $sStyleHidden_zbggbh_)
       {
           $this->nmgp_cmp_hidden['zbggbh_'] = 'off';
       }
       if (isset($sCheckRead_cgbbh_))
       {
           $this->nmgp_cmp_readonly['cgbbh_'] = $sCheckRead_cgbbh_;
       }
       if ('display: none;' == $sStyleHidden_cgbbh_)
       {
           $this->nmgp_cmp_hidden['cgbbh_'] = 'off';
       }
       if (isset($sCheckRead_cgbmc_))
       {
           $this->nmgp_cmp_readonly['cgbmc_'] = $sCheckRead_cgbmc_;
       }
       if ('display: none;' == $sStyleHidden_cgbmc_)
       {
           $this->nmgp_cmp_hidden['cgbmc_'] = 'off';
       }
       if (isset($sCheckRead_qymc_))
       {
           $this->nmgp_cmp_readonly['qymc_'] = $sCheckRead_qymc_;
       }
       if ('display: none;' == $sStyleHidden_qymc_)
       {
           $this->nmgp_cmp_hidden['qymc_'] = 'off';
       }
       if (isset($sCheckRead_bj_))
       {
           $this->nmgp_cmp_readonly['bj_'] = $sCheckRead_bj_;
       }
       if ('display: none;' == $sStyleHidden_bj_)
       {
           $this->nmgp_cmp_hidden['bj_'] = 'off';
       }
       if (isset($sCheckRead_tjsj_))
       {
           $this->nmgp_cmp_readonly['tjsj_'] = $sCheckRead_tjsj_;
       }
       if ('display: none;' == $sStyleHidden_tjsj_)
       {
           $this->nmgp_cmp_hidden['tjsj_'] = 'off';
       }
       if (isset($sCheckRead_isflag_))
       {
           $this->nmgp_cmp_readonly['isflag_'] = $sCheckRead_isflag_;
       }
       if ('display: none;' == $sStyleHidden_isflag_)
       {
           $this->nmgp_cmp_hidden['isflag_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_eval_cg_qytb_temp = $guarda_form_vert_form_eval_cg_qytb_temp;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div> 
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['qtline'] == "on")
      {
?> 
          <span class="<?php echo $this->css_css_toolbar_obj ?>" style="border: 0px;"><?php echo $this->Ini->Nm_lang['lang_btns_rows'] ?></span>
          <select class="scFormToolbarInput" name="nmgp_quant_linhas_b" onchange="document.F7.nmgp_max_line.value = this.value; document.F7.submit();"> 
<?php 
              $obj_sel = ($this->sc_max_reg == '10') ? " selected" : "";
?> 
           <option value="10" <?php echo $obj_sel ?>>10</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '20') ? " selected" : "";
?> 
           <option value="20" <?php echo $obj_sel ?>>20</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '50') ? " selected" : "";
?> 
           <option value="50" <?php echo $obj_sel ?>>50</option>
          </select>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['masterValue']);
?>
}
<?php
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_eval_cg_qytb_temp");
 parent.scAjaxDetailHeight("form_eval_cg_qytb_temp", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_eval_cg_qytb_temp", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_eval_cg_qytb_temp", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
</body> 
</html> 
<?php 
 } 
} 
?> 
