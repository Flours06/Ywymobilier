<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT6jyBJD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT6jyBJD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT6jyBJD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT6jyBJD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerT6jyBJD\App_KernelDevDebugContainer([
    'container.build_hash' => 'T6jyBJD',
    'container.build_id' => '998eb3c2',
    'container.build_time' => 1579384482,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT6jyBJD');
