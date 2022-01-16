<?php
/*
На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками.
Сколько рисунков, выполненные красками, на школьной выставке?
Описать и вывести условия, решение этой задачи на PHP.
Все предоставленные числа из пункта 1 должны быть указаны в константах.
*/

const ALL_IMAGES = 80;
const FLET_PEN_IMAGES = 23;
const PENCIL_IMAGES = 40;

$paintImages = ALL_IMAGES - FLET_PEN_IMAGES - PENCIL_IMAGES;
echo "Красками выполнено $paintImages рисунков";
