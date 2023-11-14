<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\PropelOrm;

use Spryker\Zed\PropelOrm\PropelOrmConfig as SprykerPropelOrmConfig;

class PropelOrmConfig extends SprykerPropelOrmConfig
{
    /**
     * Specification:
     * - Defines if boolean casting is enabled for data formatting.
     *
     * @api
     *
     * @return bool
     */
    public function isBooleanCastingEnabled(): bool
    {
        return true;
    }
}
