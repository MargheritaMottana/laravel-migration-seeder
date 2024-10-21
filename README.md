# Laravel Migration Seeder

    Esercizio: Laravel Migration Seeder
    Repo: laravel-migration-seeder

    Creiamo una tabella trains e relativa Migration

    Ogni treno dovrà avere:
    Azienda
    Stazione di partenza
    Stazione di arrivo
    Orario di partenza
    Orario di arrivo
    Codice Treno
    Numero Carrozze
    In orario
    Cancellato

    È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...

    Inserite inizialmente i dati tramite PhpMyAdmin.
    Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.
    Proseguiamo poi aggiungendo un seeder  usando FakerPHP

# Passi da fare per poter utilizzare il template di Laravel

    0. Creo la repository a partire dal template e mi clono la repository appena creata

    1. Copio il file .env.example e lo rinomino in .env

    2. Apro il terminale ed eseguo il comando composer install

    3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

    4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

    5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
    - Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

    6. Aprire un altro terminale ed eseguire il comando php artisan serve