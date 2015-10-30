<?php
/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Translated by Jiri Pavlicek <jiri@pavlicek.cz>, www.pavlicek.cz
 * UTF-8 encoded
 *
 * @package quip
 * @subpackage lexicon
 */
$_lang['quip.email_comment_approved'] = '<p>Dobrý deň [[+name]],</p>

<p>Váš komentár bol schválený. Môžete ho vidieť tu:</p>

<p><a href="[[+url]]">[[+url]]</a></p>

<p>Ďakujem,<br />
<em>Quip</em></p>';
$_lang['quip.email_comment_approved_subject'] = '[Quip] Váš komentár bol schválený';
$_lang['quip.email_notify'] = '<p>Dobrý deň,</p>

<p>Nový komentár od [[+name]] bol vložený na:</p>

<p><a href="[[+url]]">[[+url]]</a></p>

<p>----------------------------------------------------</p>

<p>[[+body]]</p>

<p>----------------------------------------------------</p>

<p>Toto je automaticky generovaný e-mail. Prosím, neodpovedajte. ID
komentára je: <strong>[[+id]]</strong> vo vlákne "[[+thread]]".</p>

[[+unsubscribeText]]

<p>
Ďakujem,<br />
<em>Quip</em></p>';
$_lang['quip.email_notify_subject'] = '[Quip] Nová odpoveď vložená';
$_lang['quip.email_moderate'] = '<p>Dobrý deň,</p>

<p>Nový komentár od [[+name]] potrebuje moderovať. Bol vložený na:</p>

<p><a href="[[+url]]">[[+url]]</a></p>

<p>----------------------------------------------------</p>

<p>[[+body]]</p>

<p>----------------------------------------------------</p>

<p><a href="[[+approveUrl]]">Schváliť komentár</a> | <a href="[[+rejectUrl]]">Odstrániť komentár</a> | <a href="[[+unapprovedUrl]]">Neschváliť komentár</a></p>

<p>Toto je automaticky generovaný e-mail. Prosím, neodpovedajte. ID
komentára je: <strong>[[+id]]</strong> vo vlákne "[[+thread]]".</p>

<p>
Ďakujem,<br />
<em>Quip</em></p>';
$_lang['quip.email_moderate_subject'] = '[Quip] Nový príspevok vyžaduje moderovať';
$_lang['quip.unsubscribe_text'] = '<p>Ak sa chcete odhlásiť z odberu týchto e-mailov, kliknite sem:</p>

<p><a href="[[+unsubscribeUrl]]">[[+unsubscribeUrl]]</a></p>';