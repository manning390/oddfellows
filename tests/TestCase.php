<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * I can never remember this so syntatic sugar/note.
     *
     * Runs Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling@withoutExceptionHandling()
     *
     * @param array $exceptions
     * @return $this
     */
    protected function disableExceptionHandling(array $exceptions = []) {
        return $this->withoutExceptionHandling($exceptions);
    }

    // Same as above
    protected function de(array $e = []) {
        return $this->withoutExceptionHandling($e);
    }
}
