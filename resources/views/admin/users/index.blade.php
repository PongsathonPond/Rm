<x-admin-layout>
    @section('content')
<div class="col-lg-12">
  
    <x-splade-table :for="$users">
        @cell('action',$users)
        <Link href="{{route('admin.users.edit',$users)}}">แก้ไข</Link>
        @endcell
    </x-splade-table>
</div>
@endsection
</x-admin-layout>