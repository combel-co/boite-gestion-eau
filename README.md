# O'PROTEC — Site vitrine

Site one-page statique pour spécialiste en géomembrane et étanchéité.

## Structure

```
├── index.html       # Site complet (HTML + CSS + JS intégrés)
├── envoyer.php      # Traitement du formulaire de contact (envoi email)
└── images/          # Photos du site
```

## Mise en ligne (OVH)

Uploader via FTP dans `www/` : `index.html`, `envoyer.php`, dossier `images/`.

## Personnalisation rapide

Ouvrir `index.html` et faire **Rechercher-Remplacer** (Ctrl+H) :

| Chercher | Remplacer par |
|---|---|
| `[NOM ENTREPRISE]` | Nom de l'entreprise |
| `[VILLE]`, `[ADRESSE]`, `[CODE POSTAL]` | Coordonnées |
| `05 00 00 00 00` | Numéro de téléphone |
| `contact@entreprise.fr` | Adresse email |
| `[ANNÉE]` | Année de création |

**Photos** — remplacer les fichiers dans `images/` en conservant les mêmes noms de fichiers.

## Formulaire de contact

Poste vers `envoyer.php` → envoie à `contact@oprotec.fr` via PHP `mail()`.
Fonctionne nativement sur hébergement mutualisé OVH.
