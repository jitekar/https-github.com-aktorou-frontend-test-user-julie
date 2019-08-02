<?php
namespace ProtectedNet\FrontendTest\Controllers;

use Generator;
use Packaged\Routing\Handler\Handler;
use Packaged\Routing\Route;
use ProtectedNet\FrontendTest\Layouts\DefaultLayout;
use ProtectedNet\FrontendTest\Pages\HomePage\HomePage;
use ProtectedNet\FrontendTestFramework\Controllers\AbstractController;

class DefaultController extends AbstractController
{
  public function __construct()
  {
    $this->setLayout(new DefaultLayout());
  }

  /** @return callable|Handler|Route[]|Generator|string */
  protected function _generateRoutes()
  {
    yield self::_route('/(|home)$', 'homePage');
    return 'default';
  }

  /** @return string */
  public function getDefault()
  {
    return 'OK';
  }

  /** @return HomePage */
  public function getHomePage()
  {
    $this->setLayout(new DefaultLayout());
    return HomePage::i();
  }
}
