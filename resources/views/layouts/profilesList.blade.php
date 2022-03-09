<div class="container">
    <div class="row mt-5">
        <div class="col-6 offset-3 py-2">
            @if($name=='following')
                <b>following</b>
            @else
                <b>followers</b>
            @endif
        </div>
        <div class="col-6 offset-3 bg-white border">
            @foreach($profiles as $profile)
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
                        @if($name=='following')
                            <follow-button user-id="{{$profile->user->id}}" follows="follows" class-data="btn-sm btn-primary "></follow-button>
                        @else
                            <form action="/follow/{{$profile->user->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn-sm btn-primary ">remove</button>
                            </form>

                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
