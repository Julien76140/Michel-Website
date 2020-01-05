<section id="formcontact">
    <h1>Contact</h1>
    <form method="POST" enctype='multipart/form-data' action="./includes/process.php"><!-- enctype OBLIGATOIRE car type FILE!-->
        <label>Nom :</label>
        <input type="text" name="nom" required/><br/>
        <label>Prénom :</label>
        <input type="text" name="prenom" required/><br/>
        <label>E-mail :</label>
        <input type="email" name="mail" required/><br/>
        <label>Numéro de téléphone :</label>
        <input type="tel" name="num" required/><br/>
        <label>Message :</label><br/>
        <textarea name="texte" required></textarea><br/>
        <label>Image pas plus de 2Mo :</label><br/>
        <input type="file" name="photo" required><br/>
        <input type="submit" id="valider" name="submit"/>
    </form>
</section>
