# Projet Stame

Stame est un projet Laravel qui sert de plateforme pour la gestion de diverses données liées aux jeux. Ce fichier README vous guidera à travers le processus d'installation en utilisant Laravel Sail, un environnement de développement Docker pour Laravel.

## Prérequis

Avant de commencer, assurez-vous de remplir les conditions suivantes :

- Docker installé sur votre machine locale
- Git installé sur votre machine locale

## Installation avec Laravel Sail

Suivez ces étapes pour configurer et exécuter le projet Stame sur votre machine locale :

### Étape 1 : Cloner le dépôt

Clonez le dépôt Stame depuis GitHub sur votre machine locale en utilisant la commande suivante :

```bash
git clone https://github.com/matk92/Stame.git
cd Stame
```

### Étape 2 : Installer les dépendances Composer

Utilisez Docker pour installer les dépendances Composer sans nécessiter Composer sur votre machine locale :

```bash
docker run --rm     -u "$(id -u):$(id -g)"     -v "$(pwd):/var/www/html"     -w /var/www/html     laravelsail/php83-composer:latest     composer install --ignore-platform-reqs
```

### Étape 3 : Configurer le fichier d'environnement

Copiez le fichier d'environnement exemple et configurez-le :

```bash
cp .env.example .env
```

Modifiez le fichier `.env` pour définir votre mot de passe de base de données et d'autres variables d'environnement nécessaires.

### Étape 4 : Démarrer l'environnement de développement

Démarrez l'environnement de développement Laravel Sail :

```bash
./vendor/bin/sail up -d
```

### Étape 5 : Générer la clé de l'application

Générez la clé de l'application Laravel :

```bash
./vendor/bin/sail artisan key:generate
```

### Étape 6 : Installer les dépendances npm

Installez les dépendances npm :

```bash
./vendor/bin/sail npm install
```

### Étape 7 : Compiler les assets

Compilez les assets de l'application :

```bash
./vendor/bin/sail npm run dev
```

### Étape 8 : Exécuter les migrations

Exécutez les migrations de la base de données :

```bash
./vendor/bin/sail artisan migrate
```

### Étape 9 : Peupler la base de données

Peuplez la base de données avec des données initiales :

```bash
./vendor/bin/sail artisan db:seed
```

### Étape 10 : Créer un lien symbolique pour le stockage

Créez un lien symbolique de `public/storage` vers `storage/app/public` :

```bash
./vendor/bin/sail artisan storage:link
```

## Utilisation

Une fois l'installation terminée, vous pouvez accéder à l'application dans votre navigateur à l'adresse `http://localhost`.

Pour arrêter l'environnement de développement, exécutez :

```bash
./vendor/bin/sail down
```