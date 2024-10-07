<x-layout bgImg="home-bg.jpg">

    <x-slot:heading>Clean Blog</x-slot:heading>
    <x-slot:subHeading>A blog theme by Start Bootstrap.</x-slot:subHeading>

    <!-- Index-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <x-form-container>   
                <h1>TODO: Update this page.</h1>
                <form method="POST" action="{{ url('/posts') }}">
                    @csrf

                    <x-form-field>
                      <x-form-label for="title">Post Title</x-form-label>
                      <x-form-input 
                        type="text" 
                        name="title" 
                        placeholder="Enter a title" 
                        required />
                      <x-form-error name="title" />
                    </x-form-field>

                    <x-form-field>
                      <x-form-label for="subtitle">Subtitle</x-form-label>
                      <x-form-input 
                        type="text" 
                        name="subtitle"  
                        placeholder="Enter a short post description." 
                        required />
                      <x-form-error name="subtitle" />
                    </x-form-field>

                    <x-form-field>
                      <x-form-label for="text">Blog Entry</x-form-label>
                      <x-form-textarea 
                        name="text" 
                        id="editor" 
                        required>
                      </x-form-textarea>
                      <x-form-error name="text" />
                    </x-form-field>
                    <x-form-button>Submit</x-form-button>

                </form>
              </x-form-container>
        </div>
    </div>

</x-layout>
       