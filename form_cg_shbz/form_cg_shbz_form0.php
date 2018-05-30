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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_shbz'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_shbz'] . ""); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_cg_shbz/form_cg_shbz_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_cg_shbz_sajax_js.php");
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

include_once('form_cg_shbz_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['recarga'];
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
 include_once("form_cg_shbz_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_cg_shbz'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_cg_shbz'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_shbz'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_shbz'] . ""; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo "" . $_SESSION['v_lcmc'] . "" ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "提交保存", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
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
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['empty_filter'] = true;
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
    if (!isset($this->nm_new_label['bzmc']))
    {
        $this->nm_new_label['bzmc'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_bzmc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bzmc = $this->bzmc;
   $sStyleHidden_bzmc = '';
   if (isset($this->nmgp_cmp_hidden['bzmc']) && $this->nmgp_cmp_hidden['bzmc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bzmc']);
       $sStyleHidden_bzmc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bzmc = 'display: none;';
   $sStyleReadInp_bzmc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bzmc']) && $this->nmgp_cmp_readonly['bzmc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bzmc']);
       $sStyleReadLab_bzmc = '';
       $sStyleReadInp_bzmc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bzmc']) && $this->nmgp_cmp_hidden['bzmc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bzmc" value="<?php echo $this->form_encode_input($bzmc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_bzmc_label" id="hidden_field_label_bzmc" style="<?php echo $sStyleHidden_bzmc; ?>"><span id="id_label_bzmc"><?php echo $this->nm_new_label['bzmc']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['bzmc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['bzmc'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_bzmc_line" id="hidden_field_data_bzmc" style="<?php echo $sStyleHidden_bzmc; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bzmc_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bzmc"]) &&  $this->nmgp_cmp_readonly["bzmc"] == "on") { 

 ?>
<input type="hidden" name="bzmc" value="<?php echo $this->form_encode_input($bzmc) . "\">" . $bzmc . ""; ?>
<?php } else { ?>
<span id="id_read_on_bzmc" class="sc-ui-readonly-bzmc css_bzmc_line" style="<?php echo $sStyleReadLab_bzmc; ?>"><?php echo $this->form_encode_input($this->bzmc); ?></span><span id="id_read_off_bzmc" style="white-space: nowrap;<?php echo $sStyleReadInp_bzmc; ?>">
 <input class="sc-js-input scFormObjectOdd css_bzmc_obj" style="" id="id_sc_field_bzmc" type=text name="bzmc" value="<?php echo $this->form_encode_input($bzmc) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bzmc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bzmc_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ms']))
    {
        $this->nm_new_label['ms'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_ms'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ms = $this->ms;
   $sStyleHidden_ms = '';
   if (isset($this->nmgp_cmp_hidden['ms']) && $this->nmgp_cmp_hidden['ms'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ms']);
       $sStyleHidden_ms = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ms = 'display: none;';
   $sStyleReadInp_ms = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ms']) && $this->nmgp_cmp_readonly['ms'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ms']);
       $sStyleReadLab_ms = '';
       $sStyleReadInp_ms = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ms']) && $this->nmgp_cmp_hidden['ms'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ms" value="<?php echo $this->form_encode_input($ms) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ms_label" id="hidden_field_label_ms" style="<?php echo $sStyleHidden_ms; ?>"><span id="id_label_ms"><?php echo $this->nm_new_label['ms']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['ms']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['ms'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_ms_line" id="hidden_field_data_ms" style="<?php echo $sStyleHidden_ms; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ms_line" style="vertical-align: top;padding: 0px">
<?php
$ms_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($ms));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ms"]) &&  $this->nmgp_cmp_readonly["ms"] == "on") { 

 ?>
<input type="hidden" name="ms" value="<?php echo $this->form_encode_input($ms) . "\">" . $ms_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_ms" class="sc-ui-readonly-ms css_ms_line" style="<?php echo $sStyleReadLab_ms; ?>"><?php echo $this->form_encode_input($ms_val); ?></span><span id="id_read_off_ms" style="white-space: nowrap;<?php echo $sStyleReadInp_ms; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_ms_obj" style="white-space: pre-wrap;" name="ms" id="id_sc_field_ms" rows="2" cols="36"
 alt="{datatype: 'text', maxLength: 128, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $ms; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ms_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ms_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['isqs']))
    {
        $this->nm_new_label['isqs'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_isqs'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $isqs = $this->isqs;
   $sStyleHidden_isqs = '';
   if (isset($this->nmgp_cmp_hidden['isqs']) && $this->nmgp_cmp_hidden['isqs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['isqs']);
       $sStyleHidden_isqs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_isqs = 'display: none;';
   $sStyleReadInp_isqs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['isqs']) && $this->nmgp_cmp_readonly['isqs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['isqs']);
       $sStyleReadLab_isqs = '';
       $sStyleReadInp_isqs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['isqs']) && $this->nmgp_cmp_hidden['isqs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="isqs" value="<?php echo $this->form_encode_input($isqs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_isqs_label" id="hidden_field_label_isqs" style="<?php echo $sStyleHidden_isqs; ?>"><span id="id_label_isqs"><?php echo $this->nm_new_label['isqs']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['isqs']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['isqs'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_isqs_line" id="hidden_field_data_isqs" style="<?php echo $sStyleHidden_isqs; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_isqs_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isqs"]) &&  $this->nmgp_cmp_readonly["isqs"] == "on") { 

 if ("是" == $this->isqs) { $isqs_look = "是";} 
 if ("否" == $this->isqs) { $isqs_look = "否";} 
?>
<input type="hidden" name="isqs" value="<?php echo $this->form_encode_input($isqs) . "\">" . $isqs_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->isqs) { $isqs_look = "是";} 
 if ("否" == $this->isqs) { $isqs_look = "否";} 
?>
<span id="id_read_on_isqs"  class="css_isqs_line" style="<?php echo $sStyleReadLab_isqs; ?>"><?php echo $this->form_encode_input($isqs_look); ?></span><span id="id_read_off_isqs" style="<?php echo $sStyleReadInp_isqs; ?>"><div id="idAjaxRadio_isqs" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_isqs_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isqs" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_isqs'][] = '是'; ?>
<?php  if ("是" == $this->isqs)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_isqs_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isqs" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_isqs'][] = '否'; ?>
<?php  if ("否" == $this->isqs)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isqs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isqs_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['isjs']))
    {
        $this->nm_new_label['isjs'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_isjs'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $isjs = $this->isjs;
   $sStyleHidden_isjs = '';
   if (isset($this->nmgp_cmp_hidden['isjs']) && $this->nmgp_cmp_hidden['isjs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['isjs']);
       $sStyleHidden_isjs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_isjs = 'display: none;';
   $sStyleReadInp_isjs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['isjs']) && $this->nmgp_cmp_readonly['isjs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['isjs']);
       $sStyleReadLab_isjs = '';
       $sStyleReadInp_isjs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['isjs']) && $this->nmgp_cmp_hidden['isjs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="isjs" value="<?php echo $this->form_encode_input($isjs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_isjs_label" id="hidden_field_label_isjs" style="<?php echo $sStyleHidden_isjs; ?>"><span id="id_label_isjs"><?php echo $this->nm_new_label['isjs']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['isjs']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['isjs'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_isjs_line" id="hidden_field_data_isjs" style="<?php echo $sStyleHidden_isjs; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_isjs_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isjs"]) &&  $this->nmgp_cmp_readonly["isjs"] == "on") { 

 if ("是" == $this->isjs) { $isjs_look = "是";} 
 if ("否" == $this->isjs) { $isjs_look = "否";} 
?>
<input type="hidden" name="isjs" value="<?php echo $this->form_encode_input($isjs) . "\">" . $isjs_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->isjs) { $isjs_look = "是";} 
 if ("否" == $this->isjs) { $isjs_look = "否";} 
?>
<span id="id_read_on_isjs"  class="css_isjs_line" style="<?php echo $sStyleReadLab_isjs; ?>"><?php echo $this->form_encode_input($isjs_look); ?></span><span id="id_read_off_isjs" style="<?php echo $sStyleReadInp_isjs; ?>"><div id="idAjaxRadio_isjs" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_isjs_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isjs" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_isjs'][] = '是'; ?>
<?php  if ("是" == $this->isjs)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_isjs_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isjs" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_isjs'][] = '否'; ?>
<?php  if ("否" == $this->isjs)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isjs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isjs_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['yhlx']))
   {
       $this->nm_new_label['yhlx'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_yhlx'] . "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $yhlx = $this->yhlx;
   $sStyleHidden_yhlx = '';
   if (isset($this->nmgp_cmp_hidden['yhlx']) && $this->nmgp_cmp_hidden['yhlx'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['yhlx']);
       $sStyleHidden_yhlx = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_yhlx = 'display: none;';
   $sStyleReadInp_yhlx = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['yhlx']) && $this->nmgp_cmp_readonly['yhlx'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['yhlx']);
       $sStyleReadLab_yhlx = '';
       $sStyleReadInp_yhlx = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['yhlx']) && $this->nmgp_cmp_hidden['yhlx'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="yhlx" value="<?php echo $this->form_encode_input($this->yhlx) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_yhlx_label" id="hidden_field_label_yhlx" style="<?php echo $sStyleHidden_yhlx; ?>"><span id="id_label_yhlx"><?php echo $this->nm_new_label['yhlx']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['yhlx']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['yhlx'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_yhlx_line" id="hidden_field_data_yhlx" style="<?php echo $sStyleHidden_yhlx; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_yhlx_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["yhlx"]) &&  $this->nmgp_cmp_readonly["yhlx"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array(); 
    }

   $old_value_listorder = $this->listorder;
   $this->nm_tira_formatacao();


   $unformatted_value_listorder = $this->listorder;

   $nm_comando = "SELECT mc, mc 
FROM dm_work 
ORDER BY mc";

   $this->listorder = $old_value_listorder;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $yhlx_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->yhlx_1))
          {
              foreach ($this->yhlx_1 as $tmp_yhlx)
              {
                  if (trim($tmp_yhlx) === trim($cadaselect[1])) { $yhlx_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->yhlx) === trim($cadaselect[1])) { $yhlx_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="yhlx" value="<?php echo $this->form_encode_input($yhlx) . "\">" . $yhlx_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'] = array(); 
    }

   $old_value_listorder = $this->listorder;
   $this->nm_tira_formatacao();


   $unformatted_value_listorder = $this->listorder;

   $nm_comando = "SELECT mc, mc 
FROM dm_work 
ORDER BY mc";

   $this->listorder = $old_value_listorder;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $yhlx_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->yhlx_1))
          {
              foreach ($this->yhlx_1 as $tmp_yhlx)
              {
                  if (trim($tmp_yhlx) === trim($cadaselect[1])) { $yhlx_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->yhlx) === trim($cadaselect[1])) { $yhlx_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($yhlx_look))
          {
              $yhlx_look = $this->yhlx;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_yhlx\" class=\"css_yhlx_line\" style=\"" .  $sStyleReadLab_yhlx . "\">" . $this->form_encode_input($yhlx_look) . "</span><span id=\"id_read_off_yhlx\" style=\"" . $sStyleReadInp_yhlx . "\">";
   echo " <span id=\"idAjaxSelect_yhlx\"><select class=\"sc-js-input scFormObjectOdd css_yhlx_obj\" style=\"\" id=\"id_sc_field_yhlx\" name=\"yhlx\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_yhlx'][] = ''; 
   echo "  <option value=\"\">请选择</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->yhlx) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->yhlx)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_yhlx_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_yhlx_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['bmlx']))
   {
       $this->nm_new_label['bmlx'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_bmlx'] . "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bmlx = $this->bmlx;
   $sStyleHidden_bmlx = '';
   if (isset($this->nmgp_cmp_hidden['bmlx']) && $this->nmgp_cmp_hidden['bmlx'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bmlx']);
       $sStyleHidden_bmlx = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bmlx = 'display: none;';
   $sStyleReadInp_bmlx = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bmlx']) && $this->nmgp_cmp_readonly['bmlx'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bmlx']);
       $sStyleReadLab_bmlx = '';
       $sStyleReadInp_bmlx = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bmlx']) && $this->nmgp_cmp_hidden['bmlx'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="bmlx" value="<?php echo $this->form_encode_input($this->bmlx) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_bmlx_label" id="hidden_field_label_bmlx" style="<?php echo $sStyleHidden_bmlx; ?>"><span id="id_label_bmlx"><?php echo $this->nm_new_label['bmlx']; ?></span></TD>
    <TD class="scFormDataOdd css_bmlx_line" id="hidden_field_data_bmlx" style="<?php echo $sStyleHidden_bmlx; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bmlx_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bmlx"]) &&  $this->nmgp_cmp_readonly["bmlx"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array(); 
    }

   $old_value_listorder = $this->listorder;
   $this->nm_tira_formatacao();


   $unformatted_value_listorder = $this->listorder;

   $nm_comando = "SELECT mc, mc 
FROM dm_bm 
ORDER BY mc";

   $this->listorder = $old_value_listorder;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $bmlx_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->bmlx_1))
          {
              foreach ($this->bmlx_1 as $tmp_bmlx)
              {
                  if (trim($tmp_bmlx) === trim($cadaselect[1])) { $bmlx_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->bmlx) === trim($cadaselect[1])) { $bmlx_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="bmlx" value="<?php echo $this->form_encode_input($bmlx) . "\">" . $bmlx_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'] = array(); 
    }

   $old_value_listorder = $this->listorder;
   $this->nm_tira_formatacao();


   $unformatted_value_listorder = $this->listorder;

   $nm_comando = "SELECT mc, mc 
FROM dm_bm 
ORDER BY mc";

   $this->listorder = $old_value_listorder;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $bmlx_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->bmlx_1))
          {
              foreach ($this->bmlx_1 as $tmp_bmlx)
              {
                  if (trim($tmp_bmlx) === trim($cadaselect[1])) { $bmlx_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->bmlx) === trim($cadaselect[1])) { $bmlx_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($bmlx_look))
          {
              $bmlx_look = $this->bmlx;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_bmlx\" class=\"css_bmlx_line\" style=\"" .  $sStyleReadLab_bmlx . "\">" . $this->form_encode_input($bmlx_look) . "</span><span id=\"id_read_off_bmlx\" style=\"" . $sStyleReadInp_bmlx . "\">";
   echo " <span id=\"idAjaxSelect_bmlx\"><select class=\"sc-js-input scFormObjectOdd css_bmlx_obj\" style=\"\" id=\"id_sc_field_bmlx\" name=\"bmlx\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_bmlx'][] = ''; 
   echo "  <option value=\"\">本部门</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->bmlx) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->bmlx)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bmlx_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bmlx_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['isgdyh']))
    {
        $this->nm_new_label['isgdyh'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_isgdyh'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $isgdyh = $this->isgdyh;
   $sStyleHidden_isgdyh = '';
   if (isset($this->nmgp_cmp_hidden['isgdyh']) && $this->nmgp_cmp_hidden['isgdyh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['isgdyh']);
       $sStyleHidden_isgdyh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_isgdyh = 'display: none;';
   $sStyleReadInp_isgdyh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['isgdyh']) && $this->nmgp_cmp_readonly['isgdyh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['isgdyh']);
       $sStyleReadLab_isgdyh = '';
       $sStyleReadInp_isgdyh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['isgdyh']) && $this->nmgp_cmp_hidden['isgdyh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="isgdyh" value="<?php echo $this->form_encode_input($isgdyh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_isgdyh_label" id="hidden_field_label_isgdyh" style="<?php echo $sStyleHidden_isgdyh; ?>"><span id="id_label_isgdyh"><?php echo $this->nm_new_label['isgdyh']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['isgdyh']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['isgdyh'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_isgdyh_line" id="hidden_field_data_isgdyh" style="<?php echo $sStyleHidden_isgdyh; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_isgdyh_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["isgdyh"]) &&  $this->nmgp_cmp_readonly["isgdyh"] == "on") { 

 if ("是" == $this->isgdyh) { $isgdyh_look = "是";} 
 if ("否" == $this->isgdyh) { $isgdyh_look = "否";} 
?>
<input type="hidden" name="isgdyh" value="<?php echo $this->form_encode_input($isgdyh) . "\">" . $isgdyh_look . ""; ?>
<?php } else { ?>

<?php

 if ("是" == $this->isgdyh) { $isgdyh_look = "是";} 
 if ("否" == $this->isgdyh) { $isgdyh_look = "否";} 
?>
<span id="id_read_on_isgdyh"  class="css_isgdyh_line" style="<?php echo $sStyleReadLab_isgdyh; ?>"><?php echo $this->form_encode_input($isgdyh_look); ?></span><span id="id_read_off_isgdyh" style="<?php echo $sStyleReadInp_isgdyh; ?>"><div id="idAjaxRadio_isgdyh" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_isgdyh_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isgdyh" value="是"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_isgdyh'][] = '是'; ?>
<?php  if ("是" == $this->isgdyh)  { echo " checked" ;} ?>  onClick="" >是</TD>
  <TD class="scFormDataFontOdd css_isgdyh_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="isgdyh" value="否"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lookup_isgdyh'][] = '否'; ?>
<?php  if ("否" == $this->isgdyh)  { echo " checked" ;} ?>  onClick="" >否</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_isgdyh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_isgdyh_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gdyh']))
    {
        $this->nm_new_label['gdyh'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_gdyh'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gdyh = $this->gdyh;
   $sStyleHidden_gdyh = '';
   if (isset($this->nmgp_cmp_hidden['gdyh']) && $this->nmgp_cmp_hidden['gdyh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gdyh']);
       $sStyleHidden_gdyh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gdyh = 'display: none;';
   $sStyleReadInp_gdyh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gdyh']) && $this->nmgp_cmp_readonly['gdyh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gdyh']);
       $sStyleReadLab_gdyh = '';
       $sStyleReadInp_gdyh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gdyh']) && $this->nmgp_cmp_hidden['gdyh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gdyh" value="<?php echo $this->form_encode_input($gdyh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_gdyh_label" id="hidden_field_label_gdyh" style="<?php echo $sStyleHidden_gdyh; ?>"><span id="id_label_gdyh"><?php echo $this->nm_new_label['gdyh']; ?></span></TD>
    <TD class="scFormDataOdd css_gdyh_line" id="hidden_field_data_gdyh" style="<?php echo $sStyleHidden_gdyh; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gdyh_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gdyh"]) &&  $this->nmgp_cmp_readonly["gdyh"] == "on") { 

 ?>
<input type="hidden" name="gdyh" value="<?php echo $this->form_encode_input($gdyh) . "\">" . $gdyh . ""; ?>
<?php } else { ?>
<span id="id_read_on_gdyh" class="sc-ui-readonly-gdyh css_gdyh_line" style="<?php echo $sStyleReadLab_gdyh; ?>"><?php echo $this->form_encode_input($this->gdyh); ?></span><span id="id_read_off_gdyh" style="white-space: nowrap;<?php echo $sStyleReadInp_gdyh; ?>">
 <input class="sc-js-input scFormObjectOdd css_gdyh_obj" style="" id="id_sc_field_gdyh" type=text name="gdyh" value="<?php echo $this->form_encode_input($gdyh) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php
   $Sc_iframe_master = ($this->Embutida_form) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_cg_shbz*scout' : '';
   if (isset($this->Ini->sc_lig_md5["sec_grid_sec_users"]) && $this->Ini->sc_lig_md5["sec_grid_sec_users"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,gdyh,login*scoutnm_evt_ret_busca*scin*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_cg_shbz@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,gdyh,login*scoutnm_evt_ret_busca*scin*scout" . $Sc_iframe_master;
   }
?>

&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_sec_grid_sec_users_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_sec_grid_sec_users_cons_psq. "', '" . $Md5_Lig . "')", "cap_gdyh", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gdyh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gdyh_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['listorder']))
    {
        $this->nm_new_label['listorder'] = "" . $this->Ini->Nm_lang['lang_cg_shbz_fld_listorder'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $listorder = $this->listorder;
   $sStyleHidden_listorder = '';
   if (isset($this->nmgp_cmp_hidden['listorder']) && $this->nmgp_cmp_hidden['listorder'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['listorder']);
       $sStyleHidden_listorder = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_listorder = 'display: none;';
   $sStyleReadInp_listorder = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['listorder']) && $this->nmgp_cmp_readonly['listorder'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['listorder']);
       $sStyleReadLab_listorder = '';
       $sStyleReadInp_listorder = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['listorder']) && $this->nmgp_cmp_hidden['listorder'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="listorder" value="<?php echo $this->form_encode_input($listorder) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_listorder_label" id="hidden_field_label_listorder" style="<?php echo $sStyleHidden_listorder; ?>"><span id="id_label_listorder"><?php echo $this->nm_new_label['listorder']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['listorder']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['php_cmp_required']['listorder'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_listorder_line" id="hidden_field_data_listorder" style="<?php echo $sStyleHidden_listorder; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_listorder_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["listorder"]) &&  $this->nmgp_cmp_readonly["listorder"] == "on") { 

 ?>
<input type="hidden" name="listorder" value="<?php echo $this->form_encode_input($listorder) . "\">" . $listorder . ""; ?>
<?php } else { ?>
<span id="id_read_on_listorder" class="sc-ui-readonly-listorder css_listorder_line" style="<?php echo $sStyleReadLab_listorder; ?>"><?php echo $this->form_encode_input($this->listorder); ?></span><span id="id_read_off_listorder" style="white-space: nowrap;<?php echo $sStyleReadInp_listorder; ?>">
 <input class="sc-js-input scFormObjectOdd css_listorder_obj" style="" id="id_sc_field_listorder" type=text name="listorder" value="<?php echo $this->form_encode_input($listorder) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['listorder']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['listorder']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_listorder_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_listorder_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>
<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['masterValue']);
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
 parent.scAjaxDetailStatus("form_cg_shbz");
 parent.scAjaxDetailHeight("form_cg_shbz", <?php echo $sTamanhoIframe; ?>);
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
   parent.scAjaxDetailHeight("form_cg_shbz", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_cg_shbz", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_shbz']['sc_modal'])
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
