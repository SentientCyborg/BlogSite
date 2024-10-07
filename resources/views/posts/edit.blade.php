<x-layout bgImg="home-bg.jpg">

    <x-slot:heading>Clean Blog</x-slot:heading>
    <x-slot:subHeading>A blog theme by Start Bootstrap.</x-slot:subHeading>

    <!-- Index-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            
          <x-form-container>
                
                <h1>TODO: Update this page.</h1>

                {{-- Update post form --}}
                <form method="POST" action="/posts/{{ $post->id }}" id="update-post">
                    @csrf
                    @method("PATCH")


                    <x-form-field>
                      <x-form-label for="title">Post Title</x-form-label>
                      <x-form-input 
                        type="text" 
                        name="title" 
                        value="{{ $post->title }}" 
                        required />
                      <x-form-error name="title" />
                    </x-form-field>

                    <x-form-field>
                      <x-form-label for="subtitle">Subtitle</x-form-label>
                      <x-form-input 
                        type="text" 
                        name="subtitle" 
                        value="{{ $post->subtitle }}"
                        required />
                      <x-form-error name="subtitle" />
                    </x-form-field>

                    <x-form-field>
                      <x-form-label for="text">Blog Entry</x-form-label>
                      <x-form-textarea 
                        name="text"
                        id="editor" 
                        required>
                        {{ $post->text }}

                      </x-form-textarea>

                      <x-form-error name="text" />
                    </x-form-field>

                </form>

                {{-- TODO: Fix formatting for these buttons --}}
                <div class="container-fluid text-center">
                    <div class="row justify-content-between">
                        <div class="col">
                            <a href="{{ url('/posts')}}" class="btn">Cancel</a>
                        </div>
                        <div class="col">
                            <x-form-button form="update-post">Update</x-button>
                        </div>
                        <div class="col">
                            <x-form-button form="delete-post">Delete</x-button>
                        </div>
                    </div>
                </div>

                {{-- Hidden form for delete action --}}
                <form method="POST" action="/posts/{{ $post->id }}" id="delete-post" class="invisible">
                    @csrf
                    @method("DELETE")
                </form>

            </div>
          </x-form-container>
    </div>

</x-layout>