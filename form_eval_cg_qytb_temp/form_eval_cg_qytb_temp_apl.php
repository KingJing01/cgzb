<?php
//
class form_eval_cg_qytb_temp_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'navPage'        => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id_;
   var $tbbh_;
   var $zbggbh_;
   var $cgbbh_;
   var $cgbmc_;
   var $qylogin_;
   var $lxr_;
   var $qymc_;
   var $bj_;
   var $jsfile_;
   var $swfile_;
   var $qtfile_;
   var $tjsj_;
   var $tjsj__hora;
   var $isflag_;
   var $isflag__1;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_max_reg = 10; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_eval_cg_qytb_temp = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['bj_']))
          {
              $this->bj_ = $this->NM_ajax_info['param']['bj_'];
          }
          if (isset($this->NM_ajax_info['param']['cgbbh_']))
          {
              $this->cgbbh_ = $this->NM_ajax_info['param']['cgbbh_'];
          }
          if (isset($this->NM_ajax_info['param']['cgbmc_']))
          {
              $this->cgbmc_ = $this->NM_ajax_info['param']['cgbmc_'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['id_']))
          {
              $this->id_ = $this->NM_ajax_info['param']['id_'];
          }
          if (isset($this->NM_ajax_info['param']['isflag_']))
          {
              $this->isflag_ = $this->NM_ajax_info['param']['isflag_'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['qymc_']))
          {
              $this->qymc_ = $this->NM_ajax_info['param']['qymc_'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['tjsj_']))
          {
              $this->tjsj_ = $this->NM_ajax_info['param']['tjsj_'];
          }
          if (isset($this->NM_ajax_info['param']['zbggbh_']))
          {
              $this->zbggbh_ = $this->NM_ajax_info['param']['zbggbh_'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      $this->sc_conv_var['id'] = "id_";
      $this->sc_conv_var['tbbh'] = "tbbh_";
      $this->sc_conv_var['zbggbh'] = "zbggbh_";
      $this->sc_conv_var['cgbbh'] = "cgbbh_";
      $this->sc_conv_var['cgbmc'] = "cgbmc_";
      $this->sc_conv_var['qylogin'] = "qylogin_";
      $this->sc_conv_var['lxr'] = "lxr_";
      $this->sc_conv_var['qymc'] = "qymc_";
      $this->sc_conv_var['bj'] = "bj_";
      $this->sc_conv_var['jsfile'] = "jsfile_";
      $this->sc_conv_var['swfile'] = "swfile_";
      $this->sc_conv_var['qtfile'] = "qtfile_";
      $this->sc_conv_var['tjsj'] = "tjsj_";
      $this->sc_conv_var['isflag'] = "isflag_";
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->v_cpbmc) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_cpbmc'] = $this->v_cpbmc;
      }
      if (isset($this->cpbbh) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['cpbbh'] = $this->cpbbh;
      }
      if (isset($this->v_cpbh) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_cpbh'] = $this->v_cpbh;
      }
      if (isset($_POST["v_cpbmc"])) 
      {
          $_SESSION['v_cpbmc'] = $this->v_cpbmc;
      }
      if (isset($_POST["cpbbh"])) 
      {
          $_SESSION['cpbbh'] = $this->cpbbh;
      }
      if (isset($_POST["v_cpbh"])) 
      {
          $_SESSION['v_cpbh'] = $this->v_cpbh;
      }
      if (isset($_GET["v_cpbmc"])) 
      {
          $_SESSION['v_cpbmc'] = $this->v_cpbmc;
      }
      if (isset($_GET["cpbbh"])) 
      {
          $_SESSION['cpbbh'] = $this->cpbbh;
      }
      if (isset($_GET["v_cpbh"])) 
      {
          $_SESSION['v_cpbh'] = $this->v_cpbh;
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_eval_cg_qytb_temp($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
                 if ($cadapar[0] == "id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "id = " . $this->id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
             }
             $ix++;
          }
          if (isset($this->v_cpbmc)) 
          {
              $_SESSION['v_cpbmc'] = $this->v_cpbmc;
          }
          if (isset($this->cpbbh)) 
          {
              $_SESSION['cpbbh'] = $this->cpbbh;
          }
          if (isset($this->v_cpbh)) 
          {
              $_SESSION['v_cpbh'] = $this->v_cpbh;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          elseif (empty($this->NM_where_filter))
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->v_cpbmc)) 
          {
              $_SESSION['v_cpbmc'] = $this->v_cpbmc;
          }
          if (isset($this->cpbbh)) 
          {
              $_SESSION['cpbbh'] = $this->cpbbh;
          }
          if (isset($this->v_cpbh)) 
          {
              $_SESSION['v_cpbh'] = $this->v_cpbh;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->tjsj_);
          $this->tjsj_      = $aDtParts[0];
          $this->tjsj__hora = $aDtParts[1];
          for ($ix = 1; $ix <= $GLOBALS["sc_contr_vert"]; $ix++)
          {
              $aDtParts = explode(' ', $GLOBALS["tjsj_" . $ix]);
              $GLOBALS["tjsj_" . $ix]      = $aDtParts[0];
              $GLOBALS["tjsj__hora" . $ix] = $aDtParts[1];
          }
      }
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_eval_cg_qytb_temp_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("zh_cn");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['initialize'];
          $this->Db = $this->Ini->Db; 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['initialize']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['initialize'])
          {
              $_SESSION['scriptcase']['form_eval_cg_qytb_temp']['contr_erro'] = 'on';
if (!isset($this->sc_temp_v_cpbh)) {$this->sc_temp_v_cpbh = (isset($_SESSION['v_cpbh'])) ? $_SESSION['v_cpbh'] : "";}
if (!isset($this->sc_temp_v_cpbmc)) {$this->sc_temp_v_cpbmc = (isset($_SESSION['v_cpbmc'])) ? $_SESSION['v_cpbmc'] : "";}
if (!isset($this->sc_temp_cpbbh)) {$this->sc_temp_cpbbh = (isset($_SESSION['cpbbh'])) ? $_SESSION['cpbbh'] : "";}
 $str_sql = "SELECT mc FROM eval_cpb WHERE id = ".$this->sc_temp_cpbbh;
 
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
  $this->sc_temp_v_cpbmc = $this->rs [0][0];
 $this->sc_temp_v_cpbh = $this->sc_temp_cpbbh;
}
if (isset($this->sc_temp_cpbbh)) { $_SESSION['cpbbh'] = $this->sc_temp_cpbbh;}
if (isset($this->sc_temp_v_cpbmc)) { $_SESSION['v_cpbmc'] = $this->sc_temp_v_cpbmc;}
if (isset($this->sc_temp_v_cpbh)) { $_SESSION['v_cpbh'] = $this->sc_temp_v_cpbh;}
$_SESSION['scriptcase']['form_eval_cg_qytb_temp']['contr_erro'] = 'off';
          }
          $this->Ini->init2();
      } 
      else 
      { 
         $this->nm_data = new nm_data("zh_cn");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_eval_cg_qytb_temp']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_eval_cg_qytb_temp']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_eval_cg_qytb_temp'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_eval_cg_qytb_temp']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_eval_cg_qytb_temp']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_eval_cg_qytb_temp') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_eval_cg_qytb_temp']['label'] = "选择投标企业发起评标";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_eval_cg_qytb_temp")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->nm_new_label['zbggbh_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_zbggbh'] . '';
      $this->nm_new_label['cgbbh_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbbh'] . '';
      $this->nm_new_label['cgbmc_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbmc'] . '';
      $this->nm_new_label['qymc_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qymc'] . '';
      $this->nm_new_label['bj_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_bj'] . '';
      $this->nm_new_label['tjsj_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tjsj'] . '';
      $this->nm_new_label['isflag_'] = '' . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_isflag'] . '';

      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status      = "scFormInputErrorMult";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);


      $this->arr_buttons['sc_btn_0']['hint']             = "保存后下一步";
      $this->arr_buttons['sc_btn_0']['type']             = "button";
      $this->arr_buttons['sc_btn_0']['value']            = "下一步";
      $this->arr_buttons['sc_btn_0']['display']          = "only_text";
      $this->arr_buttons['sc_btn_0']['display_position'] = "text_right";
      $this->arr_buttons['sc_btn_0']['style']            = "default";
      $this->arr_buttons['sc_btn_0']['image']            = "";


      $_SESSION['scriptcase']['error_icon']['form_eval_cg_qytb_temp']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_eval_cg_qytb_temp'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
          $this->nmgp_botoes['summary'] = "on";
      }
      else
      {
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "on";
      }
      $this->nmgp_botoes['sc_btn_0'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_eval_cg_qytb_temp']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['exit'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_eval_cg_qytb_temp", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_eval_cg_qytb_temp/form_eval_cg_qytb_temp_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_eval_cg_qytb_temp_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_eval_cg_qytb_temp_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_eval_cg_qytb_temp_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_eval_cg_qytb_temp/form_eval_cg_qytb_temp_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_eval_cg_qytb_temp_erro.class.php"); 
      }
      $this->Erro      = new form_eval_cg_qytb_temp_erro();
      $this->Erro->Ini = $this->Ini;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg']) && strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg']) == "all")
      {
          $this->form_paginacao = "total";
      }
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao']))
         { 
             if ($this->id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['sc_btn_0'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['sc_btn_0'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['botoes']['sc_btn_0'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- zbggbh_
      $this->field_config['zbggbh_']               = array();
      $this->field_config['zbggbh_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['zbggbh_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['zbggbh_']['symbol_dec'] = '';
      $this->field_config['zbggbh_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['zbggbh_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- bj_
      $this->field_config['bj_']               = array();
      $this->field_config['bj_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['bj_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['bj_']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['bj_']['symbol_mon'] = '';
      $this->field_config['bj_']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['bj_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- tjsj_
      $this->field_config['tjsj_']                 = array();
      $this->field_config['tjsj_']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['tjsj_']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['tjsj_']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['tjsj_']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DH', 'tjsj_');
      //-- id_
      $this->field_config['id_']               = array();
      $this->field_config['id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_']['symbol_dec'] = '';
      $this->field_config['id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- tbbh_
      $this->field_config['tbbh_']               = array();
      $this->field_config['tbbh_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['tbbh_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['tbbh_']['symbol_dec'] = '';
      $this->field_config['tbbh_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['tbbh_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['Gera_log_access'] = false;
      }
      if ($this->nmgp_opcao == "change_qtd_line")
      {
          $this->NM_btn_navega = "N";
          if (strtolower($this->nmgp_max_line) == "all")
          {
              $this->nmgp_opcao = "inicio";
              $this->form_paginacao = "total";
          }
          else
          {
              $this->nmgp_opcao = "igual";
              $this->form_paginacao = "parcial";
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg'] = $this->nmgp_max_line;
      }
      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opc_edit'] = true;  
      $this->SC_log_arr_vert = array();
      $sc_contr_vert = $GLOBALS["sc_contr_vert"];
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = NM_utf8_urldecode($this->New_Line);
         $this->NM_close_db();
         form_eval_cg_qytb_temp_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_converte_datas();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_eval_cg_qytb_temp_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->zbggbh_)) { $this->nm_limpa_alfa($this->zbggbh_); }
         if (isset($this->cgbbh_)) { $this->nm_limpa_alfa($this->cgbbh_); }
         if (isset($this->cgbmc_)) { $this->nm_limpa_alfa($this->cgbmc_); }
         if (isset($this->qymc_)) { $this->nm_limpa_alfa($this->qymc_); }
         if (isset($this->bj_)) { $this->nm_limpa_alfa($this->bj_); }
         if (isset($this->isflag_)) { $this->nm_limpa_alfa($this->isflag_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'][$sc_seq_vert];
             $this->id_ = $this->nmgp_dados_form['id_']; 
             $this->tbbh_ = $this->nmgp_dados_form['tbbh_']; 
             $this->qylogin_ = $this->nmgp_dados_form['qylogin_']; 
             $this->lxr_ = $this->nmgp_dados_form['lxr_']; 
             $this->jsfile_ = $this->nmgp_dados_form['jsfile_']; 
             $this->swfile_ = $this->nmgp_dados_form['swfile_']; 
             $this->qtfile_ = $this->nmgp_dados_form['qtfile_']; 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp']) || !is_array($this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp'][] = $this->Campos_Mens_erro;
                  }
              }
         }
         else
         {
             if ($this->SC_log_atv)
             {
                 $this->SC_log_arr_vert[] = $this->SC_log_arr;
                 $this->SC_log_atv = false;
             }
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
         }
         $this->NM_close_db();
         form_eval_cg_qytb_temp_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_zbggbh_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'zbggbh_');
          }
          if ('validate_cgbbh_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cgbbh_');
          }
          if ('validate_cgbmc_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cgbmc_');
          }
          if ('validate_qymc_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qymc_');
          }
          if ('validate_bj_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bj_');
          }
          if ('validate_tjsj_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tjsj_');
          }
          if ('validate_isflag_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'isflag_');
          }
          form_eval_cg_qytb_temp_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->zbggbh_ = $GLOBALS["zbggbh_" . $sc_seq_vert]; 
         $this->cgbbh_ = $GLOBALS["cgbbh_" . $sc_seq_vert]; 
         $this->cgbmc_ = $GLOBALS["cgbmc_" . $sc_seq_vert]; 
         $this->qymc_ = $GLOBALS["qymc_" . $sc_seq_vert]; 
         $this->bj_ = $GLOBALS["bj_" . $sc_seq_vert]; 
         $this->tjsj_ = $GLOBALS["tjsj_" . $sc_seq_vert]; 
         $this->tjsj__hora = $GLOBALS["tjsj__hora" . $sc_seq_vert]; 
         $this->isflag_ = $GLOBALS["isflag_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'][$sc_seq_vert];
             $this->id_ = $this->nmgp_dados_form['id_']; 
             $this->tbbh_ = $this->nmgp_dados_form['tbbh_']; 
             $this->qylogin_ = $this->nmgp_dados_form['qylogin_']; 
             $this->lxr_ = $this->nmgp_dados_form['lxr_']; 
             $this->jsfile_ = $this->nmgp_dados_form['jsfile_']; 
             $this->swfile_ = $this->nmgp_dados_form['swfile_']; 
             $this->qtfile_ = $this->nmgp_dados_form['qtfile_']; 
         }
         if (isset($this->zbggbh_)) { $this->nm_limpa_alfa($this->zbggbh_); }
         if (isset($this->cgbbh_)) { $this->nm_limpa_alfa($this->cgbbh_); }
         if (isset($this->cgbmc_)) { $this->nm_limpa_alfa($this->cgbmc_); }
         if (isset($this->qymc_)) { $this->nm_limpa_alfa($this->qymc_); }
         if (isset($this->bj_)) { $this->nm_limpa_alfa($this->bj_); }
         if (isset($this->isflag_)) { $this->nm_limpa_alfa($this->isflag_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && (!in_array($sc_seq_vert, $sc_check_excl) && !in_array($sc_seq_vert, $sc_check_incl) ))
         { }
         else
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_disabled'] = array();
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
                 $this->Campos_Mens_erro = ""; 
             }
             elseif ($this->SC_log_atv)
             {
                 $this->SC_log_arr_vert[] = $this->SC_log_arr;
                 $this->SC_log_atv = false;
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['zbggbh_'] =  $this->zbggbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbbh_'] =  $this->cgbbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbmc_'] =  $this->cgbmc_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qymc_'] =  $this->qymc_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['bj_'] =  $this->bj_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj_'] =  $this->tjsj_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj__hora'] =  $this->tjsj__hora; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['isflag_'] =  $this->isflag_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tbbh_'] =  $this->tbbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qylogin_'] =  $this->qylogin_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['lxr_'] =  $this->lxr_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['jsfile_'] =  $this->jsfile_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['swfile_'] =  $this->swfile_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qtfile_'] =  $this->qtfile_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form") 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt || $this->sc_teve_excl) 
          { 
              $this->sc_after_all_update = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_eval_cg_qytb_temp_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_eval_cg_qytb_temp);
          $this->NM_ajax_info['fldList']['id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['id_']);
          $this->NM_close_db();
          form_eval_cg_qytb_temp_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->isflag_))
          {
              $x = 0; 
              $this->isflag__1 = $this->isflag_;
              $this->isflag_ = ""; 
              if ($this->isflag__1 != "") 
              { 
                  foreach ($this->isflag__1 as $dados_isflag__1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->isflag_ .= ";";
                      } 
                      $this->isflag_ .= $dados_isflag__1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_eval_cg_qytb_temp_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_eval_cg_qytb_temp']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
       foreach ($this->SC_log_arr_vert as $this->SC_log_arr)
       {
           $this->NM_gera_log_output();
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $delim  = "'";
       $delim1 = "'";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date1'];
       }
       $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       $usr = isset($_SESSION['usr_login']) ? $_SESSION['usr_login'] : "";
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_eval_cg_qytb_temp', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_eval_cg_qytb_temp', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_eval_cg_qytb_temp_pack_ajax_response();
               exit; 
           }
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'zbggbh_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_zbggbh'] . "";
               break;
           case 'cgbbh_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbbh'] . "";
               break;
           case 'cgbmc_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbmc'] . "";
               break;
           case 'qymc_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qymc'] . "";
               break;
           case 'bj_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_bj'] . "";
               break;
           case 'tjsj_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tjsj'] . "";
               break;
           case 'isflag_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_isflag'] . "";
               break;
           case 'id_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_id'] . "";
               break;
           case 'tbbh_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tbbh'] . "";
               break;
           case 'qylogin_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qylogin'] . "";
               break;
           case 'lxr_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_lxr'] . "";
               break;
           case 'jsfile_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_jsfile'] . "";
               break;
           case 'swfile_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_swfile'] . "";
               break;
           case 'qtfile_':
               return "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qtfile'] . "";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade, $sc_seq_vert;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp']) || !is_array($this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp']))
              {
                  $this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_eval_cg_qytb_temp'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'zbggbh_' == $filtro)
        $this->ValidateField_zbggbh_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cgbbh_' == $filtro)
        $this->ValidateField_cgbbh_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cgbmc_' == $filtro)
        $this->ValidateField_cgbmc_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qymc_' == $filtro)
        $this->ValidateField_qymc_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bj_' == $filtro)
        $this->ValidateField_bj_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tjsj_' == $filtro)
        $this->ValidateField_tjsj_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'isflag_' == $filtro)
        $this->ValidateField_isflag_($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
      $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_zbggbh_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->zbggbh_ == "")  
      { 
          $this->zbggbh_ = 0;
          $this->sc_force_zero[] = 'zbggbh_';
      } 
      nm_limpa_numero($this->zbggbh_, $this->field_config['zbggbh_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->zbggbh_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->zbggbh_) > $iTestSize)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_zbggbh'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['zbggbh_']))
                  {
                      $Campos_Erros['zbggbh_'] = array();
                  }
                  $Campos_Erros['zbggbh_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['zbggbh_']) || !is_array($this->NM_ajax_info['errList']['zbggbh_']))
                  {
                      $this->NM_ajax_info['errList']['zbggbh_'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbggbh_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->zbggbh_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_zbggbh'] . "; " ; 
                  if (!isset($Campos_Erros['zbggbh_']))
                  {
                      $Campos_Erros['zbggbh_'] = array();
                  }
                  $Campos_Erros['zbggbh_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['zbggbh_']) || !is_array($this->NM_ajax_info['errList']['zbggbh_']))
                  {
                      $this->NM_ajax_info['errList']['zbggbh_'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbggbh_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_zbggbh_

    function ValidateField_cgbbh_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cgbbh_) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbbh'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cgbbh_']))
              {
                  $Campos_Erros['cgbbh_'] = array();
              }
              $Campos_Erros['cgbbh_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cgbbh_']) || !is_array($this->NM_ajax_info['errList']['cgbbh_']))
              {
                  $this->NM_ajax_info['errList']['cgbbh_'] = array();
              }
              $this->NM_ajax_info['errList']['cgbbh_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cgbbh_

    function ValidateField_cgbmc_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cgbmc_) > 64) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_cgbmc'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cgbmc_']))
              {
                  $Campos_Erros['cgbmc_'] = array();
              }
              $Campos_Erros['cgbmc_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cgbmc_']) || !is_array($this->NM_ajax_info['errList']['cgbmc_']))
              {
                  $this->NM_ajax_info['errList']['cgbmc_'] = array();
              }
              $this->NM_ajax_info['errList']['cgbmc_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cgbmc_

    function ValidateField_qymc_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->qymc_) > 64) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_qymc'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['qymc_']))
              {
                  $Campos_Erros['qymc_'] = array();
              }
              $Campos_Erros['qymc_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['qymc_']) || !is_array($this->NM_ajax_info['errList']['qymc_']))
              {
                  $this->NM_ajax_info['errList']['qymc_'] = array();
              }
              $this->NM_ajax_info['errList']['qymc_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_qymc_

    function ValidateField_bj_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->bj_ == "")  
      { 
          $this->bj_ = 0;
          $this->sc_force_zero[] = 'bj_';
      } 
      if (!empty($this->field_config['bj_']['symbol_dec']))
      {
          $this->sc_remove_currency($this->bj_, $this->field_config['bj_']['symbol_dec'], $this->field_config['bj_']['symbol_grp'], $this->field_config['bj_']['symbol_mon']); 
          nm_limpa_valor($this->bj_, $this->field_config['bj_']['symbol_dec'], $this->field_config['bj_']['symbol_grp']) ; 
          if ('.' == substr($this->bj_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->bj_, 1)))
              {
                  $this->bj_ = '';
              }
              else
              {
                  $this->bj_ = '0' . $this->bj_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->bj_ != '')  
          { 
              $iTestSize = 7;
              if (strlen($this->bj_) > $iTestSize)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_bj'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['bj_']))
                  {
                      $Campos_Erros['bj_'] = array();
                  }
                  $Campos_Erros['bj_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['bj_']) || !is_array($this->NM_ajax_info['errList']['bj_']))
                  {
                      $this->NM_ajax_info['errList']['bj_'] = array();
                  }
                  $this->NM_ajax_info['errList']['bj_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->bj_, 4, 2, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_bj'] . "; " ; 
                  if (!isset($Campos_Erros['bj_']))
                  {
                      $Campos_Erros['bj_'] = array();
                  }
                  $Campos_Erros['bj_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bj_']) || !is_array($this->NM_ajax_info['errList']['bj_']))
                  {
                      $this->NM_ajax_info['errList']['bj_'] = array();
                  }
                  $this->NM_ajax_info['errList']['bj_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_bj_

    function ValidateField_tjsj_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->tjsj_, $this->field_config['tjsj_']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['tjsj_']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['tjsj_']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['tjsj_']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['tjsj_']['date_sep']) ; 
          if (trim($this->tjsj_) != "")  
          { 
              if ($teste_validade->Data($this->tjsj_, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tjsj'] . "; " ; 
                  if (!isset($Campos_Erros['tjsj_']))
                  {
                      $Campos_Erros['tjsj_'] = array();
                  }
                  $Campos_Erros['tjsj_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tjsj_']) || !is_array($this->NM_ajax_info['errList']['tjsj_']))
                  {
                      $this->NM_ajax_info['errList']['tjsj_'] = array();
                  }
                  $this->NM_ajax_info['errList']['tjsj_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['tjsj_']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->tjsj__hora, $this->field_config['tjsj__hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['tjsj__hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['tjsj__hora']['time_sep']) ; 
          if (trim($this->tjsj__hora) != "")  
          { 
              if ($teste_validade->Hora($this->tjsj__hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_eval_cg_qytb_temp_fld_tjsj'] . "; " ; 
                  if (!isset($Campos_Erros['tjsj__hora']))
                  {
                      $Campos_Erros['tjsj__hora'] = array();
                  }
                  $Campos_Erros['tjsj__hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tjsj_']) || !is_array($this->NM_ajax_info['errList']['tjsj_']))
                  {
                      $this->NM_ajax_info['errList']['tjsj_'] = array();
                  }
                  $this->NM_ajax_info['errList']['tjsj_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['tjsj_']) && isset($Campos_Erros['tjsj__hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['tjsj_'], $Campos_Erros['tjsj__hora']);
          if (empty($Campos_Erros['tjsj__hora']))
          {
              unset($Campos_Erros['tjsj__hora']);
          }
          if (isset($this->NM_ajax_info['errList']['tjsj_']))
          {
              $this->NM_ajax_info['errList']['tjsj_'] = array_unique($this->NM_ajax_info['errList']['tjsj_']);
          }
      }
    } // ValidateField_tjsj__hora

    function ValidateField_isflag_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->isflag_ == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      else 
      { 
          if (is_array($this->isflag_))
          {
              $x = 0; 
              $this->isflag__1 = array(); 
              foreach ($this->isflag_ as $ind => $dados_isflag__1 ) 
              {
                  if ($dados_isflag__1 !== "") 
                  {
                      $this->isflag__1[] = $dados_isflag__1;
                  } 
              } 
              $this->isflag_ = ""; 
              foreach ($this->isflag__1 as $dados_isflag__1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->isflag_ .= ";";
                   } 
                   $this->isflag_ .= $dados_isflag__1;
                   $x++ ; 
              } 
          } 
      } 
    } // ValidateField_isflag_

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['zbggbh_'] = $this->zbggbh_;
    $this->nmgp_dados_form['cgbbh_'] = $this->cgbbh_;
    $this->nmgp_dados_form['cgbmc_'] = $this->cgbmc_;
    $this->nmgp_dados_form['qymc_'] = $this->qymc_;
    $this->nmgp_dados_form['bj_'] = $this->bj_;
    $this->nmgp_dados_form['tjsj_'] = $this->tjsj_;
    $this->nmgp_dados_form['isflag_'] = $this->isflag_;
    $this->nmgp_dados_form['id_'] = $this->id_;
    $this->nmgp_dados_form['tbbh_'] = $this->tbbh_;
    $this->nmgp_dados_form['qylogin_'] = $this->qylogin_;
    $this->nmgp_dados_form['lxr_'] = $this->lxr_;
    $this->nmgp_dados_form['jsfile_'] = $this->jsfile_;
    $this->nmgp_dados_form['swfile_'] = $this->swfile_;
    $this->nmgp_dados_form['qtfile_'] = $this->qtfile_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->zbggbh_, $this->field_config['zbggbh_']['symbol_grp']) ; 
      if (!empty($this->field_config['bj_']['symbol_dec']))
      {
         $this->sc_remove_currency($this->bj_, $this->field_config['bj_']['symbol_dec'], $this->field_config['bj_']['symbol_grp'], $this->field_config['bj_']['symbol_mon']);
         nm_limpa_valor($this->bj_, $this->field_config['bj_']['symbol_dec'], $this->field_config['bj_']['symbol_grp']);
      }
      nm_limpa_data($this->tjsj_, $this->field_config['tjsj_']['date_sep']) ; 
      nm_limpa_hora($this->tjsj__hora, $this->field_config['tjsj_']['time_sep']) ; 
      nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      nm_limpa_numero($this->tbbh_, $this->field_config['tbbh_']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~ei', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "zbggbh_")
      {
          nm_limpa_numero($this->zbggbh_, $this->field_config['zbggbh_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "bj_")
      {
          if (!empty($this->field_config['bj_']['symbol_dec']))
          {
             $this->sc_remove_currency($this->bj_, $this->field_config['bj_']['symbol_dec'], $this->field_config['bj_']['symbol_grp'], $this->field_config['bj_']['symbol_mon']);
             nm_limpa_valor($this->bj_, $this->field_config['bj_']['symbol_dec'], $this->field_config['bj_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "id_")
      {
          nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "tbbh_")
      {
          nm_limpa_numero($this->tbbh_, $this->field_config['tbbh_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
      if (!empty($this->zbggbh_) || (!empty($format_fields) && isset($format_fields['zbggbh_'])))
      {
          nmgp_Form_Num_Val($this->zbggbh_, $this->field_config['zbggbh_']['symbol_grp'], $this->field_config['zbggbh_']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['zbggbh_']['symbol_fmt']) ; 
      }
      if (!empty($this->bj_) || (!empty($format_fields) && isset($format_fields['bj_'])))
      {
          nmgp_Form_Num_Val($this->bj_, $this->field_config['bj_']['symbol_grp'], $this->field_config['bj_']['symbol_dec'], "2", "S", "", "", "", "-", $this->field_config['bj_']['symbol_fmt']) ; 
      }
      if ((!empty($this->tjsj_) && 'null' != $this->tjsj_) || (!empty($format_fields) && isset($format_fields['tjsj_'])))
      {
          $nm_separa_data = strpos($this->field_config['tjsj_']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['tjsj_']['date_format'];
          $this->field_config['tjsj_']['date_format'] = substr($this->field_config['tjsj_']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->tjsj_, " ") ; 
          $this->tjsj__hora = substr($this->tjsj_, $separador + 1) ; 
          $this->tjsj_ = substr($this->tjsj_, 0, $separador) ; 
          nm_volta_data($this->tjsj_, $this->field_config['tjsj_']['date_format']) ; 
          nmgp_Form_Datas($this->tjsj_, $this->field_config['tjsj_']['date_format'], $this->field_config['tjsj_']['date_sep']) ;  
          $this->field_config['tjsj_']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->tjsj__hora, $this->field_config['tjsj_']['date_format']) ; 
          nmgp_Form_Hora($this->tjsj__hora, $this->field_config['tjsj_']['date_format'], $this->field_config['tjsj_']['time_sep']) ;  
          $this->field_config['tjsj_']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->tjsj_ || '' == $this->tjsj_)
      {
          $this->tjsj__hora = '';
          $this->tjsj_ = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['tjsj_']['date_format'];
      if ($this->tjsj_ != "")  
      { 
          $nm_separa_data = strpos($this->field_config['tjsj_']['date_format'], ";") ;
          $this->field_config['tjsj_']['date_format'] = substr($this->field_config['tjsj_']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->tjsj_, $this->field_config['tjsj_']['date_format']) ; 
          $this->field_config['tjsj_']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->tjsj__hora, $this->field_config['tjsj_']['date_format']) ; 
          if ($this->tjsj__hora == "" )  
          { 
              $this->tjsj__hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->tjsj__hora = substr($this->tjsj__hora, 0, -4);
          }
          if ($this->tjsj_ != "")  
          { 
              $this->tjsj_ .= " " . $this->tjsj__hora ; 
          }
      } 
      if ($this->tjsj_ == "" && $use_null)  
      { 
          $this->tjsj_ = "null" ; 
      } 
      $this->field_config['tjsj_']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id_']['keyVal'] = form_eval_cg_qytb_temp_pack_protect_string($this->nmgp_dados_form['id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['zbggbh_']) && $this->NM_ajax_changed['zbggbh_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['zbggbh_'] = $this->zbggbh_;
                  }
                  if (isset($this->NM_ajax_changed['cgbbh_']) && $this->NM_ajax_changed['cgbbh_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['cgbbh_'] = $this->cgbbh_;
                  }
                  if (isset($this->NM_ajax_changed['cgbmc_']) && $this->NM_ajax_changed['cgbmc_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['cgbmc_'] = $this->cgbmc_;
                  }
                  if (isset($this->NM_ajax_changed['qymc_']) && $this->NM_ajax_changed['qymc_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['qymc_'] = $this->qymc_;
                  }
                  if (isset($this->NM_ajax_changed['bj_']) && $this->NM_ajax_changed['bj_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['bj_'] = $this->bj_;
                  }
                  if (isset($this->NM_ajax_changed['tjsj_']) && $this->NM_ajax_changed['tjsj_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['tjsj_'] = $this->tjsj_;
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['tjsj__hora'] = $this->tjsj__hora;
                  }
                  if (isset($this->NM_ajax_changed['isflag_']) && $this->NM_ajax_changed['isflag_'])
                  {
                      $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['isflag_'] = $this->isflag_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['cgbbh_'] = $this->cgbbh_;
              $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['cgbmc_'] = $this->cgbmc_;
              $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['qymc_'] = $this->qymc_;
              $this->form_vert_form_eval_cg_qytb_temp[$this->nmgp_refresh_row]['isflag_'] = $this->isflag_;
          }
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_eval_cg_qytb_temp);
          foreach($this->form_vert_form_eval_cg_qytb_temp as $sc_seq_vert => $aRecData)
          {
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("zbggbh_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['zbggbh_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['zbggbh_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cgbbh_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['cgbbh_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['cgbbh_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cgbmc_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['cgbmc_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['cgbmc_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qymc_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['qymc_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['qymc_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bj_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['bj_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['bj_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tjsj_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['tjsj_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['tjsj_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($aRecData['tjsj_'] . ' ' . $aRecData['tjsj__hora']),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("isflag_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['isflag_']);
                  $aLookup = array();
$aLookup[] = array(form_eval_cg_qytb_temp_pack_protect_string('Y') => form_eval_cg_qytb_temp_pack_protect_string("" . $this->Ini->Nm_lang['lang_opt_yes'] . ""));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['Lookup_isflag_'][] = 'Y';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['isflag_']) && !empty($this->NM_ajax_info['select_html']['isflag_']))
          {
              eval("\$sOptComp = \"" . $this->NM_ajax_info['select_html']['isflag_'] . "\";");
          }
                  $this->NM_ajax_info['fldList']['isflag_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'checkbox',
                       'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-isflag_',
               'optMulti' => $sc_seq_vert,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['isflag_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['isflag_' . $sc_seq_vert]['valList'][$i] = form_eval_cg_qytb_temp_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['isflag_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['isflag_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['isflag_' . $sc_seq_vert]['labList'] = $aLabel;
              }
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload_record($sc_seq_vert=0)
  {
  }
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//
   function nm_troca_decimal($sc_parm1, $sc_parm2) 
   { 
      $this->bj_ = str_replace($sc_parm1, $sc_parm2, $this->bj_); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->bj_ = "'" . $this->bj_ . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->bj_ = str_replace("'", "", $this->bj_); 
   } 
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      $this->SC_log_atv = false;
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_key($this->nmgp_opcao);
      }
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_old($sc_seq_vert);
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      if ($this->nmgp_opcao == "alterar")
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['zbggbh_'] == $this->zbggbh_ &&
              $this->nmgp_dados_select['cgbbh_'] == $this->cgbbh_ &&
              $this->nmgp_dados_select['cgbmc_'] == $this->cgbmc_ &&
              $this->nmgp_dados_select['qymc_'] == $this->qymc_ &&
              $this->nmgp_dados_select['bj_'] == $this->bj_ &&
              $this->nmgp_dados_select['tjsj_'] == $this->tjsj_ &&
              $this->nmgp_dados_select['isflag_'] == $this->isflag_)
          {
              $SC_ex_update = false; 
              $SC_ex_upd_or = false; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['zbggbh_'] = $this->zbggbh_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['cgbbh_'] = $this->cgbbh_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['cgbmc_'] = $this->cgbmc_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['qymc_'] = $this->qymc_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['bj_'] = $this->bj_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['tjsj_'] = $this->tjsj_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['isflag_'] = $this->isflag_;
          }
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['zbggbh_'] = $this->zbggbh_;
      $NM_val_form['cgbbh_'] = $this->cgbbh_;
      $NM_val_form['cgbmc_'] = $this->cgbmc_;
      $NM_val_form['qymc_'] = $this->qymc_;
      $NM_val_form['bj_'] = $this->bj_;
      $NM_val_form['tjsj_'] = $this->tjsj_;
      $NM_val_form['isflag_'] = $this->isflag_;
      $NM_val_form['id_'] = $this->id_;
      $NM_val_form['tbbh_'] = $this->tbbh_;
      $NM_val_form['qylogin_'] = $this->qylogin_;
      $NM_val_form['lxr_'] = $this->lxr_;
      $NM_val_form['jsfile_'] = $this->jsfile_;
      $NM_val_form['swfile_'] = $this->swfile_;
      $NM_val_form['qtfile_'] = $this->qtfile_;
      if ($this->id_ == "")  
      { 
          $this->id_ = 0;
      } 
      if ($this->tbbh_ == "")  
      { 
          $this->tbbh_ = 0;
          $this->sc_force_zero[] = 'tbbh_';
      } 
      if ($this->zbggbh_ == "")  
      { 
          $this->zbggbh_ = 0;
          $this->sc_force_zero[] = 'zbggbh_';
      } 
      if ($this->bj_ == "")  
      { 
          $this->bj_ = 0;
          $this->sc_force_zero[] = 'bj_';
      } 
      $nm_bases_lob_geral = $this->Ini->nm_bases_mysql;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->cgbbh__before_qstr = $this->cgbbh_;
          $this->cgbbh_ = substr($this->Db->qstr($this->cgbbh_), 1, -1); 
          $this->cgbmc__before_qstr = $this->cgbmc_;
          $this->cgbmc_ = substr($this->Db->qstr($this->cgbmc_), 1, -1); 
          $this->qylogin__before_qstr = $this->qylogin_;
          $this->qylogin_ = substr($this->Db->qstr($this->qylogin_), 1, -1); 
          $this->lxr__before_qstr = $this->lxr_;
          $this->lxr_ = substr($this->Db->qstr($this->lxr_), 1, -1); 
          $this->qymc__before_qstr = $this->qymc_;
          $this->qymc_ = substr($this->Db->qstr($this->qymc_), 1, -1); 
          $this->jsfile__before_qstr = $this->jsfile_;
          $this->jsfile_ = substr($this->Db->qstr($this->jsfile_), 1, -1); 
          $this->swfile__before_qstr = $this->swfile_;
          $this->swfile_ = substr($this->Db->qstr($this->swfile_), 1, -1); 
          $this->qtfile__before_qstr = $this->qtfile_;
          $this->qtfile_ = substr($this->Db->qstr($this->qtfile_), 1, -1); 
          if ($this->tjsj_ == "")  
          { 
              $this->tjsj_ = "null"; 
              $NM_val_null[] = "tjsj_";
          } 
          $this->isflag__before_qstr = $this->isflag_;
          $this->isflag_ = substr($this->Db->qstr($this->isflag_), 1, -1); 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id_ ";
          $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_eval_cg_qytb_temp_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $comando_oracle = "";  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET zbggbh = $this->zbggbh_, cgbbh = '$this->cgbbh_', cgbmc = '$this->cgbmc_', qymc = '$this->qymc_', bj = $this->bj_, tjsj = " . $this->Ini->date_delim . $this->tjsj_ . $this->Ini->date_delim1 . ", isflag = '$this->isflag_'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET zbggbh = $this->zbggbh_, cgbbh = '$this->cgbbh_', cgbmc = '$this->cgbmc_', qymc = '$this->qymc_', bj = $this->bj_, tjsj = " . $this->Ini->date_delim . $this->tjsj_ . $this->Ini->date_delim1 . ", isflag = '$this->isflag_'";  
              } 
              if (isset($NM_val_form['tbbh_']) && $NM_val_form['tbbh_'] != $this->nmgp_dados_select['tbbh_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " tbbh = $this->tbbh_"; 
                  $comando_oracle        .= " tbbh = $this->tbbh_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['qylogin_']) && $NM_val_form['qylogin_'] != $this->nmgp_dados_select['qylogin_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " qylogin = '$this->qylogin_'"; 
                  $comando_oracle        .= " qylogin = '$this->qylogin_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['lxr_']) && $NM_val_form['lxr_'] != $this->nmgp_dados_select['lxr_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " lxr = '$this->lxr_'"; 
                  $comando_oracle        .= " lxr = '$this->lxr_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['jsfile_']) && $NM_val_form['jsfile_'] != $this->nmgp_dados_select['jsfile_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " jsfile = '$this->jsfile_'"; 
                  $comando_oracle        .= " jsfile = '$this->jsfile_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['swfile_']) && $NM_val_form['swfile_'] != $this->nmgp_dados_select['swfile_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " swfile = '$this->swfile_'"; 
                  $comando_oracle        .= " swfile = '$this->swfile_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['qtfile_']) && $NM_val_form['qtfile_'] != $this->nmgp_dados_select['qtfile_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " qtfile = '$this->qtfile_'"; 
                  $comando_oracle        .= " qtfile = '$this->qtfile_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              $comando .= " WHERE id = $this->id_ ";  
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_eval_cg_qytb_temp_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
          $this->cgbbh_ = $this->cgbbh__before_qstr;
          $this->cgbmc_ = $this->cgbmc__before_qstr;
          $this->qylogin_ = $this->qylogin__before_qstr;
          $this->lxr_ = $this->lxr__before_qstr;
          $this->qymc_ = $this->qymc__before_qstr;
          $this->jsfile_ = $this->jsfile__before_qstr;
          $this->swfile_ = $this->swfile__before_qstr;
          $this->qtfile_ = $this->qtfile__before_qstr;
          $this->isflag_ = $this->isflag__before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              $this->NM_btn_navega = "N";
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['db_changed'] = true;

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['zbggbh_'])) { $this->zbggbh_ = $NM_val_form['zbggbh_']; }
              elseif (isset($this->zbggbh_)) { $this->nm_limpa_alfa($this->zbggbh_); }
              if     (isset($NM_val_form) && isset($NM_val_form['cgbbh_'])) { $this->cgbbh_ = $NM_val_form['cgbbh_']; }
              elseif (isset($this->cgbbh_)) { $this->nm_limpa_alfa($this->cgbbh_); }
              if     (isset($NM_val_form) && isset($NM_val_form['cgbmc_'])) { $this->cgbmc_ = $NM_val_form['cgbmc_']; }
              elseif (isset($this->cgbmc_)) { $this->nm_limpa_alfa($this->cgbmc_); }
              if     (isset($NM_val_form) && isset($NM_val_form['qymc_'])) { $this->qymc_ = $NM_val_form['qymc_']; }
              elseif (isset($this->qymc_)) { $this->nm_limpa_alfa($this->qymc_); }
              if     (isset($NM_val_form) && isset($NM_val_form['bj_'])) { $this->bj_ = $NM_val_form['bj_']; }
              elseif (isset($this->bj_)) { $this->nm_limpa_alfa($this->bj_); }
              if     (isset($NM_val_form) && isset($NM_val_form['isflag_'])) { $this->isflag_ = $NM_val_form['isflag_']; }
              elseif (isset($this->isflag_)) { $this->nm_limpa_alfa($this->isflag_); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('zbggbh_', 'cgbbh_', 'cgbmc_', 'qymc_', 'bj_', 'tjsj_', 'isflag_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['zbggbh_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['cgbbh_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['cgbmc_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['qymc_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['bj_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['tjsj_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['isflag_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "tbbh, zbggbh, cgbbh, cgbmc, qylogin, lxr, qymc, bj, jsfile, swfile, qtfile, tjsj, isflag) VALUES (" . $NM_seq_auto . "$this->tbbh_, $this->zbggbh_, '$this->cgbbh_', '$this->cgbmc_', '$this->qylogin_', '$this->lxr_', '$this->qymc_', $this->bj_, '$this->jsfile_', '$this->swfile_', '$this->qtfile_', " . $this->Ini->date_delim . $this->tjsj_ . $this->Ini->date_delim1 . ", '$this->isflag_')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "tbbh, zbggbh, cgbbh, cgbmc, qylogin, lxr, qymc, bj, jsfile, swfile, qtfile, tjsj, isflag) VALUES (" . $NM_seq_auto . "$this->tbbh_, $this->zbggbh_, '$this->cgbbh_', '$this->cgbmc_', '$this->qylogin_', '$this->lxr_', '$this->qymc_', $this->bj_, '$this->jsfile_', '$this->swfile_', '$this->qtfile_', " . $this->Ini->date_delim . $this->tjsj_ . $this->Ini->date_delim1 . ", '$this->isflag_')"; 
              }
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_eval_cg_qytb_temp_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['zbggbh_'] = $this->zbggbh_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['cgbbh_'] = $this->cgbbh_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['cgbmc_'] = $this->cgbmc_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['qymc_'] = $this->qymc_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['bj_'] = $this->bj_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['tjsj_'] = $this->tjsj_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert]['isflag_'] = $this->isflag_;
              if (!empty($this->sc_force_zero))
              {
                  foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
                  {
                      eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
                  }
              }
              $this->sc_force_zero = array();
              if (!empty($NM_val_null))
              {
                  foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
                  {
                      eval('$this->' . $sc_val_null_field . ' = "";');
                  }
              }
              if (isset($this->zbggbh_)) { $this->nm_limpa_alfa($this->zbggbh_); }
              if (isset($this->cgbbh_)) { $this->nm_limpa_alfa($this->cgbbh_); }
              if (isset($this->cgbmc_)) { $this->nm_limpa_alfa($this->cgbmc_); }
              if (isset($this->qymc_)) { $this->nm_limpa_alfa($this->qymc_); }
              if (isset($this->bj_)) { $this->nm_limpa_alfa($this->bj_); }
              if (isset($this->isflag_)) { $this->nm_limpa_alfa($this->isflag_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_formatar_campos();

                  $this->NM_ajax_info['fldList']['zbggbh_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['zbggbh_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->zbggbh_));
                  $this->NM_ajax_info['fldList']['zbggbh_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_zbggbh_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['zbggbh_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['zbggbh_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['zbggbh_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['zbggbh_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['cgbbh_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['cgbbh_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->cgbbh_));
                  $this->NM_ajax_info['fldList']['cgbbh_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_cgbbh_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['cgbbh_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['cgbbh_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['cgbbh_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['cgbbh_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['cgbmc_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['cgbmc_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->cgbmc_));
                  $this->NM_ajax_info['fldList']['cgbmc_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_cgbmc_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['cgbmc_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['cgbmc_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['cgbmc_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['cgbmc_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['qymc_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['qymc_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->qymc_));
                  $this->NM_ajax_info['fldList']['qymc_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_qymc_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['qymc_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['qymc_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['qymc_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['qymc_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['bj_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['bj_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->bj_));
                  $this->NM_ajax_info['fldList']['bj_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_bj_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['bj_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['bj_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['bj_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['bj_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['tjsj_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['tjsj_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->tjsj_ . ' ' . $this->tjsj__hora));
                  $this->NM_ajax_info['fldList']['tjsj_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_tjsj_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['tjsj_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['tjsj_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['tjsj_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['tjsj_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
$aLookup[] = array(form_eval_cg_qytb_temp_pack_protect_string('Y') => form_eval_cg_qytb_temp_pack_protect_string("" . $this->Ini->Nm_lang['lang_opt_yes'] . ""));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['Lookup_isflag_'][] = 'Y';
          $sLabelTemp = '';
          $aTemp_isflag_ = explode(';', $this->isflag_);
          foreach ($aTemp_isflag_ as $i => $v)
          {
              $aTemp_isflag_[$i] = form_eval_cg_qytb_temp_pack_protect_string(NM_charset_to_utf8($v));
          }
          foreach ($aLookup as $aValData)
          {
              if (in_array(key($aValData), $aTemp_isflag_))
              {
                  if ('' != $sLabelTemp)
                  {
                      $sLabelTemp .= '<br />';
                  }
                  $sLabelTemp .= current($aValData);
              }
          }
          $tmpLabel_isflag_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['isflag_' . $this->nmgp_refresh_row]['type']    = 'checkbox';
                  $this->NM_ajax_info['fldList']['isflag_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->isflag_));
                  $this->NM_ajax_info['fldList']['isflag_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_isflag_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['isflag_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['isflag_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['isflag_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['isflag_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();
                  $this->nm_converte_datas();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id_ = substr($this->Db->qstr($this->id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id_"; 
          $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "; 
              $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id_ "); 
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_eval_cg_qytb_temp_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['db_changed'] = true;

              $this->sc_teve_excl = true; 
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['parms'] = "id_?#?$this->id_?@?"; 
      }
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id_ = substr($this->Db->qstr($this->id_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_eval_cg_qytb_temp']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['embutida_liga_qtd_reg'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg'] > 0 || strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg']) == "all"))
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_max_reg'];
      } 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_eval_cg_qytb_temp = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['parms'] = ""; 
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter'] . ")";
          }
      }
      $sc_where = "";
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (((isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao) || (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)) && !$this->has_where_params && 'novo' != $this->nmgp_opcao)
      {
          $aNewWhereCond = array();
          if (null != $this->id_)
          {
              $aNewWhereCond[] = "id = " . $this->id_;
          }
          if (!$this->NM_ajax_flag)
          {
              $this->NM_btn_navega = "S";
          }
          elseif (!empty($aNewWhereCond))
          {
              if ('' == $sc_where)
              {
                  $sc_where = " where (";
              }
              else
              {
                  $sc_where .= " and (";
              }
              $sc_where .= implode(" and ", $aNewWhereCond) . ")";
          }
      }
      if ('total' != $this->form_paginacao)
      {
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total']))
          {
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_eval_cg_qytb_temp = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'] = $qt_geral_reg_form_eval_cg_qytb_temp;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total']) || $this->sc_teve_excl || $this->sc_teve_incl)
      { 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id_))
          {
              $Key_Where = "id < $this->id_ "; 
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_eval_cg_qytb_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_eval_cg_qytb_temp) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] += $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] > $qt_geral_reg_form_eval_cg_qytb_temp)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = $qt_geral_reg_form_eval_cg_qytb_temp - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = ($qt_geral_reg_form_eval_cg_qytb_temp + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] = 0; 
          }
      } 
      }
      $Cmps_ord_def = array();
      $sc_order_by  = "";
      $sc_order_by = "id";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_ord'] = ' asc'; 
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['ordem_ord']; 
      } 
      $nmgp_select = "SELECT id, tbbh, zbggbh, cgbbh, cgbmc, qylogin, lxr, qymc, bj, jsfile, swfile, qtfile, tjsj, isflag from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start']) ;  
                  } 
              } 
          } 
      }
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on" && !$this->proc_fast_search)
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter'] = true;
              }
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
              $this->sc_max_reg = 0;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if ('total' == $this->form_paginacao)
              {
                  $this->sc_max_reg++;
              }
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['id_'] = $this->id_;
              $this->tbbh_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['tbbh_'] = $this->tbbh_;
              $this->zbggbh_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['zbggbh_'] = $this->zbggbh_;
              $this->cgbbh_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['cgbbh_'] = $this->cgbbh_;
              $this->cgbmc_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['cgbmc_'] = $this->cgbmc_;
              $this->qylogin_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['qylogin_'] = $this->qylogin_;
              $this->lxr_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['lxr_'] = $this->lxr_;
              $this->qymc_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['qymc_'] = $this->qymc_;
              $this->bj_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['bj_'] = $this->bj_;
              $this->jsfile_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['jsfile_'] = $this->jsfile_;
              $this->swfile_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['swfile_'] = $this->swfile_;
              $this->qtfile_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['qtfile_'] = $this->qtfile_;
              $this->tjsj_ = $rs->fields[12] ; 
              if (substr($this->tjsj_, 10, 1) == "-") 
              { 
                 $this->tjsj_ = substr($this->tjsj_, 0, 10) . " " . substr($this->tjsj_, 11);
              } 
              if (substr($this->tjsj_, 13, 1) == ".") 
              { 
                 $this->tjsj_ = substr($this->tjsj_, 0, 13) . ":" . substr($this->tjsj_, 14, 2) . ":" . substr($this->tjsj_, 17);
              } 
              $this->nmgp_dados_select['tjsj_'] = $this->tjsj_;
              $this->isflag_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['isflag_'] = $this->isflag_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->id_ = (string)$this->id_; 
              $this->tbbh_ = (string)$this->tbbh_; 
              $this->zbggbh_ = (string)$this->zbggbh_; 
              $this->bj_ = (string)$this->bj_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['parms'] = "id_?#?$this->id_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['zbggbh_'] =  $this->zbggbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbbh_'] =  $this->cgbbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbmc_'] =  $this->cgbmc_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qymc_'] =  $this->qymc_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['bj_'] =  $this->bj_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj_'] =  $this->tjsj_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj__hora'] =  $this->tjsj__hora; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['isflag_'] =  $this->isflag_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tbbh_'] =  $this->tbbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qylogin_'] =  $this->qylogin_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['lxr_'] =  $this->lxr_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['jsfile_'] =  $this->jsfile_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['swfile_'] =  $this->swfile_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qtfile_'] =  $this->qtfile_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          ksort ($this->form_vert_form_eval_cg_qytb_temp); 
          $rs->Close(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_qtd'] = $sc_seq_vert + $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] - 1;
          if ('total' == $this->form_paginacao)
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $this->sc_max_reg; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $this->sc_max_reg; 
          }
          else
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'] + 1; 
          }
          if ($this->form_paginacao == "total")
          {
              $this->SC_nav_page = "";
          }
          else
          {
              $this->NM_gera_nav_page(); 
          }
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] < (($qt_geral_reg_form_eval_cg_qytb_temp + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          elseif ($this->Embutida_form) 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->zbggbh_ = "";  
              $this->cgbbh_ = "";  
              $this->cgbmc_ = "";  
              $this->qymc_ = "";  
              $this->bj_ = "";  
              $this->tjsj_ = "";  
              $this->isflag_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['zbggbh_'] =  $this->zbggbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbbh_'] =  $this->cgbbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['cgbmc_'] =  $this->cgbmc_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qymc_'] =  $this->qymc_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['bj_'] =  $this->bj_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj_'] =  $this->tjsj_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tjsj__hora'] =  $this->tjsj__hora; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['isflag_'] =  $this->isflag_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['tbbh_'] =  $this->tbbh_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qylogin_'] =  $this->qylogin_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['lxr_'] =  $this->lxr_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['jsfile_'] =  $this->jsfile_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['swfile_'] =  $this->swfile_; 
             $this->form_vert_form_eval_cg_qytb_temp[$sc_seq_vert]['qtfile_'] =  $this->qtfile_; 
              $sc_seq_vert++; 
          } 
      }  
  }
// 
   function NM_gera_log_key($evt) 
   {
       $this->SC_log_arr = array();
       $this->SC_log_atv = true;
       if ($evt == "incluir")
       {
           $this->SC_log_evt = "insert";
       }
       if ($evt == "alterar")
       {
           $this->SC_log_evt = "update";
       }
       if ($evt == "excluir")
       {
           $this->SC_log_evt = "delete";
       }
       $this->SC_log_arr['keys']['id'] =  $this->id_;
   }
// 
   function NM_gera_log_old($sc_seq_vert) 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert] ))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['dados_select'][$sc_seq_vert] ;
           $this->SC_log_arr['fields']['tbbh']['0'] =  $nmgp_dados_select['tbbh_'];
           $this->SC_log_arr['fields']['zbggbh']['0'] =  $nmgp_dados_select['zbggbh_'];
           $this->SC_log_arr['fields']['cgbbh']['0'] =  $nmgp_dados_select['cgbbh_'];
           $this->SC_log_arr['fields']['cgbmc']['0'] =  $nmgp_dados_select['cgbmc_'];
           $this->SC_log_arr['fields']['qylogin']['0'] =  $nmgp_dados_select['qylogin_'];
           $this->SC_log_arr['fields']['lxr']['0'] =  $nmgp_dados_select['lxr_'];
           $this->SC_log_arr['fields']['qymc']['0'] =  $nmgp_dados_select['qymc_'];
           $this->SC_log_arr['fields']['bj']['0'] =  $nmgp_dados_select['bj_'];
           $this->SC_log_arr['fields']['jsfile']['0'] =  $nmgp_dados_select['jsfile_'];
           $this->SC_log_arr['fields']['swfile']['0'] =  $nmgp_dados_select['swfile_'];
           $this->SC_log_arr['fields']['qtfile']['0'] =  $nmgp_dados_select['qtfile_'];
           $this->SC_log_arr['fields']['tjsj']['0'] =  $nmgp_dados_select['tjsj_'];
           $this->SC_log_arr['fields']['isflag']['0'] =  $nmgp_dados_select['isflag_'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['tbbh']['1'] =  $this->tbbh_;
       $this->SC_log_arr['fields']['zbggbh']['1'] =  $this->zbggbh_;
       $this->SC_log_arr['fields']['cgbbh']['1'] =  $this->cgbbh_;
       $this->SC_log_arr['fields']['cgbmc']['1'] =  $this->cgbmc_;
       $this->SC_log_arr['fields']['qylogin']['1'] =  $this->qylogin_;
       $this->SC_log_arr['fields']['lxr']['1'] =  $this->lxr_;
       $this->SC_log_arr['fields']['qymc']['1'] =  $this->qymc_;
       $this->SC_log_arr['fields']['bj']['1'] =  $this->bj_;
       $this->SC_log_arr['fields']['jsfile']['1'] =  $this->jsfile_;
       $this->SC_log_arr['fields']['swfile']['1'] =  $this->swfile_;
       $this->SC_log_arr['fields']['qtfile']['1'] =  $this->qtfile_;
       $this->SC_log_arr['fields']['tjsj']['1'] =  $this->tjsj_;
       $this->SC_log_arr['fields']['isflag']['1'] =  $this->isflag_;
   }
// 
   function NM_gera_log_compress() 
   {
       foreach ($this->SC_log_arr['fields'] as $fild => $data_f)
       {
           if ($data_f[0] == $data_f[1] || ($data_f[0] == "" && $data_f[1] == "null"))
           {
               unset($this->SC_log_arr['fields'][$fild]);
           }
       }
   }
// 
   function NM_gera_log_output() 
   {
       $Log_output = "";
       $prim_delim = "";
       foreach ($this->SC_log_arr as $type => $dats)
       {
           if ($type == "keys")
           {
               $Log_output .= "--> keys <-- ";
               foreach ($dats as $key => $data)
               {
                   $Log_output .=  $prim_delim . $key . " : " . $data;
                   $prim_delim  = "||";
               }
           }
           if ($type == "fields")
           {
               $Log_output .= $prim_delim . "--> fields <-- ";
               $prim_delim = "";
               if (empty($dats) && $this->SC_log_evt == "update")
               {
                   return;
               }
               foreach ($dats as $key => $data)
               {
                   foreach ($data as $tp => $val)
                   {
                      $tpok = ($tp == 0) ? " (old) " : " (new) ";
                      $Log_output .= $prim_delim . $key . $tpok . " : " . $val;
                      $prim_delim  = "||";
                   }
               }
           }
       }
       $this->NM_gera_log_insert("Scriptcase", $this->SC_log_evt, $Log_output);
   }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_eval_cg_qytb_temp_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['table_refresh'] = true;
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_eval_cg_qytb_temp_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "tbbh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "zbggbh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cgbbh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cgbmc", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qylogin", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "lxr", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qymc", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "jsfile", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "swfile", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qtfile", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "tjsj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_isflag_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "isflag", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "zbggbh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cgbbh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cgbmc", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qymc", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_isflag_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "isflag", $arg_search, $data_lookup);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_eval_cg_qytb_temp = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['total'] = $qt_geral_reg_form_eval_cg_qytb_temp;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_eval_cg_qytb_temp_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_eval_cg_qytb_temp_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id";$nm_numeric[] = "tbbh";$nm_numeric[] = "zbggbh";$nm_numeric[] = "bj";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
      $Nm_datas['tjsj'] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
   function SC_lookup_isflag_($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['Y'] = "" . $this->Ini->Nm_lang['lang_opt_yes'] . "";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_eval_cg_qytb_temp_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_eval_cg_qytb_temp_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = '_self';
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_eval_cg_qytb_temp_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_eval_cg_qytb_temp']['masterValue']))
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
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
