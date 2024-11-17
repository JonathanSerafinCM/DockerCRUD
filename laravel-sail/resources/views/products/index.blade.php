<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">Productos</h1>
                <a href="{{ route('products.create') }}" 
                   class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                    Nuevo Producto
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                                        <td class="px-6 py-4">{{ Str::limit($product->description, 100) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">${{ number_format($product->price, 2) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $product->stock }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('products.show', $product) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Ver</a>
                                            <a href="{{ route('products.edit', $product) }}" class="text-yellow-600 hover:text-yellow-900 mr-3">Editar</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>