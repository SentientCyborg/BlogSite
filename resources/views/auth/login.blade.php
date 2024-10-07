<x-layout bgImg="contact-bg.jpg">
    
    <x-slot:heading>Login</x-slot:heading>
    <x-slot:subHeading>Please Login</x-slot:subHeading>
    <div class="container">
        {{-- TODO: Make Pretty --}}


        <x-form-container>
          <p>Login Placeholder</p>
          <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input 
              name="email" 
              id="email" 
              type="email" 
              required/>
            <x-form-error name="email" />
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password</x-form-label>
              <x-form-input 
                name="password" 
                id="password" 
                type="password" 
                required/>
              <x-form-error name="password" />
          </x-form-field>

          <x-form-button>Submit</x-form-button>
        
        </x-form-container>

          
    </div>
    
</x-layout>