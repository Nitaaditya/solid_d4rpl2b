<?php

require_once 'shape3dimension.php';

class Kubus implements Shape3Dimension {
    public function calculateVolume(): void {
        echo "Calculating volume of a cube...\n";
    }

    public function calculateArea(): void {
        echo "Calculating area of a cube...\n";
    }
}

?>