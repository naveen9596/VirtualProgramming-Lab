<?php
// This file is part of VPL for Moodle - http://vpl.dis.ulpgc.es/
//
// VPL for Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// VPL for Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with VPL for Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Token class for tokenizer
 *
 * @package mod_vpl
 * @copyright 2022 David Parreño Barbuzano
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author David Parreño Barbuzano <losedavidpb@gmail.com>
 */
namespace mod_vpl\tokenizer;

defined('MOODLE_INTERNAL') || die();

class token {
    /**
     * Type of current token
     */
    public string $type;

    /**
     * Specific value of current token
     */
    public string $value;

    /**
     * Creates a new token with passed type and value
     *
     * @param ?string $type type of current token
     * @param ?string $value value of current token
     */
    public function __construct(?string $type, ?string $value) {
        $this->type = is_null($type)? "" : $type;
        $this->value = is_null($value)? "" : $value;
    }

    /**
     * Show information about current token
     *
     * @return void
     */
    public function show(): void {
        echo $this->type . ' ' . $this->value . '<br>';
    }
}