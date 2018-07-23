#!/bin/bash
echo What\'s the name of the new validator?
read NAME
php bin/codegen.php  ${NAME}> ./src/${NAME}.php
