<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">Detalles del Producto</h2>
                        <a href="{{ route('products.index') }}" 
                           class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300">
                            Volver
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Información General</h3>
                            <div class="mt-4 space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Nombre</h4>
                                    <p class="mt-1 text-sm text-gray-900">{{ $product->name }}</p>
                                </<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold">Detalles del Producto</h2>
                        <a href="{{ route('products.index') }}" 
                           class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300">
                            Volver
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Información General</h3>
                            <div class="mt-4 space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500">Nombre</h4>
                                    <p class="mt-1 text-sm text-gray-900">{{ $product->name }}</p>
                                </