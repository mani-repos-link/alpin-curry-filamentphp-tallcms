<?php

return [

    // ─── Informativa sulla Privacy ───────────────────────────────────────────
    'privacy' => [
        'page_intro'  => 'Questa informativa descrive come Alpin Curry tratta i dati personali quando utilizzi il nostro sito web e i nostri servizi.',
        'scope' => [
            'title'   => 'Ambito di Applicazione',
            'body'    => 'La presente informativa si applica tra gli utenti del sito web e Alpin Curry in qualità di titolare del sito e fornitore di servizi.',
            'updated' => '1 marzo 2026',
        ],
        'controller' => [
            'title'           => 'Titolare del Trattamento e Normativa',
            'label'           => 'Titolare del trattamento',
            'contact_label'   => 'Contatto per questioni relative ai dati',
            'framework_label' => 'Quadro normativo',
            'framework_body'  => 'Regolamento (UE) 2016/679 (GDPR) e Decreto Legislativo 196/2003 (Codice in materia di protezione dei dati personali), come modificato dal D.Lgs. 101/2018.',
            'dpo_note'        => 'Per questa tipologia di attività non è formalmente richiesta la nomina di un Responsabile della Protezione dei Dati (DPO). Per qualsiasi richiesta relativa alla privacy, si prega di utilizzare il contatto indicato sopra.',
        ],
        'collect' => [
            'title'         => 'Dati Raccolti',
            'items'         => [
                'identity'    => 'Dati identificativi e di contatto, quali nome, numero di telefono e indirizzo e-mail, raccolti al momento della richiesta di prenotazione o di contatto.',
                'reservation' => 'Dettagli della prenotazione, quali data, orario, numero di ospiti ed eventuali note fornite.',
                'technical'   => 'Dati tecnici e di utilizzo, quali indirizzo IP, tipo di browser e pagine visitate, raccolti automaticamente durante la navigazione sul sito.',
                'cookies'     => 'Dati relativi a cookie e tecnologie di tracciamento, come descritto nella nostra Informativa sui Cookie.',
            ],
            'children_note' => 'Non raccogliamo consapevolmente dati di minori di 16 anni. Se si ritiene che un minore abbia fornito dati personali, si prega di contattarci immediatamente.',
        ],
        'collection_method' => [
            'title' => 'Modalità di Raccolta dei Dati',
            'items' => [
                'forms'  => 'Direttamente da Lei tramite moduli di prenotazione, telefonate ed e-mail.',
                'auto'   => 'Automaticamente tramite cookie e tecnologie analoghe durante la navigazione sul sito (si rimanda all\'Informativa sui Cookie per i dettagli e la gestione delle preferenze).',
                'public' => 'Da fonti pubbliche, ove necessario per adempimenti normativi.',
            ],
        ],
        'bases' => [
            'title' => 'Basi Giuridiche del Trattamento',
            'items' => [
                'contract'   => ['label' => 'Esecuzione di un contratto',         'ref' => 'Art. 6(1)(b) GDPR', 'body' => 'per la gestione delle richieste di prenotazione e le relative comunicazioni.'],
                'consent'    => ['label' => 'Consenso',                           'ref' => 'Art. 6(1)(a) GDPR', 'body' => 'per i cookie analitici e le comunicazioni di marketing facoltative. Il consenso può essere revocato in qualsiasi momento senza pregiudicare la liceità del trattamento precedente alla revoca.'],
                'obligation' => ['label' => 'Adempimento di un obbligo legale',  'ref' => 'Art. 6(1)(c) GDPR', 'body' => 'per obblighi fiscali, contabili e normativi.'],
                'interest'   => ['label' => 'Legittimo interesse',               'ref' => 'Art. 6(1)(f) GDPR', 'body' => 'per la sicurezza del sito, la prevenzione delle frodi e il miglioramento della qualità del servizio, nei limiti in cui tali interessi non prevalgano sui Suoi diritti.'],
            ],
        ],
        'disclosure' => [
            'title'   => 'Comunicazione dei Dati',
            'intro'   => 'I Suoi dati potranno essere comunicati alle seguenti categorie di destinatari, esclusivamente nella misura necessaria per le finalità indicate:',
            'items'   => [
                'hosting'     => ['label' => 'Fornitori di hosting e IT',                         'body' => 'per la gestione e la manutenzione del sito web e dell\'infrastruttura e-mail.'],
                'analytics'   => ['label' => 'Fornitori di servizi analitici (previo consenso)', 'body' => 'come Google Analytics, per statistiche aggregate sull\'utilizzo del sito.'],
                'advisors'    => ['label' => 'Consulenti professionali',                          'body' => 'commercialisti e legali che operano in regime di riservatezza.'],
                'authorities' => ['label' => 'Autorità pubbliche',                               'body' => 'ove richiesto dalla legge o da ordine legale valido.'],
            ],
            'no_sell' => 'Non vendiamo né cediamo a terzi i Suoi dati personali.',
        ],
        'retention' => [
            'title' => 'Conservazione dei Dati',
            'items' => [
                'reservation' => ['label' => 'Dati di prenotazione',         'body' => 'conservati per un massimo di 24 mesi dalla data della prenotazione per finalità di servizio e gestione di eventuali controversie.'],
                'tax'         => ['label' => 'Documenti contabili e fiscali', 'body' => 'conservati per 10 anni ai sensi della normativa fiscale italiana (D.P.R. 633/1972 e D.P.R. 600/1973).'],
                'analytics'   => ['label' => 'Dati analitici',               'body' => 'conservati secondo le impostazioni di conservazione del fornitore del servizio (Google Analytics: 14 mesi per impostazione predefinita).'],
                'consent'     => ['label' => 'Registrazioni del consenso ai cookie', 'body' => 'conservate per un massimo di 12 mesi.'],
            ],
            'note' => 'Al termine del periodo di conservazione applicabile, i dati sono cancellati in modo sicuro o anonimizzati.',
        ],
        'rights' => [
            'title'        => 'I Suoi Diritti ai sensi del GDPR',
            'intro'        => 'Lei ha i seguenti diritti in relazione ai Suoi dati personali:',
            'items'        => [
                'access'      => ['label' => 'Diritto di accesso',                    'body' => 'richiedere una copia dei dati personali che deteniamo a Suo nome.'],
                'rectify'     => ['label' => 'Diritto di rettifica',                  'body' => 'richiedere la correzione di dati inesatti o incompleti.'],
                'erasure'     => ['label' => 'Diritto alla cancellazione',            'body' => 'richiedere la cancellazione dei Suoi dati qualora non sussista più un motivo legittimo per il trattamento.'],
                'restriction' => ['label' => 'Diritto alla limitazione del trattamento', 'body' => 'richiedere la limitazione del trattamento in determinate circostanze.'],
                'portability' => ['label' => 'Diritto alla portabilità dei dati',    'body' => 'ricevere i Suoi dati in un formato strutturato e leggibile da dispositivo, ove tecnicamente applicabile.'],
                'object'      => ['label' => 'Diritto di opposizione',               'body' => 'opporsi al trattamento basato sul legittimo interesse o a fini di marketing diretto.'],
                'withdraw'    => ['label' => 'Diritto di revoca del consenso',       'body' => 'revocare il consenso in qualsiasi momento per i trattamenti basati sul consenso, senza pregiudicare la liceità del trattamento precedente alla revoca.'],
            ],
            'contact_note' => 'Per esercitare uno qualsiasi di questi diritti, ci contatti all\'indirizzo e-mail indicato di seguito. Risponderemo entro 30 giorni.',
        ],
        'dpa' => [
            'title'             => 'Diritto di Proporre Reclamo',
            'intro'             => 'Lei ha il diritto di proporre reclamo in qualsiasi momento all\'autorità di controllo competente in materia di protezione dei dati personali. In Italia, questa è:',
            'authority_name'    => 'Garante per la protezione dei dati personali',
            'authority_address' => 'Piazza Venezia 11, 00187 Roma, Italia',
            'authority_website' => 'https://www.garanteprivacy.it',
            'note'              => 'Potrà altresì proporre reclamo all\'autorità di controllo dello Stato membro dell\'UE in cui risiede abitualmente o in cui si è verificata la presunta violazione.',
        ],
        'security' => [
            'title'      => 'Sicurezza e Trasferimenti Internazionali',
            'safeguards' => 'Adottiamo misure tecniche e organizzative adeguate per proteggere i dati personali da accessi non autorizzati, perdita o distruzione. L\'accesso ai dati personali è limitato al personale autorizzato.',
            'breach'     => 'In caso di violazione dei dati personali che possa comportare un rischio per i diritti e le libertà degli interessati, notificheremo l\'autorità di controllo competente entro 72 ore dalla scoperta dell\'evento, ai sensi dell\'art. 33 GDPR.',
            'transfers'  => 'Non trasferiamo abitualmente dati personali al di fuori dello Spazio Economico Europeo (SEE). Laddove i servizi di analisi comportino trasferimenti verso Paesi extra-SEE (come gli Stati Uniti), tali trasferimenti sono coperti dalle Clausole Contrattuali Standard dell\'UE o da garanzie equivalenti ai sensi dell\'art. 46 GDPR.',
            'profiling'  => 'Non utilizziamo processi decisionali automatizzati né profilazioni che producano effetti giuridici significativi.',
        ],
        'allergen' => [
            'title' => 'Informazioni sugli Allergeni e le Diete Speciali',
            'body'  => 'Qualora Lei fornisca informazioni su allergie alimentari, esigenze dietetiche o condizioni di salute in relazione a una prenotazione, tali informazioni costituiscono dati particolari ai sensi dell\'art. 9 GDPR. Li trattiamo esclusivamente allo scopo di soddisfare le Sue esigenze e garantire la Sua sicurezza. Tali dati non vengono condivisi al di fuori del personale di cucina e di sala coinvolto nella Sua prenotazione.',
        ],
        'changes' => [
            'title' => 'Modifiche alla Presente Informativa',
            'body'  => 'La presente informativa potrà essere aggiornata periodicamente. Le modifiche sostanziali saranno pubblicate su questa pagina con la data di aggiornamento. Il proseguimento dell\'utilizzo del sito dopo la pubblicazione delle modifiche costituisce accettazione dell\'informativa aggiornata.',
        ],
        'contact' => [
            'title' => 'Contatti',
        ],
    ],

    // ─── Informativa sui Cookie ──────────────────────────────────────────────
    'cookies' => [
        'page_intro' => 'Informazioni sui cookie e sulle tecnologie di tracciamento utilizzate su questo sito web.',
        'about' => [
            'title'       => 'Informazioni sulla Presente Informativa',
            'body'        => 'La presente Informativa sui Cookie spiega cosa sono i cookie, quali utilizziamo, per quali motivi e come è possibile gestirli.',
            'updated'     => '1 marzo 2026',
            'privacy_ref' => 'La presente informativa va letta congiuntamente alla nostra Informativa sulla Privacy.',
        ],
        'what_is' => [
            'title' => 'Cosa Sono i Cookie?',
            'body'  => 'I cookie sono piccoli file di testo memorizzati sul dispositivo dell\'utente dai siti web visitati. Sono ampiamente utilizzati per garantire il corretto funzionamento dei siti, migliorarne l\'efficienza e fornire informazioni analitiche e di personalizzazione ai gestori dei siti.',
            'note'  => 'Potremmo utilizzare anche tecnologie di tracciamento analoghe, come il local storage, per conservare le preferenze di consenso ai cookie sul dispositivo dell\'utente.',
        ],
        'legal_basis' => [
            'title'          => 'Base Giuridica e Consenso',
            'body'           => 'Ai sensi del GDPR (Regolamento (UE) 2016/679) e del D.Lgs. 69/2012 (ePrivacy), i cookie non essenziali richiedono il Suo previo, informato e libero consenso prima di essere installati sul Suo dispositivo.',
            'when_you_visit' => 'Alla prima visita del sito web viene visualizzato un banner di consenso ai cookie. Lei può:',
            'option_all'     => 'Accettare tutti — consentire sia i cookie strettamente necessari che i cookie analitici.',
            'option_nec'     => 'Accettare solo i necessari — consentire esclusivamente i cookie indispensabili per il funzionamento del sito. Non verrà raccolta alcuna informazione analitica.',
            'storage_note'   => 'La Sua preferenza viene conservata localmente sul dispositivo per un massimo di 12 mesi. Potrà modificare la Sua scelta in qualsiasi momento tramite il pulsante qui sotto oppure cancellando i cookie del browser.',
            'manage_btn'     => 'Gestisci le Preferenze Cookie',
        ],
        'categories' => [
            'title'              => 'Categorie di Cookie',
            'col_category'       => 'Categoria',
            'col_consent'        => 'Consenso richiesto?',
            'col_purpose'        => 'Finalità',
            'necessary_label'    => 'Strettamente Necessari',
            'necessary_consent'  => 'No — sempre attivi',
            'necessary_purpose'  => 'Indispensabili per il funzionamento del sito. Includono i token di sicurezza CSRF e la gestione della sessione. Non possono essere disabilitati.',
            'functional_label'   => 'Funzionalità',
            'functional_consent' => 'No — sempre attivi',
            'functional_purpose' => 'Memorizzano la preferenza di consenso ai cookie per non riproporre il banner ad ogni pagina.',
            'analytics_label'    => 'Analitici e di Prestazione',
            'analytics_consent'  => 'Sì — opt-in richiesto',
            'analytics_purpose'  => 'Misurano le tendenze di utilizzo in forma anonima e aiutano a migliorare i contenuti del sito. Vengono caricati solo dopo il consenso dell\'utente.',
        ],
        'list' => [
            'title'            => 'Cookie Utilizzati',
            'col_cookie'       => 'Cookie / Chiave',
            'col_category'     => 'Categoria',
            'col_purpose'      => 'Finalità',
            'col_duration'     => 'Durata',
            'xsrf_purpose'     => 'Protezione CSRF per l\'invio dei moduli.',
            'session_purpose'  => 'Gestisce la sessione web.',
            'consent_purpose'  => 'Memorizza la scelta di consenso ai cookie per non mostrare il banner a ogni visita.',
            'ga_purpose'       => 'Google Analytics — distingue gli utenti unici per la misurazione anonima delle visite.',
            'gid_purpose'      => 'Google Analytics — raggruppa il comportamento degli utenti nell\'arco delle 24 ore.',
            'gat_purpose'      => 'Google Analytics — limita la frequenza delle richieste al server analitico.',
            'duration_session' => 'Sessione',
            'duration_12m'     => '12 mesi',
            'duration_2y'      => '2 anni',
            'duration_24h'     => '24 ore',
            'duration_1m'      => '1 minuto',
            'cat_necessary'    => 'Strettamente Necessari',
            'cat_functional'   => 'Funzionalità',
            'cat_analytics'    => 'Analitici (opt-in)',
        ],
        'analytics' => [
            'title'         => 'Analisi e Servizi di Terze Parti',
            'body'          => 'Utilizziamo Google Analytics (gestito da Google LLC) per comprendere come i visitatori utilizzano il sito. I cookie analitici vengono caricati solo dopo il consenso dell\'utente. I dati raccolti sono anonimi e aggregati — non vengono utilizzati per identificare personalmente l\'utente.',
            'optout_label'  => 'Opt-out di Google Analytics:',
            'privacy_label' => 'Informativa sulla privacy di Google:',
            'transfers'     => 'I dati trasferiti a Google possono essere elaborati negli Stati Uniti. Google LLC partecipa al framework EU-US Data Privacy Framework e fornisce garanzie adeguate ai sensi dell\'art. 46 GDPR.',
        ],
        'browser' => [
            'title'   => 'Gestione dei Cookie nel Browser',
            'intro'   => 'Oltre al nostro banner di consenso, è possibile gestire ed eliminare i cookie direttamente nel browser. Consultare la documentazione di supporto del proprio browser:',
            'chrome'  => 'Google Chrome — Gestione dei cookie',
            'firefox' => 'Mozilla Firefox — Gestione dei cookie',
            'safari'  => 'Apple Safari — Gestione dei cookie',
            'edge'    => 'Microsoft Edge — Gestione dei cookie',
            'warning' => 'Si ricorda che il blocco di tutti i cookie potrebbe compromettere le funzionalità del sito, inclusa la possibilità di inviare moduli di prenotazione.',
        ],
        'withdraw' => [
            'title' => 'Revoca del Consenso',
            'intro' => 'È possibile revocare il consenso ai cookie analitici in qualsiasi momento:',
            'items' => [
                'banner'  => 'Cliccando il pulsante "Gestisci le Preferenze Cookie" qui sopra.',
                'clear'   => 'Cancellando i cookie e il local storage del browser, il che ripristinerà la preferenza e mostrerà nuovamente il banner alla visita successiva.',
                'addon'   => 'Installando il componente aggiuntivo per browser per la disattivazione di Google Analytics.',
            ],
            'note' => 'La revoca del consenso non pregiudica la liceità del trattamento effettuato prima della revoca.',
        ],
        'changes' => [
            'title' => 'Modifiche alla Presente Informativa',
            'body'  => 'La presente informativa potrà essere aggiornata periodicamente per riflettere cambiamenti tecnologici, normativi o delle nostre pratiche. Si invita a consultare questa pagina regolarmente. In caso di modifiche sostanziali, aggiorneremo la data "Ultimo aggiornamento" in cima alla pagina.',
        ],
        'contact_footer' => 'Per domande sui cookie, contattateci all\'indirizzo e-mail indicato di seguito.',
    ],

    // ─── Termini e Condizioni ────────────────────────────────────────────────
    'terms' => [
        'page_intro' => 'Condizioni che regolano l\'utilizzo del sito web e dei servizi correlati.',
        'agreement' => [
            'title'   => 'Accettazione dei Termini',
            'body'    => 'Accedendo o utilizzando questo sito web, Lei accetta i presenti Termini e Condizioni. In caso contrario, La preghiamo di non utilizzare il sito. I presenti termini potranno essere aggiornati; il proseguimento dell\'utilizzo dopo la pubblicazione delle modifiche costituisce accettazione dei termini aggiornati.',
            'updated' => '1 marzo 2026',
        ],
        'definitions' => [
            'title'         => 'Definizioni',
            'alpin_curry'   => 'Denominato anche "noi", "ci" o "nostro".',
            'service_label' => 'Servizio',
            'service_body'  => 'Il sito web, il sistema di richiesta prenotazione, le informazioni sul menu e tutti i contenuti forniti attraverso il sito.',
            'user_label'    => 'Utente',
            'user_body'     => 'Qualsiasi visitatore del sito non dipendente di Alpin Curry. Denominato anche "Lei".',
            'website_label' => 'Sito web',
            'website_body'  => 'Il sito web attualmente in uso, inclusi alpincurry.it e qualsiasi sottodominio associato.',
        ],
        'use' => [
            'title' => 'Utilizzo del Sito Web',
            'items' => [
                'lawful'   => 'Il sito web deve essere utilizzato esclusivamente per scopi leciti e in modo tale da non ledere i diritti altrui.',
                'access'   => 'È vietato tentare di accedere in modo non autorizzato a qualsiasi parte del sito o dei sistemi sottostanti.',
                'false'    => 'È vietato inviare informazioni false, fuorvianti o fraudolente attraverso i moduli del sito.',
                'scraping' => 'Lo scraping automatizzato, il crawling o la raccolta di contenuti da questo sito senza previo consenso scritto sono vietati.',
            ],
        ],
        'ip' => [
            'title' => 'Proprietà Intellettuale',
            'body'  => 'Tutti i contenuti del sito — inclusi testi, grafica, loghi, fotografie, video e codice — sono protetti dalla normativa applicabile in materia di proprietà intellettuale e rimangono di proprietà di Alpin Curry o dei suoi licenzianti. La riproduzione, la ridistribuzione o l\'uso commerciale senza previo consenso scritto sono vietati.',
            'note'  => 'Le voci del menu, i nomi dei piatti, le ricette e le immagini sono di proprietà esclusiva. È consentita la condivisione di link al sito, ma non la riproduzione dei contenuti a fini commerciali.',
        ],
        'reservations' => [
            'title' => 'Prenotazione dei Tavoli',
            'items' => [
                'request'    => 'Le richieste di prenotazione inviate tramite questo sito o via WhatsApp sono semplici richieste e non costituiscono prenotazioni confermate finché non si riceve un\'esplicita conferma da parte nostra per telefono o e-mail.',
                'decline'    => 'Ci riserviamo il diritto di rifiutare una richiesta di prenotazione a nostra discrezione, in particolare nei periodi di picco o quando la capacità non lo consente.',
                'cancel'     => 'In caso di necessità di cancellazione o modifica di una prenotazione, si prega di comunicarcelo il prima possibile per telefono o e-mail. Le cancellazioni tardive (entro 2 ore dall\'orario della prenotazione) potrebbero impedirci di accogliere altri ospiti — ringraziamo per la comprensione.',
                'our_cancel' => 'Qualora non riuscissimo a onorare una prenotazione confermata a causa di circostanze impreviste, La contatteremo tramite i recapiti forniti e faremo ogni ragionevole sforzo per proporre un orario alternativo.',
                'age'        => 'Le richieste di prenotazione devono essere effettuate da persone di età superiore ai 18 anni.',
                'walkin'     => 'I clienti senza prenotazione sono benvenuti in base alla disponibilità.',
            ],
        ],
        'menu' => [
            'title' => 'Menu, Prezzi e Disponibilità',
            'items' => [
                'info'     => 'Le voci del menu e i prezzi pubblicati sul sito sono forniti a titolo informativo e potrebbero differire dal menu in ristorante. Il menu in ristorante prevale al momento della consumazione.',
                'vat'      => 'Tutti i prezzi sono IVA inclusa ove applicabile ai sensi della normativa fiscale italiana.',
                'avail'    => 'Le voci del menu sono soggette a disponibilità stagionale. Ci riserviamo il diritto di sostituire un piatto con un\'alternativa equivalente, informando il cliente in caso di indisponibilità.',
                'no_order' => 'Il sito non supporta attualmente ordinazioni o pagamenti online. Tutte le ordinazioni vengono effettuate e saldate di persona presso il ristorante.',
            ],
        ],
        'allergen' => [
            'title'         => 'Informazioni sugli Allergeni e le Diete Speciali',
            'compliance'    => 'In conformità al Regolamento UE n. 1169/2011 e alle relative disposizioni nazionali di attuazione, le informazioni sugli allergeni presenti nei nostri piatti sono disponibili:',
            'items'         => [
                'menu'    => 'Sul menu cartaceo e digitale, ove indicato.',
                'request' => 'Su richiesta al personale in qualsiasi momento.',
            ],
            'allergen_list' => 'I 14 allergeni regolamentati sono: glutine, crostacei, uova, pesce, arachidi, soia, latte/latticini, frutta a guscio, sedano, senape, sesamo, anidride solforosa/solfiti, lupino e molluschi.',
            'warning'       => 'Se Lei o un membro del Suo gruppo soffre di allergie alimentari, intolleranze o altre esigenze dietetiche, si prega di informare il personale prima di ordinare.',
            'disclaimer'    => 'Pur adottando tutte le precauzioni ragionevoli, la nostra cucina maneggia molteplici allergeni e non possiamo garantire un ambiente completamente privo di allergeni. Non ci assumiamo alcuna responsabilità per reazioni derivanti dalla mancata dichiarazione di allergie prima dell\'ordinazione.',
        ],
        'liability' => [
            'title'            => 'Responsabilità e Limitazioni',
            'as_is'            => 'Il sito web è fornito "così com\'è" e "secondo disponibilità". Facciamo ogni ragionevole sforzo per mantenere le informazioni accurate e aggiornate, ma non garantiamo la completezza, l\'accuratezza o l\'affidabilità dei contenuti.',
            'limit'            => 'Nei limiti massimi consentiti dalla legge applicabile (incluso il D.Lgs. 206/2005 — Codice del Consumo), Alpin Curry esclude la responsabilità per danni indiretti, incidentali e consequenziali derivanti dall\'uso del sito o dall\'affidamento sui suoi contenuti.',
            'exclusions_intro' => 'Nessuna disposizione dei presenti termini limita o esclude la responsabilità per:',
            'exclusions'       => [
                'death'    => 'Morte o lesioni personali causate da nostra negligenza.',
                'fraud'    => 'Frode o dichiarazioni fraudolente.',
                'law'      => 'Qualsiasi altra responsabilità che non possa essere esclusa o limitata ai sensi della normativa italiana o dell\'UE.',
                'consumer' => 'I diritti dei consumatori che non possono essere derogati ai sensi del D.Lgs. 206/2005.',
            ],
        ],
        'links' => [
            'title' => 'Link a Siti di Terze Parti',
            'body'  => 'Il sito potrebbe contenere link a siti web di terze parti (come Google Maps o WhatsApp). Non siamo responsabili dei contenuti o delle pratiche in materia di privacy di tali siti. I link sono forniti unicamente per comodità e non costituiscono una raccomandazione.',
        ],
        'changes' => [
            'title' => 'Modifiche ai Presenti Termini',
            'body'  => 'Potremo aggiornare i presenti Termini e Condizioni periodicamente. La versione aggiornata sarà pubblicata su questa pagina con una data "Ultimo aggiornamento" rivista. In caso di modifiche sostanziali, ci adopereremo per segnalarle. Il proseguimento dell\'utilizzo del sito dopo la pubblicazione delle modifiche costituisce accettazione dei termini aggiornati.',
        ],
        'law' => [
            'title'         => 'Legge Applicabile e Foro Competente',
            'body'          => 'I presenti Termini e Condizioni sono regolati dalla legge italiana. Le controversie derivanti dai presenti termini sono soggette alla giurisdizione non esclusiva dei tribunali italiani, specificamente del tribunale competente per il circondario di :city.',
            'consumer_note' => 'Qualora Lei sia un consumatore residente in un altro Stato membro dell\'UE, potrà avere il diritto di adire i tribunali del Paese di residenza e potranno applicarsi le norme imperative a tutela dei consumatori del Paese di residenza.',
            'language_note' => 'La lingua vincolante dei presenti Termini e Condizioni è l\'italiano. Le traduzioni in altre lingue sono fornite a titolo di sola comodità.',
        ],
        'contact' => [
            'title' => 'Contatti',
        ],
    ],

    // ─── Impressum ───────────────────────────────────────────────────────────
    'impressum' => [
        'page_intro' => 'Informazioni aziendali e di contatto ai sensi degli obblighi di trasparenza (art. 2250 c.c. e D.Lgs. 70/2003).',
        'owner' => [
            'title' => 'Ragione Sociale e Sede',
        ],
        'contact' => [
            'title' => 'Informazioni di Contatto',
            'email' => 'E-mail',
            'pec'   => 'PEC (Posta Elettronica Certificata)',
            'phone' => 'Telefono',
        ],
        'company' => [
            'title'       => 'Dati Aziendali',
            'vat'         => 'Partita IVA',
            'vat_missing' => 'Disponibile su richiesta o esposta in ristorante.',
            'tax'         => 'Codice Fiscale / N. REA',
            'codice'      => 'Codice destinatario (fatturazione elettronica)',
        ],
        'representative' => [
            'title' => 'Rappresentante Legale',
            'body'  => 'L\'attività è rappresentata dal/dai legale/i rappresentante/i iscritti presso la competente Camera di Commercio. Per comunicazioni legali formali, si prega di utilizzare i recapiti sopra indicati o di scrivere all\'indirizzo elencato.',
        ],
        'authority' => [
            'title' => 'Autorità di Vigilanza',
            'body'  => 'L\'attività di ristorazione è soggetta alla vigilanza dell\'autorità sanitaria locale competente (ASL/APSS) per la Provincia di :state, Provincia Autonoma di Bolzano.',
        ],
        'legal_notice' => [
            'title'    => 'Note Legali e Responsabilità per i Contenuti',
            'accuracy' => 'I contenuti del sito sono stati redatti con cura e nel rispetto delle informazioni disponibili. Tuttavia, non possiamo garantire la completezza, l\'accuratezza o l\'attualità delle informazioni fornite.',
            'links'    => 'Non siamo responsabili dei contenuti di siti web esterni collegati al presente sito. I gestori di tali siti sono gli unici responsabili dei rispettivi contenuti. Al momento dell\'inserimento dei link non risultavano violazioni di legge. Qualora venissimo a conoscenza di eventuali illeciti, i link saranno rimossi tempestivamente.',
            'decree'   => 'Ai sensi del D.Lgs. 70/2003 (Decreto sul Commercio Elettronico), il presente sito è gestito come servizio della società dell\'informazione da :name.',
        ],
        'copyright' => [
            'title' => 'Copyright',
            'body'  => 'Tutti i contenuti del sito — testi, fotografie, grafica, loghi e video — sono protetti dalla legge italiana e dell\'UE sul diritto d\'autore. La riproduzione o l\'utilizzo, totale o parziale, richiedono il previo consenso scritto di :name.',
        ],
        'odr' => [
            'title'  => 'Risoluzione delle Controversie',
            'eu_odr' => 'La Commissione europea mette a disposizione dei consumatori dell\'UE una piattaforma per la risoluzione online delle controversie (ODR):',
            'note'   => 'Non siamo obbligati a partecipare a procedure di risoluzione alternativa delle controversie dinanzi a un organismo di arbitrato dei consumatori, ma siamo disponibili a discutere soluzioni direttamente. Si prega di contattarci all\'indirizzo sopra indicato.',
        ],
    ],

    // ─── Banner Consenso Cookie ──────────────────────────────────────────────
    'consent' => [
        'text'        => 'Utilizziamo cookie per garantire il corretto funzionamento del sito (strettamente necessari) e, con il Suo consenso, per analizzare le modalità di utilizzo del sito (analitici). Consulti la nostra',
        'cookie_link' => 'Informativa sui Cookie',
        'and'         => 'e la',
        'privacy_link'=> 'Informativa sulla Privacy',
        'accept_all'  => 'Accetta Tutti',
        'necessary'   => 'Solo Necessari',
        'manage'      => 'Gestisci le Preferenze Cookie',
        'aria_label'  => 'Consenso ai cookie',
    ],
];
