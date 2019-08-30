<div class="px-6 mt-6 pr-20 mx-6 rounded bg-gray-300 py-4">
    <div class="text-dashboard text-gray-600 font-semibold text-lg">
        <div class="">
            <a href="{{ route('property.show', $property->id) }}" class="hover:text-gray-800 {{ (request()->is('properties/' . $property->id)) ? 'link-active' : '' }}"><i class="fas fa-home mr-2"></i> Home</a>
        </div>
        <div class="my-5">
            <a href="{{ route('billing.show', $property->id) }}" class="hover:text-gray-800 {{ (request()->is('properties/' . $property->id . '/billing')) ? 'link-active' : '' }}"><i class="fas fa-file-invoice-dollar mr-3"></i> Billing</a>
        </div>
        <div class="my-5">
            <a class="hover:text-gray-800"><i class="fas fa-server mr-2"></i> Your sites</a>
        </div>
        <div class="my-5">
            <a class="hover:text-gray-800"><i class="fas fa-folder-open mr-2"></i> Shared files</a>
        </div>
        <div class="mt-10">
            <a class="hover:text-gray-800" href="/home">Back to your properties <i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </div>
</div>