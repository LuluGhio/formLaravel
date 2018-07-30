@extends ('welcome')

    @section('contenu')

        <main>
            <h2>Vous avez reçu un message</h2>
                <p>Elements du message:</p>
                <ul>
                  <li>Nom : {{ $nom }}</li>
                  <li>Prénom : {{ $prenom }}</li>
                  <li>Email : {{ $email }}</li>
                  <li>Message : {{ $texte }}</li>
                </ul>
        </main>
    @endsection