<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 Agentur medienworx
 *
 * @package mwk-fitlike-api
 * @author Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link    http://www.medienworx.eu
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * add palettes to modules and config select menu
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['mwk-fitlike'] = '{title_legend}, name, type, FitlikeConfig;{protected_legend:hide}, protected;{expert_legend:hide}, guests, cssID, space';
$GLOBALS['TL_DCA']['tl_module']['fields']['FitlikeConfig'] =
    array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['FitlikeConfig'],
        'inputType'               => 'select',
        'foreignKey'              => 'tl_mwk_fitlike_config.fl_name',
        'eval'                    => array('doNotCopy'=>true, 'mandatory'=>true, 'chosen'=>true, 'includeBlankOption'=>true),
        'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
        'sql'                     => "varchar(32) NOT NULL default ''",
        'relation'                => array('type'=>'hasOne', 'load'=>'eager')
    );