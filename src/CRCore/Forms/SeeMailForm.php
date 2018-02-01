<?php
/**
 * -==+CastleRaid Core+==-
 * Originally Created by QuiverlyRivarly
 * Originally Created for CastleRaidPE
 *
 * @authors     : QuiverlyRivarly and iiFlamiinBlaze
 * @contributors: Nick, Potatoe, and Jason.
 */

namespace CRCore\Forms;


use pocketmine\form\CustomForm;
use pocketmine\form\Form;
use pocketmine\Player;

class SeeMailForm extends CustomForm{
	public function __construct(string $title, $elements){
		parent::__construct($title, $elements);
	}

	public function onSubmit(Player $player) : ?Form{
		return null;
	}
}