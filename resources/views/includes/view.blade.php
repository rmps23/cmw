<html>
    <body>
        
    <style>
        .tabela{
            border-width:1px;
            border-style: solid;
            border-color: black;
            padding: 5px;
        }
    </style>
        <h1>Contact Detailed Information</h1>
        <table class="tabela">
            <tr>
                <td class="tabela">ID</td>
                <td class="tabela">NAME</td>
                <td class="tabela">CONTACT</td>
                <td class="tabela">EMAIL</td>
                <td class="tabela">CREATED_AT</td>
                <td class="tabela">UPDATED_AT</td>
            </tr>
            <tr>
                <td class="tabela">{{$contacts->id}}</td>
                <td class="tabela">{{$contacts->name}}</td>
                <td class="tabela">{{$contacts->contact}}</td>
                <td class="tabela">{{$contacts->email}}</td>
                <td class="tabela">{{$contacts->created_at}}</td>
                <td class="tabela">{{$contacts->updated_at}}</td>
            </tr>
        </table>
        <br><br>
        <a href="{{route('index')}}"><button>HOME</button></a> | <a href="{{route('contact.edit', $contacts->id)}}"><button>EDIT</button></a>
        <br><br>
        <form method="post" action="{{route('contact.destroy', $contacts->id)}}">
            @csrf
            @method("DELETE")
            <button href="{{route('contact.destroy', $contacts->id)}}">DELETE</a>
        </form>

    </body>
</html>