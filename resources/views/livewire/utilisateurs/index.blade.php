<div>
    @if($isBtnAddClicked)
    <div class="row p-4 pt-5">
        <div class="col-md-6">
            <div class="card card-primary">    
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i>Formulaire de création d'un nouvel utilisateur</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    @else
        <div class="row p-4 pt-5">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header bg-primary d-flex align-items-center">
                        <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x pr-1"></i>Liste des utilisateurs</h3>
                        <div class="card-tools d-flex align-items-center">
                            <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent='gotoAddUser()'> <i class="fa fa-user-plus"></i>Nouvel Utilisateur</a>
                            <div class="input-group input-group-md" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="width:5%;"></th>
                                <th style="width:25%;">Utilisateur</th>
                                <th style="width:20%;">Role</th>
                                <th style="width:20%;" class="text-center">Ajouté</th>
                                <th style="width:30%;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                    <tr>
                                        <td>
                                            @if ($user->sexe == "F")
                                                <img src="{{asset('images/wonder-woman.png')}}" width="24" />
                                            @else
                                                <img src="{{asset('images/directeur.png')}}" width="24" />
                                            @endif
                                        </td>
                                        <td>{{$user->prenom}} {{$user->nom}}</td>
                                        <td>
                                            {{$user->roles->implode('nom','|')}}  
                                        </td>
                                        <td class="text-center"><span class="tag tag-success">{{$user->created_at->diffForHumans()}}</span></td>
                                        <td class="text-center">
                                            <Button class="btn btn-link"><i class="far fa-edit"></i></Button>
                                            <Button class="btn btn-link"><i class="far fa-trash-alt"></i></Button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class= "card-footer">
                        <div class="float-right">{{$users->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
