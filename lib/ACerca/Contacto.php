<?php
/**
 * GIISI - ACerca Contacto
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package GIISI
 */

namespace ACerca;

/**
 * Clase Contacto
 */
class Contacto extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Contacto';
     // $this->autor                      = '';
        $this->fecha                      = '2016-07-17T11:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'contacto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Formas de contacto con GIISI.';
        $this->claves                     = 'Correos electronicos, redes sociales';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ACerca/Contacto.md';
        // Para el Organizador
        $this->categorias                 = array();
    } // constructor

} // Clase Contacto

?>
