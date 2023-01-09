<form action="" method="post">
    <div>
        <label for="genre">Genre</label>
        <input id="genreM" name="genre" type="radio" value="M." checked="checked" />
        <label for="genreM">M.</label>
        <input id="genreMme" name="genre" type="radio" value="Mme." />
        <label for="genreMme">Mme.</label>
    </div>
    <div>
        <label for="genreSelect">Genre</label>
        <select name="genreSelect" id="genreSelect">
        <option value="M.">M.</option>
        <option value="Mme.">Mme.</option>
        </select>
    </div>
    <div>
        <label for="nom">Nom :</label>
        <input id="nom" name="nom" type="text" />
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input id="prenom" name="prenom" type="text" />
    </div>
    <div>
        <label for="email">Adresse email :</label>
        <input id="email" name="email" type="email" value="exemple@exemple.org" />
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input id="telephone" name="telephone" type="tel" />
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="message" id="message" cols="30" rows="5"></textarea>
    </div>
    <div>
        <label>Comment avez-vous connu le site ?</label>
        <div>
            <input type="checkbox" id="facebook" name="question-site" value="facebook">
            <label for="facebook">facebook</label>
        </div>
        <div>
            <input type="checkbox" id="google" name="question-site" value="google">
            <label for="google">google</label>
        </div>
        <div>
            <input type="checkbox" id="twitter" name="question-site" value="twitter">
            <label for="twitter">twitter</label>
        </div>
        <div>
            <input type="checkbox" id="instagram" name="question-site" value="instagram">
            <label for="instagram">instagram</label>
        </div>
        <div>
            <input type="checkbox" id="youtube" name="question-site" value="youtube">
            <label for="youtube">youtube</label>
        </div>
        <div>
            <input type="checkbox" id="autre" name="question-site" value="autre">
            <label for="autre">autre</label>
        </div>
        <button id="boutonForm" type="submit">Envoyer le formulaire</button>
    </div>
</form>