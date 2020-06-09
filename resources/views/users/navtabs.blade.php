
<ul class="nav nav-tabs nav-justified mb-3">
 <li class="nav-item">
        <a href="{{ route('users.show', ['id' => $user->id]) }}"
            class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">TimeLine
            <span class="badge badge-secondary">@if(!empty($count_microposts)){{ $count_microposts }}@endif</span>
                     </a>
 </li>
    <li class="nav-item">
        <a href="{{ route('users.followings', ['id' => $user->id]) }}"
            class="nav-link {{ Request::is('users/*/followings') ? 'active' : '' }}">Followings
          <span class="badge badge-secondary">@if(!empty($count_followings)){{ $count_followings }}@endif</span>
        </a>
    </li>
    <li class="nav-item">
       <a href="@if(!empty($user)){{ route('users.followers', ['id' => $user->id]) }}@endif"
            class="nav-link {{ Request::is('users/*/followers') ? 'active' : '' }}">Followers
           <span class="badge badge-secondary">@if(!empty($count_followers)){{ $count_followers }}@endif</span>
        </a>
    </li>
    <li class="nav-item">
                <a href="@if(!empty($micropost)){{ route('users.favorites', ['id' => $micropost['id']]) }}@endif" class="nav-link
    {{ Request::is('microposts/*/favorites') ? 'active' : '' }}">Favorite_article
     <span class="badge badge-secondary">@if(!empty($count_favorites)){{ $count_favorites }@endif</span>
        </a>
    </li>
</ul> 