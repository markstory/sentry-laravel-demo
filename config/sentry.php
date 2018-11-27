<?php
return array(
    'dsn' => env('SENTRY_DSN'),

    // capture release as git sha
    'release' => env('SENTRY_RELEASE'),

    // Capture bindings on SQL queries
    'breadcrumbs.sql_bindings' => true,

    // Capture default user context
    'user_context' => true,
);
