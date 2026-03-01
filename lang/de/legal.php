<?php

return [

    // ─── Datenschutzerklärung ────────────────────────────────────────────────
    'privacy' => [
        'page_intro'  => 'Diese Erklärung beschreibt, wie Alpin Curry personenbezogene Daten verarbeitet, wenn Sie unsere Website und unsere Dienstleistungen nutzen.',
        'scope' => [
            'title'   => 'Geltungsbereich',
            'body'    => 'Diese Datenschutzerklärung gilt zwischen den Nutzern der Website und Alpin Curry als Websitebetreiber und Dienstleister.',
            'updated' => '1. März 2026',
        ],
        'controller' => [
            'title'           => 'Verantwortlicher und Rechtsgrundlagen',
            'label'           => 'Verantwortlicher',
            'contact_label'   => 'Kontakt für Datenschutzanfragen',
            'framework_label' => 'Rechtsrahmen',
            'framework_body'  => 'Verordnung (EU) 2016/679 (DSGVO) sowie das italienische Gesetzesdekret 196/2003 (Datenschutzkodex), geändert durch das Gesetzesdekret 101/2018.',
            'dpo_note'        => 'Für diese Art von Geschäftstätigkeit ist die Bestellung eines Datenschutzbeauftragten (DSB) nicht formell erforderlich. Bei Datenschutzanfragen wenden Sie sich bitte an den oben genannten Kontakt.',
        ],
        'collect' => [
            'title'         => 'Erhobene Daten',
            'items'         => [
                'identity'    => 'Identifikations- und Kontaktdaten wie Name, Telefonnummer und E-Mail-Adresse, die bei der Einreichung einer Tischreservierung oder Kontaktaufnahme erhoben werden.',
                'reservation' => 'Reservierungsdetails wie Datum, Uhrzeit, Gästezahl und etwaige Anmerkungen.',
                'technical'   => 'Technische und Nutzungsdaten wie IP-Adresse, Browsertyp und besuchte Seiten, die beim Surfen auf der Website automatisch erfasst werden.',
                'cookies'     => 'Cookie- und Tracking-Daten gemäß unserer Cookie-Richtlinie.',
            ],
            'children_note' => 'Wir erheben wissentlich keine Daten von Personen unter 16 Jahren. Sollten Sie vermuten, dass ein Minderjähriger personenbezogene Daten übermittelt hat, kontaktieren Sie uns bitte umgehend.',
        ],
        'collection_method' => [
            'title' => 'Erhebungsweise der Daten',
            'items' => [
                'forms'  => 'Direkt von Ihnen über Reservierungsformulare, Telefonanrufe und E-Mail.',
                'auto'   => 'Automatisch über Cookies und ähnliche Technologien beim Besuch der Website (Einzelheiten und Verwaltung der Präferenzen entnehmen Sie bitte der Cookie-Richtlinie).',
                'public' => 'Aus öffentlichen Quellen, soweit dies für Compliance-Prüfungen erforderlich ist.',
            ],
        ],
        'bases' => [
            'title' => 'Rechtsgrundlagen der Verarbeitung',
            'items' => [
                'contract'   => ['label' => 'Vertragserfüllung',                   'ref' => 'Art. 6 Abs. 1 lit. b DSGVO', 'body' => 'zur Bearbeitung von Reservierungsanfragen und damit verbundener Kommunikation.'],
                'consent'    => ['label' => 'Einwilligung',                        'ref' => 'Art. 6 Abs. 1 lit. a DSGVO', 'body' => 'für Analyse-Cookies und optionale Marketingkommunikation. Die Einwilligung kann jederzeit widerrufen werden, ohne dass die Rechtmäßigkeit der zuvor erfolgten Verarbeitung berührt wird.'],
                'obligation' => ['label' => 'Rechtliche Verpflichtung',            'ref' => 'Art. 6 Abs. 1 lit. c DSGVO', 'body' => 'zur Erfüllung steuerlicher, buchhalterischer und behördlicher Anforderungen.'],
                'interest'   => ['label' => 'Berechtigte Interessen',              'ref' => 'Art. 6 Abs. 1 lit. f DSGVO', 'body' => 'für die Website-Sicherheit, Betrugsprävention und Verbesserung der Servicequalität, soweit diese Interessen Ihre Rechte nicht überwiegen.'],
            ],
        ],
        'disclosure' => [
            'title'   => 'Weitergabe von Daten',
            'intro'   => 'Ihre Daten können an folgende Empfängerkategorien weitergegeben werden, jedoch nur im notwendigen Umfang für den jeweiligen Zweck:',
            'items'   => [
                'hosting'     => ['label' => 'Hosting- und IT-Dienstleister',                     'body' => 'für den Betrieb und die Wartung der Website und der E-Mail-Infrastruktur.'],
                'analytics'   => ['label' => 'Analysedienstleister (bei erteilter Einwilligung)', 'body' => 'wie Google Analytics für aggregierte Website-Nutzungsstatistiken.'],
                'advisors'    => ['label' => 'Professionelle Berater',                            'body' => 'Steuerberater und Rechtsanwälte, die einer Vertraulichkeitspflicht unterliegen.'],
                'authorities' => ['label' => 'Behörden',                                          'body' => 'sofern gesetzlich vorgeschrieben oder aufgrund einer rechtswirksamen Anordnung.'],
            ],
            'no_sell' => 'Wir verkaufen oder vermieten Ihre personenbezogenen Daten nicht an Dritte.',
        ],
        'retention' => [
            'title' => 'Datenspeicherung',
            'items' => [
                'reservation' => ['label' => 'Reservierungsdaten',              'body' => 'werden bis zu 24 Monate ab dem Reservierungsdatum für Service- und Streitbeilegungszwecke aufbewahrt.'],
                'tax'         => ['label' => 'Buchhalterische und steuerliche Unterlagen', 'body' => 'werden gemäß dem italienischen Steuerrecht (D.P.R. 633/1972 und D.P.R. 600/1973) 10 Jahre aufbewahrt.'],
                'analytics'   => ['label' => 'Analysedaten',                   'body' => 'werden gemäß den Aufbewahrungseinstellungen des Analysedienstleisters gespeichert (Google Analytics Standard: 14 Monate).'],
                'consent'     => ['label' => 'Cookie-Einwilligungsnachweise',  'body' => 'werden bis zu 12 Monate aufbewahrt.'],
            ],
            'note' => 'Nach Ablauf der jeweiligen Aufbewahrungsfrist werden die Daten sicher gelöscht oder anonymisiert.',
        ],
        'rights' => [
            'title'        => 'Ihre Rechte nach der DSGVO',
            'intro'        => 'Bezüglich Ihrer personenbezogenen Daten stehen Ihnen folgende Rechte zu:',
            'items'        => [
                'access'      => ['label' => 'Auskunftsrecht',                      'body' => 'Anforderung einer Kopie der bei uns gespeicherten personenbezogenen Daten.'],
                'rectify'     => ['label' => 'Recht auf Berichtigung',              'body' => 'Anforderung der Korrektur unrichtiger oder unvollständiger Daten.'],
                'erasure'     => ['label' => 'Recht auf Löschung',                  'body' => 'Anforderung der Löschung Ihrer Daten, sofern kein legitimer Grund für die weitere Verarbeitung besteht.'],
                'restriction' => ['label' => 'Recht auf Einschränkung',             'body' => 'Anforderung der Einschränkung der Verarbeitung unter bestimmten Umständen.'],
                'portability' => ['label' => 'Recht auf Datenübertragbarkeit',      'body' => 'Erhalt Ihrer Daten in einem strukturierten, maschinenlesbaren Format, soweit technisch möglich.'],
                'object'      => ['label' => 'Widerspruchsrecht',                   'body' => 'Widerspruch gegen die Verarbeitung auf Grundlage berechtigter Interessen oder zu Direktmarketingzwecken.'],
                'withdraw'    => ['label' => 'Widerruf der Einwilligung',           'body' => 'jederzeitiger Widerruf einer erteilten Einwilligung, ohne dass die Rechtmäßigkeit der bis zum Widerruf erfolgten Verarbeitung berührt wird.'],
            ],
            'contact_note' => 'Um eines dieser Rechte auszuüben, kontaktieren Sie uns bitte über die unten angegebene E-Mail-Adresse. Wir antworten innerhalb von 30 Tagen.',
        ],
        'dpa' => [
            'title'             => 'Beschwerderecht',
            'intro'             => 'Sie haben das Recht, jederzeit eine Beschwerde bei der zuständigen Datenschutz-Aufsichtsbehörde einzureichen. In Italien ist dies:',
            'authority_name'    => 'Garante per la protezione dei dati personali',
            'authority_address' => 'Piazza Venezia 11, 00187 Rom, Italien',
            'authority_website' => 'https://www.garanteprivacy.it',
            'note'              => 'Sie können auch bei der Aufsichtsbehörde des EU-Mitgliedstaates, in dem Sie ihren gewöhnlichen Aufenthalt haben oder in dem der behauptete Verstoß erfolgt ist, Beschwerde einreichen.',
        ],
        'security' => [
            'title'      => 'Sicherheit und Internationale Übermittlungen',
            'safeguards' => 'Wir setzen geeignete technische und organisatorische Maßnahmen ein, um personenbezogene Daten vor unbefugtem Zugriff, Verlust oder Zerstörung zu schützen. Der Zugang zu personenbezogenen Daten ist auf befugtes Personal beschränkt.',
            'breach'     => 'Im Falle einer Verletzung des Schutzes personenbezogener Daten, die voraussichtlich ein Risiko für Ihre Rechte und Freiheiten mit sich bringt, werden wir die zuständige Aufsichtsbehörde gemäß Art. 33 DSGVO binnen 72 Stunden nach Bekanntwerden des Vorfalls benachrichtigen.',
            'transfers'  => 'Wir übermitteln personenbezogene Daten grundsätzlich nicht außerhalb des Europäischen Wirtschaftsraums (EWR). Sofern Analysedienste Datenübermittlungen in Drittstaaten (z. B. in die USA) beinhalten, erfolgen diese auf Grundlage der EU-Standardvertragsklauseln oder gleichwertiger Garantien gemäß Art. 46 DSGVO.',
            'profiling'  => 'Wir setzen keine automatisierten Entscheidungsprozesse oder Profilierungsmaßnahmen ein, die rechtliche oder vergleichbar erhebliche Wirkung entfalten.',
        ],
        'allergen' => [
            'title' => 'Allergen- und Diätinformationen',
            'body'  => 'Sofern Sie im Zusammenhang mit einer Reservierung Angaben zu Lebensmittelallergien, Ernährungsanforderungen oder Gesundheitszustand machen, handelt es sich um besondere Kategorien personenbezogener Daten gemäß Art. 9 DSGVO. Wir verarbeiten diese Angaben ausschließlich zur Berücksichtigung Ihrer Bedürfnisse und zur Gewährleistung Ihrer Sicherheit. Die Daten werden nicht über das Küchen- und Servicepersonal Ihrer Reservierung hinaus weitergegeben.',
        ],
        'changes' => [
            'title' => 'Änderungen dieser Erklärung',
            'body'  => 'Wir können diese Datenschutzerklärung von Zeit zu Zeit aktualisieren. Wesentliche Änderungen werden auf dieser Seite mit einem aktualisierten Datum veröffentlicht. Die weitere Nutzung der Website nach der Veröffentlichung von Änderungen gilt als Zustimmung zur aktualisierten Erklärung.',
        ],
        'contact' => [
            'title' => 'Kontakt',
        ],
    ],

    // ─── Cookie-Richtlinie ───────────────────────────────────────────────────
    'cookies' => [
        'page_intro' => 'Informationen zu Cookies und ähnlichen Technologien, die auf dieser Website eingesetzt werden.',
        'about' => [
            'title'       => 'Über diese Richtlinie',
            'body'        => 'Diese Cookie-Richtlinie erläutert, was Cookies sind, welche wir verwenden, warum wir sie einsetzen und wie Sie diese kontrollieren können.',
            'updated'     => '1. März 2026',
            'privacy_ref' => 'Diese Richtlinie ist im Zusammenhang mit unserer Datenschutzerklärung zu lesen.',
        ],
        'what_is' => [
            'title' => 'Was sind Cookies?',
            'body'  => 'Cookies sind kleine Textdateien, die von besuchten Websites auf Ihrem Gerät gespeichert werden. Sie werden häufig eingesetzt, um Websites funktionsfähig zu machen, die Effizienz zu verbessern und Websitebetreibern Analyse- und Personalisierungsinformationen bereitzustellen.',
            'note'  => 'Wir können auch ähnliche Tracking-Technologien wie den lokalen Browserspeicher (Local Storage) verwenden, um Ihre Cookie-Einwilligungspräferenz zu speichern.',
        ],
        'legal_basis' => [
            'title'          => 'Rechtsgrundlage und Ihre Einwilligung',
            'body'           => 'Gemäß der DSGVO (Verordnung (EU) 2016/679) und dem italienischen Gesetzesdekret 69/2012 (ePrivacy) erfordern nicht notwendige Cookies Ihre vorherige, informierte und freiwillig erteilte Einwilligung, bevor sie auf Ihrem Gerät gespeichert werden.',
            'when_you_visit' => 'Beim ersten Besuch unserer Website wird ein Cookie-Einwilligungsbanner angezeigt. Sie können:',
            'option_all'     => 'Alle akzeptieren — sowohl notwendige als auch Analyse-Cookies zulassen.',
            'option_nec'     => 'Nur notwendige akzeptieren — ausschließlich für den Websitebetrieb unbedingt erforderliche Cookies zulassen. Es werden keine Analysedaten erhoben.',
            'storage_note'   => 'Ihre Präferenz wird lokal auf Ihrem Gerät für bis zu 12 Monate gespeichert. Sie können Ihre Wahl jederzeit über die nachstehende Schaltfläche oder durch Löschen der Browser-Cookies ändern.',
            'manage_btn'     => 'Cookie-Einstellungen verwalten',
        ],
        'categories' => [
            'title'              => 'Cookie-Kategorien',
            'col_category'       => 'Kategorie',
            'col_consent'        => 'Einwilligung erforderlich?',
            'col_purpose'        => 'Zweck',
            'necessary_label'    => 'Unbedingt Notwendig',
            'necessary_consent'  => 'Nein — immer aktiv',
            'necessary_purpose'  => 'Unverzichtbar für den Websitebetrieb. Umfasst CSRF-Sicherheitstoken und Sitzungsverwaltung. Kann nicht deaktiviert werden.',
            'functional_label'   => 'Funktionell',
            'functional_consent' => 'Nein — immer aktiv',
            'functional_purpose' => 'Speichert Ihre Cookie-Einwilligungspräferenz, damit das Banner nicht auf jeder Seite erscheint.',
            'analytics_label'    => 'Analyse und Leistung',
            'analytics_consent'  => 'Ja — Opt-in erforderlich',
            'analytics_purpose'  => 'Misst anonyme Nutzungstrends und hilft uns, Website-Inhalte zu verbessern. Wird erst nach Ihrer Einwilligung geladen.',
        ],
        'list' => [
            'title'            => 'Von uns verwendete Cookies',
            'col_cookie'       => 'Cookie / Schlüssel',
            'col_category'     => 'Kategorie',
            'col_purpose'      => 'Zweck',
            'col_duration'     => 'Laufzeit',
            'xsrf_purpose'     => 'CSRF-Schutz für die Formularübermittlung.',
            'session_purpose'  => 'Verwaltet die Web-Sitzung.',
            'consent_purpose'  => 'Speichert Ihre Cookie-Einwilligungsentscheidung, damit das Banner nicht bei jedem Besuch erscheint.',
            'ga_purpose'       => 'Google Analytics — unterscheidet eindeutige Nutzer für anonyme Besuchsmessungen.',
            'gid_purpose'      => 'Google Analytics — gruppiert das Nutzerverhalten für 24-Stunden-Analysen.',
            'gat_purpose'      => 'Google Analytics — begrenzt die Anfragerate an den Analyseserver.',
            'duration_session' => 'Sitzung',
            'duration_12m'     => '12 Monate',
            'duration_2y'      => '2 Jahre',
            'duration_24h'     => '24 Stunden',
            'duration_1m'      => '1 Minute',
            'cat_necessary'    => 'Unbedingt Notwendig',
            'cat_functional'   => 'Funktionell',
            'cat_analytics'    => 'Analyse (Opt-in)',
        ],
        'analytics' => [
            'title'         => 'Analyse und Drittanbieterdienste',
            'body'          => 'Wir nutzen Google Analytics (betrieben von Google LLC), um zu verstehen, wie Besucher die Website verwenden. Analyse-Cookies werden erst nach Ihrer Einwilligung geladen. Die erhobenen Daten sind anonymisiert und aggregiert — sie werden nicht zur persönlichen Identifikation verwendet.',
            'optout_label'  => 'Google Analytics deaktivieren:',
            'privacy_label' => 'Google Datenschutzerklärung:',
            'transfers'     => 'An Google übermittelte Daten können in den USA verarbeitet werden. Google LLC nimmt am EU-US-Datenschutzrahmen teil und bietet geeignete Garantien gemäß Art. 46 DSGVO.',
        ],
        'browser' => [
            'title'   => 'Cookie-Verwaltung im Browser',
            'intro'   => 'Zusätzlich zu unserem Einwilligungsbanner können Sie Cookies direkt in Ihrem Browser verwalten und löschen. Weitere Informationen finden Sie in der Hilfedokumentation Ihres Browsers:',
            'chrome'  => 'Google Chrome — Cookies verwalten',
            'firefox' => 'Mozilla Firefox — Cookies verwalten',
            'safari'  => 'Apple Safari — Cookies verwalten',
            'edge'    => 'Microsoft Edge — Cookies verwalten',
            'warning' => 'Bitte beachten Sie, dass das Blockieren aller Cookies die Website-Funktionalität beeinträchtigen kann, einschließlich der Möglichkeit, Reservierungsformulare abzusenden.',
        ],
        'withdraw' => [
            'title' => 'Widerruf der Einwilligung',
            'intro' => 'Sie können Ihre Einwilligung zu Analyse-Cookies jederzeit widerrufen:',
            'items' => [
                'banner'  => 'Durch Klick auf die Schaltfläche "Cookie-Einstellungen verwalten" oben.',
                'clear'   => 'Durch Löschen von Cookies und Local Storage im Browser, was Ihre Präferenz zurücksetzt und das Einwilligungsbanner beim nächsten Besuch erneut anzeigt.',
                'addon'   => 'Durch Installation des Browser-Add-ons zur Deaktivierung von Google Analytics.',
            ],
            'note' => 'Der Widerruf der Einwilligung berührt nicht die Rechtmäßigkeit der bis zum Widerruf erfolgten Verarbeitung.',
        ],
        'changes' => [
            'title' => 'Änderungen dieser Richtlinie',
            'body'  => 'Diese Richtlinie kann periodisch aktualisiert werden, um Änderungen in Technologie, Recht oder unseren Praktiken widerzuspiegeln. Bitte prüfen Sie diese Seite regelmäßig. Bei wesentlichen Änderungen aktualisieren wir das Datum "Letzte Aktualisierung" am Seitenanfang.',
        ],
        'contact_footer' => 'Für Fragen zu Cookies wenden Sie sich bitte über die unten angegebene E-Mail-Adresse an uns.',
    ],

    // ─── Allgemeine Geschäftsbedingungen ─────────────────────────────────────
    'terms' => [
        'page_intro' => 'Bedingungen für die Nutzung dieser Website und der zugehörigen Dienstleistungen.',
        'agreement' => [
            'title'   => 'Zustimmung',
            'body'    => 'Durch den Zugriff auf oder die Nutzung dieser Website erklären Sie sich mit diesen Allgemeinen Geschäftsbedingungen einverstanden. Wenn Sie nicht einverstanden sind, nutzen Sie die Website bitte nicht. Diese Bedingungen können von Zeit zu Zeit aktualisiert werden; die weitere Nutzung nach Veröffentlichung von Änderungen gilt als Zustimmung zu den aktualisierten Bedingungen.',
            'updated' => '1. März 2026',
        ],
        'definitions' => [
            'title'         => 'Begriffsbestimmungen',
            'alpin_curry'   => 'Auch bezeichnet als "wir", "uns" oder "unser".',
            'service_label' => 'Dienstleistung',
            'service_body'  => 'Die Website, das Tischreservierungssystem, Menüinformationen und alle über die Website bereitgestellten Inhalte.',
            'user_label'    => 'Nutzer',
            'user_body'     => 'Jeder Besucher der Website, der nicht bei Alpin Curry beschäftigt ist. Auch bezeichnet als "Sie".',
            'website_label' => 'Website',
            'website_body'  => 'Die aktuell genutzte Website, einschließlich alpincurry.it und aller damit verbundenen Subdomains.',
        ],
        'use' => [
            'title' => 'Nutzung der Website',
            'items' => [
                'lawful'   => 'Die Website darf ausschließlich für rechtmäßige Zwecke und in einer Weise genutzt werden, die die Rechte anderer nicht verletzt.',
                'access'   => 'Es ist verboten, unbefugten Zugang zu Teilen der Website oder den zugrundeliegenden Systemen zu versuchen.',
                'false'    => 'Es ist verboten, falsche, irreführende oder betrügerische Informationen über die Formulare der Website zu übermitteln.',
                'scraping' => 'Automatisiertes Scraping, Crawling oder die Erhebung von Inhalten dieser Website ohne vorherige schriftliche Genehmigung sind untersagt.',
            ],
        ],
        'ip' => [
            'title' => 'Geistiges Eigentum',
            'body'  => 'Alle Inhalte dieser Website — einschließlich Texte, Grafiken, Logos, Fotos, Videos und Code — sind durch das anwendbare Recht zum Schutz des geistigen Eigentums geschützt und verbleiben im Eigentum von Alpin Curry oder seinen Lizenzgebern. Vervielfältigung, Weiterverbreitung oder kommerzielle Nutzung ohne vorherige schriftliche Genehmigung sind untersagt.',
            'note'  => 'Menüpunkte, Gerichtsbezeichnungen, Rezepte und Bilder sind Eigentum von Alpin Curry. Die Weitergabe von Links zu dieser Website ist gestattet, eine Vervielfältigung von Inhalten zu kommerziellen Zwecken jedoch nicht.',
        ],
        'reservations' => [
            'title' => 'Tischreservierungen',
            'items' => [
                'request'    => 'Über diese Website oder WhatsApp eingereichte Reservierungsanfragen sind lediglich Anfragen und keine bestätigten Buchungen, bis Sie eine ausdrückliche Bestätigung von uns per Telefon oder E-Mail erhalten haben.',
                'decline'    => 'Wir behalten uns das Recht vor, eine Reservierungsanfrage nach eigenem Ermessen abzulehnen, insbesondere in Stoßzeiten oder wenn keine Kapazität vorhanden ist.',
                'cancel'     => 'Sollten Sie eine Reservierung stornieren oder ändern müssen, bitten wir Sie, uns so früh wie möglich per Telefon oder E-Mail zu benachrichtigen. Bei kurzfristigen Absagen (innerhalb von 2 Stunden vor dem Reservierungszeitpunkt) können wir möglicherweise keine anderen Gäste mehr platzieren — wir bitten um Ihr Verständnis.',
                'our_cancel' => 'Sollten wir eine bestätigte Reservierung aufgrund unvorhergesehener Umstände nicht einhalten können, werden wir Sie über die angegebenen Kontaktdaten benachrichtigen und uns nach Kräften bemühen, eine alternative Zeit anzubieten.',
                'age'        => 'Reservierungsanfragen müssen von Personen ab 18 Jahren gestellt werden.',
                'walkin'     => 'Gäste ohne Reservierung sind je nach Verfügbarkeit herzlich willkommen.',
            ],
        ],
        'menu' => [
            'title' => 'Speisekarte, Preise und Verfügbarkeit',
            'items' => [
                'info'     => 'Menüpunkte und Preise auf dieser Website dienen ausschließlich der Information und können von der Speisekarte im Restaurant abweichen. Die Speisekarte im Restaurant hat zum Zeitpunkt des Besuchs Vorrang.',
                'vat'      => 'Alle Preise verstehen sich inklusive der gesetzlichen Mehrwertsteuer gemäß italienischem Steuerrecht.',
                'avail'    => 'Menüpunkte unterliegen der saisonalen Verfügbarkeit. Wir behalten uns vor, einen Artikel durch eine gleichwertige Alternative zu ersetzen, und informieren Sie, wenn ein Gericht nicht verfügbar ist.',
                'no_order' => 'Die Website unterstützt derzeit keine Online-Bestellungen oder Online-Zahlungen. Alle Bestellungen werden vor Ort im Restaurant aufgegeben und abgerechnet.',
            ],
        ],
        'allergen' => [
            'title'         => 'Allergen- und Diätinformationen',
            'compliance'    => 'In Übereinstimmung mit der EU-Verordnung Nr. 1169/2011 und den anwendbaren italienischen Durchführungsbestimmungen sind Allergeninformationen zu unseren Gerichten verfügbar:',
            'items'         => [
                'menu'    => 'In unserer gedruckten und digitalen Speisekarte, wo angegeben.',
                'request' => 'Auf Anfrage bei unserem Personal jederzeit.',
            ],
            'allergen_list' => 'Die 14 kennzeichnungspflichtigen Allergene umfassen: Gluten, Krebstiere, Eier, Fisch, Erdnüsse, Soja, Milch/Milchprodukte, Schalenfrüchte, Sellerie, Senf, Sesam, Schwefeldioxid/Sulfite, Lupinen und Weichtiere.',
            'warning'       => 'Wenn Sie oder ein Mitglied Ihrer Gruppe an einer Lebensmittelallergie, Intoleranz oder anderen Ernährungsanforderung leiden, informieren Sie bitte unser Personal vor der Bestellung.',
            'disclaimer'    => 'Obwohl wir alle zumutbaren Vorsichtsmaßnahmen treffen, werden in unserer Küche mehrere Allergene verarbeitet, und wir können keine allergenfreie Umgebung garantieren. Wir übernehmen keine Haftung für Reaktionen, die auf die Nichtangabe einer Allergie vor der Bestellung zurückzuführen sind.',
        ],
        'liability' => [
            'title'            => 'Haftung und Haftungsausschlüsse',
            'as_is'            => 'Die Website wird "wie besehen" und "je nach Verfügbarkeit" bereitgestellt. Wir bemühen uns nach Kräften, die Informationen aktuell und korrekt zu halten, übernehmen jedoch keine Gewähr für die Vollständigkeit, Richtigkeit oder Verlässlichkeit der Inhalte.',
            'limit'            => 'Im größtmöglichen nach anwendbarem Recht zulässigen Umfang (einschließlich des italienischen Gesetzesdekrets 206/2005 — Verbraucherschutzgesetz) schließt Alpin Curry die Haftung für mittelbare, zufällige und Folgeschäden aus der Nutzung dieser Website oder dem Vertrauen auf ihre Inhalte aus.',
            'exclusions_intro' => 'Keine Bestimmung dieser Bedingungen schränkt die Haftung für folgende Fälle ein oder schließt sie aus:',
            'exclusions'       => [
                'death'    => 'Tod oder Körperverletzung durch unsere Fahrlässigkeit.',
                'fraud'    => 'Betrug oder arglistige Täuschung.',
                'law'      => 'Sonstige Haftung, die nach italienischem oder EU-Recht nicht ausgeschlossen oder beschränkt werden kann.',
                'consumer' => 'Gesetzliche Verbraucherrechte, auf die gemäß dem italienischen Gesetzesdekret 206/2005 nicht verzichtet werden kann.',
            ],
        ],
        'links' => [
            'title' => 'Drittanbieter-Links',
            'body'  => 'Diese Website kann Links zu Websites Dritter enthalten (z. B. Google Maps oder WhatsApp). Wir übernehmen keine Verantwortung für die Inhalte oder Datenschutzpraktiken dieser Websites. Links dienen ausschließlich der Bequemlichkeit und stellen keine Empfehlung dar.',
        ],
        'changes' => [
            'title' => 'Änderungen dieser Bedingungen',
            'body'  => 'Wir können diese Allgemeinen Geschäftsbedingungen von Zeit zu Zeit aktualisieren. Die aktualisierte Version wird auf dieser Seite mit einem überarbeiteten Datum "Letzte Aktualisierung" veröffentlicht. Bei wesentlichen Änderungen werden wir Sie nach Möglichkeit darauf hinweisen. Die weitere Nutzung nach Veröffentlichung gilt als Zustimmung zu den aktualisierten Bedingungen.',
        ],
        'law' => [
            'title'         => 'Anwendbares Recht und Gerichtsstand',
            'body'          => 'Diese Allgemeinen Geschäftsbedingungen unterliegen italienischem Recht. Streitigkeiten aus oder im Zusammenhang mit diesen Bedingungen unterliegen der nicht ausschließlichen Zuständigkeit der italienischen Gerichte, insbesondere des für :city zuständigen Gerichts.',
            'consumer_note' => 'Wenn Sie Verbraucher mit gewöhnlichem Aufenthalt in einem anderen EU-Mitgliedstaat sind, können Sie auch die Gerichte Ihres Wohnsitzlandes anrufen, und es können die zwingenden Verbraucherschutzvorschriften Ihres Landes Anwendung finden.',
            'language_note' => 'Die verbindliche Sprache dieser Allgemeinen Geschäftsbedingungen ist Italienisch. Übersetzungen in andere Sprachen dienen ausschließlich der Bequemlichkeit.',
        ],
        'contact' => [
            'title' => 'Kontakt',
        ],
    ],

    // ─── Impressum ───────────────────────────────────────────────────────────
    'impressum' => [
        'page_intro' => 'Unternehmens- und Kontaktinformationen gemäß den gesetzlichen Offenlegungspflichten (Art. 2250 it. ZGB und D.Lgs. 70/2003).',
        'owner' => [
            'title' => 'Firmenname und Anschrift',
        ],
        'contact' => [
            'title' => 'Kontaktinformationen',
            'email' => 'E-Mail',
            'pec'   => 'PEC (Zertifizierte E-Mail)',
            'phone' => 'Telefon',
        ],
        'company' => [
            'title'       => 'Unternehmensregistrierungsdaten',
            'vat'         => 'USt-IdNr. (Partita IVA)',
            'vat_missing' => 'Auf Anfrage erhältlich oder im Restaurant ausgehängt.',
            'tax'         => 'Steuernummer / REA-Nummer',
            'codice'      => 'Codice destinatario (E-Rechnung)',
        ],
        'representative' => [
            'title' => 'Gesetzlicher Vertreter',
            'body'  => 'Das Unternehmen wird durch seinen/seine gesetzlichen Vertreter vertreten, wie beim zuständigen Handelskammerregister (Camera di Commercio) eingetragen. Für formelle rechtliche Kommunikation nutzen Sie bitte die oben angegebenen Kontaktdaten oder schreiben Sie uns an die aufgeführte Adresse.',
        ],
        'authority' => [
            'title' => 'Zuständige Aufsichtsbehörde',
            'body'  => 'Die Gastronomiebetriebe unterliegen der Aufsicht der zuständigen lokalen Gesundheitsbehörde (ASL/APSS) für die Provinz :state, Autonome Provinz Bozen/Südtirol.',
        ],
        'legal_notice' => [
            'title'    => 'Rechtliche Hinweise und Haftung für Inhalte',
            'accuracy' => 'Die Inhalte dieser Website wurden mit größter Sorgfalt und nach bestem Wissen zusammengestellt. Für die Vollständigkeit, Richtigkeit und Aktualität der bereitgestellten Informationen kann jedoch keine Haftung übernommen werden.',
            'links'    => 'Wir sind für die Inhalte extern verlinkter Websites nicht verantwortlich. Für die Inhalte der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich. Zum Zeitpunkt der Verlinkung waren keine Rechtsverstöße erkennbar. Sollten wir von Rechtsverstößen Kenntnis erlangen, werden die betreffenden Links unverzüglich entfernt.',
            'decree'   => 'Gemäß D.Lgs. 70/2003 (Dekret über den elektronischen Geschäftsverkehr) wird diese Website als Dienst der Informationsgesellschaft von :name betrieben.',
        ],
        'copyright' => [
            'title' => 'Urheberrecht',
            'body'  => 'Alle Inhalte dieser Website — Texte, Fotos, Grafiken, Logos und Videos — sind durch das italienische und europäische Urheberrecht geschützt. Eine Vervielfältigung oder Nutzung, ganz oder teilweise, bedarf der vorherigen schriftlichen Genehmigung von :name.',
        ],
        'odr' => [
            'title'  => 'Streitbeilegung',
            'eu_odr' => 'Die Europäische Kommission stellt für Verbraucher innerhalb der EU eine Online-Plattform zur Streitbeilegung (OS) bereit:',
            'note'   => 'Wir sind nicht verpflichtet, an alternativen Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen, sind jedoch bereit, Lösungen direkt zu besprechen. Bitte kontaktieren Sie uns unter der oben angegebenen Adresse.',
        ],
    ],

    // ─── Cookie-Einwilligungsbanner ──────────────────────────────────────────
    'consent' => [
        'text'        => 'Wir verwenden Cookies, um den ordnungsgemäßen Betrieb dieser Website sicherzustellen (notwendige Cookies) und — mit Ihrer Einwilligung — um die Nutzung der Website zu analysieren (Analyse-Cookies). Weitere Informationen finden Sie in unserer',
        'cookie_link' => 'Cookie-Richtlinie',
        'and'         => 'und unserer',
        'privacy_link'=> 'Datenschutzerklärung',
        'accept_all'  => 'Alle akzeptieren',
        'necessary'   => 'Nur Notwendige',
        'manage'      => 'Cookie-Einstellungen verwalten',
        'aria_label'  => 'Cookie-Einwilligung',
    ],
];
