<?php

declare(strict_types=1);

namespace nicholass003\tester\tasks;

use nicholass003\tester\Main;
use pocketmine\scheduler\Task;

class Tick extends Task
{
    public function __construct(private Main $plugin)
    {
        // NOOP
    }

    public function onRun() : void
    {
        // every second
        $this->plugin->getServer()->broadcastMessage("Hello World!");
    }
}