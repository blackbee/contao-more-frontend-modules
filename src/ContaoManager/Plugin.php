<?php

declare(strict_types=1);

/*
 * This file is part of [xx81/contao-more-frontend-modules-bundle].
 *
 * (c) Benjamin Geiger
 *
 * @license LGPL-3.0-or-later
 */

namespace Xx81\Contao\MoreFrontendModulesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Xx81\Contao\MoreFrontendModulesBundle\MoreFrontendModulesBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(MoreFrontendModulesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
