<?php

// les variables sont toujours précédées du symbol $
$myInt = 123;
$myFloat = 3.14;
$myBool = true;
$myStr = 'foo bar baz';

// en php, pas d'affectation destructurée
// a, b = 123, 42 // pas possible en php

// l'opérateur ++ permet d'incrémenter de 1
$i = 0;
$i++; // équivalent de `$i += 1;`
// l'opérateur -- permet de décrémenter de 1
$i = 0;
$i--; // équivalent de `$i -= 1;`

// pas d'interpolation avec les simples quotes
$myStr2 = '$myInt'; // $myInt

// il y a interpolation avec les doubles quotes
$myStr3 = "$myInt"; // 123

// interpolation avec les doubles quotes et les accolades
$myStr4 = "{$myInt}ème"; // 123ème

// le caractère d'échappement est le backslash
$myStr5 = "\$myInt"; // $myInt
$myStr6 = "{\$myInt}"; // {$myInt}
$myStr7 = "ligne 1\nligne 2\nligne 3"; // \n == saut de ligne

// concaténation
echo "foo"." bar"." baz"; // foo bar baz

// déclaration d'un contante
define('FOO', 123);
const BAR = 42;

// les constantes ne sont pas précédées du symbol $
echo FOO;
echo BAR;

// constantes booléennes
// true, false, TRUE, FALSE

// l'opérateur ET logique : &&
// l'opérateur OU logique : ||

if (true) {
    echo "C'est vrai";
}

if (true) {
    echo "C'est vrai";
} else {
    echo "C'est faux";
}

if (true) {
    echo "C'est vrai";
} elseif (true) {
    echo "C'est vrai";
} else {
    echo "C'est faux";
}

$i = 0;

while ($i < 3) {
    echo $i;
    $i++;

    // break;
    // continue;
}

for ($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}

// en php il n'y a qu'un seul type de données pour les list et les dict : le type array

// array
$my_list = [42, 123, 3.14, true, "lorem ipsum"];

// en python, on utilise len() pour connaître la taille d'une liste ou d'un dictionnaire
// en php, on utilise count()
for ($i = 0; $i < count($my_list); $i++) {
    echo $my_list[$i]."<br>";
}

// syntaxe python de la boucle foreach
// for value in my_list:
//     print(value)
foreach ($my_list as $value){
    echo $value."<br>";
}

// array
$my_dict = [
    'a' => 42,
    'b' => 123,
    'c' => 3.14,
    'd' => true,
    'e' => "lorem ipsum"
];

// syntaxe python de la boucle foreach
// for key, value in my_dict.items():
//     print(key, value)
foreach ($my_dict as $key => $value) {
    echo "$key $value<br>";
}

function foo()
{
    // fonction qui ne fait rien

    // en python on voit les variable déclarées à l'extérieur de la fonction
    // en php, les variable déclarées à l'extérieur de la fonction ne sont
    // pas visibles à l'intérieur
}

foo();

function bar($baz)
{
    return 123;
}

$result = bar(42);

function baz($lorem, $ipsum = 123)
{
    return $ipsum;
}

$result = baz(42);
$result = baz(42, 3.14);


// il y a la même notation pour :
// - la boucle for (for et endfor)
// - la boucle foreach (foreach et endforeach)

?>
<?php if (true): ?>
<p>
C'est vrai
</p>
<?php endif ?>

<?php
$i = 0;
?>
<ul>
<?php while ($i < 3): ?>
    <li><?= $i ?></li>
<?php endwhile ?>
</ul>
