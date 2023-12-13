<?php

/*
 * This file is part of the OpenClassRoom PHP Object Course.
 *
 * (c) Grégoire Hébert <contact@gheb.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Domain\MatchMaker\Player;

use App\Domain\MatchMaker\Lobby;
use App\Domain\MatchMaker\Player\Player;

spl_autoload_register(static function ($fqcn): void {
    $path = sprintf('%s.php', str_replace(['App\\Domain', '\\'], ['src', '/'], $fqcn));
    require_once $path;
});

$greg = new Player('greg');
$chuckNorris = new Player('Chuck Norris', 3000);

$lobby = new Lobby();
$lobby->addPlayer($greg);
$lobby->addPlayer($chuckNorris);

var_dump($greg);
var_dump($chuckNorris);
