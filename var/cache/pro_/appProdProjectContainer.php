<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIjw3w4z\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIjw3w4z/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerIjw3w4z.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerIjw3w4z\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerIjw3w4z\appProdProjectContainer([
    'container.build_hash' => 'Ijw3w4z',
    'container.build_id' => '9cc9b024',
    'container.build_time' => 1699797905,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIjw3w4z');
