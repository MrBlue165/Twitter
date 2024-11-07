    <div class="mt-3">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{-- $comment['name'] --}}" alt="{{-- $comment['name'] --}} Avatar">
                        <div>
                            <h5 class="card-title mb-0"><a href="#">{{-- $comment['name'] --}}</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="fs-6 fw-light text-muted">{{ $post->content }}</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1"></span> {{ $post->likes }} </a>
                    </div>
                    <div>
                        <span class="fs-6 fw-light text-muted"><span class="fas fa-clock"></span> {{ $post->created_at }} hours ago</span>
                    </div>
                </div>
                <!-- Replies section -->
                <hr>
                <div>
                    {{--
                    @foreach($comment['replies'] as $reply)
                        <div class="px-3 py-2 bg-light rounded mb-2">
                            <strong>{{ $reply['name'] }}</strong> - {{ $reply['message'] }}
                            <small class="text-muted">{{ $posts }} hours ago</small>
                        </div>
                    @endforeach
                    --}}
                </div>
                <div>
                    <textarea class="fs-6 form-control" rows="1"></textarea>
                    <button class="btn btn-primary btn-sm mt-2">Post Reply</button>
                </div>
            </div>
        </div>
    </div>
