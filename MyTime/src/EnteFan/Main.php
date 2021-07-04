<?php

declare(strict_types=1);

namespace EnteFan;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase{
  
  public function onCommand(CommandSender $sender, Command $cmd, string $string, array $args):bool{
    if($cmd->getName() == "mytime"){
      $date = date("d.m.Y");
      $day = date("l");
      
      $sender->sendMessage("Today is a: " . $day);
      $sender->sendMessage("Today is the: ". $date);
    }
    return true;
  } 
}
