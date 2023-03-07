@extends('layouts/layout')
@section('content')

    <div class="container">
        <h2>Contact</h2>
        <fieldset>
            <legend>Envoyez-nous un message !</legend>
            <form name="contact" method="POST" action="/contact/submit">
                <label for="nomContact">Nom et prénom :</label>
                <input type="text" id="nomContact">
                <br>
                <label for="contenuContact">Message :</label>
                <textarea name="contenuContact" id="contenuContact"></textarea>
            </form>
        </fieldset>
        
    </div>
    
@endsection