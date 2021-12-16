@extends('partials.default')
@section('content')
<section class="content home">
    <div class="container-fluid">
<div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$page_title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <a href="{{route('admin-work-description')}}" class="btn btn-success">Add Work Description</a>
          </div>
        </div>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                
                <th>Name</th>
                <th>Description</th>
                
                <th style="width:20%;"><input type="checkbox" name="">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1
              @endphp
              @foreach($work as $w)
              <tr>
                
                <td>{{$i++}}</td>
                <td>{{$w->name}}</td>
                <td>{{$w->description}}</td>
                <td>
                 
                  <a href="{{route('admin-work-description-edit',['id'=>$w->id])}}" class="btn btn-success">Edit</a>
             <a href="{{route('admin-work-description-delete',['id'=>$w->id])}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach() 
            </tbody>
            
          </table>
        </div>
      </div>



    </div>
  </section>

@endsection()



