@foreach($items as $item)
    @if($item->user_id == Auth::user()->id or $item->to_whom == Auth::user()->id)
    <li id="li-message-{{$item->id}}">
    <img src="{{asset('assets/image/users/'.$item->user_id.'.png')}}" alt="{{$item->id}}">
    <div>
   
  
    @foreach ( App\User::all()->where('id',$item->user_id)->toArray() as $u)
        <h4>{{$u['first_name']}} {{$u['last_name']}}</h4>
    @endforeach
    
    <input type="hidden" class="user_messanger" name='user_messenger' value={{$item->user_id}}>
    <a href="#" class="reply_mes">Ответить на сообщение</a>
    </div>
    
    <p>{{$item->text}}</p>
    
    <p>{{is_object($item->created_at) ? $item->created_at->format('F d, Y \a\t H:i') : ''}}</p>
    
    @if(isset($messages[$item->id]))
        <ul class="children" style="margin-left: 10px;">
            @include('user.message_one',['items'=>$messages[$item->id]])
        </ul>
    @endif
    </li>
    @endif
@endforeach