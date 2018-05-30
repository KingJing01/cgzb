<?php

class grid_cg_zbgg_spable_rtf
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
   function grid_cg_zbgg_spable_rtf()
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
      $this->Arquivo   .= "_grid_cg_zbgg_spable";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_cg_zbgg_spable.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_zbgg_spable']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_zbgg_spable']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_zbgg_spable']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->cgbbh = $Busca_temp['cgbbh']; 
          $tmp_pos = strpos($this->cgbbh, "##@@");
          if ($tmp_pos !== false)
          {
              $this->cgbbh = substr($this->cgbbh, 0, $tmp_pos);
          }
          $this->cgbmc = $Busca_temp['cgbmc']; 
          $tmp_pos = strpos($this->cgbmc, "##@@");
          if ($tmp_pos !== false)
          {
              $this->cgbmc = substr($this->cgbmc, 0, $tmp_pos);
          }
          $this->cgfs = $Busca_temp['cgfs']; 
          $tmp_pos = strpos($this->cgfs, "##@@");
          if ($tmp_pos !== false)
          {
              $this->cgfs = substr($this->cgfs, 0, $tmp_pos);
          }
          $this->zbkssj = $Busca_temp['zbkssj']; 
          $tmp_pos = strpos($this->zbkssj, "##@@");
          if ($tmp_pos !== false)
          {
              $this->zbkssj = substr($this->zbkssj, 0, $tmp_pos);
          }
          $this->zbkssj_2 = $Busca_temp['zbkssj_input_2']; 
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT cgbbh, cgbmc, bzj, bsf, zbkssj, cgfs, bskssj, bsjssj, xckssj, xcjssj, zbjssj, lxr, bgdh, yddh, fax, email, postcode, dz, kfh, yhzh, xmsm, id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT cgbbh, cgbmc, bzj, bsf, zbkssj, cgfs, bskssj, bsjssj, xckssj, xcjssj, zbjssj, lxr, bgdh, yddh, fax, email, postcode, dz, kfh, yhzh, xmsm, id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->New_label['cgbbh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . "";
      $this->New_label['cgbmc'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbmc'] . "";
      $this->New_label['bzj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bzj'] . "";
      $this->New_label['bsf'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsf'] . "";
      $this->New_label['zbkssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "";
      $this->New_label['cgfs'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgfs'] . "";
      $this->New_label['bskssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "";
      $this->New_label['bsjssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "";
      $this->New_label['xckssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "";
      $this->New_label['xcjssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "";
      $this->New_label['zbjssj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "";
      $this->New_label['lxr'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_lxr'] . "";
      $this->New_label['bgdh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bgdh'] . "";
      $this->New_label['yddh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yddh'] . "";
      $this->New_label['fax'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_fax'] . "";
      $this->New_label['email'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_email'] . "";
      $this->New_label['postcode'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_postcode'] . "";
      $this->New_label['dz'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_dz'] . "";
      $this->New_label['kfh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_kfh'] . "";
      $this->New_label['yhzh'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yhzh'] . "";
      $this->New_label['xmsm'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xmsm'] . "";
      $this->New_label['wzqd'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . "";
      $this->New_label['zbfile'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . "";
      $this->New_label['ybqy'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_ybqy'] . "";
      $this->New_label['shsj'] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_shsj'] . "";

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['cgbbh'])) ? $this->New_label['cgbbh'] : ""; 
          if ($Cada_col == "cgbbh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cgbmc'])) ? $this->New_label['cgbmc'] : ""; 
          if ($Cada_col == "cgbmc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['bzj'])) ? $this->New_label['bzj'] : ""; 
          if ($Cada_col == "bzj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['bsf'])) ? $this->New_label['bsf'] : ""; 
          if ($Cada_col == "bsf" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['zbkssj'])) ? $this->New_label['zbkssj'] : ""; 
          if ($Cada_col == "zbkssj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['qysb'])) ? $this->New_label['qysb'] : "操作"; 
          if ($Cada_col == "qysb" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cgfs'])) ? $this->New_label['cgfs'] : ""; 
          if ($Cada_col == "cgfs" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['bskssj'])) ? $this->New_label['bskssj'] : ""; 
          if ($Cada_col == "bskssj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['bsjssj'])) ? $this->New_label['bsjssj'] : ""; 
          if ($Cada_col == "bsjssj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['xckssj'])) ? $this->New_label['xckssj'] : ""; 
          if ($Cada_col == "xckssj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['xcjssj'])) ? $this->New_label['xcjssj'] : ""; 
          if ($Cada_col == "xcjssj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['zbjssj'])) ? $this->New_label['zbjssj'] : ""; 
          if ($Cada_col == "zbjssj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['lxr'])) ? $this->New_label['lxr'] : ""; 
          if ($Cada_col == "lxr" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['bgdh'])) ? $this->New_label['bgdh'] : ""; 
          if ($Cada_col == "bgdh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['yddh'])) ? $this->New_label['yddh'] : ""; 
          if ($Cada_col == "yddh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fax'])) ? $this->New_label['fax'] : ""; 
          if ($Cada_col == "fax" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['email'])) ? $this->New_label['email'] : ""; 
          if ($Cada_col == "email" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['postcode'])) ? $this->New_label['postcode'] : ""; 
          if ($Cada_col == "postcode" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['dz'])) ? $this->New_label['dz'] : ""; 
          if ($Cada_col == "dz" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['kfh'])) ? $this->New_label['kfh'] : ""; 
          if ($Cada_col == "kfh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['yhzh'])) ? $this->New_label['yhzh'] : ""; 
          if ($Cada_col == "yhzh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['xmsm'])) ? $this->New_label['xmsm'] : ""; 
          if ($Cada_col == "xmsm" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
         $this->cgbbh = $rs->fields[0] ;  
         $this->cgbmc = $rs->fields[1] ;  
         $this->bzj = $rs->fields[2] ;  
         $this->bzj =  str_replace(",", ".", $this->bzj);
         $this->bzj = (string)$this->bzj;
         $this->bsf = $rs->fields[3] ;  
         $this->bsf =  str_replace(",", ".", $this->bsf);
         $this->bsf = (string)$this->bsf;
         $this->zbkssj = $rs->fields[4] ;  
         $this->cgfs = $rs->fields[5] ;  
         $this->bskssj = $rs->fields[6] ;  
         $this->bsjssj = $rs->fields[7] ;  
         $this->xckssj = $rs->fields[8] ;  
         $this->xcjssj = $rs->fields[9] ;  
         $this->zbjssj = $rs->fields[10] ;  
         $this->lxr = $rs->fields[11] ;  
         $this->bgdh = $rs->fields[12] ;  
         $this->yddh = $rs->fields[13] ;  
         $this->fax = $rs->fields[14] ;  
         $this->email = $rs->fields[15] ;  
         $this->postcode = $rs->fields[16] ;  
         $this->dz = $rs->fields[17] ;  
         $this->kfh = $rs->fields[18] ;  
         $this->yhzh = $rs->fields[19] ;  
         $this->xmsm = $rs->fields[20] ;  
         $this->id = $rs->fields[21] ;  
         $this->id = (string)$this->id;
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_cg_zbgg_spable']['contr_erro'] = 'on';
 $this->qysb ='企业申报';

$_SESSION['scriptcase']['grid_cg_zbgg_spable']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['field_order'] as $Cada_col)
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
   //----- cgbbh
   function NM_export_cgbbh()
   {
         $this->cgbbh = html_entity_decode($this->cgbbh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cgbbh = strip_tags($this->cgbbh);
         if (!NM_is_utf8($this->cgbbh))
         {
             $this->cgbbh = sc_convert_encoding($this->cgbbh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cgbbh = str_replace('<', '&lt;', $this->cgbbh);
         $this->cgbbh = str_replace('>', '&gt;', $this->cgbbh);
         $this->Texto_tag .= "<td>" . $this->cgbbh . "</td>\r\n";
   }
   //----- cgbmc
   function NM_export_cgbmc()
   {
         $this->cgbmc = html_entity_decode($this->cgbmc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cgbmc = strip_tags($this->cgbmc);
         if (!NM_is_utf8($this->cgbmc))
         {
             $this->cgbmc = sc_convert_encoding($this->cgbmc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cgbmc = str_replace('<', '&lt;', $this->cgbmc);
         $this->cgbmc = str_replace('>', '&gt;', $this->cgbmc);
         $this->Texto_tag .= "<td>" . $this->cgbmc . "</td>\r\n";
   }
   //----- bzj
   function NM_export_bzj()
   {
         nmgp_Form_Num_Val($this->bzj, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->bzj))
         {
             $this->bzj = sc_convert_encoding($this->bzj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->bzj = str_replace('<', '&lt;', $this->bzj);
         $this->bzj = str_replace('>', '&gt;', $this->bzj);
         $this->Texto_tag .= "<td>" . $this->bzj . "</td>\r\n";
   }
   //----- bsf
   function NM_export_bsf()
   {
         nmgp_Form_Num_Val($this->bsf, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->bsf))
         {
             $this->bsf = sc_convert_encoding($this->bsf, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->bsf = str_replace('<', '&lt;', $this->bsf);
         $this->bsf = str_replace('>', '&gt;', $this->bsf);
         $this->Texto_tag .= "<td>" . $this->bsf . "</td>\r\n";
   }
   //----- zbkssj
   function NM_export_zbkssj()
   {
         if (substr($this->zbkssj, 10, 1) == "-") 
         { 
             $this->zbkssj = substr($this->zbkssj, 0, 10) . " " . substr($this->zbkssj, 11);
         } 
         if (substr($this->zbkssj, 13, 1) == ".") 
         { 
            $this->zbkssj = substr($this->zbkssj, 0, 13) . ":" . substr($this->zbkssj, 14, 2) . ":" . substr($this->zbkssj, 17);
         } 
         $conteudo_x = $this->zbkssj;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->zbkssj, "YYYY-MM-DD HH:II:SS");
             $this->zbkssj = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->zbkssj))
         {
             $this->zbkssj = sc_convert_encoding($this->zbkssj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->zbkssj = str_replace('<', '&lt;', $this->zbkssj);
         $this->zbkssj = str_replace('>', '&gt;', $this->zbkssj);
         $this->Texto_tag .= "<td>" . $this->zbkssj . "</td>\r\n";
   }
   //----- qysb
   function NM_export_qysb()
   {
         $this->qysb = html_entity_decode($this->qysb, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->qysb = strip_tags($this->qysb);
         if (!NM_is_utf8($this->qysb))
         {
             $this->qysb = sc_convert_encoding($this->qysb, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->qysb = str_replace('<', '&lt;', $this->qysb);
         $this->qysb = str_replace('>', '&gt;', $this->qysb);
         $this->Texto_tag .= "<td>" . $this->qysb . "</td>\r\n";
   }
   //----- cgfs
   function NM_export_cgfs()
   {
         $this->cgfs = html_entity_decode($this->cgfs, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cgfs = strip_tags($this->cgfs);
         if (!NM_is_utf8($this->cgfs))
         {
             $this->cgfs = sc_convert_encoding($this->cgfs, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cgfs = str_replace('<', '&lt;', $this->cgfs);
         $this->cgfs = str_replace('>', '&gt;', $this->cgfs);
         $this->Texto_tag .= "<td>" . $this->cgfs . "</td>\r\n";
   }
   //----- bskssj
   function NM_export_bskssj()
   {
         if (substr($this->bskssj, 10, 1) == "-") 
         { 
             $this->bskssj = substr($this->bskssj, 0, 10) . " " . substr($this->bskssj, 11);
         } 
         if (substr($this->bskssj, 13, 1) == ".") 
         { 
            $this->bskssj = substr($this->bskssj, 0, 13) . ":" . substr($this->bskssj, 14, 2) . ":" . substr($this->bskssj, 17);
         } 
         $conteudo_x = $this->bskssj;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->bskssj, "YYYY-MM-DD HH:II:SS");
             $this->bskssj = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->bskssj))
         {
             $this->bskssj = sc_convert_encoding($this->bskssj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->bskssj = str_replace('<', '&lt;', $this->bskssj);
         $this->bskssj = str_replace('>', '&gt;', $this->bskssj);
         $this->Texto_tag .= "<td>" . $this->bskssj . "</td>\r\n";
   }
   //----- bsjssj
   function NM_export_bsjssj()
   {
         if (substr($this->bsjssj, 10, 1) == "-") 
         { 
             $this->bsjssj = substr($this->bsjssj, 0, 10) . " " . substr($this->bsjssj, 11);
         } 
         if (substr($this->bsjssj, 13, 1) == ".") 
         { 
            $this->bsjssj = substr($this->bsjssj, 0, 13) . ":" . substr($this->bsjssj, 14, 2) . ":" . substr($this->bsjssj, 17);
         } 
         $conteudo_x = $this->bsjssj;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->bsjssj, "YYYY-MM-DD HH:II:SS");
             $this->bsjssj = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->bsjssj))
         {
             $this->bsjssj = sc_convert_encoding($this->bsjssj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->bsjssj = str_replace('<', '&lt;', $this->bsjssj);
         $this->bsjssj = str_replace('>', '&gt;', $this->bsjssj);
         $this->Texto_tag .= "<td>" . $this->bsjssj . "</td>\r\n";
   }
   //----- xckssj
   function NM_export_xckssj()
   {
         if (substr($this->xckssj, 10, 1) == "-") 
         { 
             $this->xckssj = substr($this->xckssj, 0, 10) . " " . substr($this->xckssj, 11);
         } 
         if (substr($this->xckssj, 13, 1) == ".") 
         { 
            $this->xckssj = substr($this->xckssj, 0, 13) . ":" . substr($this->xckssj, 14, 2) . ":" . substr($this->xckssj, 17);
         } 
         $conteudo_x = $this->xckssj;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->xckssj, "YYYY-MM-DD HH:II:SS");
             $this->xckssj = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->xckssj))
         {
             $this->xckssj = sc_convert_encoding($this->xckssj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->xckssj = str_replace('<', '&lt;', $this->xckssj);
         $this->xckssj = str_replace('>', '&gt;', $this->xckssj);
         $this->Texto_tag .= "<td>" . $this->xckssj . "</td>\r\n";
   }
   //----- xcjssj
   function NM_export_xcjssj()
   {
         if (substr($this->xcjssj, 10, 1) == "-") 
         { 
             $this->xcjssj = substr($this->xcjssj, 0, 10) . " " . substr($this->xcjssj, 11);
         } 
         if (substr($this->xcjssj, 13, 1) == ".") 
         { 
            $this->xcjssj = substr($this->xcjssj, 0, 13) . ":" . substr($this->xcjssj, 14, 2) . ":" . substr($this->xcjssj, 17);
         } 
         $conteudo_x = $this->xcjssj;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->xcjssj, "YYYY-MM-DD HH:II:SS");
             $this->xcjssj = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->xcjssj))
         {
             $this->xcjssj = sc_convert_encoding($this->xcjssj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->xcjssj = str_replace('<', '&lt;', $this->xcjssj);
         $this->xcjssj = str_replace('>', '&gt;', $this->xcjssj);
         $this->Texto_tag .= "<td>" . $this->xcjssj . "</td>\r\n";
   }
   //----- zbjssj
   function NM_export_zbjssj()
   {
         if (substr($this->zbjssj, 10, 1) == "-") 
         { 
             $this->zbjssj = substr($this->zbjssj, 0, 10) . " " . substr($this->zbjssj, 11);
         } 
         if (substr($this->zbjssj, 13, 1) == ".") 
         { 
            $this->zbjssj = substr($this->zbjssj, 0, 13) . ":" . substr($this->zbjssj, 14, 2) . ":" . substr($this->zbjssj, 17);
         } 
         $conteudo_x = $this->zbjssj;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->zbjssj, "YYYY-MM-DD HH:II:SS");
             $this->zbjssj = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->zbjssj))
         {
             $this->zbjssj = sc_convert_encoding($this->zbjssj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->zbjssj = str_replace('<', '&lt;', $this->zbjssj);
         $this->zbjssj = str_replace('>', '&gt;', $this->zbjssj);
         $this->Texto_tag .= "<td>" . $this->zbjssj . "</td>\r\n";
   }
   //----- lxr
   function NM_export_lxr()
   {
         $this->lxr = html_entity_decode($this->lxr, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->lxr = strip_tags($this->lxr);
         if (!NM_is_utf8($this->lxr))
         {
             $this->lxr = sc_convert_encoding($this->lxr, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->lxr = str_replace('<', '&lt;', $this->lxr);
         $this->lxr = str_replace('>', '&gt;', $this->lxr);
         $this->Texto_tag .= "<td>" . $this->lxr . "</td>\r\n";
   }
   //----- bgdh
   function NM_export_bgdh()
   {
         $this->bgdh = html_entity_decode($this->bgdh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->bgdh = strip_tags($this->bgdh);
         if (!NM_is_utf8($this->bgdh))
         {
             $this->bgdh = sc_convert_encoding($this->bgdh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->bgdh = str_replace('<', '&lt;', $this->bgdh);
         $this->bgdh = str_replace('>', '&gt;', $this->bgdh);
         $this->Texto_tag .= "<td>" . $this->bgdh . "</td>\r\n";
   }
   //----- yddh
   function NM_export_yddh()
   {
         $this->yddh = html_entity_decode($this->yddh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->yddh = strip_tags($this->yddh);
         if (!NM_is_utf8($this->yddh))
         {
             $this->yddh = sc_convert_encoding($this->yddh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->yddh = str_replace('<', '&lt;', $this->yddh);
         $this->yddh = str_replace('>', '&gt;', $this->yddh);
         $this->Texto_tag .= "<td>" . $this->yddh . "</td>\r\n";
   }
   //----- fax
   function NM_export_fax()
   {
         $this->fax = html_entity_decode($this->fax, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->fax = strip_tags($this->fax);
         if (!NM_is_utf8($this->fax))
         {
             $this->fax = sc_convert_encoding($this->fax, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fax = str_replace('<', '&lt;', $this->fax);
         $this->fax = str_replace('>', '&gt;', $this->fax);
         $this->Texto_tag .= "<td>" . $this->fax . "</td>\r\n";
   }
   //----- email
   function NM_export_email()
   {
         $this->email = html_entity_decode($this->email, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->email = strip_tags($this->email);
         if (!NM_is_utf8($this->email))
         {
             $this->email = sc_convert_encoding($this->email, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->email = str_replace('<', '&lt;', $this->email);
         $this->email = str_replace('>', '&gt;', $this->email);
         $this->Texto_tag .= "<td>" . $this->email . "</td>\r\n";
   }
   //----- postcode
   function NM_export_postcode()
   {
         $this->postcode = html_entity_decode($this->postcode, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->postcode = strip_tags($this->postcode);
         if (!NM_is_utf8($this->postcode))
         {
             $this->postcode = sc_convert_encoding($this->postcode, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->postcode = str_replace('<', '&lt;', $this->postcode);
         $this->postcode = str_replace('>', '&gt;', $this->postcode);
         $this->Texto_tag .= "<td>" . $this->postcode . "</td>\r\n";
   }
   //----- dz
   function NM_export_dz()
   {
         $this->dz = html_entity_decode($this->dz, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->dz = strip_tags($this->dz);
         if (!NM_is_utf8($this->dz))
         {
             $this->dz = sc_convert_encoding($this->dz, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->dz = str_replace('<', '&lt;', $this->dz);
         $this->dz = str_replace('>', '&gt;', $this->dz);
         $this->Texto_tag .= "<td>" . $this->dz . "</td>\r\n";
   }
   //----- kfh
   function NM_export_kfh()
   {
         $this->kfh = html_entity_decode($this->kfh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->kfh = strip_tags($this->kfh);
         if (!NM_is_utf8($this->kfh))
         {
             $this->kfh = sc_convert_encoding($this->kfh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->kfh = str_replace('<', '&lt;', $this->kfh);
         $this->kfh = str_replace('>', '&gt;', $this->kfh);
         $this->Texto_tag .= "<td>" . $this->kfh . "</td>\r\n";
   }
   //----- yhzh
   function NM_export_yhzh()
   {
         $this->yhzh = html_entity_decode($this->yhzh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->yhzh = strip_tags($this->yhzh);
         if (!NM_is_utf8($this->yhzh))
         {
             $this->yhzh = sc_convert_encoding($this->yhzh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->yhzh = str_replace('<', '&lt;', $this->yhzh);
         $this->yhzh = str_replace('>', '&gt;', $this->yhzh);
         $this->Texto_tag .= "<td>" . $this->yhzh . "</td>\r\n";
   }
   //----- xmsm
   function NM_export_xmsm()
   {
         $this->xmsm = html_entity_decode($this->xmsm, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->xmsm = strip_tags($this->xmsm);
         if (!NM_is_utf8($this->xmsm))
         {
             $this->xmsm = sc_convert_encoding($this->xmsm, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->xmsm = str_replace('<', '&lt;', $this->xmsm);
         $this->xmsm = str_replace('>', '&gt;', $this->xmsm);
         $this->Texto_tag .= "<td>" . $this->xmsm . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_zbgg_spable'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - <?php echo $this->Ini->Nm_lang['lang_menu_cg_zbgg_spable'] ?> :: RTF</TITLE>
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
<form name="Fdown" method="get" action="grid_cg_zbgg_spable_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_cg_zbgg_spable"> 
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
