<?php

// Lykos Blocks Module
// Samuel Wright (http://www.lykoszine.co.uk)
// See readme.txt for more info

// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <https://www.xoops.org>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //

$modversion['name'] = _MI_LYKOS_BLOCKS_N;
$modversion['version'] = 1.10;
$modversion['description'] = _MI_LYKOS_BLOCKS_DESC;
$modversion['credits'] = 'Lykos Zine';
$modversion['author'] = 'Samuel Wright (http://www.lykoszine.co.uk)';
$modversion['help'] = 'lykos_blocks.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/lykoszine.gif';
$modversion['dirname'] = 'lykos_blocks';

// Admin things
$modversion['hasAdmin'] = 0;

// Main contents
$modversion['hasMain'] = 0;

// Random Partner BlockDeprecated due to same functionality in core

$modversion['blocks'][2]['file'] = 'b_lykos_blocks_stats.php';
$modversion['blocks'][2]['name'] = _MI_LYKOS_BLOCKS_B2;
$modversion['blocks'][2]['description'] = _MI_LYKOS_BLOCKS_B2_DESC;
$modversion['blocks'][2]['show_func'] = 'b_lykos_blocks_stats_show';
$modversion['blocks'][2]['template'] = 'b_lykos_blocks_stats.html';

$modversion['blocks'][3]['file'] = 'b_lykos_blocks_latest.php';
$modversion['blocks'][3]['name'] = _MI_LYKOS_BLOCKS_B3;
$modversion['blocks'][3]['description'] = _MI_LYKOS_BLOCKS_B3_DESC;
$modversion['blocks'][3]['show_func'] = 'b_lykos_blocks_latest_news_show';
$modversion['blocks'][3]['edit_func'] = 'b_lykos_blocks_latest_news_edit';
$modversion['blocks'][3]['options'] = 'published|5|1';
$modversion['blocks'][3]['template'] = 'b_lykos_blocks_latest.html';

$modversion['blocks'][4]['file'] = 'b_lykos_blocks_latest.php';
$modversion['blocks'][4]['name'] = _MI_LYKOS_BLOCKS_B4;
$modversion['blocks'][4]['description'] = _MI_LYKOS_BLOCKS_B4_DESC;
$modversion['blocks'][4]['show_func'] = 'b_lykos_blocks_latest_news_show';
$modversion['blocks'][4]['edit_func'] = 'b_lykos_blocks_latest_news_edit';
$modversion['blocks'][4]['options'] = 'counter|5|1';
$modversion['blocks'][4]['template'] = 'b_lykos_blocks_latest2.html';

// Search
$modversion['hasSearch'] = 0;
