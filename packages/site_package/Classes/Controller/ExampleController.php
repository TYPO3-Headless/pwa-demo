<?php

declare(strict_types=1);

namespace Pwademo\SitePackage\Controller;

use Psr\Http\Message\ResponseInterface;
use Pwademo\SitePackage\PageTitle\ExamplePageTitleProvider;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ExampleController extends ActionController
{
    public function __construct(
        private readonly ExamplePageTitleProvider $titleProvider
    ) {}

    public function listAction(): ResponseInterface
    {
        $this->titleProvider->setTitle('Title from controller action');
        return $this->jsonResponse(json_encode(['test' => 'example']));
    }
}
