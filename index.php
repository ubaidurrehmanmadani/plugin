<?php

use MyApp\Data\Database;
use MyApp\Data\Game\GameController;
use MyApp\Data\Game\Player\PlayerController;

require_once realpath("vendor/autoload.php");

$player = new PlayerController();

$database = new Database();

$gameController = new GameController();

