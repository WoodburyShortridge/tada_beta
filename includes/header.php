<?php
/**
 * Created by IntelliJ IDEA.
 * User: woody
 * Date: 2/13/18
 * Time: 11:59 AM
 */

$url = 'data/seo.json';
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="geo.region" content="US-GA" />
    <meta name="geo.placename" content="Atlanta" />
    <meta name="geo.position" content="33.818836;-84.351227" />
    <meta name="ICBM" content="33.818836, -84.351227" />
    <meta name="msvalidate.01" content="CD9651592C3794A9BC07707281F8397C" />
    <meta name="google-site-verification" content="nw3P7Ru32MQWP0NbOpbzqqfW4TfMV3hQPozDjuyyFcc" />
    <!-- ****** favicons ****** -->
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="favicon/favicon.ico">
    <!-- SEO-->
    <meta name="keywords" content="<?php foreach ($characters['feed']['entry'] as $item) { if ($item['gsx$keywords']['$t'] != "") { echo $item['gsx$keywords']['$t'] . ', '; }} ?>" />
    <meta name="description" content="<?php foreach ($characters['feed']['entry'] as $item) { if ($item['gsx$description']['$t'] != "") { echo $item['gsx$description']['$t'] . ' '; }} ?>" />
    <title>TADA - The Atlanta Dance Academy</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="sass/style.css" rel="stylesheet">
</head>