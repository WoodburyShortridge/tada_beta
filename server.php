<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 3/11/18
 * Time: 6:28 PM
 */


// kdis
$ID = '1ucgFC0hL_FeFfI04XLUxOhCSz9AJjB7wYluKs1UKkEU';
$gridID = '2';
$url = 'https://spreadsheets.google.com/feeds/list/' . $ID . '/' . $gridID . '/public/values?alt=json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable

file_put_contents('data/kids.json', $data);

// home
$ID = '1ucgFC0hL_FeFfI04XLUxOhCSz9AJjB7wYluKs1UKkEU';
$gridID = '1';
$url = 'https://spreadsheets.google.com/feeds/list/' . $ID . '/' . $gridID . '/public/values?alt=json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable

file_put_contents('data/home.json', $data);

// adults
$ID = '1ucgFC0hL_FeFfI04XLUxOhCSz9AJjB7wYluKs1UKkEU';
$gridID = '3';
$url = 'https://spreadsheets.google.com/feeds/list/' . $ID . '/' . $gridID . '/public/values?alt=json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable

file_put_contents('data/adults.json', $data);

// team
$ID = '1ucgFC0hL_FeFfI04XLUxOhCSz9AJjB7wYluKs1UKkEU';
$gridID = '4';
$url = 'https://spreadsheets.google.com/feeds/list/' . $ID . '/' . $gridID . '/public/values?alt=json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable

file_put_contents('data/team.json', $data);

// about
$ID = '1ucgFC0hL_FeFfI04XLUxOhCSz9AJjB7wYluKs1UKkEU';
$gridID = '5';
$url = 'https://spreadsheets.google.com/feeds/list/' . $ID . '/' . $gridID . '/public/values?alt=json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable

file_put_contents('data/about.json', $data);

echo '<h1> Tadaatlanta.com updated </h1>';
?>