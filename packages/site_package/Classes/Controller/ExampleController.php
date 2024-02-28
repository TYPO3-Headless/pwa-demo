<?php

declare(strict_types=1);

namespace Pwademo\SitePackage\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ExampleController extends ActionController
{
    public function listAction(): ResponseInterface
    {
        return $this->jsonResponse(json_encode(['test' => 'example']));
    }
}
