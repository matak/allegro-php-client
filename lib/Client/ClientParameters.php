<?php
/**
 * ClientParameters.php
 *
 * @author    Jan Chren <dev.rindeal AT outlook.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client;


use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Rindeal\Allegro\Client\Cache\ArrayCache;
use Rindeal\Allegro\Client\HttpClient\HttpClientParameters;
use Rindeal\Allegro\Client\Structure\Internal\Property;
use Rindeal\Allegro\Client\Structure\Internal\PropertyFactory;
use Rindeal\Allegro\Client\Structure\Internal\StructureBase;
use Rindeal\Allegro\Client\Structure\Internal\ValidationException;
use Rindeal\Allegro\Client\Structure\Stringable;


/**
 * Class ClientParameters
 *
 * @property HttpClientParameters httpClientParams
 * @property CacheItemPoolInterface cache
 * @property LoggerInterface logger
 * @property bool inDevMode
 */
class ClientParameters extends StructureBase implements Stringable
{
    public function __construct()
    {
        $factory = new PropertyFactory();

        $this->properties = [
            'httpClientParams' => new Property([
                'default' => new HttpClientParameters(),
                'validator' => function ($val) {
                    if (!($val instanceof HttpClientParameters))
                        throw new ValidationException();
                }
            ]),
            'cache' => new Property([
                'default' => (new ArrayCache())->getPool(''),
                'validator' => function ($val) {
                    if (!($val instanceof CacheItemPoolInterface))
                        throw new ValidationException();
                }
            ]),
            'logger' => new Property([
                'default' => new NullLogger(),
                'validator' => function ($val) {
                    if (!($val instanceof LoggerInterface))
                        throw new ValidationException();
                }
            ]),
            'inDevMode' => $factory
                ->default(false)
                ->validator(function ($val) {
                    if (!is_bool($val))
                        throw new ValidationException();
                })
                ->doneAndReset()
        ];
    }

    public function __toString()
    {
        return parent::toString(['httpClientParams']);
    }
}
