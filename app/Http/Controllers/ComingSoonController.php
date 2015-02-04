<?php namespace Collective\Http\Controllers;

use Collective\Http\Requests;
use Collective\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ComingSoonController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('coming-soon.index');
  }
}
