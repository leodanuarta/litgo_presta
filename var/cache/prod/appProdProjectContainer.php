<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXges32h\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXges32h/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXges32h.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXges32h\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXges32h\appProdProjectContainer([
    'container.build_hash' => 'Xges32h',
    'container.build_id' => '20792a64',
    'container.build_time' => 1700663852,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXges32h');
