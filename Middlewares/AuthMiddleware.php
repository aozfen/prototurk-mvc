<?php


namespace Prototurk\Middlewares;

use Prototurk\Core\Helpers\Redirect;
use Prototurk\Core\Middleware;

class AuthMiddleware extends Middleware
{

  function interrupt()
  {
    /* Örnek için COOKIE ile yapıldı SESSION tercih edilmeli */
    if(@$_COOKIE["user"] == 1){
      return;
    }
    Redirect::to("/giris-yap");
//    throw new \Exception('Oturum açılmamış!');
  }


}