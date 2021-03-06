<?php

	// Copyright (C) 2015 Jacob Barkdull
	//
	//	I, Jacob Barkdull, hereby release this work into the public domain. 
	//	This applies worldwide. If this is not legally possible, I grant any 
	//	entity the right to use this work for any purpose, without any 
	//	conditions, unless such conditions are required by law.


	// Display source code
	if (basename ($_SERVER['PHP_SELF']) === basename (__FILE__)) {
		if (isset ($_GET['source'])) {
			header ('Content-type: text/plain; charset=UTF-8');
			exit (file_get_contents (basename (__FILE__)));
		}
	}

	// German text for forms, buttons, links, and tooltips
	$locale = array (
		'comment_form'		=> 'Kommentar hier eingeben (alle anderen Felder sind optional)',
		'reply_form'		=> 'Antwort hier eingeben (alle anderen Felder sind optional)',
		'form_tip'		=> 'Akzeptiertes HTML: &lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; wird als HTML dargestellt, URLs werden automatisch zu Links umgewandelt und mit [img]Bild-URL[/img] werden externe Bilder angezeigt.',
		'post_button'		=> 'Kommentar hinzufügen',
		'login'			=> 'Anmelden',
		'login_tip'		=> 'Anmelden (optional)',
		'logout'		=> 'Abmelden',
		'pending_note'		=> 'Dieser Kommentar wartet der Zustimmung.',
		'deleted_note'		=> 'Dieser Kommentar wurde gelöscht.',
		'comment_pending'	=> 'Wartend',
		'comment_deleted'	=> 'Kommentar gelöscht',
		'options'		=> 'Optionen',
		'cancel'		=> 'Abbrechen',
		'reply_to_comment'	=> 'Auf Kommentar antworten',
		'edit_your_comment'	=> 'Kommentar bearbeiten',
		'name'			=> 'Name',
		'name_tip'		=> 'Name (optional)',
		'password'		=> 'Passwort',
		'password_tip'		=> 'Passwort (optional, erlaubt das Bearbeiten oder Löschen dieses Kommentars)',
		'confirm_password'	=> 'Passwort Bestätigen',
		'email'			=> 'E-Mail-Adresse',
		'email_tip'		=> 'E-Mail-Adresse (optional, für E-Mail-Benachrichtigungen)',
		'website'		=> 'Webseite',
		'website_tip'		=> 'Webseite (optional)',
		'logged_in'		=> 'Du hast dich erfolgreich angemeldet!',
		'logged_out'		=> 'Du hast dich erfolgreich abgemeldet!',
		'comment_needed'	=> 'Du hast den Kommentar falsch eingegeben. Bitte benutze das Formular unten.',
		'reply_needed'		=> 'Du hast die Antwort falsch eingegeben. Bitte benutze das Formular unten.',
		'post_fail'		=> 'Ups, du hast nicht die erforderlichen Rechte!',
		'post_reply'		=> 'Antwort absenden',
		'delete'		=> 'Löschen',
		'subscribe'		=> 'Benachrichtige mich über Antworten',
		'subscribe_tip'		=> 'E-Mail Benachrichtigung abonnieren',
		'edit_comment'		=> 'Kommentar bearbeiten',
		'save_edit'		=> 'Speichern',
		'no_email_warning'	=> 'Du wirst bei neuen Kommentaren keine Benachrichtigung erhalten, wenn du keine E-Mail angibst.',
		'invalid_email'		=> 'Die von dir eingegebene E-Mail-Adresse ist ungültig.',
		'delete_comment'	=> 'Möchtest du diesen Kommentar wirklich löschen?',
		'post_comment_on'	=> array ('Kommentar hinzufügen', ' zu "_TITLE_"'),
		'popular_comments'	=> array ('Beliebtester Kommentar', 'Beliebteste Kommentare'),
		'showing_comments'	=> array ('Anzeigen von _NUM_ Kommentar', 'Anzeigen von _NUM_ Kommentaren'),
		'count_link'		=> array ('_NUM_ Kommentar', '_NUM_ Kommentare'),
		'count_replies'		=> array ('inklusive _NUM_ Antwort', 'inklusive _NUM_ Antworten'),
		'sort'			=> 'Sortieren',
		'sort_ascend'		=> 'In Reihenfolge',
		'sort_descend'		=> 'In umgekehrter Reihenfolge',
		'sort_byname'		=> 'Nach Kommentator',
		'sort_bydate'		=> 'Nach Datum (Neueste zuerst)',
		'sort_bylikes'		=> 'Nach Likes',
		'threaded'		=> 'Baumstruktur',
		'thread'		=> 'Anfang des Threads',
		'thread_tip'		=> 'Spring zum Anfang des Threads',
		'replies'		=> 'Antworten',
		'edit'			=> 'Bearbeiten',
		'reply'			=> 'Antworten',
		'like'			=> array ('Like', 'Likes'),
		'liked'			=> 'Liked',
		'unlike'		=> 'Unlike',
		'like_comment'		=> '\'Like\' diesen Kommentar',
		'liked_comment'		=> '\'Unlike\' diesen Kommentar',
		'dislike'		=> array ('Dislike', 'Dislikes'),
		'disliked'		=> 'Disliked',
		'dislike_comment'	=> '\'Dislike\' diesen Kommentar',
		'disliked_comment'	=> '\'Disliked\' diesen Kommentar',
		'commenter_tip'		=> 'Du wirst nicht per E-Mail benachrichtigt',
		'subscribed_tip'	=> 'wirst per E-Mail benachrichtigt',
		'unsubscribed_tip'	=> 'hat E-Mail-Benachrichtigungen nicht abonniert',
		'first_comment'		=> 'Schreib den ersten Kommentar!',
		'show_other_comments'	=> array ('Zeige _NUM_ anderen Kommentar', 'Zeige _NUM_ weitere Kommentare'),
		'show_number_comments'	=> array ('Zeige _NUM_ Kommentar', 'Zeige _NUM_ Kommentare'),
		'date_years'		=> array ('Vor _NUM_ Jahr', 'Vor _NUM_ Jahren'),
		'date_months'		=> array ('Vor _NUM_ Monat', 'Vor _NUM_ Monaten'),
		'date_days'		=> array ('Vor _NUM_ Tag', 'Vor _NUM_ Tagen'),
		'date_today'		=> '_TIME_ Heute'
	);

?>
