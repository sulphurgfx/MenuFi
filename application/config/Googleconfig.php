<?php ////  if(!isset($_SESSION))////  {////      session_start();////  }////  require_once APPPATH.'third_party/Google_api/vendor/autoload.php';////  $scope = "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile";////////  $gClient = new Google_Client();////  $gClient->revokeToken();////  $gClient->setClientId("555355737472-ungguh9astuqqg9pu39spmvdkp73gbl9.apps.googleusercontent.com");////  $gClient->setClientSecret("rh7tHR3Vo_56tRQMoTVWRer8");////  $gClient->setApplicationName("Menufi google login");////  $gClient->setRedirectUri("http://localhost/menufi_today/index.php/Gcallback");////  $gClient->addScope($scope);////  $gClient->setAccessType("offline");  if(!isset($_SESSION))  {      session_start();  }  require_once APPPATH.'third_party/Google_api/vendor/autoload.php';  $scope = "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile";  $gClient = new Google_Client();  $gClient->revokeToken();  $gClient->setClientId("555355737472-ungguh9astuqqg9pu39spmvdkp73gbl9.apps.googleusercontent.com");  $gClient->setClientSecret("rh7tHR3Vo_56tRQMoTVWRer8");  $gClient->setApplicationName("Menufi google login");  //$gClient->setRedirectUri("http://localhost/nikhil/menufi/index.php/Gcallback");  $gClient->setRedirectUri("http://demo.creaadesign.com/menufi/index.php/Gcallback");  $gClient->addScope($scope);  $gClient->setAccessType("offline");  ?>