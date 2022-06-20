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
 * Post installation procedure for setting up defaults for ildmeta_settings and ildmeta_spdx_licenses.
 *
 * @package     local_ildmeta
 * @copyright   2022 ILD TH Lübeck <dev.ild@th-luebeck.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
function xmldb_local_ildmeta_install()
{
    global $DB;
    $result = true;

    if (empty($DB->get_records('ildmeta_settings'))) {
        $default = [
            'coursetypes' => '["Sprachkurs","Fachkurs","Propädeutik","Soft Skill","Professional Skill","Digital Skill","Academic Skills"]',
            'courseformats' => '["Präsenz","Online Selbstlernkurs","Online","Blended Learning"]',
            'audience' => '["Schüler*innen","Studieninteressierte","Studierende","Promotionsinteresse","PASCH-Schüler*innen","Lehrende","Eltern"]',
        ];
        $DB->insert_record('ildmeta_settings', $default);
    }



    if (empty($DB->get_records('ildmeta_spdx_licenses'))) {
        // Defaults.
        $default = array();
        // License not specified.
        $default["moodle_license"] = 1;
        $default["spdx_shortname"] = 'unknown';
        $default["spdx_fullname"] = 'Licence not specified';
        $default["spdx_url"] = "";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 2;
        $default["spdx_shortname"] = 'Proprietary';
        $default["spdx_fullname"] = 'All rights reserved';
        $default["spdx_url"] = "";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // Public domain.
        $default["moodle_license"] = 3;
        $default["spdx_shortname"] = 'GPL-3.0-or-later';
        $default["spdx_fullname"] = 'GNU General Public License v3.0 or later';
        $default["spdx_url"] = "https://spdx.org/licenses/GPL-3.0-or-later.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 4;
        $default["spdx_shortname"] = 'CC-BY-3.0-DE';
        $default["spdx_fullname"] = 'Creative Commons Attribution 3.0 Germany';
        $default["spdx_url"] = "https://spdx.org/licenses/CC-BY-3.0-DE.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 5;
        $default["spdx_shortname"] = 'CC-BY-ND-3.0-DE';
        $default["spdx_fullname"] = 'Creative Commons Attribution No Derivatives 3.0 Germany';
        $default["spdx_url"] = "https://spdx.org/licenses/CC-BY-ND-3.0-DE.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 6;
        $default["spdx_shortname"] = 'CC-BY-NC-ND-3.0-DE';
        $default["spdx_fullname"] = 'Creative Commons Attribution Non Commercial No Derivatives 3.0 Germany';
        $default["spdx_url"] = "https://spdx.org/licenses/CC-BY-NC-ND-3.0-DE.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 7;
        $default["spdx_shortname"] = 'CC-BY-NC-3.0-DE';
        $default["spdx_fullname"] = 'Creative Commons Attribution Non Commercial 3.0 Germany';
        $default["spdx_url"] = "https://spdx.org/licenses/CC-BY-NC-3.0-DE.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 8;
        $default["spdx_shortname"] = 'CC-BY-NC-SA-3.0-DE';
        $default["spdx_fullname"] = 'Creative Commons Attribution Non Commercial Share Alike 3.0 Germany';
        $default["spdx_url"] = "https://spdx.org/licenses/CC-BY-NC-SA-3.0-DE.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
        // All rights reserved.
        $default["moodle_license"] = 9;
        $default["spdx_shortname"] = 'CC-BY-SA-3.0-DE';
        $default["spdx_fullname"] = 'Creative Commons Attribution Share Alike 3.0 Germany';
        $default["spdx_url"] = "https://spdx.org/licenses/CC-BY-SA-3.0-DE.html";
        $DB->insert_record('ildmeta_spdx_licenses', $default);
    }

    return $result;
}
