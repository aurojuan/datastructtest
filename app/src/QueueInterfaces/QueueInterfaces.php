<?php

namespace DataStructure\QueueInterfaces;

interface QueueInterfaces
{
    public function enqueue(int $data);
    public function dequeue();
    public function getMeasureOfQueue();
}
