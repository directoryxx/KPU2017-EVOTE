@extends('layouts.app')

@section('content')
<div class="container">
      <div class="login-container">
          <div id="output"></div>
          <img class="img-responsive center-block" style="margin: 0 auto;width:100px;height:100px;"src="{{URL::asset('img/logo.png')}}"></img>
          <br />
          <div class="form-box">
              @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}">
                {!! session('message.content') !!}
                </div>
              @endif
              <form action="{{url('login')}}" method="post">
                  {{ csrf_field() }}
                  <input name="username" type="text" placeholder="NIM">
                  <input type="hidden" placeholder="password" name="password" value="kpu2017">
                  <button class="btn btn-info btn-block login" type="submit">Login</button>
              </form>
          </div>
      </div>

      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">Count Sema</div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <td>Nama</td>
                      <td>Pemilih</td>
                    </tr>
                    @foreach ($datad as $data)
                    <tr>
                      <td>{{$data->namaketua}}</td>
                      <td>{{$data->dipilih}} Suara</td>
                    </tr>

                    @endforeach
                  </table>
                </div>

            </div>


          </div>
      </div>
      <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">Count Dema</div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <td>Nama</td>
                      <td>Pemilih</td>
                    </tr>
                    @foreach ($datas as $data)
                    <tr>
                      <td>{{$data->namaketua}}</td>
                      <td>{{$data->dipilih}} Suara</td>
                    </tr>

                    @endforeach
                  </table>
                </div>

            </div>


          </div>
      </div>

</div>
@endsection
