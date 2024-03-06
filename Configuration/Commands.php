<?php

declare(strict_types=1);

use StudioMitte\TtaddressCountryRelation\Command\CountryNameMigrationCommand;
/**
 * Commands to be executed by typo3, where the key of the array
 * is the name of the command (to be called as the first argument after typo3).
 * Required parameter is the "class" of the command which needs to be a subclass
 * of Symfony/Console/Command.
 */
return [
    'ttaddress_country_relation:migrate' => [
        'class' => CountryNameMigrationCommand::class,
        'schedulable' => false,
    ],
];
