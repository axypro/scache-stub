<?php
/**
 * @package axy\scahce-stub
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

declare(strict_types=1);

namespace axy\scache\stub\tests;

use axy\scache\stub\CacheStub;
use PHPUnit\Framework\TestCase;

/**
 * coversDefaultClass \axy\scache\stub\CacheStub
 */
class CacheStubTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    public function setUp(): void
    {
        $this->cache = new CacheStub();
    }

    /**
     * covers ::get
     */
    public function testSet()
    {
        $this->assertNull($this->cache->get('x'));
        $this->cache->set('x', 1);
        $this->assertNull($this->cache->get('x'));
        $this->assertSame(3, $this->cache->get('x', null, 3));
    }

    /**
     * @var CacheStub
     */
    private $cache;
}
