<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXp6proa\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXp6proa/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXp6proa.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXp6proa\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXp6proa\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xp6proa',
    'container.build_id' => '753eb6e0',
    'container.build_time' => 1546996719,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXp6proa');
