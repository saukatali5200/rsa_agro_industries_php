<?php

$WEBSITE_URL				= env("APP_URL") . '/';
$WEBSITE                    = $WEBSITE_URL.'public/';

$PATH                       = base_path();
$WEBSITE_PATH               = $WEBSITE.'adminpnlx/';


return [
'ALLOWED_TAGS_XSS' => '<iframe><a><strong><b><p><br><i><font><img><h1><h2><h3><h4><h5><h6><span>
<div><em><table><ul><li><section><thead><tbody><tr><td><figure><article>',


'DS'                               => '/',
'URL'                              => base_path(),
'PATH'                             => app_path(),
'LANGUAGE_PATH'                    => $PATH.'/resources',

"WEBSITE_IMG_URL"                  => $WEBSITE_URL.'img/',
"WEBSITE_CSS_URL"                  => $WEBSITE_URL,
"WEBSITE_JS_URL"                   => $WEBSITE_URL.'js/',


"CATEGORY_IMAGE_ROOT_URL"          =>  $WEBSITE_URL.'public/uploads/category/',
"CATEGORY_IMAGE_ROOT_PATH"         => "public/uploads/category/",


"USER_IMAGE_ROOT_URL"               =>  $WEBSITE_URL.'public/uploads/employees/',
"USER_IMAGE_ROOT_PATH"              => "public/uploads/employees/",

"STAFF_IMAGE_ROOT_URL"              =>  $WEBSITE_URL.'public/uploads/staffs/',
"STAFF_IMAGE_ROOT_PATH"             => "public/uploads/staffs/",


'USERS' => [
    'USERS_TITLE' => 'Customers',
    'USER_TITLE'  => 'Customer',
    ],
    
'STAFF' => [
    'STAFF_TITLE' => 'Staff',
    'STAFF_TITLES' => 'Staffs',
    ],


'ROLE_ID' => [
    'ADMIN_ID' 					=> 1,
    'SUPER_ADMIN_ROLE_ID' 		=> 1,
    'CUSTOMER_ROLE_ID' 			=> 2,
    'STAFF_ROLE_ID' 			=> 3,
],


'DEFAULT_LANGUAGE' => [
'FOLDER_CODE' => 'en',
'LANGUAGE_CODE' => 1,
'LANGUAGE_NAME' => 'English'
],


'CURRENCY_SYMBOL_RS' => '&#8360',
'CURRENCY_SYMBOL_RUPEES' => '&#8377;',


'api_keys' => [
    'secret_key' => env('STRIPE_SECRET_KEY', 'pk_test_51M2SZ0SA6GAaBclTeMWbl2lC0zzavTtNSBDkDHAhyi5S8A6Me7CEwynwh53wd0yQovSvF5mURUKZ4zdGlf9GyVkh00rO9tRGgW')
],

'SETTING_FILE_PATH'	=> base_path() . "/" .'config'."/". 'settings.php',

];