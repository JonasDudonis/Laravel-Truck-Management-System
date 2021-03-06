@extends('layouts.app')
@push('style')
    @push('style')
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    @endpush
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">{{ __('Sunkvežimio paieška pagal kriterijus') }}</div>

                    <div class="card-body">
                        <br />
                        <div class="row shadow">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="filter_brand" id="filter_brand" class="form-control" required>
                                        <option value="">Pasirinkite automobilio markę</option>
                                        @foreach($trucks->groupBy('brand_id') as $brand => $truck)
                                        <option value="{{ $brand }}">{{ \App\Brand::find($brand)->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="year_of_manufacture" id="year_of_manufacture" class="form-control" required>
                                        <option value="">Pasirinkite pagaminimo metus</option>
                                        @foreach($trucks->groupBy('year_of_manufacture') as $year_of_manufacture => $truck)
                                        <option value="{{ $year_of_manufacture }}">{{ $year_of_manufacture }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="owner_s_name_and_surname" id="owner_s_name_and_surname" class="form-control" required>
                                        <option value="">Savininko vardas ir pavardė</option>
                                        @foreach($trucks->groupBy('owner_s_name_and_surname') as $owner_s_name_and_surname => $truck)
                                        <option value="{{ $owner_s_name_and_surname }}">{{ $owner_s_name_and_surname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="number_of_owners" id="number_of_owners" class="form-control" required>
                                        <option value="">Savininkų skaičius</option>
                                        @foreach($trucks->groupBy('number_of_owners') as $number_of_owners => $truck)
                                        <option value="{{ $number_of_owners }}">{{ $number_of_owners }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="comments" id="comments" class="form-control" required>
                                        <option value="">Komentarai</option>
                                        @foreach($trucks->groupBy('comments') as $comments => $truck)
                                        <option value="{{ $comments }}">{{ $comments }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" justify-content="left">
                                    <button type="button" name="reset" id="reset" class="btn btn-dark">RODYTI VISUS</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <br />

                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Auto markė</th>
                                <th>Pagaminimo metai</th>
                                <th>Savininko vardas ir pavardė</th>
                                <th>Savininkų skaičius</th>
                                <th>Komentarai</th>
                                {{-- <th>Veiksmai</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function(){

            fill_datatable();

            function fill_datatable(filter_brand = '', year_of_manufacture = '', owner_s_name_and_surname = '', number_of_owners = '', comments = '')
            {
                var dataTable = $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax:{
                        ajax: '{!! route('index') !!}',
                        data:{
                            filter_brand:filter_brand,
                            year_of_manufacture:year_of_manufacture,
                            owner_s_name_and_surname:owner_s_name_and_surname,
                            number_of_owners:number_of_owners,
                            comments:comments,
                        }
                    },
                    columns: [
                        {
                            data: 'brand',
                            name: 'brand'
                        },
                        {
                            data: 'year_of_manufacture',
                            name: 'year_of_manufacture'
                        },
                        {
                            data: 'owner_s_name_and_surname',
                            name: 'owner_s_name_and_surname'
                        },
                        {
                            data: 'number_of_owners',
                            name: 'number_of_owners'
                        },
                        {
                            data: 'comments',
                            name: 'comments'
                        },
                    ]
                });
            }

            $("select").change(function(){
                $("select").not($(this)).val('');
                var filter_brand = $('#filter_brand').val();
                var year_of_manufacture = $('#year_of_manufacture').val();
                var owner_s_name_and_surname = $('#owner_s_name_and_surname').val();
                var number_of_owners = $('#number_of_owners').val();
                var comments = $('#comments').val();

                $('#datatable').DataTable().destroy();
                fill_datatable(filter_brand, year_of_manufacture, owner_s_name_and_surname, number_of_owners, comments);

            });

            $('#reset').click(function(){
                $('#filter_brand').val('');
                $('#year_of_manufacture').val('');
                $('#owner_s_name_and_surname').val('');
                $('#number_of_owners').val('');
                $('#comments').val('');
                $('#datatable').DataTable().destroy();
                fill_datatable();
            });

        });
    </script>
@endpush
{{-- <td>
    <form action={{ route('home.destroy', $truck->id) }} method="POST">
      @csrf @method('delete')
      <input type="submit" class="btn btn-outline-danger" value="Delete" />
    </form>
  </td> --}}