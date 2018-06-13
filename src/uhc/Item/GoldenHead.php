<?php

namespace uhc\item;

use pocketmine\entity\Effect;
use pocketmine\item\GoldenApple;
use pocketmine\utils\TextFormat;
use pocketmine\inventory\ShapedRecipe;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;

class GoldenHead extends GoldenApple
{
    /**
     * GoldenHead constructor.
     * @param int $meta
     */
    public function __construct($meta = 0)
    {
        parent::__construct($meta);
    }

    /**
     * @return array
     */
    public function getAdditionalEffects() : array
    {
        return;
            $eff = new EffectInstance(Effect::getEffect(Effect::REGENERATION) , 500 * 20 , 5 , false);
            $eff = new EffectInstance(Effect::getEffect(Effect::APSORPTION) , 500 * 20 , 5 , false);
			$player->addEffect($eff);

    }

    /**
     * @return string
     */
    public function getCustomName() : string
    {
        //Hope it will change the name Lol
        return $this->getDamage() == 1 ? TextFormat::RESET . TextFormat::GOLD . "GoldenHead" : TextFormat::RESET . TextFormat::YELLOW . "GoldenApple";
    }

    /**
     * @return bool
     */
    public function hasCustomName(): bool
    {
        return true;
    }

}
