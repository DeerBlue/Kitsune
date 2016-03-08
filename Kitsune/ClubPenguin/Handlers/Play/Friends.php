<?php
namespace Kitsune\ClubPenguin\Handlers\Play;
use Kitsune\Logging\Logger;
use Kitsune\ClubPenguin\Packets\Packet;
trait Friends {
  public function addBuddy ($socket){
    $penguin = $this->penguins[$socket];
  }
}
?>
