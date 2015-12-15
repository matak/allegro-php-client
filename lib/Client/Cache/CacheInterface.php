<?php
/**
 * CacheInterface.php
 *
 * @author    Jan Chren (dev.rindeal AT outlook.com)
 * @copyright Jan Chren (dev.rindeal AT outlook.com) (c) 2014
 * @license   For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Cache;

/**
 * Interface CacheInterface
 */
interface CacheInterface
{
    /**
     * @param string $poolId
     *
     * @return \Psr\Cache\CacheItemPoolInterface
     */
    public function getPool($poolId);
}
