<?php

namespace Flagger\Laravel\Services;

use Flagger\Flags\Request\Entities\Context\Context;
use Flagger\Flags\Response\Entities\Flag;
use Flagger\Laravel\Contracts\Client;

class DirectClient implements Client {

    private $client;

    public function __construct(\Flagger\Client $client)
    {
        $this->client = $client;
    }

    public function withContext(Context $context): Client
    {
        $this->client = $this->client->withContext($context);
        return $this;

    }

    public function withDefault(string $key, string $type, string|bool|float|int $defaultValue): Client
    {
        $this->client = $this->client->withDefault($key, $type, $defaultValue);
        return $this;
    }

    public function connect(): Client
    {
        $this->client = $this->client->connect();
        return $this;
    }

    public function all(): array
    {
        return $this->client->all();
    }

    public function get(string $key) : ?Flag
    {
        return $this->client->get($key);
    }
}
