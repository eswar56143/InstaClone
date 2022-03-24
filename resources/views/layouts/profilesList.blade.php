<div class="col-6 offset-3 bg-white border">
    @forelse($profiles as $profile)
        <div class="row py-2 align-items-baseline">
            <div class="col-10 d-flex align-items-center">
                <div class="pe-3">
                    <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                        <img src="{{$profile->profileImage()}}" alt=""
                             class="rounded-circle w-100" style="max-width: 50px">
                    </a>
                </div>
                <div>
                    <div class="fw-bold">
                        <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                            <span class="text-black">{{$profile->user->username}}</span>
                        </a>
                    </div>
                    <span>{{$profile->title}}</span>
                </div>
            </div>
            <div class="col-2  align-content-center">
                @if($name=='followers')
                    <form action="/follow/{{$profile->user->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn-sm btn-primary ">remove</button>
                    </form>
                @else
                    <follow-button user-id="{{$profile->user->id}}" follows="{{$follows}}" class-data="btn-sm btn-primary ">

                    </follow-button>
                @endif
            </div>
        </div>
    @empty
        <div class="m-2">
            @if($name=='following')
                <b>You are following none</b>
            @endif
            @if($name=='followers')
                <b>You have 0 followers</b>
            @endif
            @if($name=='suggestions')
                <b>No profiles to show</b>
            @endif
        </div>
    @endforelse
</div>
