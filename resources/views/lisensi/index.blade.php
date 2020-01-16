@extends('layouts.app')

@section('template_title')
    Lisensi
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <?php  
                                use App\Models\Lisensi;

                                $max = auth()->user()->max_lisensi; //batas maks lisensi
                                $u = auth()->user()->email; //ambil email yg sedang login
                                $l = Lisensi::where('email', $u)->get(); //ambil lisensi yg sudah di generate
                                $t = $l->count(); //total lisensi yg di generate
                                $sisa = @($max - $t);
                                
                            ?>

                            <span id="card_title">
                                {{ __('Lisensi') }}
                            </span>

                            @if ($sisa != 0)
                             <div class="float-right">
                                <a href="{{ route('lisensis.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                            @endif
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Email</th>
										<th>Lisensi Key</th>
										<th>Computer Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <strong>Maksimum lisensi yang bisa di generate: {{$max}}</srong><br/>
                                <strong>Sisa Lisensi anda yang belum di generate: {{$sisa}}</srong>
                                    @foreach ($l as $lisensi)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $lisensi->email }}</td>
											<td>{{ $lisensi->lisensi_key }}</td>
											<td>{{ $lisensi->computer_id }}</td>

                                            <td>
                                                <form action="{{ route('lisensis.destroy',$lisensi->id) }}" method="POST">
                                                    <!-- <a class="btn btn-sm btn-primary " href="{{ route('lisensis.show',$lisensi->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lisensis.edit',$lisensi->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $lisensis->links() !!}
            </div>
        </div>
    </div>

@endsection