@props(['oggetto',"tipo"])


<div class="mt-4"> 
                    <a type="button" href="/{{$tipo}}/{{$oggetto->id}}" class="btn btn-sm btn-outline-primary"><i class="bi bi-info-circle"></i></a>   
                    <a href="/{{$tipo}}/{{$oggetto->id}}/edit" type="button" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil-square"></i></a>   
                    @if($tipo=="progetti")
                    <a type="button" class="btn btn-sm btn-outline-secondary"
                     href="/attivita/create?progetto_id={{$oggetto->id}}"><i class="bi bi-plus-circle"></i>
                    </a>   
                    @endif
                    <form class="d-inline" method="post" action="/{{$tipo}}/{{$oggetto->id}}"> 
                                @csrf 
                                @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash3-fill"></i></button> 
                    </form>
                </div>