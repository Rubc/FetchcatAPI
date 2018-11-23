<?php

namespace App\Calendar;


use App\Entity\Board;

interface CalendarInterface
{
    public function getAll();
    public function get(Board $board);
}