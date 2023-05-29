<?php

// Categories DB

$categories = [
    'gatto' => new Category('Gatto', 'fa-solid fa-cat'),
    'cane' => new Category('Cane', 'fa-solid fa-dog'),
    'pesce' => new Category('Pesce', 'fa-solid fa-fish'),
    'uccello' => new Category('Uccello', 'fa-solid fa-bird')
];


$products = [
    new Food('Royal Canin Mini Adult', 43.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', $categories['cane'], "545g", ['prosciutto', 'riso']),

    new Food('Almo Mature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $categories['cane'], '600g', ['manzo', 'cereali']),

    new Food('Almo Nature Cat Daily Lattina', 34.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg?v=1761654209', $categories['gatto'], "400g", ['tonno', 'pollo', 'prosciutto']),

    new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714-1800-1800/tetra-guppy-mini-flakes.jpg', $categories['pesce'], '30g', ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']),

    new Accessories('Voliera Wilma in Legno', 184.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384-1800-1800/voliera-wilma1.jpg', $categories['uccello'], 'legno', 'M: L 83 x P 67 x H 153 cm'),

    new Accessories('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741-1800-1800/tetra-easycrystal-filterpack-250-300.jpg', $categories['pesce'], 'Materiale espanso', 'ND'),

    new Toy('Kong Classic', 13.49, 'https://arcaplanet.vtexassets.com/arquivos/ids/256590-1800-1800/kong-classic1.jpg', $categories['cane'], 'Galleggia e rimbalza', '8,5 cm x 10 cm'),

    new Toy('Topini di peluche Trixie', 4.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/223638-1800-1800/camon-gatto-gioco-topino-peluche-coda-corda.jpg', $categories['gatto'], 'Morbido con codino in corda', '8,5 cm x 10 cm')
];

