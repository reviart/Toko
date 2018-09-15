@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @hasrole('admin')
                        <a href="#" style="btn btn-success">Tambah</a>
                        <a href="#" style="btn btn-success">ubah</a>
                        <a href="#" style="btn btn-success">hapus</a><br>
                        @foreach($users as $key => $data)
                            {{$key+1}}. {{$data->name}}<br>
                        @endforeach
                    @else
                        @for($a=1;$a<=5;$a++)
                    <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top img-responsive" src="https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/08/carrot-soup.jpg?itok=YQBi8RRK" width="200px">
                            <div class="card-body">
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top img-responsive" src="https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/08/carrot-soup.jpg?itok=YQBi8RRK" width="200px">
                            <div class="card-body">
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <img class="card-img-top img-responsive" src="https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/08/carrot-soup.jpg?itok=YQBi8RRK" width="200px">
                            <div class="card-body">
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                        @endfor
                    @endhasrole
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
