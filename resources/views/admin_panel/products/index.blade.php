@extends('admin_panel.adminLayout') @section('content')
<div class="content-wrapper">
    <div class="row">
        @php
         function shortOf($text, $length)
            {
                if(strlen($text) > $length) {
                    $text = substr($text, 0, strpos($text, ' ', $length));
                }

                return $text;
            }
        @endphp
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products Table <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('admin.products.create')}}">+ Add Product</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Images
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($prdlist as $prd)
                                <tr>
                                    <td>
                                        <img src="{{asset('storage/' . $prd->image)}}" style="border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">{{$prd->name}}</a>
                                    </td>
                                    <td><a href="{{route('admin.products.delete', ['id' => $prd->id])}}"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        <b>{{$prd->price}} TND</b>
                                    </td>
                                    <td>
                                        {{shortOf($prd->description, 40)}}...
                                    </td>
                                    <td>
                                        {{$prd->category->name}}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

