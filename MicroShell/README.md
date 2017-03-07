# MicroShell 

exit : 
Termine simplement le programme.

echo : 
Affiche les arguments sur la sortie standard, puis termine par un retour à la ligne.

pwd : 
Affiche le chemin courant.

cd : 
Permet de naviguer dans le système de fichier. L'utilisation de "cd" sans arguments retourne dans le répertoire home de l'utilisateur courant, et l'utilisation de "cd -" permet de revenir au répertoire précédent. En cas de questions, référez-vous au built-in "cd" de votre propre shell (shell utilisé: zsh. le comportement n'est pas le même sur bash ou tcsh, il faut respecter celui de zsh pour le "cd -").

ls : 
Affiche le contenu du répertoire spécifié en argument, ou du répertoire courant si aucun argument n'est fourni. Le contenu doit être affiché dans l'ordre alphabétique avec un élément par ligne.

cat : 
Affiche sur la sortie standard le contenu de chacun des fichiers indiqués. Contrairement à la vraie commande "cat", celle ci n'a pas à gérer l'entrée standard. Cette commande prend donc obligatoirement un ou plusieurs arguments.

env : 
Affiche toutes les variables d'environnement.

setenv : 
Change ou ajoute une variable d'environnement. Prend 2 arguments, le nom de la variable d'environnement, et la valeur de celle-ci.

unsetenv : 
Efface une variable d'environnement. Prend un argument, le nom de la variable à effacer. Si le nom de la variable est incorrect, rien n'est modifié. 
