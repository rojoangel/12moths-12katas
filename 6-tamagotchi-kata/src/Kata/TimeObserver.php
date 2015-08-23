<?php

namespace Kata;

interface TimeObserver
{
    public function timePassed(Timer $timer);
}