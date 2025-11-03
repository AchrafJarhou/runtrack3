<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Queries CSS</title>

    <!-- Style par défaut -->
    <link rel="stylesheet" href="style1.css">

    <!-- Entre 1680px et 1920px -->
    <link rel="stylesheet" media="screen and (min-width:1680px) and (max-width:1920px)" href="style2.css">

    <!-- Entre 1280px et 1680px -->
    <link rel="stylesheet" media="screen and (min-width:1280px) and (max-width:1680px)" href="style3.css">

    <!-- Inférieur à 1280px -->
    <link rel="stylesheet" media="screen and (max-width:1280px)" href="style4.css">

</head>
<body>
    <h1>Test des feuilles de styles selon la résolution</h1>
</body>
</html>
