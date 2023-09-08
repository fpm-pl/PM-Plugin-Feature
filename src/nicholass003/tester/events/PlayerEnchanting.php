<?php

declare(strict_types=1);

namespace nicholass003\tester\events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerEnchantingOptionsRequestEvent;

class PlayerEnchanting implements Listener
{
    public function onPlayerEnchantingTable(PlayerEnchantingOptionsRequestEvent $event) : void
    {
        // cancel player enchanting transaction
        $event->cancel();
    }
}