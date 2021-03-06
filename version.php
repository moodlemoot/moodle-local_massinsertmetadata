<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package local_massinsertmetadata
 * @author Moodle Code Sprint Moodle Moot 2017 France (Lyon)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
$plugin->version   = 2016102407;
$plugin->release   = 'ALPHA3.2.0 (Build 2017042700)';
$plugin->maturity  = MATURITY_ALPHA;
$plugin->requires  = 2016120500; // Moodle 3.2 release and upwards.
$plugin->component = 'local_massinsertmetadata';

// Non moodle attributes.
$plugin->codeincrement = '3.2.0000';