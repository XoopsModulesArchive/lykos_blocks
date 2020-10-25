<?php

// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <https://www.xoops.org>                             //
// ------------------------------------------------------------------------- //
// Based on:                             //
// myPHPNUKE Web Portal System - http://myphpnuke.com/              //
// PHP-NUKE Web Portal System - http://phpnuke.org/              //
// Thatware - http://thatware.org/                   //
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
function b_lykos_blocks_latest_news_show($options)
{
    global $xoopsDB;

    $myts = MyTextSanitizer::getInstance();

    $block = [];

    //$block['content'] = "<small>";

    $item = [];

    $sql = 'SELECT storyid, title, published, counter FROM ' . $xoopsDB->prefix('stories') . ' WHERE published<' . time() . " AND published>0 AND topicid='" . $options[2] . "' ORDER BY " . $options[0] . ' DESC';

    $result = $xoopsDB->query($sql, $options[1], 0);

    while ($myrow = $xoopsDB->fetchArray($result)) {
        $title = htmlspecialchars($myrow['title'], ENT_QUOTES | ENT_HTML5);

        if (!XOOPS_USE_MULTIBYTES) {
            if (mb_strlen($title) >= 19) {
                $title = mb_substr($title, 0, 18) . '...';
            }
        }

        $item['title'] = $title;

        $item['id'] = $myrow['storyid'];

        //$block['content'] .= "&nbsp;&nbsp;<strong><big>&middot;</big></strong>&nbsp;<a href='".XOOPS_URL."/modules/news/article.php?storyid=".$myrow['storyid']."'>".$title."</a> ";

        if ('published' == $options[0]) {
            //$block['content'] .= "(".formatTimestamp($myrow['published'],"s").")<br>";

            $item['time'] = formatTimestamp($myrow['published'], 's');

        //$block['title'] = _MI_LYKOS_BLOCKS_B3_TITLE;
        } elseif ('counter' == $options[0]) {
            //$block['content'] .= "(".$myrow['counter'].")<br>";

            $item['hits'] = $myrow['counter'];

            //$block['title'] = _MI_LYKOS_BLOCKS_B4_TITLE;
        }
    }

    //$block['content'] .= "</small>";

    $block['items'][] = $item;

    return $block;
}

function b_lykos_blocks_latest_news_edit($options)
{
    //global $xoopsDB, $storytopic;

    $form = '' . _MI_LYKOS_BLOCKS_B4_ORDER . "&nbsp;<select name='options[]'>";

    $form .= "<option value='published'";

    if ('published' == $options[0]) {
        $form .= " selected='selected'";
    }

    $form .= '>' . _MI_LYKOS_BLOCKS_B4_DATE . "</option>\n";

    $form .= "<option value='counter'";

    if ('counter' == $options[0]) {
        $form .= " selected='selected'";
    }

    $form .= '>' . _MI_LYKOS_BLOCKS_B4_HITS . "</option>\n";

    $form .= "</select>\n";

    $form .= '&nbsp;' . _MI_LYKOS_BLOCKS_B4_DISP . "&nbsp;<input type='text' name='options[]' value='" . $options[1] . "'>&nbsp;" . _MI_LYKOS_BLOCKS_B4_DISP_ARTICLES . '<br>';

    $form .= _MI_LYKOS_BLOCKS_B4_OFCAT . ".&nbsp;<input type='text' name='options[]' value='" . $options[2] . "'>";

    return $form;
}
