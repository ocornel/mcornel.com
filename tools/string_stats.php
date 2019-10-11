<?php
$par = $_POST['txt'];
echo json_encode(string_stats($par));

function string_stats($par) {
    $stat_array = [
        'words' => str_word_count($par),
        'lines' => substr_count($par, "\n"),
        'spaces' => substr_count($par, ' '),
        'characters' => iconv_strlen($par),
        'characters_without_spaces' => iconv_strlen($par) - substr_count($par, ' ')
    ];
    return $stat_array;
}

