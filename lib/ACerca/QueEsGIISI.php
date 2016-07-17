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
 * Clase QueEsGIISI
 */
class QueEsGIISI extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Qué es GIISI';
     // $this->autor                      = '';
        $this->fecha                      = '2016-07-17T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'que-es-giisi';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Qué es el Grupo Interdisciplinario de Investigaciones Sistémico-Interpretativas, S.C. (GIISI).';
        $this->claves                     = 'A cerca de, que es';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ACerca/QueEsGIISI.md';
        // Para el Organizador
        $this->categorias                 = array();
    } // constructor

} // Clase QueEsGIISI

?>
