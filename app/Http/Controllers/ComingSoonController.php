<?php namespace Collective\Http\Controllers;

use Carbon\Carbon;
use Collective\Http\Requests;

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

  /**
   * @return string
   */
  public function getTime()
  {
    return Carbon::now()->format('M j, Y H:i:s O');
  }

  /**
   *
   */
  public function subscribe()
  {

  }
}
