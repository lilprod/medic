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
                    <li class="breadcrumb-item">Liste</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

<!-- [ Main Content ] start -->
<div class="row">
    <!-- subscribe start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5> Liste des spécialités </h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-end">
                        <!--<button class="btn btn-success btn-sm mb-3 btn-round" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="feather icon-plus"></i> Ajouter Permission</button>-->
                        <a href="{{ route('admin.specialities.create') }}" class="btn btn-success btn-sm mb-3 btn-round" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
                            Ajouter Spécialité</a>
                    </div>
                </div>
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Spécialités</th>
                                <th style="width: 10%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialities as $speciality)
                            <tr>
                                <td>{{ $speciality->title }}</td>
                                <td>
                                    <a href="{{ route('admin.specialities.edit', $speciality->id) }}" class="btn btn-info btn-sm">Editer</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" onclick="deleteData({{ $speciality->id}})" data-target="#confirm" data-original-title="Supprimer">Supprimer</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
</div>
<!-- [ Main Content ] end -->

@endsection

@push('speciality')
<script>
    function deleteData(id)
     {
         var id = id;
         var url = '{{ route("admin.specialities.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush