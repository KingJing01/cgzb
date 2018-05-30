<?php

class grid_cg_cgb_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function grid_cg_cgb_rtf()
   {
      $this->nm_data   = new nm_data("zh_cn");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_cg_cgb";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_cg_cgb.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global
             $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_cgb']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_cgb']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_cgb']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->b_cgbbh = $Busca_temp['b_cgbbh']; 
          $tmp_pos = strpos($this->b_cgbbh, "##@@");
          if ($tmp_pos !== false)
          {
              $this->b_cgbbh = substr($this->b_cgbbh, 0, $tmp_pos);
          }
          $this->b_cgbmc = $Busca_temp['b_cgbmc']; 
          $tmp_pos = strpos($this->b_cgbmc, "##@@");
          if ($tmp_pos !== false)
          {
              $this->b_cgbmc = substr($this->b_cgbmc, 0, $tmp_pos);
          }
          $this->j_xmbh = $Busca_temp['j_xmbh']; 
          $tmp_pos = strpos($this->j_xmbh, "##@@");
          if ($tmp_pos !== false)
          {
              $this->j_xmbh = substr($this->j_xmbh, 0, $tmp_pos);
          }
          $this->j_xmmc = $Busca_temp['j_xmmc']; 
          $tmp_pos = strpos($this->j_xmmc, "##@@");
          if ($tmp_pos !== false)
          {
              $this->j_xmmc = substr($this->j_xmmc, 0, $tmp_pos);
          }
          $this->b_cgpm = $Busca_temp['b_cgpm']; 
          $tmp_pos = strpos($this->b_cgpm, "##@@");
          if ($tmp_pos !== false)
          {
              $this->b_cgpm = substr($this->b_cgpm, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT j.xmmc as j_xmmc, b.cgbbh as b_cgbbh, b.cgbmc as b_cgbmc, b.cgpm as b_cgpm, b.cgys as b_cgys, j.xmbh as j_xmbh, j.ysje as j_ysje, b.id as b_id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT j.xmmc as j_xmmc, b.cgbbh as b_cgbbh, b.cgbmc as b_cgbmc, b.cgpm as b_cgpm, b.cgys as b_cgys, j.xmbh as j_xmbh, j.ysje as j_ysje, b.id as b_id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->New_label['j_xmmc'] = "" . $this->Ini->Nm_lang['lang_cg_cgjh_fld_xmmc'] . "";
      $this->New_label['b_cgbbh'] = "" . $this->Ini->Nm_lang['lang_cg_cgb_fld_cgbbh'] . "";
      $this->New_label['b_cgbmc'] = "" . $this->Ini->Nm_lang['lang_cg_cgb_fld_cgbmc'] . "";
      $this->New_label['b_cgpm'] = "" . $this->Ini->Nm_lang['lang_cg_cgb_fld_cgpm'] . "";
      $this->New_label['b_cgys'] = "" . $this->Ini->Nm_lang['lang_cg_cgb_fld_cgys'] . "";
      $this->New_label['j_xmbh'] = "" . $this->Ini->Nm_lang['lang_cg_cgjh_fld_xmbh'] . "";
      $this->New_label['j_ysje'] = "" . $this->Ini->Nm_lang['lang_cg_cgjh_fld_ysje'] . "";

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['j_xmmc'])) ? $this->New_label['j_xmmc'] : ""; 
          if ($Cada_col == "j_xmmc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['b_cgbbh'])) ? $this->New_label['b_cgbbh'] : ""; 
          if ($Cada_col == "b_cgbbh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['b_cgbmc'])) ? $this->New_label['b_cgbmc'] : ""; 
          if ($Cada_col == "b_cgbmc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['b_cgpm'])) ? $this->New_label['b_cgpm'] : ""; 
          if ($Cada_col == "b_cgpm" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['b_cgys'])) ? $this->New_label['b_cgys'] : ""; 
          if ($Cada_col == "b_cgys" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['j_xmbh'])) ? $this->New_label['j_xmbh'] : ""; 
          if ($Cada_col == "j_xmbh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['j_ysje'])) ? $this->New_label['j_ysje'] : ""; 
          if ($Cada_col == "j_ysje" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->j_xmmc = $rs->fields[0] ;  
         $this->b_cgbbh = $rs->fields[1] ;  
         $this->b_cgbmc = $rs->fields[2] ;  
         $this->b_cgpm = $rs->fields[3] ;  
         $this->b_cgys = $rs->fields[4] ;  
         $this->b_cgys =  str_replace(",", ".", $this->b_cgys);
         $this->b_cgys = (string)$this->b_cgys;
         $this->j_xmbh = $rs->fields[5] ;  
         $this->j_ysje = $rs->fields[6] ;  
         $this->j_ysje =  str_replace(",", ".", $this->j_ysje);
         $this->j_ysje = (string)$this->j_ysje;
         $this->b_id = $rs->fields[7] ;  
         $this->b_id = (string)$this->b_id;
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";

      $rs->Close();
   }
   //----- j_xmmc
   function NM_export_j_xmmc()
   {
         $this->j_xmmc = html_entity_decode($this->j_xmmc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->j_xmmc = strip_tags($this->j_xmmc);
         if (!NM_is_utf8($this->j_xmmc))
         {
             $this->j_xmmc = sc_convert_encoding($this->j_xmmc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->j_xmmc = str_replace('<', '&lt;', $this->j_xmmc);
         $this->j_xmmc = str_replace('>', '&gt;', $this->j_xmmc);
         $this->Texto_tag .= "<td>" . $this->j_xmmc . "</td>\r\n";
   }
   //----- b_cgbbh
   function NM_export_b_cgbbh()
   {
         $this->b_cgbbh = html_entity_decode($this->b_cgbbh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->b_cgbbh = strip_tags($this->b_cgbbh);
         if (!NM_is_utf8($this->b_cgbbh))
         {
             $this->b_cgbbh = sc_convert_encoding($this->b_cgbbh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->b_cgbbh = str_replace('<', '&lt;', $this->b_cgbbh);
         $this->b_cgbbh = str_replace('>', '&gt;', $this->b_cgbbh);
         $this->Texto_tag .= "<td>" . $this->b_cgbbh . "</td>\r\n";
   }
   //----- b_cgbmc
   function NM_export_b_cgbmc()
   {
         $this->b_cgbmc = html_entity_decode($this->b_cgbmc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->b_cgbmc = strip_tags($this->b_cgbmc);
         if (!NM_is_utf8($this->b_cgbmc))
         {
             $this->b_cgbmc = sc_convert_encoding($this->b_cgbmc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->b_cgbmc = str_replace('<', '&lt;', $this->b_cgbmc);
         $this->b_cgbmc = str_replace('>', '&gt;', $this->b_cgbmc);
         $this->Texto_tag .= "<td>" . $this->b_cgbmc . "</td>\r\n";
   }
   //----- b_cgpm
   function NM_export_b_cgpm()
   {
         $this->b_cgpm = html_entity_decode($this->b_cgpm, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->b_cgpm = strip_tags($this->b_cgpm);
         if (!NM_is_utf8($this->b_cgpm))
         {
             $this->b_cgpm = sc_convert_encoding($this->b_cgpm, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->b_cgpm = str_replace('<', '&lt;', $this->b_cgpm);
         $this->b_cgpm = str_replace('>', '&gt;', $this->b_cgpm);
         $this->Texto_tag .= "<td>" . $this->b_cgpm . "</td>\r\n";
   }
   //----- b_cgys
   function NM_export_b_cgys()
   {
         nmgp_Form_Num_Val($this->b_cgys, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "0", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->b_cgys))
         {
             $this->b_cgys = sc_convert_encoding($this->b_cgys, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->b_cgys = str_replace('<', '&lt;', $this->b_cgys);
         $this->b_cgys = str_replace('>', '&gt;', $this->b_cgys);
         $this->Texto_tag .= "<td>" . $this->b_cgys . "</td>\r\n";
   }
   //----- j_xmbh
   function NM_export_j_xmbh()
   {
         $this->j_xmbh = html_entity_decode($this->j_xmbh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->j_xmbh = strip_tags($this->j_xmbh);
         if (!NM_is_utf8($this->j_xmbh))
         {
             $this->j_xmbh = sc_convert_encoding($this->j_xmbh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->j_xmbh = str_replace('<', '&lt;', $this->j_xmbh);
         $this->j_xmbh = str_replace('>', '&gt;', $this->j_xmbh);
         $this->Texto_tag .= "<td>" . $this->j_xmbh . "</td>\r\n";
   }
   //----- j_ysje
   function NM_export_j_ysje()
   {
         nmgp_Form_Num_Val($this->j_ysje, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "0", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->j_ysje))
         {
             $this->j_ysje = sc_convert_encoding($this->j_ysje, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->j_ysje = str_replace('<', '&lt;', $this->j_ysje);
         $this->j_ysje = str_replace('>', '&gt;', $this->j_ysje);
         $this->Texto_tag .= "<td>" . $this->j_ysje . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $rtf_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_cgb'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - <?php echo $this->Ini->Nm_lang['lang_tbl_cg_cgb'] ?> :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
  <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
  <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
  <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
  <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
  <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_cg_cgb_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_cg_cgb"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont2 >= $tam_campo)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
}

?>
