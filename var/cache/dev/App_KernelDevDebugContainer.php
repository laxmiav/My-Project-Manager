<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNVkIT0i\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNVkIT0i/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNVkIT0i.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNVkIT0i\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNVkIT0i\App_KernelDevDebugContainer([
    'container.build_hash' => 'NVkIT0i',
    'container.build_id' => '87d60428',
    'container.build_time' => 1694453221,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNVkIT0i');
