<?php

echo '<div class="container-fluid hero">
<form action='.$_SERVER["REQUEST_URI"].' method="post">
    <div class="mx-auto form-group w-50">
        <label for="exampleInputname"  class="form-label">Nome</label>
        <input type="text"  name="name"class="form-control -w-25" id="exampleInputname" aria-describedby="emailname" />
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputsurname" class="form-label">Cognome</label>
        <input type="text" name="surname" class="form-control -w-25" id="exampleInputsurname" />
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputdate" class="form-label">Date</label>
        <input type="date" name="date" class="form-control -w-25"/>
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputtime" class="form-label">Oraio di Inzio🕗
        </label>
        <input type="time" name="starting_time" class="form-control -w-25"/>
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputtime1" class="form-label">Oraio di Fine🕚
        </label>
        <input type="time" name="finishing_time" class="form-control -w-25"/>
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputpause" class="form-label">Pausa Pranzale 🥫
        </label>
        <input type="text" name="break_time" class="form-control -w-25" />
    </div>
    <div class="text-center my-3">
        <button type="submit" class="btn btn-primary">Invia</button>
    </div>
</form>
</div>';






?>