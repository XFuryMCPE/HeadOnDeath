<?php
namespace HeadOnDeath;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\entity\Entity;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onDeath(PlayerDeathEvent $event){
        $event->setDrops(array(Item::get(144:3, 0, 1)));
        }
}
