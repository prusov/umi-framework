<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace utest\authentication\unit\provider;

use umi\authentication\provider\SimpleProvider;
use utest\authentication\AuthenticationTestCase;

/**
 * Тесты Simple провайдера авторизации
 */
class SimpleTest extends AuthenticationTestCase
{

    /**
     * @var SimpleProvider $provider провайдер
     */
    private $provider;

    public function setUpFixtures()
    {
        $this->provider = new SimpleProvider();
    }

    /**
     * @test
     */
    public function test()
    {
        $this->assertFalse($this->provider->getCredentials(), 'Ожидается, что данные не установлены');

        $this->provider->username = 'username';
        $this->provider->password = 'password';

        $this->assertEquals(
            ['username', 'password'],
            $this->provider->getCredentials(),
            'Ожидается, что данные установлены'
        );
    }
}