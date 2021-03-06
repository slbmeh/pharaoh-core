<?php declare(strict_types=1);

/*
 * This file is part of Pharaoh.
 *
 * (c) Steve Buzonas <steve@fancyguy.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pharaoh\Config;

interface ConfigInterface
{
    /**
     * Gets the application config directory.
     *
     * @return string The application config dir
     */
    public function getConfigDirectory(): string;

    /**
     * Gets the cache directory.
     *
     * @return string The chache dir
     */
    public function getCacheDirectory(): string;

    /**
     * Gets the log directory.
     *
     * @return string The log directory
     */
    public function getLogDirectory(): string;
}
