<?php
defined('TYPO3_MODE') or die();

$boot = static function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbQueryParser::class] = [
        'className' => \GeorgRinger\ExtbaseRecordsWithNoL10nParent\Xclass\XclassTypo3DbQueryParser::class
    ];
};

$boot();
unset($boot);
