<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
            padding-bottom: 20px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))

          <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{session()->get('message')}}
          </div>
          @endif
            <div class="div_center">
                <h1 class="font_size">
                    Tambah Produk
                </h1>
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="div_design">
                <label>Nama Produk :</label>
                <input class="text_color" type="text" name="title" placeholder="Tulis Nama Produk" required="">
                </div>
                <div class="div_design">
                <label>Harga Produk :</label>
                <input class="text_color" type="number" name="price" placeholder="Tulis Harga Produk" required="">
                </div>
                <div class="div_design">
                <label>Product Category :</label>
                <select class="text_color" name="category" required="">
                    <option value="" selected="">Tambahkan Kategori Di Sini</option>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="div_design" >
                <label>Gambar Produk :</label>
                <input type="file" name="image" required="">
                </div>

                <form action="{{url ('/show_product')}}" method="GET">
                  <input type="submit" value="Tambah Produk" class="btn btn-primary" name="submit">
                </form>
            
              </form>
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>