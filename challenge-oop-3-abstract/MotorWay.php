<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct() {
        parent::__construct(4, 130);
    }
}
?>