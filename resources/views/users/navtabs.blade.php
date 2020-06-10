
<ul class="nav nav-tabs nav-justified mb-3">
 <li class="nav-item">
        <a href="{{ route('users.show', ['id' => $user->id]) }}"
            class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">TimeLine
            <span class="badge badge-secondary">@if(!empty($data['count_microposts'])){{ $data['count_microposts'] }}@endif</span>
                     </a>
 </li>
    <li class="nav-item">
        <a href="{{ route('users.followings', ['id' => $user->id]) }}"
            class="nav-link {{ Request::is('users/*/followings') ? 'active' : '' }}">Followings
          <span class="badge badge-secondary">@if(!empty($data['count_followings'])){{ $data['count_followings'] }}@endif</span>
        </a>
    </li>
    <li class="nav-item">
       <a href="@if(!empty($user)){{ route('users.followers', ['id' => $user->id]) }}@endif"
            class="nav-link {{ Request::is('users/*/followers') ? 'active' : '' }}">Followers
           <span class="badge badge-secondary">@if(!empty($data['count_followers'])){{ $data['count_followers'] }}@endif</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="nav-link
    {{ Request::is('users/*/favorites') ? 'active' : '' }}">Favorite_article
     <span class="badge badge-secondary">@if(!empty($data['count_favorites'])){{ $data['count_favorites'] }}@endif</span>
        </a>
    </li>
</ul> 