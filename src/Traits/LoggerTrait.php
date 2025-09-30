<?php

namespace Lacerda\Commercial\Traits;

trait LoggerTrait
{
    public function log(string $message): void
    {
        echo "[LOG] {$message}\n";
    }
}
