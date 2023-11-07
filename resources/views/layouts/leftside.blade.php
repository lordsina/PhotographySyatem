<div class="card mb-3 ">
    <h5 class="mt-3 text-danger"><i class="fa-regular fa-newspaper fa-xl" style="color: #e32400;"></i> اخبار سایت</h5>
    <hr>
    <?php 
        $posts = App\Models\Post::orderBy('created_at', 'desc')->offset(0)->limit(5)->get();
    ?>
    
    @foreach ($posts as $post )
    <div class="card-body border-bottom">
        <h6 class="card-title text-info">{{ $post->title }}</h6>
        <span class="badge rounded-pill text-bg-primary">
            {{
            // $post->created_at->diffInDays(now())
            $jDate = Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y-m-d');
            }}
        </span>
    </div>
    @endforeach

    
</div>