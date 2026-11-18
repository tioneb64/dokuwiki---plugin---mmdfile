# Mmdfile : diagrammes Mermaid

Plugin DokuWiki (`mmdfile`).

Même vue et même éditeur que `mdfile`, pour les fichiers **`.mmd` et `.mermaid`** : le diagramme est dessiné (via Kroki) et la source reste modifiable.

## Utilisation

`?do=mmdfile&media=espace:schema.mmd` (ajouter `&edit=1` pour modifier). Déclarer les types MIME dans `conf/mime.local.conf` : `mmd text/plain`, `mermaid text/plain`.

## Configuration

`exts` : extensions gérées (défaut `mmd,mermaid`).

## Dépendances

`mdfile` et le plugin **Kroki**.

## Installation

Copier le contenu de ce dépôt dans `lib/plugins/mmdfile/` (le fichier `plugin.info.txt` doit se trouver à la racine de ce dossier), puis vider le cache en rendant la date de `conf/local.php` plus récente (`touch conf/local.php`).

Avec le gestionnaire d'extensions de DokuWiki : *Administration → Gestionnaire d'extensions → Installer*, en indiquant l'adresse du dépôt (archive ZIP).

## Licence

Aucune licence n'a encore été choisie : à ajouter (fichier `LICENSE`) avant de publier le dépôt. DokuWiki est sous GPL-2.0.
