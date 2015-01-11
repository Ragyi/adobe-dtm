<?php
// global constants
define( 'SDIDTM_ADMINSLUG',               'sdidtm-settings' );
define( 'SDIDTM_ADMIN_GROUP',             'sdidtm-admin-group' );
define( 'SDIDTM_ADMIN_GROUP_GENERAL',     'sdidtm-admin-group-general' );
define( 'SDIDTM_ADMIN_GROUP_DTMID',       'sdidtm-admin-group-dtm-id' );
define( 'SDIDTM_ADMIN_GROUP_PLACEMENT',   'sdidtm-admin-code-placement' );
define( 'SDIDTM_ADMIN_GROUP_DATALAYER',   'sdidtm-admin-group-datalayer-name' );
define( 'SDIDTM_ADMIN_GROUP_DTM_EXISTS',   'sdidtm-admin-group-dtm-exists' );
define( 'SDIDTM_ADMIN_GROUP_INFO',        'sdidtm-admin-group-datalayer-info' );
define( 'SDIDTM_ADMIN_GROUP_INCLUDES',    'sdidtm-admin-group-includes' );
define( 'SDIDTM_ADMIN_GROUP_DISABLE_DTM',    'sdidtm-admin-group-disable-dtm' );
define( 'SDIDTM_ADMIN_GROUP_CREDITS',     'sdidtm-admin-group-credits' );
define( 'SDIDTM_USER_NOTICES_KEY', 'SDIDTM_user_notices_dismisses' );

$GLOBALS["SDIDTM_def_user_notices_dismisses"] = array(
	"enter-dtm-code" => false
);

$GLOBALS["SDIDTM_includefieldtexts"] = array(
	SDIDTM_OPTION_INCLUDE_POSTTYPE    => array(
		"label"       => __( "Post Type", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the type of the post or archive page (post, page or any custom post type).", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_POSTTYPE    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_POSTTYPE
	),
	SDIDTM_OPTION_INCLUDE_POSTSUBTYPE    => array(
		"label"       => __( "Post Sub Type", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the sub type of the post or archive page (post, page or any custom post type).", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_POSTSUBTYPE    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_POSTSUBTYPE
	),
	SDIDTM_OPTION_INCLUDE_PAGEID    => array(
		"label"       => __( "Page ID", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the page/post ID.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_PAGEID    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_PAGEID
	),
	SDIDTM_OPTION_INCLUDE_CATEGORIES  => array(
		"label"       => __( "Category List", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the category names of the post or archive page", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_CATEGORIES    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_CATEGORIES
	),
	SDIDTM_OPTION_INCLUDE_TAGS        => array(
		"label"       => __( "Tags", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the tags of the post/page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_TAGS    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_TAGS
	),
	SDIDTM_OPTION_INCLUDE_AUTHOR      => array(
		"label"       => __( "Author Name", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the author's name of the post/page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_AUTHOR    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_AUTHOR
	),
	SDIDTM_OPTION_INCLUDE_POSTDATE    => array(
		"label"       => __( "Post Date", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the date of the post. This will be an object with 4 sub objects: date, year, month, and day.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_POSTDATE    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_POSTDATE
	),
	SDIDTM_OPTION_INCLUDE_POSTTITLE   => array(
		"label"       => __( "Post Title", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the meta title of the post/page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_POSTTITLE    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_POSTTITLE
	),
	SDIDTM_OPTION_INCLUDE_POSTCUSTOM   => array(
		"label"       => __( "Post Custom Fields", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the custom fields of the post/page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_POSTCUSTOM    => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_POSTCUSTOM
	),
	SDIDTM_OPTION_INCLUDE_POSTCOUNT   => array(
		"label"       => __( "Post Count", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the count of the posts currently shown on the page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_POSTCOUNT   => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_POSTCOUNT
	),
	SDIDTM_OPTION_INCLUDE_SEARCHTERM  => array(
		"label"       => __( "Search Term", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the search term on the search results page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_SEARCHTERM  => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_SEARCHTERM
	),
	SDIDTM_OPTION_INCLUDE_SEARCHRESULTS  => array(
		"label"       => __( "Search Results", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the number of search results on the search results page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_SEARCHRESULTS  => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_SEARCHRESULTS
	),
	SDIDTM_OPTION_INCLUDE_SEARCHORIGIN  => array(
		"label"       => __( "Search Origin", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the search origin on the search results page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_SEARCHORIGIN  => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_SEARCHORIGIN
	),
	SDIDTM_OPTION_INCLUDE_LOGGEDIN    => array(
		"label"       => __( "Logged-in Status", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include whether there is a logged in user on your website.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_LOGGEDIN  => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_LOGGEDIN
	),
	SDIDTM_OPTION_INCLUDE_USERROLE    => array(
		"label"       => __( "Logged-in User Role", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the role of the logged in user.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_USERROLE  => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_USERROLE
	),
	SDIDTM_OPTION_INCLUDE_COMMENTS    => array(
		"label"       => __( "Comments", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Check this option to include the # of comments on a post/page.", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_NAME_COMMENTS  => array(
		"label"       => __( "", SDIDTM_TEXTDOMAIN ),
		"description" => __( "", SDIDTM_TEXTDOMAIN ),
		"optionfieldid" => SDIDTM_OPTION_NAME_COMMENTS
	)
);

$GLOBALS["SDIDTM_disablefieldtexts"] = array(
	SDIDTM_OPTION_DISABLE_ADMIN    => array(
		"label"       => __( "Administrator", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Disable DTM from loading for Administrators", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_DISABLE_EDITOR  => array(
		"label"       => __( "Editor", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Disable DTM from loading for Editors", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_DISABLE_AUTHOR        => array(
		"label"       => __( "Author", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Disable DTM from loading for Authors", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_DISABLE_CONTRIBUTOR      => array(
		"label"       => __( "Contributor", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Disable DTM from loading for Contributors", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_DISABLE_SUBSCRIBER    => array(
		"label"       => __( "Subscriber", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Disable DTM from loading for Subscribers", SDIDTM_TEXTDOMAIN )
	),
	SDIDTM_OPTION_DISABLE_GUEST    => array(
		"label"       => __( "Guest", SDIDTM_TEXTDOMAIN ),
		"description" => __( "Disable DTM from loading for Guests (not logged in)", SDIDTM_TEXTDOMAIN )
	)
);

function SDIDTM_admin_output_section( $args ) {
	echo '<span class="tabinfo">';

	switch( $args["id"] ) {
		case SDIDTM_ADMIN_GROUP_GENERAL: {
			_e( 'This plugin is intended to be used by IT and marketing staff. &nbsp;<strong>Important:</strong> This plugin is still <strong>beta</strong>. &nbsp;It has not been tested on many websites. &nbsp;There might be issues with some plugins or themes!', SDIDTM_TEXTDOMAIN );

			break;        
		}
		
		case SDIDTM_ADMIN_GROUP_ADVANCED: {
			_e( "The default JavaScript variable for the data layer is 'dataLayer'. &nbsp;Change the object name here.", SDIDTM_TEXTDOMAIN );

			break;        
		}

		case SDIDTM_ADMIN_GROUP_CREDITS: {
			_e( "Some info about the author of this plugin", SDIDTM_TEXTDOMAIN );

			break;        
		}

		case SDIDTM_ADMIN_GROUP_DISABLE_DTM: {
			_e("Disable DTM from loading for anyone logged in or not logged in.&nbsp; A great feature for disabling tracking for employees, or disabling tracking for guests while the implementation is underway.");
			break;
		}

		case SDIDTM_ADMIN_GROUP_INCLUDES: {
			_e("Use the meta data available within WordPress to easily build a data layer that you can use with DTM. &nbsp;Check an item to add it to the data layer. &nbsp;You can also configure the name of the item in the data layer.");
			break;
		}
	} // end switch
	
	echo '</span>';
}

function SDIDTM_admin_output_field( $args ) {
	global $SDIDTM_options, $SDIDTM_defaultoptions;
	
	switch( $args["label_for"] ) {
		case SDIDTM_ADMIN_GROUP_DTMID: {
			echo '<input type="text" id="' . SDIDTM_OPTIONS . '[' . SDIDTM_OPTION_DTM_CODE . ']" name="' . SDIDTM_OPTIONS . '[' . SDIDTM_OPTION_DTM_CODE . ']" value="' . $SDIDTM_options[SDIDTM_OPTION_DTM_CODE] . '" class="dtmid" /><br />' . $args["description"];
			echo '<br /><span class="dtmid_validation_error">' . __( "There was an error saving the code embed.", SDIDTM_TEXTDOMAIN ) . '</span>';
			
			break;
		}
		
		case SDIDTM_ADMIN_GROUP_DATALAYER: {
			echo '<input type="text" id="' . SDIDTM_OPTIONS . '[' . SDIDTM_OPTION_DATALAYER_NAME . ']" name="' . SDIDTM_OPTIONS . '[' . SDIDTM_OPTION_DATALAYER_NAME . ']" value="' . $SDIDTM_options[SDIDTM_OPTION_DATALAYER_NAME] . '" /><br />' . $args["description"];
			echo '<br /><span class="datalayername_validation_error">' . __( "This does not seems to be a valid JavaScript variable name! &nbsp;Please check and try again", SDIDTM_TEXTDOMAIN ) . '</span>';
			
			break;
		}

		case SDIDTM_ADMIN_GROUP_INFO: {
			echo $args["description"];

			break;
		}

		default: {
			$optval = $SDIDTM_options[$args["optionfieldid"]];
			
			switch( gettype( $optval ) ) {
				case "boolean": {
					echo '<input type="checkbox" id="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" name="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" value="1" ' . checked( 1, $optval, false ) . ' /> <label for="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']">' . $args["description"] . '</label>';
					break;
				}
				
				case "integer": {
					echo '<input type="number" step="1" min="1" class="small-text" id="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" name="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" value="' . esc_attr( $optval ) . '" /><br />' . $args["description"];
					break;
				}

				case "string": {
					$optval = trim($optval);
					if(!$optval || $optval == ''){
						$optval = $SDIDTM_defaultoptions[$args["optionfieldid"]];
					}
					echo '<input type="text" id="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" name="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" value="' . esc_attr( $optval ) . '" size="40" />';
					if($args["description"]){
						echo '<br />' . $args["description"];
					}
					break;
				}

				default : {
					echo '<input type="text" id="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" name="' . SDIDTM_OPTIONS . '[' . $args["optionfieldid"] . ']" value="' . esc_attr( $optval ) . '" size="80" /><br />' . $args["description"];
				}
			}
		} 
	} // end switch
}

function SDIDTM_sanitize_options($options) {
	$output = SDIDTM_reload_options();

	foreach($output as $optionname => $optionvalue) {
		if ( isset( $options[$optionname] ) ) {
			$newoptionvalue = $options[$optionname];
		} else {
			$newoptionvalue = "";
		}

		// "include" settings
		if ( substr($optionname, 0, 8) == "include-" ) {
			$output[$optionname] = (boolean) $newoptionvalue;

		// DTM code or dataLayer variable name
		} 
		else if (  substr($optionname, 0, 8) == "disable-" ) {
			$output[$optionname] = (boolean) $newoptionvalue;
		}
		else if ( ( $optionname == SDIDTM_OPTION_DTM_CODE ) || ( $optionname == SDIDTM_OPTION_DATALAYER_NAME ) ) {
			$newoptionvalue = trim($newoptionvalue);
			$output[$optionname] = $newoptionvalue;
		// anything else
		} else {
			switch( gettype($optionvalue)) {
				case "boolean": {
					$output[$optionname] = (boolean) $newoptionvalue;
					
					break;
				}

				case "integer": {
					$output[$optionname] = (int) $newoptionvalue;
					
					break;
				}

				default: {
					$output[$optionname] = $newoptionvalue;
				}
			} // end switch
		}
	}
	
	return $output;
}

function SDIDTM_admin_init() {
	global $SDIDTM_includefieldtexts;
	global $SDIDTM_disablefieldtexts;
	
	register_setting( SDIDTM_ADMIN_GROUP, SDIDTM_OPTIONS, "SDIDTM_sanitize_options" );
	
	add_settings_section(
		SDIDTM_ADMIN_GROUP_GENERAL,
		__( 'DTM Configuration', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_section',
		SDIDTM_ADMINSLUG
	);
	
	add_settings_field(
		SDIDTM_ADMIN_GROUP_DTMID,
		__( 'DTM Embed Code', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_field',
		SDIDTM_ADMINSLUG,
		SDIDTM_ADMIN_GROUP_GENERAL,
		array(
			"label_for" => SDIDTM_ADMIN_GROUP_DTMID,
			"description" => __( "Enter only the src of your embed code here.", SDIDTM_TEXTDOMAIN )
		)
	);

	add_settings_field(
		SDIDTM_ADMIN_GROUP_DTM_EXISTS,
		__('DTM Already on Page', SDIDTM_TEXTDOMAIN),
		'SDIDTM_admin_output_field',
		SDIDTM_ADMINSLUG,
		SDIDTM_ADMIN_GROUP_GENERAL,
		array(
			"label_for" => SDIDTM_ADMIN_GROUP_DTM_EXISTS,
			"description" => __( "DTM is already installed on the site, only add the data layer.", SDIDTM_TEXTDOMAIN ),
				"optionfieldid" => SDIDTM_OPTION_DTM_EXISTS
		)
	);

	add_settings_field(
		SDIDTM_ADMIN_GROUP_DATALAYER,
		__( 'Data layer variable name', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_field',
		SDIDTM_ADMINSLUG,
		SDIDTM_ADMIN_GROUP_GENERAL,
		array(
			"label_for" => SDIDTM_ADMIN_GROUP_DATALAYER,
			"description" => __( "Rename the data layer variable name. &nbsp;Default is 'dataLayer'.", SDIDTM_TEXTDOMAIN )
		)
	);

	add_settings_section(
		SDIDTM_ADMIN_GROUP_INCLUDES,
		__( 'Data Layer Configuration', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_section',
		SDIDTM_ADMINSLUG
	);
	
	foreach($SDIDTM_includefieldtexts as $fieldid => $fielddata) {
		add_settings_field(
			"sdidtm-admin-" . $fieldid . "-id",
			$fielddata["label"],
			'SDIDTM_admin_output_field',
			SDIDTM_ADMINSLUG,
			SDIDTM_ADMIN_GROUP_INCLUDES,
			array(
				"label_for" => "sdidtm-options[" . $fieldid . "]",
				"description" => $fielddata["description"],
				"optionfieldid" => $fieldid
			)
		);
	}

	add_settings_section(
		SDIDTM_ADMIN_GROUP_DISABLE_DTM,
		__( 'Disable DTM for Logged In Users', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_section',
		SDIDTM_ADMINSLUG
	);

	foreach($SDIDTM_disablefieldtexts as $fieldid => $fielddata) {
		add_settings_field(
			"sdidtm-admin-" . $fieldid . "-id",
			$fielddata["label"],
			'SDIDTM_admin_output_field',
			SDIDTM_ADMINSLUG,
			SDIDTM_ADMIN_GROUP_DISABLE_DTM,
			array(
				"label_for" => "sdidtm-disable[" . $fieldid . "]",
				"description" => $fielddata["description"],
				"optionfieldid" => $fieldid
			)
		);
	}

	add_settings_section(
		SDIDTM_ADMIN_GROUP_CREDITS,
		__( 'Credits', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_section',
		SDIDTM_ADMINSLUG
	);

	add_settings_field(
		SDIDTM_ADMIN_GROUP_INFO,
		__( 'Author', SDIDTM_TEXTDOMAIN ),
		'SDIDTM_admin_output_field',
		SDIDTM_ADMINSLUG,
		SDIDTM_ADMIN_GROUP_CREDITS,
		array(
			"label_for" => SDIDTM_ADMIN_GROUP_INFO,
			"description" => '<strong>Adam Haining</strong><br />
Website: <a href="http://www.searchdiscovery.com/" target="_blank">searchdiscovery.com</a><br />
<a href="https://www.linkedin.com/in/adamhaining" target="_blank">Me on LinkedIn</a><br />
<a href="http://www.linkedin.com/company/search-discovery" target="_blank">Search Discovery on LinkedIn</a>'
		)
	);

}

function SDIDTM_show_admin_page() {
	global $sdidtm_plugin_url;
?>
<div class="wrap">
	<!--<div id="sdidtm-icon" class="icon32" style="background-image: url(<?php echo $sdidtm_plugin_url; ?>admin/images/tag_manager-32.png);"><br /></div>-->
	<h2><?php _e( 'Adobe DTM for WordPress options', SDIDTM_TEXTDOMAIN ); ?></h2>
	<form action="options.php" method="post">
<?php settings_fields( SDIDTM_ADMIN_GROUP ); ?>
<?php do_settings_sections( SDIDTM_ADMINSLUG ); ?>
<?php submit_button(); ?>
	</form>
</div>
<?php  
}

function SDIDTM_add_admin_page() {
	add_options_page(
		__( 'Adobe DTM for WordPress settings', SDIDTM_TEXTDOMAIN ),
		__( 'Adobe DTM', SDIDTM_TEXTDOMAIN ),
		'manage_options',
		SDIDTM_ADMINSLUG,
		'SDIDTM_show_admin_page'
	);
}

function SDIDTM_add_admin_js($hook) {
	global $sdidtm_plugin_url;
	
	if ( $hook == "settings_page_" . SDIDTM_ADMINSLUG ) {
		wp_register_script( "admin-subtabs", $sdidtm_plugin_url . "js/admin-subtabs.js" );

		$subtabtexts = array(
			"posttabtitle" => __( "Posts" , SDIDTM_TEXTDOMAIN ),
			"searchtabtitle" => __( "Search" , SDIDTM_TEXTDOMAIN ),
			"visitortabtitle" => __( "Visitors" , SDIDTM_TEXTDOMAIN )
		);
		wp_localize_script( "admin-subtabs", 'sdidtm', $subtabtexts );
		wp_enqueue_script( "admin-subtabs" );

		wp_enqueue_script( "admin-tabcreator", $sdidtm_plugin_url . "js/admin-tabcreator.js", array( "jquery-core" ), "1.0" );

		wp_enqueue_style( "sdidtm-validate", $sdidtm_plugin_url . "css/admin-sdidtm.css", array(), "1.0" );
	}
}

function SDIDTM_admin_head() {
	echo '
<style type="text/css">
	.dtmid_validation_error,
	.datalayername_validation_error {
		display: none;
		color: #c00;
		font-weight: bold;
	}
	.dtmid {
		width: 100%;
	}
</style>
<script type="text/javascript">
	jQuery(function() {

		jQuery( ".dismiss-notice" )
			.bind( "click", function( e ) {
				e.preventDefault();

				jQuery.post(ajaxurl, {
					action: "SDIDTM_dismiss_notice",
					noticeid: jQuery( this )
						.attr( "href" )
						.substring( 1 )
				}, function ( response ) {
					jQuery( ".dismiss-notice" )
						.parent()
						.parent()
						.fadeOut( "slow" );
				});
			});
	});
</script>';
}

function SDIDTM_show_warning() {
	global $SDIDTM_options, $sdidtm_plugin_url, $current_user,
		$SDIDTM_def_user_notices_dismisses;

	$SDIDTM_user_notices_dismisses = get_user_meta( $current_user->ID, SDIDTM_USER_NOTICES_KEY, true );
	if ( $SDIDTM_user_notices_dismisses === "" ) {
		$SDIDTM_user_notices_dismisses = $SDIDTM_def_user_notices_dismisses;
	} else {
		$SDIDTM_user_notices_dismisses = @unserialize( $SDIDTM_user_notices_dismisses );
		if ( false === $SDIDTM_user_notices_dismisses ) {
			$SDIDTM_user_notices_dismisses = array();
		}
	}
	$SDIDTM_user_notices_dismisses = array_merge( $SDIDTM_def_user_notices_dismisses, $SDIDTM_user_notices_dismisses );
	
	if ( ( trim( $SDIDTM_options[SDIDTM_OPTION_DTM_CODE] ) == "" ) && ( false === $SDIDTM_user_notices_dismisses["enter-dtm-code"] ) ) {
		echo '<div id="message" class="error"><p><strong>' . sprintf( __( 'To start using Adobe DTM for WordPress, please <a href="%s">enter your DTM embed code</a>', SDIDTM_TEXTDOMAIN ), "options-general.php?page=" . SDIDTM_ADMINSLUG ) . '</strong> | <a href="?enter-dtm-code" class="dismiss-notice">' . __( 'Dismiss', SDIDTM_TEXTDOMAIN ) . '</a></p></div>';
	}
}

function SDIDTM_dismiss_notice() {
	global $SDIDTM_def_user_notices_dismisses, $current_user;

	$SDIDTM_user_notices_dismisses = get_user_meta( $current_user->ID, SDIDTM_USER_NOTICES_KEY, true );
	if ( $SDIDTM_user_notices_dismisses === "" ) {
		$SDIDTM_user_notices_dismisses = $SDIDTM_def_user_notices_dismisses;
	} else {
		$SDIDTM_user_notices_dismisses = @unserialize( $SDIDTM_user_notices_dismisses );
		if ( false === $SDIDTM_user_notices_dismisses ) {
			$SDIDTM_user_notices_dismisses = array();
		}
	}
	$SDIDTM_user_notices_dismisses = array_merge( $SDIDTM_def_user_notices_dismisses, $SDIDTM_user_notices_dismisses );

	$noticeid = trim( basename( $_POST["noticeid"] ) );
	if ( array_key_exists( $noticeid, $SDIDTM_user_notices_dismisses ) ) {
		$SDIDTM_user_notices_dismisses[ $noticeid ] = true;
		update_user_meta( $current_user->ID, SDIDTM_USER_NOTICES_KEY, serialize( $SDIDTM_user_notices_dismisses ) );
	}
}

function SDIDTM_add_plugin_action_links( $links, $file ) {
	global $sdidtm_plugin_basename;

	if ( $file != $sdidtm_plugin_basename )
		return $links;

	$settings_link = '<a href="' . menu_page_url( SDIDTM_ADMINSLUG, false ) . '">' . esc_html( __( 'Settings' ) ) . '</a>';

	array_unshift( $links, $settings_link );

	return $links;
}

add_action( 'admin_init', 'SDIDTM_admin_init' );
add_action( 'admin_menu', 'SDIDTM_add_admin_page' );
add_action( 'admin_enqueue_scripts', 'SDIDTM_add_admin_js' );
add_action( 'admin_notices', 'SDIDTM_show_warning' );
add_action( 'admin_head', 'SDIDTM_admin_head' );
add_filter( 'plugin_action_links', 'SDIDTM_add_plugin_action_links', 10, 2 );
add_action( 'wp_ajax_SDIDTM_dismiss_notice', 'SDIDTM_dismiss_notice' );
?>