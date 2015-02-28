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
 * Table tl_mwk_fitlike_config
 */
$GLOBALS['TL_DCA']['tl_mwk_fitlike_config'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('fl_name'),
            'flag'                    => 1
        ),
        'label' => array
        (
            'fields'                  => array('fl_name'),
            'format'                  => '%s',
            'label_callback'          => array('tl_mwk_fitlike_config', 'formatList')
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Select
    'select' => array
    (
        'buttons_callback' => array()
    ),

    // Edit
    'edit' => array
    (
        'buttons_callback' => array()
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '
            fl_name,
            fl_url,
            fl_api_key,
            fl_competition,
            fl_sorting,
            fl_show_startnr,
            fl_show_firstname,
            fl_show_lastname,
            fl_show_nation,
            fl_show_gender,
            fl_show_year,
            fl_show_club,
            fl_show_team'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'pid' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'sorting' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'fl_name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_name'],
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'long', 'mandatory'=>true, 'maxlength'=>128),
            'sql'                     => "varchar(128) NULL"
        ),
        'fl_url' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_url'],
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'long', 'mandatory'=>true, 'maxlength'=>128),
            'sql'                     => "varchar(128) NULL"
        ),
        'fl_api_key' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_api_key'],
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'w50', 'mandatory'=>true, 'maxlength'=>13),
            'sql'                     => "varchar(13) NULL"
        ),
        'fl_competition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_competition'],
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'w50', 'mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'digit'),
            'sql'                     => "int(10) NULL"
        ),
        'fl_sorting' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting'],
            'inputType'               => 'select',
            'options'                 => array(
                1 => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting_by'][1],
                2 => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting_by'][2],
                3 => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting_by'][3],
                4 => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting_by'][4],
                5 => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting_by'][5]
            ),
            'eval'                    => array('tl_class'=>'w50 long', 'mandatory'=>true),
            'sql'                     => "varchar(32) NULL"
        ),
        'fl_show_startnr' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_startnr'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_firstname' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_firstname'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_lastname' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_lastname'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_nation' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_nation'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_gender' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_gender'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_year' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_year'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_club' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_club'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        ),
        'fl_show_team' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_show_team'],
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(1) NOT NULL default '1'"
        )
    )
);

/**
 * Class tl_mwk_fitlike_config
 */
class tl_mwk_fitlike_config extends Backend
{

    /**
     * formatList
     * @param $arrRow
     * @return string
     */
    public function formatList($arrRow)
    {
        $listRow = '<b>'.$arrRow['fl_name'].'</b><br>'.$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_competition'][0].': '.$arrRow['fl_competition'].' - '.$GLOBALS['TL_LANG']['tl_mwk_fitlike_config']['fl_sorting_by'][$arrRow['fl_sorting']];
        return $listRow;
    }
}