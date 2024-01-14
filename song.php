<?php
$song = [
    [
        'name' => 'No Surprises',
        'album' => 'Ok Computer',
        'artist' => 'Radiohead',
        'cover' => 'img/okcomputer.jpg',
        'info' => 'No Surprises Eseguito da Radiohead Scritto da Colin Greenwood, Ed O\'Brien, Jonny Greenwood, Philip Selway, Thom Yorke Prodotto da Ed O\'Brien, Jonny Greenwood, Philip Selway, Thom Yorke, Nigel Godrich Fonte: XL Recordings'
    ],
    [
        'name' => 'Un Veneno',
        'album' => 'El Madrileño',
        'artist' => 'C. Tangana',
        'cover' => 'img/elmadrileno.jpg',
        'info' => 'Un Veneno - G-Mix Eseguito da C. Tangana, José Feliciano, Niño de Elche Scritto da Antón Álvarez Alfaro, José Feliciano, Niño de Elche, Víctor Martínez, Álvaro Santos Martín Prodotto da C. Tangana, Niño de Elche, Víctor Martínez, Alizzz, Raül Refree Fonte: Sony Music Entertainment'
    ],
    [
        'name' => 'Trees',
        'album' => 'Vessel',
        'artist' => 'Twenty One Pilots',
        'cover' => 'img/vessel.jpg',
        'info' => 'Eseguito da Twenty One Pilots Scritto da Tyler Joseph Prodotto da Greg Wells Fonte: Fueled By Ramen'
    ],
    [
        'name' => 'High and Dry',
        'album' => 'Bends',
        'artist' => 'Radiohead',
        'cover' => 'img/bends.png',
        'info' => 'Eseguito da Radiohead Scritto da Colin Greenwood, Ed O\'Brien, Jonny Greenwood, Philip Selway, Thom Yorke Prodotto da Colin Greenwood, Ed O\'Brien, Jonny Greenwood, Philip Selway, Thom Yorke, Jim Warren Fonte: XL Recordings'
    ],
    [
        'name' => 'You',
        'album' => 'Pablo Honey',
        'artist' => 'Radiohead',
        'cover' => 'img/pablo.jpeg',
        'info' => 'Eseguito da Radiohead Scritto da Colin Greenwood, Ed O\'Brien, Jonny Greenwood, Philip Selway, Thom Yorke Prodotto da Colin Greenwood, Ed O\'Brien, Jonny Greenwood, Philip Selway, Thom Yorke, Jim Warren Fonte: XL Recordings'
    ],
    [
        'name' => 'Taxi Cab',
        'album' => 'Twenty One Pilots',
        'artist' => 'Twenty One Pilots',
        'cover' => 'img/top.jpeg',
        'info' => 'Eseguito da Twenty One Pilots Scritto da Tyler Joseph Prodotto da Greg Wells Fonte: Fueled By Ramen'
    ],
];

header('Content-Type: application/json');
echo json_encode($song);
