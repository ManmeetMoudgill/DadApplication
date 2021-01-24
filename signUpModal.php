   <!-- signup modal -->
   <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUpModalLabel">Sign Up(Iscriviti)🔑 </h5>
        <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./signUpHandler.php" method="post" onload="preventOnload()">
            <div class="form-group">
        <label for="exampleInputPassword1">Name(Nome Utente)</label>
        <input type="text" class="form-control"  name="name" id="name" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Surname(Cognome Utente)</label>
        <input type="text" class="form-control" name="surname"  id="surname" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <small id="emailHelp" class="form-text text-muted">Non condivideremo mai la tua email con nessun altro </small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Confirm (Conferma) Password</label>
        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Age(Età)</label>
        <input type="int" class="form-control" name="age" id="age" placeholder="Inserisci La Età">
    </div>
    <button type="submit" class="btn btn-primary my-1">Sign Up</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>