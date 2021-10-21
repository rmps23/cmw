@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <body>
        
        <style>
            .tabela{
                border-width:1px;
                border-style: solid;
                border-color: black;
                padding: 5px;
                text-align: center;
            }
        </style>
    
            <table class="tabela" style="width: 700px;">
                <tr>
                    <td class="tabela">NAME</td>
                    <td class="tabela">EDIT</td>
                    <td class="tabela">DELETE</td>          
                </tr>
                @foreach($contacts as $contact)
                <tr>
                    <td class="tabela"><a href="{{ route('contact.view', $contact->id) }}">{{$contact->name}}</a></td>
                    
                    <td class="tabela"><a href="{{route('contact.edit', $contact->id)}}">
                        @if (Auth::check())
                        <button>EDIT</button></a>
                        @endif
                    </td>
                    <td class="tabela">
                    @if (Auth::check())
                        <form method="post" action="{{route('contact.destroy', $contact->id)}}">
                            @csrf
                            @method("DELETE")
                            <button href="{{route('contact.destroy', $contact->id)}}">DELETE</a>
                        </form> 
                    @endif
                    </td>
                    
                </tr>
                @endforeach
            </table>
            <br>
            <a href="{{route('add')}}"><button>ADD CONTACT</button></a>
    
    
        </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
