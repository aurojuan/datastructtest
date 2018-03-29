<?php

namespace DataStructure\Graph;

class BFS
{
    protected $n;
    protected $e;
    protected $head;
    protected $tail;
    protected $que = [];
    protected $book = [];

    public function __construct(array $graph, int $n) //graph is a nXn matrix,non oriented grap;n is the nuber of vertex
    {
        $this->e = $graph;
        $this->n = $n;
    }

    public function bfsearch($start) //now represent as current place
    {
        $this->book = array_fill(0, 100, 0); //initial array here. if you initial at the beginning of the class then you die.
        $this->head = 0;
        $this->tail = 0;
        $this->que[$this->tail] = 0;
        $this->tail++;
        $this->book[0] = 1;

        while ($this->head < $this->tail) {
            $start = $this->que[$this->head];
            for ($i=0; $i<$this->n; $i++) {
                if ($this->e[$start][$i] == 1 && $this->book[$i] == 0) {
                    $this->que[$this->tail] = $i;
                    $this->tail++;
                    $this->book[$i] = 1;
                }
                if ($this->tail > $this->n) {
                    break;
                }
            }
            $this->head++;
        }
        return $this->que;
    }
}
