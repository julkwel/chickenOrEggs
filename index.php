<?php

/**
 * @param array $data to sort
 *
 * @return array sorted array
 */
function chickenOrEggs(array $data)
{
    usort($data, function ($a, $b) {
        return $a < $b ? -1 : 1;
    });

    return $data;
}

chickenOrEggs(['eggs', 'chicken']);
chickenOrEggs(['atody', 'akoho']);
chickenOrEggs(['🥚', '🐤']);

