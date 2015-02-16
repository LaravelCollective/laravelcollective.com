<?php namespace Collective\Http\Controllers;

use Collective\Http\Requests;
use Collective\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

  /**
   * @Get("/", as="home")
   * @return \Illuminate\View\View
   */
  public function home()
  {
    return view('index', [
      'hideLogo' => true,
    ]);
  }

  /**
   * @Get("about", as="about")
   * @return \Illuminate\View\View
   */
  public function about()
  {
    return view('about');
  }
}
