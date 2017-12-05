<?php

namespace Enelogic\WPMLInstaller\Exceptions;

/**
 * Exception thrown if the WPML key or user id is not available in the environment
 */
class MissingKeyException extends \Exception
{
    public function __construct(
        $message = '',
        $code = 0,
        \Exception $previous = null
    ) {
        parent::__construct(
            'Could not find a key or user_id for WPML. ' .
            'Please make it available via the environment variable ' .
            $message,
            $code,
            $previous
        );
    }
}