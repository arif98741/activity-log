<?php

namespace Xenon\ActivityLog\Http;

use App\Http\Controllers\Controller;

class ActivityLogController extends Controller
{
    private $time;
    private $data;
    private $log;
    private $actor;

    public function __construct()
    {

    }

    /**
     * @param mixed $actor
     * @return ActivityLogController
     */
    public function setActor($actor): static
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * @param mixed $time
     * @return ActivityLogController
     */
    public function setTime($time): static
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @param mixed $data
     * @return ActivityLogController
     */
    public function setData($data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param mixed $log
     * @return ActivityLogController
     */
    public function setLog($log): static
    {
        $this->log = $log;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

}
