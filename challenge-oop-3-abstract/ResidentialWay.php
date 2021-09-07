<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct() {
        parent::__construct(1, 50);
    }
}
?>