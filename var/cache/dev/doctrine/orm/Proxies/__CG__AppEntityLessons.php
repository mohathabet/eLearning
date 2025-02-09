<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Lessons extends \App\Entity\Lessons implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'content' => [parent::class, 'content', null],
        "\0".parent::class."\0".'course' => [parent::class, 'course', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'progresses' => [parent::class, 'progresses', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        "\0".parent::class."\0".'updatedAt' => [parent::class, 'updatedAt', null],
        'content' => [parent::class, 'content', null],
        'course' => [parent::class, 'course', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'id' => [parent::class, 'id', null],
        'progresses' => [parent::class, 'progresses', null],
        'title' => [parent::class, 'title', null],
        'updatedAt' => [parent::class, 'updatedAt', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
