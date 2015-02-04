<?php namespace Collective\Http\Controllers;

use Carbon\Carbon;
use Collective\Http\Requests;
use Drewm\MailChimp;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;

class ComingSoonController extends Controller {

  /**
   * @var Repository
   */
  private $config;

  /**
   * @param Repository $config
   */
  function __construct(Repository $config)
  {
    $this->config = $config;
  }

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
   * @param MailChimp $mailChimp
   * @param Request   $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function subscribe(MailChimp $mailChimp, Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
    ]);

    $mailChimp->call('lists/subscribe', [
      'id'                => $this->config->get('services.mailchimp.listId'),
      'email'             => ['email' => $request->get('email')],
      'double_optin'      => true,
      'update_existing'   => true,
      'send_welcome'      => false,
    ]);

    return response()->json([
      'status' => 1,
      'text' => false,
    ]);
  }
}
