<?php

namespace uhc\scenario\scenarios;


use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use uhc\events\StartUHCEvent;
use uhc\scenario\Scenario;

class CatEyes extends Scenario
{

    /**
     * @param StartUHCEvent $event
     */
    public function onStart(StartUHCEvent $event)
    {
        $players = $event->getPlayers();
        foreach ($players as $player){
            $eff = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION) , 500 * 20 , 5 , false);
			$player->addEffect($eff);
			
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "CatEyes";
    }
}
