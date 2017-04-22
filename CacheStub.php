<?php
/**
 * @package axy\scahce-stub
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

declare(strict_types=1);

namespace axy\scache\stub;

use axy\scache\icache\ICache;

/**
 * Stub of cache
 */
class CacheStub implements ICache
{
    /**
     * {@inheritdoc}
     */
    public function set($key, $value, ?int $expire = null): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function get($key, ?int $expire = null, $default = null)
    {
        return $default;
    }

    /**
     * {@inheritdoc}
     */
    public function delete($key): void
    {
    }
}
