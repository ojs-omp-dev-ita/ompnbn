OMP NBN:IT
===========
Plug-in per la versione 3 di OMP.
v. 2.0.0 alpha
------------

Plugin per l'assegnazione automatica di identificatori [urn:nbn](http://www.depositolegale.it/national-bibliography-number/) nel namespace NBN:IT le monografie pubblicate con [Open Monograph Press](https://pkp.sfu.ca/omp/) v. 3.

Funzionalità
-------------
1. Aggiunge due tabelle al db per permettere la registrazione degli NBN.
2. Aggiunge un'interfaccia per settare il plugin in **Settings->Website->Plugin->Public Identifier Plugins**
3. Aggiunge in **Submission->workflow->Catalog Entry->Identifiers** un link per richiedere l'NBN:IT e la checkbox per assegnarlo a una singola monografia **pubblicata**.
4. Stabilisce un dialogo con le API di Magazzini Digitali. Prima di essere abilitati all'utilizzo della API deve essere inoltrata richiesta di abilitazione di un account di accesso al servizio NBN (v sotto).

Requisiti di sistema
--------------------
1. OMP versione 3.1.1.1 o superiore
2. Estensione PHP 'curl' installata
3. Estensione PHP 'dom' installata 

Known Bugs
---------------
Il link per la generazione del NBN sembra non far nulla, invece ricaricando la pagina si vede che l'NBN è stato creato correttamente.
Dopo la richiesta dovrebbe apparire uno spinner finché non si ottiene una risposta.

Installazione  
-------------
Caricare i file sul server utilizzando l'apposito modulo di OJS dedicato all'installazione dei plugin (il plugin deve essere in formato compresso .tar.gz)

Credenziali
-----------
Le credenziali di autenticazione al webservice vengono rilasciate a seguito dell'adesione al servizio [MD](http://www.depositolegale.it/nbn-flusso-di-lavoro/)

Licenza
-------
Il plugin e' sviluppato da alfredo.cosco@gmail.com partedo dal plugin per [OJS3](https://github.com/ojs-omp-dev-ita/nbn) ed e' rilasciato sotto [GNU General Public License v2](http://www.gnu.org/licenses/gpl-2.0.html)
