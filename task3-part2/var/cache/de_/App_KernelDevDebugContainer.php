<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKKONnPz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKKONnPz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKKONnPz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKKONnPz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKKONnPz\App_KernelDevDebugContainer([
    'container.build_hash' => 'KKONnPz',
    'container.build_id' => 'd23b885a',
    'container.build_time' => 1721068255,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKKONnPz');
