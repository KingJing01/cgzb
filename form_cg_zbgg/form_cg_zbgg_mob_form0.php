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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_zbgg'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_zbgg'] . ""); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_cg_zbgg/form_cg_zbgg_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_cg_zbgg_mob_sajax_js.php");
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
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_cg_zbgg_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
  $(".scBtnGrpClick").find("a").click(function(e){
     e.preventDefault();
  });
  $(".scBtnGrpClick").click(function(){
     var aObj = $(this).find("a"), aHref = aObj.attr("href");
     if ("javascript:" == aHref.substr(0, 11)) {
        eval(aHref.substr(11));
     }
     else {
        aObj.trigger("click");
     }
   }).mouseover(function(){
     $(this).css("cursor", "pointer");
  });
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
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
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
 include_once("form_cg_zbgg_mob_js0.php");
?>
<script type="text/javascript"> 
 // Adiciona um elemento
 //----------------------
 function nm_add_sel(sOrig, sDest, fCBack, sRow)
 {
  // Recupera objetos
  oOrig = document.F1.elements[sOrig];
  oDest = document.F1.elements[sDest];
  // Varre itens da origem
  for (i = 0; i < oOrig.length; i++)
  {
   // Item na origem selecionado e valido
   if (oOrig.options[i].selected && !oOrig.options[i].disabled)
   {
    // Recupera valores da origem
    sText  = oOrig.options[i].text;
    sValue = oOrig.options[i].value;
    // Cria item no destino
    oDest.options[oDest.length] = new Option(sText, sValue);
    // Desabilita item na origem
    oOrig.options[i].style.color = "#A0A0A0";
    oOrig.options[i].disabled    = true;
    oOrig.options[i].selected    = false;
   }
  }
  // Reset combos
  oOrig.selectedIndex = -1;
  oDest.selectedIndex = -1;
  if (fCBack)
  {
   fCBack(sRow);
  }
 }
 // Adiciona todos os elementos
 //-----------------------------
 function nm_add_all(sOrig, sDest, fCBack, sRow)
 {
  // Recupera objetos
  oOrig = document.F1.elements[sOrig];
  oDest = document.F1.elements[sDest];
  // Varre itens da origem
  for (i = 0; i < oOrig.length; i++)
  {
   // Item na origem valido
   if (!oOrig.options[i].disabled)
   {
    // Recupera valores da origem
    sText  = oOrig.options[i].text;
    sValue = oOrig.options[i].value;
    // Cria item no destino
    oDest.options[oDest.length] = new Option(sText, sValue);
    // Desabilita item na origem
    oOrig.options[i].style.color = "#A0A0A0";
    oOrig.options[i].disabled    = true;
    oOrig.options[i].selected    = false;
   }
  }
  // Reset combos
  oOrig.selectedIndex = -1;
  oDest.selectedIndex = -1;
  if (fCBack)
  {
   fCBack(sRow);
  }
 }
 // Remove um elemento
 //--------------------
 function nm_del_sel(sOrig, sDest, fCBack, sRow)
 {
  // Recupera objetos
  oOrig = document.F1.elements[sOrig];
  oDest = document.F1.elements[sDest];
  aSel  = new Array();
  atxt  = new Array();
  solt  = new Array();
  j     = 0;
  z     = 0;
  // Remove itens selecionados na origem
  for (i = oOrig.length - 1; i >= 0; i--)
  {
   // Item na origem selecionado
   if (oOrig.options[i].selected)
   {
    aSel[j] = oOrig.options[i].value;
    atxt[j] = oOrig.options[i].text;
    j++;
    oOrig.options[i] = null;
   }
  }
  // Habilita itens no destino
  for (i = 0; i < oDest.length; i++)
  {
   if (oDest.options[i].disabled && in_array(aSel, oDest.options[i].value))
   {
    oDest.options[i].disabled    = false;
    oDest.options[i].style.color = "";
    solt[z] = oDest.options[i].value;
    z++;
   }
  }
  for (i = 0; i < aSel.length; i++)
  {
   if (!in_array(solt, aSel[i]))
   {
    oDest.options[oDest.length] = new Option(atxt[i], aSel[i]);
   }
  }
  // Reset combos
  oOrig.selectedIndex = -1;
  oDest.selectedIndex = -1;
  if (fCBack)
  {
   fCBack(sRow);
  }
 }
 // Remove todos os elementos
 //---------------------------
 function nm_del_all(sOrig, sDest, fCBack, sRow)
 {
  // Recupera objetos
  oOrig = document.F1.elements[sOrig];
  oDest = document.F1.elements[sDest];
  aSel  = new Array();
  atxt  = new Array();
  solt  = new Array();
  j     = 0;
  z     = 0;
  // Remove todos os itens na origem
  while (0 < oOrig.length)
  {
   i       = oOrig.length - 1;
   aSel[j] = oOrig.options[i].value;
   atxt[j] = oOrig.options[i].text;
   j++;
   oOrig.options[i] = null;
  }
  // Habilita itens no destino
  for (i = 0; i < oDest.length; i++)
  {
   if (oDest.options[i].disabled && in_array(aSel, oDest.options[i].value))
   {
    oDest.options[i].disabled    = false;
    oDest.options[i].style.color = "";
    solt[z] = oDest.options[i].value;
    z++;
   }
  }
  for (i = 0; i < aSel.length; i++)
  {
   if (!in_array(solt, aSel[i]))
   {
    oDest.options[oDest.length] = new Option(atxt[i], aSel[i]);
   }
  }
  // Reset combos
  oOrig.selectedIndex = -1;
  oDest.selectedIndex = -1;
  if (fCBack)
  {
   fCBack(sRow);
  }
 }
 function nm_sincroniza(sOrig, sDest)
 {
  // Recupera objetos
  oOrig = document.F1.elements[sOrig];
  oDest = document.F1.elements[sDest];
  // Varre itens do destino
  for (i = 0; i < oDest.length; i++)
  {
     dValue = oDest.options[i].value;
     bFound = false;
     for (x = 0; x < oOrig.length && !bFound; x++)
     {
         oValue = oOrig.options[x].value;
         if (dValue == oValue)
         {
             // Desabilita item na origem
             oOrig.options[x].style.color = "#A0A0A0";
             oOrig.options[x].disabled    = true;
             oOrig.options[x].selected    = false;
             bFound = true;
         }
     }
  }
 }
 var nm_quant_pack;
 function nm_pack(sOrig, sDest)
 {
    if (!document.F1.elements[sOrig] || !document.F1.elements[sDest]) return;
    obj_sel = document.F1.elements[sOrig];
    str_val = "";
    nm_quant_pack = 0;
    for (i = 0; i < obj_sel.length; i++)
    {
         if ("" != str_val)
         {
             str_val += "@?@";
             nm_quant_pack++;
         }
         str_val += obj_sel.options[i].value;
    }
    document.F1.elements[sDest].value = str_val;
 }
 function nm_pack_sel(sOrig, sDest)
 {
    if (!document.F1.elements[sOrig] || !document.F1.elements[sDest]) return;
    obj_sel = document.F1.elements[sOrig];
    str_val = "";
    nm_quant_pack = 0;
    for (i = 0; i < obj_sel.length; i++)
    {
         if (obj_sel.options[i].selected)
         {
             if ("" != str_val)
             {
                 str_val += "@?@";
                 nm_quant_pack++;
             }
             str_val += obj_sel.options[i].value;
         }
    }
    document.F1.elements[sDest].value = str_val;
 }
 function nm_del_combo(sOcombo)
 {
  // Recupera objetos
  oOrig = document.F1.elements[sOcombo];
  aSel  = new Array();
  j     = 0;
  // Remove todos os itens na origem
  while (0 < oOrig.length)
  {
   i       = oOrig.length - 1;
   aSel[j] = oOrig.options[i].value;
   j++;
   oOrig.options[i] = null;
  }
 }
 function nm_add_item(sDest, sText, sValue, sSelected)
 {
  oDest = document.F1.elements[sDest];
  oDest.options[oDest.length] = new Option(sText, sValue);
  if (sSelected == 'selected')
  {
      oDest.options[oDest.length -1].selected = true;
  }
 }
 // Teste se elemento pertence ao array
 //-------------------------------------
 function in_array(aArray, sElem)
 {
  for (iCount = 0; iCount < aArray.length; iCount++)
  {
   if (sElem == aArray[iCount])
   {
    return true;
   }
  }
  return false;
 }
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
<form name="F1" method="post" enctype="multipart/form-data" 
               action="form_cg_zbgg_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['insert_validation']; ?>">
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
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="id" value="<?php  echo $this->form_encode_input($this->id) ?>">
<input type="hidden" name="wzqd_salva" value="<?php  echo $this->form_encode_input($this->wzqd) ?>">
<input type="hidden" name="zbfile_salva" value="<?php  echo $this->form_encode_input($this->zbfile) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_cg_zbgg_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_cg_zbgg_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_zbgg'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_zbgg'] . ""; } ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['fast_search'][2] : "";
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
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
?>
<table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 1000" id="sc_btgp_div_group_2_t">
 <tr><td class="scBtnGrpBackground">
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "提交保存", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
?>
 </td></tr>
</table>
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['empty_filter'] = true;
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
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><input type="hidden" name="wzqd_ul_name" id="id_sc_field_wzqd_ul_name" value="<?php echo $this->form_encode_input($this->wzqd_ul_name);?>">
<input type="hidden" name="wzqd_ul_type" id="id_sc_field_wzqd_ul_type" value="<?php echo $this->form_encode_input($this->wzqd_ul_type);?>">
<input type="hidden" name="zbfile_ul_name" id="id_sc_field_zbfile_ul_name" value="<?php echo $this->form_encode_input($this->zbfile_ul_name);?>">
<input type="hidden" name="zbfile_ul_type" id="id_sc_field_zbfile_ul_type" value="<?php echo $this->form_encode_input($this->zbfile_ul_type);?>">
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cgbbh']))
    {
        $this->nm_new_label['cgbbh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . "";
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

    <TD class="scFormDataOdd css_cgbbh_line" id="hidden_field_data_cgbbh" style="<?php echo $sStyleHidden_cgbbh; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cgbbh_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cgbbh_label"><span id="id_label_cgbbh"><?php echo $this->nm_new_label['cgbbh']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['cgbbh']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['cgbbh'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cgbbh"]) &&  $this->nmgp_cmp_readonly["cgbbh"] == "on") { 

 ?>
<input type="hidden" name="cgbbh" value="<?php echo $this->form_encode_input($cgbbh) . "\">" . $cgbbh . ""; ?>
<?php } else { ?>
<span id="id_read_on_cgbbh" class="sc-ui-readonly-cgbbh css_cgbbh_line" style="<?php echo $sStyleReadLab_cgbbh; ?>"><?php echo $this->form_encode_input($this->cgbbh); ?></span><span id="id_read_off_cgbbh" style="white-space: nowrap;<?php echo $sStyleReadInp_cgbbh; ?>">
 <input class="sc-js-input scFormObjectOdd css_cgbbh_obj" style="" id="id_sc_field_cgbbh" type=text name="cgbbh" value="<?php echo $this->form_encode_input($cgbbh) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php
   $Sc_iframe_master = ($this->Embutida_form) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_cg_zbgg*scout' : '';
   if (isset($this->Ini->sc_lig_md5["grid_cg_cgb"]) && $this->Ini->sc_lig_md5["grid_cg_cgb"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,cgbbh,b_cgbbh*scoutnm_evt_ret_busca*scinsc_form_cg_zbgg_mob_cgbbh_onchange(this)*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_cg_zbgg_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,cgbbh,b_cgbbh*scoutnm_evt_ret_busca*scinsc_form_cg_zbgg_mob_cgbbh_onchange(this)*scout" . $Sc_iframe_master;
   }
?>

&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_grid_cg_cgb_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_grid_cg_cgb_cons_psq. "', '" . $Md5_Lig . "')", "cap_cgbbh", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgbbh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgbbh_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cgbmc']))
    {
        $this->nm_new_label['cgbmc'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbmc'] . "";
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

    <TD class="scFormDataOdd css_cgbmc_line" id="hidden_field_data_cgbmc" style="<?php echo $sStyleHidden_cgbmc; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cgbmc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cgbmc_label"><span id="id_label_cgbmc"><?php echo $this->nm_new_label['cgbmc']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['cgbmc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['cgbmc'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br><input type="hidden" name="cgbmc" value="<?php echo $this->form_encode_input($cgbmc); ?>"><span id="id_ajax_label_cgbmc"><?php echo nl2br($cgbmc); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgbmc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgbmc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cgfs']))
    {
        $this->nm_new_label['cgfs'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgfs'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cgfs = $this->cgfs;
   $sStyleHidden_cgfs = '';
   if (isset($this->nmgp_cmp_hidden['cgfs']) && $this->nmgp_cmp_hidden['cgfs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cgfs']);
       $sStyleHidden_cgfs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cgfs = 'display: none;';
   $sStyleReadInp_cgfs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cgfs']) && $this->nmgp_cmp_readonly['cgfs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cgfs']);
       $sStyleReadLab_cgfs = '';
       $sStyleReadInp_cgfs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cgfs']) && $this->nmgp_cmp_hidden['cgfs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cgfs" value="<?php echo $this->form_encode_input($cgfs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cgfs_line" id="hidden_field_data_cgfs" style="<?php echo $sStyleHidden_cgfs; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cgfs_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cgfs_label"><span id="id_label_cgfs"><?php echo $this->nm_new_label['cgfs']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['cgfs']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['cgfs'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br><input type="hidden" name="cgfs" value="<?php echo $this->form_encode_input($cgfs); ?>"><span id="id_ajax_label_cgfs"><?php echo nl2br($cgfs); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cgfs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cgfs_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bzj']))
    {
        $this->nm_new_label['bzj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bzj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bzj = $this->bzj;
   $sStyleHidden_bzj = '';
   if (isset($this->nmgp_cmp_hidden['bzj']) && $this->nmgp_cmp_hidden['bzj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bzj']);
       $sStyleHidden_bzj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bzj = 'display: none;';
   $sStyleReadInp_bzj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bzj']) && $this->nmgp_cmp_readonly['bzj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bzj']);
       $sStyleReadLab_bzj = '';
       $sStyleReadInp_bzj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bzj']) && $this->nmgp_cmp_hidden['bzj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bzj" value="<?php echo $this->form_encode_input($bzj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bzj_line" id="hidden_field_data_bzj" style="<?php echo $sStyleHidden_bzj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bzj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bzj_label"><span id="id_label_bzj"><?php echo $this->nm_new_label['bzj']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bzj"]) &&  $this->nmgp_cmp_readonly["bzj"] == "on") { 

 ?>
<input type="hidden" name="bzj" value="<?php echo $this->form_encode_input($bzj) . "\">" . $bzj . ""; ?>
<?php } else { ?>
<span id="id_read_on_bzj" class="sc-ui-readonly-bzj css_bzj_line" style="<?php echo $sStyleReadLab_bzj; ?>"><?php echo $this->form_encode_input($this->bzj); ?></span><span id="id_read_off_bzj" style="white-space: nowrap;<?php echo $sStyleReadInp_bzj; ?>">
 <input class="sc-js-input scFormObjectOdd css_bzj_obj" style="" id="id_sc_field_bzj" type=text name="bzj" value="<?php echo $this->form_encode_input($bzj) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 0, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['bzj']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['bzj']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['bzj']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bzj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bzj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bskssj']))
    {
        $this->nm_new_label['bskssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_bskssj = $this->bskssj;
   $this->bskssj .= ' ' . $this->bskssj_hora;
   $bskssj = $this->bskssj;
   $sStyleHidden_bskssj = '';
   if (isset($this->nmgp_cmp_hidden['bskssj']) && $this->nmgp_cmp_hidden['bskssj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bskssj']);
       $sStyleHidden_bskssj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bskssj = 'display: none;';
   $sStyleReadInp_bskssj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bskssj']) && $this->nmgp_cmp_readonly['bskssj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bskssj']);
       $sStyleReadLab_bskssj = '';
       $sStyleReadInp_bskssj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bskssj']) && $this->nmgp_cmp_hidden['bskssj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bskssj" value="<?php echo $this->form_encode_input($bskssj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bskssj_line" id="hidden_field_data_bskssj" style="<?php echo $sStyleHidden_bskssj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bskssj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bskssj_label"><span id="id_label_bskssj"><?php echo $this->nm_new_label['bskssj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['bskssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['bskssj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bskssj"]) &&  $this->nmgp_cmp_readonly["bskssj"] == "on") { 

 ?>
<input type="hidden" name="bskssj" value="<?php echo $this->form_encode_input($bskssj) . "\">" . $bskssj . ""; ?>
<?php } else { ?>
<span id="id_read_on_bskssj" class="sc-ui-readonly-bskssj css_bskssj_line" style="<?php echo $sStyleReadLab_bskssj; ?>"><?php echo $this->form_encode_input($bskssj); ?></span><span id="id_read_off_bskssj" style="white-space: nowrap;<?php echo $sStyleReadInp_bskssj; ?>">
 <input class="sc-js-input scFormObjectOdd css_bskssj_obj" style="" id="id_sc_field_bskssj" type=text name="bskssj" value="<?php echo $this->form_encode_input($bskssj) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['bskssj']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['bskssj']['date_format']; ?>', timeSep: '<?php echo $this->field_config['bskssj']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['bskssj']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bskssj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bskssj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->bskssj = $old_dt_bskssj;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bsjssj']))
    {
        $this->nm_new_label['bsjssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_bsjssj = $this->bsjssj;
   $this->bsjssj .= ' ' . $this->bsjssj_hora;
   $bsjssj = $this->bsjssj;
   $sStyleHidden_bsjssj = '';
   if (isset($this->nmgp_cmp_hidden['bsjssj']) && $this->nmgp_cmp_hidden['bsjssj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bsjssj']);
       $sStyleHidden_bsjssj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bsjssj = 'display: none;';
   $sStyleReadInp_bsjssj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bsjssj']) && $this->nmgp_cmp_readonly['bsjssj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bsjssj']);
       $sStyleReadLab_bsjssj = '';
       $sStyleReadInp_bsjssj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bsjssj']) && $this->nmgp_cmp_hidden['bsjssj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bsjssj" value="<?php echo $this->form_encode_input($bsjssj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bsjssj_line" id="hidden_field_data_bsjssj" style="<?php echo $sStyleHidden_bsjssj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bsjssj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bsjssj_label"><span id="id_label_bsjssj"><?php echo $this->nm_new_label['bsjssj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['bsjssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['bsjssj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bsjssj"]) &&  $this->nmgp_cmp_readonly["bsjssj"] == "on") { 

 ?>
<input type="hidden" name="bsjssj" value="<?php echo $this->form_encode_input($bsjssj) . "\">" . $bsjssj . ""; ?>
<?php } else { ?>
<span id="id_read_on_bsjssj" class="sc-ui-readonly-bsjssj css_bsjssj_line" style="<?php echo $sStyleReadLab_bsjssj; ?>"><?php echo $this->form_encode_input($bsjssj); ?></span><span id="id_read_off_bsjssj" style="white-space: nowrap;<?php echo $sStyleReadInp_bsjssj; ?>">
 <input class="sc-js-input scFormObjectOdd css_bsjssj_obj" style="" id="id_sc_field_bsjssj" type=text name="bsjssj" value="<?php echo $this->form_encode_input($bsjssj) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['bsjssj']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['bsjssj']['date_format']; ?>', timeSep: '<?php echo $this->field_config['bsjssj']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['bsjssj']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bsjssj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bsjssj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->bsjssj = $old_dt_bsjssj;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bsf']))
    {
        $this->nm_new_label['bsf'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsf'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bsf = $this->bsf;
   $sStyleHidden_bsf = '';
   if (isset($this->nmgp_cmp_hidden['bsf']) && $this->nmgp_cmp_hidden['bsf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bsf']);
       $sStyleHidden_bsf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bsf = 'display: none;';
   $sStyleReadInp_bsf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bsf']) && $this->nmgp_cmp_readonly['bsf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bsf']);
       $sStyleReadLab_bsf = '';
       $sStyleReadInp_bsf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bsf']) && $this->nmgp_cmp_hidden['bsf'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bsf" value="<?php echo $this->form_encode_input($bsf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bsf_line" id="hidden_field_data_bsf" style="<?php echo $sStyleHidden_bsf; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bsf_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bsf_label"><span id="id_label_bsf"><?php echo $this->nm_new_label['bsf']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bsf"]) &&  $this->nmgp_cmp_readonly["bsf"] == "on") { 

 ?>
<input type="hidden" name="bsf" value="<?php echo $this->form_encode_input($bsf) . "\">" . $bsf . ""; ?>
<?php } else { ?>
<span id="id_read_on_bsf" class="sc-ui-readonly-bsf css_bsf_line" style="<?php echo $sStyleReadLab_bsf; ?>"><?php echo $this->form_encode_input($this->bsf); ?></span><span id="id_read_off_bsf" style="white-space: nowrap;<?php echo $sStyleReadInp_bsf; ?>">
 <input class="sc-js-input scFormObjectOdd css_bsf_obj" style="" id="id_sc_field_bsf" type=text name="bsf" value="<?php echo $this->form_encode_input($bsf) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 0, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['bsf']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['bsf']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['bsf']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bsf_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bsf_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['wzqd']))
    {
        $this->nm_new_label['wzqd'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $wzqd = $this->wzqd;
   $sStyleHidden_wzqd = '';
   if (isset($this->nmgp_cmp_hidden['wzqd']) && $this->nmgp_cmp_hidden['wzqd'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['wzqd']);
       $sStyleHidden_wzqd = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_wzqd = 'display: none;';
   $sStyleReadInp_wzqd = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['wzqd']) && $this->nmgp_cmp_readonly['wzqd'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['wzqd']);
       $sStyleReadLab_wzqd = '';
       $sStyleReadInp_wzqd = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['wzqd']) && $this->nmgp_cmp_hidden['wzqd'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="wzqd" value="<?php echo $this->form_encode_input($wzqd) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_wzqd_line" id="hidden_field_data_wzqd" style="<?php echo $sStyleHidden_wzqd; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_wzqd_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_wzqd_label"><span id="id_label_wzqd"><?php echo $this->nm_new_label['wzqd']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['wzqd']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['wzqd'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["wzqd"]) &&  $this->nmgp_cmp_readonly["wzqd"] == "on") { 

 ?>
<input type="hidden" name="wzqd" value="<?php echo $this->form_encode_input($wzqd) . "\"><img id=\"wzqd_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_wzqd\"><a href=\"javascript:nm_mostra_doc('0', '" . str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_wzqd, 3)) . "', 'form_cg_zbgg')\">" . $wzqd . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_wzqd" class="scFormLinkOdd sc-ui-readonly-wzqd css_wzqd_line" style="<?php echo $sStyleReadLab_wzqd; ?>"><a href="javascript:nm_mostra_doc('0', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_wzqd, 3)); ?>', 'form_cg_zbgg')"><?php echo $this->form_encode_input($this->wzqd); ?></a></span><span id="id_read_off_wzqd" style="white-space: nowrap;<?php echo $sStyleReadInp_wzqd; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-wzqd" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_wzqd_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="wzqd[]" id="id_sc_field_wzqd" ></span></span>
<span id="chk_ajax_img_wzqd"<?php if ($this->nmgp_opcao == "novo" || empty($wzqd)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="wzqd_limpa" value="<?php echo $wzqd_limpa . '" '; if ($wzqd_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="wzqd_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_wzqd"><a href="javascript:nm_mostra_doc('0', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_wzqd, 3)); ?>', 'form_cg_zbgg')"><?php echo $wzqd ?></a></span><div id="id_sc_dragdrop_wzqd" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragfile'] ?></div>
<div id="id_img_loader_wzqd" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_wzqd" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_wzqd_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_wzqd_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['xckssj']))
    {
        $this->nm_new_label['xckssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_xckssj = $this->xckssj;
   $this->xckssj .= ' ' . $this->xckssj_hora;
   $xckssj = $this->xckssj;
   $sStyleHidden_xckssj = '';
   if (isset($this->nmgp_cmp_hidden['xckssj']) && $this->nmgp_cmp_hidden['xckssj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['xckssj']);
       $sStyleHidden_xckssj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_xckssj = 'display: none;';
   $sStyleReadInp_xckssj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['xckssj']) && $this->nmgp_cmp_readonly['xckssj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['xckssj']);
       $sStyleReadLab_xckssj = '';
       $sStyleReadInp_xckssj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['xckssj']) && $this->nmgp_cmp_hidden['xckssj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="xckssj" value="<?php echo $this->form_encode_input($xckssj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_xckssj_line" id="hidden_field_data_xckssj" style="<?php echo $sStyleHidden_xckssj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_xckssj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_xckssj_label"><span id="id_label_xckssj"><?php echo $this->nm_new_label['xckssj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['xckssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['xckssj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["xckssj"]) &&  $this->nmgp_cmp_readonly["xckssj"] == "on") { 

 ?>
<input type="hidden" name="xckssj" value="<?php echo $this->form_encode_input($xckssj) . "\">" . $xckssj . ""; ?>
<?php } else { ?>
<span id="id_read_on_xckssj" class="sc-ui-readonly-xckssj css_xckssj_line" style="<?php echo $sStyleReadLab_xckssj; ?>"><?php echo $this->form_encode_input($xckssj); ?></span><span id="id_read_off_xckssj" style="white-space: nowrap;<?php echo $sStyleReadInp_xckssj; ?>">
 <input class="sc-js-input scFormObjectOdd css_xckssj_obj" style="" id="id_sc_field_xckssj" type=text name="xckssj" value="<?php echo $this->form_encode_input($xckssj) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['xckssj']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['xckssj']['date_format']; ?>', timeSep: '<?php echo $this->field_config['xckssj']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['xckssj']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_xckssj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_xckssj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->xckssj = $old_dt_xckssj;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['xcjssj']))
    {
        $this->nm_new_label['xcjssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_xcjssj = $this->xcjssj;
   $this->xcjssj .= ' ' . $this->xcjssj_hora;
   $xcjssj = $this->xcjssj;
   $sStyleHidden_xcjssj = '';
   if (isset($this->nmgp_cmp_hidden['xcjssj']) && $this->nmgp_cmp_hidden['xcjssj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['xcjssj']);
       $sStyleHidden_xcjssj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_xcjssj = 'display: none;';
   $sStyleReadInp_xcjssj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['xcjssj']) && $this->nmgp_cmp_readonly['xcjssj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['xcjssj']);
       $sStyleReadLab_xcjssj = '';
       $sStyleReadInp_xcjssj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['xcjssj']) && $this->nmgp_cmp_hidden['xcjssj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="xcjssj" value="<?php echo $this->form_encode_input($xcjssj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_xcjssj_line" id="hidden_field_data_xcjssj" style="<?php echo $sStyleHidden_xcjssj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_xcjssj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_xcjssj_label"><span id="id_label_xcjssj"><?php echo $this->nm_new_label['xcjssj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['xcjssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['xcjssj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["xcjssj"]) &&  $this->nmgp_cmp_readonly["xcjssj"] == "on") { 

 ?>
<input type="hidden" name="xcjssj" value="<?php echo $this->form_encode_input($xcjssj) . "\">" . $xcjssj . ""; ?>
<?php } else { ?>
<span id="id_read_on_xcjssj" class="sc-ui-readonly-xcjssj css_xcjssj_line" style="<?php echo $sStyleReadLab_xcjssj; ?>"><?php echo $this->form_encode_input($xcjssj); ?></span><span id="id_read_off_xcjssj" style="white-space: nowrap;<?php echo $sStyleReadInp_xcjssj; ?>">
 <input class="sc-js-input scFormObjectOdd css_xcjssj_obj" style="" id="id_sc_field_xcjssj" type=text name="xcjssj" value="<?php echo $this->form_encode_input($xcjssj) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['xcjssj']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['xcjssj']['date_format']; ?>', timeSep: '<?php echo $this->field_config['xcjssj']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['xcjssj']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_xcjssj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_xcjssj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->xcjssj = $old_dt_xcjssj;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['zbkssj']))
    {
        $this->nm_new_label['zbkssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_zbkssj = $this->zbkssj;
   $this->zbkssj .= ' ' . $this->zbkssj_hora;
   $zbkssj = $this->zbkssj;
   $sStyleHidden_zbkssj = '';
   if (isset($this->nmgp_cmp_hidden['zbkssj']) && $this->nmgp_cmp_hidden['zbkssj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['zbkssj']);
       $sStyleHidden_zbkssj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_zbkssj = 'display: none;';
   $sStyleReadInp_zbkssj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['zbkssj']) && $this->nmgp_cmp_readonly['zbkssj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['zbkssj']);
       $sStyleReadLab_zbkssj = '';
       $sStyleReadInp_zbkssj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['zbkssj']) && $this->nmgp_cmp_hidden['zbkssj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="zbkssj" value="<?php echo $this->form_encode_input($zbkssj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_zbkssj_line" id="hidden_field_data_zbkssj" style="<?php echo $sStyleHidden_zbkssj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_zbkssj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_zbkssj_label"><span id="id_label_zbkssj"><?php echo $this->nm_new_label['zbkssj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['zbkssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['zbkssj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["zbkssj"]) &&  $this->nmgp_cmp_readonly["zbkssj"] == "on") { 

 ?>
<input type="hidden" name="zbkssj" value="<?php echo $this->form_encode_input($zbkssj) . "\">" . $zbkssj . ""; ?>
<?php } else { ?>
<span id="id_read_on_zbkssj" class="sc-ui-readonly-zbkssj css_zbkssj_line" style="<?php echo $sStyleReadLab_zbkssj; ?>"><?php echo $this->form_encode_input($zbkssj); ?></span><span id="id_read_off_zbkssj" style="white-space: nowrap;<?php echo $sStyleReadInp_zbkssj; ?>">
 <input class="sc-js-input scFormObjectOdd css_zbkssj_obj" style="" id="id_sc_field_zbkssj" type=text name="zbkssj" value="<?php echo $this->form_encode_input($zbkssj) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['zbkssj']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['zbkssj']['date_format']; ?>', timeSep: '<?php echo $this->field_config['zbkssj']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['zbkssj']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zbkssj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zbkssj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->zbkssj = $old_dt_zbkssj;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['zbjssj']))
    {
        $this->nm_new_label['zbjssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_zbjssj = $this->zbjssj;
   $this->zbjssj .= ' ' . $this->zbjssj_hora;
   $zbjssj = $this->zbjssj;
   $sStyleHidden_zbjssj = '';
   if (isset($this->nmgp_cmp_hidden['zbjssj']) && $this->nmgp_cmp_hidden['zbjssj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['zbjssj']);
       $sStyleHidden_zbjssj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_zbjssj = 'display: none;';
   $sStyleReadInp_zbjssj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['zbjssj']) && $this->nmgp_cmp_readonly['zbjssj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['zbjssj']);
       $sStyleReadLab_zbjssj = '';
       $sStyleReadInp_zbjssj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['zbjssj']) && $this->nmgp_cmp_hidden['zbjssj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="zbjssj" value="<?php echo $this->form_encode_input($zbjssj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_zbjssj_line" id="hidden_field_data_zbjssj" style="<?php echo $sStyleHidden_zbjssj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_zbjssj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_zbjssj_label"><span id="id_label_zbjssj"><?php echo $this->nm_new_label['zbjssj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['zbjssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['zbjssj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["zbjssj"]) &&  $this->nmgp_cmp_readonly["zbjssj"] == "on") { 

 ?>
<input type="hidden" name="zbjssj" value="<?php echo $this->form_encode_input($zbjssj) . "\">" . $zbjssj . ""; ?>
<?php } else { ?>
<span id="id_read_on_zbjssj" class="sc-ui-readonly-zbjssj css_zbjssj_line" style="<?php echo $sStyleReadLab_zbjssj; ?>"><?php echo $this->form_encode_input($zbjssj); ?></span><span id="id_read_off_zbjssj" style="white-space: nowrap;<?php echo $sStyleReadInp_zbjssj; ?>">
 <input class="sc-js-input scFormObjectOdd css_zbjssj_obj" style="" id="id_sc_field_zbjssj" type=text name="zbjssj" value="<?php echo $this->form_encode_input($zbjssj) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['zbjssj']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['zbjssj']['date_format']; ?>', timeSep: '<?php echo $this->field_config['zbjssj']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['zbjssj']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zbjssj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zbjssj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->zbjssj = $old_dt_zbjssj;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['zbfile']))
    {
        $this->nm_new_label['zbfile'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $zbfile = $this->zbfile;
   $sStyleHidden_zbfile = '';
   if (isset($this->nmgp_cmp_hidden['zbfile']) && $this->nmgp_cmp_hidden['zbfile'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['zbfile']);
       $sStyleHidden_zbfile = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_zbfile = 'display: none;';
   $sStyleReadInp_zbfile = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['zbfile']) && $this->nmgp_cmp_readonly['zbfile'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['zbfile']);
       $sStyleReadLab_zbfile = '';
       $sStyleReadInp_zbfile = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['zbfile']) && $this->nmgp_cmp_hidden['zbfile'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="zbfile" value="<?php echo $this->form_encode_input($zbfile) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_zbfile_line" id="hidden_field_data_zbfile" style="<?php echo $sStyleHidden_zbfile; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_zbfile_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_zbfile_label"><span id="id_label_zbfile"><?php echo $this->nm_new_label['zbfile']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['zbfile']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['zbfile'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["zbfile"]) &&  $this->nmgp_cmp_readonly["zbfile"] == "on") { 

 ?>
<input type="hidden" name="zbfile" value="<?php echo $this->form_encode_input($zbfile) . "\"><img id=\"zbfile_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_zbfile\"><a href=\"javascript:nm_mostra_doc('1', '" . str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_zbfile, 3)) . "', 'form_cg_zbgg')\">" . $zbfile . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_zbfile" class="scFormLinkOdd sc-ui-readonly-zbfile css_zbfile_line" style="<?php echo $sStyleReadLab_zbfile; ?>"><a href="javascript:nm_mostra_doc('1', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_zbfile, 3)); ?>', 'form_cg_zbgg')"><?php echo $this->form_encode_input($this->zbfile); ?></a></span><span id="id_read_off_zbfile" style="white-space: nowrap;<?php echo $sStyleReadInp_zbfile; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-zbfile" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_zbfile_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="zbfile[]" id="id_sc_field_zbfile" ></span></span>
<span id="chk_ajax_img_zbfile"<?php if ($this->nmgp_opcao == "novo" || empty($zbfile)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="zbfile_limpa" value="<?php echo $zbfile_limpa . '" '; if ($zbfile_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="zbfile_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_zbfile"><a href="javascript:nm_mostra_doc('1', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_zbfile, 3)); ?>', 'form_cg_zbgg')"><?php echo $zbfile ?></a></span><div id="id_sc_dragdrop_zbfile" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragfile'] ?></div>
<div id="id_img_loader_zbfile" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_zbfile" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zbfile_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zbfile_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lxr']))
    {
        $this->nm_new_label['lxr'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_lxr'] . "";
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

    <TD class="scFormDataOdd css_lxr_line" id="hidden_field_data_lxr" style="<?php echo $sStyleHidden_lxr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lxr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_lxr_label"><span id="id_label_lxr"><?php echo $this->nm_new_label['lxr']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['lxr']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['lxr'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lxr"]) &&  $this->nmgp_cmp_readonly["lxr"] == "on") { 

 ?>
<input type="hidden" name="lxr" value="<?php echo $this->form_encode_input($lxr) . "\">" . $lxr . ""; ?>
<?php } else { ?>
<span id="id_read_on_lxr" class="sc-ui-readonly-lxr css_lxr_line" style="<?php echo $sStyleReadLab_lxr; ?>"><?php echo $this->form_encode_input($this->lxr); ?></span><span id="id_read_off_lxr" style="white-space: nowrap;<?php echo $sStyleReadInp_lxr; ?>">
 <input class="sc-js-input scFormObjectOdd css_lxr_obj" style="" id="id_sc_field_lxr" type=text name="lxr" value="<?php echo $this->form_encode_input($lxr) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php
   $Sc_iframe_master = ($this->Embutida_form) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_cg_zbgg*scout' : '';
   if (isset($this->Ini->sc_lig_md5["grid_cg_staff"]) && $this->Ini->sc_lig_md5["grid_cg_staff"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,lxr,ygxm*scoutnm_evt_ret_busca*scinsc_form_cg_zbgg_mob_lxr_onchange(this)*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_cg_zbgg_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,lxr,ygxm*scoutnm_evt_ret_busca*scinsc_form_cg_zbgg_mob_lxr_onchange(this)*scout" . $Sc_iframe_master;
   }
?>

&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_grid_cg_staff_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_grid_cg_staff_cons_psq. "', '" . $Md5_Lig . "')", "cap_lxr", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lxr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lxr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bgdh']))
    {
        $this->nm_new_label['bgdh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bgdh'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bgdh = $this->bgdh;
   $sStyleHidden_bgdh = '';
   if (isset($this->nmgp_cmp_hidden['bgdh']) && $this->nmgp_cmp_hidden['bgdh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bgdh']);
       $sStyleHidden_bgdh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bgdh = 'display: none;';
   $sStyleReadInp_bgdh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bgdh']) && $this->nmgp_cmp_readonly['bgdh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bgdh']);
       $sStyleReadLab_bgdh = '';
       $sStyleReadInp_bgdh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bgdh']) && $this->nmgp_cmp_hidden['bgdh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bgdh" value="<?php echo $this->form_encode_input($bgdh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bgdh_line" id="hidden_field_data_bgdh" style="<?php echo $sStyleHidden_bgdh; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bgdh_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bgdh_label"><span id="id_label_bgdh"><?php echo $this->nm_new_label['bgdh']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bgdh"]) &&  $this->nmgp_cmp_readonly["bgdh"] == "on") { 

 ?>
<input type="hidden" name="bgdh" value="<?php echo $this->form_encode_input($bgdh) . "\">" . $bgdh . ""; ?>
<?php } else { ?>
<span id="id_read_on_bgdh" class="sc-ui-readonly-bgdh css_bgdh_line" style="<?php echo $sStyleReadLab_bgdh; ?>"><?php echo $this->form_encode_input($this->bgdh); ?></span><span id="id_read_off_bgdh" style="white-space: nowrap;<?php echo $sStyleReadInp_bgdh; ?>">
 <input class="sc-js-input scFormObjectOdd css_bgdh_obj" style="" id="id_sc_field_bgdh" type=text name="bgdh" value="<?php echo $this->form_encode_input($bgdh) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bgdh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bgdh_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['yddh']))
    {
        $this->nm_new_label['yddh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yddh'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $yddh = $this->yddh;
   $sStyleHidden_yddh = '';
   if (isset($this->nmgp_cmp_hidden['yddh']) && $this->nmgp_cmp_hidden['yddh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['yddh']);
       $sStyleHidden_yddh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_yddh = 'display: none;';
   $sStyleReadInp_yddh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['yddh']) && $this->nmgp_cmp_readonly['yddh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['yddh']);
       $sStyleReadLab_yddh = '';
       $sStyleReadInp_yddh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['yddh']) && $this->nmgp_cmp_hidden['yddh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="yddh" value="<?php echo $this->form_encode_input($yddh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_yddh_line" id="hidden_field_data_yddh" style="<?php echo $sStyleHidden_yddh; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_yddh_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_yddh_label"><span id="id_label_yddh"><?php echo $this->nm_new_label['yddh']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['yddh']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['yddh'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["yddh"]) &&  $this->nmgp_cmp_readonly["yddh"] == "on") { 

 ?>
<input type="hidden" name="yddh" value="<?php echo $this->form_encode_input($yddh) . "\">" . $yddh . ""; ?>
<?php } else { ?>
<span id="id_read_on_yddh" class="sc-ui-readonly-yddh css_yddh_line" style="<?php echo $sStyleReadLab_yddh; ?>"><?php echo $this->form_encode_input($this->yddh); ?></span><span id="id_read_off_yddh" style="white-space: nowrap;<?php echo $sStyleReadInp_yddh; ?>">
 <input class="sc-js-input scFormObjectOdd css_yddh_obj" style="" id="id_sc_field_yddh" type=text name="yddh" value="<?php echo $this->form_encode_input($yddh) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_yddh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_yddh_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fax']))
    {
        $this->nm_new_label['fax'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_fax'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fax = $this->fax;
   $sStyleHidden_fax = '';
   if (isset($this->nmgp_cmp_hidden['fax']) && $this->nmgp_cmp_hidden['fax'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fax']);
       $sStyleHidden_fax = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fax = 'display: none;';
   $sStyleReadInp_fax = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fax']) && $this->nmgp_cmp_readonly['fax'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fax']);
       $sStyleReadLab_fax = '';
       $sStyleReadInp_fax = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fax']) && $this->nmgp_cmp_hidden['fax'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fax" value="<?php echo $this->form_encode_input($fax) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fax_line" id="hidden_field_data_fax" style="<?php echo $sStyleHidden_fax; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fax_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fax_label"><span id="id_label_fax"><?php echo $this->nm_new_label['fax']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fax"]) &&  $this->nmgp_cmp_readonly["fax"] == "on") { 

 ?>
<input type="hidden" name="fax" value="<?php echo $this->form_encode_input($fax) . "\">" . $fax . ""; ?>
<?php } else { ?>
<span id="id_read_on_fax" class="sc-ui-readonly-fax css_fax_line" style="<?php echo $sStyleReadLab_fax; ?>"><?php echo $this->form_encode_input($this->fax); ?></span><span id="id_read_off_fax" style="white-space: nowrap;<?php echo $sStyleReadInp_fax; ?>">
 <input class="sc-js-input scFormObjectOdd css_fax_obj" style="" id="id_sc_field_fax" type=text name="fax" value="<?php echo $this->form_encode_input($fax) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fax_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fax_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['email']))
    {
        $this->nm_new_label['email'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email = $this->email;
   $sStyleHidden_email = '';
   if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email']);
       $sStyleHidden_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email = 'display: none;';
   $sStyleReadInp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['email']) && $this->nmgp_cmp_readonly['email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email']);
       $sStyleReadLab_email = '';
       $sStyleReadInp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_email_line" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_email_label"><span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['php_cmp_required']['email'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email"]) &&  $this->nmgp_cmp_readonly["email"] == "on") { 

 ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">" . $email . ""; ?>
<?php } else { ?>
<span id="id_read_on_email" class="sc-ui-readonly-email css_email_line" style="<?php echo $sStyleReadLab_email; ?>"><?php echo $this->form_encode_input($this->email); ?></span><span id="id_read_off_email" style="white-space: nowrap;<?php echo $sStyleReadInp_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_email_obj" style="" id="id_sc_field_email" type=text name="email" value="<?php echo $this->form_encode_input($email) ?>"
 size=32 maxlength=32 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "email_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['postcode']))
    {
        $this->nm_new_label['postcode'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_postcode'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $postcode = $this->postcode;
   $sStyleHidden_postcode = '';
   if (isset($this->nmgp_cmp_hidden['postcode']) && $this->nmgp_cmp_hidden['postcode'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['postcode']);
       $sStyleHidden_postcode = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_postcode = 'display: none;';
   $sStyleReadInp_postcode = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['postcode']) && $this->nmgp_cmp_readonly['postcode'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['postcode']);
       $sStyleReadLab_postcode = '';
       $sStyleReadInp_postcode = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['postcode']) && $this->nmgp_cmp_hidden['postcode'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="postcode" value="<?php echo $this->form_encode_input($postcode) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_postcode_line" id="hidden_field_data_postcode" style="<?php echo $sStyleHidden_postcode; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_postcode_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_postcode_label"><span id="id_label_postcode"><?php echo $this->nm_new_label['postcode']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["postcode"]) &&  $this->nmgp_cmp_readonly["postcode"] == "on") { 

 ?>
<input type="hidden" name="postcode" value="<?php echo $this->form_encode_input($postcode) . "\">" . $postcode . ""; ?>
<?php } else { ?>
<span id="id_read_on_postcode" class="sc-ui-readonly-postcode css_postcode_line" style="<?php echo $sStyleReadLab_postcode; ?>"><?php echo $this->form_encode_input($this->postcode); ?></span><span id="id_read_off_postcode" style="white-space: nowrap;<?php echo $sStyleReadInp_postcode; ?>">
 <input class="sc-js-input scFormObjectOdd css_postcode_obj" style="" id="id_sc_field_postcode" type=text name="postcode" value="<?php echo $this->form_encode_input($postcode) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_postcode_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_postcode_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dz']))
    {
        $this->nm_new_label['dz'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_dz'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dz = $this->dz;
   $sStyleHidden_dz = '';
   if (isset($this->nmgp_cmp_hidden['dz']) && $this->nmgp_cmp_hidden['dz'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dz']);
       $sStyleHidden_dz = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dz = 'display: none;';
   $sStyleReadInp_dz = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dz']) && $this->nmgp_cmp_readonly['dz'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dz']);
       $sStyleReadLab_dz = '';
       $sStyleReadInp_dz = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dz']) && $this->nmgp_cmp_hidden['dz'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dz" value="<?php echo $this->form_encode_input($dz) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dz_line" id="hidden_field_data_dz" style="<?php echo $sStyleHidden_dz; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dz_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dz_label"><span id="id_label_dz"><?php echo $this->nm_new_label['dz']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dz"]) &&  $this->nmgp_cmp_readonly["dz"] == "on") { 

 ?>
<input type="hidden" name="dz" value="<?php echo $this->form_encode_input($dz) . "\">" . $dz . ""; ?>
<?php } else { ?>
<span id="id_read_on_dz" class="sc-ui-readonly-dz css_dz_line" style="<?php echo $sStyleReadLab_dz; ?>"><?php echo $this->form_encode_input($this->dz); ?></span><span id="id_read_off_dz" style="white-space: nowrap;<?php echo $sStyleReadInp_dz; ?>">
 <input class="sc-js-input scFormObjectOdd css_dz_obj" style="" id="id_sc_field_dz" type=text name="dz" value="<?php echo $this->form_encode_input($dz) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dz_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dz_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['kfh']))
   {
       $this->nm_new_label['kfh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_kfh'] . "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $kfh = $this->kfh;
   $sStyleHidden_kfh = '';
   if (isset($this->nmgp_cmp_hidden['kfh']) && $this->nmgp_cmp_hidden['kfh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['kfh']);
       $sStyleHidden_kfh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_kfh = 'display: none;';
   $sStyleReadInp_kfh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['kfh']) && $this->nmgp_cmp_readonly['kfh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['kfh']);
       $sStyleReadLab_kfh = '';
       $sStyleReadInp_kfh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['kfh']) && $this->nmgp_cmp_hidden['kfh'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="kfh" value="<?php echo $this->form_encode_input($this->kfh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_kfh_line" id="hidden_field_data_kfh" style="<?php echo $sStyleHidden_kfh; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_kfh_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_kfh_label"><span id="id_label_kfh"><?php echo $this->nm_new_label['kfh']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["kfh"]) &&  $this->nmgp_cmp_readonly["kfh"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array(); 
    }

   $old_value_bzj = $this->bzj;
   $old_value_bskssj = $this->bskssj;
   $old_value_bskssj_hora = $this->bskssj_hora;
   $old_value_bsjssj = $this->bsjssj;
   $old_value_bsjssj_hora = $this->bsjssj_hora;
   $old_value_bsf = $this->bsf;
   $old_value_xckssj = $this->xckssj;
   $old_value_xckssj_hora = $this->xckssj_hora;
   $old_value_xcjssj = $this->xcjssj;
   $old_value_xcjssj_hora = $this->xcjssj_hora;
   $old_value_zbkssj = $this->zbkssj;
   $old_value_zbkssj_hora = $this->zbkssj_hora;
   $old_value_zbjssj = $this->zbjssj;
   $old_value_zbjssj_hora = $this->zbjssj_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_bzj = $this->bzj;
   $unformatted_value_bskssj = $this->bskssj;
   $unformatted_value_bskssj_hora = $this->bskssj_hora;
   $unformatted_value_bsjssj = $this->bsjssj;
   $unformatted_value_bsjssj_hora = $this->bsjssj_hora;
   $unformatted_value_bsf = $this->bsf;
   $unformatted_value_xckssj = $this->xckssj;
   $unformatted_value_xckssj_hora = $this->xckssj_hora;
   $unformatted_value_xcjssj = $this->xcjssj;
   $unformatted_value_xcjssj_hora = $this->xcjssj_hora;
   $unformatted_value_zbkssj = $this->zbkssj;
   $unformatted_value_zbkssj_hora = $this->zbkssj_hora;
   $unformatted_value_zbjssj = $this->zbjssj;
   $unformatted_value_zbjssj_hora = $this->zbjssj_hora;

   $nm_comando = "SELECT mc, mc 
FROM dm_bank 
ORDER BY mc";

   $this->bzj = $old_value_bzj;
   $this->bskssj = $old_value_bskssj;
   $this->bskssj_hora = $old_value_bskssj_hora;
   $this->bsjssj = $old_value_bsjssj;
   $this->bsjssj_hora = $old_value_bsjssj_hora;
   $this->bsf = $old_value_bsf;
   $this->xckssj = $old_value_xckssj;
   $this->xckssj_hora = $old_value_xckssj_hora;
   $this->xcjssj = $old_value_xcjssj;
   $this->xcjssj_hora = $old_value_xcjssj_hora;
   $this->zbkssj = $old_value_zbkssj;
   $this->zbkssj_hora = $old_value_zbkssj_hora;
   $this->zbjssj = $old_value_zbjssj;
   $this->zbjssj_hora = $old_value_zbjssj_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'][] = $rs->fields[0];
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
   $kfh_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->kfh_1))
          {
              foreach ($this->kfh_1 as $tmp_kfh)
              {
                  if (trim($tmp_kfh) === trim($cadaselect[1])) { $kfh_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->kfh) === trim($cadaselect[1])) { $kfh_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="kfh" value="<?php echo $this->form_encode_input($kfh) . "\">" . $kfh_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'] = array(); 
    }

   $old_value_bzj = $this->bzj;
   $old_value_bskssj = $this->bskssj;
   $old_value_bskssj_hora = $this->bskssj_hora;
   $old_value_bsjssj = $this->bsjssj;
   $old_value_bsjssj_hora = $this->bsjssj_hora;
   $old_value_bsf = $this->bsf;
   $old_value_xckssj = $this->xckssj;
   $old_value_xckssj_hora = $this->xckssj_hora;
   $old_value_xcjssj = $this->xcjssj;
   $old_value_xcjssj_hora = $this->xcjssj_hora;
   $old_value_zbkssj = $this->zbkssj;
   $old_value_zbkssj_hora = $this->zbkssj_hora;
   $old_value_zbjssj = $this->zbjssj;
   $old_value_zbjssj_hora = $this->zbjssj_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_bzj = $this->bzj;
   $unformatted_value_bskssj = $this->bskssj;
   $unformatted_value_bskssj_hora = $this->bskssj_hora;
   $unformatted_value_bsjssj = $this->bsjssj;
   $unformatted_value_bsjssj_hora = $this->bsjssj_hora;
   $unformatted_value_bsf = $this->bsf;
   $unformatted_value_xckssj = $this->xckssj;
   $unformatted_value_xckssj_hora = $this->xckssj_hora;
   $unformatted_value_xcjssj = $this->xcjssj;
   $unformatted_value_xcjssj_hora = $this->xcjssj_hora;
   $unformatted_value_zbkssj = $this->zbkssj;
   $unformatted_value_zbkssj_hora = $this->zbkssj_hora;
   $unformatted_value_zbjssj = $this->zbjssj;
   $unformatted_value_zbjssj_hora = $this->zbjssj_hora;

   $nm_comando = "SELECT mc, mc 
FROM dm_bank 
ORDER BY mc";

   $this->bzj = $old_value_bzj;
   $this->bskssj = $old_value_bskssj;
   $this->bskssj_hora = $old_value_bskssj_hora;
   $this->bsjssj = $old_value_bsjssj;
   $this->bsjssj_hora = $old_value_bsjssj_hora;
   $this->bsf = $old_value_bsf;
   $this->xckssj = $old_value_xckssj;
   $this->xckssj_hora = $old_value_xckssj_hora;
   $this->xcjssj = $old_value_xcjssj;
   $this->xcjssj_hora = $old_value_xcjssj_hora;
   $this->zbkssj = $old_value_zbkssj;
   $this->zbkssj_hora = $old_value_zbkssj_hora;
   $this->zbjssj = $old_value_zbjssj;
   $this->zbjssj_hora = $old_value_zbjssj_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'][] = $rs->fields[0];
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
   $kfh_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->kfh_1))
          {
              foreach ($this->kfh_1 as $tmp_kfh)
              {
                  if (trim($tmp_kfh) === trim($cadaselect[1])) { $kfh_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->kfh) === trim($cadaselect[1])) { $kfh_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($kfh_look))
          {
              $kfh_look = $this->kfh;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_kfh\" class=\"css_kfh_line\" style=\"" .  $sStyleReadLab_kfh . "\">" . $this->form_encode_input($kfh_look) . "</span><span id=\"id_read_off_kfh\" style=\"" . $sStyleReadInp_kfh . "\">";
   echo " <span id=\"idAjaxSelect_kfh\"><select class=\"sc-js-input scFormObjectOdd css_kfh_obj\" style=\"\" id=\"id_sc_field_kfh\" name=\"kfh\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_kfh'][] = ''; 
   echo "  <option value=\"\">请选择</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->kfh) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->kfh)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_kfh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_kfh_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['yhzh']))
    {
        $this->nm_new_label['yhzh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yhzh'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $yhzh = $this->yhzh;
   $sStyleHidden_yhzh = '';
   if (isset($this->nmgp_cmp_hidden['yhzh']) && $this->nmgp_cmp_hidden['yhzh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['yhzh']);
       $sStyleHidden_yhzh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_yhzh = 'display: none;';
   $sStyleReadInp_yhzh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['yhzh']) && $this->nmgp_cmp_readonly['yhzh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['yhzh']);
       $sStyleReadLab_yhzh = '';
       $sStyleReadInp_yhzh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['yhzh']) && $this->nmgp_cmp_hidden['yhzh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="yhzh" value="<?php echo $this->form_encode_input($yhzh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_yhzh_line" id="hidden_field_data_yhzh" style="<?php echo $sStyleHidden_yhzh; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_yhzh_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_yhzh_label"><span id="id_label_yhzh"><?php echo $this->nm_new_label['yhzh']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["yhzh"]) &&  $this->nmgp_cmp_readonly["yhzh"] == "on") { 

 ?>
<input type="hidden" name="yhzh" value="<?php echo $this->form_encode_input($yhzh) . "\">" . $yhzh . ""; ?>
<?php } else { ?>
<span id="id_read_on_yhzh" class="sc-ui-readonly-yhzh css_yhzh_line" style="<?php echo $sStyleReadLab_yhzh; ?>"><?php echo $this->form_encode_input($this->yhzh); ?></span><span id="id_read_off_yhzh" style="white-space: nowrap;<?php echo $sStyleReadInp_yhzh; ?>">
 <input class="sc-js-input scFormObjectOdd css_yhzh_obj" style="" id="id_sc_field_yhzh" type=text name="yhzh" value="<?php echo $this->form_encode_input($yhzh) ?>"
 size=32 maxlength=32 alt="{datatype: 'text', maxLength: 32, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_yhzh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_yhzh_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ybqy']))
   {
       $this->nm_new_label['ybqy'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_ybqy'] . "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ybqy = $this->ybqy;
   $sStyleHidden_ybqy = '';
   if (isset($this->nmgp_cmp_hidden['ybqy']) && $this->nmgp_cmp_hidden['ybqy'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ybqy']);
       $sStyleHidden_ybqy = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ybqy = 'display: none;';
   $sStyleReadInp_ybqy = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ybqy']) && $this->nmgp_cmp_readonly['ybqy'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ybqy']);
       $sStyleReadLab_ybqy = '';
       $sStyleReadInp_ybqy = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ybqy']) && $this->nmgp_cmp_hidden['ybqy'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ybqy" value="<?php echo $this->form_encode_input($this->ybqy) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ybqy_line" id="hidden_field_data_ybqy" style="<?php echo $sStyleHidden_ybqy; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ybqy_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ybqy_label"><span id="id_label_ybqy"><?php echo $this->nm_new_label['ybqy']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ybqy"]) &&  $this->nmgp_cmp_readonly["ybqy"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array(); 
    }

   $old_value_bzj = $this->bzj;
   $old_value_bskssj = $this->bskssj;
   $old_value_bskssj_hora = $this->bskssj_hora;
   $old_value_bsjssj = $this->bsjssj;
   $old_value_bsjssj_hora = $this->bsjssj_hora;
   $old_value_bsf = $this->bsf;
   $old_value_xckssj = $this->xckssj;
   $old_value_xckssj_hora = $this->xckssj_hora;
   $old_value_xcjssj = $this->xcjssj;
   $old_value_xcjssj_hora = $this->xcjssj_hora;
   $old_value_zbkssj = $this->zbkssj;
   $old_value_zbkssj_hora = $this->zbkssj_hora;
   $old_value_zbjssj = $this->zbjssj;
   $old_value_zbjssj_hora = $this->zbjssj_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_bzj = $this->bzj;
   $unformatted_value_bskssj = $this->bskssj;
   $unformatted_value_bskssj_hora = $this->bskssj_hora;
   $unformatted_value_bsjssj = $this->bsjssj;
   $unformatted_value_bsjssj_hora = $this->bsjssj_hora;
   $unformatted_value_bsf = $this->bsf;
   $unformatted_value_xckssj = $this->xckssj;
   $unformatted_value_xckssj_hora = $this->xckssj_hora;
   $unformatted_value_xcjssj = $this->xcjssj;
   $unformatted_value_xcjssj_hora = $this->xcjssj_hora;
   $unformatted_value_zbkssj = $this->zbkssj;
   $unformatted_value_zbkssj_hora = $this->zbkssj_hora;
   $unformatted_value_zbjssj = $this->zbjssj;
   $unformatted_value_zbjssj_hora = $this->zbjssj_hora;

   $nm_comando = "SELECT gsmc, gsmc 
FROM cg_company 
ORDER BY gsmc";

   $this->bzj = $old_value_bzj;
   $this->bskssj = $old_value_bskssj;
   $this->bskssj_hora = $old_value_bskssj_hora;
   $this->bsjssj = $old_value_bsjssj;
   $this->bsjssj_hora = $old_value_bsjssj_hora;
   $this->bsf = $old_value_bsf;
   $this->xckssj = $old_value_xckssj;
   $this->xckssj_hora = $old_value_xckssj_hora;
   $this->xcjssj = $old_value_xcjssj;
   $this->xcjssj_hora = $old_value_xcjssj_hora;
   $this->zbkssj = $old_value_zbkssj;
   $this->zbkssj_hora = $old_value_zbkssj_hora;
   $this->zbjssj = $old_value_zbjssj;
   $this->zbjssj_hora = $old_value_zbjssj_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'][] = $rs->fields[0];
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
   $ybqy_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ybqy_1))
          {
              foreach ($this->ybqy_1 as $tmp_ybqy)
              {
                  if (trim($tmp_ybqy) === trim($cadaselect[1])) { $ybqy_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->ybqy) === trim($cadaselect[1])) { $ybqy_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="ybqy" value="<?php echo $this->form_encode_input($ybqy) . "\">" . $ybqy_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'] = array(); 
    }

   $old_value_bzj = $this->bzj;
   $old_value_bskssj = $this->bskssj;
   $old_value_bskssj_hora = $this->bskssj_hora;
   $old_value_bsjssj = $this->bsjssj;
   $old_value_bsjssj_hora = $this->bsjssj_hora;
   $old_value_bsf = $this->bsf;
   $old_value_xckssj = $this->xckssj;
   $old_value_xckssj_hora = $this->xckssj_hora;
   $old_value_xcjssj = $this->xcjssj;
   $old_value_xcjssj_hora = $this->xcjssj_hora;
   $old_value_zbkssj = $this->zbkssj;
   $old_value_zbkssj_hora = $this->zbkssj_hora;
   $old_value_zbjssj = $this->zbjssj;
   $old_value_zbjssj_hora = $this->zbjssj_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_bzj = $this->bzj;
   $unformatted_value_bskssj = $this->bskssj;
   $unformatted_value_bskssj_hora = $this->bskssj_hora;
   $unformatted_value_bsjssj = $this->bsjssj;
   $unformatted_value_bsjssj_hora = $this->bsjssj_hora;
   $unformatted_value_bsf = $this->bsf;
   $unformatted_value_xckssj = $this->xckssj;
   $unformatted_value_xckssj_hora = $this->xckssj_hora;
   $unformatted_value_xcjssj = $this->xcjssj;
   $unformatted_value_xcjssj_hora = $this->xcjssj_hora;
   $unformatted_value_zbkssj = $this->zbkssj;
   $unformatted_value_zbkssj_hora = $this->zbkssj_hora;
   $unformatted_value_zbjssj = $this->zbjssj;
   $unformatted_value_zbjssj_hora = $this->zbjssj_hora;

   $nm_comando = "SELECT gsmc, gsmc 
FROM cg_company 
ORDER BY gsmc";

   $this->bzj = $old_value_bzj;
   $this->bskssj = $old_value_bskssj;
   $this->bskssj_hora = $old_value_bskssj_hora;
   $this->bsjssj = $old_value_bsjssj;
   $this->bsjssj_hora = $old_value_bsjssj_hora;
   $this->bsf = $old_value_bsf;
   $this->xckssj = $old_value_xckssj;
   $this->xckssj_hora = $old_value_xckssj_hora;
   $this->xcjssj = $old_value_xcjssj;
   $this->xcjssj_hora = $old_value_xcjssj_hora;
   $this->zbkssj = $old_value_zbkssj;
   $this->zbkssj_hora = $old_value_zbkssj_hora;
   $this->zbjssj = $old_value_zbjssj;
   $this->zbjssj_hora = $old_value_zbjssj_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['Lookup_ybqy'][] = $rs->fields[0];
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
   $ybqy_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ybqy_1))
          {
              foreach ($this->ybqy_1 as $tmp_ybqy)
              {
                  if (trim($tmp_ybqy) === trim($cadaselect[1])) { $ybqy_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->ybqy) === trim($cadaselect[1])) { $ybqy_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ybqy_look))
          {
              $ybqy_look = $this->ybqy;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ybqy\" class=\"css_ybqy_line\" style=\"" .  $sStyleReadLab_ybqy . "\">" . $this->form_encode_input($ybqy_look) . "</span><span id=\"id_read_off_ybqy\" style=\"" . $sStyleReadInp_ybqy . "\">";
   echo " <span id=\"idAjaxSelect_ybqy\"><select class=\"sc-js-input scFormObjectOdd css_ybqy_obj\" style=\"\" id=\"id_sc_field_ybqy\" name=\"ybqy\" size=\"7\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ybqy) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ybqy)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ybqy_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ybqy_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['xmsm']))
    {
        $this->nm_new_label['xmsm'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xmsm'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $xmsm = $this->xmsm;
   $sStyleHidden_xmsm = '';
   if (isset($this->nmgp_cmp_hidden['xmsm']) && $this->nmgp_cmp_hidden['xmsm'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['xmsm']);
       $sStyleHidden_xmsm = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_xmsm = 'display: none;';
   $sStyleReadInp_xmsm = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['xmsm']) && $this->nmgp_cmp_readonly['xmsm'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['xmsm']);
       $sStyleReadLab_xmsm = '';
       $sStyleReadInp_xmsm = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['xmsm']) && $this->nmgp_cmp_hidden['xmsm'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="xmsm" value="<?php echo $this->form_encode_input($xmsm) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_xmsm_line" id="hidden_field_data_xmsm" style="<?php echo $sStyleHidden_xmsm; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_xmsm_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_xmsm_label"><span id="id_label_xmsm"><?php echo $this->nm_new_label['xmsm']; ?></span></span><br>
<?php
$xmsm_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($xmsm));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["xmsm"]) &&  $this->nmgp_cmp_readonly["xmsm"] == "on") { 

 ?>
<input type="hidden" name="xmsm" value="<?php echo $this->form_encode_input($xmsm) . "\">" . $xmsm_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_xmsm" class="sc-ui-readonly-xmsm css_xmsm_line" style="<?php echo $sStyleReadLab_xmsm; ?>"><?php echo $this->form_encode_input($xmsm_val); ?></span><span id="id_read_off_xmsm" style="white-space: nowrap;<?php echo $sStyleReadInp_xmsm; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_xmsm_obj" style="white-space: pre-wrap;" name="xmsm" id="id_sc_field_xmsm" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $xmsm; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_xmsm_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_xmsm_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
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
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage('', "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", false, 0, false, "Ok", 0, 0, 0, 0, "", "", "", true, false);
</script> 
<?php
      }
?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['masterValue']);
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
 parent.scAjaxDetailStatus("form_cg_zbgg_mob");
 parent.scAjaxDetailHeight("form_cg_zbgg_mob", <?php echo $sTamanhoIframe; ?>);
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
   parent.scAjaxDetailHeight("form_cg_zbgg_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_cg_zbgg_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg_mob']['sc_modal'])
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
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<iframe id="sc-id-download-iframe" name="sc_name_download_iframe" style="display: none"></iframe>
</body> 
</html> 
