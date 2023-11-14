<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\GuiTable;

use Spryker\Zed\GuiTable\GuiTableConfig as SprykerGuiTableConfig;

class GuiTableConfig extends SprykerGuiTableConfig
{
    /**
     * Specification:
     * - Defines default timezone for formatting `DateTime` data to ISO 8601 format.
     *
     * @api
     *
     * @return string|null
     */
    public function getDefaultTimezone(): ?string
    {
        return 'UTC';
    }
}
