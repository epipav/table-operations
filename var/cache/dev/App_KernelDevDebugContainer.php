<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFawzvZL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFawzvZL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFawzvZL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFawzvZL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFawzvZL\App_KernelDevDebugContainer([
    'container.build_hash' => 'FawzvZL',
    'container.build_id' => 'b968f8bd',
    'container.build_time' => 1602504312,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFawzvZL');