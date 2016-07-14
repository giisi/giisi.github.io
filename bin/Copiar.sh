#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2016 Guillermo Valdés Lozano
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"
GIISI_DIR="$HOME/Documentos/GitHub/GIISI/giisi.github.io"

echo "[Copiar] Inicia"

#
# Verificar
#
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi
if [ ! -d $GIISI_DIR ]; then
    echo "Error: No se encuentra el directorio $GIISI_DIR"
    exit $E_FATAL
fi
cd $GIISI_DIR
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio $GIISI_DIR/lib."
    exit $E_FATAL
fi

#
# Eliminar
#
echo "  Eliminando..."
cd $GIISI_DIR
rm -rf fonts
rm -rf imagenes
rm -rf img
rm -rf js
rm -rf less
rm -rf scss
rm -f  autores/*.html
rm -f  categorias/*.html
rm -f  contacto/*.html
rm -f  licencias/*.html
rm -f  contacto/*.html
rm -f  bin/Crear.php
rm -f  css/plataforma-de-conocimiento.css
rm -rf lib/Base
rm -rf lib/Michelf

#
# Copiar
#
echo "  Copiando..."
cd $GIISI_DIR
cp -r $PLATAFORMA_DIR/fonts .
cp -r $PLATAFORMA_DIR/imagenes .
cp -r $PLATAFORMA_DIR/img .
cp -r $PLATAFORMA_DIR/js .
cp -r $PLATAFORMA_DIR/less .
cp -r $PLATAFORMA_DIR/scss .
cd $GIISI_DIR/bin
cp $PLATAFORMA_DIR/bin/Crear.php .
cd $GIISI_DIR/css
cp $PLATAFORMA_DIR/css/plataforma-de-conocimiento.css .
cd $GIISI_DIR/lib
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .

echo "[Copiar] Terminó con éxito."
exit $EXITO
