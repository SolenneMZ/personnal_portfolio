<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI3cmXU7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI3cmXU7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI3cmXU7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI3cmXU7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerI3cmXU7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'I3cmXU7',
    'container.build_id' => 'a0c311f2',
    'container.build_time' => 1570026929,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI3cmXU7');
