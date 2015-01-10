<?php
define('SDIDTM_WPFILTER_COMPILE_DATALAYER', 'sdidtm_compile_datalayer');

if ($GLOBALS["SDIDTM_options"][SDIDTM_OPTION_DATALAYER_NAME] == "") {
  $GLOBALS["SDIDTM_datalayer_name"] = "dataLayer";
} else {
  $GLOBALS["SDIDTM_datalayer_name"] = $GLOBALS["SDIDTM_options"][SDIDTM_OPTION_DATALAYER_NAME];
}

function SDIDTM_is_assoc($arr) {
  return array_keys($arr) !== range(0, count($arr) - 1);
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
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_LOGGEDIN]) {
    if (is_user_logged_in()) {
      $dataLayer["loginState"] = "logged-in";
    } else {
      $dataLayer["loginState"] = "logged-out";
    }
  }
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_USERROLE]) {
    get_currentuserinfo();
    $dataLayer["visitorType"] = ($current_user->roles[0] == NULL ? "visitor-logged-out" : $current_user->roles[0]);
  }
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTITLE]) {
    $dataLayer["pageTitle"] = strip_tags(wp_title("|", false, "right"));
  }
  
  if (is_singular()) {
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
      $dataLayer["pageType"] = get_post_type();
      $dataLayer["pageSubType"] = "single-" . get_post_type();
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_CATEGORIES]) {
      $_post_cats = get_the_category();
      if ($_post_cats) {
        $dataLayer["category"] = array();
        foreach ($_post_cats as $_one_cat) {
          $dataLayer["category"][] = $_one_cat->slug;
        }
      }
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_TAGS]) {
      $_post_tags = get_the_tags();
      if ($_post_tags) {
        $dataLayer["tags"] = array();
        foreach ($_post_tags as $tag) {
          $dataLayer["tags"][] = $tag->slug;
        }
      }
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_AUTHOR]) {
      $postuser = get_userdata($GLOBALS["post"]->post_author);
      if (false !== $postuser) {
        $dataLayer["author"] = $postuser->display_name;
      }
    }
    
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTDATE]) {
      $dataLayer["pagePostDate"] = get_the_date();
      $dataLayer["pagePostDateYear"] = get_the_date("Y");
      $dataLayer["pagePostDateMonth"] = get_the_date("m");
      $dataLayer["pagePostDateDay"] = get_the_date("d");
    }
  }
  
  if (is_archive() || is_post_type_archive()) {
    if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
      $dataLayer["pageType"] = get_post_type();
      
      if (is_category()) {
        $dataLayer["pageSubType"] = "category-" . get_post_type();
      } else if (is_tag()) {
        $dataLayer["pageSubType"] = "tag-" . get_post_type();
      } else if (is_tax()) {
        $dataLayer["pageSubType"] = "tax-" . get_post_type();
      } else if (is_author()) {
        $dataLayer["pageSubType"] = "author-" . get_post_type();
      } else if (is_year()) {
        $dataLayer["pageSubType"] = "year-" . get_post_type();
        
        if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTDATE]) {
          $dataLayer["pagePostDateYear"] = get_the_date("Y");
        }
      } else if (is_month()) {
        $dataLayer["pageSubType"] = "month-" . get_post_type();
        
        if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTDATE]) {
          $dataLayer["pagePostDateYear"] = get_the_date("Y");
          $dataLayer["pagePostDateMonth"] = get_the_date("m");
        }
      } else if (is_day()) {
        $dataLayer["pagePostType2"] = "day-" . get_post_type();
        
        if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTDATE]) {
          $dataLayer["pagePostDate"] = get_the_date();
          $dataLayer["pagePostDateYear"] = get_the_date("Y");
          $dataLayer["pagePostDateMonth"] = get_the_date("m");
          $dataLayer["pagePostDateDay"] = get_the_date("d");
        }
      } else if (is_time()) {
        $dataLayer["pageSubType"] = "time-" . get_post_type();
      } else if (is_date()) {
        $dataLayer["pageSubType"] = "date-" . get_post_type();
        
        if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTDATE]) {
          $dataLayer["pagePostDate"] = get_the_date();
          $dataLayer["pagePostDateYear"] = get_the_date("Y");
          $dataLayer["pagePostDateMonth"] = get_the_date("m");
          $dataLayer["pagePostDateDay"] = get_the_date("d");
        }
      }
    }
    
    if ((is_tax() || is_category()) && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_CATEGORIES]) {
      $_post_cats = get_the_category();
      $dataLayer["category"] = array();
      foreach ($_post_cats as $_one_cat) {
        $dataLayer["category"][] = $_one_cat->slug;
      }
    }
    
    if (($SDIDTM_options[SDIDTM_OPTION_INCLUDE_AUTHOR]) && (is_author())) {
      $dataLayer["author"] = get_the_author();
    }
  }
  
  if (is_search()) {
    $dataLayer["searchTerm"] = get_search_query();
    $dataLayer["searchOrigin"] = $_SERVER["HTTP_REFERER"];
    $dataLayer["searchResults"] = $wp_query->post_count;
  }
  
  if (is_front_page() && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
    $dataLayer["pageType"] = "homepage";
  }
  
  if (!is_front_page() && is_home() && $SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTTYPE]) {
    $dataLayer["pageType"] = "blog-home";
  }
  
  if ($SDIDTM_options[SDIDTM_OPTION_INCLUDE_POSTCOUNT]) {
    $dataLayer["postCount"] = (int)$wp_query->post_count;
    $dataLayer["postCountTotal"] = (int)$wp_query->found_posts;
  }
  
  if(comments_open()){
	  $dataLayer['hasComments'] = true;
	  $dataLayer['numberComments'] = get_comments_number();
  }
  else {
	  $dataLayer['hasComments'] = false;
	  $dataLayer['numberComments'] = 'zero';
  }
  
  return $dataLayer;
}

function SDIDTM_wp_header() {
  global $SDIDTM_datalayer_name, $SDIDTM_options;
  
  $SDIDTM_datalayer_data = array();
  $SDIDTM_datalayer_data = (array)apply_filters(SDIDTM_WPFILTER_COMPILE_DATALAYER, $SDIDTM_datalayer_data);
  
  $_dtm_header_content = '';
  
  if ($SDIDTM_options[SDIDTM_OPTION_DTM_CODE] != "") {
    $_dtm_header_content.= '
<script type="text/javascript">
' . $SDIDTM_datalayer_name . ' = ' . json_encode($SDIDTM_datalayer_data) . ';
</script>';
  }
  
  $_dtm_header_content.= '
<script type="text/javascript" src="' . $SDIDTM_options[SDIDTM_OPTION_DTM_CODE] . '"></script>';
  
  echo $_dtm_header_content;
}


function SDIDTM_wp_footer() {
  global $SDIDTM_options, $SDIDTM_datalayer_name;
  
  $_dtm_tag = '';
  
  if ($SDIDTM_options[SDIDTM_OPTION_DTM_CODE] != "") {
    $_dtm_tag.= '<script type="text/javascript">
if(typeof _satellite != "undefined"){
	_satellite.pageBottom();
}
</script>';
  }
  
  echo $_dtm_tag;
}

add_action("wp_head", "SDIDTM_wp_header", 1);
add_action("wp_footer", "SDIDTM_wp_footer", 10000);
add_filter(SDIDTM_WPFILTER_COMPILE_DATALAYER, "SDIDTM_add_basic_datalayer_data");
