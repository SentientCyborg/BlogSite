<x-layout bgImg="contact-bg.jpg">
    
    <x-slot:heading>Login</x-slot:heading>
    <x-slot:subHeading>Please Login</x-slot:subHeading>
    <div class="container">
        <p>Login Placeholder</p>

    
        <x-form-field>
            <x-form-label for="text">Blog Entry</x-form-label>
            <x-form-textarea 
              name="text" 
              {{-- placeholder={{ $post->text }} --}}
              required>
                {{-- {{ $post->text }} --}}
            </x-form-textarea>

            <x-form-error name="text" />
          </x-form-field>
          
    </div>
    
</x-layout>