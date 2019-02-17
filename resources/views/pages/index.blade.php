@extends('layouts.app')
@section('content')
        <div class="wrapper">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <form class="form-group" action="/product" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-12"> 
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name">                            
                                </div><!-- end col -->
                                <div class="col-lg-12"> 
                                    <label>Description:</label>
                                    <textarea class="form-control" name="description"></textarea>                    
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                    <label>Type:</label>
                                    <select class="selectpicker show-tick" data-style="btn-success" name="type">
                                        <option value="mobile">Mobile</option>
                                        <option value="mens">Mens</option>
                                        <option value="womens">Womens</option>
                                    </select>
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                    <label>Prcice</label>
                                    <input type="number" class="form-control" min="0" name="price">
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                    <label>Store</label>
                                    <input type="number" class="form-control" min="0" name="store_amount">
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                    <label>Cover Imager of Prodcut</label>
                                    <input type="file" class="filestyle" data-buttontext="Select file" data-buttonname="btn-secondary" name="product_image[]">
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                   <br>
                                    <button type="submit" class="btn btn-success pull-right">Save</button>
                                    <a href="/product/create" class="btn btn-danger pull-right">Cancle</a>
                                </div><!-- end col -->
                                <br>
                            </form>                               
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
@endsection