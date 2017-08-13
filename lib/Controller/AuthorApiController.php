<?php
namespace OCA\CORSDemo\Controller;

use \OCP\AppFramework\ApiController;
use \OCP\AppFramework\Http\JSONResponse;
use \OCP\IRequest;

class AuthorApiController extends ApiController {

    public function __construct($appName, IRequest $request) {
        parent::__construct($appName, $request);
    }

    // https://docs.nextcloud.com/server/12/developer_manual/app/api.html

    /**
     * @NoAdminRequired
     * @NoCSRFRequired
     * @PublicPage
     * @CORS
     */
    public function index() {
      $params = array('authors' => '123');
      return new JSONResponse($params);
    }

}
