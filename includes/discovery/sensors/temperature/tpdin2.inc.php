<?php
/**
 * tpdin2.inc.php
 *
 * LibreNMS temperature discovery module for Tycon TPDIN (Gen 2)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    LibreNMS
 * @link       http://librenms.org
 * @copyright  2017 Neil Lathwood
 * @author     Neil Lathwood <gh+n@laf.io>
 */

$oid = '.1.3.6.1.4.1.45621.2.2.23.0';
$current = (snmp_get($device, $oid, '-Oqv'));
discover_sensor($valid['sensor'], 'temperature', $device, $oid, 1, 'tpdin2', 'temperature1', 1, 1, null, null, null, null, $current);

$oid = '.1.3.6.1.4.1.45621.2.2.24.0';
$current = (snmp_get($device, $oid, '-Oqv'));
discover_sensor($valid['sensor'], 'temperature', $device, $oid, 2, 'tpdin2', 'temperature2', 1, 1, null, null, null, null, $current);