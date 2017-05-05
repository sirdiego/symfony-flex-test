<?php

namespace App\Tests\Controller;

use App\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class DefaultControllerTest.
 */
class DefaultControllerTest extends WebTestCase
{
    protected static function getKernelClass()
    {
        return Kernel::class;
    }

    /** @test */
    public function is_homepage_reachable()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $code = $client->getResponse()->getStatusCode();

        $this->assertEquals(200, $code);
        $this->assertEquals('Hello, World!', $crawler->text());
    }

    /** @test */
    public function is_name_changeable()
    {
        $client = static::createClient();
        $name = 'Diego';

        $crawler = $client->request('GET', '/' . $name);
        $code = $client->getResponse()->getStatusCode();

        $this->assertEquals(200, $code);
        $this->assertEquals("Hello, {$name}!", $crawler->text());
    }
}