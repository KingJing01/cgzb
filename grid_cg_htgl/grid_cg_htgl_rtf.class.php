<?php

class grid_cg_htgl_rtf
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
   function grid_cg_htgl_rtf()
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
      $this->Arquivo   .= "_grid_cg_htgl";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_cg_htgl.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_htgl']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_htgl']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_cg_htgl']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->htbh = $Busca_temp['htbh']; 
          $tmp_pos = strpos($this->htbh, "##@@");
          if ($tmp_pos !== false)
          {
              $this->htbh = substr($this->htbh, 0, $tmp_pos);
          }
          $this->htmc = $Busca_temp['htmc']; 
          $tmp_pos = strpos($this->htmc, "##@@");
          if ($tmp_pos !== false)
          {
              $this->htmc = substr($this->htmc, 0, $tmp_pos);
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
          $this->cgybh = $Busca_temp['cgybh']; 
          $tmp_pos = strpos($this->cgybh, "##@@");
          if ($tmp_pos !== false)
          {
              $this->cgybh = substr($this->cgybh, 0, $tmp_pos);
          }
          $this->cgyxm = $Busca_temp['cgyxm']; 
          $tmp_pos = strpos($this->cgyxm, "##@@");
          if ($tmp_pos !== false)
          {
              $this->cgyxm = substr($this->cgyxm, 0, $tmp_pos);
          }
          $this->qydw = $Busca_temp['qydw']; 
          $tmp_pos = strpos($this->qydw, "##@@");
          if ($tmp_pos !== false)
          {
              $this->qydw = substr($this->qydw, 0, $tmp_pos);
          }
          $this->qdrq = $Busca_temp['qdrq']; 
          $tmp_pos = strpos($this->qdrq, "##@@");
          if ($tmp_pos !== false)
          {
              $this->qdrq = substr($this->qdrq, 0, $tmp_pos);
          }
          $this->qdrq_2 = $Busca_temp['qdrq_input_2']; 
          $this->shzt = $Busca_temp['shzt']; 
          $tmp_pos = strpos($this->shzt, "##@@");
          if ($tmp_pos !== false)
          {
              $this->shzt = substr($this->shzt, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->Sub_Consultas[] = "splcxx";
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT htbh, htmc, qdrq, qydw, htje, shzt, cgbbh, cgbmc, cgybh, cgyxm, cgylxdh, cgfs, htlx, qydwlxr, qydwlxrdh, zbj, zbdqrq, id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT htbh, htmc, qdrq, qydw, htje, shzt, cgbbh, cgbmc, cgybh, cgyxm, cgylxdh, cgfs, htlx, qydwlxr, qydwlxrdh, zbj, zbdqrq, id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->New_label['htbh'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_htbh'] . "";
      $this->New_label['htmc'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_htmc'] . "";
      $this->New_label['qdrq'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_qdrq'] . "";
      $this->New_label['qydw'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_qydw'] . "";
      $this->New_label['htje'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_htje'] . "";
      $this->New_label['shzt'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_shzt'] . "";
      $this->New_label['cgbbh'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_cgbbh'] . "";
      $this->New_label['cgbmc'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_cgbmc'] . "";
      $this->New_label['cgybh'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_cgybh'] . "";
      $this->New_label['cgyxm'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_cgyxm'] . "";
      $this->New_label['cgylxdh'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_cgylxdh'] . "";
      $this->New_label['cgfs'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_cgfs'] . "";
      $this->New_label['htlx'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_htlx'] . "";
      $this->New_label['qydwlxr'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_qydwlxr'] . "";
      $this->New_label['qydwlxrdh'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_qydwlxrdh'] . "";
      $this->New_label['zbj'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_zbj'] . "";
      $this->New_label['zbdqrq'] = "" . $this->Ini->Nm_lang['lang_cg_htgl_fld_zbdqrq'] . "";

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['htbh'])) ? $this->New_label['htbh'] : ""; 
          if ($Cada_col == "htbh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['htmc'])) ? $this->New_label['htmc'] : ""; 
          if ($Cada_col == "htmc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['qdrq'])) ? $this->New_label['qdrq'] : ""; 
          if ($Cada_col == "qdrq" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['qydw'])) ? $this->New_label['qydw'] : ""; 
          if ($Cada_col == "qydw" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['htje'])) ? $this->New_label['htje'] : ""; 
          if ($Cada_col == "htje" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
          $SC_Label = (isset($this->New_label['splc'])) ? $this->New_label['splc'] : "操作"; 
          if ($Cada_col == "splc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
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
          $SC_Label = (isset($this->New_label['cgybh'])) ? $this->New_label['cgybh'] : ""; 
          if ($Cada_col == "cgybh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cgyxm'])) ? $this->New_label['cgyxm'] : ""; 
          if ($Cada_col == "cgyxm" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cgylxdh'])) ? $this->New_label['cgylxdh'] : ""; 
          if ($Cada_col == "cgylxdh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
          $SC_Label = (isset($this->New_label['htlx'])) ? $this->New_label['htlx'] : ""; 
          if ($Cada_col == "htlx" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['qydwlxr'])) ? $this->New_label['qydwlxr'] : ""; 
          if ($Cada_col == "qydwlxr" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['qydwlxrdh'])) ? $this->New_label['qydwlxrdh'] : ""; 
          if ($Cada_col == "qydwlxrdh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['zbj'])) ? $this->New_label['zbj'] : ""; 
          if ($Cada_col == "zbj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['zbdqrq'])) ? $this->New_label['zbdqrq'] : ""; 
          if ($Cada_col == "zbdqrq" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
         $this->htbh = $rs->fields[0] ;  
         $this->htmc = $rs->fields[1] ;  
         $this->qdrq = $rs->fields[2] ;  
         $this->qydw = $rs->fields[3] ;  
         $this->htje = $rs->fields[4] ;  
         $this->htje =  str_replace(",", ".", $this->htje);
         $this->htje = (string)$this->htje;
         $this->shzt = $rs->fields[5] ;  
         $this->cgbbh = $rs->fields[6] ;  
         $this->cgbmc = $rs->fields[7] ;  
         $this->cgybh = $rs->fields[8] ;  
         $this->cgyxm = $rs->fields[9] ;  
         $this->cgylxdh = $rs->fields[10] ;  
         $this->cgfs = $rs->fields[11] ;  
         $this->htlx = $rs->fields[12] ;  
         $this->qydwlxr = $rs->fields[13] ;  
         $this->qydwlxrdh = $rs->fields[14] ;  
         $this->zbj = $rs->fields[15] ;  
         $this->zbj =  str_replace(",", ".", $this->zbj);
         $this->zbj = (string)$this->zbj;
         $this->zbdqrq = $rs->fields[16] ;  
         $this->id = $rs->fields[17] ;  
         $this->id = (string)$this->id;
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_cg_htgl']['contr_erro'] = 'on';
if (!isset($_SESSION['usr_priv_admin'])) {$_SESSION['usr_priv_admin'] = "";}
if (!isset($this->sc_temp_usr_priv_admin)) {$this->sc_temp_usr_priv_admin = (isset($_SESSION['usr_priv_admin'])) ? $_SESSION['usr_priv_admin'] : "";}
if (!isset($_SESSION['usr_login'])) {$_SESSION['usr_login'] = "";}
if (!isset($this->sc_temp_usr_login)) {$this->sc_temp_usr_login = (isset($_SESSION['usr_login'])) ? $_SESSION['usr_login'] : "";}
if (!isset($_SESSION['v_shlc'])) {$_SESSION['v_shlc'] = "";}
if (!isset($this->sc_temp_v_shlc)) {$this->sc_temp_v_shlc = (isset($_SESSION['v_shlc'])) ? $_SESSION['v_shlc'] : "";}
  $this->splc ='';
 $bzmc='';
if(($this->shzt !='通过')&&($this->shzt !='未通过'))
{

	
 	$str_sql = " select  bzmc,ms,isqs,isjs,yhlx,bmlx,isgdyh,gdyh  from cg_shbz where lcbh='".$this->sc_temp_v_shlc."' 
and  not exists(select s.id from  cg_sjshlc s where s.sjbh='".$this->id ."' and s.shlc='".$this->sc_temp_v_shlc."' and s.shbz=cg_shbz.bzmc)
and  not exists(select s.id from  cg_sjshlc s where s.sjbh='".$this->id ."' and s.shlc='".$this->sc_temp_v_shlc."' and  s.shzt='不通过')
order by listorder limit 1 ";
	 
      $nm_select = $str_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
	if(!empty($this->rs )){
		$bzmc = $this->rs[0][0];
		$ms = $this->rs[0][1];
	    $isqs = $this->rs[0][2];
		$isjs = $this->rs[0][3];
	    $yhlx = $this->rs[0][4];
	    $bmlx = $this->rs[0][5];
		$isgdyh = $this->rs[0][6];
		$gdyh = $this->rs[0][7];
		if($isgdyh=='是'){
			  if(!empty($gdyh)&&($gdyh==$this->sc_temp_usr_login))
			  {
				     $this->splc =$bzmc;
			  }
		   	
			
		}
		else {
		   $bm='';
		  if(!empty($bmlx)&&($bmlx=='本部门'))
		  {
			  $bm="项目采购部门";  
	      }else {			  
			  $bm= $bmlx;
		  }
		       
			
		  if(!empty($bm))
		  {
				 	$sql = "select id from cg_staff where bm='".$bm."' and zw='".$yhlx."' and kyzt='是' and ygbh='".$this->sc_temp_usr_login."'";
					  
      $nm_select = $sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
				     if(!empty($this->rs )){
							if(!empty($this->rs[0][0])){
								 $this->splc =$bzmc;
							}
					 }
		  } 

				
				
		}
		
		
			   if($this->sc_temp_usr_priv_admin){
			     $this->splc =$bzmc;
			   }
	  
	}
}else {
	$this->splc ='';
}
if (isset($this->sc_temp_v_shlc)) {$_SESSION['v_shlc'] = $this->sc_temp_v_shlc;}
if (isset($this->sc_temp_usr_login)) {$_SESSION['usr_login'] = $this->sc_temp_usr_login;}
if (isset($this->sc_temp_usr_priv_admin)) {$_SESSION['usr_priv_admin'] = $this->sc_temp_usr_priv_admin;}
$_SESSION['scriptcase']['grid_cg_htgl']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['field_order'] as $Cada_col)
         { 
            if ((!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off") && !in_array($Cada_col, $this->Sub_Consultas))
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
   //----- htbh
   function NM_export_htbh()
   {
         $this->htbh = html_entity_decode($this->htbh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->htbh = strip_tags($this->htbh);
         if (!NM_is_utf8($this->htbh))
         {
             $this->htbh = sc_convert_encoding($this->htbh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->htbh = str_replace('<', '&lt;', $this->htbh);
         $this->htbh = str_replace('>', '&gt;', $this->htbh);
         $this->Texto_tag .= "<td>" . $this->htbh . "</td>\r\n";
   }
   //----- htmc
   function NM_export_htmc()
   {
         $this->htmc = html_entity_decode($this->htmc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->htmc = strip_tags($this->htmc);
         if (!NM_is_utf8($this->htmc))
         {
             $this->htmc = sc_convert_encoding($this->htmc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->htmc = str_replace('<', '&lt;', $this->htmc);
         $this->htmc = str_replace('>', '&gt;', $this->htmc);
         $this->Texto_tag .= "<td>" . $this->htmc . "</td>\r\n";
   }
   //----- qdrq
   function NM_export_qdrq()
   {
         $conteudo_x = $this->qdrq;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->qdrq, "YYYY-MM-DD");
             $this->qdrq = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->qdrq))
         {
             $this->qdrq = sc_convert_encoding($this->qdrq, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->qdrq = str_replace('<', '&lt;', $this->qdrq);
         $this->qdrq = str_replace('>', '&gt;', $this->qdrq);
         $this->Texto_tag .= "<td>" . $this->qdrq . "</td>\r\n";
   }
   //----- qydw
   function NM_export_qydw()
   {
         $this->qydw = html_entity_decode($this->qydw, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->qydw = strip_tags($this->qydw);
         if (!NM_is_utf8($this->qydw))
         {
             $this->qydw = sc_convert_encoding($this->qydw, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->qydw = str_replace('<', '&lt;', $this->qydw);
         $this->qydw = str_replace('>', '&gt;', $this->qydw);
         $this->Texto_tag .= "<td>" . $this->qydw . "</td>\r\n";
   }
   //----- htje
   function NM_export_htje()
   {
         nmgp_Form_Num_Val($this->htje, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->htje))
         {
             $this->htje = sc_convert_encoding($this->htje, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->htje = str_replace('<', '&lt;', $this->htje);
         $this->htje = str_replace('>', '&gt;', $this->htje);
         $this->Texto_tag .= "<td>" . $this->htje . "</td>\r\n";
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
   //----- splc
   function NM_export_splc()
   {
         $this->splc = html_entity_decode($this->splc, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->splc = strip_tags($this->splc);
         if (!NM_is_utf8($this->splc))
         {
             $this->splc = sc_convert_encoding($this->splc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->splc = str_replace('<', '&lt;', $this->splc);
         $this->splc = str_replace('>', '&gt;', $this->splc);
         $this->Texto_tag .= "<td>" . $this->splc . "</td>\r\n";
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
   //----- cgybh
   function NM_export_cgybh()
   {
         $this->cgybh = html_entity_decode($this->cgybh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cgybh = strip_tags($this->cgybh);
         if (!NM_is_utf8($this->cgybh))
         {
             $this->cgybh = sc_convert_encoding($this->cgybh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cgybh = str_replace('<', '&lt;', $this->cgybh);
         $this->cgybh = str_replace('>', '&gt;', $this->cgybh);
         $this->Texto_tag .= "<td>" . $this->cgybh . "</td>\r\n";
   }
   //----- cgyxm
   function NM_export_cgyxm()
   {
         $this->cgyxm = html_entity_decode($this->cgyxm, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cgyxm = strip_tags($this->cgyxm);
         if (!NM_is_utf8($this->cgyxm))
         {
             $this->cgyxm = sc_convert_encoding($this->cgyxm, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cgyxm = str_replace('<', '&lt;', $this->cgyxm);
         $this->cgyxm = str_replace('>', '&gt;', $this->cgyxm);
         $this->Texto_tag .= "<td>" . $this->cgyxm . "</td>\r\n";
   }
   //----- cgylxdh
   function NM_export_cgylxdh()
   {
         $this->cgylxdh = html_entity_decode($this->cgylxdh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cgylxdh = strip_tags($this->cgylxdh);
         if (!NM_is_utf8($this->cgylxdh))
         {
             $this->cgylxdh = sc_convert_encoding($this->cgylxdh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cgylxdh = str_replace('<', '&lt;', $this->cgylxdh);
         $this->cgylxdh = str_replace('>', '&gt;', $this->cgylxdh);
         $this->Texto_tag .= "<td>" . $this->cgylxdh . "</td>\r\n";
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
   //----- htlx
   function NM_export_htlx()
   {
         $this->htlx = html_entity_decode($this->htlx, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->htlx = strip_tags($this->htlx);
         if (!NM_is_utf8($this->htlx))
         {
             $this->htlx = sc_convert_encoding($this->htlx, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->htlx = str_replace('<', '&lt;', $this->htlx);
         $this->htlx = str_replace('>', '&gt;', $this->htlx);
         $this->Texto_tag .= "<td>" . $this->htlx . "</td>\r\n";
   }
   //----- qydwlxr
   function NM_export_qydwlxr()
   {
         $this->qydwlxr = html_entity_decode($this->qydwlxr, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->qydwlxr = strip_tags($this->qydwlxr);
         if (!NM_is_utf8($this->qydwlxr))
         {
             $this->qydwlxr = sc_convert_encoding($this->qydwlxr, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->qydwlxr = str_replace('<', '&lt;', $this->qydwlxr);
         $this->qydwlxr = str_replace('>', '&gt;', $this->qydwlxr);
         $this->Texto_tag .= "<td>" . $this->qydwlxr . "</td>\r\n";
   }
   //----- qydwlxrdh
   function NM_export_qydwlxrdh()
   {
         $this->qydwlxrdh = html_entity_decode($this->qydwlxrdh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->qydwlxrdh = strip_tags($this->qydwlxrdh);
         if (!NM_is_utf8($this->qydwlxrdh))
         {
             $this->qydwlxrdh = sc_convert_encoding($this->qydwlxrdh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->qydwlxrdh = str_replace('<', '&lt;', $this->qydwlxrdh);
         $this->qydwlxrdh = str_replace('>', '&gt;', $this->qydwlxrdh);
         $this->Texto_tag .= "<td>" . $this->qydwlxrdh . "</td>\r\n";
   }
   //----- zbj
   function NM_export_zbj()
   {
         nmgp_Form_Num_Val($this->zbj, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         if (!NM_is_utf8($this->zbj))
         {
             $this->zbj = sc_convert_encoding($this->zbj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->zbj = str_replace('<', '&lt;', $this->zbj);
         $this->zbj = str_replace('>', '&gt;', $this->zbj);
         $this->Texto_tag .= "<td>" . $this->zbj . "</td>\r\n";
   }
   //----- zbdqrq
   function NM_export_zbdqrq()
   {
         $conteudo_x = $this->zbdqrq;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->zbdqrq, "YYYY-MM-DD");
             $this->zbdqrq = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->zbdqrq))
         {
             $this->zbdqrq = sc_convert_encoding($this->zbdqrq, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->zbdqrq = str_replace('<', '&lt;', $this->zbdqrq);
         $this->zbdqrq = str_replace('>', '&gt;', $this->zbdqrq);
         $this->Texto_tag .= "<td>" . $this->zbdqrq . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cg_htgl'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - <?php echo $this->Ini->Nm_lang['lang_tbl_cg_htgl'] ?> :: RTF</TITLE>
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
<form name="Fdown" method="get" action="grid_cg_htgl_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_cg_htgl"> 
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
