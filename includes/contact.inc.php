<section id="formcontact">
    <h1>Contact</h1>
    <p style="padding: 20px;">
        Vous pouvez nous joindres
        <a href="./index.php?page=contactadmin">ici</a>
    </p>
    <form method="POST" enctype='multipart/form-data' action="process.php">
        <!-- enctype OBLIGATOIRE car type FILE!-->
        <label>Nom :</label>
        <input type="text" name="nom" />
        <br/>
        <label>Prénom :</label>
        <input type="text" name="prenom" />
        <br/>
        <label>E-mail :</label>
        <input type="email" name="mail" />
        <br/>
        <label>Numéro de téléphone :</label>
        <input type="tel" name="num" />
        <br/>
        <label>Message :</label>
        <br/>
        <textarea name="texte" ></textarea>
        <br/>
        <label>Image pas plus de 2Mo :</label>
        <br/>
        <input type="file" name="photo" >
        <br/>
        <input type="submit" id="valider" name="submit"/>
    </form>
</section>
