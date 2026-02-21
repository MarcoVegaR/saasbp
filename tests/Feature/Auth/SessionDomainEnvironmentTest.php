<?php

declare(strict_types=1);

function phase2LoadSessionConfig(string $appDomain, ?string $sessionDomain): array
{
    $previousAppDomain = getenv('APP_DOMAIN');
    $previousSessionDomain = getenv('SESSION_DOMAIN');
    $previousAppDomainEnv = $_ENV['APP_DOMAIN'] ?? null;
    $previousSessionDomainEnv = $_ENV['SESSION_DOMAIN'] ?? null;
    $previousAppDomainServer = $_SERVER['APP_DOMAIN'] ?? null;
    $previousSessionDomainServer = $_SERVER['SESSION_DOMAIN'] ?? null;

    try {
        putenv("APP_DOMAIN={$appDomain}");
        $_ENV['APP_DOMAIN'] = $appDomain;
        $_SERVER['APP_DOMAIN'] = $appDomain;

        if ($sessionDomain === null) {
            putenv('SESSION_DOMAIN');
            unset($_ENV['SESSION_DOMAIN'], $_SERVER['SESSION_DOMAIN']);
        } else {
            putenv("SESSION_DOMAIN={$sessionDomain}");
            $_ENV['SESSION_DOMAIN'] = $sessionDomain;
            $_SERVER['SESSION_DOMAIN'] = $sessionDomain;
        }

        /** @var array<string, mixed> $config */
        $config = require base_path('config/session.php');

        return $config;
    } finally {
        if ($previousAppDomain === false) {
            putenv('APP_DOMAIN');
        } else {
            putenv("APP_DOMAIN={$previousAppDomain}");
        }

        if ($previousSessionDomain === false) {
            putenv('SESSION_DOMAIN');
        } else {
            putenv("SESSION_DOMAIN={$previousSessionDomain}");
        }

        if ($previousAppDomainEnv === null) {
            unset($_ENV['APP_DOMAIN']);
        } else {
            $_ENV['APP_DOMAIN'] = $previousAppDomainEnv;
        }

        if ($previousSessionDomainEnv === null) {
            unset($_ENV['SESSION_DOMAIN']);
        } else {
            $_ENV['SESSION_DOMAIN'] = $previousSessionDomainEnv;
        }

        if ($previousAppDomainServer === null) {
            unset($_SERVER['APP_DOMAIN']);
        } else {
            $_SERVER['APP_DOMAIN'] = $previousAppDomainServer;
        }

        if ($previousSessionDomainServer === null) {
            unset($_SERVER['SESSION_DOMAIN']);
        } else {
            $_SERVER['SESSION_DOMAIN'] = $previousSessionDomainServer;
        }
    }
}

test('session domain defaults to host-only on localhost', function (): void {
    $config = phase2LoadSessionConfig('localhost', null);

    expect($config['domain'])->toBeNull();
});

test('session domain defaults to shared cookie on non-localhost domains', function (): void {
    $config = phase2LoadSessionConfig('tuempresa.com', null);

    expect($config['domain'])->toBe('.tuempresa.com');
});

test('session domain explicit env override has precedence', function (): void {
    $config = phase2LoadSessionConfig('localhost', '.forced.test');

    expect($config['domain'])->toBe('.forced.test');
});
