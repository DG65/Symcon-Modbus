<?php

declare(strict_types=1);

/*
 * @addtogroup Siemens
 * @{
 *
 * @package       Siemens
 * @file          module.php
 * @author        Dietmar Gureth
 * @copyright     2019 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       1.00
 *
 */
require_once __DIR__ . '/../libs/BGETechModule.php';  // diverse Klassen

/**
 * SENTRON ist die Klasse für die SENTRON ModBus Energie-Zähler der Firma Siemens
 * Erweitert Siemens.
 */
class SENTRON extends BGETech
{
    const PREFIX = 'SENTRON';

    public static $Variables = [
        ['Total active energy', VARIABLETYPE_FLOAT, 'Electricity', 801, 2, 4, true]
    ];
}
