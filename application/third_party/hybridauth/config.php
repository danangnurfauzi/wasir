<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
		array(
			"base_url" => "http://localhost/wasir/",
			"providers" => array(
				// openid providers
				"OpenID" => array(
					"enabled" => true
				),
				"Yahoo" => array(
					"enabled" => true,
					"keys" => array("key" => "", "secret" => ""),
				),
				"AOL" => array(
					"enabled" => true
				),
				"Google" => array(
					"enabled" => true,
					"keys" => array("id" => "", "secret" => "")
				),
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id" => "369227166775039", "secret" => "bdfdf85349fdeeed5e3cd83ab9975866"),
					"trustForwarded" => false,
					"scope"   => ['email', 'user_about_me', 'user_birthday', 'user_hometown'], // optional
         			 "display" => "popup" // optional
				),
				"Twitter" => array(
					"enabled" => true,
					"keys" => array("key" => "ubbFD1P3P6NKEX8BizinpUGnd", "secret" => "aQCZG4NxVTCZhVU4TBCDytzHUX6zgsWA09TbDdAISWKoHrLYG5"),
					"includeEmail" => false
				),
				// windows live
				"Live" => array(
					"enabled" => true,
					"keys" => array("id" => "", "secret" => "")
				),
				"LinkedIn" => array(
					"enabled" => true,
					"keys" => array("key" => "", "secret" => "")
				),
				"Foursquare" => array(
					"enabled" => true,
					"keys" => array("id" => "", "secret" => "")
				),
			),
			// If you want to enable logging, set 'debug_mode' to true.
			// You can also set it to
			// - "error" To log only error messages. Useful in production
			// - "info" To log info and error messages (ignore debug messages)
			"debug_mode" => false,
			// Path to file writable by the web server. Required if 'debug_mode' is not false
			"debug_file" => "",
);
