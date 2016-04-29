<?php
namespace HeadOnDeath;

use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onDeath(PlayerDeathEvent $e){
        $p = $e->getPlayer();
        $lvl = $p->getLevel();
        $item = Item::get(397,3,1);
        $lvl->dropItem($p, $item);
    }
}
