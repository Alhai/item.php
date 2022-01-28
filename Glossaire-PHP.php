 <?php

echo " <h1>GLOSSAIRE PHP</h1>

<h2> ( . ) :</h2> <p> Concaténation pour combiner deux chaînes en une seule.</p>
<h2> ( $ ) :</h2> <p> Déclaration d'une variable.</p>
<h2> ( =& ) :</h2> <p> Nous pouvons créer un alias pour une variable, au lieu d'une simple copie, en utilisant l'opérateur d'affectation de référence .</p>
<h2> ( .= ) :</h2> <p> L'opérateur d'affectation de concaténation est une notation abrégée permettant de réaffecter une variable de chaîne à sa valeur actuelle ajoutée à une autre valeur de chaîne..</p>
<h2> array () :</h2> <p> Nous pouvons construire des tableaux ordonnés avec une fonction PHP intégrée.</p>
<h2> implode () :</h2> <p> Pour convertir des tableaux en chaînes.</p>
<h2> array_pop :</h2> <p> Supprime le dernier élément du tableau.</p> 
<h2> array_push :</h2> <p> Ajoute un élément à la fin d'un tableau.</p>
<h2>print_r () : </h2> <p> Affiche l'intérieur d'un tableau.</p>
<h2> array_shift :</h2> <p> Supprime le 1ier élement d'un tableau.</p>
<h2> array_unshift :</h2> <p> Ajoute un élément au d'un tableau.</p>
<h2> Sort () :</h2> <p> Trier un tableau dans l'ordre alphabétique.</p>
<h2> ( => ) :</h2> <p> Cette opérateur associe une clé à sa valeur </p> 
<h2> On accède à la valeur associée à une clé donnée :</h2> <p> en utilisant des crochets ( variable[ key ])</p>
<h2> Nous pouvons attribuer des valeurs aux clés en utilisant cette même syntaxe d'indexation et l'opérateur d'affectation :</h2> <p>  ( =) : variable[key] = value;.</p>
<h2> unset () : </h2> <p> Nous pouvons supprimer une paire clé => valeur entièrement en utilisant la unset()fonction PHP.</p>

<h2> while :</h2> <p> les boucles s'exécutent uniquement tant que leur condition est évaluée à TRUE.</p>
<h2> do while :</h2> <p> les boucles s'exécutent toujours au moins une fois, puis continuent de s'exécuter tant que leur condition est TRUE.</p>
<h2> for : </h2> <h3>les boucles contiennent 3 expressions et sont fréquemment utilisées pour exécuter un bloc de code un certain nombre de fois.</h3>
<p>La première expression est exécutée avant la première itération.</p>
<p>La deuxième expression est évaluée avant chaque itération. Si TRUE, le bloc de code s'exécute. Sinon, la boucle se termine.</p>
<p>La troisième expression est évaluée après chaque itération.</p>
<h2> foreach :</h2> <p> les boucles sont utilisées pour itérer sur les éléments d'un tableau. La clé et la valeur de chaque élément sont disponibles dans le bloc de code.</p>
<h2> break :</h2> <p> est utilisé pour terminer l'exécution d'une boucle plus tôt.</p>
<h2> continue :</h2> <p> est utilisé pour terminer l'exécution d'une itération de boucle plus tôt et continue jusqu'à l'itération suivante.</p>
"
?>