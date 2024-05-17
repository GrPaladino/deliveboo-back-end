<x-mail::message>
    # Ciao {{ $owner_name }}
    Hai ricevuto un nuovo ordine!

    Da:

    Nome: {{ $order['customer_name'] }}
    Email: {{ $order['email'] }}
    Numero: {{ $order['phone'] }}
    Via: {{ $order['address'] }}
    Totale: {{ $order['price'] }} €


</x-mail::message>
