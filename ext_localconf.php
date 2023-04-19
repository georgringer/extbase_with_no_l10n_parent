<?php

$boot = static function () {
    $typo3Version = (new \TYPO3\CMS\Core\Information\Typo3Version())->getMajorVersion();
    if ($typo3Version === 12) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbQueryParser::class] = [
            'className' => \GeorgRinger\ExtbaseRecordsWithNoL10nParent\Xclass\XclassTypo3DbQueryParser12::class,
        ];
    } else {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbQueryParser::class] = [
            'className' => \GeorgRinger\ExtbaseRecordsWithNoL10nParent\Xclass\XclassTypo3DbQueryParser::class,
        ];
    }
};

$boot();
unset($boot);
