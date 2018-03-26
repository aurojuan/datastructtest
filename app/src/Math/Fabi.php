<?php

namespace DataStructure\Math;

function Fabi($n)
{
    return $n <= 1 ? 1 : Fabi($n - 1) + Fabi($n - 2); // Here n start from 0
}
