<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WelcomeControllerTest extends WebTestCase
{
    public function testIndexAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');


        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Kubernetes")')->count()
        );
    }
}
