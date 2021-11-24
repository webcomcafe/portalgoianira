<?php

return [
    'installer' => [
        'app_config_section' => "Configuration de l'application",
        'license_section' => 'Clé de licence',
        'dependencies_section' => 'Installation des dépendances',
        'locale_select_label' => 'Choisir la langue',
        'locale_select_error' => "Le code de langue :code n'est pas valide, veuillez réessayer",
        'app_url_label' => "URL de l'application",
        'backend_uri_label' => 'URI du backend',
        'backend_uri_comment' => "Pour sécuriser votre application, utilisez une adresse personnalisée pour accéder au panneau d'administration.",
        'license_key_label' => 'Clé de licence',
        'license_key_comment' => 'Entrez une clé de licence valide pour continuer.',
        'license_thanks_comment' => "Merci d'être client d'Octobre CMS!",
        'license_expired_comment' => "La licence n'est pas payée ou a expiré. Veuillez visiter octobercms.com pour obtenir une licence.",
        'too_many_failures_label' => 'Trop de tentatives échouées',
        'too_many_failures_comment' => 'Si vous voyez cette erreur immédiatement, utilisez plutôt ces commandes non interactives.',
        'install_failed_label' => "L'installation a échoué",
        'install_failed_comment' => "Veuillez essayer d'exécuter ces commandes manuellement.",
        'database_engine_label' => "Moteur de base de données",
        'database_host_label' => 'Hôte de la base de données',
        'database_host_comment' => "Nom d'hôte de la connexion à la base de données.",
        'database_port_label' => "Port de base de données",
        'database_port_comment' => '(Optionnel) Un port pour la connexion.',
        'database_name_label' => 'Nom de la base de données',
        'database_name_comment' => "Spécifiez le nom de la base de données à utiliser.",
        'database_login_label' => "Connexion à la base de données",
        'database_login_comment' => "Utilisateur avec des privilèges de création de base de données.",
        'database_pass_label' => "Mot de passe de la base de données",
        'database_pass_comment' => "Mot de passe de l'utilisateur spécifié.",
        'database_path_label' => "Chemin de la base de données",
        'database_path_comment' => "Pour le stockage basé sur des fichiers, entrez un chemin relatif au répertoire racine de l'application.",
        'migrate_database_comment' => "Veuillez migrer la base de données avec la commande suivante",
        'visit_backend_comment' => "Ensuite, ouvrez la zone d'administration à cette URL",
    ],
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Retourner à l’essentiel',
    ],
    'directory' => [
        'create_fail' => "Impossible de créer le répertoire : :name",
    ],
    'file' => [
        'create_fail' => "Impossible de créer le fichier : :name",
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'La clé de sécurité est invalide',
        ],
    ],
    'combiner' => [
        'not_found' => "Le fichier combiné ':name' est introuvable.",
    ],
    'system' => [
        'name' => 'Système',
        'menu_label' => 'Système',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Divers',
            'logs' => 'Journaux',
            'mail' => 'E-mail',
            'shop' => 'Boutique',
            'team' => 'Équipe',
            'users' => 'Utilisateurs',
            'system' => 'Système',
            'social' => 'Social',
            'events' => 'Évènements',
            'customers' => 'Clients',
            'my_settings' => 'Mes réglages',
        ]
    ],
    'theme' => [
        'label' => 'Thème',
        'unnamed' => 'Thème sans nom',
        'name' => [
            'label' => 'Nom du thème',
            'help' => 'Nommer le thème avec un nom de code unique. Par exemple, RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Installer des thèmes',
        'search' => 'Recherche des thème à installer…',
        'installed' => 'Thèmes installés',
        'no_themes' => 'Il n’y a aucun thème installé depuis le Marketplace.',
        'recommended' => 'Recommandé',
        'remove_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce thème ?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin sans nom',
        'name' => [
            'label' => 'Nom du plugin',
            'help' => 'Nommer le plugin avec un nom de code unique. Par exemple, RainLab.Blog',
        ],
    ],
    'plugins' => [
        'manage' => 'Gérer les plugins',
        'install' => 'Installer des plugins',
        'install_products' => 'Installer des produits',
        'search' => 'Recherche des plugins à installer…',
        'installed' => 'Plugins installés',
        'no_plugins' => 'Il n’y a aucun plugin installé depuis le site d’October CMS.',
        'recommended' => 'Recommandé',
        'plugin_label'  => 'Plugin',
        'unknown_plugin' => 'Le plugin a été supprimé du système de fichiers.',
        'select_label' => 'Sélectionner une action...',
        'bulk_actions_label' => 'Actions en bloc',
        'check_yes' => 'Oui',
        'check_no' => 'Non',
        'unfrozen' => 'Mises à jour activées',
        'enabled' => 'Plugin activé',
        'freeze' => 'désactiver les mises à jour pour',
        'unfreeze' => 'activer les mises à jour pour',
        'enable' => 'activer',
        'disable' => 'désactiver',
        'refresh' => 'remise à l’état initial',
        'remove' => 'Supprimer',
        'freeze_label' => 'Désactiver les mises à jour',
        'unfreeze_label' => 'Activer les mises à jour',
        'enable_label' => 'Activer les plugins',
        'disable_label' => 'Désactiver les plugins',
        'refresh_label' => 'Réinitialiser les données du plugin',
        'action_confirm' => 'Êtes-vous sûr de vouloir :action ces plugins ?',
        'freeze_success' => 'Mises à jour désactivées avec succès pour les plugins sélectionnés.',
        'unfreeze_success' => 'Mises à jour activées avec succès pour les plugins sélectionnés.',
        'enable_success' => "Les plugins ont été activés avec succès.",
        'disable_success' => "Les plugins ont été désactivés avec succès.",
        'refresh_confirm' => 'Êtes-vous sûr(e) ?',
        'refresh_success' => "Les plugins ont été actualisés avec succès.",
        'remove_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce plugin ?',
        'remove_success' => "Les plugins ont été supprimés avec succès.",
    ],
    'project' => [
        'name' => 'Projet',
        'owner_label' => 'Auteur',
        'attach' => 'Attacher un projet',
        'detach' => 'Détacher le Projet',
        'none' => 'Aucun',
        'id' => [
            'label' => 'ID du projet',
            'help' => 'Comment trouver l’ID de votre projet',
            'missing' => 'Spécifier un ID de projet.',
        ],
        'detach_confirm' => 'Confirmer le détachement de ce projet ?',
        'unbind_success' => 'Le projet a été détaché avec succès.',
    ],
    'settings' => [
        'menu_label' => 'Réglages',
        'not_found' => 'Les paramètres spécifiés sont introuvables.',
        'missing_model' => 'La page de réglages nécessite la définition d’un Model.',
        'update_success' => 'Les réglages pour :name ont étés mis à jour avec succès.',
        'return' => 'Retourner à la page des réglages du système',
        'search' => 'Rechercher'
    ],
    'mail' => [
        'log_file' => 'Fichier journal',
        'menu_label' => 'Configuration des adresses e-mails',
        'menu_description' => 'Gérer la configuration des adresses e-mails.',
        'general' => 'Général',
        'method' => 'Méthode d’envoi',
        'sender_name' => 'Nom de l’expéditeur',
        'sender_email' => 'Adresse e-mail de l’expéditeur',
        'php_mail' => 'Fonction mail de PHP',
        'smtp' => 'SMTP',
        'smtp_address' => 'Adresse SMTP',
        'smtp_authorization' => 'Authentification SMTP requise',
        'smtp_authorization_comment' => 'Cocher cette case si le serveur SMTP nécessite une authentification.',
        'smtp_username' => 'Identifiant',
        'smtp_password' => 'Mot de passe',
        'smtp_port' => 'Port SMTP',
        'smtp_ssl' => 'Connexion SSL requise',
        'smtp_encryption' => 'Protocole de sécurisation des échanges SMTP',
        'smtp_encryption_none' => 'Aucun cryptage',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Chemin vers Sendmail',
        'sendmail_path_comment' => 'Saisir le chemin du programme sendmail.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Domaine Mailgun',
        'mailgun_domain_comment' => 'Saisir le nom de domaine Mailgun.',
        'mailgun_secret' => 'Clé secrète Mailgun',
        'mailgun_secret_comment' => 'Saisir votre clé API Mailgun.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Clé secrète Mandrill',
        'mandrill_secret_comment' => 'Saisir votre clé API Mandrill.',
        'ses' => 'SES',
        'ses_key' => 'Clé SES',
        'ses_key_comment' => 'Saisir votre clé API SES',
        'ses_secret' => 'Clé secrète SES',
        'ses_secret_comment' => 'Saisir votre clé secrète de l’API SES',
        'sparkpost' => 'SparkPost',
        'sparkpost_secret' => 'Clé secrète SparkPost',
        'sparkpost_secret_comment' => 'Entrez votre clé secrète de l’API SparkPost',
        'ses_region' => 'Région SES',
        'ses_region_comment' => 'Saisir votre région SES (e.g. us-east-1)',
        'drivers_hint_header' => 'Les drivers ne sont pas installés',
        'drivers_hint_content' => 'Cette méthode d’envoi d’e-mails nécessite que le plugin ":plugin" soit installé avant de pouvoir envoyer des e-mails.'
    ],
    'mail_templates' => [
        'menu_label' => 'Modèles des e-mails',
        'menu_description' => 'Gérer les modèles et maquettes des e-mails envoyés aux utilisateurs et aux administrateurs.',
        'new_template' => 'Nouveau modèle',
        'new_layout' => 'Nouvelle maquette',
        'new_partial' => 'Nouveau modèle partiel',
        'template' => 'Modèle',
        'templates' => 'Modèles',
        'partial' => 'Modèle partiel',
        'partials' => 'Modèles partiels',
        'menu_layouts_label' => 'Maquettes des e-mails',
        'menu_partials_label' => 'Modèles partiels des courriels',
        'layout' => 'Maquette',
        'layouts' => 'Maquettes',
        'no_layout' => '-- Aucune maquette --',
        'name' => 'Nom',
        'name_comment' => 'Nom unique utilisé pour identifier ce modèle',
        'code' => 'Code',
        'code_comment' => 'Code unique utilisé pour identifier ce modèle',
        'subject' => 'Sujet',
        'subject_comment' => 'Sujet de l’e-mail',
        'description' => 'Description',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Texte brut',
        'test_send' => 'Envoyer un message de test',
        'test_success' => 'Le message de test a été envoyé avec succès.',
        'test_confirm' => 'Un message de test sera envoyé à :email. Continuer ?',
        'creating' => 'Création du modèle...',
        'creating_layout' => 'Création de la maquette...',
        'saving' => 'Sauvegarde du modèle en cours…',
        'saving_layout' => 'Enregistrement de la maquette...',
        'delete_confirm' => 'Supprimer ce modèle ?',
        'delete_layout_confirm' => 'Supprimer cette maquette ?',
        'deleting' => 'Suppression du modèle...',
        'deleting_layout' => 'Suppression de la maquette...',
        'sending' => 'Envoi du message de test en cours…',
        'return' => 'Retour à la liste des modèles.',
        'options' => 'Options',
        'disable_auto_inline_css' => 'Désactiver le CSS automatique en ligne'
    ],
    'mail_brand' => [
        'menu_label' => 'Personnalisation des courriels',
        'menu_description' => 'Modifier les couleurs et l’apparence des modèles de courriel.',
        'page_title' => 'Personnaliser l’apparence du courriel',
        'sample_template' => [
            'heading' => 'En-tête',
            'paragraph' => 'C’est un paragraphe rempli de Lorem Ipsum et un lien. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Article',
                'description' => 'Description',
                'price' => 'Prix',
                'centered' => 'Centré',
                'right_aligned' => 'Aligné à droite'
            ],
            'buttons' => [
                'primary' => 'Bouton principal',
                'positive' => 'Bouton positif',
                'negative' => 'Bouton négatif',
            ],
            'panel' => 'A quel point ce panneau est-il génial ?',
            'more' => 'Un peu plus de texte',
            'promotion' => 'Code de réduction: OCTOBER',
            'subcopy' => 'Ceci est le pré copyright de votre courriel',
            'thanks' => 'Merci'
        ],
        'fields' => [
            '_section_background' => 'Arrière-plan',
            'body_bg' => 'Arrière-plan du corps',
            'content_bg' => 'Arrière-plan du contenu',
            'content_inner_bg' => 'Arrière-plan du contenu intérieur',
            '_section_buttons' => 'Boutons',
            'button_text_color' => 'Couleur du texte des boutons',
            'button_primary_bg' => 'Arrière-plan du bouton principal',
            'button_positive_bg' => 'Arrière-plan du bouton positif',
            'button_negative_bg' => 'Arrière-plan du bouton négatif',
            '_section_type' => 'Typographie',
            'header_color' => 'Couleur de l’en-tête',
            'heading_color' => 'Couleur des titres',
            'text_color' => 'Couleur du texte',
            'link_color' => 'Couleur des liens',
            'footer_color' => 'Couleur du pied de page',
            '_section_borders' => 'Bordures',
            'body_border_color' => 'Couleur de la bordure du corps',
            'subcopy_border_color' => 'Couleur de la bordure du pré copyright',
            'table_border_color' => 'Couleur de la bordure de la table',
            '_section_components' => 'Composants',
            'panel_bg' => 'Arrière-plan du panneau',
            'promotion_bg' => 'Arrière-plan de la promotion',
            'promotion_border_color' => 'Couleur de la bordure de la promotion',
        ]
    ],
    'install' => [
        'project_label' => 'Attacher un projet',
        'plugin_label' => 'Installer un plugin',
        'theme_label' => 'Installer un thème',
        'missing_plugin_name' => 'Saisir le nom d’un plugin à installer.',
        'missing_theme_name' => 'Saisir le nom d’un thème à installer.',
        'install_completing' => 'Fin du processus d’installation',
        'install_success' => 'Le plugin a été installé avec succès.',
    ],
    'updates' => [
        'title' => 'Gérer les mises à jour',
        'name' => 'Mise à jour',
        'menu_label' => 'Mise à jour',
        'menu_description' => 'Mise à jour du système, gestion et installation des plugins et thèmes.',
        'return_link' => 'Retourner aux mises à jour du système',
        'check_label' => 'Vérifier les mises à jour',
        'retry_label' => 'Réessayer',
        'plugin_name' => 'Nom',
        'plugin_code' => 'Code',
        'plugin_description' => 'Description',
        'plugin_version' => 'Version',
        'plugin_author' => 'Auteur',
        'plugin_not_found' => 'Plugin non trouvé',
        'core_current_build' => 'Version actuelle',
        'core_view_changelog' => 'Voir le Changelog',
        'core_build' => 'Version :build',
        'core_build_help' => 'Une nouvelle version est disponible.',
        'core_downloading' => 'Téléchargement des fichiers de l’application',
        'core_extracting' => 'Décompression des fichiers de l’application',
        'core_set_build' => 'Définition du numéro de build',
        'changelog' => 'Changelog',
        'changelog_view_details' => 'Voir les détails',
        'plugins' => 'Plugins',
        'themes' => 'Thèmes',
        'disabled' => 'Désactivé',
        'plugin_downloading' => 'Téléchargement du plugin : :name',
        'plugin_extracting' => 'Décompression du plugin : :name',
        'plugin_version_none' => 'Nouveau plugin',
        'plugin_current_version' => 'Version actuelle',
        'theme_new_install' => 'Installation du nouveau thème.',
        'theme_downloading' => 'Téléchargement du thème : :name',
        'theme_extracting' => 'Décompression du thème : :name',
        'update_label' => 'Mettre à jour',
        'update_completing' => 'Finalisation du processus de mise à jour',
        'update_loading' => 'Chargement des mises à jour disponibles…',
        'update_success' => 'Mise à jour terminée avec succès.',
        'update_failed_label' => 'Échec de la mise à jour',
        'force_label' => 'Forcer la mise à jour',
        'found' => [
            'label' => 'Nouvelle mise à jour disponible !',
            'help' => 'Cliquer sur « Mettre à jour » pour démarrer le processus.',
        ],
        'none' => [
            'label' => 'Aucune mise à jour n’est disponible.',
            'help' => 'Aucune mise à jour plus récente n’a été trouvée.',
        ],
        'important_action' => [
            'empty' => 'Sélectionner l’action',
            'confirm' => 'Confirmer la mise à jour',
            'skip' => 'Ignorer ce plugin (cette fois uniquement)',
            'ignore' => 'Ignorer ce plugin (toujours)',
        ],
        'important_action_required' => 'Action requise',
        'important_view_guide' => 'Consulter le guide de mise à jour',
        'important_view_release_notes' => 'Voir les notes de version',
        'important_alert_text' => 'Des mise à jour requièrent votre attention.',
        'details_title' => 'Détails du plugin',
        'details_view_homepage' => 'Voir la page d’accueil',
        'details_readme' => 'Documentation',
        'details_readme_missing' => 'Aucune documentation fournie.',
        'details_changelog' => 'Journal des modifications',
        'details_changelog_missing' => 'Aucun journal des modifications disponible.',
        'details_upgrades' => 'Guide de mise à jour',
        'details_upgrades_missing' => 'Aucune instruction de mise à jour fournie.',
        'details_licence' => 'Licence',
        'details_licence_missing' => 'Aucune licence spécifiée.',
        'details_current_version' => 'Version actuelle',
        'details_author' => 'Auteur',
    ],
    'server' => [
        'connect_error' => 'Erreur lors de la connexion au serveur.',
        'response_not_found' => 'Le serveur de mise à jour n’a pas été trouvé.',
        'response_invalid' => 'Réponse invalide du serveur.',
        'response_empty' => 'Réponse vide du serveur',
        'file_error' => 'Erreur du serveur lors de la transmission du paquet.',
        'file_corrupt' => 'Le fichier provenant du serveur est corrompu.',
    ],
    'behavior' => [
        'missing_property' => 'La classe :class doit définir la propriété $:property utilisée par le behavior :behavior.',
    ],
    'config' => [
        'not_found' => 'Impossible de trouver le fichier de configuration :file défini dans :location.',
        'required' => "La configuration utilisée dans :location doit fournir une valeur ':property'.",
    ],
    'zip' => [
        'extract_failed' => "Impossible de décompresser le fichier ':file'.",
    ],
    'event_log' => [
        'hint' => 'Ce journal affiche une liste des erreurs potentielles de l’application, telles que les exceptions et les informations de débogage.',
        'menu_label' => 'Journal des évènements',
        'menu_description' => 'Affiche les évènements des journaux systèmes avec leur date et les détails.',
        'empty_link' => 'Purger le journal des évènements',
        'empty_loading' => 'Purge du journal des évènements…',
        'empty_success' => 'Le journal des évènements a été purgé avec succès.',
        'return_link' => 'Retour au journal des évènements',
        'id' => 'ID',
        'id_label' => 'ID de l’évènement',
        'created_at' => 'Date et heure',
        'message' => 'Message',
        'level' => 'Niveau',
        'preview_title' => 'Évènement',
    ],
    'request_log' => [
        'hint' => 'Ce journal affiche une liste de requêtes potentiellement suspectes. Par exemple, si un visiteur ouvre une page introuvable du CMS, une ligne avec le code statut 404 est alors créée.',
        'menu_label' => 'Journal des requêtes',
        'menu_description' => 'Affiche les requêtes erronées ou redirigées, comme les erreurs 404.',
        'empty_link' => 'Purger le journal des requêtes',
        'empty_loading' => 'Purge du journal des requêtes…',
        'empty_success' => 'Le journal des requêtes a été purgé avec succès.',
        'return_link' => 'Retour au journal des requêtes',
        'id' => 'ID',
        'id_label' => 'ID du journal',
        'count' => 'Compteur',
        'referer' => 'Référents',
        'url' => 'Adresse URL',
        'status_code' => 'Statut',
        'preview_title' => 'Requête'
    ],
    'permissions' => [
        'name' => 'Système',
        'manage_system_settings' => 'Gérer les paramètres du système',
        'manage_software_updates' => 'Gérer les mises à jour du logiciel',
        'access_logs' => 'Voir les journaux système',
        'manage_mail_templates' => 'Gérer les modèles des e-mails',
        'manage_mail_settings' => 'Gérer les paramètres des e-mail',
        'manage_other_administrators' => 'Gérer les autres administrateurs',
        'impersonate_users' => 'Usurper l’identité des utilisateurs',
        'manage_preferences' => 'Gérer les préférences de l’interface d’administration',
        'manage_editor' => 'Gérer les préférences de l’éditeur de code',
        'view_the_dashboard' => 'Voir le tableau de bord',
        'manage_default_dashboard' => 'Gérer le tableau de bord par défaut',
        'manage_branding' => 'Personnaliser l’interface d’administration'
    ],
    'log' => [
        'menu_label' => 'Paramètres du journal',
        'menu_description' => 'Spécifiez les zones qui doivent utiliser la journalisation.',
        'default_tab' => 'Enregistrement de données',
        'log_events' => 'Enregistrer les événements du système',
        'log_events_comment' => 'Stockez les événements système dans la base de données en plus du journal basé sur les fichiers.',
        'log_requests' => 'Enregistrer les requêtes erronées.',
        'log_requests_comment' => 'Requêtes du navigateur qui peuvent nécessiter une attention particulière, telles que les erreurs 404.',
        'log_theme' => 'Enregistrement des modifications sur le thème ',
        'log_theme_comment' => 'Lorsqu’une modification est apportée au thème à l’aide du back-end.',
    ],
    'media' => [
        'invalid_path' => "Le chemin du fichier indiqué est invalide : ':path'.",
        'folder_size_items' => 'Articles(s)',
    ],
    'pagination' => [
        'previous' => 'Précédente',
        'next' => 'Suivante',
    ],
];
