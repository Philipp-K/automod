<?php
/** 
*
* acp_mods [Deutsch — Sie]
*
* @package language
* @version $Id: mods.php 557 2011-03-18 20:22:44Z philippk $
* @copyright (c) 2008 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und http://www.phpbb.de/go/ubersetzerteam
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'Verfügbare Änderungen',

	'AM_MOD_ALREADY_INSTALLED'	=> 'AutoMOD hat festgestellt, dass die Modifikation bereits installiert wurde und kann daher nicht fortfahren.',
	'AM_MANUAL_INSTRUCTIONS'	=> 'AutoMOD bietet Ihnen eine komprimierte Datei zum Download an. Die aktuelle AutoMOD-Konfiguration erlaubt es nicht, dass Dateien automatisch auf Ihren Server geschrieben werden. Sie müssen die Dateien manuell extrahieren und per FTP oder einer anderen Methode auf Ihren Server laden. Wenn der Download der Datei nicht automatisch gestartet wurde, klicken Sie %shier%s.',

	'APPLY_THESE_CHANGES'	=> 'Diese Änderungen anwenden',
	'APPLY_TEMPLATESET'		=> 'für dieses Template',
	'AUTHOR_EMAIL'			=> 'E-Mail des Autors',
	'AUTHOR_INFORMATION'	=> 'Information zum Autor',
	'AUTHOR_NAME'			=> 'Name des Autors',
	'AUTHOR_NOTES'			=> 'Anmerkungen des Autors',
	'AUTHOR_URL'			=> 'Website des Autors',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'Die Version von AutoMOD, die Sie installieren wollen, wurde bereits installiert. Bitte löschen Sie das Verzeichnis „install/“.',
	'AUTOMOD_UNKNOWN_VERSION'	=>	'AutoMOD konnte nicht aktualisiert werden, da nicht ermittelt werden konnte, welche Version derzeit installiert ist. Die Version, die für Ihre Installation angegeben ist, ist %s.',
	'AUTOMOD_VERSION'		=> 'AutoMOD-Version',

	'CAT_INSTALL_AUTOMOD'	=> 'AutoMOD',
	'CHANGE_DATE'	=> 'Datum der Veröffentlichung',
	'CHANGE_VERSION'=> 'Versionsnummer',
	'CHANGES'		=> 'Änderungen',
	'CHECK_AGAIN'	=> 'Erneut prüfen',
	'COMMENT'		=> 'Kommentar',
	'CREATE_TABLE'	=> 'Datenbank-Änderungen',
	'CREATE_TABLE_EXPLAIN'	=> 'AutoMOD hat die Datenbank erfolgreich angepasst und die Berechtigungen der „Umfassender Administrator“-Rolle zugewiesen.',

	'DIR_PERMS'			=> 'Verzeichnis-Berechtigungen',
	'DIR_PERMS_EXPLAIN'	=> 'Auf manchen Systemen sind besondere Verzeichnisrechte (CHMODs) erforderlich, damit die Verzeichnisse richtig funktionieren. Normalerweise ist der Standardwert 0755 richtig. Diese Einstellung hat keine Auswirkung auf Windows-Systeme.',
	'DIY_INSTRUCTIONS'	=> 'Selbst durchzuführende Schritte',
	'DEPENDENCY_INSTRUCTIONS'	=>	'Die Modifikation, die Sie installieren wollen, ist von einer anderen abhängig. AutoMOD kann nicht ermitteln, ob diese Modifikation installiert wurde. Bitte stellen Sie sicher, dass Sie <strong><a href="%1$s">%2$s</a></strong> installiert haben, bevor Sie diese Modifikation installieren.',
	'DESCRIPTION'	=> 'Beschreibung',
	'DETAILS'		=> 'Details',
	'DELETE'			=> 'Löschen',
	'DELETE_CONFIRM'	=> 'Sind Sie sicher, dass Sie diese Modifikation löschen wollen?',
	'DELETE_ERROR'		=> 'Beim Löschen der ausgewählten Modifikation ist ein Fehler aufgetreten.',
	'DELETE_SUCCESS'	=> 'Die Modifikation wurde erfolgreich gelöscht.',

	'EDITED_ROOT_CREATE_FAIL'	=> 'AutoMOD war nicht in der Lage das Verzeichnis zu erstellen, in dem die geänderten Dateien gespeichert werden.',
	'ERROR'			=> 'Fehler',

	'GO_PHP_INSTALLER'  => 'Die Modifikation benötigt zum Abschluss der Installation eine externe Installationsroutine. Klicken Sie hier, um diese aufzurufen.',

	'FILE_EDITS'		=> 'Dateien ändern',
	'FILE_EMPTY'		=> 'Datei ist leer',
	'FILE_MISSING'		=> 'Datei konnte nicht gefunden werden',
	'FILE_PERMS'		=> 'Datei-Berechtigungen',
	'FILE_PERMS_EXPLAIN'=> 'Auf manchen Systemen sind besondere Dateirechte (CHMODs) erforderlich, damit die Dateien richtig funktionieren. Normalerweise ist der Standardwert 0644 richtig. Diese Einstellung hat keine Auswirkung auf Windows-Systeme.',
	'FILE_TYPE'			=> 'Dateityp des Archivs',
	'FILE_TYPE_EXPLAIN'	=> 'Diese Einstellung ist nur für die Schreibmethode „Download komprimiertes Archiv“ relevant',
	'FILESYSTEM_NOT_WRITABLE'	=> 'AutoMOD hat festgestellt, dass das Dateisystem nicht beschreibbar ist. Die direkte Schreibmethode kann daher nicht genutzt werden.',
	'FIND'				=> 'Suchen',
	'FIND_MISSING'		=> 'Der von der Modifikation festgelegte Suchtext konnte nicht gefunden werden',
	'FORCE_INSTALL'		=> 'Installation erzwingen',
	'FORCE_UNINSTALL'	=> 'Deinstallation erzwingen',
	'FORCE_CONFIRM'		=> 'Die Funktion „Installation erzwingen“ bedeutet, dass die Modifikation nicht vollständig installiert wurde. Um die Installation abschließen zu können, werden Sie einige manuelle Anpassungen an Ihrem Board vornehmen müssen. Fortfahren?',
	'FTP_INFORMATION'	=> 'FTP-Informationen',
	'FTP_NOT_USABLE'  => 'Die FTP-Funktion kann nicht genutzt werden, da sie von Ihrem Provider deaktiviert wurde.',
	'FTP_METHOD_ERROR' => 'Es wurde keine FTP-Konfiguration gefunden. Bitte prüfen Sie in der Konfiguration von AutoMOD, ob eine korrekte FTP-Konfiguration angegeben wurde.',
	'FTP_METHOD_EXPLAIN'=> 'Wenn Probleme mit der Standard-Methode „FTP“ auftreten, können Sie mit „Simple Socket“ eine alternative Verbindungsmethode ausprobieren.',
	'FTP_METHOD_FTP'	=> 'FTP',
	'FTP_METHOD_FSOCK'	=> 'Simple Socket',

	'INHERIT_NO_CHANGE'	=> 'Es wurden keine Änderungen an dieser Datei vorgenommen, da das Template %1$s auf %2$s basiert.',
	'INLINE_FIND_MISSING'=> 'Die von der Modifikation angegebenen Innerhalb-Suche war nicht erfolgreich.',
	'INLINE_EDIT_ERROR'	=> 'Fehler: Eine Innerhalb-Suche in der MODX-Installationsdatei enthält nicht alle erforderlichen Elemente',
	'INSTALL_AUTOMOD'	=> 'AutoMOD-Installation',
	'INSTALL_AUTOMOD_CONFIRM'	=> 'Sind Sie sicher, dass Sie AutoMOD installieren wollen?',
	'INSTALL_TIME'		=> 'Installationszeitount',
	'INSTALL_MOD'		=> 'Diese Modifikation installieren',
	'INSTALL_ERROR'		=> 'Eine oder mehrere Installationsaktionen sind gescheitert. Bitte prüfen Sie die unten aufgeführten Aktionen und nehme Sie die notwendigen Änderungen vor und versuchen Sie es anschließend erneut. Sie können mit der Aktion fortfahren, obwohl einige Aktionen gescheitert sind. <strong>Dies wird nicht empfolen, da das Board anschließend nicht mehr richtig funktionieren könnte.</strong>',
	'INSTALL_FORCED'	=> 'Sie haben die Installation dieser Modifikation erzwungen, obwohl Fehler bei ihrer Installation aufgetreten sind. Ihr Board könnte nicht mehr funktionstüchtig sein. Bitte prüfen Sie die Vorgänge, die gescheitert sind und korrigieren Sie sie.',
	'INSTALLED'			=> 'Modifikation installiert',
	'INSTALLED_EXPLAIN'	=> 'Die Modifikation wurde installiert. Hier können Sie die Ergebnisse der Installation sehen. Bitte notieren Sie aufgetretene Fehler und wenden Sie sich an <a href="http://www.phpbb.com">phpBB.com</a> oder <a href="http://www.phpbb.de/">phpBB.de</a>, um weitere Unterstützung zu erhalten.',
	'INSTALLED_MODS'	=> 'Installierte Modifikationen',
	'INSTALLATION_SUCCESSFUL'	=> 'AutoMOD wurde erfolgreich installiert. Sie können nun phpBB-Modifikationen im AutoMOD-Register des Administrations-Bereichs verwalten.',
	'INVALID_MOD_INSTRUCTION'	=> 'Diese Modifikation besitzt eine ungültige Anweisung oder eine Innerhalb-Anweisung scheiterte.',
	'INVALID_MOD_NO_FIND'       => 'Die Modifikation enthält keine Suche für die Aktion „%s“',
	'INVALID_MOD_NO_ACTION'     => 'Die Modifikation enthält keine Aktion für die Suche „%s“',

	'LANGUAGE_NAME'		=> 'Name der Sprache',

	'MANUAL_COPY'				=> 'Kopiervorgang nicht versucht',
	'MOD_CONFIG'				=> 'AutoMOD-Konfiguration',
	'MOD_CONFIG_UPDATED'        => 'Die AutoMOD-Konfiguration wurde aktualisiert.',
	'MOD_DETAILS'				=> 'Details der Modifikation',
	'MOD_DETAILS_EXPLAIN'		=> 'Hier können Sie alle vorliegenden Informationen der ausgewählten Modifikation einsehen.',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'Name der Modifikation',
	'MOD_OPEN_FILE_FAIL'		=> 'AutoMOD konnte %s nicht öffnen.',
	'MOD_UPLOAD'				=> 'Modifikation hochladen',
	'MOD_UPLOAD_EXPLAIN'		=> 'Hier können Sie eine komprimierte Datei hochladen, die die zur Installation notwendigen MODX-Dateien enthält. AutoMOD versucht dann, die Datei zu entpacken und sie zur Installation anzubieten.',
	'MOD_UPLOAD_INIT_FAIL'		=> 'Bei der Initialisierung des Hochladevorgangs ist ein Fehler aufgetreten.',
	'MOD_UPLOAD_SUCCESS'		=> 'Die Modifikation wurde hochgeladen und für die Installation vorbereitet.',
	'AUTOMOD_INSTALLATION'		=> 'AutoMOD-Installation',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'Willkommen bei der Installation von AutoMOD. Sie benötigen Ihre FTP-Zugangsdaten, sofern AutoMOD erkennt, dass dies der beste Weg zur Bearbeitung von Dateien ist. Sie finden die Ergebnisse der Prüfung unten.',

	'MODS_CONFIG_EXPLAIN'		=> 'Hier können Sie festlegen, wie AutoMOD Ihre Dateien anpasst. Die einfachste Methode ist „Download komprimiertes Archiv“. Die anderen Methoden erfordern zusätzliche Berechtigungen auf dem Server.',
	'MODS_COPY_FAILURE'			=> 'Die Datei %s konnte nicht an ihr Ziel kopiert werden. Bitte überprüfen Sie die Berechtigungen oder versuchen Sie eine alternative Schreibmethode.',
	'MODS_EXPLAIN'				=> 'Hier können Sie die auf Ihrem Board verfügbaren Modifikationen verwalten. AutoMOD erlaubt Ihnen, durch die phpBB-Community erstellte Modifikationen automatisch zu installieren. Weitere Informationen zu Modifikationen und zu AutoMOD finden Sie auf der <a href="http://www.phpbb.com/mods">phpBB-Website</a> oder <a href="http://www.phpbb.de/go/3/mods">dem deutschsprachigem Supportforum</a>. Um eine Modifikation dieser Liste hinzuzufügen, nutzen Sie das Formular am Ende dieser Seite. Alternativ können Sie die Modifikation auch entpacken und sie in das Verzeichnis /store/mods/ auf Ihrem Server hochladen.',
	'MODS_FTP_FAILURE'			=> 'AutoMOD konnte die Datei %s nicht per FTP an ihr Ziel kopieren',
	'MODS_FTP_CONNECT_FAILURE'	=> 'AutoMOD konnte keine Verbindung mit dem FTP-Server herstellen. Die Fehlermeldung war: %s',
	'MODS_MKDIR_FAILED'			=> 'Das Verzeichnis %s konnte nicht angelegt werden',
	'MODS_SETUP_INCOMPLETE'		=> 'Es wurde ein Problem mit Ihrer Konfiguration festgestellt, so dass AutoMOD nicht funktionieren kann. Dies sollte nur auftreten, wenn sich Einstellungen (z.&nbsp;B. der FTP-Benutzername) geändert haben. Das Problem kann auf der Konfigurationsseite von AutoMOD behoben werden.',

	'NAME'			=> 'Name',
	'NEW_FILES'		=> 'Neue Dateien',
	'NO_ATTEMPT'	=> 'Nicht versucht',
	'NO_INSTALLED_MODS'		=> 'Keine installierten Modifikationen gefunden',
	'NO_MOD'				=> 'Die ausgewählte Modifikation konnte nicht gefunden werden.',
	'NO_UNINSTALLED_MODS'	=> 'Keine nicht installierten Modifikationen gefunden',
	'NO_UPLOAD_FILE'		=> 'Es wurde keine Datei ausgewählt.',

	'ORIGINAL'	=> 'Original',

	'PATH'					=> 'Pfad',
	'PREVIEW_CHANGES'		=> 'Änderungsvorschau',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'Zeigt die durchzuführenden Änderungen an, bevor sie durchgeführt werden.',
	'PRE_INSTALL'			=> 'Installation vorbereiten',
	'PRE_INSTALL_EXPLAIN'	=> 'Hier können Sie vorab alle Änderungen einsehen, die die Modifikation an Ihrem Board vornehmen wird. <strong>WARNUNG!</strong> Sobald Sie die Änderungen akzeptiert haben, werden Ihre phpBB-Dateien geändert und ggf. Datenbank-Änderungen vorgenommen. Wenn die Installation nicht erfolgreich ist, wird Ihnen — sofern Sie noch auf AutoMOD zugreifen können — eine Option zur Wiederherstellung dieses Punktes gegeben.',
	'PRE_UNINSTALL'			=> 'Deinstallation vorbereiten',
	'PRE_UNINSTALL_EXPLAIN'	=> 'Hier können Sie vorab alle Änderungen einsehen, die zur Deinstallation der Modifikation an Ihrem Board vorgenommen werden. <strong>WARNUNG!</strong> Sobald Sie die Änderungen akzeptiert haben, werden Ihre phpBB-Dateien geändert und ggf. Datenbank-Änderungen vorgenommen. Außerdem kommen zur Deinstallation Methoden zur Anwendung, die kein hundertprozentiges Ergebnis erreichen können. Wenn die Deinstallation nicht erfolgreich ist, wird Ihnen — sofern Sie noch auf AutoMOD zugreifen können — eine Option zur Wiederherstellung dieses Punktes gegeben.',

	'REMOVING_FILES'	=> 'Zu löschende Dateien',
	'RETRY'				=> 'Erneut versuchen',
	'RETURN_MODS'		=> 'Zurück zu AutoMOD',
	'REVERSE'			=> 'Rückgängig',
	'ROOT_IS_READABLE'	=> 'Das phpBB-Hauptverzeichnis ist lesbar.',
	'ROOT_NOT_READABLE'	=> 'AutoMOD war nicht in der Lage, die index.php von phpBB zum Lesen zu öffnen. Dies bedeutet in der Regel, dass die Berechtigungen des phpBB-Hauptverzeichnisses zu restriktiv sind und AutoMOD nicht arbeiten kann. Bitte passen Sie die Berechtigungen an und führen Sie die Prüfung erneut durch.',


	'SOURCE'		=> 'Quelle',
	'SQL_QUERIES'	=> 'SQL-Abfragen',
	'STATUS'		=> 'Status',
	'STORE_IS_WRITABLE'			=> 'Das Verzeichnis store/ ist beschreibbar.',
	'STORE_NOT_WRITABLE_INST'	=> 'Die AutoMOD-Installation hat erkannt, dass das Verzeichnis store/ nicht beschreibbar ist. Dies ist aber erforderlich, damit AutoMOD erfolgreich arbeiten kann. Bitte passen Sie die Berechtigungen an und führen Sie die Prüfung erneut durch.',
	'STORE_NOT_WRITABLE'		=> 'Das Verzeichnis store/ ist nicht beschreibbar.',
	'STYLE_NAME'	=> 'Name des Styles',
	'SUCCESS'		=> 'Erfolgreich',

	'TARGET'		=> 'Ziel',

	'UNKNOWN_MOD_AUTHOR-NOTES'	=> 'Es wurden keine Anmerkungen angegeben.',
	'UNKNOWN_MOD_DESCRIPTION'	=> '',
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'=> '', // empty string hides this if not specified.
	'UNKNOWN_MOD_COMMENT'		=> '',
	'UNKNOWN_MOD_INLINE-COMMENT'=> '',
	'UNKNOWN_QUERY_REVERSE' => 'Unbekannte Rückgängig-Abfrage',

	'UNINSTALL'				=> 'Deinstallieren',
	'UNINSTALL_AUTOMOD'		=> 'AutoMOD deinstallieren',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'Sind Sie sicher, dass Sie AutoMOD deinstallieren wollen? Dies wird keine Modifikation entfernen, die durch AutoMOD installiert wurde.',
	'UNINSTALLED'			=> 'Modifikation deinstalliert',
	'UNINSTALLED_MODS'		=> 'Nicht installierte Modifikationen',
	'UNINSTALLED_EXPLAIN'	=> 'Die Modifikation wurde deinstalliert. Hier können Sie die Ergebnisse der Deinstallation sehen. Bitte notieren Sie aufgetretene Fehler und wenden Sie sich an <a href="http://www.phpbb.com">phpBB.com</a> oder <a href="http://www.phpbb.de/">phpBB.de</a>, um weitere Unterstützung zu erhalten.',
	'UNRECOGNISED_COMMAND'	=> 'Fehler: unbekannter Befehl %s',
	'UPDATE_AUTOMOD'		=> 'AutoMOD aktualisieren',
	'UPDATE_AUTOMOD_CONFIRM'=> 'Bitte bestätigen Sie, dass Sie AutoMOD aktualisieren möchten.',

	'UPLOAD'				=> 'Upload',
	'VERSION'				=> 'Version',

	'WRITE_DIRECT_FAIL'		=> 'AutoMOD konnte die Datein %s nicht an ihr Ziel kopieren. Bitte versuchen Sie eine andere Schreibmethode.',
	'WRITE_DIRECT_TOO_SHORT'=> 'AutoMOD konnte die Datei %s nicht vollständig schreiben. Dies kann oft mit einem erneuten Versuch gelöst werden. Sollte dies nicht funktionieren, so versuchen Sie bitte eine andere Schreibmethode.',
	'WRITE_MANUAL_FAIL'		=> 'AutoMOD konnte die Datei %s nicht einem Archiv hinzufügen. Bitte versuchen Sie eine andere Schreibmethode.',
	'WRITE_METHOD'			=> 'Schreibmethode',
	'WRITE_METHOD_DIRECT'	=> 'Direkt',
	'WRITE_METHOD_EXPLAIN'	=> 'Sie können eine bevorzugte Methode zum Ändern der Dateien festlegen. Die Methode „Download komprimiertes Archiv“ funktioniert in allen Fällen.',
	'WRITE_METHOD_FTP'		=> 'FTP',
	'WRITE_METHOD_MANUAL'	=> 'Download komprimiertes Archiv',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Danach hinzufügen',
	'before add'			=> 'Davor hinzufügen',
	'find'					=> 'Suchen',
	'in-line-after-add'		=> 'Innerhalb danach hinzufügen',
	'in-line-before-add'	=> 'Innerhalb davor hinzufügen',
	'in-line-edit'			=> 'Innerhalb suchen',
	'in-line-operation'		=> 'Innerhalb erhöhen',
	'in-line-replace'		=> 'Innerhalb ersetzen mit',
	'in-line-replace-with'	=> 'Innerhalb ersetzen mit',
	'replace'				=> 'Ersetzen mit',
	'replace with'			=> 'Ersetzen mit',
	'operation'				=> 'Erhöhen',
));

?>