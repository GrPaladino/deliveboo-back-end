# Boolivery

## Back-End
Si tratta di un progetto FullStack dove abbiamo suddiviso nel lato back-end l'interfaccia per un eventuale ristoratore, il quale può registrarsi inserendo i propri dati e aggiungendo alla piattaforma il proprio ristorante con le relative caratteristiche richieste.

Successivamente il ristoratore può aggiungere i piatti del proprio ristorante che verranno inseriti in un elenco da cui si possono facilmente aggiungere altri piatti, eliminarli, osservarne nel dettaglio le informazioni, modificare quest'ultime oppure renderli disponibili/non disponibili.

In questa interfaccia è anche possibile monitorare le statistiche relative al numero di ordini dell'ultimo anno, osservandole suddivise nei 12 mesi. Usando la stessa dashboard è possibile vedere anche i guadagni scorporati nello stesso modo e si possono ricontrollare le informazioni degli ordini ricevuti.

## Front-End
Nel front-end un eventuale utente può visualizzare l'elenco di ristoranti, filtrarli per categoria di piatti e selezionare uno di essi verso il quale effettuare il proprio ordine. 

A questo punto si aprirà la schermata del menù con i piatti di cui si possono visualizzare i dettagli e che si possono aggiungere al proprio carrello nelle quantità desiderate.

Dopo aver scelto i piatti del proprio ordine il cliente può procedere nella pagina di acquisto dove può visualizzare un riepilogo dei piatti scelti, delle loro quantità, del loro prezzo sia scorporato, sia complessivo. Dopo aver controllato l'ordine il cliente potrà inserire i propri dati necessari per effettuare la spedizione nei suoi confronti e potrà pagare inserendo i dati della carta di credito.

Infine verrà spedita un'email di conferma dell'ordine al cliente ed una mail di segnalazione dell'ordine al ristoratore che potrà attivarsi per soddisfare la clientela.

## Per aprire il progetto

Aprire un primo terminale su VScode:

```
npm install
npm run dev
```

Aprire un secondo terminale su VScode:

```
composer install
php artisan serve
```

Poi copiare il file `.env.example` in `.env` e configura la connessione al Database

## Progetto Finale di fine corso

<h1> work in progress</h1>

PER I MIEI CARI COLLEGHI DI PROGETTO

1. installate la libreria braintree:

```
composer require braintree/braintree_php
```

2. aggiungere credenziali nel file .env

```
BRAINTREE_ENV=sandbox
BRAINTREE_MERCHANT_ID=9bpqhpnxss37n4yn
BRAINTREE_PUBLIC_KEY=qps7zb7rhqxspfq9
BRAINTREE_PRIVATE_KEY=2a987408eabd64247f16185a7be09abe
```
