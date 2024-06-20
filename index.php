<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $movies = [
        [
            'name' => 'Back to the Future',
            'releaseYear' => 1985,
        ],

        [
            'name' => "Weekend at Bernie's",
            'releaseYear' => 1989,
        ],

        [
            'name' => 'Pirates of the Caribbean',
            'releaseYear' => 2003,
        ],

        [
            'name' => 'Interstellar',
            'releaseYear' => 2014,
        ],
    ];

    function filter($array, $conditionFunction) {
        $filteredItem = [];
        foreach ($array as $item) {
            if($conditionFunction($item)) {
                $filteredItem[] = $item;
            }
        }

        return $filteredItem;
    }


    $filteredMovies = filter($movies, function($movie) {
        return $movie['releaseYear'] === 2003;
    });
?>

<ul>
    <?php foreach ($filteredMovies as $movie): ?>
        <li>
            <?= $movie['name'] ?>
        </li>
    <?php endforeach; ?>       
</ul>
</body>
</html>