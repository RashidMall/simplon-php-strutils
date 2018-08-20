POO 101
---

Créez une classe StrUtils qui contiendra :

- une propriete privée `str` qui contiendra la chaine de caractères à manipuler et mise à jour dans le constructeur
- les méthodes publiques `bold`, `italic`, `underline`, `capitalize` qui effectueront les transformations éponymes
- une méthode `uglify` qui utilise les autres méthodes pour appliquer du gras, de l'italique et du souligné


Rappels:
---

- on crée une classe avec le mot clé `class` puis son nom
- les arguments passés à la classe sont executés par la méthode magique `__constructor`
- on instancie une classe ainsi `$instance = new maClasse('foo');`
- on ne peut pas modifier de l'extérieur une propriété `private` ou ` protected`
- on appele une méthode ainsi `$instance->nomMethod('on','passe','des','args');`

Exemple d'utilisation de votre classe
---

```
<?php

include 'StrUtils.php';

$myStr = new StrUtils('php is awesome !');
?>
<?= $myStr->bold() ?>
```
Résultat
```
<strong>php is awesome</strong>
```

