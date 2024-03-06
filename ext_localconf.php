<?php

declare(strict_types=1);

use FriendsOfTYPO3\TtAddress\Domain\Model\Address;
defined('TYPO3') || die('Access denied.');

call_user_func(
    static function ($extKey): void {
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tt_address']['extender'][
        Address::class
        ][$extKey] = 'EXT:'. $extKey . '/Classes/Extending/Domain/Model/Address.php';
    },
    'ttaddress_country_relation'
);
