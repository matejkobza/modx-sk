<?php
/**
 * Export English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['export_site_cacheable'] = 'Obsiahnuť súbory neuložené v cache:';
$_lang['export_site_exporting_document'] = 'Exportujem súbor <strong>%s</strong> z <strong>%s</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i>%s</i>, ID %s</small><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_lang['export_site_failed'] = '<span style="color:#990000">Nepodarilo sa!</span>';
$_lang['export_site_html'] = 'Exportovať portál do HTML';
$_lang['export_site_maxtime'] = 'Maximálny čas exportu:';
$_lang['export_site_maxtime_message'] = 'Na tomto mieste môžete určiť akú maximálnu dobu môže trvať export portálu (hodnota je v sekundách a prepíše sa tým nastavenie PHP). Zadajte 0 pre nekonečno. Pamätajte, že nastavenie 0 alebo veľké číslo môže zapríčiniť problémy serveru a nieje doporučené.';
$_lang['export_site_message'] = '<p>Použitím tejto funkcie môžete celý portál exportovať do HTML súborov. Pamätajte, že prídete o veľa funkčných vecí ako:</p><ul><li>Prečítanie stránok nebude započítavané do štatistík prečítaní.</li><li>Snippety nebudú pracovať.</li><li>Exportované budú len skutočné dokumenty, webové odkazy nebudú exportované.</li><li>Export môže zlyhať ak dokumenty obsahujú snippety používajúce presmerovanie.</li><li>V závislosti na tom ako sú písané dokumenty CSS a kde sú uložené obrázky môže byť poškodený design portálu. Ak chcete tomuto predísť uložte/presunte exportované súbory tam, kde se nachádza vlastná inštalácia MODX.</li></ul><p>Vyplnte formulár a kliknite na "Export" pre zahájenie exportovania. Vytvorené súbory budú uložené na miesto, ktoré ste definovali a URL aliasy dokumentov budú použité ako názvy súborov. Pri exportovaní portálu je dobré mať v konfigurácií povolené nastavenie "friendly_urls", najlepšie je mať v konfigurácií MODX nastavenú položku "Priateľská URL" na "Ano". V závislosti na rozsiahlosti portálu môže export chvíľu trvať.</p><p><em>Existujúce súbory rovnakých názvov budú prepísané!</em></p>';
$_lang['export_site_numberdocs'] = '<p><strong>Nájdených %s dokumentov k exportu...</strong></p>';
$_lang['export_site_prefix'] = 'Predpona súboru:';
$_lang['export_site_start'] = 'Začať export';
$_lang['export_site_success'] = '<span style="color:#009900">Hotovo!</span>';
$_lang['export_site_suffix'] = 'Prípona súboru:';
$_lang['export_site_target_unwritable'] = 'Do vybranej zložky nieje možno zapisovať. Uistite sa, že je do zložky možné zapisovať a skúste to znovu.';
$_lang['export_site_time'] = 'Export dokončený. Export trval %s sekúnd.';