<?php

class grid_cg_company_rtf
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
   function grid_cg_company_rtf()
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
      $this->Arquivo   .= "_grid_cg_company";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_cg_company.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_company']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_company']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_company']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->gsjc = $Busca_temp['gsjc']; 
          $tmp_pos = strpos($this->gsjc, "##@@");
          if ($tmp_pos !== false)
          {
              $this->gsjc = substr($this->gsjc, 0, $tmp_pos);
          }
          $this->qylx = $Busca_temp['qylx']; 
          $tmp_pos = strpos($this->qylx, "##@@");
          if ($tmp_pos !== false)
          {
              $this->qylx = substr($this->qylx, 0, $tmp_pos);
          }
          $this->khyh = $Busca_temp['khyh']; 
          $tmp_pos = strpos($this->khyh, "##@@");
          if ($tmp_pos !== false)
          {
              $this->khyh = substr($this->khyh, 0, $tmp_pos);
          }
          $this->clrq = $Busca_temp['clrq']; 
          $tmp_pos = strpos($this->clrq, "##@@");
          if ($tmp_pos !== false)
          {
              $this->clrq = substr($this->clrq, 0, $tmp_pos);
          }
          $this->clrq_2 = $Busca_temp['clrq_input_2']; 
          $this->shzt = $Busca_temp['shzt']; 
          $tmp_pos = strpos($this->shzt, "##@@");
          if ($tmp_pos !== false)
          {
              $this->shzt = substr($this->shzt, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT gsmc, fddbr, zczb, lxr, lxrdh, email, shzt, gsjc, tyshxydm, qylx, gsdz, clrq, jyfw, khyh, yhdz, yhzh, fax, bgdh, bz, id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT gsmc, fddbr, zczb, lxr, lxrdh, email, shzt, gsjc, tyshxydm, qylx, gsdz, clrq, jyfw, khyh, yhdz, yhzh, fax, bgdh, bz, id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->New_label['gsmc'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_gsmc'] . "";
      $this->New_label['fddbr'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_fddbr'] . "";
      $this->New_label['zczb'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_zczb'] . "";
      $this->New_label['lxr'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_lxr'] . "";
      $this->New_label['lxrdh'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_lxrdh'] . "";
      $this->New_label['email'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_email'] . "";
      $this->New_label['shzt'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_shzt'] . "";
      $this->New_label['gsjc'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_gsjc'] . "";
      $this->New_label['tyshxydm'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_tyshxydm'] . "";
      $this->New_label['qylx'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_qylx'] . "";
      $this->New_label['gsdz'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_gsdz'] . "";
      $this->New_label['clrq'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_clrq'] . "";
      $this->New_label['jyfw'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_jyfw'] . "";
      $this->New_label['khyh'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_khyh'] . "";
      $this->New_label['yhdz'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_yhdz'] . "";
      $this->New_label['yhzh'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_yhzh'] . "";
      $this->New_label['fax'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_fax'] . "";
      $this->New_label['bgdh'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_bgdh'] . "";
      $this->New_label['bz'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_bz'] . "";
      $this->New_label['yyzzfile'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_yyzzfile'] . "";
      $this->New_label['shr'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_shr'] . "";
      $this->New_label['shyj'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_shyj'] . "";
      $this->New_label['shsj'] = "" . $this->Ini->Nm_lang['lang_cg_company_fld_shsj'] . "";

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['gsmc'])) ? $this->New_label['gsmc'] : ""; 
          if ($Cada_col == "gsmc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fddbr'])) ? $this->New_label['fddbr'] : ""; 
          if ($Cada_col == "fddbr" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['zczb'])) ? $this->New_label['zczb'] : ""; 
          if ($Cada_col == "zczb" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
          $SC_Label = (isset($this->New_label['lxrdh'])) ? $this->New_label['lxrdh'] : ""; 
          if ($Cada_col == "lxrdh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
          $SC_Label = (isset($this->New_label['shzt'])) ? $this->New_label['shzt'] : ""; 
          if ($Cada_col == "shzt" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['gsjc'])) ? $this->New_label['gsjc'] : ""; 
          if ($Cada_col == "gsjc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['tyshxydm'])) ? $this->New_label['tyshxydm'] : ""; 
          if ($Cada_col == "tyshxydm" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['qylx'])) ? $this->New_label['qylx'] : ""; 
          if ($Cada_col == "qylx" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['gsdz'])) ? $this->New_label['gsdz'] : ""; 
          if ($Cada_col == "gsdz" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['clrq'])) ? $this->New_label['clrq'] : ""; 
          if ($Cada_col == "clrq" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['jyfw'])) ? $this->New_label['jyfw'] : ""; 
          if ($Cada_col == "jyfw" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['khyh'])) ? $this->New_label['khyh'] : ""; 
          if ($Cada_col == "khyh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['yhdz'])) ? $this->New_label['yhdz'] : ""; 
          if ($Cada_col == "yhdz" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
          $SC_Label = (isset($this->New_label['bz'])) ? $this->New_label['bz'] : ""; 
          if ($Cada_col == "bz" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
         $this->gsmc = $rs->fields[0] ;  
         $this->fddbr = $rs->fields[1] ;  
         $this->zczb = $rs->fields[2] ;  
         $this->zczb =  str_replace(",", ".", $this->zczb);
         $this->zczb = (string)$this->zczb;
         $this->lxr = $rs->fields[3] ;  
         $this->lxrdh = $rs->fields[4] ;  
         $this->email = $rs->fields[5] ;  
         $this->shzt = $rs->fields[6] ;  
         $this->gsjc = $rs->fields[7] ;  
         $this->tyshxydm = $rs->fields[8] ;  
         $this->qylx = $rs->fields[9] ;  
         $this->gsdz = $rs->fields[10] ;  
         $this->clrq = $rs->fields[11] ;  
         $this->jyfw = $rs->fields[12] ;  
         $this->khyh = $rs->fields[13] ;  
         $this->yhdz = $rs->fields[14] ;  
         $this->yhzh = $rs->fields[15] ;  
         $this->fax = $rs->fields[16] ;  
         $this->bgdh = $rs->fields[17] ;  
         $this->bz = $rs->fields[18] ;  
         $this->id = $rs->fields[19] ;  
         $this->id = (string)$this->id;
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['field_order'] as $Cada_col)
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
   //----- gsmc
   function NM_export_gsmc()
   {
         $this->gsmc = html_entity_decode($this->gsmc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->gsmc = strip_tags($this->gsmc);
         if (!NM_is_utf8($this->gsmc))
         {
             $this->gsmc = sc_convert_encoding($this->gsmc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->gsmc = str_replace('<', '&lt;', $this->gsmc);
         $this->gsmc = str_replace('>', '&gt;', $this->gsmc);
         $this->Texto_tag .= "<td>" . $this->gsmc . "</td>\r\n";
   }
   //----- fddbr
   function NM_export_fddbr()
   {
         $this->fddbr = html_entity_decode($this->fddbr, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->fddbr = strip_tags($this->fddbr);
         if (!NM_is_utf8($this->fddbr))
         {
             $this->fddbr = sc_convert_encoding($this->fddbr, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fddbr = str_replace('<', '&lt;', $this->fddbr);
         $this->fddbr = str_replace('>', '&gt;', $this->fddbr);
         $this->Texto_tag .= "<td>" . $this->fddbr . "</td>\r\n";
   }
   //----- zczb
   function NM_export_zczb()
   {
         nmgp_Form_Num_Val($this->zczb, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->zczb))
         {
             $this->zczb = sc_convert_encoding($this->zczb, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->zczb = str_replace('<', '&lt;', $this->zczb);
         $this->zczb = str_replace('>', '&gt;', $this->zczb);
         $this->Texto_tag .= "<td>" . $this->zczb . "</td>\r\n";
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
   //----- lxrdh
   function NM_export_lxrdh()
   {
         $this->lxrdh = html_entity_decode($this->lxrdh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->lxrdh = strip_tags($this->lxrdh);
         if (!NM_is_utf8($this->lxrdh))
         {
             $this->lxrdh = sc_convert_encoding($this->lxrdh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->lxrdh = str_replace('<', '&lt;', $this->lxrdh);
         $this->lxrdh = str_replace('>', '&gt;', $this->lxrdh);
         $this->Texto_tag .= "<td>" . $this->lxrdh . "</td>\r\n";
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
   //----- shzt
   function NM_export_shzt()
   {
         $this->shzt = html_entity_decode($this->shzt, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->shzt = strip_tags($this->shzt);
         if (!NM_is_utf8($this->shzt))
         {
             $this->shzt = sc_convert_encoding($this->shzt, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->shzt = str_replace('<', '&lt;', $this->shzt);
         $this->shzt = str_replace('>', '&gt;', $this->shzt);
         $this->Texto_tag .= "<td>" . $this->shzt . "</td>\r\n";
   }
   //----- gsjc
   function NM_export_gsjc()
   {
         $this->gsjc = html_entity_decode($this->gsjc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->gsjc = strip_tags($this->gsjc);
         if (!NM_is_utf8($this->gsjc))
         {
             $this->gsjc = sc_convert_encoding($this->gsjc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->gsjc = str_replace('<', '&lt;', $this->gsjc);
         $this->gsjc = str_replace('>', '&gt;', $this->gsjc);
         $this->Texto_tag .= "<td>" . $this->gsjc . "</td>\r\n";
   }
   //----- tyshxydm
   function NM_export_tyshxydm()
   {
         $this->tyshxydm = html_entity_decode($this->tyshxydm, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->tyshxydm = strip_tags($this->tyshxydm);
         if (!NM_is_utf8($this->tyshxydm))
         {
             $this->tyshxydm = sc_convert_encoding($this->tyshxydm, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->tyshxydm = str_replace('<', '&lt;', $this->tyshxydm);
         $this->tyshxydm = str_replace('>', '&gt;', $this->tyshxydm);
         $this->Texto_tag .= "<td>" . $this->tyshxydm . "</td>\r\n";
   }
   //----- qylx
   function NM_export_qylx()
   {
         $this->qylx = html_entity_decode($this->qylx, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->qylx = strip_tags($this->qylx);
         if (!NM_is_utf8($this->qylx))
         {
             $this->qylx = sc_convert_encoding($this->qylx, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->qylx = str_replace('<', '&lt;', $this->qylx);
         $this->qylx = str_replace('>', '&gt;', $this->qylx);
         $this->Texto_tag .= "<td>" . $this->qylx . "</td>\r\n";
   }
   //----- gsdz
   function NM_export_gsdz()
   {
         $this->gsdz = html_entity_decode($this->gsdz, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->gsdz = strip_tags($this->gsdz);
         if (!NM_is_utf8($this->gsdz))
         {
             $this->gsdz = sc_convert_encoding($this->gsdz, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->gsdz = str_replace('<', '&lt;', $this->gsdz);
         $this->gsdz = str_replace('>', '&gt;', $this->gsdz);
         $this->Texto_tag .= "<td>" . $this->gsdz . "</td>\r\n";
   }
   //----- clrq
   function NM_export_clrq()
   {
         $conteudo_x = $this->clrq;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->clrq, "YYYY-MM-DD");
             $this->clrq = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->clrq))
         {
             $this->clrq = sc_convert_encoding($this->clrq, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->clrq = str_replace('<', '&lt;', $this->clrq);
         $this->clrq = str_replace('>', '&gt;', $this->clrq);
         $this->Texto_tag .= "<td>" . $this->clrq . "</td>\r\n";
   }
   //----- jyfw
   function NM_export_jyfw()
   {
         $this->jyfw = html_entity_decode($this->jyfw, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->jyfw = strip_tags($this->jyfw);
         if (!NM_is_utf8($this->jyfw))
         {
             $this->jyfw = sc_convert_encoding($this->jyfw, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->jyfw = str_replace('<', '&lt;', $this->jyfw);
         $this->jyfw = str_replace('>', '&gt;', $this->jyfw);
         $this->Texto_tag .= "<td>" . $this->jyfw . "</td>\r\n";
   }
   //----- khyh
   function NM_export_khyh()
   {
         $this->khyh = html_entity_decode($this->khyh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->khyh = strip_tags($this->khyh);
         if (!NM_is_utf8($this->khyh))
         {
             $this->khyh = sc_convert_encoding($this->khyh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->khyh = str_replace('<', '&lt;', $this->khyh);
         $this->khyh = str_replace('>', '&gt;', $this->khyh);
         $this->Texto_tag .= "<td>" . $this->khyh . "</td>\r\n";
   }
   //----- yhdz
   function NM_export_yhdz()
   {
         $this->yhdz = html_entity_decode($this->yhdz, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->yhdz = strip_tags($this->yhdz);
         if (!NM_is_utf8($this->yhdz))
         {
             $this->yhdz = sc_convert_encoding($this->yhdz, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->yhdz = str_replace('<', '&lt;', $this->yhdz);
         $this->yhdz = str_replace('>', '&gt;', $this->yhdz);
         $this->Texto_tag .= "<td>" . $this->yhdz . "</td>\r\n";
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
   //----- bz
   function NM_export_bz()
   {
         $this->bz = html_entity_decode($this->bz, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->bz = strip_tags($this->bz);
         if (!NM_is_utf8($this->bz))
         {
             $this->bz = sc_convert_encoding($this->bz, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->bz = str_replace('<', '&lt;', $this->bz);
         $this->bz = str_replace('>', '&gt;', $this->bz);
         $this->Texto_tag .= "<td>" . $this->bz . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_company'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - <?php echo $this->Ini->Nm_lang['lang_tbl_cg_company'] ?> :: RTF</TITLE>
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
<form name="Fdown" method="get" action="grid_cg_company_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_cg_company"> 
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
