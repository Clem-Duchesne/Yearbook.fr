<?php
//************************************\\
// fichier app/Config/config.prog.php
//************************************\\

// Nom de la base de données
define( 'DB_NAME', 'mmiangouetuds' );
// Utilisateur de la base de données MySQL.
define( 'DB_USER', 'mmiangouetuds' );
// Mot de passe de la base de données MySQL.
define( 'DB_PASSWORD', 'VSPDCgAfbTr7' );
// Adresse de l'hébergement MySQL.
define( 'DB_HOST', 'mmiangouetuds.mysql.db' );
// Jeu de caractères à utiliser par la base de données lors de la création des tables.
define( 'DB_CHARSET', 'utf8' );
// préfixe des tables
define( 'TABLE_PREFIX', 'sbotte_mmi-event_' );

/* URL de l'application sans le nom du domaine
Par exemple, en local si votre URL est
  localhost/projet/sous-dossier/commande?id=2
alors la constante va contenir :
  /projet/sous-dossier
 */
?>