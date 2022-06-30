@extends('backend.layouts.app')


@section('title', $title)

@section('content')
<div class="col-xs-12 main">
    <div class="page-on-top">
        <!-- tables/default -->
        <div class="row m-b-20">
            <div class="col-xs-12">
                <div class="widget">
                    <div class="container">

                        <section class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Product Add</h3>
                            </div>
                            <div class="panel-body">

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    Successfully <a href="#" class="alert-link">{{ session('success') }}</a>. Give it a
                                    click if you like.
                                </div>
                                @endif

                                @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    Faild <a href="#" class="alert-link">{{ session('error') }}</a>. Give it a click if
                                    you like.
                                </div>
                                @endif
                                <form action="{{ route('from.store') }}" method="POST" enctype="multipart/form-data"
                                    class="form-horizontal" role="form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-sm-3">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('name') is-invlid @enderror"
                                                value="{{ old('name') }}" name="name" id="name"
                                                placeholder="Enter Product Neme">
                                            @error('name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div> <!-- form-group // -->
                                    <div class="form-group">
                                        <label class="col-sm-3">Product Title</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="title"> {{ old('title') }} </textarea>
                                        </div>
                                        @error('title')
                                        <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> <!-- form-group // -->


                                    {{-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 ">Passwoed</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" name="pass"
                                                    placeholder="Enter Password">
                                            </div>
                                            @error('pass')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    --}}
                            </div> <!-- form-group // -->
                    </div> 


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 ">Product Code</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" value="{{ old('code') }}" name="code"
                                        placeholder="Enter Code">
                                </div>
                                @error('code')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group // -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6">Product Quantity</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" value="{{ old('qty') }}" name="qty"
                                        placeholder="Enter Product Quantity">
                                </div>
                                @error('qty')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group // -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tech" class="col-sm-6">Select Category</label>
                                <div class="col-sm-6">
                                    <select name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        <option value="1" {{ old('category_id') == 1 ? 'selected' : ''}}>Phone</option>
                                        <option value="2" {{ old('category_id') == 2 ? 'selected' : ''}}>Laptop</option>
                                        <option value="3" {{ old('category_id') == 3 ? 'selected' : ''}}>Electronic
                                        </option>
                                        <option value="4" {{ old('category_id') == 4 ? 'selected' : ''}}>Fashion
                                        </option>
                                    </select>
                                </div>
                                @error('category_id')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group // -->
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tech" class="col-sm-6">Select Brand</label>
                                <div class="col-sm-6">
                                    <select name="brand" class="form-control">
                                        <option value="">Select Brand</option>
                                        <option value="1" {{ old('brand') == 1 ? 'selected' : ''}}>Samsung</option>
                                        <option value="2" {{ old('brand') == 2 ? 'selected' : ''}}>Apple</option>
                                        <option value="3" {{ old('brand') == 3 ? 'selected' : ''}}>Xiome</option>
                                        <option value="4" {{ old('brand') == 4 ? 'selected' : ''}}>Huawie</option>
                                    </select>
                                </div>
                                @error('brand')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group // -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6">Product Image</label>
                        <div class="col-sm-6">
                            <input type="file" name="image">
                        </div>
                        @error('image')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <hr>
                    <div style="padding-top: 40px" class="row">
                        <div class="col-sm-6 form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary text-light px-5">Submit</button>
                            </div>
                        </div> <!-- form-group // -->
                        <div class="col-sm-6 form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button class="btn btn-danger text-light px-5">Reset</button>
                            </div>
                        </div> <!-- form-group // -->
                    </div>
                    </form>

                </div><!-- panel-body // -->
                </section><!-- panel// -->


            </div> <!-- container// -->
        </div>
    </div>
</div>
<!-- tables/default -->
</div>
</div>
@endsection
