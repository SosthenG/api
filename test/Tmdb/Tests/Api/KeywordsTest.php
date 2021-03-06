<?php

/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 4.0.0
 */

namespace Tmdb\Tests\Api;

class KeywordsTest extends TestCase
{
    public const KEYWORD_ID = 1712;

    /**
     * @test
     */
    public function shouldGetKeyword()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $api->getKeyword(self::KEYWORD_ID);
        $this->assertLastRequestIsWithPathAndMethod('/3/keyword/' . self::KEYWORD_ID);
    }

    /**
     * @test
     */
    public function shouldGetMovies()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $api->getMovies(self::KEYWORD_ID);
        $this->assertLastRequestIsWithPathAndMethod('/3/keyword/' . self::KEYWORD_ID . '/movies');
    }

    protected function getApiClass()
    {
        return 'Tmdb\Api\Keywords';
    }
}
