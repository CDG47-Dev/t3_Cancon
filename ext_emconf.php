<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3_Cancon".
 *
 * Auto generated 23-08-2014 13:00
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'cancon',
    'description' => 'cancon gabarit',
    'category' => 'fe',
    'constraints' => array(
        'depends' => array(
            'bootstrap_package' => '7.0.2 - 8.99.99',
            'typo3' => '7.6.2 - 8.99.99',
			'indexed_search' => '7.6.0 - 8.99.99',
			'news' => '5.0.0 - 5.9.99',			
			'dd_googlesitemap' => '*',
			
        ),
        'conflicts' => array(),
    ),
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'C.Hediard, O. Pommaret',
    'author_email' => 'services.internet@cdg47.fr',
    'author_company' => 'CDG47',
    'version' => '7.6.2',
);
?>
