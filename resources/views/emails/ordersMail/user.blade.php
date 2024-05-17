<x-mail::message>
    # Ciao {{ $order['customer_name'] }}

    Il tuo ordine é stato inviato

    Prepara la tavola!
    Il tuo ordine di Boolivery sta arrivando!
    Ecco un riepilogo dei dati che hai inserito:

    Nome e cognome: {{ $order['customer_name'] }}
    Email: {{ $order['email'] }}
    Telefono: {{ $order['phone'] }}
    Indirizzo: {{ $order['address'] }}



    Thanks,
    Team006 from {{ config('app.name') }}
</x-mail::message>
