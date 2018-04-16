<?php

namespace ProcessMaker\Models;

use ProcessMaker\Nayra\Contracts\Bpmn\FlowInterface;
use ProcessMaker\Nayra\Contracts\Bpmn\ProcessInterface;
use ProcessMaker\Nayra\Bpmn\RepositoryTrait;
use ProcessMaker\Nayra\Contracts\Repositories\RepositoryInterface;

/**
 * MessageRepository
 *
 * @package ProcessMaker\Models
 */
class MessageFlowRepository implements RepositoryInterface
{
    use RepositoryTrait;

    /**
     * Load a flow from a persistent storage.
     *
     * @param string $uid
     *
     * @return \ProcessMaker\Nayra\Contracts\Bpmn\FlowInterface
     */
    public function loadFlowByUid($uid)
    {
        // TODO: Implement loadFlowByUid() method.
    }

    /**
     * Create or update a flow to a persistent storage.
     *
     * @param \ProcessMaker\Nayra\Contracts\Bpmn\FlowInterface $flow
     * @param $saveChildElements
     *
     * @return $this
     */
    public function store(FlowInterface $flow, $saveChildElements = false)
    {
        // TODO: Implement store() method.
    }

    /**
     * Create an instance of the entity.
     *
     * @param string $uid
     *
     * @return \ProcessMaker\Nayra\Contracts\Bpmn\EntityInterface
     */
    public function create(ProcessInterface $process = null)
    {
        return new MessageFlow();
    }

    public function createMessageFlowInstance(ProcessInterface $process = null)
    {
        return new MessageFlow();
    }
}