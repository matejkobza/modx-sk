<?php
/**
 * Sources English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['access'] = 'Prístupové práva';
$_lang['base_path'] = 'Východzia cesta';
$_lang['base_path_relative'] = 'Relatívna východzia cesta?';
$_lang['base_url'] = 'Východzia URL';
$_lang['base_url_relative'] = 'Relatívna východzia URL?';
$_lang['minimum_role'] = 'Minimálna roľa';
$_lang['path_options'] = 'Možnosti cesty';
$_lang['policy'] = 'Prístupové právo';
$_lang['source'] = 'Zdroj médií';
$_lang['source_access_add'] = 'Pridať užívateľskú skupinu';
$_lang['source_access_remove'] = 'Odobrať prístup';
$_lang['source_access_remove_confirm'] = 'Naozaj chcete odobrať prístup k tomuto zdroju tejto užívateľskej skupine?';
$_lang['source_access_update'] = 'Upraviť prístup';
$_lang['source_create'] = 'Vytvoriť nový zdroj médií';
$_lang['source_description_desc'] = 'Popis zdroja médií.';
$_lang['source_duplicate'] = 'Skopírovať zdroj médií';
$_lang['source_err_ae_name'] = 'Zdroj médií s týmto názvom už existuje! Zadajte iný názov.';
$_lang['source_err_nf'] = 'Zdroj médií nenájdený!';
$_lang['source_err_nfs'] = 'Nebyl nájdený žiadny zdroj médií s id: [[+id]].';
$_lang['source_err_ns'] = 'Nevybrali ste zdroj médií.';
$_lang['source_err_ns_name'] = 'Zadajte názov zdroja médií.';
$_lang['source_name_desc'] = 'Názov zdroja médií.';
$_lang['source_properties.intro_msg'] = 'Správa vlastností tohto zdroja.';
$_lang['source_remove'] = 'Odstrániť zdroj médií';
$_lang['source_remove_confirm'] = 'Naozaj chcete odstrániť tento zdroj médií? Toto môže spôsobiť problémy s TVs, ktoré sú priradené k tomuto zdroju.';
$_lang['source_remove_multiple'] = 'Odstrániť viac zdrojov médií';
$_lang['source_remove_multiple_confirm'] = 'Naozaj chcete odstrániť tieto zdroje médií? Toto môže spôsobiť problémy s TVs, ktoré sú priradené k týmto zdrojom.';
$_lang['source_update'] = 'Upraviť zdroj médií';
$_lang['source_type'] = 'Typ zdroja';
$_lang['source_type_desc'] = 'Typ alebo ovládač zdroja médií. Zdroj bude používať tento ovládač pre prístup k dátam. Napríklad: "Súborový systém" pracuje so súbormi zo súborového systému. "Amazon S3" zaistí prístup k súborom v službe Amazon S3.';
$_lang['source_type.file'] = 'Súborový systém';
$_lang['source_type.file_desc'] = 'Súborový systém na Vašom serveri.';
$_lang['source_type.s3'] = 'Amazon S3';
$_lang['source_type.s3_desc'] = 'Súbory v rámci služby Amazon S3.';
$_lang['source_types'] = 'Typy zdrojov';
$_lang['source_types.intro_msg'] = 'Zoznam všetkých inštalovaných typov zdrojov médií dostupných v tejto instancií MODX.';
$_lang['source.access.intro_msg'] = 'Na tomto mieste môžete obmedziť zdroj médií určitým užívateľským skupinám a aplikovať na ne prístupové právo. Zdroj médií bez obmedzenia pre užívateľskú skupinu je dostupný všetkým užívateľom správcu obsahu.';
$_lang['sources'] = 'Zdroje médií';
$_lang['sources.intro_msg'] = 'Správa všetkých zdrojov médií.';
$_lang['user_group'] = 'Užívateľská skupina';

/* file source type */
$_lang['prop_file.allowedFileTypes_desc'] = 'Ak je nastavené, obmedzí zobrazené súbory iba na určité prípony. Zadajte ich ako čiarkou oddelený zoznam, bez bodky.';
$_lang['prop_file.basePath_desc'] = 'Cesta k súborom v rámci zdroja.';
$_lang['prop_file.basePathRelative_desc'] = 'Ak nieje východzia cesta uvedená vyššie k inštalácií MODX relatívna, nastavte Ano.';
$_lang['prop_file.baseUrl_desc'] = 'URL adresa, z ktorej môže byť tento zdroj dostupný.';
$_lang['prop_file.baseUrlPrependCheckSlash_desc'] = 'Ak je nastavené, tak pri vykreslovaní TV v prípade, že URL nezačína (/) doplní MODX pred URL baseUrl. Užitočné pri potrebe nastaviť hodnotu TV mimo baseUrl.';
$_lang['prop_file.baseUrlRelative_desc'] = 'Ak nieje východzia URL uvedená vyššie relatívna k inštalácií MODX, nastavte Ano.';
$_lang['prop_file.imageExtensions_desc'] = 'Čiarkou oddelený zoznam prípon súborov, ktoré majú byť zobrazené ako obrázky. MODX sa pokúsi pri súboroch s týmito príponami vytvoriť náhľady.';
$_lang['prop_file.skipFiles_desc'] = 'Čiarkou oddelený zoznam. MODX vynechá a skryje všetky súbory a zložky odpovedajúce tomuto zápisu.';
$_lang['prop_file.thumbnailQuality_desc'] = 'Kvalita vytvorených náhľadov v merítku 0 - 100.';
$_lang['prop_file.thumbnailType_desc'] = 'Typ obrázku, v ktorom budú vytvárané náhľady.';

/* s3 source type */
$_lang['bucket'] = 'Bucket';
$_lang['prop_s3.bucket_desc'] = 'S3 Bucket, z ktorého sa majú načítať dáta.';
$_lang['prop_s3.key_desc'] = 'Amazon key pre overenie prístupu k bucketu.';
$_lang['prop_s3.imageExtensions_desc'] = 'Čiarkou oddelený zoznam prípon súboru, ktoré majú byť zobrazené ako obrázky. MODX sa pokúsi pri súboroch s týmito príponami vytvoriť náhľady.';
$_lang['prop_s3.secret_key_desc'] = 'Amazon secret key pre overenie prístupu k bucketu.';
$_lang['prop_s3.skipFiles_desc'] = 'Čiarkou oddelený zoznam. MODX vynechá a skryje všetky súbory a zložky zodpovedajúce tomuto zápisu.';
$_lang['prop_s3.thumbnailQuality_desc'] = 'Kvalita vytvorených náhľadov v merítku 0 - 100.';
$_lang['prop_s3.thumbnailType_desc'] = 'Typ obrázku, v ktorom budú vytvárané náhľady.';
$_lang['prop_s3.url_desc'] = 'URL instance Amazon S3.';
$_lang['s3_no_move_folder'] = 'Ovládač Amazon S3 v túto chvíľu nepodporuje presun zložiek.';