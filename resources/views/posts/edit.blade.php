<x-layout bgImg="home-bg.jpg">

    <x-slot:heading>Clean Blog</x-slot:heading>
    <x-slot:subHeading>A blog theme by Start Bootstrap.</x-slot:subHeading>

    <!-- Index-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 mb-3">
                
                <h1>TODO: Update this page.</h1>
                <form method="POST" action="{{ url('/post/{ $post->id}') }}">
                    @csrf
                    @method("Patch")

                    <div class="mb-3">
                      <label for="title" class="form-label">Post Title</label>
                      <input type="text" name="title" class="form-control" id="FormControlInput1" placeholder="Enter a title" required>
                      @error("title")
                        <x-error> {{$message}} </x-error>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="subtitle" class="form-label">Subtitle</label>
                      <input type="text" name="subtitle" class="form-control" id="FormControlInput2" placeholder="Enter a short post description." required>
                      @error("subtitle")
                        <x-error> {{$message}} </x-error>
                      @enderror
                    </div> 

                    <div class="mb-3">
                      <label for="text" class="form-label">Blog Entry</label>
                      <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
                      @error("text")
                        <x-error> {{$message}} </x-error>
                      @enderror
                    </div>
                </form>

                {{-- TODO: Fix formatting for these buttons --}}
                <div class="container-fluid text-center">
                    <div class="row justify-content-between">
                        <div class="col">
                            <a href="{{ url('/posts')}}" class="btn">Cancel</a>
                        </div>
                        <div class="col">
                            <x-button>Update</x-button>
                        </div>
                        <div class="col">
                            <x-button>Delete</x-button>
                        </div>
                    </div>
                </div>

                <form method="POST" action="/post/{{ $post->id }}" id="delete-post" class="invisible">
                    @csrf
                    @method("DELETE")
                </form>
            </div>
        </div>
    </div>

</x-layout>