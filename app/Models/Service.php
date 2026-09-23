<?php

namespace App\Models;

class Service
{
    public function all(): array
    {
        return config('site')['services'];
    }

    public function findBySlug(string $slug): ?array
    {
        foreach ($this->all() as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }

        return null;
    }
}
