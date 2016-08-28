<?php namespace Collective\Http\Controllers;

use Collective\Documentation;

class DocsController extends Controller {

  /**
   * @var Documentation
   */
  private $docs;

  /**
   * @param Documentation $docs
   */
  function __construct(Documentation $docs)
  {
    $this->docs = $docs;
  }


  /**
   * @Get("docs", as="docs")
   */
  public function showRootPage()
  {
    return redirect()->route('docs.show', [DEFAULT_VERSION]);
  }

  /**
   * @Get("docs/{version}/{page?}", as="docs.show")
   * Show a documentation page.
   *
   * @param      $version
   * @param null $page
   *
   * @return Response
   */
  public function show($version, $page = null)
  {
    if ( ! $this->isVersion($version)) {
      return redirect('docs/'.DEFAULT_VERSION.'/'.$page, 301);
    }

    $content = $this->docs->get($version, $page ?: 'docs');

    if (is_null($content)) {
      abort(404);
    }

    return view('docs', [
      'index' => $this->docs->getIndex($version),
      'content' => $content,
      'currentVersion' => $version,
      'versions' => $this->getDocVersions(),
    ]);
  }

  /**
   * Determine if the given URL segment is a valid version.
   *
   * @param  string  $version
   * @return bool
   */
  protected function isVersion($version)
  {
    return in_array($version, ['master', '5.0', '5.1', '5.2', '5.3']);
  }

  /**
   * Get the available documentation versions.
   *
   * @return array
   */
  protected function getDocVersions()
  {
    return [
      'master' => 'Master',
      '5.0' => '5.0',
      '5.1' => '5.1',
      '5.2' => '5.2',
      '5.3' => '5.3',
    ];
  }

}
