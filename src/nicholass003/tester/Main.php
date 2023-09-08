<?php

declare(strict_types=1);

namespace nicholass003\tester;

use nicholass003\tester\commands\TesterCommand;
use nicholass003\tester\events\PlayerEnchanting;
use nicholass003\tester\tasks\Tick;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    protected function onEnable() : void
    {
        $this->registerTesterEvents();

        $this->registerTesterTask();
    }

    public function registerTesterCommand() : void
    {
        $this->getServer()->getCommandMap()->register("tester", new TesterCommand($this));
    }

    public function registerTesterEvents() : void
    {
        $this->getServer()->getPluginManager()->registerEvents(new PlayerEnchanting(), $this);
    }

    public function registerTesterTask() : void
    {
        $this->getScheduler()->scheduleRepeatingTask(new Tick($this), 20); // task run every second, 20 = 1 second
    }
}