<?php
/**
 * Config Check English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = 'Kontaktujte prosím administrátora systému a nahláste mu varovanie z tejto správy!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'allow_tags_in_post povolené v nastavení kontextu mimo `mgr`';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'Nastavenie kontextu allow_tags_in_post je povolené inštaláciou MODX mimo kontext mgr. MODX doporučuje toto nastavenie zakázať pokiaľ nepotrebujete, aby užívatelia MODX mohli posielať MODX značky, číselné entity alebo HTML skript tagy pomocou POST metódy do formuláru. Toto by malo byť všeobecne zakázané okrem kontextu mgr.';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'allow_tags_in_post povolené v Konfigurácií systému';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'Nastavenie allow_tags_in_post v Konfigurácií systému System Setting je povolené v inštalácií MODX. MODX doporučuje toto nastavenie zakázať pokiaľ nepotrebujete, aby užívatelia MODX mohli posielať MODX značky, číselné entity alebo HTML skript tagy pomocou POST metódy do formuláru. Je lepšie túto hodnotu aktivovať v rámci nastavení daných kontextov.';
$_lang['configcheck_cache'] = 'Do zložky "cache" nemožno zapisovať';
$_lang['configcheck_cache_msg'] = 'MODX nemôže zapisovať do zložky "cache". MODX bude fungovať, ale nebude se konať ukladanie do cache. Pre vyriešenie tohoto problému nastavte atribúty zložky "core/cache" pre zápis.';
$_lang['configcheck_configinc'] = 'Do konfiguračného súboru je stále možno zapisovať!';
$_lang['configcheck_configinc_msg'] = 'Váš portál je zraniteľný hackermi a mohlo by dôjsť k jeho poškodeniu. Nastavte atribúty konfiguračného súboru "[[+path]]" len na čítanie!';
$_lang['configcheck_default_msg'] = 'Bolo zistené nešpecifikované varovanie. To je teda naozaj divné.';
$_lang['configcheck_errorpage_unavailable'] = 'Chybová stránka Vášho portálu nieje dostupná.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'To znamená, že chybová stránka nieje dostupná pre návštevníkov webu alebo neexistuje. Může to vést k rekurzivní smyčce a mnoha chybám v chybových zprávách. Ujistěte se, že tu není žádná skupina webových uživatelů přiřazená k této stránce.';
$_lang['configcheck_errorpage_unpublished'] = 'Chybová stránka portálu nieje publikována alebo neexistuje.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Znamená, že chybová stránka nieje dostupná pre návštevníkov webu. Publikujte túto stránku a uistite sa, že je chybová stránka definovaná v menu "Systém &gt; Konfigurácia systému".';
$_lang['configcheck_images'] = 'Do zložky pre obrázky nieje možné zapisovať';
$_lang['configcheck_images_msg'] = 'Zložka pre obrázky je len na čítanie alebo neexistuje. To znamená, že správca obrázkov nebude pracovať správne!';
$_lang['configcheck_installer'] = 'Inštalátor stále existuje!';
$_lang['configcheck_installer_msg'] = 'Hlavná zložka stále obsahuje zložku "setup" obsahujúcu inštalátor systému MODX. Mohlo by dôjsť k narušeniu bezpečnosti systému ak by neoprávnená osoba spustila inštalátor, ktorý je umiestnený tu: [[+path]]';
$_lang['configcheck_lang_difference'] = 'Nesprávny počet záznamov v jazykovom súbore';
$_lang['configcheck_lang_difference_msg'] = 'Aktuálne vybraný jazyk má rozdielny počet záznamov než východzí jazyk angličtina. Malo by dôjsť k aktualizácií jazykového súboru pre túto verziu MODX.';
$_lang['configcheck_notok'] = 'Jeden alebo viacero konfiguračných údajov niesú správne nastavené: ';
$_lang['configcheck_ok'] = 'Kontrola OK - žiadne varovanie do reportu.';
$_lang['configcheck_register_globals'] = 'register_globals v php.ini je nastavé na ON';
$_lang['configcheck_register_globals_msg'] = 'Vďaka tomuto nastaveniu je Váš portál omnoho viac náchylný k hackerským útokom typu Cross Site Scripting (XSS). Mali by ste kontaktovať svojho správcu hostingu a zistiť čo je možné spraviť pre deaktiváciu tohoto systému.';
$_lang['configcheck_title'] = 'Kontrola nastavenia';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Stránka o neautorizovanom prístupe nieje publikována alebo neexistuje.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'To znamená, že stránka o neautorizovanom prístupe nieje dostupná pre návštevníkov webu alebo neexistuje. To môže viesť k rekurzívnej smyčke a veľa chybám v chybových správach. Uistite sa, že žiadna skupina webových užívateľov nieje priradená k tejto stránke.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Stránka o neautorizovanom prístupe definovaná v nastaveniach portálu nieje publikovaná.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'To znamená, že stránka o neautorizovanom prístupe nieje dostupná pre návštevníkov webu. Publikujte stránku a uistite sa, že je táto stránka definovaná v menu "Systém &gt; Konfigurácia systému".';
$_lang['configcheck_warning'] = 'Varovanie:';
$_lang['configcheck_what'] = 'Čo to znamená?';