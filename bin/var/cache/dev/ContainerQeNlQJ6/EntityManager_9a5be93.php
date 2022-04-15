<?php

namespace ContainerQeNlQJ6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6d17d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48b4a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc957 = [
        
    ];

    public function getConnection()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getConnection', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getMetadataFactory', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getExpressionBuilder', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'beginTransaction', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getCache', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'transactional', array('func' => $func), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'commit', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->commit();
    }

    public function rollback()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'rollback', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getClassMetadata', array('className' => $className), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'createQuery', array('dql' => $dql), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'createNamedQuery', array('name' => $name), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'createQueryBuilder', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'flush', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'clear', array('entityName' => $entityName), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->clear($entityName);
    }

    public function close()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'close', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->close();
    }

    public function persist($entity)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'persist', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'remove', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'refresh', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'detach', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'merge', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'contains', array('entity' => $entity), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getEventManager', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getConfiguration', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'isOpen', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getUnitOfWork', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getProxyFactory', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'initializeObject', array('obj' => $obj), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'getFilters', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'isFiltersStateClean', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'hasFilters', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return $this->valueHolder6d17d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer48b4a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6d17d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6d17d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6d17d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, '__get', ['name' => $name], $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        if (isset(self::$publicPropertiesdc957[$name])) {
            return $this->valueHolder6d17d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d17d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6d17d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d17d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6d17d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, '__isset', array('name' => $name), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d17d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6d17d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, '__unset', array('name' => $name), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d17d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6d17d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, '__clone', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        $this->valueHolder6d17d = clone $this->valueHolder6d17d;
    }

    public function __sleep()
    {
        $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, '__sleep', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;

        return array('valueHolder6d17d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer48b4a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48b4a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48b4a && ($this->initializer48b4a->__invoke($valueHolder6d17d, $this, 'initializeProxy', array(), $this->initializer48b4a) || 1) && $this->valueHolder6d17d = $valueHolder6d17d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d17d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d17d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
