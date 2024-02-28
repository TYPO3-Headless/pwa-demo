<?php

declare(strict_types=1);

namespace Pwademo\SitePackage\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

final class ExamplePageTitleProvider extends AbstractPageTitleProvider
{
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
