<?php
/**

 *
 * phpBB Skeleton Extension. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com) & ABDev (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=202399)
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'CLI_DESCRIPTION_SKELETON_CREATE'	=> 'Créer un modèle de base d’extension',
	'PHPBB_SKELETON_EXT'				=> 'Modèle d’extension',
	'PHPBB_CREATE_SKELETON_EXT'			=> 'Créer un modèle d’extension',
	'PHPBB_SKELETON_EXT_DOCS'			=> '<a href="https://area51.phpbb.com/docs/dev/3.2.x/extensions/skeleton_extension.html" target="_blank">Consulter la documentation</a>',

	'EXTENSION_CLI_SKELETON_SUCCESS'	=> "<info>Extension créée avec succès.\nCopier l’extension depuis le répertoire `store/tmp-ext/` vers le répertoire `ext/`.</info>",
	'SKELETON_CLI_COMPOSER_QUESTIONS'	=> '<comment>Saisir les informations propres au fichier composer.json (taper la toucher d’entrée pour laisser une option vide)</comment>',
	'SKELETON_CLI_COMPONENT_QUESTIONS'	=> '<comment>Installer les composants optionnels. Par défaut : Non; saisir [y/n] (oui/non)</comment>',

	'SKELETON_RESERVED_NAME_WARNING_UI'	=> 'Avertissement : le nom saisi n’est pas autorisé.',

	'SKELETON_ADD_AUTHOR'						=> 'Ajouter un auteur',
	'SKELETON_QUESTION_VENDOR_NAME'				=> 'Merci de saisir le nom de l’éditeur de l’extension',
	'SKELETON_QUESTION_VENDOR_NAME_UI'			=> 'Nom de l’éditeur de l’extension',
	'SKELETON_QUESTION_VENDOR_NAME_EXPLAIN'		=> 'Permet de saisir le nom de l’éditeur de l’extension. Commencer par un lettre, suivie uniquement de lettres et de chiffres.',
	'SKELETON_QUESTION_EXTENSION_NAME'			=> 'Merci de saisir le nom de paquet (répertoire) de l’extension',
	'SKELETON_QUESTION_EXTENSION_NAME_UI'		=> 'Nom du paquet de l’extension',
	'SKELETON_QUESTION_EXTENSION_NAME_EXPLAIN'	=> 'Permet de saisir le nom du paquet de l’extension. Commencer par un lettre, suivie uniquement de lettres et de chiffres.',
	'SKELETON_QUESTION_EXTENSION_DISPLAY_NAME'	=> 'Merci de saisir le nom d’affichage (titre) de l’extension',
	'SKELETON_QUESTION_EXTENSION_DISPLAY_NAME_UI'		=> 'Titre de l’extension',
	'SKELETON_QUESTION_EXTENSION_DISPLAY_NAME_EXPLAIN'	=> 'Permet de saisir le nom d’affichage (titre) de l’extension.',
	'SKELETON_QUESTION_EXTENSION_DESCRIPTION'	=> 'Merci de saisir la description de l’extension',
	'SKELETON_QUESTION_EXTENSION_DESCRIPTION_UI'=> 'Description',
	'SKELETON_QUESTION_EXTENSION_VERSION'		=> 'Merci de saisir la version de l’extension',
	'SKELETON_QUESTION_EXTENSION_VERSION_UI'	=> 'Version',
	'SKELETON_QUESTION_EXTENSION_VERSION_EXPLAIN'	=> 'Permet de saisir la version de l’extension, tel que : 1.0.0-dev.',
	'SKELETON_QUESTION_EXTENSION_HOMEPAGE'		=> 'Merci de saisir l’adresse URL de la page officielle de l’extension',
	'SKELETON_QUESTION_EXTENSION_HOMEPAGE_UI'	=> 'Page officielle de l’extension',
	'SKELETON_QUESTION_EXTENSION_TIME'			=> 'Merci de saisir la date de création de l’extension',
	'SKELETON_QUESTION_EXTENSION_TIME_UI'		=> 'Date de l’extension',
	'SKELETON_QUESTION_EXTENSION_TIME_EXPLAIN'	=> 'Permet de saisir la date de création de l’extension au format : YYYY-MM-DD, par défaut : la date d’aujourd’hui.',

	'SKELETON_QUESTION_NUM_AUTHORS'				=> 'Combien d’auteurs participent au développement de l’extension',
	'SKELETON_QUESTION_NUM_AUTHORS_EXPLAIN'		=> 'Permet de saisir la valeur correspondant au nom de développeurs de cette extension, par défaut : 1.',

	'SKELETON_QUESTION_AUTHOR_NAME'			=> 'Merci de saisir le nom de l’auteur',
	'SKELETON_QUESTION_AUTHOR_NAME_UI'		=> 'Nom de l’auteur',
	'SKELETON_QUESTION_AUTHOR_NAME_EXPLAIN'	=> 'Permet de saisir le nom de l’auteur, ce champ ne peut demeurer vide.',
	'SKELETON_QUESTION_AUTHOR_EMAIL'		=> 'Merci de saisir l’adresse e-mail de l’auteur',
	'SKELETON_QUESTION_AUTHOR_EMAIL_UI'		=> 'Adresse e-mail de l’auteur',
	'SKELETON_QUESTION_AUTHOR_HOMEPAGE'		=> 'Merci de saisir l’adresse URL du site Web de l’auteur',
	'SKELETON_QUESTION_AUTHOR_HOMEPAGE_UI'	=> 'Site Web de l’auteur',
	'SKELETON_QUESTION_AUTHOR_ROLE'			=> 'Merci de saisir le rôle de l’auteur',
	'SKELETON_QUESTION_AUTHOR_ROLE_UI'		=> 'Rôle de l’auteur',

	'SKELETON_QUESTION_PHP_VERSION'					=> 'Merci de saisir les pré-requis du langage PHP liés à l’extension',
	'SKELETON_QUESTION_PHP_VERSION_UI'				=> 'Pré-requis PHP de l’extension',
	'SKELETON_QUESTION_PHP_VERSION_EXPLAIN'			=> 'Permet de saisir les pré-requis du langage PHP, par défaut : &gt;=5.4.',
	'SKELETON_QUESTION_PHPBB_VERSION_MIN'			=> 'Merci de saisir la version minimale de phpBB requise par l’extension',
	'SKELETON_QUESTION_PHPBB_VERSION_MIN_UI'		=> 'Version minimale de phpBB requise par l’extension',
	'SKELETON_QUESTION_PHPBB_VERSION_MIN_EXPLAIN'	=> 'Permet de saisir la version minimale de phpBB, par défaut : &gt;=3.2.0.',
	'SKELETON_QUESTION_PHPBB_VERSION_MAX'			=> 'Merci de saisir la  valeur maximal de phpBB requise par l’extension',
	'SKELETON_QUESTION_PHPBB_VERSION_MAX_UI'		=> 'Version maximale de phpBB requise par l’extension',
	'SKELETON_QUESTION_PHPBB_VERSION_MAX_EXPLAIN'	=> 'Permet de saisir la version maximale de phpBB, par défaut : &lt;3.3.0@dev',

	'SKELETON_QUESTION_COMPONENT_PHPLISTENER'		=> 'Confirmer la création de l’échantillon des récepteurs d’évènements PHP.',
	'SKELETON_QUESTION_COMPONENT_PHPLISTENER_UI'	=> 'Récepteurs d’évènements PHP',
	'SKELETON_QUESTION_COMPONENT_PHPLISTENER_EXPLAIN'	=> 'Permet de créer l’échantillon des récepteurs d’évènements PHP, ce dernier fonctionne en lien avec les évènement du cœur permettant d’injecter du code dans phpBB.',
	'SKELETON_QUESTION_COMPONENT_HTMLLISTENER'		=> 'Confirmer la création de l’échantillon des récepteurs de styles.',
	'SKELETON_QUESTION_COMPONENT_HTMLLISTENER_UI'	=> 'Récepteurs de styles',
	'SKELETON_QUESTION_COMPONENT_HTMLLISTENER_EXPLAIN'	=> 'Permet de créer les récepteur de styles utilisant les évènement du style permettant d’injecter du code HTML, JavaSscript et CSS dans les fichiers du style de phpBB.',
	'SKELETON_QUESTION_COMPONENT_ACP'				=> 'Confirmer la création de l’échantillon de module d’administration.',
	'SKELETON_QUESTION_COMPONENT_ACP_UI'			=> 'Panneau d’administration (PCA)',
	'SKELETON_QUESTION_COMPONENT_ACP_EXPLAIN'		=> 'Permet de créer un module d’administration exploitant les fonctionnalité liées à l’onglet « EXTENSIONS » du panneau d’administration.',
	'SKELETON_QUESTION_COMPONENT_MCP'				=> 'Confirmer la création d’un échantillon de module de modération.',
	'SKELETON_QUESTION_COMPONENT_MCP_UI'			=> 'Panneau de modération (PCM)',
	'SKELETON_QUESTION_COMPONENT_MCP_EXPLAIN'		=> 'Permet de créer un module de modération exploitant les fonctionnalités liées aux onglets du panneau de modération.',
	'SKELETON_QUESTION_COMPONENT_UCP'				=> 'Confirmer la création d’un échantillon de module utilisateur.',
	'SKELETON_QUESTION_COMPONENT_UCP_UI'			=> 'Panneau de l’utilisateur (PCU)',
	'SKELETON_QUESTION_COMPONENT_UCP_EXPLAIN'		=> 'Permet de créer un module utilisateur exploitant les fonctionnalités liés aux onglets du panneau utilisateur.',
	'SKELETON_QUESTION_COMPONENT_MIGRATION'			=> 'Confirmer la création d’un échantillon de mise à jour de la base de données.',
	'SKELETON_QUESTION_COMPONENT_MIGRATION_UI'		=> 'Mise à jour de la base de données',
	'SKELETON_QUESTION_COMPONENT_MIGRATION_EXPLAIN'	=> 'Permet de créer les fichiers nécessaires à l’application de modifications dans la base de données.',
	'SKELETON_QUESTION_COMPONENT_SERVICE'			=> 'Confirmer la création d’un échantillon de service.',
	'SKELETON_QUESTION_COMPONENT_SERVICE_UI'		=> 'Service',
	'SKELETON_QUESTION_COMPONENT_SERVICE_EXPLAIN'	=> 'Permet de créer un service exploitant les classes PHP. Ce sont les classes qui permettent d’accéder aux contrôleurs, récepteurs d’évènements PHP ou aux modules de contrôle des différents panneaux.',
	'SKELETON_QUESTION_COMPONENT_CONTROLLER'		=> 'Confirmer la création d’un échantillon de contrôleur',
	'SKELETON_QUESTION_COMPONENT_CONTROLLER_UI'		=> 'Contrôleur (pages utilisateur)',
	'SKELETON_QUESTION_COMPONENT_CONTROLLER_EXPLAIN'=> 'Permet de créer un contrôleur exploitant les fichiers/classes liées à l’interface utilisateur (partie visible). Les contrôleurs exécutent du code pour générer les pages visibles par les utilisateurs.',
	'SKELETON_QUESTION_COMPONENT_EXT'				=> 'Confirmer la création d’un échantillon ext.php.',
	'SKELETON_QUESTION_COMPONENT_EXT_UI'			=> 'Base extension (ext.php)',
	'SKELETON_QUESTION_COMPONENT_EXT_EXPLAIN'		=> 'Permet de créer un fichier optionnel ext.php exploitant les fonctionnalités permettant d’exécuter du code avant ou durant l’installation et la désinstallation de l’extension.',
	'SKELETON_QUESTION_COMPONENT_CONSOLE'			=> 'Confirmer la création d’un échantillon de commande en ligne.',
	'SKELETON_QUESTION_COMPONENT_CONSOLE_UI'		=> 'Commande en ligne',
	'SKELETON_QUESTION_COMPONENT_CONSOLE_EXPLAIN'	=> 'Permet de créer une interface de commande en ligne (CLI) pour exécuter des commandes dans la console, le terminal.',
	'SKELETON_QUESTION_COMPONENT_CRON'				=> 'Confirmer la création d’une tâche du cron.',
	'SKELETON_QUESTION_COMPONENT_CRON_UI'			=> 'Tâche du cron',
	'SKELETON_QUESTION_COMPONENT_CRON_EXPLAIN'		=> 'Permet de créer une tâche du cron capable de planifier l’exécution d’actions depuis l’extension.',
	'SKELETON_QUESTION_COMPONENT_NOTIFICATION'		=> 'Confirmer la création d’un échantillon de notification',
	'SKELETON_QUESTION_COMPONENT_NOTIFICATION_UI'	=> 'Notifications',
	'SKELETON_QUESTION_COMPONENT_NOTIFICATION_EXPLAIN'	=> 'Permet de créer des notifications pour avertir les utilisateurs à propos d’activités spécifiques liées à l’extension.',
	'SKELETON_QUESTION_COMPONENT_PERMISSIONS'		=> 'Confirmer la création d’exemple de permissions.',
	'SKELETON_QUESTION_COMPONENT_PERMISSIONS_UI'	=> 'Permissions',
	'SKELETON_QUESTION_COMPONENT_PERMISSIONS_EXPLAIN'	=> 'Permet d’attribuer des permissions pour accorder aux membres, groupes et modèles de permissions des fonctionnalités spécifiques pour l’extension.',
	'SKELETON_QUESTION_COMPONENT_TESTS'				=> 'Confirmer la création d’un échantillon de tests PHPUnit.',
	'SKELETON_QUESTION_COMPONENT_TESTS_UI'			=> 'Tests (PHPUnit)',
	'SKELETON_QUESTION_COMPONENT_TESTS_EXPLAIN'		=> 'Permet de créer des unités de tests permettant de procéder à des tests pour s’assurer que certaines portions du code source de l’extension fonctionnent correctement. Permet aussi de vérifier l’intégrité du code, de prévenir toute régressions durant le développement et le débogage d’une extension.',
	'SKELETON_QUESTION_COMPONENT_TRAVIS'			=> 'Confirmer la création d’un échantillon de test d’exécution pour Travis CI.',
	'SKELETON_QUESTION_COMPONENT_TRAVIS_UI'			=> 'Configuration Travis CI',
	'SKELETON_QUESTION_COMPONENT_TRAVIS_EXPLAIN'	=> 'Permet de créer des configuration de tests pour Travis CI, une plateforme d’exécution de tests PHPUnit en lien avec le service de dépôts de fichiers GitHub. Permet aussi de générer une configuration basique et les fichiers du script nécessaires pour amorcer les tests de l’extension phpBB lors de la soumission de chaque « commit » et « pull request ».',
	'SKELETON_QUESTION_COMPONENT_BUILD'				=> 'Confirmer la création d’un échantillon de script de construction pour phing.',
	'SKELETON_QUESTION_COMPONENT_BUILD_UI'			=> 'Script de construction (phing)',
	'SKELETON_QUESTION_COMPONENT_BUILD_EXPLAIN'		=> 'Permet de créer un échantillon de script de construction pour phing permettant de générer pour l’extension lequel peut être utilisé pour élaborer des paquets d’aide à la simplification de la publication ou du déploiement des processus.',

	'SKELETON_COMPONENT_GROUP_FRONT_END'			=> 'Développement web frontal « Front End » (HTML)',
	'SKELETON_COMPONENT_GROUP_BACK_END'				=> 'Développement web d’arrière-plan « Back End » (PHP)',
	'SKELETON_COMPONENT_GROUP_DATABASE'				=> 'Base de données',
	'SKELETON_COMPONENT_GROUP_CONTROL_PANELS'		=> 'Panneaux de contrôle',
	'SKELETON_COMPONENT_GROUP_OTHER'				=> 'Suppléments',
	'SKELETON_COMPONENT_GROUP_TEST_DEPLOY'			=> 'Tests et déploiement',

	'SKELETON_TITLE_EXTENSION_INFO'		=> 'Enveloppe de l’extension',
	'SKELETON_TITLE_AUTHOR_INFO'		=> 'Auteurs',
	'SKELETON_TITLE_REQUIREMENT_INFO'	=> 'Pré-requis',
	'SKELETON_TITLE_COMPONENT_INFO'		=> 'Composants',

	'SKELETON_INVALID_DISPLAY_NAME'		=> 'Le nom d’affichage saisi est incorrect',
	'SKELETON_INVALID_EXTENSION_TIME'	=> 'La date saisie est incorrecte',
	'SKELETON_INVALID_EXTENSION_VERSION'=> 'La version saisie est incorrecte',
	'SKELETON_INVALID_NUM_AUTHORS'		=> 'Le nombre d’auteurs saisi est incorrect',
	'SKELETON_INVALID_PACKAGE_NAME'		=> 'Le nom du paquet saisi est incorrect',
	'SKELETON_INVALID_VENDOR_NAME'		=> 'Le nom de l’éditeur saisi est incorrect',
));
