<?php
 namespace amqphp\protocol\v0_9_1\queue; class PurgeReserved1Field extends \amqphp\protocol\v0_9_1\ShortDomain implements \amqphp\protocol\abstrakt\XmlSpecField { function getSpecFieldName() { return 'reserved-1'; } function getSpecFieldDomain() { return 'short'; } }