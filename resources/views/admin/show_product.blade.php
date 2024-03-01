<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
            color: black;
        }
        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .img_size {
            width: 150px;
            height: 150px;
        }
        .th_color {
            background: transparent;
            color: black;
        }
        .th_deg {
            padding: 30px;
        }
            /* Aturan Media Query untuk layar dengan lebar maksimum 768px */
    @media screen and (max-width: 768px) {
        .center {
            width: 80%; /* Mengubah lebar menjadi 80% pada layar kecil */
        }
        .font_size {
            font-size: 30px; /* Mengurangi ukuran font pada layar kecil */
        }
        .img_size {
            width: 100px; /* Mengubah ukuran gambar pada layar kecil */
            height: 100px;
        }
        .th_deg {
            padding: 10px; /* Mengurangi padding pada layar kecil */
        }
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
            <h2 class="font_size">Menu</h2>
            <div>
            <a class="btn btn-success float-end" href="{{ url('view_product') }}" style="margin-right: 250px;">Tambah</a>

            </div>
            <table class="center">
                <tr class="th_color">
                    <th class="th_deg">No</th>
                    <th class="th_deg">Gambar Produk</th>
                    <th class="th_deg">Nama Produk</th>
                    <th class="th_deg">Kategori</th>
                    <th class="th_deg">Harga</th>
                    <th class="th_deg">Hapus</th>
                    <th class="th_deg">Edit</th>
                </tr>
                <?php $no = 1; ?>
                @foreach($product as $product)
                <tr>
                    <td>{{$no++}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}">
                    </td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>                    
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are You Sure to Delete This?')" href="{{url('delete_product', $product->id)}}">Hapus</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product', $product->id)}}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>