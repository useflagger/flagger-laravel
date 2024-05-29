<?php

namespace Flagger\Laravel\Contracts;

use Flagger\Settings\Request\Entities\Context\Context;
use Flagger\Settings\Response\Entities\Setting;

interface Client {

    public function withContext(Context $context): Client;
    public function withDefault(string $key, string $type, string|bool|float|int $defaultValue): Client;
    public function connect(): Client;
    public function all(): array;
    public function get(string $key) : ?Setting;
}
