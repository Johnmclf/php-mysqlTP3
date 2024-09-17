<?php
 // Validation du formulaire
 if (isset($_POST['email']) && isset($_POST['password'])) {
    foreach ($users as $user) {
        if ( ... ) {
            $loggedUser = [ 'email' => $user['email'], ];
        }
        else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de
            vous identifier : (%s/%s)', $_POST['email'], $_POST['password']);
        }
    }
}
 ?>

 <!-- Si utilisateur/trice est non identifié(e), on affiche le formulaire -->
 <?php if ( ... ) : ?>
 <form action = ... method = ...>
 <!-- si message d'erreur on l'affiche -->
 <?php if ( ... ) : ?>
 <div class="alert alert-danger" role="alert">

 <?php echo ... ; ?>
 </div>
 <?php endif; ?>
 <div class="mb-3">
 <label for="email" class="form-label">Email</label>
 <input type="email" class="form-control" id="email" name= "..."
 aria-describedby="email-help" placeholder="you@exemple.com">
 <div id="email-help" class="form-text">
 L'email utilisé lors de la création de compte.
 </div>
 </div>
 <div class="mb-3">
 <label for="password" class="form-label">Mot de passe</label>
 <input type="password" class="form-control" id="password" name= "..." >
 </div>
 <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>

 <!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
 <?php else: ?>
 <div class="alert alert-success" role="alert">
 Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
 </div>
 <?php endif; ?>
