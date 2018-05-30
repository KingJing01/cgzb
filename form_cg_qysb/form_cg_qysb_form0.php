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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - " . $this->Ini->Nm_lang['lang_menu_cg_qysb'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_menu_cg_qysb'] . ""); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

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
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_cg_qysb/form_cg_qysb_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_cg_qysb_sajax_js.php");
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
<?php

include_once('form_cg_qysb_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
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
   });
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['recarga'];
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
 include_once("form_cg_qysb_js0.php");
?>
<script type="text/javascript"> 
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
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" /> 
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_cg_qysb'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_cg_qysb'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - " . $this->Ini->Nm_lang['lang_menu_cg_qysb'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_menu_cg_qysb'] . ""; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['run_iframe'] != "R")
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
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cgbbh']))
    {
        $this->nm_new_label['cgbbh'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_cgbbh'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cgbbh = $this->cgbbh;
   $sStyleHidden_cgbbh = '';
   if (isset($this->nmgp_cmp_hidden['cgbbh']) && $this->nmgp_cmp_hidden['cgbbh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cgbbh']);
       $sStyleHidden_cgbbh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cgbbh = 'display: none;';
   $sStyleReadInp_cgbbh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cgbbh']) && $this->nmgp_cmp_readonly['cgbbh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cgbbh']);
       $sStyleReadLab_cgbbh = '';
       $sStyleReadInp_cgbbh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cgbbh']) && $this->nmgp_cmp_hidden['cgbbh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cgbbh" value="<?php echo $this->form_encode_input($cgbbh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cgbbh_label" id="hidden_field_label_cgbbh" style="<?php echo $sStyleHidden_cgbbh; ?>"><span id="id_label_cgbbh"><?php echo $this->nm_new_label['cgbbh']; ?></span></TD>
    <TD class="scFormDataOdd css_cgbbh_line" id="hidden_field_data_cgbbh" style="<?php echo $sStyleHidden_cgbbh; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cgbbh_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="cgbbh" value="<?php echo $this->form_encode_input($cgbbh); ?>"><span id="id_ajax_label_cgbbh"><?php echo nl2br($cgbbh); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgbbh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgbbh_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cgbmc']))
    {
        $this->nm_new_label['cgbmc'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_cgbmc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cgbmc = $this->cgbmc;
   $sStyleHidden_cgbmc = '';
   if (isset($this->nmgp_cmp_hidden['cgbmc']) && $this->nmgp_cmp_hidden['cgbmc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cgbmc']);
       $sStyleHidden_cgbmc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cgbmc = 'display: none;';
   $sStyleReadInp_cgbmc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cgbmc']) && $this->nmgp_cmp_readonly['cgbmc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cgbmc']);
       $sStyleReadLab_cgbmc = '';
       $sStyleReadInp_cgbmc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cgbmc']) && $this->nmgp_cmp_hidden['cgbmc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cgbmc" value="<?php echo $this->form_encode_input($cgbmc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cgbmc_label" id="hidden_field_label_cgbmc" style="<?php echo $sStyleHidden_cgbmc; ?>"><span id="id_label_cgbmc"><?php echo $this->nm_new_label['cgbmc']; ?></span></TD>
    <TD class="scFormDataOdd css_cgbmc_line" id="hidden_field_data_cgbmc" style="<?php echo $sStyleHidden_cgbmc; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cgbmc_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="cgbmc" value="<?php echo $this->form_encode_input($cgbmc); ?>"><span id="id_ajax_label_cgbmc"><?php echo nl2br($cgbmc); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgbmc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgbmc_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qylogin']))
    {
        $this->nm_new_label['qylogin'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_qylogin'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qylogin = $this->qylogin;
   $sStyleHidden_qylogin = '';
   if (isset($this->nmgp_cmp_hidden['qylogin']) && $this->nmgp_cmp_hidden['qylogin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qylogin']);
       $sStyleHidden_qylogin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qylogin = 'display: none;';
   $sStyleReadInp_qylogin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qylogin']) && $this->nmgp_cmp_readonly['qylogin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qylogin']);
       $sStyleReadLab_qylogin = '';
       $sStyleReadInp_qylogin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qylogin']) && $this->nmgp_cmp_hidden['qylogin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qylogin" value="<?php echo $this->form_encode_input($qylogin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qylogin_label" id="hidden_field_label_qylogin" style="<?php echo $sStyleHidden_qylogin; ?>"><span id="id_label_qylogin"><?php echo $this->nm_new_label['qylogin']; ?></span></TD>
    <TD class="scFormDataOdd css_qylogin_line" id="hidden_field_data_qylogin" style="<?php echo $sStyleHidden_qylogin; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qylogin_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="qylogin" value="<?php echo $this->form_encode_input($qylogin); ?>"><span id="id_ajax_label_qylogin"><?php echo nl2br($qylogin); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qylogin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qylogin_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lxr']))
    {
        $this->nm_new_label['lxr'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_lxr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lxr = $this->lxr;
   $sStyleHidden_lxr = '';
   if (isset($this->nmgp_cmp_hidden['lxr']) && $this->nmgp_cmp_hidden['lxr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lxr']);
       $sStyleHidden_lxr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lxr = 'display: none;';
   $sStyleReadInp_lxr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lxr']) && $this->nmgp_cmp_readonly['lxr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lxr']);
       $sStyleReadLab_lxr = '';
       $sStyleReadInp_lxr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lxr']) && $this->nmgp_cmp_hidden['lxr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lxr" value="<?php echo $this->form_encode_input($lxr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lxr_label" id="hidden_field_label_lxr" style="<?php echo $sStyleHidden_lxr; ?>"><span id="id_label_lxr"><?php echo $this->nm_new_label['lxr']; ?></span></TD>
    <TD class="scFormDataOdd css_lxr_line" id="hidden_field_data_lxr" style="<?php echo $sStyleHidden_lxr; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lxr_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="lxr" value="<?php echo $this->form_encode_input($lxr); ?>"><span id="id_ajax_label_lxr"><?php echo nl2br($lxr); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lxr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lxr_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qymc']))
    {
        $this->nm_new_label['qymc'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_qymc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qymc = $this->qymc;
   $sStyleHidden_qymc = '';
   if (isset($this->nmgp_cmp_hidden['qymc']) && $this->nmgp_cmp_hidden['qymc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qymc']);
       $sStyleHidden_qymc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qymc = 'display: none;';
   $sStyleReadInp_qymc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qymc']) && $this->nmgp_cmp_readonly['qymc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qymc']);
       $sStyleReadLab_qymc = '';
       $sStyleReadInp_qymc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qymc']) && $this->nmgp_cmp_hidden['qymc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qymc" value="<?php echo $this->form_encode_input($qymc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qymc_label" id="hidden_field_label_qymc" style="<?php echo $sStyleHidden_qymc; ?>"><span id="id_label_qymc"><?php echo $this->nm_new_label['qymc']; ?></span></TD>
    <TD class="scFormDataOdd css_qymc_line" id="hidden_field_data_qymc" style="<?php echo $sStyleHidden_qymc; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qymc_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="qymc" value="<?php echo $this->form_encode_input($qymc); ?>"><span id="id_ajax_label_qymc"><?php echo nl2br($qymc); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qymc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qymc_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['isbsxz']))
    {
        $this->nm_new_label['isbsxz'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_isbsxz'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $isbsxz = $this->isbsxz;
   $sStyleHidden_isbsxz = '';
   if (isset($this->nmgp_cmp_hidden['isbsxz']) && $this->nmgp_cmp_hidden['isbsxz'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['isbsxz']);
       $sStyleHidden_isbsxz = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_isbsxz = 'display: none;';
   $sStyleReadInp_isbsxz = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['isbsxz']) && $this->nmgp_cmp_readonly['isbsxz'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['isbsxz']);
       $sStyleReadLab_isbsxz = '';
       $sStyleReadInp_isbsxz = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['isbsxz']) && $this->nmgp_cmp_hidden['isbsxz'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="isbsxz" value="<?php echo $this->form_encode_input($isbsxz) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_isbsxz_label" id="hidden_field_label_isbsxz" style="<?php echo $sStyleHidden_isbsxz; ?>"><span id="id_label_isbsxz"><?php echo $this->nm_new_label['isbsxz']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['isbsxz']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['isbsxz'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_isbsxz_line" id="hidden_field_data_isbsxz" style="<?php echo $sStyleHidden_isbsxz; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_isbsxz_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isbsxz"]) &&  $this->nmgp_cmp_readonly["isbsxz"] == "on") { 

 if ("是" == $this->isbsxz) { $isbsxz_look = "是";} 
 if ("否" == $this->isbsxz) { $isbsxz_look = "否";} 
?>
<input type="hidden" name="isbsxz" value="<?php echo $this->form_encode_input($isbsxz) . "\">" . $isbsxz_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->isbsxz) { $isbsxz_look = "是";} 
 if ("否" == $this->isbsxz) { $isbsxz_look = "否";} 
?>
<span id="id_read_on_isbsxz"  class="css_isbsxz_line" style="<?php echo $sStyleReadLab_isbsxz; ?>"><?php echo $this->form_encode_input($isbsxz_look); ?></span><span id="id_read_off_isbsxz" style="<?php echo $sStyleReadInp_isbsxz; ?>"><div id="idAjaxRadio_isbsxz" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_isbsxz_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isbsxz" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_isbsxz'][] = '是'; ?>
<?php  if ("是" == $this->isbsxz)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_isbsxz_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isbsxz" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_isbsxz'][] = '否'; ?>
<?php  if ("否" == $this->isbsxz)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isbsxz_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isbsxz_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['istb']))
    {
        $this->nm_new_label['istb'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_istb'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $istb = $this->istb;
   $sStyleHidden_istb = '';
   if (isset($this->nmgp_cmp_hidden['istb']) && $this->nmgp_cmp_hidden['istb'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['istb']);
       $sStyleHidden_istb = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_istb = 'display: none;';
   $sStyleReadInp_istb = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['istb']) && $this->nmgp_cmp_readonly['istb'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['istb']);
       $sStyleReadLab_istb = '';
       $sStyleReadInp_istb = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['istb']) && $this->nmgp_cmp_hidden['istb'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="istb" value="<?php echo $this->form_encode_input($istb) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_istb_label" id="hidden_field_label_istb" style="<?php echo $sStyleHidden_istb; ?>"><span id="id_label_istb"><?php echo $this->nm_new_label['istb']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['istb']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['istb'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_istb_line" id="hidden_field_data_istb" style="<?php echo $sStyleHidden_istb; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_istb_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["istb"]) &&  $this->nmgp_cmp_readonly["istb"] == "on") { 

 if ("是" == $this->istb) { $istb_look = "是";} 
 if ("否" == $this->istb) { $istb_look = "否";} 
?>
<input type="hidden" name="istb" value="<?php echo $this->form_encode_input($istb) . "\">" . $istb_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->istb) { $istb_look = "是";} 
 if ("否" == $this->istb) { $istb_look = "否";} 
?>
<span id="id_read_on_istb"  class="css_istb_line" style="<?php echo $sStyleReadLab_istb; ?>"><?php echo $this->form_encode_input($istb_look); ?></span><span id="id_read_off_istb" style="<?php echo $sStyleReadInp_istb; ?>"><div id="idAjaxRadio_istb" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_istb_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="istb" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_istb'][] = '是'; ?>
<?php  if ("是" == $this->istb)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_istb_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="istb" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_istb'][] = '否'; ?>
<?php  if ("否" == $this->istb)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_istb_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_istb_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['isrw']))
    {
        $this->nm_new_label['isrw'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_isrw'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $isrw = $this->isrw;
   $sStyleHidden_isrw = '';
   if (isset($this->nmgp_cmp_hidden['isrw']) && $this->nmgp_cmp_hidden['isrw'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['isrw']);
       $sStyleHidden_isrw = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_isrw = 'display: none;';
   $sStyleReadInp_isrw = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['isrw']) && $this->nmgp_cmp_readonly['isrw'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['isrw']);
       $sStyleReadLab_isrw = '';
       $sStyleReadInp_isrw = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['isrw']) && $this->nmgp_cmp_hidden['isrw'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="isrw" value="<?php echo $this->form_encode_input($isrw) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_isrw_label" id="hidden_field_label_isrw" style="<?php echo $sStyleHidden_isrw; ?>"><span id="id_label_isrw"><?php echo $this->nm_new_label['isrw']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['isrw']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['isrw'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_isrw_line" id="hidden_field_data_isrw" style="<?php echo $sStyleHidden_isrw; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_isrw_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isrw"]) &&  $this->nmgp_cmp_readonly["isrw"] == "on") { 

 if ("是" == $this->isrw) { $isrw_look = "是";} 
 if ("否" == $this->isrw) { $isrw_look = "否";} 
?>
<input type="hidden" name="isrw" value="<?php echo $this->form_encode_input($isrw) . "\">" . $isrw_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->isrw) { $isrw_look = "是";} 
 if ("否" == $this->isrw) { $isrw_look = "否";} 
?>
<span id="id_read_on_isrw"  class="css_isrw_line" style="<?php echo $sStyleReadLab_isrw; ?>"><?php echo $this->form_encode_input($isrw_look); ?></span><span id="id_read_off_isrw" style="<?php echo $sStyleReadInp_isrw; ?>"><div id="idAjaxRadio_isrw" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_isrw_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isrw" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_isrw'][] = '是'; ?>
<?php  if ("是" == $this->isrw)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_isrw_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isrw" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_isrw'][] = '否'; ?>
<?php  if ("否" == $this->isrw)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isrw_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isrw_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['isqualified']))
    {
        $this->nm_new_label['isqualified'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_isqualified'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $isqualified = $this->isqualified;
   $sStyleHidden_isqualified = '';
   if (isset($this->nmgp_cmp_hidden['isqualified']) && $this->nmgp_cmp_hidden['isqualified'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['isqualified']);
       $sStyleHidden_isqualified = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_isqualified = 'display: none;';
   $sStyleReadInp_isqualified = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['isqualified']) && $this->nmgp_cmp_readonly['isqualified'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['isqualified']);
       $sStyleReadLab_isqualified = '';
       $sStyleReadInp_isqualified = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['isqualified']) && $this->nmgp_cmp_hidden['isqualified'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="isqualified" value="<?php echo $this->form_encode_input($isqualified) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_isqualified_label" id="hidden_field_label_isqualified" style="<?php echo $sStyleHidden_isqualified; ?>"><span id="id_label_isqualified"><?php echo $this->nm_new_label['isqualified']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['isqualified']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['isqualified'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_isqualified_line" id="hidden_field_data_isqualified" style="<?php echo $sStyleHidden_isqualified; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_isqualified_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isqualified"]) &&  $this->nmgp_cmp_readonly["isqualified"] == "on") { 

 if ("是" == $this->isqualified) { $isqualified_look = "是";} 
 if ("否" == $this->isqualified) { $isqualified_look = "否";} 
?>
<input type="hidden" name="isqualified" value="<?php echo $this->form_encode_input($isqualified) . "\">" . $isqualified_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->isqualified) { $isqualified_look = "是";} 
 if ("否" == $this->isqualified) { $isqualified_look = "否";} 
?>
<span id="id_read_on_isqualified"  class="css_isqualified_line" style="<?php echo $sStyleReadLab_isqualified; ?>"><?php echo $this->form_encode_input($isqualified_look); ?></span><span id="id_read_off_isqualified" style="<?php echo $sStyleReadInp_isqualified; ?>"><div id="idAjaxRadio_isqualified" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_isqualified_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isqualified" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_isqualified'][] = '是'; ?>
<?php  if ("是" == $this->isqualified)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_isqualified_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isqualified" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_isqualified'][] = '否'; ?>
<?php  if ("否" == $this->isqualified)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isqualified_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isqualified_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sm']))
    {
        $this->nm_new_label['sm'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_sm'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sm = $this->sm;
   $sStyleHidden_sm = '';
   if (isset($this->nmgp_cmp_hidden['sm']) && $this->nmgp_cmp_hidden['sm'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sm']);
       $sStyleHidden_sm = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sm = 'display: none;';
   $sStyleReadInp_sm = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sm']) && $this->nmgp_cmp_readonly['sm'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sm']);
       $sStyleReadLab_sm = '';
       $sStyleReadInp_sm = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sm']) && $this->nmgp_cmp_hidden['sm'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sm" value="<?php echo $this->form_encode_input($sm) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sm_label" id="hidden_field_label_sm" style="<?php echo $sStyleHidden_sm; ?>"><span id="id_label_sm"><?php echo $this->nm_new_label['sm']; ?></span></TD>
    <TD class="scFormDataOdd css_sm_line" id="hidden_field_data_sm" style="<?php echo $sStyleHidden_sm; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sm_line" style="vertical-align: top;padding: 0px">
<?php
$sm_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($sm));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sm"]) &&  $this->nmgp_cmp_readonly["sm"] == "on") { 

 ?>
<input type="hidden" name="sm" value="<?php echo $this->form_encode_input($sm) . "\">" . $sm_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_sm" class="sc-ui-readonly-sm css_sm_line" style="<?php echo $sStyleReadLab_sm; ?>"><?php echo $this->form_encode_input($sm_val); ?></span><span id="id_read_off_sm" style="white-space: nowrap;<?php echo $sStyleReadInp_sm; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_sm_obj" style="white-space: pre-wrap;" name="sm" id="id_sc_field_sm" rows="2" cols="36"
 alt="{datatype: 'text', maxLength: 128, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $sm; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sm_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sm_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['kyzt']))
    {
        $this->nm_new_label['kyzt'] = "" . $this->Ini->Nm_lang['lang_cg_qysb_fld_kyzt'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $kyzt = $this->kyzt;
   $sStyleHidden_kyzt = '';
   if (isset($this->nmgp_cmp_hidden['kyzt']) && $this->nmgp_cmp_hidden['kyzt'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['kyzt']);
       $sStyleHidden_kyzt = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_kyzt = 'display: none;';
   $sStyleReadInp_kyzt = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['kyzt']) && $this->nmgp_cmp_readonly['kyzt'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['kyzt']);
       $sStyleReadLab_kyzt = '';
       $sStyleReadInp_kyzt = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['kyzt']) && $this->nmgp_cmp_hidden['kyzt'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="kyzt" value="<?php echo $this->form_encode_input($kyzt) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_kyzt_label" id="hidden_field_label_kyzt" style="<?php echo $sStyleHidden_kyzt; ?>"><span id="id_label_kyzt"><?php echo $this->nm_new_label['kyzt']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['kyzt']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['php_cmp_required']['kyzt'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_kyzt_line" id="hidden_field_data_kyzt" style="<?php echo $sStyleHidden_kyzt; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_kyzt_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["kyzt"]) &&  $this->nmgp_cmp_readonly["kyzt"] == "on") { 

 if ("是" == $this->kyzt) { $kyzt_look = "是";} 
 if ("否" == $this->kyzt) { $kyzt_look = "否";} 
?>
<input type="hidden" name="kyzt" value="<?php echo $this->form_encode_input($kyzt) . "\">" . $kyzt_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->kyzt) { $kyzt_look = "是";} 
 if ("否" == $this->kyzt) { $kyzt_look = "否";} 
?>
<span id="id_read_on_kyzt"  class="css_kyzt_line" style="<?php echo $sStyleReadLab_kyzt; ?>"><?php echo $this->form_encode_input($kyzt_look); ?></span><span id="id_read_off_kyzt" style="<?php echo $sStyleReadInp_kyzt; ?>"><div id="idAjaxRadio_kyzt" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_kyzt_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="kyzt" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_kyzt'][] = '是'; ?>
<?php  if ("是" == $this->kyzt)  { echo " checked" ;} ?><?php  if (empty($this->kyzt)) { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_kyzt_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="kyzt" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['Lookup_kyzt'][] = '否'; ?>
<?php  if ("否" == $this->kyzt)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_kyzt_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_kyzt_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
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
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['masterValue']);
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
 parent.scAjaxDetailStatus("form_cg_qysb");
 parent.scAjaxDetailHeight("form_cg_qysb", <?php echo $sTamanhoIframe; ?>);
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
   parent.scAjaxDetailHeight("form_cg_qysb", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_cg_qysb", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_qysb']['sc_modal'])
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
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 
