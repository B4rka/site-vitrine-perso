<?php
$classicBeer= [
    'vincent' => [
        'nom'=> 'La Vincent',
        'type'=> 'Type: Neipa',
        'alcool'=> 'alcool: 5.5%',
        'description' => "De puissants arômes de fruits exotiques nous envahissent le palais dès la première gorgée de
        cette bière onctueuse et doucement amère.",
    ],
    'yavuz' => [
        'nom'=> 'La Yavuz',
        'type'=> 'Type: Double IPA',
        'alcool'=> 'alcool: 8.5%',
        'description' => "Bière forte et bien amère ! Fermentée avec du saucisson provenant d'élevage porcin bio venant
        contrecarrer l'acidité et la douceur de l'agrume et de fruits exotiques.",
    ],
    'eleonore' => [
        'nom'=> 'L\'Eléonore',
        'type'=> 'Type: Lager de blé',
        'alcool'=> 'alcool: 4.2%',
        'description' => "Bière subtile, légère et désaltérante. Une bière de soif florale et légèrement marine qui nous
        ferait presque voyager au bord de la Manche dans un début de primptemps.",
    ],
    'benoit' => [
        'nom'=> 'La St Benoit',
        'type'=> 'Type: Bière d\'abbaye',
        'alcool'=> 'alcool: 6.7%',
        'description' => "Bière ronde et gourmande légèrement épicée, non sans rappeler nos folles escapades Lilloises et nos
        \"black out\" mémorables !",
    ],
    'ayoub' => [
        'nom'=> 'L\'Ayoub',
        'type'=> 'Type: Porter',
        'alcool'=> 'alcool: 5.2%',
        'description' => "Bière de maltes torréfiés lui apportant des arômes de chocolat et de café, à boire absolument le
        matin tôt accompagnée d'un fameux \"breakfast\" Anglais !",
    ],
];
$ephemereBeer= [
    'anae' => [
        'nom'=> "<span id='anae'>L'Anaé</span>",
        'type'=> 'Type: Rye Amber Ale',
        'alcool'=> 'alcool: 6.6%',
        'description' => "Bière ambrée au seigle. Des notes caramélisées accompagnent les arômes épicés du seigle sur une
        bière onctueuse. Parfaite pour accompagner vos séances de bronzage sous le soleil Niçois.",
        'soldout'=> false,
    ],
    'gab' => [
        'nom'=> 'La Gab\'',
        'type'=> 'Type: Imperial Stout',
        'alcool'=> 'alcool: 10.5%',
        'description' => "Bière \"noire\" de seigle et au calvados vielli 24 mois en barrique. Des notes épicées accompagnent
        les arômes de café et de pomme. Attention car cette bière ne tartine pas votre pain... mais bien
        votre caboche ! Le lendemain matin risque d'être fort compliqué...",
        'soldout'=> false,
    ],
    'mat' => [
        'nom'=> 'La Mat\'',
        'type'=> 'Type: Triple',
        'alcool'=> 'alcool: 8%',
        'description' => "Bière de type belge. Légèrement sucrée et peu amère. Parfaite en hiver au coin du feu entre amis
        sur une peau de bête... on ira pas dans les details !",
        'soldout'=> true,
    ],
];
$about= [
    'Alexandre' => [
        'nom'=> "Alexandre",
        'description' => "Sa curiosité insatiable l'a souvent conduit à explorer les nuances infinies des brasseries
        artisanales. Bien qu'il préfère généralement la solitude, les rencontres autour d'une bonne
        bière lui permettent de se libérer de sa coquille, révélant un côté sociable et chaleureux.",
    ],
    'julien' => [
        'nom'=> 'Julien',
        'description' => "Passionné de tout type d'alcool, musicien à ses heures perdues et amoureux des bonnes choses. Il est forcément partant pour ce genre de projet avec un enthousiasme et une énergie digne d'un grimpeur dans le parc du Yosemite.",
    ],
    'phil' => [
        'nom'=> 'Philippe',
        'description' => "Passioné de jeux vidéos depuis tout petit ainsi que mordu de musique et de cinéma, Philippe aime
        aussi
        la bière. Il s'est donc mis en tête d'en fabriquer. Mais seulement des bonnes. Et des
        artisanales.
        Pleines d'amour et de savoir-faire.",
    ],
];
$news= [
    'new-anae' => [
        'titre'=> "L'Anaé",
        'description' => "On vous a concocté notre dernière éphémère ! Une Rye Amber Ale tout juste sortie de fermentation,
        parfaite pour ce début de primptemps !.",
        'image' => 'new-anae.jpg',
        'class' => 'new-anae',
        'link' => 'beers.php#anae',
    ],
    'cultOfSac' => [
        'titre'=> 'On va faire du sale !',
        'description' => "Enfin ! On a reussi à booker notre petit coup de coeur pour vous le faire partager en sirotant
        vos bières préférées. On aura l'honneur d'accueillir <strong>Cult Of Sacrifice</strong> pour
        bien
        nettoyer vos esgourdes !",
        'image' => 'cultOfSac.png',
        'class' => 'cult',
        'link' => 'events.php#carousel__slide2',
    ],
    'newCuve' => [
        'titre'=> 'La grosse Bertha',
        'description' => "La famille s'agrandit ! parce que vous êtes vraiment des gros soulards, vous nous avez forcé à
        investir dans une grosse cuve de fermentation pour que vous puissiez encore et toujours plus
        boire. <strong>Encore MERCI !</strong> tout ceci c'est grâce à <strong>vous</strong>, et à votre
        foie...",
        'image' => 'cuve.jpg',
        'class' => 'cuve',
        'link' => '#',
    ],
];