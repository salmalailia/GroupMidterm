@extends('layouts.app')

@section('content')
<center>
<div class="row justify-content-center align-items-center mt-3 mb-5 container">
    <div class="col-xl-6 mt-xl-5 mobile-heading-home">
        <h2 class="text-justify"><strong>How can we help you?</strong></h2>
        <div class="my-5 mobile-search">
            <form action="{{ route('search') }}" method="GET">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback fa-lg"></span>
                    <input type="text" name="key" class="form-control" placeholder="Search questions">
                </div>
                @csrf
            </form>
        </div>
    </div>

    <div class="col-xl-6 mobile-ask">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Ask our community!</h2>
                <form action="{{ route('ask') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name ="title_question" placeholder="Describe your question here." required>
                    </div>
                    <div class="form-group">
                        <textarea name="detail_question" class="form-control" id="detail_question" cols="15" rows="5" style="resize: none;" placeholder="Tell details informations here." required></textarea>
                    </div>
                    <button class="btn btn-outline-primary btn-block">
                        {{ __('Submit') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</center>

{{-- fetching all question data retrived from HomeController@index --}}

@foreach ($questions as $question)
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-hoverable mb-4">
                <div class="card-body">     
                    <a style="text-decoration: none; color: #D5BFBF;" class="stretched-link" href="{{ route('thread', $question->id) }}">
                        <div class="media flex-wrap w-100 align-items-center">
                            <div class="media-body truncate">
                                <h2><strong>{{ $question->title_question }}</strong></h2>
                                <div class="text-muted">
                                    <a href="javascript:void(0)"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $question->name }}</a> | 
                                    @if($question->updated_at > $question->created_at)
                                    Last edit {{ Carbon\Carbon::parse($question->created_at)->timezone("Asia/Jakarta")->format('M d, Y \a\t H:i') }}
                                    @else
                                        Posted on {{ Carbon\Carbon::parse($question->updated_at)->timezone("Asia/Jakarta")->format('M d, Y \a\t H:i') }}
                                    @endif
                                </div>
                                <div class="text-muted">
                                    <div>Member since <strong>{{ Carbon\Carbon::parse($question->user_created_at)->timezone("Asia/Jakarta")->format('M d, Y') }}</strong></div>
                                </div>
                            </div>
                        </div>              
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endforeach

<!-- Pagination -->
<div class="row">
    <div class="col-xl-12">
        <div class="container d-flex justify-content-end">
            {{ $questions->links() }}
        </div>
    </div>
</div>

<script>
    var currentTitle = 'Home';
</script>
@endsection
