<?php
//
class form_cg_zbgg_apl
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
   var $id;
   var $cgbbh;
   var $cgbmc;
   var $cgfs;
   var $bzj;
   var $bskssj;
   var $bskssj_hora;
   var $bsjssj;
   var $bsjssj_hora;
   var $bsf;
   var $xckssj;
   var $xckssj_hora;
   var $xcjssj;
   var $xcjssj_hora;
   var $wzqd;
   var $wzqd_scfile_name;
   var $wzqd_ul_name;
   var $wzqd_ul_type;
   var $wzqd_limpa;
   var $wzqd_salva;
   var $zbkssj;
   var $zbkssj_hora;
   var $zbjssj;
   var $zbjssj_hora;
   var $zbfile;
   var $zbfile_scfile_name;
   var $zbfile_ul_name;
   var $zbfile_ul_type;
   var $zbfile_limpa;
   var $zbfile_salva;
   var $lxr;
   var $bgdh;
   var $yddh;
   var $fax;
   var $email;
   var $postcode;
   var $dz;
   var $kfh;
   var $kfh_1;
   var $yhzh;
   var $ybqy;
   var $ybqy_1;
   var $xmsm;
   var $shsj;
   var $shzt;
   var $sfjs;
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
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['bgdh']))
          {
              $this->bgdh = $this->NM_ajax_info['param']['bgdh'];
          }
          if (isset($this->NM_ajax_info['param']['bsf']))
          {
              $this->bsf = $this->NM_ajax_info['param']['bsf'];
          }
          if (isset($this->NM_ajax_info['param']['bsjssj']))
          {
              $this->bsjssj = $this->NM_ajax_info['param']['bsjssj'];
          }
          if (isset($this->NM_ajax_info['param']['bskssj']))
          {
              $this->bskssj = $this->NM_ajax_info['param']['bskssj'];
          }
          if (isset($this->NM_ajax_info['param']['bzj']))
          {
              $this->bzj = $this->NM_ajax_info['param']['bzj'];
          }
          if (isset($this->NM_ajax_info['param']['cgbbh']))
          {
              $this->cgbbh = $this->NM_ajax_info['param']['cgbbh'];
          }
          if (isset($this->NM_ajax_info['param']['cgbmc']))
          {
              $this->cgbmc = $this->NM_ajax_info['param']['cgbmc'];
          }
          if (isset($this->NM_ajax_info['param']['cgfs']))
          {
              $this->cgfs = $this->NM_ajax_info['param']['cgfs'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['dz']))
          {
              $this->dz = $this->NM_ajax_info['param']['dz'];
          }
          if (isset($this->NM_ajax_info['param']['email']))
          {
              $this->email = $this->NM_ajax_info['param']['email'];
          }
          if (isset($this->NM_ajax_info['param']['fax']))
          {
              $this->fax = $this->NM_ajax_info['param']['fax'];
          }
          if (isset($this->NM_ajax_info['param']['id']))
          {
              $this->id = $this->NM_ajax_info['param']['id'];
          }
          if (isset($this->NM_ajax_info['param']['kfh']))
          {
              $this->kfh = $this->NM_ajax_info['param']['kfh'];
          }
          if (isset($this->NM_ajax_info['param']['lxr']))
          {
              $this->lxr = $this->NM_ajax_info['param']['lxr'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['postcode']))
          {
              $this->postcode = $this->NM_ajax_info['param']['postcode'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['wzqd']))
          {
              $this->wzqd = $this->NM_ajax_info['param']['wzqd'];
          }
          if (isset($this->NM_ajax_info['param']['wzqd_limpa']))
          {
              $this->wzqd_limpa = $this->NM_ajax_info['param']['wzqd_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['wzqd_salva']))
          {
              $this->wzqd_salva = $this->NM_ajax_info['param']['wzqd_salva'];
          }
          if (isset($this->NM_ajax_info['param']['wzqd_ul_name']))
          {
              $this->wzqd_ul_name = $this->NM_ajax_info['param']['wzqd_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['wzqd_ul_type']))
          {
              $this->wzqd_ul_type = $this->NM_ajax_info['param']['wzqd_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['xcjssj']))
          {
              $this->xcjssj = $this->NM_ajax_info['param']['xcjssj'];
          }
          if (isset($this->NM_ajax_info['param']['xckssj']))
          {
              $this->xckssj = $this->NM_ajax_info['param']['xckssj'];
          }
          if (isset($this->NM_ajax_info['param']['xmsm']))
          {
              $this->xmsm = $this->NM_ajax_info['param']['xmsm'];
          }
          if (isset($this->NM_ajax_info['param']['ybqy']))
          {
              $this->ybqy = $this->NM_ajax_info['param']['ybqy'];
          }
          if (isset($this->NM_ajax_info['param']['yddh']))
          {
              $this->yddh = $this->NM_ajax_info['param']['yddh'];
          }
          if (isset($this->NM_ajax_info['param']['yhzh']))
          {
              $this->yhzh = $this->NM_ajax_info['param']['yhzh'];
          }
          if (isset($this->NM_ajax_info['param']['zbfile']))
          {
              $this->zbfile = $this->NM_ajax_info['param']['zbfile'];
          }
          if (isset($this->NM_ajax_info['param']['zbfile_limpa']))
          {
              $this->zbfile_limpa = $this->NM_ajax_info['param']['zbfile_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['zbfile_salva']))
          {
              $this->zbfile_salva = $this->NM_ajax_info['param']['zbfile_salva'];
          }
          if (isset($this->NM_ajax_info['param']['zbfile_ul_name']))
          {
              $this->zbfile_ul_name = $this->NM_ajax_info['param']['zbfile_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['zbfile_ul_type']))
          {
              $this->zbfile_ul_type = $this->NM_ajax_info['param']['zbfile_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['zbjssj']))
          {
              $this->zbjssj = $this->NM_ajax_info['param']['zbjssj'];
          }
          if (isset($this->NM_ajax_info['param']['zbkssj']))
          {
              $this->zbkssj = $this->NM_ajax_info['param']['zbkssj'];
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
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
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
                 nm_limpa_str_form_cg_zbgg($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['parms']);
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
          $aDtParts = explode(' ', $this->bskssj);
          $this->bskssj      = $aDtParts[0];
          $this->bskssj_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->bsjssj);
          $this->bsjssj      = $aDtParts[0];
          $this->bsjssj_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->xckssj);
          $this->xckssj      = $aDtParts[0];
          $this->xckssj_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->xcjssj);
          $this->xcjssj      = $aDtParts[0];
          $this->xcjssj_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->zbkssj);
          $this->zbkssj      = $aDtParts[0];
          $this->zbkssj_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->zbjssj);
          $this->zbjssj      = $aDtParts[0];
          $this->zbjssj_hora = $aDtParts[1];
      }
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_cg_zbgg_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("zh_cn");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("zh_cn");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['upload_field_info']['wzqd'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_cg_zbgg',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_file_height' => '',
          'upload_file_width'  => '',
          'upload_file_aspect' => '',
          'upload_file_type'   => 'N0',
      );

      $_SESSION['sc_session'][$script_case_init]['form_cg_zbgg']['upload_field_info']['zbfile'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_cg_zbgg',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_file_height' => '',
          'upload_file_width'  => '',
          'upload_file_aspect' => '',
          'upload_file_type'   => 'N1',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_cg_zbgg']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_cg_zbgg'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_cg_zbgg']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_cg_zbgg']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_cg_zbgg') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_cg_zbgg']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - " . $this->Ini->Nm_lang['lang_tbl_cg_zbgg'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_cg_zbgg")
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
      $this->nm_new_label['cgbbh'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . '';
      $this->nm_new_label['cgbmc'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbmc'] . '';
      $this->nm_new_label['cgfs'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgfs'] . '';
      $this->nm_new_label['bzj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bzj'] . '';
      $this->nm_new_label['bskssj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . '';
      $this->nm_new_label['bsjssj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . '';
      $this->nm_new_label['bsf'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsf'] . '';
      $this->nm_new_label['xckssj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . '';
      $this->nm_new_label['xcjssj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . '';
      $this->nm_new_label['wzqd'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . '';
      $this->nm_new_label['zbkssj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . '';
      $this->nm_new_label['zbjssj'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . '';
      $this->nm_new_label['zbfile'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . '';
      $this->nm_new_label['lxr'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_lxr'] . '';
      $this->nm_new_label['bgdh'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bgdh'] . '';
      $this->nm_new_label['yddh'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yddh'] . '';
      $this->nm_new_label['fax'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_fax'] . '';
      $this->nm_new_label['email'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_email'] . '';
      $this->nm_new_label['postcode'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_postcode'] . '';
      $this->nm_new_label['dz'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_dz'] . '';
      $this->nm_new_label['kfh'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_kfh'] . '';
      $this->nm_new_label['yhzh'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yhzh'] . '';
      $this->nm_new_label['ybqy'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_ybqy'] . '';
      $this->nm_new_label['xmsm'] = '' . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xmsm'] . '';

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
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);



      $_SESSION['scriptcase']['error_icon']['form_cg_zbgg']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_cg_zbgg'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['wzqd_ul_name']) && '' != $this->NM_ajax_info['param']['wzqd_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->wzqd_ul_name]))
          {
              $this->NM_ajax_info['param']['wzqd_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->wzqd_ul_name];
          }
          $this->wzqd = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['wzqd_ul_name'];
          $this->wzqd_scfile_name = substr($this->NM_ajax_info['param']['wzqd_ul_name'], 12);
          $this->wzqd_scfile_type = $this->NM_ajax_info['param']['wzqd_ul_type'];
          $this->wzqd_ul_name = $this->NM_ajax_info['param']['wzqd_ul_name'];
          $this->wzqd_ul_type = $this->NM_ajax_info['param']['wzqd_ul_type'];
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->wzqd             = sc_convert_encoding($this->wzqd,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->wzqd_scfile_name = sc_convert_encoding($this->wzqd_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->wzqd_ul_name     = sc_convert_encoding($this->wzqd_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      elseif (isset($this->wzqd_ul_name) && '' != $this->wzqd_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->wzqd_ul_name]))
          {
              $this->wzqd_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->wzqd_ul_name];
          }
          $this->wzqd = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->wzqd_ul_name;
          $this->wzqd_scfile_name = substr($this->wzqd_ul_name, 12);
          $this->wzqd_scfile_type = $this->wzqd_ul_type;
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->wzqd             = sc_convert_encoding($this->wzqd,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->wzqd_scfile_name = sc_convert_encoding($this->wzqd_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->wzqd_ul_name     = sc_convert_encoding($this->wzqd_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      if (isset($this->NM_ajax_info['param']['zbfile_ul_name']) && '' != $this->NM_ajax_info['param']['zbfile_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->zbfile_ul_name]))
          {
              $this->NM_ajax_info['param']['zbfile_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->zbfile_ul_name];
          }
          $this->zbfile = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['zbfile_ul_name'];
          $this->zbfile_scfile_name = substr($this->NM_ajax_info['param']['zbfile_ul_name'], 12);
          $this->zbfile_scfile_type = $this->NM_ajax_info['param']['zbfile_ul_type'];
          $this->zbfile_ul_name = $this->NM_ajax_info['param']['zbfile_ul_name'];
          $this->zbfile_ul_type = $this->NM_ajax_info['param']['zbfile_ul_type'];
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->zbfile             = sc_convert_encoding($this->zbfile,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->zbfile_scfile_name = sc_convert_encoding($this->zbfile_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->zbfile_ul_name     = sc_convert_encoding($this->zbfile_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      elseif (isset($this->zbfile_ul_name) && '' != $this->zbfile_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->zbfile_ul_name]))
          {
              $this->zbfile_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_field_ul_name'][$this->zbfile_ul_name];
          }
          $this->zbfile = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->zbfile_ul_name;
          $this->zbfile_scfile_name = substr($this->zbfile_ul_name, 12);
          $this->zbfile_scfile_type = $this->zbfile_ul_type;
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->zbfile             = sc_convert_encoding($this->zbfile,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->zbfile_scfile_name = sc_convert_encoding($this->zbfile_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->zbfile_ul_name     = sc_convert_encoding($this->zbfile_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "on";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_cg_zbgg']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_form'];
          if (!isset($this->id)){$this->id = $this->nmgp_dados_form['id'];} 
          if (!isset($this->shsj)){$this->shsj = $this->nmgp_dados_form['shsj'];} 
          if (!isset($this->shzt)){$this->shzt = $this->nmgp_dados_form['shzt'];} 
          if (!isset($this->sfjs)){$this->sfjs = $this->nmgp_dados_form['sfjs'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_cg_zbgg", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
              include_once($this->Ini->path_embutida . 'form_cg_zbgg/form_cg_zbgg_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_cg_zbgg_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_cg_zbgg_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_cg_zbgg_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_cg_zbgg/form_cg_zbgg_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_cg_zbgg_erro.class.php"); 
      }
      $this->Erro      = new form_cg_zbgg_erro();
      $this->Erro->Ini = $this->Ini;
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao']))
         { 
             if ($this->id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_cg_zbgg']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      if (isset($this->cgbbh)) { $this->nm_limpa_alfa($this->cgbbh); }
      if (isset($this->cgbmc)) { $this->nm_limpa_alfa($this->cgbmc); }
      if (isset($this->cgfs)) { $this->nm_limpa_alfa($this->cgfs); }
      if (isset($this->bzj)) { $this->nm_limpa_alfa($this->bzj); }
      if (isset($this->bsf)) { $this->nm_limpa_alfa($this->bsf); }
      if (isset($this->lxr)) { $this->nm_limpa_alfa($this->lxr); }
      if (isset($this->bgdh)) { $this->nm_limpa_alfa($this->bgdh); }
      if (isset($this->yddh)) { $this->nm_limpa_alfa($this->yddh); }
      if (isset($this->fax)) { $this->nm_limpa_alfa($this->fax); }
      if (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
      if (isset($this->postcode)) { $this->nm_limpa_alfa($this->postcode); }
      if (isset($this->dz)) { $this->nm_limpa_alfa($this->dz); }
      if (isset($this->kfh)) { $this->nm_limpa_alfa($this->kfh); }
      if (isset($this->yhzh)) { $this->nm_limpa_alfa($this->yhzh); }
      if (isset($this->ybqy)) { $this->nm_limpa_alfa($this->ybqy); }
      if (isset($this->xmsm)) { $this->nm_limpa_alfa($this->xmsm); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- bzj
      $this->field_config['bzj']               = array();
      $this->field_config['bzj']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['bzj']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['bzj']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['bzj']['symbol_mon'] = '';
      $this->field_config['bzj']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['bzj']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- bskssj
      $this->field_config['bskssj']                 = array();
      $this->field_config['bskssj']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['bskssj']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['bskssj']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['bskssj']['date_display'] = "ddmmaaaa;hhii";
      $this->new_date_format('DH', 'bskssj');
      //-- bsjssj
      $this->field_config['bsjssj']                 = array();
      $this->field_config['bsjssj']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['bsjssj']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['bsjssj']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['bsjssj']['date_display'] = "ddmmaaaa;hhii";
      $this->new_date_format('DH', 'bsjssj');
      //-- bsf
      $this->field_config['bsf']               = array();
      $this->field_config['bsf']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['bsf']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['bsf']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['bsf']['symbol_mon'] = '';
      $this->field_config['bsf']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['bsf']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- xckssj
      $this->field_config['xckssj']                 = array();
      $this->field_config['xckssj']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['xckssj']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['xckssj']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['xckssj']['date_display'] = "ddmmaaaa;hhii";
      $this->new_date_format('DH', 'xckssj');
      //-- xcjssj
      $this->field_config['xcjssj']                 = array();
      $this->field_config['xcjssj']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['xcjssj']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['xcjssj']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['xcjssj']['date_display'] = "ddmmaaaa;hhii";
      $this->new_date_format('DH', 'xcjssj');
      //-- zbkssj
      $this->field_config['zbkssj']                 = array();
      $this->field_config['zbkssj']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['zbkssj']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['zbkssj']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['zbkssj']['date_display'] = "ddmmaaaa;hhii";
      $this->new_date_format('DH', 'zbkssj');
      //-- zbjssj
      $this->field_config['zbjssj']                 = array();
      $this->field_config['zbjssj']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['zbjssj']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['zbjssj']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['zbjssj']['date_display'] = "ddmmaaaa;hhii";
      $this->new_date_format('DH', 'zbjssj');
      //-- id
      $this->field_config['id']               = array();
      $this->field_config['id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id']['symbol_dec'] = '';
      $this->field_config['id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Gera_log_access'] = false;
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

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_cgbbh' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cgbbh');
          }
          if ('validate_cgbmc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cgbmc');
          }
          if ('validate_cgfs' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cgfs');
          }
          if ('validate_bzj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bzj');
          }
          if ('validate_bskssj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bskssj');
          }
          if ('validate_bsjssj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bsjssj');
          }
          if ('validate_bsf' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bsf');
          }
          if ('validate_wzqd' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'wzqd');
          }
          if ('validate_xckssj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'xckssj');
          }
          if ('validate_xcjssj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'xcjssj');
          }
          if ('validate_zbkssj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'zbkssj');
          }
          if ('validate_zbjssj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'zbjssj');
          }
          if ('validate_zbfile' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'zbfile');
          }
          if ('validate_lxr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lxr');
          }
          if ('validate_bgdh' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bgdh');
          }
          if ('validate_yddh' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'yddh');
          }
          if ('validate_fax' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fax');
          }
          if ('validate_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email');
          }
          if ('validate_postcode' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'postcode');
          }
          if ('validate_dz' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dz');
          }
          if ('validate_kfh' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'kfh');
          }
          if ('validate_yhzh' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'yhzh');
          }
          if ('validate_ybqy' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ybqy');
          }
          if ('validate_xmsm' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'xmsm');
          }
          form_cg_zbgg_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_cgbbh_onchange' == $this->NM_ajax_opcao)
          {
              $this->cgbbh_onChange();
          }
          if ('event_lxr_onchange' == $this->NM_ajax_opcao)
          {
              $this->lxr_onChange();
          }
          form_cg_zbgg_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (!empty($this->ybqy))
          {
              $this->ybqy = explode("@?@", $this->ybqy);
          }
          if (is_array($this->ybqy))
          {
              $x = 0; 
              $this->ybqy_1 = $this->ybqy;
              $this->ybqy = ""; 
              if ($this->ybqy_1 != "") 
              { 
                  foreach ($this->ybqy_1 as $dados_ybqy_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->ybqy .= ";";
                      } 
                      $this->ybqy .= $dados_ybqy_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_cg_zbgg_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_cg_zbgg']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_cg_zbgg_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
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
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_cg_zbgg_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_cg_zbgg_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
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
       if ($this->SC_log_atv)
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date1'];
       }
       $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       $usr = isset($_SESSION['usr_login']) ? $_SESSION['usr_login'] : "";
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_cg_zbgg', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_cg_zbgg', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_cg_zbgg_pack_ajax_response();
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
           case 'cgbbh':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . "";
               break;
           case 'cgbmc':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbmc'] . "";
               break;
           case 'cgfs':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgfs'] . "";
               break;
           case 'bzj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bzj'] . "";
               break;
           case 'bskssj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "";
               break;
           case 'bsjssj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "";
               break;
           case 'bsf':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsf'] . "";
               break;
           case 'wzqd':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . "";
               break;
           case 'xckssj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "";
               break;
           case 'xcjssj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "";
               break;
           case 'zbkssj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "";
               break;
           case 'zbjssj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "";
               break;
           case 'zbfile':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . "";
               break;
           case 'lxr':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_lxr'] . "";
               break;
           case 'bgdh':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bgdh'] . "";
               break;
           case 'yddh':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yddh'] . "";
               break;
           case 'fax':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_fax'] . "";
               break;
           case 'email':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_email'] . "";
               break;
           case 'postcode':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_postcode'] . "";
               break;
           case 'dz':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_dz'] . "";
               break;
           case 'kfh':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_kfh'] . "";
               break;
           case 'yhzh':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yhzh'] . "";
               break;
           case 'ybqy':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_ybqy'] . "";
               break;
           case 'xmsm':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xmsm'] . "";
               break;
           case 'id':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_id'] . "";
               break;
           case 'shsj':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_shsj'] . "";
               break;
           case 'shzt':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_shzt'] . "";
               break;
           case 'sfjs':
               return "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_sfjs'] . "";
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
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_cg_zbgg']) || !is_array($this->NM_ajax_info['errList']['geral_form_cg_zbgg']))
              {
                  $this->NM_ajax_info['errList']['geral_form_cg_zbgg'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_cg_zbgg'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'cgbbh' == $filtro)
        $this->ValidateField_cgbbh($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cgbmc' == $filtro)
        $this->ValidateField_cgbmc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cgfs' == $filtro)
        $this->ValidateField_cgfs($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bzj' == $filtro)
        $this->ValidateField_bzj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bskssj' == $filtro)
        $this->ValidateField_bskssj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bsjssj' == $filtro)
        $this->ValidateField_bsjssj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bsf' == $filtro)
        $this->ValidateField_bsf($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'wzqd' == $filtro)
        $this->ValidateField_wzqd($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'xckssj' == $filtro)
        $this->ValidateField_xckssj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'xcjssj' == $filtro)
        $this->ValidateField_xcjssj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'zbkssj' == $filtro)
        $this->ValidateField_zbkssj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'zbjssj' == $filtro)
        $this->ValidateField_zbjssj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'zbfile' == $filtro)
        $this->ValidateField_zbfile($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'lxr' == $filtro)
        $this->ValidateField_lxr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bgdh' == $filtro)
        $this->ValidateField_bgdh($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'yddh' == $filtro)
        $this->ValidateField_yddh($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fax' == $filtro)
        $this->ValidateField_fax($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'email' == $filtro)
        $this->ValidateField_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'postcode' == $filtro)
        $this->ValidateField_postcode($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dz' == $filtro)
        $this->ValidateField_dz($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'kfh' == $filtro)
        $this->ValidateField_kfh($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'yhzh' == $filtro)
        $this->ValidateField_yhzh($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ybqy' == $filtro)
        $this->ValidateField_ybqy($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'xmsm' == $filtro)
        $this->ValidateField_xmsm($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
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

    function ValidateField_cgbbh(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['cgbbh']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['cgbbh'] == "on")) 
      { 
          if ($this->cgbbh == "")  
          { 
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . "" ; 
              if (!isset($Campos_Erros['cgbbh']))
              {
                  $Campos_Erros['cgbbh'] = array();
              }
              $Campos_Erros['cgbbh'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cgbbh']) || !is_array($this->NM_ajax_info['errList']['cgbbh']))
                  {
                      $this->NM_ajax_info['errList']['cgbbh'] = array();
                  }
                  $this->NM_ajax_info['errList']['cgbbh'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cgbbh) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cgbbh']))
              {
                  $Campos_Erros['cgbbh'] = array();
              }
              $Campos_Erros['cgbbh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cgbbh']) || !is_array($this->NM_ajax_info['errList']['cgbbh']))
              {
                  $this->NM_ajax_info['errList']['cgbbh'] = array();
              }
              $this->NM_ajax_info['errList']['cgbbh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cgbbh

    function ValidateField_cgbmc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['cgbmc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['cgbmc'] == "on")) 
      { 
          if ($this->cgbmc == "")  
          { 
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbmc'] . "" ; 
              if (!isset($Campos_Erros['cgbmc']))
              {
                  $Campos_Erros['cgbmc'] = array();
              }
              $Campos_Erros['cgbmc'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cgbmc']) || !is_array($this->NM_ajax_info['errList']['cgbmc']))
                  {
                      $this->NM_ajax_info['errList']['cgbmc'] = array();
                  }
                  $this->NM_ajax_info['errList']['cgbmc'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cgbmc) > 64) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbmc'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cgbmc']))
              {
                  $Campos_Erros['cgbmc'] = array();
              }
              $Campos_Erros['cgbmc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cgbmc']) || !is_array($this->NM_ajax_info['errList']['cgbmc']))
              {
                  $this->NM_ajax_info['errList']['cgbmc'] = array();
              }
              $this->NM_ajax_info['errList']['cgbmc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 64 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cgbmc

    function ValidateField_cgfs(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['cgfs']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['cgfs'] == "on")) 
      { 
          if ($this->cgfs == "")  
          { 
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgfs'] . "" ; 
              if (!isset($Campos_Erros['cgfs']))
              {
                  $Campos_Erros['cgfs'] = array();
              }
              $Campos_Erros['cgfs'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cgfs']) || !is_array($this->NM_ajax_info['errList']['cgfs']))
                  {
                      $this->NM_ajax_info['errList']['cgfs'] = array();
                  }
                  $this->NM_ajax_info['errList']['cgfs'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cgfs) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgfs'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cgfs']))
              {
                  $Campos_Erros['cgfs'] = array();
              }
              $Campos_Erros['cgfs'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cgfs']) || !is_array($this->NM_ajax_info['errList']['cgfs']))
              {
                  $this->NM_ajax_info['errList']['cgfs'] = array();
              }
              $this->NM_ajax_info['errList']['cgfs'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cgfs

    function ValidateField_bzj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->bzj == "")  
      { 
          $this->bzj = 0;
          $this->sc_force_zero[] = 'bzj';
      } 
      if (!empty($this->field_config['bzj']['symbol_dec']))
      {
          $this->sc_remove_currency($this->bzj, $this->field_config['bzj']['symbol_dec'], $this->field_config['bzj']['symbol_grp'], $this->field_config['bzj']['symbol_mon']); 
          nm_limpa_valor($this->bzj, $this->field_config['bzj']['symbol_dec'], $this->field_config['bzj']['symbol_grp']) ; 
          if ('.' == substr($this->bzj, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->bzj, 1)))
              {
                  $this->bzj = '';
              }
              else
              {
                  $this->bzj = '0' . $this->bzj;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->bzj != '')  
          { 
              $iTestSize = 7;
              if (strlen($this->bzj) > $iTestSize)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bzj'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['bzj']))
                  {
                      $Campos_Erros['bzj'] = array();
                  }
                  $Campos_Erros['bzj'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['bzj']) || !is_array($this->NM_ajax_info['errList']['bzj']))
                  {
                      $this->NM_ajax_info['errList']['bzj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bzj'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->bzj, 6, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bzj'] . "; " ; 
                  if (!isset($Campos_Erros['bzj']))
                  {
                      $Campos_Erros['bzj'] = array();
                  }
                  $Campos_Erros['bzj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bzj']) || !is_array($this->NM_ajax_info['errList']['bzj']))
                  {
                      $this->NM_ajax_info['errList']['bzj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bzj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_bzj

    function ValidateField_bskssj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->bskssj, $this->field_config['bskssj']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['bskssj']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['bskssj']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['bskssj']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['bskssj']['date_sep']) ; 
          if (trim($this->bskssj) != "")  
          { 
              if ($teste_validade->Data($this->bskssj, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "; " ; 
                  if (!isset($Campos_Erros['bskssj']))
                  {
                      $Campos_Erros['bskssj'] = array();
                  }
                  $Campos_Erros['bskssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bskssj']) || !is_array($this->NM_ajax_info['errList']['bskssj']))
                  {
                      $this->NM_ajax_info['errList']['bskssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bskssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_bskssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bskssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bskssj'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "" ; 
              if (!isset($Campos_Erros['bskssj']))
              {
                  $Campos_Erros['bskssj'] = array();
              }
              $Campos_Erros['bskssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['bskssj']) || !is_array($this->NM_ajax_info['errList']['bskssj']))
                  {
                      $this->NM_ajax_info['errList']['bskssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bskssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['bskssj']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->bskssj_hora, $this->field_config['bskssj_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['bskssj_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['bskssj_hora']['time_sep']) ; 
          if (trim($this->bskssj_hora) != "")  
          { 
              if ($teste_validade->Hora($this->bskssj_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "; " ; 
                  if (!isset($Campos_Erros['bskssj_hora']))
                  {
                      $Campos_Erros['bskssj_hora'] = array();
                  }
                  $Campos_Erros['bskssj_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bskssj']) || !is_array($this->NM_ajax_info['errList']['bskssj']))
                  {
                      $this->NM_ajax_info['errList']['bskssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bskssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_bskssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bskssj_hora']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bskssj_hora'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bskssj'] . "" ; 
              if (!isset($Campos_Erros['bskssj_hora']))
              {
                  $Campos_Erros['bskssj_hora'] = array();
              }
              $Campos_Erros['bskssj_hora'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['bskssj']) || !is_array($this->NM_ajax_info['errList']['bskssj']))
                  {
                      $this->NM_ajax_info['errList']['bskssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bskssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
      if (isset($Campos_Erros['bskssj']) && isset($Campos_Erros['bskssj_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['bskssj'], $Campos_Erros['bskssj_hora']);
          if (empty($Campos_Erros['bskssj_hora']))
          {
              unset($Campos_Erros['bskssj_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['bskssj']))
          {
              $this->NM_ajax_info['errList']['bskssj'] = array_unique($this->NM_ajax_info['errList']['bskssj']);
          }
      }
    } // ValidateField_bskssj_hora

    function ValidateField_bsjssj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->bsjssj, $this->field_config['bsjssj']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['bsjssj']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['bsjssj']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['bsjssj']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['bsjssj']['date_sep']) ; 
          if (trim($this->bsjssj) != "")  
          { 
              if ($teste_validade->Data($this->bsjssj, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "; " ; 
                  if (!isset($Campos_Erros['bsjssj']))
                  {
                      $Campos_Erros['bsjssj'] = array();
                  }
                  $Campos_Erros['bsjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bsjssj']) || !is_array($this->NM_ajax_info['errList']['bsjssj']))
                  {
                      $this->NM_ajax_info['errList']['bsjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bsjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_bsjssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bsjssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bsjssj'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "" ; 
              if (!isset($Campos_Erros['bsjssj']))
              {
                  $Campos_Erros['bsjssj'] = array();
              }
              $Campos_Erros['bsjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['bsjssj']) || !is_array($this->NM_ajax_info['errList']['bsjssj']))
                  {
                      $this->NM_ajax_info['errList']['bsjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bsjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['bsjssj']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->bsjssj_hora, $this->field_config['bsjssj_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['bsjssj_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['bsjssj_hora']['time_sep']) ; 
          if (trim($this->bsjssj_hora) != "")  
          { 
              if ($teste_validade->Hora($this->bsjssj_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "; " ; 
                  if (!isset($Campos_Erros['bsjssj_hora']))
                  {
                      $Campos_Erros['bsjssj_hora'] = array();
                  }
                  $Campos_Erros['bsjssj_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bsjssj']) || !is_array($this->NM_ajax_info['errList']['bsjssj']))
                  {
                      $this->NM_ajax_info['errList']['bsjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bsjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_bsjssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bsjssj_hora']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['bsjssj_hora'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsjssj'] . "" ; 
              if (!isset($Campos_Erros['bsjssj_hora']))
              {
                  $Campos_Erros['bsjssj_hora'] = array();
              }
              $Campos_Erros['bsjssj_hora'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['bsjssj']) || !is_array($this->NM_ajax_info['errList']['bsjssj']))
                  {
                      $this->NM_ajax_info['errList']['bsjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['bsjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
      if (isset($Campos_Erros['bsjssj']) && isset($Campos_Erros['bsjssj_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['bsjssj'], $Campos_Erros['bsjssj_hora']);
          if (empty($Campos_Erros['bsjssj_hora']))
          {
              unset($Campos_Erros['bsjssj_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['bsjssj']))
          {
              $this->NM_ajax_info['errList']['bsjssj'] = array_unique($this->NM_ajax_info['errList']['bsjssj']);
          }
      }
    } // ValidateField_bsjssj_hora

    function ValidateField_bsf(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->bsf == "")  
      { 
          $this->bsf = 0;
          $this->sc_force_zero[] = 'bsf';
      } 
      if (!empty($this->field_config['bsf']['symbol_dec']))
      {
          $this->sc_remove_currency($this->bsf, $this->field_config['bsf']['symbol_dec'], $this->field_config['bsf']['symbol_grp'], $this->field_config['bsf']['symbol_mon']); 
          nm_limpa_valor($this->bsf, $this->field_config['bsf']['symbol_dec'], $this->field_config['bsf']['symbol_grp']) ; 
          if ('.' == substr($this->bsf, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->bsf, 1)))
              {
                  $this->bsf = '';
              }
              else
              {
                  $this->bsf = '0' . $this->bsf;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->bsf != '')  
          { 
              $iTestSize = 7;
              if (strlen($this->bsf) > $iTestSize)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsf'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['bsf']))
                  {
                      $Campos_Erros['bsf'] = array();
                  }
                  $Campos_Erros['bsf'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['bsf']) || !is_array($this->NM_ajax_info['errList']['bsf']))
                  {
                      $this->NM_ajax_info['errList']['bsf'] = array();
                  }
                  $this->NM_ajax_info['errList']['bsf'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->bsf, 6, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bsf'] . "; " ; 
                  if (!isset($Campos_Erros['bsf']))
                  {
                      $Campos_Erros['bsf'] = array();
                  }
                  $Campos_Erros['bsf'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['bsf']) || !is_array($this->NM_ajax_info['errList']['bsf']))
                  {
                      $this->NM_ajax_info['errList']['bsf'] = array();
                  }
                  $this->NM_ajax_info['errList']['bsf'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_bsf

    function ValidateField_wzqd(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->wzqd;
            if (!function_exists('sc_upload_unprotect_chars'))
            {
                include_once 'form_cg_zbgg_doc_name.php';
            }
            $this->wzqd = sc_upload_unprotect_chars($this->wzqd);
            $this->wzqd_scfile_name = sc_upload_unprotect_chars($this->wzqd_scfile_name);
            if ("" != $this->wzqd && "S" != $this->wzqd_limpa && !$teste_validade->ArqExtensao($this->wzqd, array()))
            {
                $Campos_Crit .= "{lang_cg_zbgg_fld_wzqd}: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['wzqd']))
                {
                    $Campos_Erros['wzqd'] = array();
                }
                $Campos_Erros['wzqd'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['wzqd']) || !is_array($this->NM_ajax_info['errList']['wzqd']))
                {
                    $this->NM_ajax_info['errList']['wzqd'] = array();
                }
                $this->NM_ajax_info['errList']['wzqd'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_wzqd

    function ValidateField_xckssj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->xckssj, $this->field_config['xckssj']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['xckssj']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['xckssj']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['xckssj']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['xckssj']['date_sep']) ; 
          if (trim($this->xckssj) != "")  
          { 
              if ($teste_validade->Data($this->xckssj, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "; " ; 
                  if (!isset($Campos_Erros['xckssj']))
                  {
                      $Campos_Erros['xckssj'] = array();
                  }
                  $Campos_Erros['xckssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['xckssj']) || !is_array($this->NM_ajax_info['errList']['xckssj']))
                  {
                      $this->NM_ajax_info['errList']['xckssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xckssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_xckssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xckssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xckssj'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "" ; 
              if (!isset($Campos_Erros['xckssj']))
              {
                  $Campos_Erros['xckssj'] = array();
              }
              $Campos_Erros['xckssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['xckssj']) || !is_array($this->NM_ajax_info['errList']['xckssj']))
                  {
                      $this->NM_ajax_info['errList']['xckssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xckssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['xckssj']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->xckssj_hora, $this->field_config['xckssj_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['xckssj_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['xckssj_hora']['time_sep']) ; 
          if (trim($this->xckssj_hora) != "")  
          { 
              if ($teste_validade->Hora($this->xckssj_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "; " ; 
                  if (!isset($Campos_Erros['xckssj_hora']))
                  {
                      $Campos_Erros['xckssj_hora'] = array();
                  }
                  $Campos_Erros['xckssj_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['xckssj']) || !is_array($this->NM_ajax_info['errList']['xckssj']))
                  {
                      $this->NM_ajax_info['errList']['xckssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xckssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_xckssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xckssj_hora']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xckssj_hora'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xckssj'] . "" ; 
              if (!isset($Campos_Erros['xckssj_hora']))
              {
                  $Campos_Erros['xckssj_hora'] = array();
              }
              $Campos_Erros['xckssj_hora'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['xckssj']) || !is_array($this->NM_ajax_info['errList']['xckssj']))
                  {
                      $this->NM_ajax_info['errList']['xckssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xckssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
      if (isset($Campos_Erros['xckssj']) && isset($Campos_Erros['xckssj_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['xckssj'], $Campos_Erros['xckssj_hora']);
          if (empty($Campos_Erros['xckssj_hora']))
          {
              unset($Campos_Erros['xckssj_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['xckssj']))
          {
              $this->NM_ajax_info['errList']['xckssj'] = array_unique($this->NM_ajax_info['errList']['xckssj']);
          }
      }
    } // ValidateField_xckssj_hora

    function ValidateField_xcjssj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->xcjssj, $this->field_config['xcjssj']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['xcjssj']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['xcjssj']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['xcjssj']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['xcjssj']['date_sep']) ; 
          if (trim($this->xcjssj) != "")  
          { 
              if ($teste_validade->Data($this->xcjssj, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "; " ; 
                  if (!isset($Campos_Erros['xcjssj']))
                  {
                      $Campos_Erros['xcjssj'] = array();
                  }
                  $Campos_Erros['xcjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['xcjssj']) || !is_array($this->NM_ajax_info['errList']['xcjssj']))
                  {
                      $this->NM_ajax_info['errList']['xcjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xcjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_xcjssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xcjssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xcjssj'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "" ; 
              if (!isset($Campos_Erros['xcjssj']))
              {
                  $Campos_Erros['xcjssj'] = array();
              }
              $Campos_Erros['xcjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['xcjssj']) || !is_array($this->NM_ajax_info['errList']['xcjssj']))
                  {
                      $this->NM_ajax_info['errList']['xcjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xcjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['xcjssj']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->xcjssj_hora, $this->field_config['xcjssj_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['xcjssj_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['xcjssj_hora']['time_sep']) ; 
          if (trim($this->xcjssj_hora) != "")  
          { 
              if ($teste_validade->Hora($this->xcjssj_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "; " ; 
                  if (!isset($Campos_Erros['xcjssj_hora']))
                  {
                      $Campos_Erros['xcjssj_hora'] = array();
                  }
                  $Campos_Erros['xcjssj_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['xcjssj']) || !is_array($this->NM_ajax_info['errList']['xcjssj']))
                  {
                      $this->NM_ajax_info['errList']['xcjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xcjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_xcjssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xcjssj_hora']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['xcjssj_hora'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xcjssj'] . "" ; 
              if (!isset($Campos_Erros['xcjssj_hora']))
              {
                  $Campos_Erros['xcjssj_hora'] = array();
              }
              $Campos_Erros['xcjssj_hora'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['xcjssj']) || !is_array($this->NM_ajax_info['errList']['xcjssj']))
                  {
                      $this->NM_ajax_info['errList']['xcjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['xcjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
      if (isset($Campos_Erros['xcjssj']) && isset($Campos_Erros['xcjssj_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['xcjssj'], $Campos_Erros['xcjssj_hora']);
          if (empty($Campos_Erros['xcjssj_hora']))
          {
              unset($Campos_Erros['xcjssj_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['xcjssj']))
          {
              $this->NM_ajax_info['errList']['xcjssj'] = array_unique($this->NM_ajax_info['errList']['xcjssj']);
          }
      }
    } // ValidateField_xcjssj_hora

    function ValidateField_zbkssj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->zbkssj, $this->field_config['zbkssj']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['zbkssj']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['zbkssj']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['zbkssj']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['zbkssj']['date_sep']) ; 
          if (trim($this->zbkssj) != "")  
          { 
              if ($teste_validade->Data($this->zbkssj, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "; " ; 
                  if (!isset($Campos_Erros['zbkssj']))
                  {
                      $Campos_Erros['zbkssj'] = array();
                  }
                  $Campos_Erros['zbkssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['zbkssj']) || !is_array($this->NM_ajax_info['errList']['zbkssj']))
                  {
                      $this->NM_ajax_info['errList']['zbkssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbkssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_zbkssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbkssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbkssj'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "" ; 
              if (!isset($Campos_Erros['zbkssj']))
              {
                  $Campos_Erros['zbkssj'] = array();
              }
              $Campos_Erros['zbkssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['zbkssj']) || !is_array($this->NM_ajax_info['errList']['zbkssj']))
                  {
                      $this->NM_ajax_info['errList']['zbkssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbkssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['zbkssj']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->zbkssj_hora, $this->field_config['zbkssj_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['zbkssj_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['zbkssj_hora']['time_sep']) ; 
          if (trim($this->zbkssj_hora) != "")  
          { 
              if ($teste_validade->Hora($this->zbkssj_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "; " ; 
                  if (!isset($Campos_Erros['zbkssj_hora']))
                  {
                      $Campos_Erros['zbkssj_hora'] = array();
                  }
                  $Campos_Erros['zbkssj_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['zbkssj']) || !is_array($this->NM_ajax_info['errList']['zbkssj']))
                  {
                      $this->NM_ajax_info['errList']['zbkssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbkssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_zbkssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbkssj_hora']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbkssj_hora'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbkssj'] . "" ; 
              if (!isset($Campos_Erros['zbkssj_hora']))
              {
                  $Campos_Erros['zbkssj_hora'] = array();
              }
              $Campos_Erros['zbkssj_hora'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['zbkssj']) || !is_array($this->NM_ajax_info['errList']['zbkssj']))
                  {
                      $this->NM_ajax_info['errList']['zbkssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbkssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
      if (isset($Campos_Erros['zbkssj']) && isset($Campos_Erros['zbkssj_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['zbkssj'], $Campos_Erros['zbkssj_hora']);
          if (empty($Campos_Erros['zbkssj_hora']))
          {
              unset($Campos_Erros['zbkssj_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['zbkssj']))
          {
              $this->NM_ajax_info['errList']['zbkssj'] = array_unique($this->NM_ajax_info['errList']['zbkssj']);
          }
      }
    } // ValidateField_zbkssj_hora

    function ValidateField_zbjssj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->zbjssj, $this->field_config['zbjssj']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['zbjssj']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['zbjssj']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['zbjssj']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['zbjssj']['date_sep']) ; 
          if (trim($this->zbjssj) != "")  
          { 
              if ($teste_validade->Data($this->zbjssj, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "; " ; 
                  if (!isset($Campos_Erros['zbjssj']))
                  {
                      $Campos_Erros['zbjssj'] = array();
                  }
                  $Campos_Erros['zbjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['zbjssj']) || !is_array($this->NM_ajax_info['errList']['zbjssj']))
                  {
                      $this->NM_ajax_info['errList']['zbjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_zbjssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbjssj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbjssj'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "" ; 
              if (!isset($Campos_Erros['zbjssj']))
              {
                  $Campos_Erros['zbjssj'] = array();
              }
              $Campos_Erros['zbjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['zbjssj']) || !is_array($this->NM_ajax_info['errList']['zbjssj']))
                  {
                      $this->NM_ajax_info['errList']['zbjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['zbjssj']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->zbjssj_hora, $this->field_config['zbjssj_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['zbjssj_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['zbjssj_hora']['time_sep']) ; 
          if (trim($this->zbjssj_hora) != "")  
          { 
              if ($teste_validade->Hora($this->zbjssj_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "; " ; 
                  if (!isset($Campos_Erros['zbjssj_hora']))
                  {
                      $Campos_Erros['zbjssj_hora'] = array();
                  }
                  $Campos_Erros['zbjssj_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['zbjssj']) || !is_array($this->NM_ajax_info['errList']['zbjssj']))
                  {
                      $this->NM_ajax_info['errList']['zbjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbjssj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_zbjssj' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbjssj_hora']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbjssj_hora'] == "on")) 
           { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbjssj'] . "" ; 
              if (!isset($Campos_Erros['zbjssj_hora']))
              {
                  $Campos_Erros['zbjssj_hora'] = array();
              }
              $Campos_Erros['zbjssj_hora'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['zbjssj']) || !is_array($this->NM_ajax_info['errList']['zbjssj']))
                  {
                      $this->NM_ajax_info['errList']['zbjssj'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbjssj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
      if (isset($Campos_Erros['zbjssj']) && isset($Campos_Erros['zbjssj_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['zbjssj'], $Campos_Erros['zbjssj_hora']);
          if (empty($Campos_Erros['zbjssj_hora']))
          {
              unset($Campos_Erros['zbjssj_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['zbjssj']))
          {
              $this->NM_ajax_info['errList']['zbjssj'] = array_unique($this->NM_ajax_info['errList']['zbjssj']);
          }
      }
    } // ValidateField_zbjssj_hora

    function ValidateField_zbfile(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->zbfile;
            if (!function_exists('sc_upload_unprotect_chars'))
            {
                include_once 'form_cg_zbgg_doc_name.php';
            }
            $this->zbfile = sc_upload_unprotect_chars($this->zbfile);
            $this->zbfile_scfile_name = sc_upload_unprotect_chars($this->zbfile_scfile_name);
            if ("" != $this->zbfile && "S" != $this->zbfile_limpa && !$teste_validade->ArqExtensao($this->zbfile, array()))
            {
                $Campos_Crit .= "{lang_cg_zbgg_fld_zbfile}: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['zbfile']))
                {
                    $Campos_Erros['zbfile'] = array();
                }
                $Campos_Erros['zbfile'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['zbfile']) || !is_array($this->NM_ajax_info['errList']['zbfile']))
                {
                    $this->NM_ajax_info['errList']['zbfile'] = array();
                }
                $this->NM_ajax_info['errList']['zbfile'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_zbfile

    function ValidateField_lxr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['lxr']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['lxr'] == "on")) 
      { 
          if ($this->lxr == "")  
          { 
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_lxr'] . "" ; 
              if (!isset($Campos_Erros['lxr']))
              {
                  $Campos_Erros['lxr'] = array();
              }
              $Campos_Erros['lxr'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['lxr']) || !is_array($this->NM_ajax_info['errList']['lxr']))
                  {
                      $this->NM_ajax_info['errList']['lxr'] = array();
                  }
                  $this->NM_ajax_info['errList']['lxr'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->lxr) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_lxr'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['lxr']))
              {
                  $Campos_Erros['lxr'] = array();
              }
              $Campos_Erros['lxr'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['lxr']) || !is_array($this->NM_ajax_info['errList']['lxr']))
              {
                  $this->NM_ajax_info['errList']['lxr'] = array();
              }
              $this->NM_ajax_info['errList']['lxr'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_lxr

    function ValidateField_bgdh(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bgdh) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_bgdh'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bgdh']))
              {
                  $Campos_Erros['bgdh'] = array();
              }
              $Campos_Erros['bgdh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bgdh']) || !is_array($this->NM_ajax_info['errList']['bgdh']))
              {
                  $this->NM_ajax_info['errList']['bgdh'] = array();
              }
              $this->NM_ajax_info['errList']['bgdh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_bgdh

    function ValidateField_yddh(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['yddh']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['yddh'] == "on")) 
      { 
          if ($this->yddh == "")  
          { 
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yddh'] . "" ; 
              if (!isset($Campos_Erros['yddh']))
              {
                  $Campos_Erros['yddh'] = array();
              }
              $Campos_Erros['yddh'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['yddh']) || !is_array($this->NM_ajax_info['errList']['yddh']))
                  {
                      $this->NM_ajax_info['errList']['yddh'] = array();
                  }
                  $this->NM_ajax_info['errList']['yddh'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->yddh) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yddh'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['yddh']))
              {
                  $Campos_Erros['yddh'] = array();
              }
              $Campos_Erros['yddh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['yddh']) || !is_array($this->NM_ajax_info['errList']['yddh']))
              {
                  $this->NM_ajax_info['errList']['yddh'] = array();
              }
              $this->NM_ajax_info['errList']['yddh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_yddh

    function ValidateField_fax(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fax) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_fax'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fax']))
              {
                  $Campos_Erros['fax'] = array();
              }
              $Campos_Erros['fax'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fax']) || !is_array($this->NM_ajax_info['errList']['fax']))
              {
                  $this->NM_ajax_info['errList']['fax'] = array();
              }
              $this->NM_ajax_info['errList']['fax'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_fax

    function ValidateField_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->email) != "")  
          { 
              if ($teste_validade->Email($this->email) == false)  
              { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_email'] . "; " ; 
                  if (!isset($Campos_Erros['email']))
                  {
                      $Campos_Erros['email'] = array();
                  }
                  $Campos_Erros['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                      {
                          $this->NM_ajax_info['errList']['email'] = array();
                      }
                      $this->NM_ajax_info['errList']['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['email'] == "on") 
          { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_email'] . "" ; 
              if (!isset($Campos_Erros['email']))
              {
                  $Campos_Erros['email'] = array();
              }
              $Campos_Erros['email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                  {
                      $this->NM_ajax_info['errList']['email'] = array();
                  }
                  $this->NM_ajax_info['errList']['email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
    } // ValidateField_email

    function ValidateField_postcode(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->postcode) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_postcode'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['postcode']))
              {
                  $Campos_Erros['postcode'] = array();
              }
              $Campos_Erros['postcode'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['postcode']) || !is_array($this->NM_ajax_info['errList']['postcode']))
              {
                  $this->NM_ajax_info['errList']['postcode'] = array();
              }
              $this->NM_ajax_info['errList']['postcode'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_postcode

    function ValidateField_dz(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dz) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_dz'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dz']))
              {
                  $Campos_Erros['dz'] = array();
              }
              $Campos_Erros['dz'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dz']) || !is_array($this->NM_ajax_info['errList']['dz']))
              {
                  $this->NM_ajax_info['errList']['dz'] = array();
              }
              $this->NM_ajax_info['errList']['dz'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_dz

    function ValidateField_kfh(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->kfh) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh']) && !in_array($this->kfh, $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['kfh']))
                   {
                       $Campos_Erros['kfh'] = array();
                   }
                   $Campos_Erros['kfh'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['kfh']) || !is_array($this->NM_ajax_info['errList']['kfh']))
                   {
                       $this->NM_ajax_info['errList']['kfh'] = array();
                   }
                   $this->NM_ajax_info['errList']['kfh'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_kfh

    function ValidateField_yhzh(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->yhzh) > 32) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_yhzh'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['yhzh']))
              {
                  $Campos_Erros['yhzh'] = array();
              }
              $Campos_Erros['yhzh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['yhzh']) || !is_array($this->NM_ajax_info['errList']['yhzh']))
              {
                  $this->NM_ajax_info['errList']['yhzh'] = array();
              }
              $this->NM_ajax_info['errList']['yhzh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_yhzh

    function ValidateField_ybqy(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if (!empty($this->ybqy))
      {
          $this->ybqy = str_replace('@?@', ';', $this->ybqy);
          $ybqy_SC    = explode(';', $this->ybqy);
          foreach ($ybqy_SC as $cada_cmp_SC)
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy']) && !in_array($cada_cmp_SC, $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy']))
              {
                  $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                  if (!isset($Campos_Erros['ybqy']))
                  {
                      $Campos_Erros['ybqy'] = array();
                  }
                  $Campos_Erros['ybqy'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                  if (!isset($this->NM_ajax_info['errList']['ybqy']) || !is_array($this->NM_ajax_info['errList']['ybqy']))
                  {
                      $this->NM_ajax_info['errList']['ybqy'] = array();
                  }
                  $this->NM_ajax_info['errList']['ybqy'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                  breack;
              }
          }
      }
    } // ValidateField_ybqy

    function ValidateField_xmsm(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->xmsm) > 32767) 
          { 
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_xmsm'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['xmsm']))
              {
                  $Campos_Erros['xmsm'] = array();
              }
              $Campos_Erros['xmsm'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['xmsm']) || !is_array($this->NM_ajax_info['errList']['xmsm']))
              {
                  $this->NM_ajax_info['errList']['xmsm'] = array();
              }
              $this->NM_ajax_info['errList']['xmsm'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_xmsm
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros) 
   {
     global $nm_browser;
     if (!empty($Campos_Crit) || !empty($Campos_Falta))
     {
          return;
     }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nmgp_opcao == "incluir" && ($this->wzqd == "none" || ($this->wzqd == "" && $this->wzqd_salva == "")) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['wzqd']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['wzqd'] == "on")) 
          { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . "" ; 
              if (!isset($Campos_Erros['wzqd']))
              {
                  $Campos_Erros['wzqd'] = array();
              }
              $Campos_Erros['wzqd'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['wzqd']) || !is_array($this->NM_ajax_info['errList']['wzqd']))
                  {
                      $this->NM_ajax_info['errList']['wzqd'] = array();
                  }
                  $this->NM_ajax_info['errList']['wzqd'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
          if ($this->wzqd == "none") 
          { 
              $this->wzqd = ""; 
          } 
          if ($this->wzqd != "") 
          { 
              if (is_file($this->wzqd))  
              { 
                  if ($this->nmgp_opcao == "incluir")
                  { 
                      $this->SC_DOC_wzqd = $this->wzqd;
                  } 
                  else 
                  { 
                      $arq_wzqd = fopen($this->wzqd, "r") ; 
                      $reg_wzqd = fread($arq_wzqd, filesize($this->wzqd)) ; 
                      fclose($arq_wzqd) ;  
                  } 
                  $this->wzqd =  trim($this->wzqd_scfile_name) ;  
                  $dir_doc = $this->Ini->path_doc . "wzqd" . "/"; 
                 if ($this->nmgp_opcao != "incluir")
                 { 
                  if (is_dir($dir_doc))  
                  { 
                      $_test_file = $this->fetchUniqueUploadName($this->wzqd_scfile_name, $dir_doc, "wzqd");
                      if (trim($this->wzqd_scfile_name) != $_test_file)
                      {
                          $this->wzqd_scfile_name = $_test_file;
                          $this->wzqd = $_test_file;
                      }
                      $arq_wzqd = fopen($dir_doc . trim($this->wzqd_scfile_name), "w") ; 
                      fwrite($arq_wzqd, $reg_wzqd) ;  
                      fclose($arq_wzqd) ;  
                  } 
                  else 
                  { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . ": " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                      if (!isset($Campos_Erros['wzqd']))
                      {
                          $Campos_Erros['wzqd'] = array();
                      }
                      $Campos_Erros['wzqd'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      if (!isset($this->NM_ajax_info['errList']['wzqd']) || !is_array($this->NM_ajax_info['errList']['wzqd']))
                      {
                          $this->NM_ajax_info['errList']['wzqd'] = array();
                      }
                      $this->NM_ajax_info['errList']['wzqd'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                  } 
                 } 
              } 
              else 
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . " " . $this->Ini->Nm_lang['lang_errm_upld']; 
                  $this->wzqd = "";
                  if (!isset($Campos_Erros['wzqd']))
                  {
                      $Campos_Erros['wzqd'] = array();
                  }
                  $Campos_Erros['wzqd'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  if (!isset($this->NM_ajax_info['errList']['wzqd']) || !is_array($this->NM_ajax_info['errList']['wzqd']))
                  {
                      $this->NM_ajax_info['errList']['wzqd'] = array();
                  }
                  $this->NM_ajax_info['errList']['wzqd'][] = $this->Ini->Nm_lang['lang_errm_upld'];
              } 
          } 
          elseif (!empty($this->wzqd_salva) && $this->wzqd_limpa != "S")
          {
              $this->wzqd = $this->wzqd_salva;
          }
      } 
      elseif (!empty($this->wzqd_salva) && $this->wzqd_limpa != "S")
      {
          $this->wzqd = $this->wzqd_salva;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nmgp_opcao == "incluir" && ($this->zbfile == "none" || ($this->zbfile == "" && $this->zbfile_salva == "")) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbfile']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['php_cmp_required']['zbfile'] == "on")) 
          { 
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . "" ; 
              if (!isset($Campos_Erros['zbfile']))
              {
                  $Campos_Erros['zbfile'] = array();
              }
              $Campos_Erros['zbfile'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['zbfile']) || !is_array($this->NM_ajax_info['errList']['zbfile']))
                  {
                      $this->NM_ajax_info['errList']['zbfile'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbfile'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
          if ($this->zbfile == "none") 
          { 
              $this->zbfile = ""; 
          } 
          if ($this->zbfile != "") 
          { 
              if (is_file($this->zbfile))  
              { 
                  if ($this->nmgp_opcao == "incluir")
                  { 
                      $this->SC_DOC_zbfile = $this->zbfile;
                  } 
                  else 
                  { 
                      $arq_zbfile = fopen($this->zbfile, "r") ; 
                      $reg_zbfile = fread($arq_zbfile, filesize($this->zbfile)) ; 
                      fclose($arq_zbfile) ;  
                  } 
                  $this->zbfile =  trim($this->zbfile_scfile_name) ;  
                  $dir_doc = $this->Ini->path_doc . "zbfile" . "/"; 
                 if ($this->nmgp_opcao != "incluir")
                 { 
                  if (is_dir($dir_doc))  
                  { 
                      $_test_file = $this->fetchUniqueUploadName($this->zbfile_scfile_name, $dir_doc, "zbfile");
                      if (trim($this->zbfile_scfile_name) != $_test_file)
                      {
                          $this->zbfile_scfile_name = $_test_file;
                          $this->zbfile = $_test_file;
                      }
                      $arq_zbfile = fopen($dir_doc . trim($this->zbfile_scfile_name), "w") ; 
                      fwrite($arq_zbfile, $reg_zbfile) ;  
                      fclose($arq_zbfile) ;  
                  } 
                  else 
                  { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . ": " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                      if (!isset($Campos_Erros['zbfile']))
                      {
                          $Campos_Erros['zbfile'] = array();
                      }
                      $Campos_Erros['zbfile'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      if (!isset($this->NM_ajax_info['errList']['zbfile']) || !is_array($this->NM_ajax_info['errList']['zbfile']))
                      {
                          $this->NM_ajax_info['errList']['zbfile'] = array();
                      }
                      $this->NM_ajax_info['errList']['zbfile'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                  } 
                 } 
              } 
              else 
              { 
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . " " . $this->Ini->Nm_lang['lang_errm_upld']; 
                  $this->zbfile = "";
                  if (!isset($Campos_Erros['zbfile']))
                  {
                      $Campos_Erros['zbfile'] = array();
                  }
                  $Campos_Erros['zbfile'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  if (!isset($this->NM_ajax_info['errList']['zbfile']) || !is_array($this->NM_ajax_info['errList']['zbfile']))
                  {
                      $this->NM_ajax_info['errList']['zbfile'] = array();
                  }
                  $this->NM_ajax_info['errList']['zbfile'][] = $this->Ini->Nm_lang['lang_errm_upld'];
              } 
          } 
          elseif (!empty($this->zbfile_salva) && $this->zbfile_limpa != "S")
          {
              $this->zbfile = $this->zbfile_salva;
          }
      } 
      elseif (!empty($this->zbfile_salva) && $this->zbfile_limpa != "S")
      {
          $this->zbfile = $this->zbfile_salva;
      }
   }

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
    $this->nmgp_dados_form['cgbbh'] = $this->cgbbh;
    $this->nmgp_dados_form['cgbmc'] = $this->cgbmc;
    $this->nmgp_dados_form['cgfs'] = $this->cgfs;
    $this->nmgp_dados_form['bzj'] = $this->bzj;
    $this->nmgp_dados_form['bskssj'] = $this->bskssj;
    $this->nmgp_dados_form['bsjssj'] = $this->bsjssj;
    $this->nmgp_dados_form['bsf'] = $this->bsf;
    if (empty($this->wzqd))
    {
        $this->wzqd = $this->nmgp_dados_form['wzqd'];
    }
    $this->nmgp_dados_form['wzqd'] = $this->wzqd;
    $this->nmgp_dados_form['wzqd_limpa'] = $this->wzqd_limpa;
    $this->nmgp_dados_form['xckssj'] = $this->xckssj;
    $this->nmgp_dados_form['xcjssj'] = $this->xcjssj;
    $this->nmgp_dados_form['zbkssj'] = $this->zbkssj;
    $this->nmgp_dados_form['zbjssj'] = $this->zbjssj;
    if (empty($this->zbfile))
    {
        $this->zbfile = $this->nmgp_dados_form['zbfile'];
    }
    $this->nmgp_dados_form['zbfile'] = $this->zbfile;
    $this->nmgp_dados_form['zbfile_limpa'] = $this->zbfile_limpa;
    $this->nmgp_dados_form['lxr'] = $this->lxr;
    $this->nmgp_dados_form['bgdh'] = $this->bgdh;
    $this->nmgp_dados_form['yddh'] = $this->yddh;
    $this->nmgp_dados_form['fax'] = $this->fax;
    $this->nmgp_dados_form['email'] = $this->email;
    $this->nmgp_dados_form['postcode'] = $this->postcode;
    $this->nmgp_dados_form['dz'] = $this->dz;
    $this->nmgp_dados_form['kfh'] = $this->kfh;
    $this->nmgp_dados_form['yhzh'] = $this->yhzh;
    $this->nmgp_dados_form['ybqy'] = $this->ybqy;
    $this->nmgp_dados_form['xmsm'] = $this->xmsm;
    $this->nmgp_dados_form['id'] = $this->id;
    $this->nmgp_dados_form['shsj'] = $this->shsj;
    $this->nmgp_dados_form['shzt'] = $this->shzt;
    $this->nmgp_dados_form['sfjs'] = $this->sfjs;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      if (!empty($this->field_config['bzj']['symbol_dec']))
      {
         $this->sc_remove_currency($this->bzj, $this->field_config['bzj']['symbol_dec'], $this->field_config['bzj']['symbol_grp'], $this->field_config['bzj']['symbol_mon']);
         nm_limpa_valor($this->bzj, $this->field_config['bzj']['symbol_dec'], $this->field_config['bzj']['symbol_grp']);
      }
      nm_limpa_data($this->bskssj, $this->field_config['bskssj']['date_sep']) ; 
      nm_limpa_hora($this->bskssj_hora, $this->field_config['bskssj']['time_sep']) ; 
      nm_limpa_data($this->bsjssj, $this->field_config['bsjssj']['date_sep']) ; 
      nm_limpa_hora($this->bsjssj_hora, $this->field_config['bsjssj']['time_sep']) ; 
      if (!empty($this->field_config['bsf']['symbol_dec']))
      {
         $this->sc_remove_currency($this->bsf, $this->field_config['bsf']['symbol_dec'], $this->field_config['bsf']['symbol_grp'], $this->field_config['bsf']['symbol_mon']);
         nm_limpa_valor($this->bsf, $this->field_config['bsf']['symbol_dec'], $this->field_config['bsf']['symbol_grp']);
      }
      nm_limpa_data($this->xckssj, $this->field_config['xckssj']['date_sep']) ; 
      nm_limpa_hora($this->xckssj_hora, $this->field_config['xckssj']['time_sep']) ; 
      nm_limpa_data($this->xcjssj, $this->field_config['xcjssj']['date_sep']) ; 
      nm_limpa_hora($this->xcjssj_hora, $this->field_config['xcjssj']['time_sep']) ; 
      nm_limpa_data($this->zbkssj, $this->field_config['zbkssj']['date_sep']) ; 
      nm_limpa_hora($this->zbkssj_hora, $this->field_config['zbkssj']['time_sep']) ; 
      nm_limpa_data($this->zbjssj, $this->field_config['zbjssj']['date_sep']) ; 
      nm_limpa_hora($this->zbjssj_hora, $this->field_config['zbjssj']['time_sep']) ; 
      nm_limpa_numero($this->id, $this->field_config['id']['symbol_grp']) ; 
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
      if ($Nome_Campo == "bzj")
      {
          if (!empty($this->field_config['bzj']['symbol_dec']))
          {
             $this->sc_remove_currency($this->bzj, $this->field_config['bzj']['symbol_dec'], $this->field_config['bzj']['symbol_grp'], $this->field_config['bzj']['symbol_mon']);
             nm_limpa_valor($this->bzj, $this->field_config['bzj']['symbol_dec'], $this->field_config['bzj']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "bsf")
      {
          if (!empty($this->field_config['bsf']['symbol_dec']))
          {
             $this->sc_remove_currency($this->bsf, $this->field_config['bsf']['symbol_dec'], $this->field_config['bsf']['symbol_grp'], $this->field_config['bsf']['symbol_mon']);
             nm_limpa_valor($this->bsf, $this->field_config['bsf']['symbol_dec'], $this->field_config['bsf']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "id")
      {
          nm_limpa_numero($this->id, $this->field_config['id']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if (!empty($this->bzj) || (!empty($format_fields) && isset($format_fields['bzj'])))
      {
          nmgp_Form_Num_Val($this->bzj, $this->field_config['bzj']['symbol_grp'], $this->field_config['bzj']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['bzj']['symbol_fmt']) ; 
      }
      if ((!empty($this->bskssj) && 'null' != $this->bskssj) || (!empty($format_fields) && isset($format_fields['bskssj'])))
      {
          $nm_separa_data = strpos($this->field_config['bskssj']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['bskssj']['date_format'];
          $this->field_config['bskssj']['date_format'] = substr($this->field_config['bskssj']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->bskssj, " ") ; 
          $this->bskssj_hora = substr($this->bskssj, $separador + 1) ; 
          $this->bskssj = substr($this->bskssj, 0, $separador) ; 
          nm_volta_data($this->bskssj, $this->field_config['bskssj']['date_format']) ; 
          nmgp_Form_Datas($this->bskssj, $this->field_config['bskssj']['date_format'], $this->field_config['bskssj']['date_sep']) ;  
          $this->field_config['bskssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->bskssj_hora, $this->field_config['bskssj']['date_format']) ; 
          nmgp_Form_Hora($this->bskssj_hora, $this->field_config['bskssj']['date_format'], $this->field_config['bskssj']['time_sep']) ;  
          $this->field_config['bskssj']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->bskssj || '' == $this->bskssj)
      {
          $this->bskssj_hora = '';
          $this->bskssj = '';
      }
      if ((!empty($this->bsjssj) && 'null' != $this->bsjssj) || (!empty($format_fields) && isset($format_fields['bsjssj'])))
      {
          $nm_separa_data = strpos($this->field_config['bsjssj']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['bsjssj']['date_format'];
          $this->field_config['bsjssj']['date_format'] = substr($this->field_config['bsjssj']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->bsjssj, " ") ; 
          $this->bsjssj_hora = substr($this->bsjssj, $separador + 1) ; 
          $this->bsjssj = substr($this->bsjssj, 0, $separador) ; 
          nm_volta_data($this->bsjssj, $this->field_config['bsjssj']['date_format']) ; 
          nmgp_Form_Datas($this->bsjssj, $this->field_config['bsjssj']['date_format'], $this->field_config['bsjssj']['date_sep']) ;  
          $this->field_config['bsjssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->bsjssj_hora, $this->field_config['bsjssj']['date_format']) ; 
          nmgp_Form_Hora($this->bsjssj_hora, $this->field_config['bsjssj']['date_format'], $this->field_config['bsjssj']['time_sep']) ;  
          $this->field_config['bsjssj']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->bsjssj || '' == $this->bsjssj)
      {
          $this->bsjssj_hora = '';
          $this->bsjssj = '';
      }
      if (!empty($this->bsf) || (!empty($format_fields) && isset($format_fields['bsf'])))
      {
          nmgp_Form_Num_Val($this->bsf, $this->field_config['bsf']['symbol_grp'], $this->field_config['bsf']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['bsf']['symbol_fmt']) ; 
      }
      if ((!empty($this->xckssj) && 'null' != $this->xckssj) || (!empty($format_fields) && isset($format_fields['xckssj'])))
      {
          $nm_separa_data = strpos($this->field_config['xckssj']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['xckssj']['date_format'];
          $this->field_config['xckssj']['date_format'] = substr($this->field_config['xckssj']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->xckssj, " ") ; 
          $this->xckssj_hora = substr($this->xckssj, $separador + 1) ; 
          $this->xckssj = substr($this->xckssj, 0, $separador) ; 
          nm_volta_data($this->xckssj, $this->field_config['xckssj']['date_format']) ; 
          nmgp_Form_Datas($this->xckssj, $this->field_config['xckssj']['date_format'], $this->field_config['xckssj']['date_sep']) ;  
          $this->field_config['xckssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->xckssj_hora, $this->field_config['xckssj']['date_format']) ; 
          nmgp_Form_Hora($this->xckssj_hora, $this->field_config['xckssj']['date_format'], $this->field_config['xckssj']['time_sep']) ;  
          $this->field_config['xckssj']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->xckssj || '' == $this->xckssj)
      {
          $this->xckssj_hora = '';
          $this->xckssj = '';
      }
      if ((!empty($this->xcjssj) && 'null' != $this->xcjssj) || (!empty($format_fields) && isset($format_fields['xcjssj'])))
      {
          $nm_separa_data = strpos($this->field_config['xcjssj']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['xcjssj']['date_format'];
          $this->field_config['xcjssj']['date_format'] = substr($this->field_config['xcjssj']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->xcjssj, " ") ; 
          $this->xcjssj_hora = substr($this->xcjssj, $separador + 1) ; 
          $this->xcjssj = substr($this->xcjssj, 0, $separador) ; 
          nm_volta_data($this->xcjssj, $this->field_config['xcjssj']['date_format']) ; 
          nmgp_Form_Datas($this->xcjssj, $this->field_config['xcjssj']['date_format'], $this->field_config['xcjssj']['date_sep']) ;  
          $this->field_config['xcjssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->xcjssj_hora, $this->field_config['xcjssj']['date_format']) ; 
          nmgp_Form_Hora($this->xcjssj_hora, $this->field_config['xcjssj']['date_format'], $this->field_config['xcjssj']['time_sep']) ;  
          $this->field_config['xcjssj']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->xcjssj || '' == $this->xcjssj)
      {
          $this->xcjssj_hora = '';
          $this->xcjssj = '';
      }
      if ((!empty($this->zbkssj) && 'null' != $this->zbkssj) || (!empty($format_fields) && isset($format_fields['zbkssj'])))
      {
          $nm_separa_data = strpos($this->field_config['zbkssj']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['zbkssj']['date_format'];
          $this->field_config['zbkssj']['date_format'] = substr($this->field_config['zbkssj']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->zbkssj, " ") ; 
          $this->zbkssj_hora = substr($this->zbkssj, $separador + 1) ; 
          $this->zbkssj = substr($this->zbkssj, 0, $separador) ; 
          nm_volta_data($this->zbkssj, $this->field_config['zbkssj']['date_format']) ; 
          nmgp_Form_Datas($this->zbkssj, $this->field_config['zbkssj']['date_format'], $this->field_config['zbkssj']['date_sep']) ;  
          $this->field_config['zbkssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->zbkssj_hora, $this->field_config['zbkssj']['date_format']) ; 
          nmgp_Form_Hora($this->zbkssj_hora, $this->field_config['zbkssj']['date_format'], $this->field_config['zbkssj']['time_sep']) ;  
          $this->field_config['zbkssj']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->zbkssj || '' == $this->zbkssj)
      {
          $this->zbkssj_hora = '';
          $this->zbkssj = '';
      }
      if ((!empty($this->zbjssj) && 'null' != $this->zbjssj) || (!empty($format_fields) && isset($format_fields['zbjssj'])))
      {
          $nm_separa_data = strpos($this->field_config['zbjssj']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['zbjssj']['date_format'];
          $this->field_config['zbjssj']['date_format'] = substr($this->field_config['zbjssj']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->zbjssj, " ") ; 
          $this->zbjssj_hora = substr($this->zbjssj, $separador + 1) ; 
          $this->zbjssj = substr($this->zbjssj, 0, $separador) ; 
          nm_volta_data($this->zbjssj, $this->field_config['zbjssj']['date_format']) ; 
          nmgp_Form_Datas($this->zbjssj, $this->field_config['zbjssj']['date_format'], $this->field_config['zbjssj']['date_sep']) ;  
          $this->field_config['zbjssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->zbjssj_hora, $this->field_config['zbjssj']['date_format']) ; 
          nmgp_Form_Hora($this->zbjssj_hora, $this->field_config['zbjssj']['date_format'], $this->field_config['zbjssj']['time_sep']) ;  
          $this->field_config['zbjssj']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->zbjssj || '' == $this->zbjssj)
      {
          $this->zbjssj_hora = '';
          $this->zbjssj = '';
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
      $guarda_format_hora = $this->field_config['bskssj']['date_format'];
      if ($this->bskssj != "")  
      { 
          $nm_separa_data = strpos($this->field_config['bskssj']['date_format'], ";") ;
          $this->field_config['bskssj']['date_format'] = substr($this->field_config['bskssj']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->bskssj, $this->field_config['bskssj']['date_format']) ; 
          $this->field_config['bskssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->bskssj_hora, $this->field_config['bskssj']['date_format']) ; 
          if ($this->bskssj_hora == "" )  
          { 
              $this->bskssj_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->bskssj_hora = substr($this->bskssj_hora, 0, -4);
          }
          if ($this->bskssj != "")  
          { 
              $this->bskssj .= " " . $this->bskssj_hora ; 
          }
      } 
      if ($this->bskssj == "" && $use_null)  
      { 
          $this->bskssj = "null" ; 
      } 
      $this->field_config['bskssj']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['bsjssj']['date_format'];
      if ($this->bsjssj != "")  
      { 
          $nm_separa_data = strpos($this->field_config['bsjssj']['date_format'], ";") ;
          $this->field_config['bsjssj']['date_format'] = substr($this->field_config['bsjssj']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->bsjssj, $this->field_config['bsjssj']['date_format']) ; 
          $this->field_config['bsjssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->bsjssj_hora, $this->field_config['bsjssj']['date_format']) ; 
          if ($this->bsjssj_hora == "" )  
          { 
              $this->bsjssj_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->bsjssj_hora = substr($this->bsjssj_hora, 0, -4);
          }
          if ($this->bsjssj != "")  
          { 
              $this->bsjssj .= " " . $this->bsjssj_hora ; 
          }
      } 
      if ($this->bsjssj == "" && $use_null)  
      { 
          $this->bsjssj = "null" ; 
      } 
      $this->field_config['bsjssj']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['xckssj']['date_format'];
      if ($this->xckssj != "")  
      { 
          $nm_separa_data = strpos($this->field_config['xckssj']['date_format'], ";") ;
          $this->field_config['xckssj']['date_format'] = substr($this->field_config['xckssj']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->xckssj, $this->field_config['xckssj']['date_format']) ; 
          $this->field_config['xckssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->xckssj_hora, $this->field_config['xckssj']['date_format']) ; 
          if ($this->xckssj_hora == "" )  
          { 
              $this->xckssj_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->xckssj_hora = substr($this->xckssj_hora, 0, -4);
          }
          if ($this->xckssj != "")  
          { 
              $this->xckssj .= " " . $this->xckssj_hora ; 
          }
      } 
      if ($this->xckssj == "" && $use_null)  
      { 
          $this->xckssj = "null" ; 
      } 
      $this->field_config['xckssj']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['xcjssj']['date_format'];
      if ($this->xcjssj != "")  
      { 
          $nm_separa_data = strpos($this->field_config['xcjssj']['date_format'], ";") ;
          $this->field_config['xcjssj']['date_format'] = substr($this->field_config['xcjssj']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->xcjssj, $this->field_config['xcjssj']['date_format']) ; 
          $this->field_config['xcjssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->xcjssj_hora, $this->field_config['xcjssj']['date_format']) ; 
          if ($this->xcjssj_hora == "" )  
          { 
              $this->xcjssj_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->xcjssj_hora = substr($this->xcjssj_hora, 0, -4);
          }
          if ($this->xcjssj != "")  
          { 
              $this->xcjssj .= " " . $this->xcjssj_hora ; 
          }
      } 
      if ($this->xcjssj == "" && $use_null)  
      { 
          $this->xcjssj = "null" ; 
      } 
      $this->field_config['xcjssj']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['zbkssj']['date_format'];
      if ($this->zbkssj != "")  
      { 
          $nm_separa_data = strpos($this->field_config['zbkssj']['date_format'], ";") ;
          $this->field_config['zbkssj']['date_format'] = substr($this->field_config['zbkssj']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->zbkssj, $this->field_config['zbkssj']['date_format']) ; 
          $this->field_config['zbkssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->zbkssj_hora, $this->field_config['zbkssj']['date_format']) ; 
          if ($this->zbkssj_hora == "" )  
          { 
              $this->zbkssj_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->zbkssj_hora = substr($this->zbkssj_hora, 0, -4);
          }
          if ($this->zbkssj != "")  
          { 
              $this->zbkssj .= " " . $this->zbkssj_hora ; 
          }
      } 
      if ($this->zbkssj == "" && $use_null)  
      { 
          $this->zbkssj = "null" ; 
      } 
      $this->field_config['zbkssj']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['zbjssj']['date_format'];
      if ($this->zbjssj != "")  
      { 
          $nm_separa_data = strpos($this->field_config['zbjssj']['date_format'], ";") ;
          $this->field_config['zbjssj']['date_format'] = substr($this->field_config['zbjssj']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->zbjssj, $this->field_config['zbjssj']['date_format']) ; 
          $this->field_config['zbjssj']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->zbjssj_hora, $this->field_config['zbjssj']['date_format']) ; 
          if ($this->zbjssj_hora == "" )  
          { 
              $this->zbjssj_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->zbjssj_hora = substr($this->zbjssj_hora, 0, -4);
          }
          if ($this->zbjssj != "")  
          { 
              $this->zbjssj .= " " . $this->zbjssj_hora ; 
          }
      } 
      if ($this->zbjssj == "" && $use_null)  
      { 
          $this->zbjssj = "null" ; 
      } 
      $this->field_config['zbjssj']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_cgbbh();
          $this->ajax_return_values_cgbmc();
          $this->ajax_return_values_cgfs();
          $this->ajax_return_values_bzj();
          $this->ajax_return_values_bskssj();
          $this->ajax_return_values_bsjssj();
          $this->ajax_return_values_bsf();
          $this->ajax_return_values_wzqd();
          $this->ajax_return_values_xckssj();
          $this->ajax_return_values_xcjssj();
          $this->ajax_return_values_zbkssj();
          $this->ajax_return_values_zbjssj();
          $this->ajax_return_values_zbfile();
          $this->ajax_return_values_lxr();
          $this->ajax_return_values_bgdh();
          $this->ajax_return_values_yddh();
          $this->ajax_return_values_fax();
          $this->ajax_return_values_email();
          $this->ajax_return_values_postcode();
          $this->ajax_return_values_dz();
          $this->ajax_return_values_kfh();
          $this->ajax_return_values_yhzh();
          $this->ajax_return_values_ybqy();
          $this->ajax_return_values_xmsm();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id']['keyVal'] = form_cg_zbgg_pack_protect_string($this->nmgp_dados_form['id']);
          }
   } // ajax_return_values

          //----- cgbbh
   function ajax_return_values_cgbbh($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cgbbh", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cgbbh);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cgbbh'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cgbmc
   function ajax_return_values_cgbmc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cgbmc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cgbmc);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cgbmc'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cgfs
   function ajax_return_values_cgfs($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cgfs", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cgfs);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cgfs'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- bzj
   function ajax_return_values_bzj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bzj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bzj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bzj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- bskssj
   function ajax_return_values_bskssj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bskssj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bskssj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bskssj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->bskssj . ' ' . $this->bskssj_hora),
              );
          }
   }

          //----- bsjssj
   function ajax_return_values_bsjssj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bsjssj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bsjssj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bsjssj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->bsjssj . ' ' . $this->bsjssj_hora),
              );
          }
   }

          //----- bsf
   function ajax_return_values_bsf($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bsf", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bsf);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bsf'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- wzqd
   function ajax_return_values_wzqd($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("wzqd", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->wzqd);
              $aLookup = array();
              $sTmpExtension = pathinfo($this->wzqd, PATHINFO_EXTENSION);
              $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
              $sTmpFile      = 'sc_wzqd_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
              if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'] = array();
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'][$sTmpFile] = $this->wzqd;
              $tmp_file_wzqd = trim(NM_charset_to_utf8($this->wzqd));
              $tmp_icon_wzqd = '';
              if ('' != $tmp_file_wzqd)
              {
                  $tmp_icon_wzqd = $this->gera_icone($tmp_file_wzqd);
              }
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['wzqd'] = array(
                       'row'    => '',
               'type'    => 'documento',
               'valList' => array($sTmpValue),
               'docLink' => "<a href=\"javascript:nm_mostra_doc('0', '" . $sTmpFile . "', 'form_cg_zbgg')\">" . $tmp_file_wzqd . "</a>",
               'docIcon' => $tmp_icon_wzqd,
              );
              if ('navigate_form' == $this->NM_ajax_opcao)
              {
                  $this->NM_ajax_info['fldList']['wzqd_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          }
   }

          //----- xckssj
   function ajax_return_values_xckssj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("xckssj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->xckssj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['xckssj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->xckssj . ' ' . $this->xckssj_hora),
              );
          }
   }

          //----- xcjssj
   function ajax_return_values_xcjssj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("xcjssj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->xcjssj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['xcjssj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->xcjssj . ' ' . $this->xcjssj_hora),
              );
          }
   }

          //----- zbkssj
   function ajax_return_values_zbkssj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("zbkssj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->zbkssj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['zbkssj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->zbkssj . ' ' . $this->zbkssj_hora),
              );
          }
   }

          //----- zbjssj
   function ajax_return_values_zbjssj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("zbjssj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->zbjssj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['zbjssj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->zbjssj . ' ' . $this->zbjssj_hora),
              );
          }
   }

          //----- zbfile
   function ajax_return_values_zbfile($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("zbfile", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->zbfile);
              $aLookup = array();
              $sTmpExtension = pathinfo($this->zbfile, PATHINFO_EXTENSION);
              $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
              $sTmpFile      = 'sc_zbfile_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
              if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'] = array();
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'][$sTmpFile] = $this->zbfile;
              $tmp_file_zbfile = trim(NM_charset_to_utf8($this->zbfile));
              $tmp_icon_zbfile = '';
              if ('' != $tmp_file_zbfile)
              {
                  $tmp_icon_zbfile = $this->gera_icone($tmp_file_zbfile);
              }
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['zbfile'] = array(
                       'row'    => '',
               'type'    => 'documento',
               'valList' => array($sTmpValue),
               'docLink' => "<a href=\"javascript:nm_mostra_doc('1', '" . $sTmpFile . "', 'form_cg_zbgg')\">" . $tmp_file_zbfile . "</a>",
               'docIcon' => $tmp_icon_zbfile,
              );
              if ('navigate_form' == $this->NM_ajax_opcao)
              {
                  $this->NM_ajax_info['fldList']['zbfile_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          }
   }

          //----- lxr
   function ajax_return_values_lxr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lxr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lxr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lxr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- bgdh
   function ajax_return_values_bgdh($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bgdh", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bgdh);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bgdh'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- yddh
   function ajax_return_values_yddh($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("yddh", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->yddh);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['yddh'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fax
   function ajax_return_values_fax($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fax", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fax);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fax'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- email
   function ajax_return_values_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- postcode
   function ajax_return_values_postcode($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("postcode", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->postcode);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['postcode'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dz
   function ajax_return_values_dz($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dz", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dz);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dz'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- kfh
   function ajax_return_values_kfh($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("kfh", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->kfh);
              $aLookup = array();
              $this->_tmp_lookup_kfh = $this->kfh;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh'] = array(); 
}
$aLookup[] = array(form_cg_zbgg_pack_protect_string('') => form_cg_zbgg_pack_protect_string('请选择'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh'][] = '';
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_cg_zbgg_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_cg_zbgg_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_kfh'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"kfh\"";
          if (isset($this->NM_ajax_info['select_html']['kfh']) && !empty($this->NM_ajax_info['select_html']['kfh']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['kfh'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->kfh == $sValue)
                  {
                      $this->_tmp_lookup_kfh = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['kfh'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['kfh']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['kfh']['valList'][$i] = form_cg_zbgg_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['kfh']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['kfh']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['kfh']['labList'] = $aLabel;
          }
   }

          //----- yhzh
   function ajax_return_values_yhzh($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("yhzh", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->yhzh);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['yhzh'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- ybqy
   function ajax_return_values_ybqy($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ybqy", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ybqy);
              $aLookup = array();
              $this->_tmp_lookup_ybqy = $this->ybqy;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_cg_zbgg_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_cg_zbgg_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['Lookup_ybqy'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ybqy'] = array(
                       'row'    => '',
               'type'    => 'duplosel',
               'valList' => explode(';', $sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['ybqy']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['ybqy']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['ybqy']['labList'] = $aLabel;
          }
   }

          //----- xmsm
   function ajax_return_values_xmsm($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("xmsm", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->xmsm);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['xmsm'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['upload_dir'][$fieldName][] = $newName;
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
      $this->bzj = str_replace($sc_parm1, $sc_parm2, $this->bzj); 
      $this->bsf = str_replace($sc_parm1, $sc_parm2, $this->bsf); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->bzj = "'" . $this->bzj . "'";
      $this->bsf = "'" . $this->bsf . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->bzj = str_replace("'", "", $this->bzj); 
      $this->bsf = str_replace("'", "", $this->bsf); 
   } 
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']))
          {
               $sc_where_pos = " WHERE ((id < $this->id))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->id)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opcao'] = '';

   }

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
      global  $nm_form_submit, $teste_validade, $sc_where;
 
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
          $this->NM_gera_log_old();
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
      $NM_val_form['cgbbh'] = $this->cgbbh;
      $NM_val_form['cgbmc'] = $this->cgbmc;
      $NM_val_form['cgfs'] = $this->cgfs;
      $NM_val_form['bzj'] = $this->bzj;
      $NM_val_form['bskssj'] = $this->bskssj;
      $NM_val_form['bsjssj'] = $this->bsjssj;
      $NM_val_form['bsf'] = $this->bsf;
      $NM_val_form['wzqd'] = $this->wzqd;
      $NM_val_form['xckssj'] = $this->xckssj;
      $NM_val_form['xcjssj'] = $this->xcjssj;
      $NM_val_form['zbkssj'] = $this->zbkssj;
      $NM_val_form['zbjssj'] = $this->zbjssj;
      $NM_val_form['zbfile'] = $this->zbfile;
      $NM_val_form['lxr'] = $this->lxr;
      $NM_val_form['bgdh'] = $this->bgdh;
      $NM_val_form['yddh'] = $this->yddh;
      $NM_val_form['fax'] = $this->fax;
      $NM_val_form['email'] = $this->email;
      $NM_val_form['postcode'] = $this->postcode;
      $NM_val_form['dz'] = $this->dz;
      $NM_val_form['kfh'] = $this->kfh;
      $NM_val_form['yhzh'] = $this->yhzh;
      $NM_val_form['ybqy'] = $this->ybqy;
      $NM_val_form['xmsm'] = $this->xmsm;
      $NM_val_form['id'] = $this->id;
      $NM_val_form['shsj'] = $this->shsj;
      $NM_val_form['shzt'] = $this->shzt;
      $NM_val_form['sfjs'] = $this->sfjs;
      if ($this->id == "")  
      { 
          $this->id = 0;
      } 
      if ($this->bzj == "")  
      { 
          $this->bzj = 0;
          $this->sc_force_zero[] = 'bzj';
      } 
      if ($this->bsf == "")  
      { 
          $this->bsf = 0;
          $this->sc_force_zero[] = 'bsf';
      } 
      $nm_bases_lob_geral = $this->Ini->nm_bases_mysql;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->cgbbh_before_qstr = $this->cgbbh;
          $this->cgbbh = substr($this->Db->qstr($this->cgbbh), 1, -1); 
          $this->cgbmc_before_qstr = $this->cgbmc;
          $this->cgbmc = substr($this->Db->qstr($this->cgbmc), 1, -1); 
          $this->cgfs_before_qstr = $this->cgfs;
          $this->cgfs = substr($this->Db->qstr($this->cgfs), 1, -1); 
          if ($this->bskssj == "")  
          { 
              $this->bskssj = "null"; 
              $NM_val_null[] = "bskssj";
          } 
          if ($this->bsjssj == "")  
          { 
              $this->bsjssj = "null"; 
              $NM_val_null[] = "bsjssj";
          } 
          if ($this->xckssj == "")  
          { 
              $this->xckssj = "null"; 
              $NM_val_null[] = "xckssj";
          } 
          if ($this->xcjssj == "")  
          { 
              $this->xcjssj = "null"; 
              $NM_val_null[] = "xcjssj";
          } 
          $this->wzqd_original_filename = $this->wzqd; 
          $this->wzqd_before_qstr = $this->wzqd;
          $this->wzqd = substr($this->Db->qstr($this->wzqd), 1, -1); 
          if ($this->zbkssj == "")  
          { 
              $this->zbkssj = "null"; 
              $NM_val_null[] = "zbkssj";
          } 
          if ($this->zbjssj == "")  
          { 
              $this->zbjssj = "null"; 
              $NM_val_null[] = "zbjssj";
          } 
          $this->zbfile_original_filename = $this->zbfile; 
          $this->zbfile_before_qstr = $this->zbfile;
          $this->zbfile = substr($this->Db->qstr($this->zbfile), 1, -1); 
          $this->lxr_before_qstr = $this->lxr;
          $this->lxr = substr($this->Db->qstr($this->lxr), 1, -1); 
          $this->bgdh_before_qstr = $this->bgdh;
          $this->bgdh = substr($this->Db->qstr($this->bgdh), 1, -1); 
          $this->yddh_before_qstr = $this->yddh;
          $this->yddh = substr($this->Db->qstr($this->yddh), 1, -1); 
          $this->fax_before_qstr = $this->fax;
          $this->fax = substr($this->Db->qstr($this->fax), 1, -1); 
          $this->email_before_qstr = $this->email;
          $this->email = substr($this->Db->qstr($this->email), 1, -1); 
          $this->postcode_before_qstr = $this->postcode;
          $this->postcode = substr($this->Db->qstr($this->postcode), 1, -1); 
          $this->dz_before_qstr = $this->dz;
          $this->dz = substr($this->Db->qstr($this->dz), 1, -1); 
          $this->kfh_before_qstr = $this->kfh;
          $this->kfh = substr($this->Db->qstr($this->kfh), 1, -1); 
          $this->yhzh_before_qstr = $this->yhzh;
          $this->yhzh = substr($this->Db->qstr($this->yhzh), 1, -1); 
          $this->ybqy_before_qstr = $this->ybqy;
          $this->ybqy = substr($this->Db->qstr($this->ybqy), 1, -1); 
          $this->xmsm_before_qstr = $this->xmsm;
          $this->xmsm = substr($this->Db->qstr($this->xmsm), 1, -1); 
          $this->shsj_before_qstr = $this->shsj;
          $this->shsj = substr($this->Db->qstr($this->shsj), 1, -1); 
          $this->shzt_before_qstr = $this->shzt;
          $this->shzt = substr($this->Db->qstr($this->shzt), 1, -1); 
          $this->sfjs_before_qstr = $this->sfjs;
          $this->sfjs = substr($this->Db->qstr($this->sfjs), 1, -1); 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id ";
          $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_cg_zbgg_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where (cgbbh = '" . $this->cgbbh . "') AND (id <> $this->id)";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " " . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'cgbbh';
              }
              $rsUni->Close();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where (wzqd = '" . $this->wzqd . "') AND (id <> $this->id)";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " " . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'wzqd';
              }
              $rsUni->Close();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where (zbfile = '" . $this->zbfile . "') AND (id <> $this->id)";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " " . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'zbfile';
              }
              $rsUni->Close();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $comando_oracle = "";  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET cgbbh = '$this->cgbbh', cgbmc = '$this->cgbmc', cgfs = '$this->cgfs', bzj = $this->bzj, bskssj = " . $this->Ini->date_delim . $this->bskssj . $this->Ini->date_delim1 . ", bsjssj = " . $this->Ini->date_delim . $this->bsjssj . $this->Ini->date_delim1 . ", bsf = $this->bsf, xckssj = " . $this->Ini->date_delim . $this->xckssj . $this->Ini->date_delim1 . ", xcjssj = " . $this->Ini->date_delim . $this->xcjssj . $this->Ini->date_delim1 . ", zbkssj = " . $this->Ini->date_delim . $this->zbkssj . $this->Ini->date_delim1 . ", zbjssj = " . $this->Ini->date_delim . $this->zbjssj . $this->Ini->date_delim1 . ", lxr = '$this->lxr', bgdh = '$this->bgdh', yddh = '$this->yddh', fax = '$this->fax', email = '$this->email', postcode = '$this->postcode', dz = '$this->dz', kfh = '$this->kfh', yhzh = '$this->yhzh', ybqy = '$this->ybqy', xmsm = '$this->xmsm'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET cgbbh = '$this->cgbbh', cgbmc = '$this->cgbmc', cgfs = '$this->cgfs', bzj = $this->bzj, bskssj = " . $this->Ini->date_delim . $this->bskssj . $this->Ini->date_delim1 . ", bsjssj = " . $this->Ini->date_delim . $this->bsjssj . $this->Ini->date_delim1 . ", bsf = $this->bsf, xckssj = " . $this->Ini->date_delim . $this->xckssj . $this->Ini->date_delim1 . ", xcjssj = " . $this->Ini->date_delim . $this->xcjssj . $this->Ini->date_delim1 . ", zbkssj = " . $this->Ini->date_delim . $this->zbkssj . $this->Ini->date_delim1 . ", zbjssj = " . $this->Ini->date_delim . $this->zbjssj . $this->Ini->date_delim1 . ", lxr = '$this->lxr', bgdh = '$this->bgdh', yddh = '$this->yddh', fax = '$this->fax', email = '$this->email', postcode = '$this->postcode', dz = '$this->dz', kfh = '$this->kfh', yhzh = '$this->yhzh', ybqy = '$this->ybqy', xmsm = '$this->xmsm'";  
              } 
              if (isset($NM_val_form['shsj']) && $NM_val_form['shsj'] != $this->nmgp_dados_select['shsj']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " shsj = '$this->shsj'"; 
                  $comando_oracle        .= " shsj = '$this->shsj'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['shzt']) && $NM_val_form['shzt'] != $this->nmgp_dados_select['shzt']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " shzt = '$this->shzt'"; 
                  $comando_oracle        .= " shzt = '$this->shzt'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['sfjs']) && $NM_val_form['sfjs'] != $this->nmgp_dados_select['sfjs']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " sfjs = '$this->sfjs'"; 
                  $comando_oracle        .= " sfjs = '$this->sfjs'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->wzqd_limpa == "S") 
              { 
                  if ($this->wzqd != "null") 
                  { 
                      $this->wzqd = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", wzqd = '" . $this->wzqd . "'"; 
                      $comando_oracle .= ", wzqd = '" . $this->wzqd . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " wzqd = '" . $this->wzqd . "'"; 
                     $comando_oracle .= " wzqd = '" . $this->wzqd . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->wzqd = "";
              } 
              else 
              { 
                  if ($this->wzqd != "none" && $this->wzqd != "") 
                  { 
                      $NM_conteudo =  $this->wzqd;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", wzqd = '$NM_conteudo'" ; 
                          $comando_oracle .= ", wzqd = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " wzqd = '$NM_conteudo'" ; 
                          $comando_oracle .= " wzqd = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "wzqd";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              $temp_cmd_sql = "";
              if ($this->zbfile_limpa == "S") 
              { 
                  if ($this->zbfile != "null") 
                  { 
                      $this->zbfile = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", zbfile = '" . $this->zbfile . "'"; 
                      $comando_oracle .= ", zbfile = '" . $this->zbfile . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " zbfile = '" . $this->zbfile . "'"; 
                     $comando_oracle .= " zbfile = '" . $this->zbfile . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->zbfile = "";
              } 
              else 
              { 
                  if ($this->zbfile != "none" && $this->zbfile != "") 
                  { 
                      $NM_conteudo =  $this->zbfile;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", zbfile = '$NM_conteudo'" ; 
                          $comando_oracle .= ", zbfile = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " zbfile = '$NM_conteudo'" ; 
                          $comando_oracle .= " zbfile = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "zbfile";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              $comando .= " WHERE id = $this->id ";  
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
                                  form_cg_zbgg_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              if ($this->wzqd_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['wzqd_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->zbfile_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['zbfile_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          $this->cgbbh = $this->cgbbh_before_qstr;
          $this->cgbmc = $this->cgbmc_before_qstr;
          $this->cgfs = $this->cgfs_before_qstr;
          $this->wzqd = $this->wzqd_before_qstr;
          $this->zbfile = $this->zbfile_before_qstr;
          $this->lxr = $this->lxr_before_qstr;
          $this->bgdh = $this->bgdh_before_qstr;
          $this->yddh = $this->yddh_before_qstr;
          $this->fax = $this->fax_before_qstr;
          $this->email = $this->email_before_qstr;
          $this->postcode = $this->postcode_before_qstr;
          $this->dz = $this->dz_before_qstr;
          $this->kfh = $this->kfh_before_qstr;
          $this->yhzh = $this->yhzh_before_qstr;
          $this->ybqy = $this->ybqy_before_qstr;
          $this->xmsm = $this->xmsm_before_qstr;
          $this->shsj = $this->shsj_before_qstr;
          $this->shzt = $this->shzt_before_qstr;
          $this->sfjs = $this->sfjs_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['cgbbh'])) { $this->cgbbh = $NM_val_form['cgbbh']; }
              elseif (isset($this->cgbbh)) { $this->nm_limpa_alfa($this->cgbbh); }
              if     (isset($NM_val_form) && isset($NM_val_form['cgbmc'])) { $this->cgbmc = $NM_val_form['cgbmc']; }
              elseif (isset($this->cgbmc)) { $this->nm_limpa_alfa($this->cgbmc); }
              if     (isset($NM_val_form) && isset($NM_val_form['cgfs'])) { $this->cgfs = $NM_val_form['cgfs']; }
              elseif (isset($this->cgfs)) { $this->nm_limpa_alfa($this->cgfs); }
              if     (isset($NM_val_form) && isset($NM_val_form['bzj'])) { $this->bzj = $NM_val_form['bzj']; }
              elseif (isset($this->bzj)) { $this->nm_limpa_alfa($this->bzj); }
              if     (isset($NM_val_form) && isset($NM_val_form['bsf'])) { $this->bsf = $NM_val_form['bsf']; }
              elseif (isset($this->bsf)) { $this->nm_limpa_alfa($this->bsf); }
              if     (isset($NM_val_form) && isset($NM_val_form['lxr'])) { $this->lxr = $NM_val_form['lxr']; }
              elseif (isset($this->lxr)) { $this->nm_limpa_alfa($this->lxr); }
              if     (isset($NM_val_form) && isset($NM_val_form['bgdh'])) { $this->bgdh = $NM_val_form['bgdh']; }
              elseif (isset($this->bgdh)) { $this->nm_limpa_alfa($this->bgdh); }
              if     (isset($NM_val_form) && isset($NM_val_form['yddh'])) { $this->yddh = $NM_val_form['yddh']; }
              elseif (isset($this->yddh)) { $this->nm_limpa_alfa($this->yddh); }
              if     (isset($NM_val_form) && isset($NM_val_form['fax'])) { $this->fax = $NM_val_form['fax']; }
              elseif (isset($this->fax)) { $this->nm_limpa_alfa($this->fax); }
              if     (isset($NM_val_form) && isset($NM_val_form['email'])) { $this->email = $NM_val_form['email']; }
              elseif (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
              if     (isset($NM_val_form) && isset($NM_val_form['postcode'])) { $this->postcode = $NM_val_form['postcode']; }
              elseif (isset($this->postcode)) { $this->nm_limpa_alfa($this->postcode); }
              if     (isset($NM_val_form) && isset($NM_val_form['dz'])) { $this->dz = $NM_val_form['dz']; }
              elseif (isset($this->dz)) { $this->nm_limpa_alfa($this->dz); }
              if     (isset($NM_val_form) && isset($NM_val_form['kfh'])) { $this->kfh = $NM_val_form['kfh']; }
              elseif (isset($this->kfh)) { $this->nm_limpa_alfa($this->kfh); }
              if     (isset($NM_val_form) && isset($NM_val_form['yhzh'])) { $this->yhzh = $NM_val_form['yhzh']; }
              elseif (isset($this->yhzh)) { $this->nm_limpa_alfa($this->yhzh); }
              if     (isset($NM_val_form) && isset($NM_val_form['ybqy'])) { $this->ybqy = $NM_val_form['ybqy']; }
              elseif (isset($this->ybqy)) { $this->nm_limpa_alfa($this->ybqy); }
              if     (isset($NM_val_form) && isset($NM_val_form['xmsm'])) { $this->xmsm = $NM_val_form['xmsm']; }
              elseif (isset($this->xmsm)) { $this->nm_limpa_alfa($this->xmsm); }

              $this->nm_formatar_campos();

              $bChange_wzqd = false;
              if (isset($this->wzqd_original_filename) && '' != $this->wzqd_original_filename && $this->wzqd_original_filename != $this->wzqd)
              {
                  $sTmpOrig_wzqd = $this->wzqd;
                  $this->wzqd    = $this->wzqd_original_filename;
                  $bChange_wzqd  = true;
              }

              $bChange_zbfile = false;
              if (isset($this->zbfile_original_filename) && '' != $this->zbfile_original_filename && $this->zbfile_original_filename != $this->zbfile)
              {
                  $sTmpOrig_zbfile = $this->zbfile;
                  $this->zbfile    = $this->zbfile_original_filename;
                  $bChange_zbfile  = true;
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('cgbbh', 'cgbmc', 'cgfs', 'bzj', 'bskssj', 'bsjssj', 'bsf', 'wzqd', 'xckssj', 'xcjssj', 'zbkssj', 'zbjssj', 'zbfile', 'lxr', 'bgdh', 'yddh', 'fax', 'email', 'postcode', 'dz', 'kfh', 'yhzh', 'ybqy', 'xmsm'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if ($bChange_wzqd)
              {
                  $this->wzqd                   = $sTmpOrig_wzqd;
                  $this->wzqd_original_filename = '';
              }

              if ($bChange_zbfile)
              {
                  $this->zbfile                   = $sTmpOrig_zbfile;
                  $this->zbfile_original_filename = '';
              }

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['decimal_db'] == ",") 
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
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where cgbbh = '" . $this->cgbbh . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " " . $this->Ini->Nm_lang['lang_cg_zbgg_fld_cgbbh'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'cgbbh';
              }
              $rsUni->Close();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where wzqd = '" . $this->wzqd . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " " . $this->Ini->Nm_lang['lang_cg_zbgg_fld_wzqd'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'wzqd';
              }
              $rsUni->Close();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where zbfile = '" . $this->zbfile . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " " . $this->Ini->Nm_lang['lang_cg_zbgg_fld_zbfile'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'zbfile';
              }
              $rsUni->Close();
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_cg_zbgg_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->path_doc . "wzqd" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->wzqd_scfile_name, $dir_file, "wzqd");
              if (trim($this->wzqd_scfile_name) != $_test_file)
              {
                  $this->wzqd_scfile_name = $_test_file;
                  $this->wzqd = $_test_file;
              }
              $dir_file = $this->Ini->path_doc . "zbfile" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->zbfile_scfile_name, $dir_file, "zbfile");
              if (trim($this->zbfile_scfile_name) != $_test_file)
              {
                  $this->zbfile_scfile_name = $_test_file;
                  $this->zbfile = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cgbbh, cgbmc, cgfs, bzj, bskssj, bsjssj, bsf, xckssj, xcjssj, wzqd, zbkssj, zbjssj, zbfile, lxr, bgdh, yddh, fax, email, postcode, dz, kfh, yhzh, ybqy, xmsm, shsj, shzt, sfjs) VALUES (" . $NM_seq_auto . "'$this->cgbbh', '$this->cgbmc', '$this->cgfs', $this->bzj, " . $this->Ini->date_delim . $this->bskssj . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->bsjssj . $this->Ini->date_delim1 . ", $this->bsf, " . $this->Ini->date_delim . $this->xckssj . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->xcjssj . $this->Ini->date_delim1 . ", '$this->wzqd', " . $this->Ini->date_delim . $this->zbkssj . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->zbjssj . $this->Ini->date_delim1 . ", '$this->zbfile', '$this->lxr', '$this->bgdh', '$this->yddh', '$this->fax', '$this->email', '$this->postcode', '$this->dz', '$this->kfh', '$this->yhzh', '$this->ybqy', '$this->xmsm', '$this->shsj', '$this->shzt', '$this->sfjs')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cgbbh, cgbmc, cgfs, bzj, bskssj, bsjssj, bsf, xckssj, xcjssj, wzqd, zbkssj, zbjssj, zbfile, lxr, bgdh, yddh, fax, email, postcode, dz, kfh, yhzh, ybqy, xmsm, shsj, shzt, sfjs) VALUES (" . $NM_seq_auto . "'$this->cgbbh', '$this->cgbmc', '$this->cgfs', $this->bzj, " . $this->Ini->date_delim . $this->bskssj . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->bsjssj . $this->Ini->date_delim1 . ", $this->bsf, " . $this->Ini->date_delim . $this->xckssj . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->xcjssj . $this->Ini->date_delim1 . ", '$this->wzqd', " . $this->Ini->date_delim . $this->zbkssj . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->zbjssj . $this->Ini->date_delim1 . ", '$this->zbfile', '$this->lxr', '$this->bgdh', '$this->yddh', '$this->fax', '$this->email', '$this->postcode', '$this->dz', '$this->kfh', '$this->yhzh', '$this->ybqy', '$this->xmsm', '$this->shsj', '$this->shzt', '$this->sfjs')"; 
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
                              form_cg_zbgg_pack_ajax_response();
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
                  $this->id = $rsy->fields[0];
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
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']);
              }

              $dir_doc = $this->Ini->path_doc . "wzqd" . "/"; 
              $arq_wzqd = fopen($this->SC_DOC_wzqd, "r") ; 
              $reg_wzqd = fread($arq_wzqd, filesize($this->SC_DOC_wzqd)) ; 
              fclose($arq_wzqd) ;  
              $arq_wzqd = fopen($dir_doc . trim($this->wzqd_scfile_name), "w") ; 
              fwrite($arq_wzqd, $reg_wzqd) ;  
              fclose($arq_wzqd) ;  
              $dir_doc = $this->Ini->path_doc . "zbfile" . "/"; 
              $arq_zbfile = fopen($this->SC_DOC_zbfile, "r") ; 
              $reg_zbfile = fread($arq_zbfile, filesize($this->SC_DOC_zbfile)) ; 
              fclose($arq_zbfile) ;  
              $arq_zbfile = fopen($dir_doc . trim($this->zbfile_scfile_name), "w") ; 
              fwrite($arq_zbfile, $reg_zbfile) ;  
              fclose($arq_zbfile) ;  
              $this->sc_evento = "insert"; 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id = substr($this->Db->qstr($this->id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id"; 
          $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
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
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "; 
              $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "); 
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_cg_zbgg_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']);
              }

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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['parms'] = "id?#?$this->id?@?"; 
      }
      $this->nmgp_dados_form['wzqd'] = ""; 
      $this->wzqd_limpa = ""; 
      $this->wzqd_salva = ""; 
      $this->nmgp_dados_form['zbfile'] = ""; 
      $this->zbfile_limpa = ""; 
      $this->zbfile_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id = substr($this->Db->qstr($this->id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['parms'] = ""; 
          $nmgp_select = "SELECT id, cgbbh, cgbmc, cgfs, bzj, bskssj, bsjssj, bsf, xckssj, xcjssj, wzqd, zbkssj, zbjssj, zbfile, lxr, bgdh, yddh, fax, email, postcode, dz, kfh, yhzh, ybqy, xmsm, shsj, shzt, sfjs from " . $this->Ini->nm_tabela ; 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              $aWhere[] = "id = $this->id"; 
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
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
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->id = $rs->fields[0] ; 
              $this->nmgp_dados_select['id'] = $this->id;
              $this->cgbbh = $rs->fields[1] ; 
              $this->nmgp_dados_select['cgbbh'] = $this->cgbbh;
              $this->cgbmc = $rs->fields[2] ; 
              $this->nmgp_dados_select['cgbmc'] = $this->cgbmc;
              $this->cgfs = $rs->fields[3] ; 
              $this->nmgp_dados_select['cgfs'] = $this->cgfs;
              $this->bzj = $rs->fields[4] ; 
              $this->nmgp_dados_select['bzj'] = $this->bzj;
              $this->bskssj = $rs->fields[5] ; 
              if (substr($this->bskssj, 10, 1) == "-") 
              { 
                 $this->bskssj = substr($this->bskssj, 0, 10) . " " . substr($this->bskssj, 11);
              } 
              if (substr($this->bskssj, 13, 1) == ".") 
              { 
                 $this->bskssj = substr($this->bskssj, 0, 13) . ":" . substr($this->bskssj, 14, 2) . ":" . substr($this->bskssj, 17);
              } 
              $this->nmgp_dados_select['bskssj'] = $this->bskssj;
              $this->bsjssj = $rs->fields[6] ; 
              if (substr($this->bsjssj, 10, 1) == "-") 
              { 
                 $this->bsjssj = substr($this->bsjssj, 0, 10) . " " . substr($this->bsjssj, 11);
              } 
              if (substr($this->bsjssj, 13, 1) == ".") 
              { 
                 $this->bsjssj = substr($this->bsjssj, 0, 13) . ":" . substr($this->bsjssj, 14, 2) . ":" . substr($this->bsjssj, 17);
              } 
              $this->nmgp_dados_select['bsjssj'] = $this->bsjssj;
              $this->bsf = $rs->fields[7] ; 
              $this->nmgp_dados_select['bsf'] = $this->bsf;
              $this->xckssj = $rs->fields[8] ; 
              if (substr($this->xckssj, 10, 1) == "-") 
              { 
                 $this->xckssj = substr($this->xckssj, 0, 10) . " " . substr($this->xckssj, 11);
              } 
              if (substr($this->xckssj, 13, 1) == ".") 
              { 
                 $this->xckssj = substr($this->xckssj, 0, 13) . ":" . substr($this->xckssj, 14, 2) . ":" . substr($this->xckssj, 17);
              } 
              $this->nmgp_dados_select['xckssj'] = $this->xckssj;
              $this->xcjssj = $rs->fields[9] ; 
              if (substr($this->xcjssj, 10, 1) == "-") 
              { 
                 $this->xcjssj = substr($this->xcjssj, 0, 10) . " " . substr($this->xcjssj, 11);
              } 
              if (substr($this->xcjssj, 13, 1) == ".") 
              { 
                 $this->xcjssj = substr($this->xcjssj, 0, 13) . ":" . substr($this->xcjssj, 14, 2) . ":" . substr($this->xcjssj, 17);
              } 
              $this->nmgp_dados_select['xcjssj'] = $this->xcjssj;
              $this->wzqd = $rs->fields[10] ; 
              $this->nmgp_dados_select['wzqd'] = $this->wzqd;
              $this->zbkssj = $rs->fields[11] ; 
              if (substr($this->zbkssj, 10, 1) == "-") 
              { 
                 $this->zbkssj = substr($this->zbkssj, 0, 10) . " " . substr($this->zbkssj, 11);
              } 
              if (substr($this->zbkssj, 13, 1) == ".") 
              { 
                 $this->zbkssj = substr($this->zbkssj, 0, 13) . ":" . substr($this->zbkssj, 14, 2) . ":" . substr($this->zbkssj, 17);
              } 
              $this->nmgp_dados_select['zbkssj'] = $this->zbkssj;
              $this->zbjssj = $rs->fields[12] ; 
              if (substr($this->zbjssj, 10, 1) == "-") 
              { 
                 $this->zbjssj = substr($this->zbjssj, 0, 10) . " " . substr($this->zbjssj, 11);
              } 
              if (substr($this->zbjssj, 13, 1) == ".") 
              { 
                 $this->zbjssj = substr($this->zbjssj, 0, 13) . ":" . substr($this->zbjssj, 14, 2) . ":" . substr($this->zbjssj, 17);
              } 
              $this->nmgp_dados_select['zbjssj'] = $this->zbjssj;
              $this->zbfile = $rs->fields[13] ; 
              $this->nmgp_dados_select['zbfile'] = $this->zbfile;
              $this->lxr = $rs->fields[14] ; 
              $this->nmgp_dados_select['lxr'] = $this->lxr;
              $this->bgdh = $rs->fields[15] ; 
              $this->nmgp_dados_select['bgdh'] = $this->bgdh;
              $this->yddh = $rs->fields[16] ; 
              $this->nmgp_dados_select['yddh'] = $this->yddh;
              $this->fax = $rs->fields[17] ; 
              $this->nmgp_dados_select['fax'] = $this->fax;
              $this->email = $rs->fields[18] ; 
              $this->nmgp_dados_select['email'] = $this->email;
              $this->postcode = $rs->fields[19] ; 
              $this->nmgp_dados_select['postcode'] = $this->postcode;
              $this->dz = $rs->fields[20] ; 
              $this->nmgp_dados_select['dz'] = $this->dz;
              $this->kfh = $rs->fields[21] ; 
              $this->nmgp_dados_select['kfh'] = $this->kfh;
              $this->yhzh = $rs->fields[22] ; 
              $this->nmgp_dados_select['yhzh'] = $this->yhzh;
              $this->ybqy = $rs->fields[23] ; 
              $this->nmgp_dados_select['ybqy'] = $this->ybqy;
              $this->xmsm = $rs->fields[24] ; 
              $this->nmgp_dados_select['xmsm'] = $this->xmsm;
              $this->shsj = $rs->fields[25] ; 
              $this->nmgp_dados_select['shsj'] = $this->shsj;
              $this->shzt = $rs->fields[26] ; 
              $this->nmgp_dados_select['shzt'] = $this->shzt;
              $this->sfjs = $rs->fields[27] ; 
              $this->nmgp_dados_select['sfjs'] = $this->sfjs;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->id = (string)$this->id; 
              $this->bzj = (string)$this->bzj; 
              $this->bsf = (string)$this->bsf; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['parms'] = "id?#?$this->id?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sub_dir'][0]  = "wzqd";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sub_dir'][1]  = "zbfile";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->id = "";  
              $this->cgbbh = "";  
              $this->cgbmc = "";  
              $this->cgfs = "";  
              $this->bzj = "0";  
              $this->bskssj = "";  
              $this->bskssj_hora = "" ;  
              $this->bsjssj = "";  
              $this->bsjssj_hora = "" ;  
              $this->bsf = "0";  
              $this->xckssj = "";  
              $this->xckssj_hora = "" ;  
              $this->xcjssj = "";  
              $this->xcjssj_hora = "" ;  
              $this->wzqd = "";  
              $this->wzqd_ul_name = "" ;  
              $this->wzqd_ul_type = "" ;  
              $this->zbkssj = "";  
              $this->zbkssj_hora = "" ;  
              $this->zbjssj = "";  
              $this->zbjssj_hora = "" ;  
              $this->zbfile = "";  
              $this->zbfile_ul_name = "" ;  
              $this->zbfile_ul_type = "" ;  
              $this->lxr = "";  
              $this->bgdh = "";  
              $this->yddh = "";  
              $this->fax = "";  
              $this->email = "";  
              $this->postcode = "";  
              $this->dz = "";  
              $this->kfh = "";  
              $this->yhzh = "";  
              $this->ybqy = "";  
              $this->xmsm = "";  
              $this->shsj = "";  
              $this->shzt = "";  
              $this->sfjs = "";  
              $this->formatado = false;
              if ($this->nmgp_clone != "S")
              {
              }
              if ($this->nmgp_clone == "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select']))
              {
                  $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select'];
                  $this->cgbbh = $this->nmgp_dados_select['cgbbh'];  
                  $this->cgbmc = $this->nmgp_dados_select['cgbmc'];  
                  $this->cgfs = $this->nmgp_dados_select['cgfs'];  
                  $this->bzj = $this->nmgp_dados_select['bzj'];  
                  $this->bskssj = $this->nmgp_dados_select['bskssj'];  
                  $this->bsjssj = $this->nmgp_dados_select['bsjssj'];  
                  $this->bsf = $this->nmgp_dados_select['bsf'];  
                  $this->xckssj = $this->nmgp_dados_select['xckssj'];  
                  $this->xcjssj = $this->nmgp_dados_select['xcjssj'];  
                  $this->wzqd = $this->nmgp_dados_select['wzqd'];  
                  $this->zbkssj = $this->nmgp_dados_select['zbkssj'];  
                  $this->zbjssj = $this->nmgp_dados_select['zbjssj'];  
                  $this->zbfile = $this->nmgp_dados_select['zbfile'];  
                  $this->lxr = $this->nmgp_dados_select['lxr'];  
                  $this->bgdh = $this->nmgp_dados_select['bgdh'];  
                  $this->yddh = $this->nmgp_dados_select['yddh'];  
                  $this->fax = $this->nmgp_dados_select['fax'];  
                  $this->email = $this->nmgp_dados_select['email'];  
                  $this->postcode = $this->nmgp_dados_select['postcode'];  
                  $this->dz = $this->nmgp_dados_select['dz'];  
                  $this->kfh = $this->nmgp_dados_select['kfh'];  
                  $this->yhzh = $this->nmgp_dados_select['yhzh'];  
                  $this->ybqy = $this->nmgp_dados_select['ybqy'];  
                  $this->xmsm = $this->nmgp_dados_select['xmsm'];  
                  $this->shsj = $this->nmgp_dados_select['shsj'];  
                  $this->shzt = $this->nmgp_dados_select['shzt'];  
                  $this->sfjs = $this->nmgp_dados_select['sfjs'];  
              }
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      $this->nm_proc_onload();
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
       $this->SC_log_arr['keys']['id'] =  $this->id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['dados_select'];
           $this->SC_log_arr['fields']['cgbbh']['0'] =  $nmgp_dados_select['cgbbh'];
           $this->SC_log_arr['fields']['cgbmc']['0'] =  $nmgp_dados_select['cgbmc'];
           $this->SC_log_arr['fields']['cgfs']['0'] =  $nmgp_dados_select['cgfs'];
           $this->SC_log_arr['fields']['bzj']['0'] =  $nmgp_dados_select['bzj'];
           $this->SC_log_arr['fields']['bskssj']['0'] =  $nmgp_dados_select['bskssj'];
           $this->SC_log_arr['fields']['bsjssj']['0'] =  $nmgp_dados_select['bsjssj'];
           $this->SC_log_arr['fields']['bsf']['0'] =  $nmgp_dados_select['bsf'];
           $this->SC_log_arr['fields']['xckssj']['0'] =  $nmgp_dados_select['xckssj'];
           $this->SC_log_arr['fields']['xcjssj']['0'] =  $nmgp_dados_select['xcjssj'];
           $this->SC_log_arr['fields']['wzqd']['0'] =  $nmgp_dados_select['wzqd'];
           $this->SC_log_arr['fields']['zbkssj']['0'] =  $nmgp_dados_select['zbkssj'];
           $this->SC_log_arr['fields']['zbjssj']['0'] =  $nmgp_dados_select['zbjssj'];
           $this->SC_log_arr['fields']['zbfile']['0'] =  $nmgp_dados_select['zbfile'];
           $this->SC_log_arr['fields']['lxr']['0'] =  $nmgp_dados_select['lxr'];
           $this->SC_log_arr['fields']['bgdh']['0'] =  $nmgp_dados_select['bgdh'];
           $this->SC_log_arr['fields']['yddh']['0'] =  $nmgp_dados_select['yddh'];
           $this->SC_log_arr['fields']['fax']['0'] =  $nmgp_dados_select['fax'];
           $this->SC_log_arr['fields']['email']['0'] =  $nmgp_dados_select['email'];
           $this->SC_log_arr['fields']['postcode']['0'] =  $nmgp_dados_select['postcode'];
           $this->SC_log_arr['fields']['dz']['0'] =  $nmgp_dados_select['dz'];
           $this->SC_log_arr['fields']['kfh']['0'] =  $nmgp_dados_select['kfh'];
           $this->SC_log_arr['fields']['yhzh']['0'] =  $nmgp_dados_select['yhzh'];
           $this->SC_log_arr['fields']['ybqy']['0'] =  $nmgp_dados_select['ybqy'];
           $this->SC_log_arr['fields']['xmsm']['0'] =  $nmgp_dados_select['xmsm'];
           $this->SC_log_arr['fields']['shsj']['0'] =  $nmgp_dados_select['shsj'];
           $this->SC_log_arr['fields']['shzt']['0'] =  $nmgp_dados_select['shzt'];
           $this->SC_log_arr['fields']['sfjs']['0'] =  $nmgp_dados_select['sfjs'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['cgbbh']['1'] =  $this->cgbbh;
       $this->SC_log_arr['fields']['cgbmc']['1'] =  $this->cgbmc;
       $this->SC_log_arr['fields']['cgfs']['1'] =  $this->cgfs;
       $this->SC_log_arr['fields']['bzj']['1'] =  $this->bzj;
       $this->SC_log_arr['fields']['bskssj']['1'] =  $this->bskssj;
       $this->SC_log_arr['fields']['bsjssj']['1'] =  $this->bsjssj;
       $this->SC_log_arr['fields']['bsf']['1'] =  $this->bsf;
       $this->SC_log_arr['fields']['xckssj']['1'] =  $this->xckssj;
       $this->SC_log_arr['fields']['xcjssj']['1'] =  $this->xcjssj;
       $this->SC_log_arr['fields']['wzqd']['1'] =  $this->wzqd;
       $this->SC_log_arr['fields']['zbkssj']['1'] =  $this->zbkssj;
       $this->SC_log_arr['fields']['zbjssj']['1'] =  $this->zbjssj;
       $this->SC_log_arr['fields']['zbfile']['1'] =  $this->zbfile;
       $this->SC_log_arr['fields']['lxr']['1'] =  $this->lxr;
       $this->SC_log_arr['fields']['bgdh']['1'] =  $this->bgdh;
       $this->SC_log_arr['fields']['yddh']['1'] =  $this->yddh;
       $this->SC_log_arr['fields']['fax']['1'] =  $this->fax;
       $this->SC_log_arr['fields']['email']['1'] =  $this->email;
       $this->SC_log_arr['fields']['postcode']['1'] =  $this->postcode;
       $this->SC_log_arr['fields']['dz']['1'] =  $this->dz;
       $this->SC_log_arr['fields']['kfh']['1'] =  $this->kfh;
       $this->SC_log_arr['fields']['yhzh']['1'] =  $this->yhzh;
       $this->SC_log_arr['fields']['ybqy']['1'] =  $this->ybqy;
       $this->SC_log_arr['fields']['xmsm']['1'] =  $this->xmsm;
       $this->SC_log_arr['fields']['shsj']['1'] =  $this->shsj;
       $this->SC_log_arr['fields']['shzt']['1'] =  $this->shzt;
       $this->SC_log_arr['fields']['sfjs']['1'] =  $this->sfjs;
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
// 
 function gera_icone($doc) 
 {
    $cam_icone = "";
    $path =  $this->Ini->root . $this->Ini->path_icones . "/";
    if (is_dir($path))
    {
        $nm_icones = nm_list_icon($path); 
        $nm_tipo = strtolower(substr($doc, strrpos($doc, ".") + 1));
        if (isset($nm_icones[$nm_tipo]) && !empty($nm_icones[$nm_tipo]))
        {
            $cam_icone = $this->Ini->path_icones . "/" . $nm_icones[$nm_tipo];
        }
        else
        {
            $cam_icone = $this->Ini->path_icones . "/" . $nm_icones["default"];
        }
    }
    return $cam_icone;
 } 
//
function cgbbh_onChange($cgfs, $cgbmc, $cgbbh)
{
$_SESSION['scriptcase']['form_cg_zbgg']['contr_erro'] = 'on';
     
$original_cgbbh = $this->cgbbh;
$original_cgbmc = $this->cgbmc;
$original_cgfs = $this->cgfs;
$original_cgfs = $this->cgfs;
$original_cgbmc = $this->cgbmc;
$original_cgbbh = $this->cgbbh;

if(!empty($this->cgbbh ))
{
     
      $nm_select = "
select cgbmc,cgfs from  cg_cgrwfp where cgbbh='".$this->cgbbh ."' "; 
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
    $this->cgbmc  = $this->rs[0][0];
	 $this->cgfs  = $this->rs[0][1];
}

$modificado_cgbbh = $this->cgbbh;
$modificado_cgbmc = $this->cgbmc;
$modificado_cgfs = $this->cgfs;
$modificado_cgfs = $this->cgfs;
$modificado_cgbmc = $this->cgbmc;
$modificado_cgbbh = $this->cgbbh;
$this->nm_formatar_campos('cgbbh', 'cgbmc', 'cgfs');
if ($original_cgbbh !== $modificado_cgbbh || (isset($bFlagRead_cgbbh) && $bFlagRead_cgbbh))
{
    $this->ajax_return_values_cgbbh(true);
}
if ($original_cgbmc !== $modificado_cgbmc || (isset($bFlagRead_cgbmc) && $bFlagRead_cgbmc))
{
    $this->ajax_return_values_cgbmc(true);
}
if ($original_cgfs !== $modificado_cgfs || (isset($bFlagRead_cgfs) && $bFlagRead_cgfs))
{
    $this->ajax_return_values_cgfs(true);
}
if ($original_cgfs !== $modificado_cgfs || (isset($bFlagRead_cgfs) && $bFlagRead_cgfs))
{
    $this->ajax_return_values_cgfs(true);
}
if ($original_cgbmc !== $modificado_cgbmc || (isset($bFlagRead_cgbmc) && $bFlagRead_cgbmc))
{
    $this->ajax_return_values_cgbmc(true);
}
if ($original_cgbbh !== $modificado_cgbbh || (isset($bFlagRead_cgbbh) && $bFlagRead_cgbbh))
{
    $this->ajax_return_values_cgbbh(true);
}
form_cg_zbgg_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_cg_zbgg']['contr_erro'] = 'off';
}
function lxr_onChange($email, $yddh, $bgdh, $lxr)
{
$_SESSION['scriptcase']['form_cg_zbgg']['contr_erro'] = 'on';
     
$original_lxr = $this->lxr;
$original_bgdh = $this->bgdh;
$original_yddh = $this->yddh;
$original_email = $this->email;
$original_email = $this->email;
$original_yddh = $this->yddh;
$original_bgdh = $this->bgdh;
$original_lxr = $this->lxr;

if(!empty($this->lxr ))
{
     
      $nm_select = "
select zjhm,yddh,email  from cg_staff where ygxm='".$this->lxr ."' "; 
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
    $this->bgdh  = $this->rs[0][0];
	 $this->yddh  = $this->rs[0][1];
	 $this->email  = $this->rs[0][2];
}

$modificado_lxr = $this->lxr;
$modificado_bgdh = $this->bgdh;
$modificado_yddh = $this->yddh;
$modificado_email = $this->email;
$modificado_email = $this->email;
$modificado_yddh = $this->yddh;
$modificado_bgdh = $this->bgdh;
$modificado_lxr = $this->lxr;
$this->nm_formatar_campos('lxr', 'bgdh', 'yddh', 'email');
if ($original_lxr !== $modificado_lxr || (isset($bFlagRead_lxr) && $bFlagRead_lxr))
{
    $this->ajax_return_values_lxr(true);
}
if ($original_bgdh !== $modificado_bgdh || (isset($bFlagRead_bgdh) && $bFlagRead_bgdh))
{
    $this->ajax_return_values_bgdh(true);
}
if ($original_yddh !== $modificado_yddh || (isset($bFlagRead_yddh) && $bFlagRead_yddh))
{
    $this->ajax_return_values_yddh(true);
}
if ($original_email !== $modificado_email || (isset($bFlagRead_email) && $bFlagRead_email))
{
    $this->ajax_return_values_email(true);
}
if ($original_email !== $modificado_email || (isset($bFlagRead_email) && $bFlagRead_email))
{
    $this->ajax_return_values_email(true);
}
if ($original_yddh !== $modificado_yddh || (isset($bFlagRead_yddh) && $bFlagRead_yddh))
{
    $this->ajax_return_values_yddh(true);
}
if ($original_bgdh !== $modificado_bgdh || (isset($bFlagRead_bgdh) && $bFlagRead_bgdh))
{
    $this->ajax_return_values_bgdh(true);
}
if ($original_lxr !== $modificado_lxr || (isset($bFlagRead_lxr) && $bFlagRead_lxr))
{
    $this->ajax_return_values_lxr(true);
}
form_cg_zbgg_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_cg_zbgg']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_cg_zbgg_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->wzqd != "" && $this->wzqd != "none")   
   { 
       $sTmpExtension = pathinfo($this->wzqd, PATHINFO_EXTENSION);
       $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
       $sTmpFile_wzqd = 'sc_wzqd_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'] = array();
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'][$sTmpFile_wzqd] = $this->wzqd;
   } 
   if ($this->zbfile != "" && $this->zbfile != "none")   
   { 
       $sTmpExtension = pathinfo($this->zbfile, PATHINFO_EXTENSION);
       $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
       $sTmpFile_zbfile = 'sc_zbfile_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'] = array();
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['download_filenames'][$sTmpFile_zbfile] = $this->zbfile;
   } 
    include_once("form_cg_zbgg_form0.php");
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['csrf_token'];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_cg_zbgg_pack_ajax_response();
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
          $this->SC_monta_condicao($comando, "cgbbh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cgbmc", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cgfs", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bzj", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "bskssj", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "bsjssj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bsf", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "xckssj", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "xcjssj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "wzqd", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "zbkssj", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "zbjssj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "zbfile", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "lxr", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bgdh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "yddh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fax", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "postcode", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dz", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_kfh($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "kfh", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "yhzh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_ybqy($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ybqy", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "xmsm", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "shsj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "shzt", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "sfjs", $arg_search, $data_search);
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
          $this->SC_monta_condicao($comando, "cgfs", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bzj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bsf", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "wzqd", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "zbfile", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "lxr", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bgdh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "yddh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fax", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "postcode", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "dz", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_kfh($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "kfh", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "yhzh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_ybqy($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ybqy", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "xmsm", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_cg_zbgg = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['total'] = $qt_geral_reg_form_cg_zbgg;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_cg_zbgg_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_cg_zbgg_pack_ajax_response();
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
      $nm_numeric[] = "id";$nm_numeric[] = "bzj";$nm_numeric[] = "bsf";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['decimal_db'] == ".")
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
      $Nm_datas['bskssj'] = "datetime";$Nm_datas['bsjssj'] = "datetime";$Nm_datas['xckssj'] = "datetime";$Nm_datas['xcjssj'] = "datetime";$Nm_datas['zbkssj'] = "datetime";$Nm_datas['zbjssj'] = "datetime";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['SC_sep_date1'];
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
   function SC_lookup_kfh($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT mc, mc FROM dm_bank WHERE (mc LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
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
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_ybqy($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT gsmc, gsmc FROM cg_company WHERE (gsmc LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
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
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
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
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_cg_zbgg_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_cg_zbgg_fim.php";
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
       form_cg_zbgg_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_cg_zbgg']['masterValue']);
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
