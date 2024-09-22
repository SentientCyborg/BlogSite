<x-layout bgImg="post-bg.jpg">
    
    <x-slot:heading>{{ $post['title'] }}</x-slot:heading>
    <x-slot:subHeading>{{ $post['subtitle'] }}</x-slot:subHeading>


    <!-- TODO: Update above to be a blog entry. Do I actually want it like that?-->

    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{{ $post['text'] }}</p>

                    <!--TODO: Fix formatting for <p>'s below -->
                    <p>Written by {{ $post['author']}}</p>
                    <p>Published on {{ $post['created_at']->format("m/d/y") }}</p>
                    <p>Images by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a></p>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary float-end">Edit Post</a>
                </div>
            </div>
        </div>
    </article>
    
</x-layout>       