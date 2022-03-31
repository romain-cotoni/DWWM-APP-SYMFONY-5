<?php

namespace ContainerEKRnXra;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a93f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer47eee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1c53e = [
        
    ];

    public function getConnection()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getConnection', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getMetadataFactory', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getExpressionBuilder', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'beginTransaction', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getCache', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'transactional', array('func' => $func), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'commit', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->commit();
    }

    public function rollback()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'rollback', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getClassMetadata', array('className' => $className), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'createQuery', array('dql' => $dql), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'createNamedQuery', array('name' => $name), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'createQueryBuilder', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'flush', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'clear', array('entityName' => $entityName), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->clear($entityName);
    }

    public function close()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'close', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->close();
    }

    public function persist($entity)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'persist', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'remove', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'refresh', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'detach', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'merge', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'contains', array('entity' => $entity), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getEventManager', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getConfiguration', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'isOpen', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getUnitOfWork', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getProxyFactory', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'initializeObject', array('obj' => $obj), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'getFilters', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'isFiltersStateClean', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'hasFilters', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return $this->valueHolder1a93f->hasFilters();
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

        $instance->initializer47eee = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1a93f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a93f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a93f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, '__get', ['name' => $name], $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        if (isset(self::$publicProperties1c53e[$name])) {
            return $this->valueHolder1a93f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a93f;

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

        $targetObject = $this->valueHolder1a93f;
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
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a93f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a93f;
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
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, '__isset', array('name' => $name), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a93f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a93f;
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
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, '__unset', array('name' => $name), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a93f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a93f;
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
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, '__clone', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        $this->valueHolder1a93f = clone $this->valueHolder1a93f;
    }

    public function __sleep()
    {
        $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, '__sleep', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;

        return array('valueHolder1a93f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer47eee = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer47eee;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer47eee && ($this->initializer47eee->__invoke($valueHolder1a93f, $this, 'initializeProxy', array(), $this->initializer47eee) || 1) && $this->valueHolder1a93f = $valueHolder1a93f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a93f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a93f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
