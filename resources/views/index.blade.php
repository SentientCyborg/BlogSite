<x-layout bgImg="home-bg.jpg">

    <x-slot:heading>Clean Blog</x-slot:heading>
    <x-slot:subHeading>A blog theme by Start Bootstrap.</x-slot:subHeading>

    <!-- Index-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                
                @foreach ($posts as $post)
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/post/{{ $post['id'] }}">
                            <h2 class="post-title">{{ $post['title'] }}</h2>
                            <h3 class="post-subtitle">{{ $post['subtitle']}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by {{ $post['author']}}
                            on {{ $post['date_published']}}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    
                @endforeach


                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>

</x-layout>
       
