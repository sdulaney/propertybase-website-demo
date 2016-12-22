<?php

///////////////////////////////////////////////////////////////////////////////
//
//  1. Hardcoded variables
//
//  Uncomment the following lines and insert your endpoints and tokens
//
///////////////////////////////////////////////////////////////////////////////

$weblisting_endpoint = "https://concord-re.secure.force.com/pba__WebserviceListingsQuery";
$weblisting_token = "46d4e4240ecefa4e94abf76b0ba81efb446a1560";

$web_to_prospect_endpoint = "https://concord-re.secure.force.com/services/apexrest/pba/webtoprospect/v1/";
$web_to_prospect_token = "36c9932ca9b0b198bd009cdaa95167e6b6d38ac2";

///////////////////////////////////////////////////////////////////////////////
//
//  2. Environment variables
//
//  Uncomment the following lines and your endpoints and tokens are set based
//  on your environment variables
//
///////////////////////////////////////////////////////////////////////////////

// if (array_key_exists("WEBLISTINGS_ENDPOINT", $_ENV)){
//   $weblisting_endpoint = $_ENV["WEBLISTINGS_ENDPOINT"];
// }

// if (array_key_exists("WEBLISTINGS_TOKEN", $_ENV)){
//   $weblisting_token = $_ENV["WEBLISTINGS_TOKEN"];
// }

// if (array_key_exists("WEBTOPROSPECT_ENDPOINT", $_ENV)){
//   $web_to_prospect_endpoint = $_ENV["WEBTOPROSPECT_ENDPOINT"];
// }

// if (array_key_exists("WEBTOPROSPECT_TOKEN", $_ENV)){
//   $web_to_prospect_token = $_ENV["WEBTOPROSPECT_TOKEN"];
// }

///////////////////////////////////////////////////////////////////////////////
//
//  Accept any server (peer) certificate on dev envs
//
//  Set $dev_env to true on localhost or other dev environments to run this
//  website without the need for importing SSL certificates.
//
//  Make sure to set $dev_env back to false on production environments,
//  otherwise there is the risk of man-in-the-middle attacks! Check if your
//  server uses SSL encryption and the SSL certificates are set up correctly.
//  Normally the ca-cert defined in the php.ini is used, so no override is
//  necessary.
//
//  If you have problems you may have to update your PHP version to support
//  TLS.
//
///////////////////////////////////////////////////////////////////////////////

$dev_env = true;

?>
