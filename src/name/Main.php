<?php

namespace name;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\player\PlayerInfo;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {
  
public function onEnable() : void {
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info("Name has been enabled");
  $this->getLogger()->info("This plugin user MIT-License");
  }
 public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
   switch($command->getName()) {
     case "name":
       $sender->sendMessage("" . $player->getName(); . "");
       
       return true;
   default:
       throw new \AssertionError("This Line will never be executed.");
   }
 }
}
