
<section id="formcontact">
    <h1>Contact</h1>
    <form method="POST" enctype='multipart/form-data' action="./includes/process.php">
    <label>Nom :</label>
    <input type="text" name="nom"/><br/>
    <label>Prénom :</label>
    <input type="text" name="prenom"/><br/>
    <label>E-mail :</label>
    <input type="mail" name="mail"/><br/>
    <label>Numéro de téléphone :</label>
    <input type="text" name="num"/><br/>
    <label>Message :</label><br/>
    <textarea name="texte">Mettez un commentaire ici ....</textarea><br/>
    <label>Image :</label>
    <input type="file" name="photo" ><br/>
    <input type="submit" name="submit"/>
</form>
</section>