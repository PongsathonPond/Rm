<x-admin-layout>
    
@section('content')

<x-splade-form :default="$user" :action="route('admin.users.update', $user)" method="PUT">
    <x-splade-input name="username" label="Username" />
    <x-splade-input name="first_name" label="First name" />
    <x-splade-input name="last_name" label="Last name" />
    <x-splade-input name="email" label="Email address" />
    <x-splade-submit />
</x-splade-form>
@endsection
</x-admin-layout>