# first-symfony
June 15, 2023 - basic Symfony exercise

 # First Symfony
 Premier projet symfony web avec Twig et PDO

 ## How To Use
 1. Cloner le projet
 2. Faire un `composer install`
 3. Lancer le serveur avec le cli `symfony server:start`
 4. Accéder au projet sur http://localhost:8000
 ------------------------

    ** Premier exo twig syntaxe de base
1. Dans le FirstController, créer une nouvelle Route sur "/exo-twig", créer également un nouveau template exo-twig.html.twig et en faire un render
	
2. ans le render, ajouter une variable "names" à laquelle vous associerait un tableau de noms (par exemple ["Nom 1", "Nom 2", "Nom 3"]
	
3. Côté template twig, utiliser cette variable names pour faire une boucle et afficher chaque nom dans un paragraphe.
4. Rajouter un if dans le template pour faire en sorte d'afficher un message seulement si le tableau 
names contient plus de 3 noms

* Bonus: Afficher les names sous forme de ul>li et faire que les noms impair ait une background-color: gray (ça peut être fait en css pur en vrai, mais là pour l'exo je demande de le faire en twig)

 ------------------------
     ** Exo support de cours Symfony :
	
1. Créer une entité Course dans le dossier src/Entity avec ses propriétés et getters/setters
	
2. Récupérer le Database.php et le mettre dans le dossier Repository de ce projet
	
3. Faire un CourseRepository exactement comme on l'a déjà fait et pour le moment faire juste la méthode findAll et findById
	
4. Créer un nouveau contrôleur CourseController et dedans créer une route sur /courses, dans cette route, utiliser le CourseRepository pour récupérer la liste de tous les cours et l'exposer au template
	
5. Créer un template courses.html.twig et dedans faire une boucle pour afficher les cours avec bootstrap
	
6. Dans le même contrôleur créer une nouvelle route sur /course/{id} et utiliser l'id en paramètre pour faire un findById et exposer ça au template
	
7. Faire un fichier single-course.html.twig dans lequel on affichera le cour qui a été récupéré
	
8. Modifier le courses.html.twig pour rajouter le lien et faire que quand on click sur un cours ça nous emmène vers sa page

 ------------------------
    ** Formuaire d'ajout de cours


	
1. Dans le CourseRepository, rajouter la méthode persist exactement sur le même modèle de ce qu'on a déjà fait
	
2. Dans le CourseController, créer une nouvelle route sur "/add-course" avec un template qui contiendra un formulaire avec 3 input (pour le title, le content et le subject)
	
3. Côté contrôleur, utiliser l'objet Request comme dans l'example pour récupérer les valeurs et faire une instance de Course à laquelle on assignera un new \DateTime() comme valeur de published puis faire persister l'instance en question
	
4. Il faudra faire un petit if dans le contrôleur pour ne lancer le persist et tout que si on a bien des valeurs dans notre formulaire

<!-- Pour info, vous pouvez faire un $request->request->all() pour récupérer toutes les valeurs du formulaire sous forme de tableau associatif (dans mon exemple je pourrais faire $formData = $request->request->all(); et récupérer la valeur de mon input avec $formData['truc']  ) -->

 ------------------------
    ** Mise à jour d'un cours

1. Créer une nouvelle route sur "/update-course/{id}" qui va pour le moment faire exactement comme le "/course/{id}"
	
2. Dans le template de ce update-course, reprendre le formulaire du add, mais assigner dans les value de chaque input la valeur correspondante du course 
(par exemple : <input name="bloup" value="{{course.bloup}}">)
	
3. Modifier le template single-course pour y ajouter un lien qui pointera sur le update-course
	
4. Dans le repository, créer une méthode update pour notre course
	
5. Dans la méthode du update-course, rajouter un peu tout ce qu'on a fait dans le add-course pour le traitement du formulaire, mais cette fois au lieu de faire un new Course on fait des setTitle/setContent/setSubject sur le course récupéré par le findById et ensuite on fait un update dessus

 ------------------------
    ** La suppression d'un cours
	
1. Créer une méthode delete dans le repository (par son id, exactement comme on a déjà fait, juste le nom de la table qui change)
	
2. Créer une nouvelle route dans le CourseController sur /remove-course/{​​​​​​​​​​id}​​​​​​​​​​ qui va récupérer l'id, déclencher la méthode delete puis faire une redirection vers la route /course ensuite.
	
3. Dans le template du single-course, rajouter un nouveau lien vers /remove-course avec l'id du course en question
	
4. c'est tout (pour de vrai cette fois)


