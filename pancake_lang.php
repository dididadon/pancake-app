<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pancake
 *
 * A simple, fast, self-hosted invoicing application
 *
 * @package		Pancake
 * @author		Pancake Dev Team
 * @copyright	Copyright (c) 2010, Pancake Payments
 * @license		http://pancakeapp.com/license
 * @link		http://pancakeapp.com
 * @since		Version 1.0
 */

// ------------------------------------------------------------------------

$lang = array(

	/** Global Words **/
	'global:overview' => 'Übersicht',
 	'global:error' => 'Fehler',
	'global:pancakeby7am' => 'Pancake :1 by :2',
	'global:allrelatedmediacopyright' => 'Pancake and all related media is Copyright :1 :2',
	'global:insecure_action' => 'Unsicher Aktion versucht, jedoch abgefangen',
	'global:disabled_in_demo' => 'Some features on this page are disabled for the demo.',
	'global:estimates' => 'Kostenvoranschläge',
	'global:estimate' => 'Kostenvoranschlag',
	'global:projects' => 'Projekte',
	'global:project' => 'Projekt',
	'global:upload_failed' => 'Beim Hochladen der Datei gab es ein Problem. Bitte versuchen Sie es noch einmal. Sollte das Problem weiter bestehen, wenden Sie sich bitte support@pancakeapp.com.',
	'global:upload_not_allowed' => 'Der Dateityp, den Sie hochladen wollte, ist nicht erlaubt. Wenn Sie einen solchen Dateityp hochladen müssen, komprimieren Sie ihn zu einem .zip oder einem ähnlichen Archivierungsformat.',
	'global:copied' => 'Kopiert!',
	'global:sentbutunpaid' => 'Ausstehend (Verschickt aber nicht bezahlt)',
	'global:task' => 'Aufgabe',
	'global:clients' => 'Kunden',
	'global:users' => 'Benutzer',
	'global:send_to_client'	=>	'An den Kunden versendet',
	'global:couldnotsendemail' => 'Die Email konnte nicht verschickt werden, bitte überprüfen Sie die Einstellungen.',
	'global:emailsent' => 'Die Email wurde verschickt!',
	'global:yes' => 'Ja',
	'global:no' => 'Nein',
	'global:notyetsent' => 'Nicht an den Kunden senden',
	'global:dontshowagain' => "Nicht mehr anzeigen",
	'global:enable' => 'Aktivieren',
	'global:is_enabled' => 'Aktivieren?',
	'global:is_completed' => 'Vervollständigt?',
	'global:Y' => 'J',
	'global:N' => 'N',
	'global:notes' => 'Notizen',
	'global:description' => 'Beschreibung', 
	'global:backtoadmin' => 'Zurück zum Admin-Bereich',
	'global:type' => 'Typ',
	'global:name'		=>	'Name',
	'global:first_name'		=>	'Vorname',
	'global:last_name'		=>	'Nachname',
	'global:company'	=>	'Firma',
	'global:for'	=>	'für',
	'global:from'	=>	'von',
	'global:phone'		=>	'Telefon',
	'global:email'		=>	'Email',
	'global:contacts'	=>	'Kontakte',
	'global:week' => 'Wöchentlich',
	'global:quarterly' => 'Vierteljährlich',
	'global:month' => 'Monatlich',
	'global:year' => 'Jährlich',
	'global:fax'		=>	'Fax',
	'global:mobile'		=>	'Mobile',
	'global:address'	=>	'Adresse',
	'global:api_key' => 'API Key',
	'global:website'	=>	'Website',
	'global:action'		=>	'Aktivität',
	'global:items'		=>	'Posten',
	'global:reusableinvoiceitems' => 'Wiederverwendbare Rechnungsposten',
	'global:createinvoice' 	=> 'Neue Rechnung',
	'global:paid' 			=> 'Bezahlt',
	'global:unpaid'			=> 'Unbezahlt',
	'global:overdue'		=> 'überfällig',
	'global:time_entries' => 'Zeit Einträge',
	'global:invoices'		=> 'Rechnungen',
	'global:invoice'		=>	'Rechnung',
	'global:estimate' 		=> 'Voranschlag',
	'global:dashboard'		=> 'Dashboard',
	'global:settings'		=> 'Einstellungen',
	'global:changepassword' => 'Passwort ändern',
	'global:logout' 		=> 'Abmelden',
	'global:status' => 'Status',
	'global:client' => 'Kunde',
	'global:user' => 'Benutzer',
	'global:title' => 'Titel',
	'global:subtitle' => 'Untertitel',
	'global:to' => 'an',
	'global:subject' => 'Betreff',
	'global:thanks' => 'Danke!',
	'global:proposals' => 'Angebote',
	'global:proposal' => 'Angebot',
	'global:reports' => 'Berichte',
	'global:item' => 'Posten',
	'global:report' => 'Bericht',
	'global:saveandinsert' => 'Sichern und einfügen',
	'global:details'	=>	'Details',
	'global:license_key' => 'Lizenz Schlüssel',
	'global:version' => 'Version',
	'global:content' => 'Inhalt',
	'global:add'	=>	'Neu',
	'global:edit'	=>	'Bearbeiten',
	'global:resend'	=>	'Wiedersenden',
	'global:sent' => 'Gesendet',
	'global:not_sent' => 'Nicht gesendet',
	'global:view'	=>	'Ansehen',
	'global:delete'	=>	'Löschen',
	'global:remove'	=>	'Verschieben',
	'global:sort'	=>	'Sortieren',
	'global:deleteitem' => 'Posten löschen',
	'global:dragtoreorder' => 'Ziehen zum erneuten Ordnen',
	'global:start' => 'Start',
	'global:stop' => 'Stop',
	'global:created'	=>	'Erstellt',
	'global:updated'	=>	'Aktualisiert',
	'global:update'	=>	'Aktualisieren',
	'global:downloadpdf' => 'PDF herunterladen',
	'global:yesdelete' => 'Ja, löschen!',
	'global:confirm_emphisised'	=>	'Dies kann nicht rückgängig gemacht werden!',
	'global:color' => 'Farbe',
	'global:save' => 'Sichern',
	'global:unknown' => 'Unbekannt',
	'global:upload_ini_size' => 'Die von hoch geladene Datei übersteigt die Dateilimite Ihrer PHP Installation.',
	'global:upload_error' => 'Es gab ein Problem beim Hochladen dieser Datei. Bitte versuchen Sie es noch einmal.',
	'global:recurring' => 'Wiederkehrend',
	'global:unsent' => 'Nicht versendet',
	'global:converttoinvoice' => 'In Rechnung umwandeln',
	'global:viewpdf' => 'PDF ansehen',
	'global:duplicate' => 'Duplizieren',
	'global:urltosend'	=>	'Hier die zu versendende URL:',
	'global:copytoclipboard'	=>	'In die Zwischenablage kopieren',
	
	
	'global:optional_increment' => '<strong>Optional</strong> -erhöht sich automatisch',

	'login:ahoy' => 'Hallo!',
	'login:readytodothis' => 'Bereit?',
	'login:sup' => 'Sup?',
	'global:actions' => 'Aktivitäten',


	/** Greetings **/
	'global:greetings'	=>	array('Hallo!', 'Hallo,', 'Hey,', 'Hi,'),
	/** End Greetings **/

	/** Dashboard **/	
	'dashboard:collected'		=>	'Eingegange',
	'dashboard:outstanding'		=>	'Ausstehend',
	'dashboard:latest_activity'	=>	'Letzte Aktivitäten',
	'dashboard:upcoming_tasks' 	=> 	'Anstehende Aufgaben',
	/** End Dashboard **/


	/** Users **/

	// ==============================
	// = LOGIN PAGE COMPLETED - Lee =
	// ==============================
	'login:forgotinstructions'	=>	'Bitte geben Sie Ihre Email Adresse an, damit wir Ihnen eine Email zum Rücksetzen des Passwort zusenden können.',
	'login:reset'				=>	'rücksetzen &raquo;',
	'login:reset'				=>	'Passwort zurücksetzen',
	'login:username'			=>	'Benutzername',
	'login:password'			=>	'Passwort',
	'login:changepassword'		=>	'Passwort ändern',
	'login:email'				=>	'Email Adresse',
	'login:login'				=>	'Anmelden',
	'login:logout'				=>	'Abmelden',
	'login:remember'			=>	'Automatisch anmelden',
	'login:forgot'				=>	'Passwort vergessen?',
	'login:cancel'				=>	'&laquo; Abbrechen',
	/** End Users **/

	/** Clients **/
	'clients:title'		=>	'Alle Kunden',
	'clients:filter'	=>	'Kunden Filter',
	'clients:add'		=>	'hinzufügen',
	'clients:edit'		=>	'bearbeiten',
	'clients:noclienttitle' => 'Sie müssen ein paar Kunden angeben!',
	'clients:noclientbody'	=> 	'So, jetzt können Sie Rechnungen verschicken. Wollen Sie jetzt eine hinzufügen?',	
	'clients:hasnoinvoicetitle' =>	'Prima, dieser Kunde ist ferig eingerichtet!',
	'clients:hasnoinvoicebody'	=> 	'So, jetzt erstellen wir eine Rechnung! Jetzt eine hinzufügen?',
	'clients:added' => 'Der Kunde wurde hinzugefügt!',
	'clients:edited' => 'Die Kundendaten wurde aktualisiert!',
	'clients:deleted' => 'Der Kunde wurde gelöscht!',
	'clients:does_not_exist' => 'Dieser Kunde existiert nicht!',
	'clients:health_check'	=> 	'Health Check',	
	'clients:all' => 'All',
	'clients:delete_title'	=>	'Diesen Kunde löschen?!?!',
	'clients:delete_message'	=>	'Wollen Sie diesen Kunden löschen?<br />Dies löscht alles Rechnungen, Projekte, und Vorschläge für diesen Kunden.',
	'clients:clientaction'		=>	'&nbsp;',
	'clients:passphrase'		=> 'Pass Phrase',
	'clients:bad_passphrase'	=> 'Pass Phrase ist falsch.',
	/** End Clients **/
	
	
	/** Contact Log **/
	'contact:title'			=>	'Neuste Kontakt History',
	'contact:method'		=>	'Kontakt Methode',
	'contact:contact'		=>	'Kontakt',
	'contact:subject'		=>	'Betreff',
	'contact:content'		=>	'Inhalt',
	'contact:method'		=>	'Kontakt Methode',
	'contact:calling_title'	=>	'Kunden anrufen ":1"',
	// 'contact:view_all'		=>	'View All',
	/** End Contact Log **/

	/** Invoices **/
	'invoices:markassent' => 'Als Versendet markieren',
	'invoices:sentbutunpaid' => 'Rechnung, an den Kunden versendet aber immer noch nicht bezahlt',
	'invoices:duplicated' => 'Duplizierte Rechnung #:1. Die neue rechnungsnummer ist #:2.',
	'invoices:all'		=>	'Alle Rechnungn',
	'invoices:empty'	=>	'Noch keine Rechnungen.',
	'invoices:overdue'	=>	'Überfällige Rechnungen',
	'invoices:paid'		=>	'Bezahlte Rechnungen', 
	'invoices:recurringinvoices' => 'Wiederkehrende Rechnungen',
	'invoices:unsentinvoices' => 'Nicht versandte Rechnungen',
	'invoices:unpaid'	=>	'Unbezahlte Rechnungen',
	'invoices:thisinvoicewaspaidon' => 'Diese Rechnung wurde bezahlt am :1. Besten Dank!',
	'invoices:senton' => 'Versandt am :1',
	'invoices:paidon' => 'Bezahlt am :1',
	'invoices:paidonsingle'	=>	'Bezahlt am',
	'invoices:thisinvoiceisunpaid' => "Diese Rechnung wurde bis jetzt noch nicht beglichen.",
	'invoices:noinvoicetitle'	=>	'Sie haben im Moment keine Rechnungen!',
	'invoices:noinvoicebody'	=>	'Sie sollten jetzt eine Rechnung für einen Kunden erstellen! <br /> Kunden lieben Rechnungen!',
	'invoices:send_now_title' => 'Rechnung jetzt senden?',
	'invoices:send_now_body' => 'Bitte füllen Sie das untenstehnde Formular aus und wir liefren die Rechnung für Sie aus-',
	'invoices:newinvoice'	=>	'Rechnung erstellen',
	'invoices:send_now' => 'Rechnung versenden',
	'invoices:timequantity' => 'Zeit/Menge',
	'invoices:ratewithcurrency' => 'Ansatz (:1)',
	'invoices:taxable' 	=> 'Versteuerbar',
	'invoices:total' 	=> 'Total',
	'invoices:amount'	=>	'Betrag',
	'invoices:due'		=>	'Fällig',
	'invoices:subtotal' => 'Subtotal',
	'invoices:totaltax' => 'Total Steuern',
	'invoices:filestodownload' => 'Daten zum Herunterladen',
	'invoices:added' => 'Diese Rechnung wurde hinzugefügt!',
	'invoices:fileswillbeavailableafterpay' => 'Diese Datei stehen zur Verfügung, sobald die Rechnung bezahlt ist.',
	'invoices:no_payment_gateways_enabled' => 'Kein Zahlungsgateway wurde aufgeschaltet, dies macht es schwierig, bezahlt zu werden :-) - Bitte schallten sie einen ein in: <a href=":1">Einstellungen</a>',
	'invoices:invoicenumber' => 'Rechnungsnummer :1',
	'invoices:number' => 'Nr. ',
	'invoices:type'	=>	'Rechnungstyp',
	'invoices:is_recurring' => 'Wiederkehrend?',
	'invoices:is_paid' => 'Bezahlt?',
	'invoices:is_sent' => 'Verschickt?',
	'invoices:date_entered' => 'Erstellungsdatum',
	'invoices:delete_title'	=>	'Rechnung löschen?',
	'invoices:delete_message'	=>	'Wollen Sie diese Rechnung wirklich löschen?',
	'invoices:create' => 'Rechnung erstellen',
	'invoices:edit' => 'Rechnung bearbeiten',
	'invoices:amountrequired' => 'Das Feld &quot;Betrag&quot; ist zwingend.',
	'invoices:currencydoesnotexist' => 'Diese Währung existiert nicht.',
	'invoices:unique_id' => 'Einzigartige ID',
	'invoices:willreoccurin' => 'Diese Rechnung ist wiederkehrend am :1.',
	'invoices:willbesentautomatically' => 'Der Kunde wird am :1 mit Email über diese Rechnung informiert.',
	'invoices:thisisareoccurrence' => 'Diese Rechnung ist eine wiederkehrende Rechnung von Rechnungsnummer :1.',
	'invoices:clientlastnotifiedon' => 'Der Kunde wurde am :1 über diese REchnung informiert.',
	'invoices:simple' => 'Einfach',
	'invoices:simple_help' => 'Eine einfache Rechnung hat nicht mehrere Posten, sondern einfach ein Total.',
	'invoices:detailed' => 'Detailliert',
	'invoices:detailed_help' => 'Detaillierte Rechnungen haben mehrere Posten.',
	'invoices:estimate_help' => 'Voranschläge sind detaillierte Rechnungen, welche nicht verrechnet werden.',
	'invoices:unpaid_totalamount'	=>	'Nicht bezahlt / Totalbetrag',
	'invoices:saveinvoice' => 'Rechnung sichern',
	'invoices:deleted' => 'Die Rechnung wurde gelöscht!',
	'invoices:view' => 'Rechnung ansehen',
	'invoices:is_viewable'	=>	'In der Kundenzone anzeigen?',
	'invoices:no_invoices' => 'Es gibt keine Rechnungen',
	'invoices:addedsuccess'	=>	'Sie haben eine Rechnung hinzugefügt für',
	'invoices:invoice'	=>	'Rechnung',
	'invoices:addedconf'	=>	'Sie haben die Rechnung <strong>:1</strong>, mit dem Total <strong>:2</strong> hinzugefügt für :3:4.',
	'invoices:preview'	=>	'Rechnungs-Voransicht',
	'invoices:editinvoice'	=>	'Rechnung :1 bearbeiten',
	'invoices:messageupdated'	=>	'Die Rechnung wurde aktualisiert!',
	'invoices:resend'	=>	'Rechnung wieder versenden',
	/** End Invoices **/

	/** Estimates **/
	'estimates:attachedtoproposal' => 'Angehängt an Angebot Nr. :1',
	'estimates:duplicated' => 'Duplizierter Voranschlag Nr:1. Die neue Voranschlagsnummer ist Nr :2.',
	'estimates:alltitle'	=>	'Alle Voranschläge',
	'estimates:attachingtoproposal' =>     'Bitte warten, der Voranschlag wird an das Angebot angehängt...',
	'estimates:delete_title'	=>	'Diesen Voranschlag löschen??',
	'estimates:delete_message'	=>	'Wollen Sie diesen Voranschlag wirklich löschen?',
	'estimates:createnew'	=>	'Neuer Voranschlag',
	'estimates:converted' => 'Voranschlag Nr:1 in Rechnung umwandeln.',
	'estimates:noestimatetitle'	=>	'Sie keine Voranschläge',
	'estimates:noestimatesforthisclient'	=>	'Keine Voranschläge für diesen Kunden.',
	'estimates:deleted' => 'Der Voranschlag wurde gelöscht!',
	'estimates:noestimatebody'	=>	'Sie sollten sich dahinter machen. Wollen Sie jetzt einen Voranschlag erstellen?',
	'estimates:estimatenumber'	=>	'Voranschlag Nr.:1',
	'estimates:view' => 'Voranschlag ansehen',
	'estimates:no_estimates' => 'Es gibt keine Voranschläge.',
	'estimates:addedsuccess'	=>	'Sie haben einen Voranschlag erstellt für',
	'estimates:estimate'	=>	'voranschlagen',
	'estimates:added'	=>	'Der Voranschlag wurde hinzugefügt.',
	'estimates:addedconf'	=>	'Sie haben Voranschlag Nr. <strong>:1</strong>, von Total <strong>:2</strong> hinzugefügt für :3:4.',
	'estimates:send_now_title' => 'Send estimate now?',
	'estimates:send_now_body' => 'F¨llen das untenstehnde Formular aus und der Voranschlage wird für Sie versendet.',
	'estimates:send_now'	=>	'Voranschlag senden',
	'estimates:edit'	=>	'Voranschlag bearbeiten',
	'estimates:preview'	=>	'Ansicht Voranschlag',
	'estimates:editestimate'	=>	'Voranschlag Nr.:1 bearbeiten',
	'estimates:messageupdated'	=>	'Der Voranschlag wurde aktualisiert!',
	'estimates:resend'	=>	'Voranschlag wieder senden',
	/** End Estimates **/

	/** Projects **/
	'projects:navigationitem' => 'Projekte',
	'projects:alltitle' =>	'Alle Projekte',
	'projects:noprojecttitle' => 'Noch keine Projekte im Moment!',
	'projects:noprojecttext' => 'Möchten Sie jetzt eines hinzufügen? ',
	'projects:add'	=> 'Projekt erstellen',
	'projects:doesnotexist' => 'Das Projekt existiert nicht.',
	'projects:edit'	=> 'Projekt bearbeiten',
	'projects:delete'	=> 'Projekt löschen',	
	'projects:project' => 'Projekt',
	'projects:due_date' => 'Fälligkeitsdatum',
	'projects:is_completed' => 'Fertig gestellt',
	'projects:areyousuredeletetask' => 'Möchten Sie diese Aufgabe wirklich löschen?',
	'projects:add_time' => 'Neue Zeit',
	'projects:generate_invoice' => 'Rechnung erstellen',
	'projects:no_projects' => 'Keine Projekte.',
	/** End Projects **/


	/** Milestones **/
	'milestones:add'	=> 'Neuer Meilenstein',
	'milestones:edit'	=> 'Meilenstein bearbeiten',
	'milestones:delete'	=> 'Meilenstein löschen',	
	'milestones:milestone' => 'Meilenstein',
	'milestones:target_date' => 'Zieldatum',
	'milestones:assigned_user' => 'Zugewiesener Benutzer',
	'milestones:select_default' => '-- kein Meilenstein --',
	'milestones:no_milestone' => 'Aufgabe ohne Meilenstein',
	'milestones:add_success' => 'Meilenstein ":1" hinzugefügt!',
	'milestones:add_failed' => 'Meilenstein ":1" konnte nicht hinzugefügt werden.',
	'milestones:are_you_sure_delete' => 'Sind Sie sich, dass Sie diesen Meilenstein löschen wollen?',
	'milestones:delete_success' => 'Meilenstein ":1" gelöscht!',
	'milestones:does_not_exist' => 'Dieser Meilenstein existiert nicht.',
	'milestones:target_date'	=>	'Zieldatum',
	/** End Milestones **/

	/** Proposals **/
	'proposal:outline'	=>	'Übersicht Voranschlag',


	/** End Proposals **/

	/** Reports **/
	'reports:perclient' => 'pro Kunde',
	'reports:datefrom' => 'Von',
	'reports:allclients' => 'Alle Kunden',
	'reports:dateto' => 'An',
	'reports:byclient' => 'Kunde',

	'reports:view' => 'Bericht ansehen',
	'reports:show_all' => 'Berichte anzeigen',
	'reports:nodata' => 'No :1.',
	/** End Reports **/

	/** Currencies **/
	'currencies:default' => '[Standard] :1',
	'currencies:cad' => 'Canadian Dollar',
	'currencies:eur' => 'Euro',
	'currencies:chf' => 'Sfr ',
	'currencies:usd' => 'U.S. Dollar',
	'currencies:gbp' => 'Pound Sterling',
	'currencies:hkd' => 'Hong Kong Dollar',
	'currencies:php' => 'Philippine Peso',
	'currencies:zar' => 'South Africa, Rand',
	/** End Currencies **/

	/** Proposals **/
	'proposals:duplicated' => 'Dupliziertes Angebot :1. Die neue Angebotsnummer lautet :2.',
	'proposals:usesectiontemplate' => 'Diese Abschnitts-Vorlage benutzen',
	'proposals:showcontents' => 'Inhalte anzeigen',
	'proposals:hidecontents' => 'Inhalte verstecken',
	'proposals:deletepremadesection' => 'Vorlage löschen',
	'proposals:nopremadesections' => 'Keine gesicherten Abschnitts-Vorlagen.',
	'proposals:newproposal' => 'Neues Angebot',
	'proposals:estimatexfory' => 'Voranschlag Nr. :1 - :2',
	'proposals:number' => 'Angebot Nr. ',
	'proposals:all' => 'Alle Angebote',
	'proposals:noproposaltitle' => "Keine Angebote vorhanden!",
	'proposals:noproposalbody' => "Sie sollten unbedingt ein Angebeot erstellen.",
	'proposals:rejected' => 'Zurückgewiesen am :1',
	'proposals:accepted' => 'Angenommen am :1',
	'proposals:lastviewed' => 'Zuletzt vom Kunden gesehen am :1, um :2',
	'proposals:neverviewed' => 'vom Kunden nicht gesehen',
	'proposals:noanswer' => 'Keine Antwort',
	'proposals:createproposal' => 'Angebot erstellen',
	'proposals:editproposal' => 'Angebot bearbeiten',
	'proposals:createdsuccessfully' => 'Angebot erstellt!',
	'proposals:sections' => 'Abschnitte',
	'proposals:section' => 'Abschnitt',
	'proposals:createsection' => 'Neuer Abschnitt',
	'proposals:createpage' => 'Neu Seite',
	'proposals:emptysection' => '(kein Titel)',
	'proposals:emptycontents' => '(keine Inhalte)',
	'proposals:emptysubtitle' => '(keine Untertitel)',
	'proposals:for' => 'Angebot für: ',
	'proposals:pagexofcount' => 'Seite :1 von :2',
	'proposals:saving' => 'Sichern...',
	'proposals:save' => 'Angebot sichern',
	'proposals:savepremade' => 'Als Abschnitts-Vorlage sichern',
	'proposals:addestimate' => 'Angebot hinzufügen',
	'proposals:saved' => 'Gesichert!',
	'proposals:createandedit' => 'Weiter: Angebots Inhalt bearbeiten',
	'proposals:delete_message' => 'Wollen Sie dieses Angebot wirklich löschen?',
	'proposals:createpremadesection' => 'Neu von der Abschnitts-Vorlage',
	'proposals:selected_attachments' => 'Angebot auswählen',
	'proposals:attach_selected_estimate' => 'Angewählter Voranschlag anhängen',
	'proposals:proposal' => 'Angebot',
	'proposals:status' => 'Status',
	'proposals:view' => 'Angebot ansehen',
	'proposals:estimate' => 'Voranschlag',
	'proposals:na' => 'keine Antwort',
	'proposals:no_proposals' => 'Keine Angebote vorhanden.',
	'proposals:kitchennotice' => 'Anmerkung: Angebote erscheinen erst in :1, wenn der Kunde den Angebots-Link gesehen hat. Sie können das Anegebot solange bearbeiten, ohne dass der Kunde dies sieht, und bestimmen, wenn und wann er sehen soll.',
	/** End Proposals **/

	/** Tasks **/
	'tasks:task' => 'Aufgabe',
	'tasks:edit_succeeded' => 'Aufgabe erfolgreich bearbeitet.',
	'tasks:hours' => 'Stunden',
	'tasks:due_date' => 'Fälligkeits Datum',
	'tasks:is_completed' => 'Fertig?',
	'tasks:timer' => 'Timer',
	'tasks:hours' => 'Stunden',
	'tasks:rate' => 'Ansatz',
	'tasks:default_rate' => 'Standard-Ansatz',
	'tasks:view_entries' => 'Einträge ansehen',
	'tasks:create' => "Neue Aufgabe",
	'tasks:edit' => "Aufgabe bearbeiten",
	'tasks:create_succeeded' => "Die Aufgabe wurde erstellt!",
	'tasks:no_task_title' => 'Hmm, keine Aufgabe...',
	'tasks:no_task_message' => 'Sie sollten welche erstellen!',
	'tasks:is_viewable' => 'In Kundenbereich anzeigen?',
	'tasks:no_milestones' => 'Aufgabe ohne Meilensteine',
	
	/** Users **/
	'users:create_user' => 'Neuer Benutzer',
	
	/** Items **/
	'items:name' => 'Posten Name',
	'items:description' => 'Posten Beschreibung',
	'items:qty_hrs' => 'Menge / Stunden',
	'items:quantity' => 'Menge',
	'items:rate' => 'Ansatz',
	'items:tax_rate' => 'Steuersatz',
	'items:cost' => 'Kosten',
	'items:line_items' => 'Posten',
	'items:add' => 'Neuer Posten',
	'items:edit' => 'Posten bearbeiten',
	'items:noitemtitle'	=>	'Noch keine Posten vorhanden!',
	'items:noitembody'	=>	'Sie sollten einige Posten erstellen, dies macht die Rechnungsstellung einfacher!',
	'items:delete_title'	=>	'Diesem Posten lösche?',
	'items:delete_message'	=>	'Wollen Sie Posten ":1" wirklich löschen?',

	/** Transactions **/
	'transactions:paymentcancelled' => 'Zahlung abgebrochen',
	'transactions:extrapaymentcancelled' => 'Ihre Zahlung wurde abgebrochen.',
	'transactions:paymentreceived' => 'Zahlung erhalten',
	'transactions:orderbeingprocessed' => 'Bitte warten,, Ihre Zahlung wird verarbeitet und Sie werden weitergeleitet zur Website :1.',
	'transactions:ifyouarenotredirected' => 'Falls Sie nicht automatisch innerhalb von 5 Sekunden an :1 weitergleitet werden ...',
	'transactions:thankyouforyourpayment' => 'Danke für Ihre Zahlung. Sie sollten eine Quittung in Kürze erhalten.',
	'transactions:ifyouhavefilesyouwillgetanemail' => 'Sollten Sie Dateien erwarten, erhalten Sie in Kürze eine Email mit Download Link.',
	'transactions:ifyoudonotreceiveemail' => 'Falls Sie innerhalb einer Stunde keine Email erhalten haben, kontaktieren Sie bitte :1',
	/** End Transactions **/

	/** Timesheets **/
	'timesheet:taskname' => 'Aufgaben-Name',
	'timesheet:starttime' => 'Start-Zeit',
	'timesheet:endtime' => 'Ende-Zeit',
	'timesheet:timeframe' => 'Zeitfenster',
	'timesheet:duration' => 'Dauer',
	'timesheet:date' => 'Datum',
	'timesheet:forproject' => 'Zeitblatt für Projekt ":1"',
	'timesheet:timesheet' => 'Zeitblatt',
	'timesheet:for' => 'Zeitblatt für:',
	'timesheet:totalbillable' => 'Total verrechenbare Stunden',
	'timesheet:view_pdf' => 'Zeitblatt ansehen (PDF)',
	/** End Timesheets **/

	/** Frontend **/
	'frontend:hithere' => 'Hallo!',
	'frontend:followthemaillinkdude' => 'Um die Rechnung anzuschauen, klicken Sie bitte den ganzen Link, den Sie im Email erhalten haben, an. z.B. :1.',
	'frontend:contactadminforassistance' => 'Bitte gehen Sie so vor oder wenden Sie sich für Hilfe an :1 @ :2',

	/** End Frontend **/



	/** Settings **/
	'settings:kitchen_route' => 'Kundenzone Prefix',
	'settings:kitchen_route_explain' => "(zB. :1)",
	'settings:include_remittance_slip' => 'Überweisungsbeleg',
	'settings:include_remittance_slip_explain' => "Falls angekreuzt, enthalten die PDFs einen Überweisungbeleg.",
	'settings:send_x_days_before' => 'Standard "Versenden bevor"',
	'settings:send_x_days_before_explain' => "Standard Anzahl Tage bevor die wiederkehrende Rechnung fällig ist, wird die Rechnung verschickt.",
	'settings:file_to_import' => 'Datei zu importieren',
	'settings:file_should_be_csv' => 'Nur CSV und XML Dateien sind unterstützt.',
	'settings:importnow' => 'Jetzt Inportieren!',
	'settings:whatimporting' => 'Was importieren Sie?',
	'settings:whatexporting' => 'Was exportieren Sie?',
	'settings:nouploadedimportfile' => 'Sie haben keine Datei zum importieren hochgeladen.',
	'settings:import' => 'Import',
	'settings:export' => 'Export',
	'settings:exportnow' => 'Jetzt exportieren!',
	'settings:importexport' => 'Import / Export',
	'settings:removelogo' => 'Logo löschen',
	'settings:wrong_license_key' => 'Der Lizenzschlüssel ist ungültig.',
	'settings:noopenssl' => 'Ihr PHP ist nicht für OpenSSL konfiguriert. Sie können Gmail oder Google Apps für den Email Versand nicht benutzen. Bitte fragen Sie Ihren Hoster um OpenSSL Unterstützung.',
	'settings:logoremoved' => 'Logo gelöscht',
	'settings:save' => 'sichern',
	'settings:logodimensions' => 'Das Logo sollte 240px breit und 106px hoch sein.',
	'settings:logoformatsallowed' => 'Erlaubte Formate: BMP, PNG, JPG (JPEG) und GIF.',
	'settings:ftp_user' => 'FTP Benutzer',
	'settings:ftp_pass' => 'FTP Passwort',
	'settings:ftp_path' => 'FTP Pfad',
	'settings:ftp_port' => 'FTP Port',
	'settings:ftp_pasv' => 'Passive Mode?',
	'settings:nophpupdates' => "Infolge Ihrer Sever Konfiguration, benötigt Pancake die FTP Details, damit es sich selber aktualisieren kann. Diese sind nur für den internen Gebrauch und werden nicht weitergegeben.",
	'settings:ftp_host' => 'FTP Host',
	'settings:uptodate' => 'Pancake ist up-to-date (:1)',
	'settings:newversionavailable' => 'Es gibt eine neue Pankcake Version (:1)!',
	'settings:updatenow' => 'Jetzt aktualiseren!',
	'settings:youneedtoconfigurefirst' => 'Ihr Pancake ist momentan nicht für Auto-Update konfiguriert. Bitte geben Sie FTP Details unten ein und klicken sie "Einstellungen sichern".<br /> Danach wird Pancake aktualisert.',
	'settings:general' => 'Generell',
	'settings:email_templates' => 'Emails',
	'settings:taxes' => 'Steuern',
	'settings:currencies' => 'Währungen',
	'settings:branding' => 'Branding',
	'settings:payment_methods' => 'Zahlungen',
	'settings:feeds' => 'Feeds',
	'settings:api_keys' => 'API Schlüssel',
	
	'settings:site_name' => 'Site Name',
	'settings:language' => 'Sprache',
	'settings:timezone' => 'Zeitzone',
	'settings:notify_email' => 'Benachrichtigungssemail',
	'settings:currency' => 'Währung',
	'settings:theme' => 'Frontend Theme',
	'settings:admin_theme' => 'Admin Thema',
	'settings:admin_name' => 'Admin Name',
	'settings:date_format' => 'Datumsformat',
	'settings:task_time_interval' => 'Aufgaben Zeitintervall',
	'settings:mailing_address' => 'Mailing Adresse',
	
	'settings:new_invoice' => 'Neue Rechnung',
	'settings:new_proposal' => 'Neues Angbot',
	'settings:paid_notification' => 'Zahlungsbenachrichtigung',
	'settings:payment_receipt' => 'Zahlungsquittung',
	
	'settings:logo' => 'Ihr Logo',
	'settings:frontend_css' => 'Frontend Custom CSS',
	'settings:backend_css' => 'Backend Custom CSS',
	
	'settings:rss_password' => 'RSS Passwort',
	'settings:default_feeds' => 'Standard Feeds',
	'settings:cron_job_feed' => 'Cron Job',
	'settings:feed_generator' => 'Feed Generator',
	'settings:your_link' => 'Ihr Link',
	'settings:bcc' => 'BCC',
	'settings:automaticallybccclientemail' => 'Automatisches senden einer Kopie von allen Kunden-Emails an die Benachrichtigungsemal (oben bestimmt)',
	'settings:api_note' => 'Name / Bemerkung',
	'settings:api_key' => 'Schlüssel',
	
	'settings:tax_name' => 'Steuer NAme',
	'settings:tax_value' => 'Wert',
	'settings:tax_reg' => 'Registration / Code',
	'settings:add_tax' => 'Weitere Steuer hinzufügen',
	
	'settings:currency_name' => 'Währungsname',
	'settings:currency_code' => 'Währungs-Code',
	'settings:exchange_rate' => 'Wechselkurs',
	'settings:add_currency' => 'Weitere Währung hinzufügen',
	/** End Settings **/	

	'update:ifyourenotsurecontactus' => "Falls Sie nicht sicher sind, was zu machen ist, eröffnen Sie im <a href='http://pancakeapp.com/forums/newtopic/2/'>Forum ein neues Topic</a>.",
	'update:youmodified' => 'Sie haben modifiziert',
	'update:youdeleted' => 'Sie haben gelöscht',
	'update:loadingpleasewait' => 'Laden, bitte warten...',
	'update:errordownloading' => 'Ein neues Pancake Update ist erhätlich. Pancake hat jedoch Probleme, dieses herunterzuladen.',
	'update:herearestepstofix' => 'Hier ein paar Schritte, wie Sie versuchen können, das Problem zu lösen:',
	'update:makesureuploadsiswritable' => 'Versichern Sie sich, dass der Upload Ordner beschreibbar ist (CHMOD 0777).',
	'update:deletepancakesystemupdate' => 'Löschen Sie den pancake-update-system Ordner (innerhalb des uploads Orner), und all seine Inhalte.',
	'update:loadpancakeagain' => "Pancake noch einmal laden. Besteht der Fehler weiterhin, senden Sie bitte ein Email an support@pancakeapp.com- wir helfen Ihnen weiter.",
	'update:whatschanged' => "Was ist neu in :1",
	'update:ftp_conn' => 'Pancake konnte sich nicht mit dem FTP Host verbinden.',
	'update:ftp_login' => 'Pancake via FTP anmelden (falsche FTP Benutzername/Passwort?).',
	'update:ftp_chdir' => 'Pancake konnte den FTP Pfad nicht setzen (Der Pfad existiert wahrscheinlich nicht).',
	'update:ftp_no_uploads' => 'Pancake konnte keine Erlaubnis erhalten, um Dateien per FTP hochzuladen.',
	'update:ftp_indexwrong' => 'Der eingegebene FTP Pfad ist falsch. Es sollte der Pfad zum Pancake-Verzeichnis sein.',
	'update:ftp_indexnotfound' => 'Der eingegebene FTP Pfad ist falsch. Es sollte der Pfad zum Pancake-Verzeichnis sein.',
	'update:update_conflict' => 'Sie haben seit dem letzten Update ein paar Dateien geändert. Als "Lebensretter" für Ihre Anpassungen, hier die Liste Ihrer Anpassungen, welche in Konflikt mit dem neutsen Update stehen.',
	'update:update_no_perms' => 'Pancake hat weder genügende Rechte, um sich selber zu aktualisieren, noch Zugang zu einem FTP Konto. Die Aktualisierung ist nicht möglich.',
	'update:review_files' => 'Bitte sehen Sie die Dateien durch und machen Sie ein Backup davon bevor Sie weitergehen. Wenn das Upgrdae fertig ist, müssen Sie Ihre Änderungen wieder einfügen. Bitte überschreiben SIe nicht die neuen Pancake-Datein mit Ihren alten, ansonsten Pancake nicht mehr richtig funktioniert.',
	'update:internetissues' => "Pancake ihat keine Verbindung zum Internet.",
	'update:pancakeneedsinternet' => 'Damit Pancake richtig funktionieren kann, muss eine aktive Verbindung zum Internet bestehen (Port 80).',
	'update:maybefirewall' => "Ihr Server blockiert den Internet Zugang für Pankcake. Dies könnte etwas mit Ihrer Firewall zu tun haben. Bitte kontaktieren Sie Ihren Host mit der Bitte um PHP Zugang zu :1.",
	'update:nointernetaccess' => 'Kein Internet Zugang',
	'update:pancakeupdated' => 'Pancake wurde upgrade von :1 auf :2',
	/** Action Logger  **/

	/** End Action Logger **/

	/** Partial Payments **/
	'partial:partialpayments' => 'Zahlungsplan', 
	'partial:amount'          => 'Betrag',
	'partial:dueon'           => 'Fällig am',
	'partial:addanother'      => 'Dieser Zahlung einen weiteren Teil anfügen',
	'partial:disabledforrecurring' => 'Keine Teilzahlung bei fortlaufenden Zahlungen',
	'partial:paymentdetails' => 'Zahlungs-Details',
	'partial:wrongtotal' => 'Die Summe aller Zahlungsteile stimmen nicht dem Totalbetrag der Rechnung überein.',
	'partial:problemsaving' => 'Ein Problem beim Sichern des Zahlungsplans ist aufgetaucht. Bitte versuchen Sie es noch einmal.',
	'partial:wrongtotalbutsaved' => 'Die Summe aller Zahlungsteile stimmen nicht dem Totalbetrag der Rechnung überein. Die Änderungen wurden gesichert. <br />Sie sollten jedoch Ihrene Zahlungsplan korrigieren.',
	'partial:problemsavingbutsaved' => 'Ein Problem beim Sichern des Zahlungsplans ist aufgetaucht. Bitte versuchen Sie es noch einmal<br />Die Änderungen Ihrer Rechnung wurden gesichert. Nur der Zahlungsplan nicht',
	'partial:savepaymentdetails' => 'Zahlungsdetails sichern',
	'partial:partpaidthanks' => "Diese Teilrechnung wurde bezahlt. Danke!",
	'partial:proceedtopayment' => 'Weiter zur Zahlung',
	'partial:topaynowgoto' => 'Um jetzt zu bezahlen, gehen Sie bitte zu :1',
	'partial:dueondate' => 'fällig am :1',
	'partial:paymentmethod' => 'Zahlungsmethode',
	'partial:paymentdate' => 'Zahlungsdatum',
	'partial:paymentstatus' => 'Zahlungs-Status',
	'partial:transactionid' => 'Trasaktions-ID',
	'partial:markaspaid' => 'bezahlt',
	'partial:transactionfee' => 'Transaktionsgebühr',
	/** End Partial Payments **/

	/** Payment Gateways **/
	'paypal:clickhere' => 'Hier klicken',
	'authorize:transaction_key' => 'Transaktionsschlüssel',
	'paypal:email'     => 'PayPal Email',
	'paypalpro:paypalpro' => 'PayPal Payments Pro',
	'cash:cash' => 'Bar',
	'check:check' => 'Scheck',
	'moneyorder:moneyorder' => 'Geldanweisung',
	'creditcard:creditcard' => 'Kreditkarte',
	'banktransfer:banktransfer' => 'Bank Überweisung',
	'gateways:errorupdating' => 'Es gab einen Fehler beim Aktualisieren der Einstellungen Ihrer Zahlungsmethoden- bitte kontaktieren Sie den Support.',
	'gateways:paymentmethods' => 'Zahlungsmethoden',
	'gateways:selectpaymentmethod' => 'Zahlungsmethode wählen',
	'gateways:nogatewayused' => 'Keine Methode: Teil ist unbezahlt',
	'gateways:completed' => 'Fertig gestellt',
	'gateways:refunded' => 'Bezahlt',
	'gateways:unpaid' => 'Unbezahlt',
	'gateways:paymentrejected' => ':1 Zalung zurückgewiesen',
	'gateways:rejectedemail' => 'Pancake wurde über eine :1 Zahlung, die einer Ihrer Kunden (:2) gemacht hatte, benachrichtigt, aber :1 hat sie zurückgewiesen.
	cake was notified about a :1 payment that one of your clients (:2) made, but :1 rejected it.',
	'gateways:pending' => 'Offen',
	'gateways:returntowebsite' => 'Zurück zu :1',
	'gateways:cc_type' => 'Kreditkarten Typ',
	'gateways:cc_number' => 'Kreditkarten Nummer',
	'gateways:cc_exp' => 'Ablaufdatum',
	'gateways:cc_code' => 'CVV Kode',
	'gateways:payment_details' => 'Zahlungsdetails',
	'gateways:api_signature' => 'API Signatur',
	'gateways:api_password' => 'API Passwort',
	'gateways:api_username' => 'API Benutzername',
	/** End Payment Gateways **/
	
	/** Kitchen Area **/
	'kitchen:kitchen_name'	=>	'Kundenzone',
	'kitchen:pleaselogin'	=>	'Um zu Ihrem Benutzerkonto zu gelangen, geben Sie bitte Ihre Pass Phrase ein.',
	'kitchen:nocomments'	=>	'Keine Kommentare vorhanden.',
	'kitchen:comment'	=>	'Kommentar',
	'kitchen:file'	=>	'Datei',
	'kitchen:submitcomment'	=>	'Neuer Kommentar',
	'kitchen:attachment'	=>	'Anhang',
	'kitchen:saidon'	=>	'geschrieben am :1, um :2',
	'kitchen:subjectinvoice' => 'Neuer Kommentar zu Rechnung Nr.',
	'kitchen:subjectestimate' => 'Neuer Kommentar zum Voranschlag Nr.',
	'kitchen:subjectproject' => 'Neuer Kommentar zu Projekt:',
	'kitchen:subjecttask' => 'Neuer Kommentar zu Aufgabe:',
	'kitchen:subjectproposal' => 'Neuer Kommentar für Angebot:',
	'kitchen:backtodashboard'	=>	'Zurück zur Übersicht',
	'kitchen:client_welcome'	=>	'Kundenzone für:',
	'kitchen:urltosend'	=>	'Kundenzone URL',
	'kitchen:nopassphrase'	=>	'Die Kunden "Pass Phrase" ist momentan nicht gesetzt. Dadurch genügt die Kunden URL. Um es etwas scherer zu machen, können Sie eine einfache "Pass Phrase" festlegen.',
	'kitchen:passphraseset'	=>	'Dieser Kunde hat eine festgelegte Pass Phrase',
	'kitchen:passphrase'	=>	'Pass Phrase',
		'kitchen:description'	=>	'Dies ist die URL, welche an den Kunden gesendet werden soll, damit sich dieser  in dir Kundenzone anmelden kann. So kann der Kunde alles sehen, welches Sie im als "inder Kundenzone zeigen" markiert haben.',
	
	/** END Kitchen Area **/

);

/** End of file: pancake_lang.php **/