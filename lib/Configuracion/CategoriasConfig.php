<?php
/**
 * GIISI - Categorias Config
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

namespace Configuracion;

/**
 * Clase CategoriasConfig
 */
class CategoriasConfig {

    const VINCULOS_INDICE          = '\\Base\\VinculosGalerias';   // Ruta a la clase para el índice de categorias, en categorias/index.html
    const VINCULOS_INDIVIDUAL      = '\\Base\\VinculosDetallados'; // Ruta a la clase para listar las publicaciones de cada categoría, a usarse en las páginas de las categorías
    const DIRECTORIO               = 'categorias';                 // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    const NAVEGACION_OPCION_ACTIVA = '';                           // Opción del menú activa cuando esté en el índice, debe ser un valor en /Configuracion/NavegacionConfig
    const INDICE_TITULO            = 'Categorías';                 // Título para la página índice
    const INDICE_DESCRIPCION       = 'Las publicaciones clasificadas por categorías'; // Descripción para la página índice
    const INDICE_CLAVES            = 'Categorias';                 // Claves para la página índice
    public $categorias             = array();                      // Arreglo asociativo con instancias de \Base\Categoria
    public $mostrar_no_definidos   = true;                         // Verdadero pone todos los autores encontrados, falso solo los definidos aquí
    public $imagen_tamano          = 128;                          // Tamaño del icono a usuarse en \Base\PaginasCategoriasIndice

    /**
     * Constructor
     */
    public function __construct() {
        // Categoría constructor parámetros: nombre, icono, descripcion, estatus
        $this->categorias[] = new \Base\Categoria('Astronomía',       'palemoon',                'Astronomía, exploración espacial y nuestro planeta Tierra.');
        $this->categorias[] = new \Base\Categoria('Ciencia de Datos', 'csv',                     'Conjunto de habilidades para trabajar con grandes volúmenes de datos y encontrar datos sobresalientes.');
        $this->categorias[] = new \Base\Categoria('Conferencias',     'calligrastage',           'Las experiencias de compartir conocimiento en comunidad.');
        $this->categorias[] = new \Base\Categoria('Desarrollo',       'applications-development');
        $this->categorias[] = new \Base\Categoria('Educación',        'applications-education');
        $this->categorias[] = new \Base\Categoria('Licencias',        'unknown');
        $this->categorias[] = new \Base\Categoria('Novedades',        'unknown');
        $this->categorias[] = new \Base\Categoria('Política',         'unknown');
    } // constructor

    /**
     * Obtener
     *
     * @param  string Nombre de la categoría a obtener
     * @return mixed  La instancia de Categoria encontrada, falso si no se haya
     */
    public function obtener($texto_a_buscar) {
        foreach ($this->categorias as $categoria) {
            if ($categoria->nombre == $texto_a_buscar) {
                return $categoria;
            }
        }
        return false;
    } // obtener

} // Clase CategoriasConfig

?>
