<?php
/**
 * Pool.php
 *
 * @author    Jan Chren <dev.rindeal AT outlook.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Cache\ArrayCache;


use Psr\Cache\CacheItemInterface;
use Rindeal\Allegro\Client\Cache\CacheItemPoolBase;
use Rindeal\Allegro\Client\Cache\InvalidArgumentException;

class Pool extends CacheItemPoolBase
{

    /**
     * @var \Psr\Cache\CacheItemInterface[]
     */
    protected $items_ = [];


    public function itemExists($key)
    {
        $this->sanitizeKey($key);

        return isset($this->items_[$key]);
    }

    public function getItem($key)
    {
        $this->sanitizeKey($key);

        return (isset($this->items_[$key]) ? $this->items_[$key] : ($this->items_[$key] = new Item($key)));
    }

    public function save(CacheItemInterface $item)
    {
        $this->items_[$item->getKey()] = $item;

        return $this;
    }

    public function clear()
    {
        $this->items_ = [];

        return $this;
    }

    public function deleteItems(array $keys = [])
    {
        foreach ($keys as $key) {
            $this->sanitizeKey($key);
            unset($this->items_[$key]);
        }

        return $this;
    }

    /**
     * @param $key
     * @throws InvalidArgumentException
     */
    protected function sanitizeKey(&$key)
    {
        if (!self::isStringable($key))
            throw new InvalidArgumentException('Key has to be a stringable variable');
        $key = (string)$key;
    }

    /**
     * @param $var
     * @return bool
     */
    protected static function isStringable($var)
    {
        return (is_scalar($var) || (is_object($var) && method_exists($var, '__toString')));
    }

}
