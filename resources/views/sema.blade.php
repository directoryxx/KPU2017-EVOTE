@extends('layouts.home')

@section('content')

<!-- content
================================================== -->
<div class="row">
     <div class="col-twelve">
<h2>VOTE Senat Mahasiswa Masa Bakti 2017-2018</h2>
     </div>
   </div>

     <!-- THUMBNAIL -->

<!-- CANDIDATE 1 -->
<section id="content-wrap" class="site-page">
   <div class="row">
     <div class="main-container-thumbnail col-twelve">
       <div class="row">

         <?php $i =1; ?>
         @foreach ($datas as $data)
         <div class="header-vote col-six">
           <div class="col-twelve">
             <h3>Pasangan {{$i}}</h3>
           </div>
             <div class="col-twelve">
                <center><img class="img-ketua-atas img-responsive" src="{{$data->fotoketua}}">
               </center>
             </div>

             <div class="col-six">
              <h6>KETUA</h6>
              <!-- <h6>{{$data->namaketua}}</h6> -->
             </div>
             <div class="col-six">
              <h6>WAKIL KETUA</h6>
              <!-- <h6>{{$data->namawakil}}</h6> -->
             </div>
           <div class="col-twelve">
             <center><button class="button-vote" id="button-pasangan-sema-{{$i}}"><h6>CLICK !</h6></button></center>
           </div>
         </div>
<!--{{$i+=1}}-->
         @endforeach



       </div>
     </div>
   </div>
</section>

<!-- END THUMBNAIL -->

<!-- WARNING -->

<section id="content-wrap" class="site-page">
   <div class="row">
<div class="warning col-twelve" id="warning">
<h3>MEMILIHLAH DENGAN BIJAK MASA DEPAN STIKOM DI TANGAN ANDA!</h3>
</div>
</div>
</section>

       <!-- VISI MISI -->
       <?php $a =1; ?>
       @foreach ($datas as $data)
<!-- candidate 1 -->
 <section id="content-wrap" class="site-page">
   <div class="row">
<div class="main-container-1 col-twelve" id="sema-vote-{{$a}}">
 <div class="row">
   <div class="col-twelve">
         <div class="header-vote-sema col-twelve">
           <div class="col-two">
             .
           </div>
           <div class="col-two">
             <img class="logo-sema" src="img/stikomputih.png">
           </div>
           <div class="tittle-header col-four">
             <h1 style="color: white;">Pasangan {{$a}}</h1>
           </div>
           <div class="col-two">
             <img class="logo-stikom" src="img/logoooo.png">
           </div>
</div>
         <div class="row">
<div class="container-vote-sema col-twelve">
  <div class="col-twelve">
    <br />
     <center><img class="img-ketua img-responsive" src="{{$data->fotoketua}}">
    </center>
  </div>
<div class="candidate col-six">
 <center><h1>KETUA</h1></center>
</div>
 <div class="candidate col-six">
 <center><h1>WAKIL KETUA</h1></center>
</div>
<div class="name-candidate col-six">
 <center><h3>{{$data->namaketua}}</h3></center>
 <center><h3>{{$data->nimketua}}</h3></center>
</div>
<div class="name-candidate col-six">
 <center><h3>{{$data->namawakil}}</h3></center>
 <center><h3>{{$data->nimwakil}}</h3></center>
</div>
<div class="col-six">
 <h1>VISI :</h1>
{!!html_entity_decode($data->visi)!!}
</div>
<div class="col-six">
 <h1>MISI :</h1>
{!!html_entity_decode($data->misi)!!}
</div>
</div>
</div>
</div>
</div>
<div class="col-twelve">
  <form action="{{url('home')}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" class="form-control" id="organisasi" name="organisasi"  value="sema">
    <input type="hidden" class="form-control" id="yangdipilih" name="yangdipilih"  value="{{$a}}">
    <center><button style="margin-bottom: 15px;" class="btn">VOTE!!!</button></center>
  </form>
</div>
</div>
<!--{{$a+=1}}-->
</section>
         @endforeach

<!-- END CANDIDATE 1 -->


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

@endsection
