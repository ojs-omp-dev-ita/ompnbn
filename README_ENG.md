OMP NBN: IT
===========
Plug-in for version 3 of OMP.
v. 2.0.0 alpha
------------

Plugins for the automatic assignment of identifiers [urn:nbn] (http://www.depositolegale.it/national-bibliography-number/) in the namespace NBN:IT to the monographs published with [Open Monograph Press] (https: // pkp.sfu.ca/omp/) v. 3.

Functionality
-------------
1. Adds two tables to the DB to allow registration of NBNs.
2. Add an interface to set the plugin in ** Settings-> Website-> Plugin-> Public Identifier Plugins **
3. Add a link to request the NBN: IT and the checkbox to assign it to a single ** published ** monograph  in **Submission-> workflow-> Catalog Entry-> Identifiers **.
4. Establishes a dialogue with the Magazzini Digitali APIs. Before being enabled to use the API a request must be forwarded to enable an account to access the NBN service (see below).

System requirements
--------------------
1. OMP version 3.1.1.1 or higher
2. PHP 'curl' extension installed
3. PHP extension 'dom' installed

Known Bugs
---------------
The link for the generation of NBN seems to do nothing, but reloading the page we find that the NBN was created correctly.
A spinner should appear after the request until a response is obtained.

Installation
-------------
Upload the files to the server using the appropriate OJS module dedicated to installing the plugins (the plugin must be in compressed format .tar.gz)

Credentials
-----------
The authentication credentials to the webservice are issued after joining the service [MD] (http://www.depositolegale.it/nbn-flusso-di-lavoro/)

License
-------
The plugin is developed by alfredo.cosco@gmail.com from the plugin for [OJS3] (https://github.com/ojs-omp-dev-ita/nbn) and is released under [GNU General Public License v2] (http: // www.gnu.org/licenses/gpl-2.0.html)