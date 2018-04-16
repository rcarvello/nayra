<?php

namespace ProcessMaker\Models;

use ProcessMaker\Nayra\Contracts\Bpmn\ConnectionNodeInterface;
use ProcessMaker\Nayra\Bpmn\Collection;
use ProcessMaker\Nayra\Bpmn\StartEventTrait;
use ProcessMaker\Nayra\Contracts\Bpmn\EventInterface;

/**
 * Start Event implementation.
 *
 * @package ProcessMaker\Models
 */
class StartEvent implements EventInterface
{

    use StartEventTrait,
        LocalFlowNodeTrait,
        LocalProcessTrait,
        LocalPropertiesTrait;

    /**
     * Array map of custom event classes for the bpmn element.
     *
     * @return array
     */
    protected function getBpmnEventClasses()
    {
        return [];
    }
}
