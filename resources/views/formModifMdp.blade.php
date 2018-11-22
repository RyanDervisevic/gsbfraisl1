@extends('layouts.master')
@section('content')
{!! Form::open(['url' => 'getMdp']) !!}  
    <div class ="col-md-12 col-md-offset-2" id="contenu">
      
         <fieldset>
             <legend>Changer de Mot de Passe:</legend>
   	 <div class="form-group"> 	
         <label for="nom">Ancien mot de passe*</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="ancienMdp" type="password" name="ancienMdp"  size="30" maxlength="45" placeholder="ancien MDP">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="mdp">Nouveau mot de passe*</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="nouveauMdp"  type="password"  name="nouveau_mdp" size="30" maxlength="45" placeholder="nouveau MDP" value=""{{old()npwd')">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="mdp">Retaper nouveau mot de passe*</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="retaperNouveauMdp"  type="password"  name="retaper_nouveau_mdp" size="30" maxlength="45" placeholder="retaper nouveau MDP">
            </div>
         </div>
         </div>
          <button type="submit" class="btn btn-primary">Valider</button>
          <button type="reset" class="btn btn-primary">annuler</button>
         </fieldset>
      </form>

    </div>
</div>
@if (session('status'))
<div class="alertalert-success">
         {{ session('status') }}
</div>
  @endif
   @if (session('erreur'))
<div class="alertalert-danger">
         {{ session('erreur') }}
</div>
  @endif
</div>
</div>
{!! Form::close() !!}
@stop
