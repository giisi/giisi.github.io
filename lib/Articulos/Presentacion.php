<?php
/**
 * GIISI - Presentación
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
 * @package MovimientoLibre
 */

namespace Articulos;

/**
 * Clase Presentacion
 */
class Presentacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Presentación';
     // $this->autor                      = '';
        $this->fecha                      = '2016-07-14T08:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'presentacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación del equipo que forma GIISI.';
        $this->claves                     = 'Presentacion, Equipo, Integrantes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/Presentacion.md';
        // Para el Organizador
        $this->categorias                 = array('Novedades');
    } // constructor

} // Clase Presentacion

?>
