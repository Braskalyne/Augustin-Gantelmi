# Portfolio Augustin Gantelmi

Portfolio personnel présentant mes compétences et réalisations en développement web back-end.

🌐 **Site en ligne :** [https://augustin-gantelmi.fr](https://augustin-gantelmi.fr)

## 📋 Description

Site portfolio professionnel développé avec Symfony 7, présentant mes services de développement, mes projets réalisés et permettant aux visiteurs de me contacter via un formulaire sécurisé.

## 🛠️ Stack Technique

- **Backend:** PHP 8.4, Symfony 7
- **Frontend:** HTML5, CSS3, JavaScript Vanilla
- **Base de données:** Doctrine ORM, PostgreSQL
- **Templating:** Twig
- **Sécurité:** CSRF Protection, RGPD compliant
- **Hébergement:** Contabo VPS, Nginx, HTTPS (Let's Encrypt)

## ✨ Fonctionnalités

- ✅ Design responsive et moderne avec animations CSS
- ✅ Page d'accueil avec présentation des compétences et expériences
- ✅ Section "À propos" détaillée
- ✅ Portfolio de projets avec filtrage (projets phares)
- ✅ Formulaire de contact sécurisé avec validation
- ✅ Consentement RGPD obligatoire
- ✅ Pages légales complètes :
  - Mentions légales
  - Politique de confidentialité
  - Conditions générales d'utilisation
- ✅ Navigation fluide avec effets au scroll
- ✅ Protection CSRF sur tous les formulaires

## 🚀 Projets Présentés

### recherche-jobs.fr
Plateforme de centralisation d'offres d'emploi récupérant les annonces depuis plusieurs sites. Système de suivi type Trello pour gérer ses candidatures.

**Technologies:** PHP, Symfony, HTML, CSS, JavaScript

### 4fam
Site vitrine pour artiste muraliste avec back-office complet permettant la gestion autonome des galeries et œuvres.

**Technologies:** PHP, Symfony, HTML, CSS, JavaScript

## 📦 Installation

### Prérequis

- PHP 8.2 ou supérieur
- Composer
- MySQL/MariaDB
- Node.js (optionnel, pour les assets)

### Étapes d'installation

1. Cloner le repository
```bash
git clone https://github.com/Braskalyne/Augustin-Gantelmi.git
cd Augustin-Gantelmi
```

2. Installer les dépendances
```bash
composer install
```

3. Configurer l'environnement
```bash
cp .env .env.local
# Éditer .env.local avec vos paramètres (base de données, mailer, etc.)
```

4. Créer la base de données
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. Lancer le serveur de développement
```bash
symfony server:start
# ou
php -S localhost:8000 -t public/
```

6. Accéder au site
```
http://localhost:8000
```

## ⚙️ Configuration

### Mailer

Pour activer l'envoi des emails du formulaire de contact, configurez le `MAILER_DSN` dans votre fichier `.env.local` :

```env
MAILER_DSN=smtp://user:pass@smtp.example.com:587
```

Puis décommenter la ligne d'envoi dans `src/Controller/ContactController.php` :

```php
$mailer->send($email);
```

### Base de données

Configurez la connexion dans `.env.local` :

```env
DATABASE_URL="mysql://user:password@127.0.0.1:3306/portfolio?serverVersion=8.0"
```

## 📁 Structure du Projet

```
.
├── config/              # Configuration Symfony
├── public/              # Assets publics (CSS, JS, images)
│   ├── css/            # Feuilles de style
│   └── js/             # Scripts JavaScript
├── src/
│   ├── Controller/     # Contrôleurs
│   ├── Entity/         # Entités Doctrine
│   ├── Form/           # Formulaires Symfony
│   └── Repository/     # Repositories Doctrine
├── templates/          # Templates Twig
│   ├── base.html.twig
│   ├── contact/
│   ├── home/
│   ├── legal/
│   └── project/
└── vendor/             # Dépendances (non versionné)
```

## 🔒 Sécurité & Conformité

- ✅ Protection CSRF sur tous les formulaires
- ✅ Validation des données côté serveur
- ✅ Consentement RGPD explicite
- ✅ Politique de confidentialité détaillée
- ✅ Mentions légales conformes
- ✅ Pas de cookies de tracking

## 📝 License

Tous droits réservés © 2026 Augustin Gantelmi

## 📧 Contact

- **Email:** augustin.dille@yahoo.fr
- **Téléphone:** 06.35.37.94.68
- **LinkedIn:** [Augustin Gantelmi](https://linkedin.com/in/augustin-gantelmi)
- **GitHub:** [Braskalyne](https://github.com/braskalyne)
- **Localisation:** Lyon, France

## 🎯 Statut du Projet

🚧 **En développement actif** - Des améliorations et nouvelles fonctionnalités sont ajoutées régulièrement.

### Prochaines fonctionnalités prévues

- [ ] Blog technique
- [ ] Système de newsletter
- [ ] Espace administration pour gérer les projets
- [ ] Mode sombre/clair
- [ ] Version multilingue (FR/EN)
- [ ] API REST pour les projets

---

Développé avec ❤️ par Augustin Gantelmi
