<?php

declare(strict_types=1);

namespace nicholass003\tester\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginOwned;
use pocketmine\utils\TextFormat as T;

class TesterCommand extends Command implements PluginOwned
{
    public function __construct(private Main $plugin)
    {
        parent::__construct("tester", "Tester Command", "/tester", ["test"]);
        $this->setPermission("tester.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if (!$this->testPermission($sender)) return;

        if (!$sender instanceof Player){
            $sender->sendMessage(T::RED . "You are not a player.");
        } else {
            $sender->sendMessage(T::GREEN . "You are a player.");
        }
    }
}