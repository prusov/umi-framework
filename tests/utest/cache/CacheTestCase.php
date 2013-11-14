<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */
namespace utest\cache;

use utest\TestCase;

/**
 * Тест кейс для кеширования
 */
abstract class CacheTestCase extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->getTestToolkit()->registerToolboxes([
            require(__DIR__ . '/../../../library/umi/event/toolbox/config.php'),
            require(__DIR__ . '/../../../library/umi/cache/toolbox/config.php')
        ]);

        parent::setUp();
    }
}
 