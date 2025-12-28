#!/bin/bash

gdal2tiles.py --xyz -z 3-5 -p 'raster' map.png tiles/
# pixi run gdal2tiles --xyz -z 3-5 -p raster map.png tiles
