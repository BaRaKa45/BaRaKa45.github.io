<?php
    $errors = array();

    if(empty($_POST['user_name']))
    {
        $errors['user_name_empty'] = "Champ du nom non rempli";
    }

    if(empty($_POST['user_email']))
    {
        $errors['user_email_empty'] = "Champ de l'addresse email non rempli";
    } 

    if(empty($_POST['user_phone']))
    {
        $errors['user_phone_empty'] = "Champ du numéro de téléphone non rempli";
    } 
    
    if(empty($_POST['user_message']))
    {
        $errors['user_message_empty'] = "Champ du message non rempli";
    } 

    if(empty($errors)) 
    {
        header('Location: success.php?user_name=' . $_POST['user_name'] . '&' . 'user_email=' . $_POST['user_email'] . '&' . 'user_phone=' . $_POST['user_phone'] . '&' . 'user_sexe=' . $_POST['user_sexe'] . '&' . 'user_message=' . $_POST['user_message']) ;
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>formulaire</title>
    </head>
    <body>
        <form action="form.php" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="user_name" value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name']; ?>">
            </div>
                
            <div>
                <label for="courriel">Courriel :</label>
                <input type="email" id="courriel" name="user_email" value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email']; ?>">
            </div>
            
            <div>
                <label for="phone">Téléphone :</label>
                <input type="text" id="phone" name="user_phone" pattern="0[0-7]{1}[0-9]{8}" value="<?php if(isset($_POST['user_phone'])) echo $_POST['user_phone']; ?>">
            </div>
            
            <div>
                <label for="sexe">Sexe :</label>
                <select id="sexe" name="user_sexe" >
                    <option value="<?php if(isset($_POST['user_sexe'])) echo $_POST['user_sexe']; ?>"><?php if(isset($_POST['user_sexe'])) echo $_POST['user_sexe']; ?></option>
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                </select>
            </div>

            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="user_message"><?php if(isset($_POST['user_message'])) echo $_POST['user_message']; ?></textarea>
            </div>

            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>    
        <div>
            <p><?php if(isset($errors['user_name_empty'])) echo $errors['user_name_empty']; ?></p>
            <p><?php if(isset($errors['user_email_empty'])) echo $errors['user_email_empty']; ?></p>
            <p><?php if(isset($errors['user_phone_empty'])) echo $errors['user_phone_empty']; ?></p>
            <p><?php if(isset($errors['user_message_empty'])) echo $errors['user_message_empty']; ?></p>
        </div> 
    </body>
</html>