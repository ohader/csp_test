<?php

namespace OliverHader\CspTest\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Attribute\Controller;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

#[Controller]
class Module
{
    public function __construct(
        protected readonly ModuleTemplateFactory $moduleTemplateFactory,
        protected readonly ExtensionConfiguration $extensionConfiguration,
    )
    {
    }

    public function mainAction(ServerRequestInterface $request): ResponseInterface
    {
        $view = $this->moduleTemplateFactory->create($request);
        $view->assignMultiple([
            'googleMapsJsApiKey' => $this->extensionConfiguration->get('csp_test', 'googleMapsJsApiKey'),
        ]);
        return $view->renderResponse('Module');
    }

}
