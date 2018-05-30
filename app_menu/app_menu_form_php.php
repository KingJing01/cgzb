<?php
include_once('app_menu_session.php');
session_start();
class app_menu_form_php
{
      var $sc_script_name;
      var $nm_location;
   function sc_Include($path, $tp, $name)
   {
       if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
       {
           include_once($path);
       }
   } // sc_Include

   function init()
   {
      $Campos_Mens_erro = "";
      $_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
      $sc_site_ssl   = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? true : false;
      $NM_dir_atual = getcwd();
      if (empty($NM_dir_atual))
      {
          $str_path_sys          = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
          $str_path_sys          = str_replace("\\", '/', $str_path_sys);
      }
      else
      {
          $sc_nm_arquivo         = explode("/", $_SERVER['PHP_SELF']);
          $str_path_sys          = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
      }
      //check publication with the prod
      $str_path_apl_url = $_SERVER['PHP_SELF'];
      $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
      $str_path_apl_dir = substr($str_path_sys, 0, strrpos($str_path_sys, "/"));
      $str_path_apl_dir = substr($str_path_apl_dir, 0, strrpos($str_path_apl_dir, "/")+1);
      //check prod
      if(!isset($_SESSION['scriptcase']['app_menu']['glo_nm_path_prod']) || empty($_SESSION['scriptcase']['app_menu']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['app_menu']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      $str_path_web  = $_SERVER['PHP_SELF'];
      $str_path_web  = str_replace("\\", '/', $str_path_web);
      $str_path_web  = str_replace('//', '/', $str_path_web);
      $str_root      = substr($str_path_sys, 0, -1 * strlen($str_path_web));
      $path_link     = substr($str_path_web, 0, strrpos($str_path_web, '/'));
      $path_link     = substr($path_link, 0, strrpos($path_link, '/')) . '/';
      $this->nm_location  = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $this->nm_location  = substr($_SERVER['PHP_SELF'], 0, $this->nm_location + 1) ;  
      $this->nm_location .= "index.php"; 
      $this->menu_sc_init = 1;
      $path_imag_cab = $path_link . "_lib/img";
      $path_imag_apl = $str_root . $path_link . "_lib/img";
      $path_libs     = $str_root . $_SESSION['scriptcase']['app_menu']['glo_nm_path_prod'] . "/lib/php";
      $path_third    = $str_root . $_SESSION['scriptcase']['app_menu']['glo_nm_path_prod'] . "/third";
      $path_adodb    = $str_root . $_SESSION['scriptcase']['app_menu']['glo_nm_path_prod'] . "/third/adodb";
      $this->path_css = $str_root . $path_link . "_lib/css/";
      $path_lib_php   = $str_root . $path_link . "_lib/lib/php";
      $this->str_lang      = (isset($_SESSION['scriptcase']['str_lang']) && !empty($_SESSION['scriptcase']['str_lang'])) ? $_SESSION['scriptcase']['str_lang'] : "zh_cn";
      $this->str_conf_reg  = (isset($_SESSION['scriptcase']['str_conf_reg']) && !empty($_SESSION['scriptcase']['str_conf_reg'])) ? $_SESSION['scriptcase']['str_conf_reg'] : "zh_cn";
      $this->str_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Sc8_BlueWood/Sc8_BlueWood";
       if (isset($_SESSION['scriptcase']['user_logout']))
       {
           foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
           {
               if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
               {
                   unset($_SESSION['scriptcase']['user_logout'][$ind]);
                   $nm_apl_dest = $parms['R'];
                   $dir = explode("/", $nm_apl_dest);
                   if (count($dir) == 1)
                   {
                       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                       $nm_apl_dest = $path_link . SC_dir_app_name($nm_apl_dest) . "/";
                   }
?>
                   <html>
                   <body>
                    <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
                   </form>
                   <script>
                    document.FRedirect.submit();
                   </script>
                   </body>
                   </html>
<?php
                   exit;
               }
           }
       }
      if (!function_exists("NM_is_utf8"))
      {
          include_once("../_lib/lib/php/nm_utf8.php");
      }
      if (!function_exists("SC_dir_app_ini"))
      {
          include_once("../_lib/lib/php/nm_ctrl_app_name.php");
      }
      SC_dir_app_ini('cgzb');
      if (!defined("SC_ERROR_HANDLER"))
      {
          define("SC_ERROR_HANDLER", 1);
          include_once(dirname(__FILE__) . "/app_menu_erro.php");
      }
      if (isset($_GET['sc_apl_menu']))
      {
          $_SESSION['scriptcase']['sc_usa_grupo']     = $_GET['sc_usa_grupo'];
          $_SESSION['scriptcase']['sc_item_menu']     = $_GET['sc_item_menu'];
          $_SESSION['scriptcase']['sc_apl_menu']      = $_GET['sc_apl_menu'];
          $_SESSION['scriptcase']['sc_apl_menu_link'] = urldecode($_GET['sc_apl_link']);
          $_SESSION['scriptcase']['sc_ult_apl_menu']  = array();
      }
      $this->sc_menu_item   = $_SESSION['scriptcase']['sc_item_menu'];
      $this->sc_script_name = $_SESSION['scriptcase']['sc_apl_menu'];
      include("../_lib/lang/". $this->str_lang .".lang.php");
      include("../_lib/css/" . $this->str_schema_all . "_menuH.php");
      include("../_lib/lang/config_region.php");
      include("../_lib/lang/lang_config_region.php");
      $this->sc_Include($path_lib_php . "/nm_functions.php", "", "") ; 
      $this->sc_Include($path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->nm_data = new nm_data("zh_cn");
      asort($this->Nm_lang_conf_region);
      $_SESSION['scriptcase']['charset'] = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "UTF-8";
      foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_conf_reg[$this->str_conf_reg][$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
      foreach ($this->Nm_lang as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
          {
              $ind = sc_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
              $this->Nm_lang[$ind] = $dados;
          }
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
      if (isset($this->Nm_lang['lang_errm_dbcn_conn']))
      {
          $_SESSION['scriptcase']['db_conn_error'] = $this->Nm_lang['lang_errm_dbcn_conn'];
      }
      $this->regionalDefault();
   if (isset($_SESSION['scriptcase']['sc_apl_seg']['app_menu']) && $_SESSION['scriptcase']['sc_apl_seg']['app_menu'] == "on")
   { 
      if (is_file($path_lib_php . "/nm_functions.php"))  
      {  
          $this->sc_Include($path_lib_php . "/nm_functions.php", "", "") ; 
      }  
      if (is_file($path_lib_php . "/nm_data.class.php"))  
      {
          $this->sc_Include($path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
          $this->nm_data = new nm_data("zh_cn");
      }
$this->sc_Include($path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
include_once($path_adodb . "/adodb.inc.php"); 
$this->sc_Include($path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
 if(function_exists('set_php_timezone')) set_php_timezone('app_menu'); 
perfil_lib($path_libs);
if (!isset($_SESSION['sc_session'][1]['SC_Check_Perfil']))
{
    if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($path_libs, $_SESSION['scriptcase']['app_menu']['glo_nm_path_prod']);
    $_SESSION['sc_session'][1]['SC_Check_Perfil'] = true;
}
$nm_falta_var    = ""; 
$nm_falta_var_db = ""; 
if (isset($_SESSION['scriptcase']['app_menu']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['app_menu']['glo_nm_conexao']))
{
    db_conect_devel($_SESSION['scriptcase']['app_menu']['glo_nm_conexao'], $str_root . $_SESSION['scriptcase']['app_menu']['glo_nm_path_prod'], 'cgzb', 2); 
}
if (isset($_SESSION['scriptcase']['app_menu']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['app_menu']['glo_nm_perfil']))
{
   $_SESSION['scriptcase']['glo_perfil'] = $_SESSION['scriptcase']['app_menu']['glo_nm_perfil'];
}
if (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
{
    $_SESSION['scriptcase']['glo_senha_protect'] = "";
    carrega_perfil($_SESSION['scriptcase']['glo_perfil'], $path_libs, "");
    if (empty($_SESSION['scriptcase']['glo_senha_protect']))
    {
        $nm_falta_var .= "Perfil=" . $_SESSION['scriptcase']['glo_perfil'] . "; ";
    }
}
if (isset($_SESSION['scriptcase']['glo_date_separator']) && !empty($_SESSION['scriptcase']['glo_date_separator']))
{
    $SC_temp = trim($_SESSION['scriptcase']['glo_date_separator']);
    if (strlen($SC_temp) == 2)
    {
       $_SESSION['scriptcase']['app_menu']['SC_sep_date']  = substr($SC_temp, 0, 1); 
       $_SESSION['scriptcase']['app_menu']['SC_sep_date1'] = substr($SC_temp, 1, 1); 
   }
   else
    {
       $_SESSION['scriptcase']['app_menu']['SC_sep_date']  = $SC_temp; 
       $_SESSION['scriptcase']['app_menu']['SC_sep_date1'] = $SC_temp; 
   }
}
if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
{
    $nm_falta_var_db .= "glo_tpbanco; ";
}
else
{
    $nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
}
if (!isset($_SESSION['scriptcase']['glo_servidor']))
{
    $nm_falta_var_db .= "glo_servidor; ";
}
else
{
    $nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
}
if (!isset($_SESSION['scriptcase']['glo_banco']))
{
    $nm_falta_var_db .= "glo_banco; ";
}
else
{
    $nm_banco = $_SESSION['scriptcase']['glo_banco']; 
}
if (!isset($_SESSION['scriptcase']['glo_usuario']))
{
    $nm_falta_var_db .= "glo_usuario; ";
}
else
{
    $nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
}
if (!isset($_SESSION['scriptcase']['glo_senha']))
{
    $nm_falta_var_db .= "glo_senha; ";
}
else
{
    $nm_senha = $_SESSION['scriptcase']['glo_senha']; 
}
$nm_con_db2 = array();
$nm_database_encoding = "";
if (isset($_SESSION['scriptcase']['glo_database_encoding']))
{
    $nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
}
$nm_con_persistente = "";
$nm_con_use_schema  = "";
if (isset($_SESSION['scriptcase']['glo_use_persistent']))
{
    $nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
}
if (isset($_SESSION['scriptcase']['glo_use_schema']))
{
    $nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
}
if (!empty($nm_falta_var) || !empty($nm_falta_var_db))
{
    if (empty($nm_falta_var_db))
    {
        echo "<table width=\"80%\"  border=\"1\" height=\"117\">";
        echo "<tr>";
        echo "   <td class=\"css_menu_sel\">";
        echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
        echo "  " . $nm_falta_var;
        echo "   </b></td>";
        echo " </tr>";
        echo "</table>";
    }
    else
    {
        echo "<table width=\"80%\"  border=\"1\" height=\"117\">";
        echo "<tr>";
        echo "   <td class=\"css_menu_sel\">";
        echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font>";
        echo "   </b></td>";
        echo " </tr>";
        echo "</table>";
    }
    if (isset($_SESSION['scriptcase']['nm_ret_exec']) && '' != $_SESSION['scriptcase']['nm_ret_exec'])
    { 
        if (isset($_SESSION['sc_session'][1]['app_menu']['sc_outra_jan']) && $_SESSION['sc_session'][1]['app_menu']['sc_outra_jan'])
        {
            echo "<a href='javascript:window.close()'><img border='0' src='" . $path_imag_cab . "/scriptcase__NM__exit.gif' title='" . $this->Nm_lang['lang_btns_menu_rtrn_hint'] . "' align=absmiddle></a> \n" ; 
        } 
        else 
        { 
            echo "<a href='" . $_SESSION['scriptcase']['nm_ret_exec'] . "><img border='0' src='" . $path_imag_cab . "/scriptcase__NM__exit.gif' title='" . $this->Nm_lang['lang_btns_menu_rtrn_hint'] . "' align=absmiddle></a> \n" ; 
        } 
    } 
    exit ;
} 
if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
{
    $nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
}
if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
{
    $nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
}
if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
{
    $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
}
$sc_tem_trans_banco = false;
$this->nm_bases_access    = array();
$this->nm_bases_mysql     = array("mysql", "mysqlt", "maxsql", "pdo_mysql");
$this->nm_bases_sqlite    = array("sqlite", "sqlite3", "pdosqlite");
$_SESSION['scriptcase']['sc_num_page'] = 1;
$_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1D9FYDuBqHArYV5FUHuNOVcBOV5FYHIFGHQBsZSBOHArKHQraHgveVkJ3DuXKZuFaD9NwDQFaHAveD5NUHgNKDkBOV5FYHMBiHQNmZSBqHAvmD5BOHgveHArsDWX7HIrqHQBiDuBqHAvOV5XGHgvOVcBUDWXKVoF7HQNwZ1FGZ1NOHuXGHgBOVkJ3DWXCHIJsD9XsZ9JeD1BeD5F7DMvmVcXKDWFYVorqD9BiZ1X7HIveZMJeHgvsHEJqDWX7ZuB/D9JKZSFUD1BeV5FGDMBYDkBsV5F/HIFGHQXOZkFGHArKV5FUDMrYZSXeV5FqHIJsD9NwDQJsHABYV5raHuNOVcFCHEFYVoFGD9XOZ1B/HIrwD5BiDMBYVkJGDWr/DoB/D9XsH9FGDSN7D5JwDMvmVcFKV5BmVoBqD9BsZkFGHAvsD5FaDMBYHEJGDWF/DoBODcXOZSX7Z1BYD5JwHuNOVIFCDWFYVoJwDcJUZSB/Z1BeD5XGDEBOHEJqV5FaDoBOD9JKDQJwHANKD5NUHuzGVcFKDur/VorqHQJmZ1F7Z1vmD5rqDEBOHArCDWF/HIX7DcBiH9X7HAvCV5BqHuBYZSJqH5FqHMraHQXGZ1FaD1rwHQFaHgBeHEFiV5B3DoF7D9XsDuFaHAveHQXGDMvsVIB/DWFaHMB/HQBsVIJsHAN7HQBOHgvCHEJqDWF/HMB/HQJeDuBqHAN7HuBiDMrwVcB/DWF/VoBiHQXGZ1FGHIBeHuJwHgvCHArCDWX7HIBOHQXsH9BiHIrwHuJwHgNKDkBODuFqDoFGDcBqVIJwD1rwHuBOHgBYVkJ3V5FqHIJeHQBiZSFUHABYV5FaDMrwV9FeDuFqHMJeHQXGVIJsHArYHQX7HgvCHEJqDuJeHMBqHQBiH9BiHArYHuraDMrwV9BUHEX/VErqDcFYZkBiDSrYHuXGDMrYZSXeDuFYVoXGDcJeZ9rqD1BeHQXGDMvsVIB/Dur/HIBiHQBqZkFGHAN7HQBiHgvCHArCHEXCHINUHQNmH9BiHANOHuF7DMrwVcB/DWF/HMraHQBqZkFGD1zGD5XGHgvCHArCDWXCHMBqHQFYZ9XGD1vOV5BOHgNKDkBODuFqDoFGDcBqVIJwD1rwHuBOHgBYVkJqDWr/HIBiDcBiH9FUHIrKHQBODMrwV9FeV5F/HMFGHQXOZ1FGHAvCZMXGHgvCHEJqH5F/HIFUHQJKH9BiHAN7HuJeDMrwVcB/HEX/VoFGHQXGZSBOHArKHuFGDMrYZSXeDuFYVoXGDcJeZ9rqD1BOD5FaDMNaZSrCHEBmVoFaHQXOZ1B/HAvmD5raDEBOHEJGDWFqVoX7D9NmDQJsDSBYV5JeHuNOVcFKH5XKVoFaHQXOZkFGD1rKD5JeDMrYHEFiDWX7DoJeDcBwDuBOHAveV5BqHuvmVcFKV5X7VEF7D9BsVIraHINaD5raDENOHEXeV5FaZuB/DcJUDQJsD1BeV5FUHuNOZSrCDWXCVEraD9XOH9B/D1zGD5raDMzGHEXeHEFqZuFaD9JKDQJsHABYV5BOHgNKVcFKV5X7DorqDcBwZ1rqD1rKV5XGDMzGHEXeV5B7DoNUDcBwH9X7Z1rwV5BOHgNKVcFKDuFqDoFGDcBqH9B/HArYV5FUDErKZSXeHEFqVoBiDcBwZ9rqZ1vCV5FGHuNOVcFKHEFYVoBqDcBwH9BqDSvOZMJwDMvCDkB/DuJeHMBiHQFYZSBiHIBOD5F7HgvOZSNiDWF/HIFUDcNmZ1X7D1vsV5X7HgveVkJ3H5FYHIBiHQNmDQB/D1vOD5F7DMvmV9FeH5XCVoBiHQBqZ1FGZ1vOD5rqDEBOHEFiHEFqDoF7DcJUZSFGD1BeV5FGHgrYDkFCDWXCVoB/D9BiZ1F7HIveD5BiHgvCZSJ3DWX7DoBOD9NwDQJsHIBeD5BqHgvsDkBODWFaVENUD9JmZ1B/Z1BeV5FUDErKDkBsV5FaHMJeDcBwDQFGD1veHQXGHgvsVcBOHEX7DoraHQFYH9FaHAvmZMXGHgveHAFKV5FaZuBqD9NmZSFGHIrwV5BOHuNODkBOV5X7VENUHQFYH9FaD1rwD5rqDErKVkXeHEFqDoBOD9NmDQJsD1BeV5FUHuzGDkBOH5XKVoraDcBwH9B/HIrwV5JeDMBYDkBsH5FYDoXGDcJeZSFUZ1rwD5BOHuNODkFCH5FqVENUDcNwH9BOD1rwV5XGDErKVkXeDWFqVoJwDcBwDQJsHABYHQXGHgvsVcBOH5FqHMJeD9BsH9B/Z1BeV5JsHgvCHArCDWX7VoXGD9NwZ9JeZ1N7D5rqHuNODkBOH5FqVoB/D9BsZ1FGHArKV5FUDMrYZSXeV5FqHIJsHQBiZ9XGHANKV5XGDMvsVcBUDWB3VoFGHQNmVINUHANOHQJwDEBODkFeH5FYVoFGHQJKDQFaHAvOD5F7HgvsDkBODuB7VoFGHQXGZSBOZ1BeHuXGDEvsVkXeHEFqHIJsD9XsZ9JeD1BeD5F7DMvmVcrsDuX7VoB/D9BsZSB/HIBOD5raDMBYZSXeDuJeDoraD9XsH9X7HIrwVWXGHgrKVcBOHEFYHMBiD9BsVIraD1rwV5X7HgBeHErsDurmVoBiHQBiDQNUZ1rKVWFU";
 $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['app_menu']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['app_menu']['glo_nm_conexao']))
{ 
   $this->Db = db_conect_devel($_SESSION['scriptcase']['app_menu']['glo_nm_conexao'], $str_root . $_SESSION['scriptcase']['app_menu']['glo_nm_path_prod'], 'cgzb'); 
} 
else 
{ 
   $this->Db = db_conect($nm_tpbanco, $nm_servidor, $nm_usuario, $nm_senha, $nm_banco, $glo_senha_protect, "S", $nm_con_persistente, $nm_con_db2, $nm_database_encoding); 
} 
$this->nm_tpbanco = $nm_tpbanco; 
//
   } 
      $this->tab_grupo[0] = "cgzb/";
      if ($_SESSION['scriptcase']['sc_usa_grupo'] != "S")
      {
          $this->tab_grupo[0] = "";
      }
   if (isset($_SESSION['scriptcase']['sc_apl_seg']['app_menu']) && $_SESSION['scriptcase']['sc_apl_seg']['app_menu'] == "on")
   { 
      $_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
if (!isset($_SESSION['logged_date_login'])) {$_SESSION['logged_date_login'] = "";}
if (!isset($this->sc_temp_logged_date_login)) {$this->sc_temp_logged_date_login = (isset($_SESSION['logged_date_login'])) ? $_SESSION['logged_date_login'] : "";}
if (!isset($_SESSION['logged_user'])) {$_SESSION['logged_user'] = "";}
if (!isset($this->sc_temp_logged_user)) {$this->sc_temp_logged_user = (isset($_SESSION['logged_user'])) ? $_SESSION['logged_user'] : "";}
               if($this->sc_script_name == 'sec_Login'):
   $this->sc_logged_out($this->sc_temp_logged_user, $this->sc_temp_logged_date_login);
endif;
if($this->sc_script_name == 'app_Login'):
   $this->sc_logged_out($this->sc_temp_logged_user, $this->sc_temp_logged_date_login);
endif;
if (isset($this->sc_temp_logged_user)) {$_SESSION['logged_user'] = $this->sc_temp_logged_user;}
if (isset($this->sc_temp_logged_date_login)) {$_SESSION['logged_date_login'] = $this->sc_temp_logged_date_login;}
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
      $_SESSION['scriptcase']['sc_ult_apl_menu'] = array();
      unset($_SESSION['scriptcase']['sc_usa_grupo']);
if ($this->Db)
{
    $this->Db->Close(); 
}
   } 
      $link_url = false;
      $parms_session = "";

      if ($_SESSION['scriptcase']['sc_item_menu'] == "app_menu")
      {
              $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_change_pswd") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=1&script_case_session=" . session_id() . "";
      }
      elseif (isset($_SESSION['scriptcase']['sc_def_menu']['app_menu']))
      {
         foreach($_SESSION['scriptcase']['sc_def_menu']['app_menu'] as $id_item => $arr_item)
         {
             if ($_SESSION['scriptcase']['sc_item_menu'] == $id_item)
             { 
                 if ($arr_item['lnk_url'])
                 { 
                    $apl_run = $arr_item['url'];
                    $link_url = true;
                 } 
                 else 
                 { 
                    $this->menu_sc_init = (isset($arr_item['sc_init'])) ? $arr_item['sc_init'] : 1;
                    $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . $arr_item['url']; 
                    $parms_session = $arr_item['parm']; 
                 } 
                break; 
             } 
         }
      }
      else
      {
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_79")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_notice_add") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_75")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_notice") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_60")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_service_guide") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_99")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_suggestion_add") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_100")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_suggestion_box") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_132")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_company") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_131")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_shlc") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_126")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_cgpm") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_127")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_cgy") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_128")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_bm") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_129")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_staff") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_130")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_zjk") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_134")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_ysly") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_135")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_zjly") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_136")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_cgfs") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_137")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_cgzt") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_138")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_shzt") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_139")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_ysjd") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_140")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_ysjg") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_141")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_htlx") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_142")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_fklx") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_143")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_bank") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_144")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_qylx") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_145")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_reviewstate") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_146")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_zyfl") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_147")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_zc") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_148")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_zcjb") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_149")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_work") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_151")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_dm_xmzjkrule") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_178")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_sys_config") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_182")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_cg_lxgl") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_154")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_lxgl") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_183")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_cg_cgjh") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_155")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_cgjh") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_156")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_cgb") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_157")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_cgrwfp") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_184")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_cg_zbgg") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_159")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_zbgg") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_165")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_qysb") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_169")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_qytb_view") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_167")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_zbgg_spable") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_168")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_qysb_ysb") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_170")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_qytb") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_110")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_eval_cpb") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_171")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_cg_xmzjk_auto") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_172")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_xmzjk") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_173")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("search_eval_cg_qytb_temp") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_113")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_eval_plan") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_174")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_eval_cpresult") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_176")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_dzcp_tolist_byzjbh") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_177")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_dzcp_oklist_byzjbh") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_185")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("form_cg_htgl") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_161")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_htgl") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_163")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_htysdj") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_164")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_cg_htfkdj") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_180")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("chart_cg_csfstj") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_181")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("chart_cg_cgpmtj") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_49")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_grid_sec_users") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_50")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_grid_sec_apps") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_51")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_grid_sec_groups") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_52")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_search_sec_groups") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_119")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("grid_sc_log") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_56")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_logged_users") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_54")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_change_pswd") . "/?nm_run_menu=1&nm_apl_menu=app_menu&script_case_init=" . $this->Gera_sc_init($this->sc_menu_item) . "&script_case_session=" . session_id() . "";
      }
      if ($_SESSION['scriptcase']['sc_item_menu'] == "item_55")
      {
          $apl_run = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . SC_dir_app_name("sec_Login") . "/?script_case_init=" . $_SESSION['sc_session'][1]['app_menu']['init'] . "&script_case_session=" . session_id() . "";
      }
      }
      if (!$link_url)
      {
          $pos = strpos($apl_run, "?");
          if ($pos !== false)
          {
              $parms = "";
              $temp = explode("&", substr($apl_run, $pos + 1));
              foreach ($temp as $cada_parm)
              {
                  $parte_parm = explode("=", $cada_parm);
                  $parms .= (!empty($parms)) ? "?@?" . $parte_parm[0] . "?#?" : $parte_parm[0] . "?#?";
                  $parms .= (isset($parte_parm[1])) ? $parte_parm[1] : "";
              }
              $apl_run =  substr($apl_run, 0, $pos);
          }
      }
      if ($parms_session != "")
      {
          $parms  = isset($parms) ? $parms : '';
          $parms  = $parms_session . (substr($parms_session, -3, 3) != '?@?' ? '?@?' : '') . $parms;
      }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">

      <html><body>
        <form name="fmenu" method="post" action="<?php echo NM_encode_input($apl_run); ?>">
          <input type=hidden name="nmgp_parms" value="<?php  echo NM_encode_input($parms); ?>"> 
          <input type=hidden name="script_case_init" value="<?php echo $this->menu_sc_init ?>"> 
          <input type=hidden name="script_case_session" value="<?php echo NM_encode_input(session_id()) ?>"> 
          <input type=hidden name="nm_apl_menu" value="app_menu"> 
<?php
      if (isset($_SESSION['scriptcase']['menu_mobile']) && $_SESSION['scriptcase']['menu_mobile'] == "app_menu")
      {
?>
          <input type=hidden name="nmgp_url_saida" value="<?php echo $this->nm_location ?>"> 
<?php
      }
?>
        </form>
      <script type="text/javascript">
<?php
      if (isset($_SESSION['scriptcase']['menu_mobile']) && $_SESSION['scriptcase']['menu_mobile'] == "app_menu")
      {
?>
          window.history.pushState('Object', 'app_menu', '<?php echo $this->nm_location ?>');
<?php
      }
      if ($link_url)
      {
?>
          window.location='<?php echo $apl_run; ?>'; 
<?php
      }
      else
      {
?>
          (function() { document.fmenu.submit(); })();
<?php
      }
?>
      </script>
      </body></html>
<?php
   }
   function Gera_sc_init($apl_menu)
   {
       $this->menu_sc_init = 1;
        return  1;
   }
function sc_logged($user, $ip = '')
	{
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
               
		$str_sql = "SELECT sec_logged.date_login, sec_logged.ip FROM sec_logged WHERE sec_logged.login = '". $user ."' AND sec_logged.sc_session <> '_SC_FAIL_SC_'";

		 
      $nm_select = $str_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->data = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->data = false;
          $this->data_erro = $this->Db->ErrorMsg();
      } 
;

		if($this->data  === FALSE || !isset($this->data->fields[0]))
		{
            $ip = ($ip == '') ? $_SERVER['REMOTE_ADDR'] : $ip;
		$this->sc_logged_in($user, $ip);
			return true;
		}
		else
		{
            if (isset($_SESSION['scriptcase']['sc_apl_conf']['sec_logged']))
{
unset($_SESSION['scriptcase']['sc_apl_conf']['sec_logged']);
}
;
            $_SESSION['scriptcase']['sc_apl_seg']['sec_logged'] = "on";;
			 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . "" . SC_dir_app_name('sec_logged') . "/", "app_menu_form_php.php", "user?#?" . $user . "?@?","_self", 440, 630);
 };
			return false;
		}
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
function sc_verify_logged()
	{
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
if (!isset($_SESSION['logged_date_login'])) {$_SESSION['logged_date_login'] = "";}
if (!isset($this->sc_temp_logged_date_login)) {$this->sc_temp_logged_date_login = (isset($_SESSION['logged_date_login'])) ? $_SESSION['logged_date_login'] : "";}
if (!isset($_SESSION['logged_user'])) {$_SESSION['logged_user'] = "";}
if (!isset($this->sc_temp_logged_user)) {$this->sc_temp_logged_user = (isset($_SESSION['logged_user'])) ? $_SESSION['logged_user'] : "";}
               
		$str_sql = "SELECT count(*) FROM sec_logged WHERE sec_logged.login = '". $this->sc_temp_logged_user . "' AND sec_logged.date_login = '". $this->sc_temp_logged_date_login ."' AND sec_logged.sc_session <> '_SC_FAIL_SC_'";
		 
      $nm_select = $str_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_logged = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->rs_logged[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_logged = false;
          $this->rs_logged_erro = $this->Db->ErrorMsg();
      } 
;
		if($this->rs_logged[0][0] != 1)
		{
			 if (isset($this->sc_temp_logged_user)) {$_SESSION['logged_user'] = $this->sc_temp_logged_user;}
 if (isset($this->sc_temp_logged_date_login)) {$_SESSION['logged_date_login'] = $this->sc_temp_logged_date_login;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . "" . SC_dir_app_name('sec_Login') . "/", "app_menu_form_php.php", "","_parent", 440, 630);
 };
		}
if (isset($this->sc_temp_logged_user)) {$_SESSION['logged_user'] = $this->sc_temp_logged_user;}
if (isset($this->sc_temp_logged_date_login)) {$_SESSION['logged_date_login'] = $this->sc_temp_logged_date_login;}
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
function sc_logged_in($user, $ip = '')
	{
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
if (!isset($_SESSION['logged_date_login'])) {$_SESSION['logged_date_login'] = "";}
if (!isset($this->sc_temp_logged_date_login)) {$this->sc_temp_logged_date_login = (isset($_SESSION['logged_date_login'])) ? $_SESSION['logged_date_login'] : "";}
if (!isset($_SESSION['logged_user'])) {$_SESSION['logged_user'] = "";}
if (!isset($this->sc_temp_logged_user)) {$this->sc_temp_logged_user = (isset($_SESSION['logged_user'])) ? $_SESSION['logged_user'] : "";}
               
        $ip = ($ip == '') ? $_SERVER['REMOTE_ADDR'] : $ip;
		$this->sc_temp_logged_user = $user;
		$this->sc_temp_logged_date_login = microtime(true);

        $str_sql = "DELETE FROM sec_logged WHERE sec_logged.login = '". $user . "' AND sec_logged.sc_session = '_SC_FAIL_SC_' AND sec_logged.ip = '".$ip."'";
        
     $nm_select = $str_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             echo $this->Nm_lang['lang_errm_dber'] . ": " . $this->Db->ErrorMsg();
             echo "<br>APL: app_menu";
             echo "<br>Line: " . __LINE__;
             if ($sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;

    	$str_sql = "INSERT INTO sec_logged(sec_logged.login, sec_logged.date_login, sec_logged.sc_session, sec_logged.ip) VALUES ('". $user ."', '". $this->sc_temp_logged_date_login ."', '". session_id() ."', '". $ip ."')";
	    
     $nm_select = $str_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             echo $this->Nm_lang['lang_errm_dber'] . ": " . $this->Db->ErrorMsg();
             echo "<br>APL: app_menu";
             echo "<br>Line: " . __LINE__;
             if ($sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;
if (isset($this->sc_temp_logged_user)) {$_SESSION['logged_user'] = $this->sc_temp_logged_user;}
if (isset($this->sc_temp_logged_date_login)) {$_SESSION['logged_date_login'] = $this->sc_temp_logged_date_login;}
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
function sc_logged_in_fail($user, $ip = '')
    {
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
               
        $ip = ($ip == '') ? $_SERVER['REMOTE_ADDR'] : $ip;
        $str_sql = "INSERT INTO sec_logged(sec_logged.login, sec_logged.date_login, sec_logged.sc_session, sec_logged.ip) VALUES ('" . $user . "', '" . microtime(true) . "', '_SC_FAIL_SC_', '" . $ip . "')";
        
     $nm_select = $str_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             echo $this->Nm_lang['lang_errm_dber'] . ": " . $this->Db->ErrorMsg();
             echo "<br>APL: app_menu";
             echo "<br>Line: " . __LINE__;
             if ($sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;
        return true;
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
function sc_logged_is_blocked($ip = '')
    {
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
               
        $ip = ($ip == '') ? $_SERVER['REMOTE_ADDR'] : $ip;
        $minutes_ago = strtotime("-10 minutes");
        $str_select = "SELECT count(*) FROM sec_logged WHERE sec_logged.sc_session = '_SC_BLOCKED_SC_' AND sec_logged.ip = '".$ip."' AND sec_logged.date_login > '". $minutes_ago ."'";
         
      $nm_select = $str_select; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_logged = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->rs_logged[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_logged = false;
          $this->rs_logged_erro = $this->Db->ErrorMsg();
      } 
;
        if($this->rs_logged  !== FALSE && $this->rs_logged[0][0] == 1)
        {
            $message = $this->Nm_lang['lang_user_blocked'];
                $message = sprintf($message, 10);
                
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $message;
;
                return true;
        }

        $str_select = "SELECT count(*) FROM sec_logged WHERE sec_logged.sc_session = '_SC_FAIL_SC_' AND sec_logged.ip = '".$ip."' AND sec_logged.date_login > '". $minutes_ago ."'";
         
      $nm_select = $str_select; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_logged = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->rs_logged[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_logged = false;
          $this->rs_logged_erro = $this->Db->ErrorMsg();
      } 
;

        if($this->rs_logged  !== FALSE && $this->rs_logged[0][0] == 10)
        {
            $str_sql = "INSERT INTO sec_logged(sec_logged.login, sec_logged.date_login, sec_logged.sc_session, sec_logged.ip) VALUES ('blocked', '". microtime(true) ."', '_SC_BLOCKED_SC_', '". $ip ."')";
            
     $nm_select = $str_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             echo $this->Nm_lang['lang_errm_dber'] . ": " . $this->Db->ErrorMsg();
             echo "<br>APL: app_menu";
             echo "<br>Line: " . __LINE__;
             if ($sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;
            $message = $this->Nm_lang['lang_user_blocked'];
                $message = sprintf($message, 10);
                
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $message;
;
                return true;
        }
        return false;
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
function sc_logged_out($user, $date_login = '')
	{
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
if (!isset($_SESSION['logged_user'])) {$_SESSION['logged_user'] = "";}
if (!isset($this->sc_temp_logged_user)) {$this->sc_temp_logged_user = (isset($_SESSION['logged_user'])) ? $_SESSION['logged_user'] : "";}
if (!isset($_SESSION['logged_date_login'])) {$_SESSION['logged_date_login'] = "";}
if (!isset($this->sc_temp_logged_date_login)) {$this->sc_temp_logged_date_login = (isset($_SESSION['logged_date_login'])) ? $_SESSION['logged_date_login'] : "";}
               
		$date_login = ($date_login == '' ? "" : " AND sec_logged.date_login = '". $date_login ."'");

		$str_sql = "SELECT sec_logged.sc_session FROM sec_logged WHERE sec_logged.login = '". $user ."' ". $date_login . " AND sec_logged.sc_session <> '_SC_FAIL_SC_'";
		 
      $nm_select = $str_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->data = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->data[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->data = false;
          $this->data_erro = $this->Db->ErrorMsg();
      } 
;
		if(isset($this->data[0][0]) && !empty($this->data[0][0]))
        {
			$session_bkp = $_SESSION;
			$sessionid = session_id();
			session_write_close();

			session_id($this->data[0][0]);
			session_start();
			$_SESSION['logged_user'] = 'logout';
			session_write_close();

			session_id($sessionid);
			session_start();
			$_SESSION = $session_bkp;
		}


		$str_sql = "DELETE FROM sec_logged WHERE sec_logged.login = '". $user . "' " . $date_login;
		
     $nm_select = $str_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             echo $this->Nm_lang['lang_errm_dber'] . ": " . $this->Db->ErrorMsg();
             echo "<br>APL: app_menu";
             echo "<br>Line: " . __LINE__;
             if ($sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;
		 unset($_SESSION['logged_date_login']);
 unset($this->sc_temp_logged_date_login);
 unset($_SESSION['logged_user']);
 unset($this->sc_temp_logged_user);
;
if (isset($this->sc_temp_logged_date_login)) {$_SESSION['logged_date_login'] = $this->sc_temp_logged_date_login;}
if (isset($this->sc_temp_logged_user)) {$_SESSION['logged_user'] = $this->sc_temp_logged_user;}
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
function sc_looged_check_logout()
    {
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'on';
if (!isset($_SESSION['usr_email'])) {$_SESSION['usr_email'] = "";}
if (!isset($this->sc_temp_usr_email)) {$this->sc_temp_usr_email = (isset($_SESSION['usr_email'])) ? $_SESSION['usr_email'] : "";}
if (!isset($_SESSION['logged_date_login'])) {$_SESSION['logged_date_login'] = "";}
if (!isset($this->sc_temp_logged_date_login)) {$this->sc_temp_logged_date_login = (isset($_SESSION['logged_date_login'])) ? $_SESSION['logged_date_login'] : "";}
if (!isset($_SESSION['logged_user'])) {$_SESSION['logged_user'] = "";}
if (!isset($this->sc_temp_logged_user)) {$this->sc_temp_logged_user = (isset($_SESSION['logged_user'])) ? $_SESSION['logged_user'] : "";}
if (!isset($_SESSION['usr_login'])) {$_SESSION['usr_login'] = "";}
if (!isset($this->sc_temp_usr_login)) {$this->sc_temp_usr_login = (isset($_SESSION['usr_login'])) ? $_SESSION['usr_login'] : "";}
               
        if(isset($this->sc_temp_logged_user) && ($this->sc_temp_logged_user == 'logout' || empty($this->sc_temp_logged_user)))
        {
             unset($_SESSION['usr_login']);
 unset($this->sc_temp_usr_login);
 unset($_SESSION['logged_user']);
 unset($this->sc_temp_logged_user);
 unset($_SESSION['logged_date_login']);
 unset($this->sc_temp_logged_date_login);
 unset($_SESSION['usr_email']);
 unset($this->sc_temp_usr_email);
;
        }
if (isset($this->sc_temp_usr_login)) {$_SESSION['usr_login'] = $this->sc_temp_usr_login;}
if (isset($this->sc_temp_logged_user)) {$_SESSION['logged_user'] = $this->sc_temp_logged_user;}
if (isset($this->sc_temp_logged_date_login)) {$_SESSION['logged_date_login'] = $this->sc_temp_logged_date_login;}
if (isset($this->sc_temp_usr_email)) {$_SESSION['usr_email'] = $this->sc_temp_usr_email;}
$_SESSION['scriptcase']['app_menu']['contr_erro'] = 'off';
}
   function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $alt_modal=0, $larg_modal=0)
   {
      if (is_array($nm_apl_parms))
      {
          $tmp_parms = "";
          foreach ($nm_apl_parms as $par => $val)
          {
              $par = trim($par);
              $val = trim($val);
              $tmp_parms .= str_replace(".", "_", $par) . "?#?";
              if (substr($val, 0, 1) == "$")
              {
                  $tmp_parms .= $$val;
              }
              elseif (substr($val, 0, 1) == "{")
              {
                  $val        = substr($val, 1, -1);
                  $tmp_parms .= $this->$val;
              }
              elseif (substr($val, 0, 1) == "[")
              {
                  $tmp_parms .= $_SESSION['sc_session'][1]['app_menu'][substr($val, 1, -1)];
              }
              else
              {
                  $tmp_parms .= $val;
              }
              $tmp_parms .= "?@?";
          }
          $nm_apl_parms = $tmp_parms;
      }
      $nm_apl_retorno = $_SERVER['PHP_SELF'];
      $nm_apl_retorno = str_replace("\\", '/', $nm_apl_retorno);
      $nm_apl_retorno = str_replace('//', '/', $nm_apl_retorno);
      $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
      if (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../")
      {
          echo "<SCRIPT type=\"text/javascript\">";
          if (strtolower($nm_target) == "_blank")
          {
              echo "window.open ('" . $nm_apl_dest . "');";
          }
          else
          {
              echo "window.location='" . $nm_apl_dest . "';";
          }
          echo "</SCRIPT>";
          exit;
      }
      $dir = explode("/", $nm_apl_dest);
      if (count($dir) == 1)
      {
          $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
          $nm_apl_dest = $_SESSION['scriptcase']['sc_apl_menu_link'] . $this->tab_grupo[0] . $nm_apl_dest . "/" . $nm_apl_dest . ".php";
      }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">

      <HTML>
      <HEAD>
       <TITLE><?php echo $_SESSION['SYS_NAME'] ?> </TITLE>
     <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
       <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
       <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
       <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
       <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
       <META http-equiv="Pragma" content="no-cache"/>
      </HEAD>
      <BODY>
      <form name="Fredir" method="post" 
                            target="_self"> 
        <input type="hidden" name="nmgp_parms" value="<?php echo NM_encode_input($nm_apl_parms) ?>"/>
<?php
   if ($nm_target == "_blank")
   {
?>
         <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
        <input type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($nm_apl_retorno) ?>">
        <input type="hidden" name="script_case_init" value="1"/> 
        <input type=hidden name="script_case_session" value="<?php echo NM_encode_input(session_id()) ?>"> 
<?php
   }
?>
         <SCRIPT type="text/javascript">
          document.Fredir.target = "<?php echo $nm_target_form ?>"; 
          document.Fredir.action = "<?php echo $nm_apl_dest ?>";
          document.Fredir.submit();
      </SCRIPT>
      </BODY>
      </HTML>
<?php
     if ($nm_target != "_blank")
     {
         exit;
     }
   }
   function regionalDefault()
   {
       $_SESSION['scriptcase']['reg_conf']['date_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_format'] : "ddmmyyyy";
       $_SESSION['scriptcase']['reg_conf']['date_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_sep'] : "/";
       $_SESSION['scriptcase']['reg_conf']['date_week_ini'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema'] : "SU";
       $_SESSION['scriptcase']['reg_conf']['time_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_format'] : "hhiiss";
       $_SESSION['scriptcase']['reg_conf']['time_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_sep'] : ":";
       $_SESSION['scriptcase']['reg_conf']['time_pos_ampm'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm'] : "right_without_space";
       $_SESSION['scriptcase']['reg_conf']['time_simb_am']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am'] : "am";
       $_SESSION['scriptcase']['reg_conf']['time_simb_pm']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm'] : "pm";
       $_SESSION['scriptcase']['reg_conf']['simb_neg']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg'] : "-";
       $_SESSION['scriptcase']['reg_conf']['grup_num']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr'] : ".";
       $_SESSION['scriptcase']['reg_conf']['dec_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec'] : ",";
       $_SESSION['scriptcase']['reg_conf']['neg_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg'] : 2;
       $_SESSION['scriptcase']['reg_conf']['monet_simb']    = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo'] : "$";
       $_SESSION['scriptcase']['reg_conf']['monet_f_pos']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'] : 3;
       $_SESSION['scriptcase']['reg_conf']['monet_f_neg']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'] : 13;
       $_SESSION['scriptcase']['reg_conf']['grup_val']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr'] : ".";
       $_SESSION['scriptcase']['reg_conf']['dec_val']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec'] : ",";
       $_SESSION['scriptcase']['reg_conf']['html_dir']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] . "'" : "";
       $_SESSION['scriptcase']['reg_conf']['css_dir']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] : "LTR";
       $_SESSION['scriptcase']['reg_conf']['html_dir_only'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] : "";
       $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit'] : "1";
       $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'] : "1";
   }
}
if (!function_exists("SC_dir_app_ini"))
{
    include_once("../_lib/lib/php/nm_ctrl_app_name.php");
}
SC_dir_app_ini('cgzb');
$controle = new app_menu_form_php();
$controle->init();
?>
