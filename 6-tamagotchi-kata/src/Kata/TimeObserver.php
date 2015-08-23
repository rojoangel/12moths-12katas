<?php

namespace Kata;

interface TimeObserver
{
    public function tick(Timer $timer);
}