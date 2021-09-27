<?php
// ---------------------------------------------------------------------------------------------------------------------
// Weitere Felder in TT-Content
$tmpAccordionElementsColumns = [
	'tx_ce_accordion_active' => [
		'exclude' => true,
		'label' => 'LLL:EXT:ce_accordion/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.active',
		'config' => [
			'type' => 'check',
			'items' => [
				'1' => [
					'0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
				]
			],
			'default' => 0,
		]
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_xo_domain_model_elements', $tmpAccordionElementsColumns);