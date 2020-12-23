@extends('layouts.app')



@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<h3 style="text-align:center"> Os seus anúncios </h3>


<div class="container">
            <div class="row">
                
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/')}}">Anúncios</a></li>
                                <li><a href="{{url('/cars')}}">Mensagens</a></li>
                                <li><a href="{{url('/about')}}">Pagamentos</a></li>
                                <li><a href="{{url('/dashboard/definicoes')}}">Definições</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            
        </div>



</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


@endsection