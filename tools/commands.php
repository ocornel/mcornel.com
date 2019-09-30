<?php
$connection = new mysqli("localhost", "angular_user", "angular_password", "angular_practice") or die(mysqli_error());
$source = $_POST['source'];
$term = $_POST['term'];

if (startsWith($source, 'reverse')) {
    # do reverse search onlookups
    if (startsWith($source, 'reverse-dict')) {
        $matches = reverse_lookup($term, 'dict');
    } else {
        $matches = reverse_lookup($term, 'bible');
    }

    echo json_encode($matches);
} else {
    $command = $source . ' ' . $term;
    $result = terminal($command);
    $out = $result['output'];
    save_lookup($source, $term, $out);
    lookup_each_word($out);
    echo(json_encode($result));
}


function reverse_lookup($phrase, $source = null)
{
    $words = explode(' ', $phrase);
    if ($source == 'bible') {
//        bible ??preserved ?and Jesus ?and Christ
        $first_word = $words[0];
        $command = "bible ??$first_word";
        foreach ($words as $word) {
            $command .= " ?and $word";
        }
        $result = terminal($command);
        return $result;
    }

    $conn = $GLOBALS['connection'];

    $first_word = $words[0];
    $sql = "SELECT * FROM `lookups` WHERE ";
    $sql_end = '';
    foreach ($words as $word) {
        $sql_end .= " OR result LIKE '%{$word}%'";
    }
    $sql_end = substr($sql_end, 4);
    $sql = $sql . $sql_end;
    $result = $conn->query($sql);

    $matches = "";
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    foreach ($rows as $row) {
        if ($source == 'dict') {
            if ($row['source'] == 'dict -d gcide') {
                $matches .= ', ' . $row['term'];
            }
        } else {
            $matches .= ', ' . $row['term'];
        }
    }
    return ['output' => $matches, 'status' => 0];
}

// Function to check string starting with substring
function startsWith($string, $startString)
{
    return (substr($string, 0, strlen($startString)) === $startString);
}

function save_lookup($source, $term, $result)
{
    if ($result != "") {
        $conn = $GLOBALS['connection'];
        $lookup = mysqli_fetch_assoc($conn->query("SELECT * FROM `lookups` WHERE term='$term' AND source='$source'"));
        if (!$lookup) {
//    register new word
            $query = "INSERT INTO `lookups` (`id`, `source`, `term`, `result`) VALUES (NULL, '$source', '$term', '$result')";
            $conn->query($query);
            return true;
        }
    }
    return false;
}

/**
 * @param $phrase
 */
function lookup_each_word($phrase)
{
    $words = explode(" ", $phrase);
    shuffle($words);
    $ignore = ['a', 'the', 'an', 'at', 'any', 'and', 'not', 'for', 'of'];
    $i = 20; // limit for first n words to check
    foreach ($words as $v) {
        $v = strtolower($v);
        if (!in_array($v, $ignore) or !is_numeric($v)) {
            if ($i > 0) {
                $word = preg_replace("#[[:punct:]]#", "", $v);
                $meaning = terminal("dict -d gcide $word")['output'];
                if (save_lookup('dict -d gcide', $word, $meaning) == true) {
                    $i--;
                }
            } else break;

        }
    }
}

/**
 * Method to execute a command in the terminal
 * Uses :
 *
 * 1. system
 * 2. passthru
 * 3. exec
 * 4. shell_exec
 * @param $command
 * @return array
 */
function terminal($command)
{
    //system
    if (function_exists('system')) {
        ob_start();
        system($command, $return_var);
        $output = ob_get_contents();
        ob_end_clean();
    } //passthru
    else if (function_exists('passthru')) {
        ob_start();
        passthru($command, $return_var);
        $output = ob_get_contents();
        ob_end_clean();
    }

    //exec
//    else if(function_exists('exec'))
//    {
//        exec($command , $output , $return_var);
//        $output = implode(&quot;n&quot; , $output);
//	}

    //shell_exec
    else if (function_exists('shell_exec')) {
        $output = shell_exec($command);
    } else {
        $output = 'Command execution not possible on this system';
        $return_var = 1;
    }

    return ['output' => $output, 'status' => $return_var];
}
