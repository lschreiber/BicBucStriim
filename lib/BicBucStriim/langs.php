<?php
/** Language specific texts */

// German
$langde = array('admin' => 'Konfiguration',
	#***
	'admin_invalid_page_size' => 'Die eingestellte Seitengröße war ungültig. Sie muss zwischen 1 und 100 liegen.',
	#***
	'admin_pw1' => 'Admin Passwort',
	'admin_pw2' => 'Admin Passwort',
	'admin_pw_expl' => 'Optional: Tragen sie hier ein Passwort ein, um den Zugang zu den Admin-Einstellungen einzuschränken.',
	'admin_pw_required1' => 'Fehlendes Admin-Passwort',
	'admin_pw_required2' => 'Sie wollen das Admin-Passwort für den Downloadschutz verwenden, haben aber kein gültiges Passwort eingetragen. Bitte tragen Sie eines ein.',
	'admin_short' => 'Admin',
	'authors' => 'Autoren',
	'author_details' => 'Details Autor',
	'back' => 'Zurück',
	'booksby' => 'Bücher von',
	'booksbytag' => 'Bücher mit Schlagwort',
	'booksbyseries' => 'Bücher der Reihe',
	'book_details' => 'Buchdetails',
	'calibre_dir1' => 'Calibre Bibliotheksverzeichnis',
	'calibre_dir2' => 'Zum Beispiel: /volume1/books',
	'calibre_dir_expl' => 'Der Pfad zu ihrer Calibre-Bibliothek. Tragen sie hier den vollen Verzeichnisnamen ein.',
	'changes_saved' => 'Änderungen gespeichert',
	'check_access' => 'Freischalten',
	'check_access_info' => 'Diese Buch ist passwortgeschützt. Bitte freischalten, um es herunter zu laden.',
	'comment' => 'Beschreibung',
	'dl30' => 'Die letzten 30',
	'download' => 'Herunterladen',
	'error' => 'Fehler',
	'glob_dl_expl' => 'Wenn sie ihr Netz mit anderen Benutzern teilen, können sie hier den Passwort-Schutz fürs Herunterladen der Bücher aktivieren. Falls sie schon ein Admin-Passwort vergeben haben, kann das auch fürs Herunerladen genutzt werden. Oder sie erstellen einfach ein neues, separates Passwort.',
	'glob_dl_legend' => 'Herunterladen per Passwort schützen',
	'glob_dl_pw1' => 'Passwort fürs Herunterladen',
	'glob_dl_pw2' => 'Passwort fürs Herunterladen',	
	'glob_dl_radio1' => 'Nein, nicht nötig',	
	'glob_dl_radio2' => 'Ja, Admin-Passwort verwenden',
	'glob_dl_radio3' => 'Ja, anderes Passwort angeben (unten eingeben)',
	'home' => 'Start',
	'invalid_calibredir1' => 'Ungültiges Calibre-Verzeichnis',
	'invalid_calibredir2' => 'Auf das angegebene Calibre-Verzeichnis kann nicht zugegriffen werden. Ist es ein Calibre-Verzeichnis? Passen die Zugriffsrechte? Existiert das angegebene Verzeichnis?',
	'invalid_password' => 'Ungültiges Passwort',
	'invalid_password2' => 'Das eingegebene Passwort scheint ungültig zu sein. Bitte versuchen Sie es mit einem anderen.',
	'mdb_error' => 'Calibre Datenbank existiert nicht oder konnte nicht gelesen werden: ',
	'no_config' => 'config.php nicht gefunden oder fehlerhaft. Bitte kopieren Sie config.php.template nach config.php und nehmen Sie dort ihre Einstellungen vor.',
	'not_found1' => 'Nicht gefunden!',
	'not_found2' => 'Die angeforderte Ressource konnte nicht gefunden werden. Dies sollte eigentlich nicht passieren. Bitte prüfen Sie, ob ihre Calibre-Datenbank defekt ist.',
	#***
 	'opds_authors' => 'Autoren: ',
	'opds_books' => 'Bücher: ',
	'opds_series' => 'Reihen: ',
	'opds_tags' => 'Schlagwörter: ',
	'opds_root_title' => 'BicBucStriim Hauptkatalog',
	'opds_root_subtitle' => 'Der Führer zu ihrer Calibre-Bibliothek',
	'opds_by_author1' => 'Nach Autor',
	'opds_by_author2' => 'Alle Bücher nach Autoren geordnet',
	'opds_by_author3' => 'Autoren nach Initialen',
	'opds_by_author4' => 'Alle Autoren für ',
	'opds_by_author5' => 'Autorenliste',
	'opds_by_author6' => 'Alle Bücher von ',
	'opds_by_newest1' => 'Die letzten 30',
	'opds_by_newest2' => 'Die 30 neuesten Titel',
	'opds_by_series1' => 'Nach Buchreihe',
	'opds_by_series2' => 'Reihen und ihre Titel',
	'opds_by_series3' => 'Reihen nach Initialen',
	'opds_by_series4' => 'Alle Reihen für ',
	'opds_by_series5' => 'Reihenliste',
	'opds_by_series6' => 'Alle Bücher für Buchreihe ',
	'opds_by_title1' => 'Nach Titel',
	'opds_by_title2' => 'Alle Bücher nach Titel geordnet',
	'opds_by_tag1' => 'Nach Schlagwort',
	'opds_by_tag2' => 'Alle Bücher nach Schlagwort geordnet',
	'opds_by_tag3' => 'Schlagwörter nach Initialen',
	'opds_by_tag4' => 'Alle Schlagwörter für ',
	'opds_by_tag5' => 'Schlagwortliste',
	'opds_by_tag6' => 'Alle Bücher für Schlagwort ',
	'page_size' => 'Seitengröße',
	'page_size_expl' => 'Anzahl der Elemente in einer Liste. Erhöhen Sie den Wert, um mehr Titel, Autoren, ... pro Seite anzuzeigen. Standard ist 30, Maximum 100',
	#***
	'pagination_next' => 'vor',
	'pagination_page' => 'Seite',
	'pagination_prev' => 'zurück',
	'pagination_search' => 'Suche',
	'pagination_search_lbl' => 'Suchen',
	'pagination_search_ph' => 'Suchen ...',
	'presskey' => 'Taste drücken, um das Buch im betreffenden Format herunter zu laden.',
	'published' => 'Veröffentlicht',
	'save' => 'Speichern',
	'series' => 'Reihen',
	'series_details' => 'Details Reihe',
	'switch_yes' => 'Ja',
	'switch_no' => 'Nein',
	'tags' => 'Schlagwörter',
	'tag_details' => 'Details Schlagwort',
	'thumb_gen_clipped' => 'Vorschaubilder beschneiden?',
	'thumb_gen_clipped_expl' => 'Wenn eingeschaltet, werden die Ränder von Vorschaubilder abgeschnitten, um mehr Details zu liefern.',
	'titles' => 'Bücher',
	'unknown_error1' => 'Unbekannter Fehler',
	'unknown_error2' => 'Ein bisher unbekannter Fehler wurde gemeldet.',
	);

// English
$langen = array('admin' => 'Configuration',
	#***
	'admin_invalid_page_size' => 'The reqeuested page size is invalid. Please choose a value between 1 and 100.',
	#***
	'admin_pw1' => 'Admin Password',
	'admin_pw2' => 'Admin Password',
	'admin_pw_expl' => 'Optional: Enter a password to protect the admin page from changes by others.',
	'admin_pw_required1' => 'No Admin password set',
	'admin_pw_required2' => 'You are trying to use the admin password for download protection without a valid admin password. Please enter a valid admin password.',
	'admin_short' => 'Admin',
	'authors' => 'Authors',
	'author_details' => 'Author Details',
	'back' => 'Back',
	'booksby' => 'Books by',
	'booksbytag' => 'Books tagged with',
	'booksbyseries' => 'Books in series',
	'book_details' => 'Book Details',
	'calibre_dir1' => 'Calibre library path',
	'calibre_dir2' => 'Example: /volume1/books',
	'calibre_dir_expl' => 'The path to your Calibre library. Please enter the full path/directory name.',
	'changes_saved' => 'Changes saved',
	'check_access' => 'Submit Password',
	'check_access_info' => 'This book is protected. Please enter your password to enable the book download.',
	'comment' => 'Description',
	'dl30' => 'Most recent 30',
	'download' => 'Download',
	'error' => 'Error',
	'glob_dl_expl' => 'If you are sharing your network with others you could activate a password protection for book downloads. If you already have an admin password you can reuse that, or simply specify a new, separate one.',
	'glob_dl_legend' => 'Protect downloads with a password',
	'glob_dl_pw1' => 'Password for downloads',
	'glob_dl_pw2' => 'Download password',
	'glob_dl_radio1' => 'No, not necessary',
	'glob_dl_radio2' => 'Yes, use admin password',
	'glob_dl_radio3' => 'Yes, use a separate password (enter below)',
	'home' => 'Home',
	'invalid_calibredir1' => 'Invalid Calibre directory',
	'invalid_calibredir2' => 'The configured Calibre directory cannot be used. Is it really a Calibre directory? Is it readable? Does it exist?',
	'invalid_password' => 'Invalid Password',
	'invalid_password2' => 'This password is not valid. Please use a different one.',
	'mdb_error' => 'Calibre database not found or not readable: ',
	'no_config' => 'config.php not found or in bad shape. Please copy config.php.template to config.php and make your configuration changes there.',
	'not_found1' => 'Not found!',
	'not_found2' => 'The requested ressource is not available. This should not happen. Please check your Calibre library for defects.',
	#***
	'opds_authors' => 'Authors: ',
	'opds_books' => 'Books: ',
	'opds_series' => 'Series: ',
	'opds_tags' => 'Tags: ',
	'opds_root_title' => 'BicBucStriim Root Catalog',
	'opds_root_subtitle' => 'The root catalog to the contents of your Calibre library',
	'opds_by_author1' => 'By Author',
	'opds_by_author2' => 'All books sorted by author',
	'opds_by_author3' => 'Authors by their initials',
	'opds_by_author4' => 'All Authors for ',
	'opds_by_author5' => 'Authors list',
	'opds_by_author6' => 'All books by ',
	'opds_by_newest1' => 'By Newest',
	'opds_by_newest2' => 'The 30 most recent titles',
	'opds_by_series1' => 'By Series',
	'opds_by_series2' => 'Series and their titles',
	'opds_by_series3' => 'Series by their initials',
	'opds_by_series4' => 'All series for ',
	'opds_by_series5' => 'Series list',
	'opds_by_series6' => 'All books for series ',
	'opds_by_title1' => 'By Title',
	'opds_by_title2' => 'All books sorted by title',
	'opds_by_tag1' => 'By Tag',
	'opds_by_tag2' => 'All books sorted by tag',
	'opds_by_tag3' => 'Tags by their initials',
	'opds_by_tag4' => 'All tags for ',
	'opds_by_tag5' => 'Tags list',
	'opds_by_tag6' => 'All books for tag ',
	'page_size' => 'Page size',
	'page_size_expl' => 'Number of elements in a list. Increase to show more titles, authors ... per page. Default is 30, max is 100',
	#***
	'pagination_next' => 'next',
	'pagination_page' => 'Page',
	'pagination_prev' => 'previous',
	'pagination_search' => 'Search',
	'pagination_search_lbl' => 'Search',
	'pagination_search_ph' => 'Search ...',
	'presskey' => 'Press a button to download the book in the respective format.',
	'published' => 'Published',
	'save' => 'Save',
	'series' => 'Series',
	'series_details' => 'Series Details',
	'switch_yes' => 'Yes',
	'switch_no' => 'No',
	'tags' => 'Tags',
	'tag_details' => 'Tag Details',
	'thumb_gen_clipped' => 'Clip thumbnails?',
	'thumb_gen_clipped_expl' => 'If switched on, the edges of thumbnails will be clipped to show more details.',	
	'titles' => 'Books',
	'unknown_error1' => 'Unknown Error',
	'unknown_error2' => 'An unknown error occured.',
	);

// French
$langfr = array('admin' => 'Configuration',
	'admin_pw1' => 'Mot de passe Administrateur',
	'admin_pw2' => 'Mot de passe Administrateur',
	'admin_pw_expl' => 'Option: Introduisez une mot de passe administrateur pour contrôler l\'accès à la configuration',
	'admin_pw_required1' => 'Pas de mot de passe admin défini',
	'admin_pw_required2' => 'Vous essayez d\'utilizer le mot de passe admin pour télécharger des livres protégés par un mot de passe. Utilisez le bon mot de passe.',
	'admin_short' => 'Admin',
	'authors' => 'Auteurs',
	'author_details' => 'Détails auteurs',
	'back' => 'Retour',
	'booksby' => 'Livres par',
	'booksbytag' => 'Livres par tag',
	'booksbyseries' => 'Livres par série',
	'book_details' => 'Détails des livres',
	'calibre_dir1' => 'Chemin vers le répertoire Calibre',
	'calibre_dir2' => 'Exemple: /volume1/books',
	'calibre_dir_expl' => 'Le chemin vers votre répertoire où se trouve votre bibliothèque Calibre. Introduisez un nom complet chemin/nom_répertoire',
	'changes_saved' => 'Changements sauvegardés',
	'check_access' => 'Soumettre un mot de passe',
	'check_access_info' => 'Ce livre est protégé. Introduisez le mot de passe pour télécharger le livre.',
	'comment' => 'Description',
	'dl30' => 'Les 30 plus récents livres',
	'download' => 'Télécharger',
	'error' => 'Erreur',
	'glob_dl_expl' => 'Si vous votre réseau est ouvert au public, vous pouvez activer un mot de passe pour protéger le téléchargement de vos livres. Si vous avez déjà un mot de passe administrateur, vous pouvez le réutiliser ou en définir un nouveau, différent.',
	'glob_dl_legend' => 'Protéger les téléchargements avec un mot de passe',
	'glob_dl_pw1' => 'Mot de passe pour les téléchargements',
	'glob_dl_pw2' => 'Mot de passe téléchargement',
	'glob_dl_radio1' => 'Non, pas nécessaire',
	'glob_dl_radio2' => 'Oui, utilisez le mot de passe admin',
	'glob_dl_radio3' => 'Oui, utilisez un mot de passe différent (introduisez-le plus bas)',
	'home' => 'Acceuil',
	'invalid_calibredir1' => 'Répertoire vers la bibliothèque Calibre invalide',
	'invalid_calibredir2' => 'La base de données Calibre configurée ne peut pas être utilisée. Est-ce le bon répertoire ? LEs droits d\'accès sont-ils corrects ?  Existe-t-elle ? ',
	'invalid_password' => 'Mot de passe invalide',
	'invalid_password2' => 'Ce mot de passe n\'est pas valide. Veuillez réessayer.',
	'mdb_error' => 'Base de données Calibre database non trouvée ou illisible: ',
	'no_config' => 'config.php n\'a pas étré trouvé ou n\'est pas bien formaté. Veuillez copier le fichier config.php.template vers config.php et refaire votre propre configuration.',
	'not_found1' => 'Non trouvé !',
	'not_found2' => 'La resource demandée n\'est pas disponible. Cela ne devrait pas se produire... Vérifier votre base de donnée Calibre.',
	'pagination_next' => 'suiv.',
	'pagination_page' => 'Page',
	'pagination_prev' => 'préc.',
	'pagination_search' => 'Recherche',
	'pagination_search_lbl' => 'Recherche',
	'pagination_search_ph_author' => 'Recherche ...',
	'presskey' => 'Cliquez sur le bouton pour télécharger le livre dans le format correspondant.',
	'published' => 'Publié',
	'save' => 'Sauver',
	'series' => 'Séries',
	'series_details' => 'Details de la Série',
	'switch_yes' => 'Oui',
	'switch_no' => 'Non',
	'tags' => 'Tags',
	'tag_details' => 'Détails du Tag',
	'thumb_gen_clipped' => 'Découper les miniatures?',
	'thumb_gen_clipped_expl' => 'Si activé, les bords de vignettes sera ramenée à montrer plus de détails.',	
	'titles' => 'Livres',
	'unknown_error1' => 'Erreur inconnue',
	'unknown_error2' => 'Une erreur s\'est produite',
	);

// Dutch
$langnl = array('admin' => 'Configuratie',
	'admin_pw1' => 'Admin Wachtwoord',
	'admin_pw2' => 'Admin Wachtwoord',
	'admin_pw_expl' => 'Optioneel: Voer een wachtwoord in om de admin pagina te beschermen tegen wijzigingen door anderen',
	'admin_pw_required1' => 'Geen Admin Wachtwoord ingesteld',
	'admin_pw_required2' => 'U probeert gebruik te maken van het admin wachtwoord voor downloadbescherming, zonder een geldige admin wachtwoord. Vul een geldig admin wachtwoord in.',
	'admin_short' => 'Admin',
	'authors' => 'Auteurs',
	'author_details' => 'Auteur Details',
	'back' => 'Terug',
	'booksby' => 'Boeken door',
	'booksbytag' => 'Boeken gelabeld met',
	'booksbyseries' => 'Boeken in de serie',
	'book_details' => 'Boek Details',
	'calibre_dir1' => 'Calibre bibliotheekpad',
	'calibre_dir2' => 'Voorbeeld: /volume1/books',
	'calibre_dir_expl' => 'Het pad naar uw Calibre bibliotheek. Geef het volledige pad / directory naam.',
	'changes_saved' => 'Wijzigingen opgeslagen',
	'check_access' => 'Verzend wachtwoord',
	'check_access_info' => 'Dit boek is beschermd. Voer uw wachtwoord in om het mogelijk te maken dit boek te downloaden.',
	'comment' => 'Beschrijving',
	'dl30' => 'Meest recente 30',
	'download' => 'Download',
	'error' => 'Fout',
	'glob_dl_expl' => 'Wanneer u het netwerk met anderen deelt kunt u wachtwoordbescherming voor het downloaden van boeken activeren. Als u al een adminwachtwoord heeft u kunt u deze hergebruiken, of maak een apart wachtwoord aan voor downloads',
	'glob_dl_legend' => 'Downloads beveiligen met een wachtwoord',
	'glob_dl_pw1' => 'Wachtwoord voor downloads',
	'glob_dl_pw2' => 'Download wachtwoord',
	'glob_dl_radio1' => 'Nee, niet noodzakelijk',
	'glob_dl_radio2' => 'Ja, gebruik admin wachtwoord',
	'glob_dl_radio3' => 'Ja, gebruik een apart wachtwoord (vul hieronder in)',
	'home' => 'Home',
	'invalid_calibredir1' => 'Ongeldige Calibre map',
	'invalid_calibredir2' => 'TDe geconfigureerde Calibre directory kan niet worden gebruikt. Is het echt een Calibre directory? Is het leesbaar? Bestaat het?',
	'invalid_password' => 'Ongeldig wachtwoord',
	'invalid_password2' => 'Dit wachtwoord is niet geldig. Gebruik een andere.',
	'mdb_error' => 'Calibre database niet gevonden of is niet leesbaar:',
	'no_config' => 'config.php niet gevonden of in slechte vorm. Kopieer en Hernoem config.php.template naar config.php en maak daar uw wijzigingen in de configuratie.',
	'not_found1' => 'Niet gevonden!',
	'not_found2' => 'De gevraagde ressource is niet beschikbaar. Dit mag niet gebeuren. Controleer uw Calibre bibliotheek voor defecten.',
	'pagination_next' => 'volgende',
	'pagination_page' => 'Pagina',
	'pagination_prev' => 'vorige',
	'pagination_search' => 'Zoeken',
	'pagination_search_lbl' => 'Zoeken',
	'pagination_search_ph' => 'Zoeken ...',
	'presskey' => 'Druk op een knop om het boek in het opgegeven formaat te downloaden.',
	'published' => 'Gepubliceerd',
	'save' => 'Opslaan',
	'series' => 'Series',
	'series_details' => 'Serie Details',
	'switch_yes' => 'Ja',
	'switch_no' => 'Nee',
	'tags' => 'Labels',
	'tag_details' => 'Label Details',
	'thumb_gen_clipped' => 'Clip thumbnails?',
	'thumb_gen_clipped_expl' => 'Indien ingeschakeld, zullen de randen van de miniaturen worden geknipt om meer details te zien',
	'titles' => 'Boeken',
	'unknown_error1' => 'Onbekende Fout',
	'unknown_error2' => 'Er is een onbekende fout opgetreden.',
	);


?>
