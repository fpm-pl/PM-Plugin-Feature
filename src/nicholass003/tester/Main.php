<?php

declare(strict_types=1);

namespace nicholass003\tester;

use nicholass003\tester\commands\TesterCommand;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    protected function onEnable() : void
    {
        $this->getServer()->getCommandMap()->register("tester", new TesterCommand($this));
    }
}