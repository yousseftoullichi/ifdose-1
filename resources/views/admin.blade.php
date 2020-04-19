@extends('adminlte::page2')

@section('title','user')

@section('content_header')
    <style xmlns="http://www.w3.org/1999/html">
        .a:hover {
            background-color: lightgoldenrodyellow;
        }
    </style>
    <link rel="stylesheet" href="{{asset('js/dataTables.bootstrap.css')}}">
    <style>

        .inline {
            display: inline-block;

            margin:10px;
        }

    </style>
@stop

@section('content')
@if(auth()->user()->role=='admin')
    <section class="content-header">
        <h1>
            <i class="fa fa-clipboard"></i> Liste des utilisateurs
        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box box-header with-border">

                <input type="hidden" id="searchKey" value="searchKey">
                <div class="inline">

                  
                <div id="tableDiv">
                
                <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <tr class="header" >
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                    </tr>
                    @foreach($users as $user)
                   
                        <tr class="search">
                            
                            <td><b> {{$user->id}} </b></td>
                            <td><b> {{$user->name}} </b></td>
                            <td> {{$user->email}} </td>
                            <td>
                                
                                    <a href="valider/{{$user->id}}"  class="btn btn-primary   btn-sm glyphicon glyphicon-pencil" style="margin:3px 5px"> Valider</a>
                                </td>
                                    <td>
                                    <a onclick="return confirm('Êtes-vous sûr de vouloir Supprimer ce user?')" href="Supprimer/{{$user->id}}"  class="btn btn-danger   btn-sm glyphicon glyphicon-list" >Supprimer</a>
                                
                                   
                                
                            </td>
                        </tr>
                        
                    @endforeach
                    

                </table>

                </div>

                
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.row -->
    </section>
    @endif
    <!-- /.content -->
    <!-- -------------------------/.content-wrapper------------------- -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <script>
        var td = document.getElementsByName(td);
        td.onmouseover = function() {
            this.parentNode.style.backgroundColor = "#d3f9bb";
        }
        td.onmouseout = function() {
            this.parentNode.style.backgroundColor = "#fff";
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    

    


@stop
