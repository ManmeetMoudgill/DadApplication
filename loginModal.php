<!-- login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login(Accedi)🔑 </h5>
        <button type="button" class="close btn-sm btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./loginHandler.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label><span class="error">
        <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label><span class="error">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary my-1">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
