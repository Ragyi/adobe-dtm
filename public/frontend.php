<?php
define('SDIDTM_WPFILTER_COMPILE_DATALAYER', 'sdidtm_compile_datalayer');

if ($GLOBALS["SDIDTM_options"][SDIDTM_OPTION_DATALAYER_NAME] == "") {
  // default data layer name
  $GLOBALS["SDIDTM_datalayer_name"] = "dataLayer";
} else {
  $GLOBALS["SDIDTM_datalayer_name"] = $GLOBALS["SDIDTM_options"][SDIDTM_OPTION_DATALAYER_NAME];
}

function SDIDTM_is_assoc($arr) {
  return array_keys($arr) !== range(0, count($arr) - 1);
}

function SDIDTM_disable(){
  global $SDIDTM_options, $current_user, $wp_admin_bar;
  $disable = false;

  $opts = array(
    'administrator' => $SDIDTM_options[SDIDTM_OPTION_DISABLE_ADMIN],
    'editor' => $SDIDTM_options[SDIDTM_OPTION_DISABLE_EDITOR],
    'author' => $SDIDTM_options[SDIDTM_OPTION_DISABLE_AUTHOR],
    'contributor' => $SDIDTM_options[SDIDTM_OPTION_DISABLE_CONTRIBUTOR],
    'subscriber' => $SDIDTM_options[SDIDTM_OPTION_DISABLE_SUBSCRIBER],
    'guest' => $SDIDTM_options[SDIDTM_OPTION_DISABLE_GUEST]
  );
  $perms = array();

  foreach($opts as $opt=>$val){
    if($val === 1 || $val == '1' || $val === true){
      if(in_array($opt, $current_user->roles)){
        $disable = true;
      }
    }
  }

  if($disable){
    // notify the logged in user in the admin bar that DTM is disabled
    if($wp_admin_bar){
      $wp_admin_bar->add_menu(
        array(
          'id'=>'adobe-dtm',
          'title'=>'Adobe DTM Disabled'
        )
      );
    }
  }

  // disable for guests
  if(!$disable && $opts['guest'] && count($current_user->roles) == 0){
    $disable = true;
  }

  return $disable;
}

function SDI_dtm_exists(){
  global $SDIDTM_options;

  if($SDIDTM_options[SDIDTM_OPTION_DTM_EXISTS]){
    return true;
  }
  else {
    return false;
  }
}

function SDIDTM_get_name($name){
  global $SDIDTM_defaultoptions, $SDIDTM_options;
  $value = $SDIDTM_options[$name];
  if(!$value || $value == ''){
    $value = $SDIDTM_defaultoptions[$name];
  }
  return $value;
}

if (!function_exists("getallheaders")) {
  function getallheaders() {
    $headers = "";
    foreach ($_SERVER as $name => $value) {
      if (substr($name, 0, 5) == "HTTP_") {
        $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5))))) ] = $value;
      }
    }
    
    return $headers;
  }
}

function SDIDTM_add_basic_datalayer_data($dataLayer) {
  global $current_user, $wp_query, $SDIDTM_options;

  if(SDIDTM_disable()){
    return array();
  }

  $date = array();
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_LOGGEDIN]) {
    if (is_user_logged_in()) {
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_LOGGEDIN)] = "logged-in";
    } else {
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_LOGGEDIN)] = "logged-out";
    }
  }
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_USERROLE]) {
    get_currentuserinfo();
    $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_USERROLE)] = ($current_user->roles[0] == NULL ? "visitor-logged-out" : $current_user->roles[0]);
  }
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTITLE]) {
    $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTTITLE)] = strip_tags(wp_title("|", false, "right"));
  }

  if (is_singular()) {
    if(get_the_ID() && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_PAGEID]){
      $dataLayer[$SDIDTM_options[SDIDTM_OPTION_NAME_PAGEID]] = get_the_ID();
    }

    if($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTCUSTOM]){
      $meta = get_post_custom();
      $newmeta = array();
      foreach($meta as $mn=>$mv){
        if(strpos($mn, "_edit_")===false){
          $newmeta[$mn] = $mv;
        }
      }
      $dataLayer[$SDIDTM_options[SDIDTM_OPTION_NAME_POSTCUSTOM]] = $newmeta;
    }

    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTTYPE)] = get_post_type();
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "single-" . get_post_type();
    }

    if($SDIDTM_options[SDIDTM_OPTION_INCLUDE_COMMENTS]){
      if(comments_open()){
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_COMMENTS)] = get_comments_number();
      }
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_CATEGORIES]) {
      $_post_cats = get_the_category();
      if ($_post_cats) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_CATEGORIES)] = array();
        foreach ($_post_cats as $_one_cat) {
          $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_CATEGORIES)][] = $_one_cat->slug;
        }
      }
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_TAGS]) {
      $_post_tags = get_the_tags();
      if ($_post_tags) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_TAGS)] = array();
        foreach ($_post_tags as $tag) {
          $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_TAGS)][] = $tag->slug;
        }
      }
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_AUTHOR]) {
      $postuser = get_userdata($GLOBALS["post"]->post_author);
      if (false !== $postuser) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_AUTHOR)] = $postuser->display_name;
      }
    }
    
    $date["date"] = get_the_date();
    $date["year"] = get_the_date("Y");
    $date["month"] = get_the_date("m");
    $date["day"] = get_the_date("d");
  }
  
  if (is_archive() || is_post_type_archive()) {
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTTYPE)] = get_post_type();
      
      if (is_category()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "category-" . get_post_type();
      } else if (is_tag()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "tag-" . get_post_type();
      } else if (is_tax()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "tax-" . get_post_type();
      } else if (is_author()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "author-" . get_post_type();
      } else if (is_year()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "year-" . get_post_type();
        
        $date["year"] = get_the_date("Y");
      } else if (is_month()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "month-" . get_post_type();
        $date["year"] = get_the_date("Y");
        $date["month"] = get_the_date("m");
      } else if (is_day()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "day-" . get_post_type();
        
        $date["date"] = get_the_date();
        $date["year"] = get_the_date("Y");
        $date["month"] = get_the_date("m");
        $date["day"] = get_the_date("d");
      } else if (is_time()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "time-" . get_post_type();
      } else if (is_date()) {
        $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTSUBTYPE)] = "date-" . get_post_type();
        
        $date["date"] = get_the_date();
        $date["year"] = get_the_date("Y");
        $date["month"] = get_the_date("m");
        $date["day"] = get_the_date("d");
      }
    }
    
    if ((is_tax() || is_category()) && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_CATEGORIES]) {
      $_post_cats = get_the_category();
      $dataLayer[$SDIDTM_options[SDIDTM_OPTION_NAME_CATEGORIES]] = array();
      foreach ($_post_cats as $_one_cat) {
        $dataLayer[$SDIDTM_options[SDIDTM_OPTION_NAME_CATEGORIES]][] = $_one_cat->slug;
      }
    }
    
    if (($SDIDTM_options[SDIDTM_OPTION_INCLUDE_AUTHOR]) && (is_author())) {
      $dataLayer["author"] = get_the_author();
    }
  }
  
  if (is_search()) {
    if($SDIDTM_options[SDIDTM_OPTION_INCLUDE_SEARCHTERM]){
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_SEARCHTERM)] = get_search_query();
    }
    if($SDIDTM_options[SDIDTM_OPTION_INCLUDE_SEARCHORIGIN]){
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_SEARCHORIGIN)] = $_SERVER["HTTP_REFERER"];
    }
    if($SDIDTM_options[SDIDTM_OPTION_INCLUDE_SEARCHRESULTS]){
      $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_SEARCHRESULTS)] = $wp_query->post_count;
    }
  }
  
  if (is_front_page() && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
    $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTTYPE)] = "homepage";
  }
  
  if (!is_front_page() && is_home() && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
    $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTTYPE)] = "blog-home";
  }
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTCOUNT]) {
    $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTCOUNT)] = (int)$wp_query->post_count;
    // $dataLayer["postCountTotal"] = (int)$wp_query->found_posts;
  }

  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTDATE] && count($date)>0) {
    $dataLayer[SDIDTM_get_name(SDIDTM_OPTION_NAME_POSTDATE)] = $date;
  }
  
  return $dataLayer;
}

function SDIDTM_wp_header() {
  global $SDIDTM_datalayer_name, $SDIDTM_options;
  
  $SDIDTM_datalayer_data = array();
  $SDIDTM_datalayer_data = (array)apply_filters(SDIDTM_WPFILTER_COMPILE_DATALAYER, $SDIDTM_datalayer_data);
  
  $_dtm_header_content = '';
  
  if ($SDIDTM_options[SDIDTM_OPTION_DTM_CODE] != "" && !SDIDTM_disable()) {
    $_dtm_header_content.= '
<script type="text/javascript">
' . $SDIDTM_datalayer_name . ' = ' . json_encode($SDIDTM_datalayer_data) . ';
</script>';

    if(!SDI_dtm_exists()){
      $_dtm_header_content.= '
<script type="text/javascript" src="' . $SDIDTM_options[SDIDTM_OPTION_DTM_CODE] . '"></script>';
    }
  }
  
  echo $_dtm_header_content;
}


function SDIDTM_wp_footer() {
  global $SDIDTM_options, $SDIDTM_datalayer_name, $SDIDTM;
  
  $_dtm_tag = '';
  
  if ($SDIDTM_options[SDIDTM_OPTION_DTM_CODE] != "" && !SDIDTM_disable() && !SDI_dtm_exists()) {
    $_dtm_tag.= '<script type="text/javascript">
if(typeof _satellite != "undefined"){
  _satellite.pageBottom();
}
</script>';
  }
  
  echo $_dtm_tag;
}

add_action("wp_head", "SDIDTM_wp_header", 1);
add_action("wp_footer", "SDIDTM_wp_footer", 100000);
add_filter(SDIDTM_WPFILTER_COMPILE_DATALAYER, "SDIDTM_add_basic_datalayer_data");
