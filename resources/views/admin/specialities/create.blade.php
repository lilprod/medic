@extends('admin.layouts.app')

@section('content')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Spécialités</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#!">Spécialités</a></li>
                    <li class="breadcrumb-item">Ajout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

<!-- [ Main Content ] start -->
<div class="row">
    <!-- subscribe start -->
    <div class="col-lg-8 offset-lg-2">

        @include('inc.messages')
        
        <div class="card">
            <div class="card-header">
                <h5>Nouvelle Spécialité </h5>
            </div>

            <form method="POST" action="{{ route('admin.specialities.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Specialité</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
        
                        <div class=" col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="description"></textarea>
                            </div>
                        </div>
        
                        <div class=" col-md-12">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="cover_image">
                            </div>
                        </div>
        
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Ajouter Spécialité</button>
                </div>

                        <!--<div class="form-group">
                            <label class="display-block">Statut </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="product_active" value="1" checked>
                                <label class="form-check-label" for="product_active">
                                Actif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="product_inactive" value="0">
                                <label class="form-check-label" for="product_inactive">
                                Inactif
                                </label>
                            </div>--> 
            </form>
        
    </div>
</div>
<!-- [ Main Content ] end -->

@endsection