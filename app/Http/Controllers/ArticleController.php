<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

   public $articles = [
      [
         'id' => 1,
         'title' => 'Introduzione a PHP: La guida per principianti',
         'description' => 'Scopri le basi del linguaggio PHP e come iniziare a sviluppare applicazioni web dinamiche.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Luca Neri',
         'content' => 'PHP è un linguaggio di scripting lato server molto utilizzato per creare siti e applicazioni web dinamiche. In questa guida per principianti, imparerai a installare un ambiente di sviluppo, scrivere il tuo primo script PHP, utilizzare le variabili e gestire la logica condizionale. Verranno trattati anche i cicli, le funzioni e l’integrazione con HTML. È il punto di partenza ideale per chi vuole iniziare a programmare sul web. Gli esempi pratici ti aiuteranno a comprendere i concetti fondamentali in modo rapido ed efficace. Scoprirai come inviare dati con i form e come elaborare input dell’utente. Saranno introdotti anche i concetti di base su sicurezza e debugging. Al termine della guida, avrai le competenze per creare semplici applicazioni web. Il tutto è pensato per aiutarti ad acquisire una solida base prima di passare a framework avanzati.'
      ],
      [
         'id' => 2,
         'title' => 'Laravel: il framework PHP moderno',
         'description' => 'Una panoramica su Laravel, uno dei framework più usati per lo sviluppo web in PHP.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Sara Conti',
         'content' => 'Laravel è un framework PHP elegante e moderno che consente di costruire applicazioni web robuste in modo rapido. Utilizza il pattern MVC (Model-View-Controller), rendendo il codice più organizzato e manutenibile. Laravel offre funzionalità integrate come il routing, l’autenticazione, la gestione delle migrazioni, i task programmati e l’integrazione con database. Blade, il suo motore di template, semplifica la creazione di interfacce utente. La community attiva e la documentazione completa lo rendono accessibile anche ai meno esperti. Laravel supporta lo sviluppo test-driven (TDD), favorendo la qualità del codice. Inoltre, il framework è molto scalabile, adatto sia a piccoli progetti che a grandi applicazioni. In questa panoramica scoprirai i motivi della sua popolarità e come iniziare a usarlo efficacemente.'
      ],
      [
         'id' => 3,
         'title' => 'PHP vs JavaScript: differenze e usi',
         'description' => 'Un confronto tra PHP e JavaScript per aiutarti a scegliere il linguaggio giusto per il tuo progetto.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Marco Rinaldi',
         'content' => 'PHP e JavaScript sono due linguaggi fondamentali nello sviluppo web, ma con ruoli molto diversi. PHP opera principalmente lato server, elaborando dati e generando contenuti HTML da inviare al browser. JavaScript, invece, agisce lato client, permettendo interattività e aggiornamenti dinamici sulla pagina senza ricaricarla. Entrambi sono linguaggi interpretati, ma JavaScript si è evoluto anche lato server grazie a Node.js. In questo articolo vengono confrontati i punti di forza, le limitazioni, la curva di apprendimento e i casi d’uso più comuni di ciascun linguaggio. Inoltre, viene fornita una panoramica di come PHP e JavaScript possano collaborare all’interno dello stesso progetto. La scelta dipende spesso dalla natura dell\'applicazione, dal team e dall\'infrastruttura esistente. Un confronto utile per chi vuole scegliere consapevolmente.'
      ],
      [
         'id' => 4,
         'title' => 'Sicurezza in PHP: best practices',
         'description' => 'Come scrivere codice PHP sicuro e prevenire le vulnerabilità comuni come SQL Injection e XSS.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Elisa Greco',
         'content' => 'La sicurezza è una componente critica nello sviluppo PHP. Questo articolo esplora le vulnerabilità più comuni, come SQL Injection, Cross-Site Scripting (XSS) e Cross-Site Request Forgery (CSRF), e fornisce tecniche per prevenirle. Imparerai a validare e sanificare l’input dell’utente, utilizzare le query preparate con PDO o MySQLi, gestire correttamente le sessioni e configurare i permessi dei file. Inoltre, parleremo di come gestire errori in modo sicuro evitando di esporre stack trace sensibili. Saranno fornite anche indicazioni su come mantenere aggiornato l’ambiente PHP e le librerie di terze parti. Seguendo queste best practices potrai proteggere la tua applicazione da attacchi esterni e aumentare la fiducia degli utenti.'
      ],
      [
         'id' => 5,
         'title' => 'PHP 8.3: le nuove funzionalità',
         'description' => 'Esplora le novità introdotte in PHP 8.3 e come possono migliorare le tue applicazioni.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Andrea Russo',
         'content' => 'PHP 8.3 introduce miglioramenti significativi che rendono il linguaggio più potente e moderno. Tra le novità più attese troviamo nuove funzionalità di sintassi, performance migliorate e funzioni standard aggiornate. L’aggiunta di nuovi tipi di attributi consente una maggiore flessibilità nel codice. Anche il sistema di error handling è stato potenziato, migliorando la gestione delle eccezioni. In questo articolo analizzeremo ogni nuova feature con esempi pratici, evidenziando come possono semplificare lo sviluppo e migliorare la manutenibilità del codice. PHP 8.3 rappresenta un ulteriore passo avanti nell’evoluzione del linguaggio, rendendolo sempre più adatto a scenari moderni e complessi.'
      ],
      [
         'id' => 6,
         'title' => 'Creare un blog con PHP e MySQL',
         'description' => 'Un tutorial passo-passo per realizzare un blog dinamico utilizzando PHP e un database MySQL.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Giulia Ferri',
         'content' => 'Questo tutorial ti guiderà nella creazione di un semplice blog dinamico usando PHP e MySQL. Partiremo dall’installazione dell’ambiente di sviluppo, poi configureremo il database con le tabelle per articoli, utenti e commenti. Scriveremo il codice PHP per inserire, leggere, aggiornare ed eliminare articoli dal database. Vedremo come strutturare le pagine HTML e usare il routing base per navigare tra gli articoli. Saranno introdotti concetti di sicurezza come l’escaping dell’input e la gestione dell’autenticazione. Infine, implementeremo un pannello di amministrazione per gestire i contenuti. Una guida perfetta per mettere subito in pratica le tue conoscenze PHP.'
      ],
      [
         'id' => 7,
         'title' => 'PHP e API REST: integrazione facile',
         'description' => 'Come creare e consumare API REST utilizzando PHP per connettere applicazioni moderne.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Fabio De Luca',
         'content' => 'Le API REST sono fondamentali per lo sviluppo moderno. In questo articolo scoprirai come creare un’API RESTful in PHP, definendo rotte per le operazioni CRUD (Create, Read, Update, Delete) e gestendo correttamente richieste HTTP. Imparerai anche a restituire risposte in formato JSON e a gestire errori e codici di stato. Verrà presentato un esempio pratico di connessione a un database MySQL e di consumo dell’API tramite JavaScript o strumenti come Postman. In più, analizzeremo le best practices per la sicurezza e l’autenticazione, come l’uso di token JWT. Una guida essenziale per integrare PHP nel mondo delle API moderne.'
      ],
      [
         'id' => 8,
         'title' => 'Template engines in PHP: Blade vs Twig',
         'description' => 'Un confronto tra i motori di template più popolari nel mondo PHP.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Martina Sala',
         'content' => 'I motori di template semplificano la separazione tra logica e presentazione nel codice PHP. Blade, usato da Laravel, e Twig, adottato da Symfony, sono due dei più popolari. In questo articolo mettiamo a confronto le loro caratteristiche: sintassi, performance, sicurezza e facilità d’uso. Blade offre una sintassi intuitiva ed è strettamente integrato con Laravel. Twig, invece, punta su una sintassi pulita e potente, con numerosi filtri e funzioni personalizzabili. Ti mostreremo esempi pratici di come scrivere layout, estendere template e usare condizioni e loop. Questo confronto ti aiuterà a scegliere il motore di template più adatto al tuo progetto.'
      ],
      [
         'id' => 9,
         'title' => 'Ottimizzazione delle prestazioni in PHP',
         'description' => 'Tecniche per migliorare la velocità e l’efficienza del tuo codice PHP.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Stefano Bianchi',
         'content' => 'Scrivere codice performante è essenziale per garantire una buona esperienza utente. Questo articolo esplora tecniche di ottimizzazione PHP come l’uso di opcache, la minimizzazione delle chiamate al database, la memorizzazione in cache dei risultati e l’uso di strumenti di profiling. Parleremo anche di best practices come evitare cicli annidati, ridurre il numero di richieste HTTP e utilizzare tecniche asincrone quando possibile. Ottimizzare significa anche scrivere codice leggibile e manutenibile. Ogni consiglio sarà accompagnato da esempi pratici e benchmark per dimostrare i miglioramenti. Un must per chi vuole rendere le proprie applicazioni PHP più veloci ed efficienti.'
      ],
      [
         'id' => 10,
         'title' => 'Come gestire gli errori in PHP',
         'description' => 'Guida alla gestione degli errori e al debugging in PHP per uno sviluppo più robusto.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Chiara Moretti',
         'content' => 'La gestione degli errori è fondamentale per costruire applicazioni PHP stabili e sicure. In questo articolo imparerai le differenze tra errori, eccezioni e avvisi. Vedremo come configurare il file `php.ini` per abilitare il reporting degli errori e come utilizzare le funzioni `try`, `catch` e `finally`. Ti mostreremo anche come definire error handler personalizzati e come loggare gli errori per il debug. Saranno trattati strumenti utili come Xdebug per l’analisi del flusso di esecuzione e la tracciabilità dei bug. Infine, parleremo di come comunicare errori all’utente in modo sicuro e user-friendly.'
      ],
      [
         'id' => 11,
         'title' => 'Superare i momenti difficili con la programmazione',
         'description' => 'Tecniche per restare motivati e usare la programmazione come strumento di crescita personale.',
         'image' => 'https://picsum.photos/350',
         'author' => 'Stefano Bianchi',
         'content' => 'La programmazione può essere più di un semplice lavoro: può diventare una fonte di motivazione e crescita. In questo articolo esploreremo come imparare a programmare possa aiutare a superare momenti difficili, dando struttura e obiettivi alla giornata. Vedremo come piccoli traguardi nel codice possano aumentare l’autostima e come risolvere problemi logici possa allenare la mente a pensare positivamente. Condivideremo storie di persone che hanno trovato nella tecnologia un nuovo inizio, incoraggiando a vedere la programmazione come un alleato nel percorso personale. Saranno anche proposti progetti semplici per iniziare subito.'
      ],
      [
         'id' => 12,
         'title' => 'Ottimizzazione delle sinapsi',
         'description' => 'Tecniche per migliorare la velocità e l’efficienza del tuo cervello',
         'image' => 'https://picsum.photos/350',
         'author' => 'Stefano Bianchi',
         'content' => 'La produttività mentale può essere allenata proprio come un muscolo. Questo articolo offre consigli su come potenziare l’attività cerebrale attraverso esercizi di logica, alimentazione, sonno di qualità e abitudini di studio efficaci. Parleremo anche dell’importanza della programmazione e della risoluzione di problemi come stimolanti cognitivi. L’uso di tecniche come il metodo Feynman, le mappe mentali e la pratica del “deep work” aiutano a rafforzare le connessioni sinaptiche. Ottimizzare le sinapsi significa anche gestire lo stress, fare attività fisica e avere una routine che favorisca la concentrazione. Un cervello efficiente è il primo passo per diventare un ottimo sviluppatore.'
      ]
   ];


   public function allArticles()
   {
      $articles = $this->articles;

      return view('articles', compact('articles'));
   }

   public function show($id)
   {
      $article = collect($this->articles)->firstWhere('id', $id);
      return view('article-detail', compact('article'));
   }
}
