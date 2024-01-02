<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\Router;

use Spryker\Yves\Router\RouterConfig as SprykerRouterConfig;

class RouterConfig extends SprykerRouterConfig
{
    /**
     * Specification:
     * - Returns a list of supported languages for Route manipulation.
     * - Will be used to strip of language information from a route before a route is matched.
     *
     * @example Incoming URL `/en/home` will be manipulated to `/home` because the router only knows URL's without any optional pre/suffix.
     *
     * @api
     *
     * @see \Spryker\Yves\Router\Plugin\RouterEnhancer\LanguagePrefixRouterEnhancerPlugin
     *
     * @return array<string>
     */
    public function getAllowedLanguages(): array
    {
        return (new Container())->getLocator()->locale()->client()->getAllowedLanguages();
    }
}
