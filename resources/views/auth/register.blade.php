<x-layout bgImg="contact-bg.jpg">
    
    <x-slot:heading>Register</x-slot:heading>
    <x-slot:subHeading>Please Register</x-slot:subHeading>
    <x-form-container>
        <p>Register Placeholder</p>
        <x-form-field>
            <x-form-label for="first_name">First Name</x-form-label>
            <x-form-input 
                name="first_name" 
                id="first_name" 
                required/>
            <x-form-error name="first_name" />
          </x-form-field>

        <x-form-field>
            <x-form-label for="last_namne">Last Name</x-form-label>
            <x-form-input 
                name="last_namne" 
                id="last_namne" 
                required/>
            <x-form-error name="last_namne" />
        </x-form-field>

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

        <x-form-field>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input 
                name="password_confirmation" 
                id="password_confirmation" 
                type="password_confirmation" 
                required/>
            <x-form-error name="password_confirmation" />
          </x-form-field>

        <x-form-button>Submit</x-form-button>
      
      </x-form-container>
    
</x-layout>