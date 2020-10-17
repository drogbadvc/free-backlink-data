# Free Backlink profile Data
Dépôt pour partager une astuce de récupération sur la data de Backlink.
En pratique, le tool récupère le profile de liens d'un site.
Comprenant ; les ancres, backlinks, domaines et une petite liste de liens.

## Démo

[![Demo CountPages alpha](https://j.gifs.com/zvGBX8.gif)](https://www.youtube.com/watch?v=whkXau3sh78)

## Installation

```bash
git clone https://github.com/drogbadvc/free-backlink-data.git
composer install
```
## Configuration
```bash
nano .env
```
### Cookie
Par défaut, on est limité dans les informations possibles.
Il faut ajouter un cookie dans le fichier ***.env***

Pour se faire, il faut s'enregistrer sur le site. ***(voir index.php ou app.php)***
Et copier le cookie après se logger via l'inspecteur web du navigateur ([Chrome](https://developers.google.com/web/tools/chrome-devtools/network#details))
- Chrome : Voir dans Response Header et copier le cookie.

### Configurer le domaine 
Il faut ajouter un domaine dans le fichier ***.env***
```
DOMAIN="lemonde.fr"
```
## Notes
 - Normalement la technique est valable pendant 1 mois.
Il suffit de créer un autre compte chaque mois. (le site ne demande pas de confirmation de mail).
- Il est possible d'obtenir plus de Backlink, pour cela il faut modifier le fichier ***app.php***
Par défaut : 
```php
array(
            'sort' => 'lastCheck',
            'sortAsc' => true
        );
```

### Options 
#### sort
* `sort` => `lastCheck`
* `sort` => `firstSeen`
* `sort` => `noFollow`
* `sort` => `anchorUrl`
* `sort` => `url`
#### sortAsc
* `sortAsc` => `false`
* `sortAsc` => `true`