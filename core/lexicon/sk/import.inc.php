<?php
/**
 * Import English lexicon entries
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['import_allowed_extensions'] = 'Vydefinujte čiarkou oddelený zoznam prípon súborov pre import.<br /><small><em>Políčko ponechajte prázdne pre import všetkých súborov. Neznáme typy budú importované ako plain text.</em></small>';
$_lang['import_base_path'] = 'Zadajte cestu k souborom pre import.<br /><small><em>Políčko ponechajte prázdne pre nastavenie cesty z daného kontextu.</em></small>';
$_lang['import_duplicate_alias_found'] = 'Dokument [[+id]] už používa alias [[+alias]]. Zadajte ešte nepoužitý, unikátny alias.';
$_lang['import_element'] = 'Zadajte hlavný HTML element pre import:';
$_lang['import_enter_root_element'] = 'Zadajte hlavný element pre import:';
$_lang['import_files_found'] = '<strong>Nájdených  %s dokumentov na import...</strong><p/>';
$_lang['import_parent_document'] = 'Nadradený dokument:';
$_lang['import_parent_document_message'] = 'Použite strom dokumentov nižšie k výberu nadradeného umiestnenia, kam sa majú súbory naimportovať.';
$_lang['import_resource_class'] = 'Vyberte typ triedy modResource pre import:<br /><small><em>Použite modStaticResource pre nalinkovanie statických zdrojov alebo modDocument pre skopírovanie ich obsahu do databázy.</em></small>';
$_lang['import_site_failed'] = '<span style="color:#990000">Nezdarilo sa!</span>';
$_lang['import_site_html'] = 'Importovať portál z HTML';
$_lang['import_site_importing_document'] = 'Importujem súbor <strong>%s</strong> ';
$_lang['import_site_maxtime'] = 'Maximálný čas importu:';
$_lang['import_site_maxtime_message'] = 'Na tomto mieste môžete určiť akú maximálnu dobu môže trvať import portálu (hodnota je v sekundách a prepíše sa tým nastavenie PHP). Zadajte 0 pre nekonečno. Pamätajte, že nastavenie 0 alebo velké číslo môže zapríčiniť problémy serveru a nieje doporučené.';
$_lang['import_site_message'] = '<p>Použitím tohto nástroja môžete naimportovať obsah portálu zo sady HTML souborov do databázy. <em>Berte na vedomie, že budete musieť nakopírovať súbory a zložky do zložky "core/import".</em></p><p>Vyplňte možnosti nižšie, prípadne vyberte nadradený dokument pre import súborov zo stromu dokumentov a kliknite na "Importovať HTML" . Importované súbory budú uložené do vybraného umiestnenia, kde budú súbory načítané podľa ich názvu a ten bude použitý ako URL alias, zdroje s rovnakým aliasom budú prepísané.</p>';
$_lang['import_site_resource'] = 'Importovať dokumenty zo statických súborov';
$_lang['import_site_resource_message'] = '<p>Použitím tohto nástroja môžete naimportovať dokumenty zo statických souborov do databázy. <em>Berte na vedomie, že budete musieť nakopírovať súbory a zložky do zložky "core/import".</em></p><p>Vyplňte možnosti nižšie, prípadne vyberte nadradený dokument pre import súborov zo stromu dokumentov a kliknite na "Importovať dokumenty". Importované súbory budú uložené do vybraného umiestnenia, kde budú súbory načítané podľa ich názvu a ten bude použitý ako URL alias, zdroje s rovnakým aliasom budú prepísané.</p>';
$_lang['import_site_skip'] = '<span style="color:#990000">Přeskočeno!</span>';
$_lang['import_site_start'] = 'Spustiť import';
$_lang['import_site_success'] = '<span style="color:#009900">V poriadku!</span>';
$_lang['import_site_time'] = 'Import dokončený. Import trval %s sekúnd.';
$_lang['import_use_doc_tree'] = 'Použite strom dokumentov nížšie pre výber nadradeného umiestnenia, kam majú byť súbory importované.';