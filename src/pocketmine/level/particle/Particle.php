<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\level\particle;

use pocketmine\math\Vector3;
use pocketmine\network\protocol\DataPacket;

abstract class Particle extends Vector3{	
	
	const TYPE_BUBBLE = 1;
	const TYPE_CRITICAL = 2;
	const TYPE_SMOKE = 4;
	const TYPE_EXPLODE = 5;
	const TYPE_WHITE_SMOKE = 6;
	const TYPE_FLAME = 7;
	const TYPE_LAVA = 8;
	const TYPE_LARGE_SMOKE = 9;
	const TYPE_REDSTONE = 10;
	const TYPE_ITEM_BREAK = 19;
	const TYPE_SNOWBALL_POOF = 13;
	const TYPE_LARGE_EXPLODE = 14;
	const TYPE_HUGE_EXPLODE = 15;
	const TYPE_MOB_FLAME = 16;
	const TYPE_HEART = 17;
	const TYPE_TERRAIN = 19;
	const TYPE_TOWN_AURA = 19;
	const TYPE_PORTAL = 20;
	const TYPE_WATER_SPLASH = 21;
	const TYPE_WATER_WAKE = 22;
	const TYPE_DRIP_WATER = 23;
	const TYPE_DRIP_LAVA = 24;
	const TYPE_DUST = 25;
	const TYPE_MOB_SPELL = 26;
	const TYPE_MOB_SPELL_AMBIENT = 27;
	const TYPE_MOB_SPELL_INSTANTANEOUS = 28;
	const TYPE_INK = 29;
	const TYPE_SLIME = 30;
	const TYPE_RAIN_SPLASH = 31;
	const TYPE_VILLAGER_ANGRY = 32;
	const TYPE_VILLAGER_HAPPY = 33;
	const TYPE_ENCHANTMENT_TABLE = 34;
	const TYPE_NOTE = 36;
	const TYPE_WITCH_MAGIC = 37;
	const TYPE_ICE_CRYSTAL = 40;
	
	abstract public function encode();
	
}
