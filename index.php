
  <?php
  include('class/url.php');
  $url = new Url('/pinoy-pro/');
  if (!$url->segment(1))
    $page = '';
    else
    $page = $url ->segment(1);
    
    switch ($page) {

    case '':
      require 'pages/login.html';
    break;

    case 'login':
      require 'pages/login.html';
    break;

    case 'application-form':
      require 'pages/application-form.html';
    break;

    case 'registration-form':
      require 'pages/registration-form.html';
    break;


    default : //404 Page
      require '404.html';
    break;
    }

