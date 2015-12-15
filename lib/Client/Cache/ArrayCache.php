<?php
/**
 * ArrayCache.php
 *
 * @author    Jan Chren <dev.rindeal AT outlook.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Cache;


use Rindeal\Allegro\Client\Cache\ArrayCache\Pool;

class ArrayCache implements CacheInterface {

    /**
     * @var  \Psr\Cache\CacheItemPoolInterface[]
     */
    protected static $pools = [];

    public function getPool($poolId) {
        if (!isset(self::$pools[$poolId])) {
            self::$pools[$poolId] = new Pool();
        }

        return self::$pools[$poolId];
    }
}
