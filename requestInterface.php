<?php
declare(strict_types=1);

namespace Pandora\Config;



interface RequestInterface]
{
    public function get(string $key, $default = null);
    public function getMethod() : string;
    public function getMimeType(string $format) : string;
    public function getProtocolVersion() : string;
    public function getContent() : array;
    public function getLanguages() : string;
    public function getSession(string $key, $default = null);
    public function setSession(string $key, $default = null);


}
