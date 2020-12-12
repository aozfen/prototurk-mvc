<?php
use \Prototurk\Core\{Request, Route};

/**
 * İsteği bekleterek middleware'leri çalıştıralım.
 *
 * TestMiddleware satırının yorum'u kaldırıldığında interrupt() metodu çalışır
 * ve url'de test parametresinin olup olmadığını kontrol eder eğer varsa İstek
 * devam ettirilir. Eğer yoksa Exception fırlatılır.
 */
Request::setMiddlewares([
  "Auth" => \Prototurk\Middlewares\AuthMiddleware::class,
  "Test" => \Prototurk\Middlewares\TestMiddleware::class,
]);

require __DIR__ . '/routes/web.php';
Route::prefix('/api');
require __DIR__ . '/routes/api.php';
Route::$prefix = '';