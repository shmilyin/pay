<?php

namespace Yansongda\Pay\Exceptions;

class InvalidConfigException extends Exception
{
    /**
     * Raw error info.
     *
     * @var array|string
     */
    public $raw;

    /**
     * Bootstrap.
     *
     * @author yansongda <me@yansonga.cn>
     *
     * @param string       $message
     * @param array|string $raw
     * @param int|string   $code
     */
    public function __construct($message, $raw = '', $code = 2)
    {
        parent::__construct($message, intval($code));

        $this->raw = $raw;
    }
}
