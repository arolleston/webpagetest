<?php
include 'common.inc';

// only allow download of relay tests
$ok = false;
if( strpos($testPath, 'relay') && is_dir($testPath) )
{
    // make sure the keys match
    if( strlen($req_rkey) && $test['testinfo']['rkey'] == $req_rkey )
    {
        // delete the test directory
        DelTree($testPath);
        $ok = true;
    }
}

if( !$ok )
    header("HTTP/1.0 404 Not Found");
?>