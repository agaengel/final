<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUWDvKuK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUWDvKuK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUWDvKuK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUWDvKuK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUWDvKuK\App_KernelDevDebugContainer([
    'container.build_hash' => 'UWDvKuK',
    'container.build_id' => 'fcd9c544',
    'container.build_time' => 1702946411,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUWDvKuK');