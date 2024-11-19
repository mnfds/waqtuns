<div class="bg-white">
    <div class="container px-20 py-16">
        <div class="flex justify-center mb-5">
            <h1 class="text-2xl font-extrabold">Beberapa Produk Yang Kami Tawarkan</h1>
        </div>
        <!-- ✅ Grid Section - Starts Here 👇 -->
        
        <div x-data="{ currentIndex: 0, products: [
            { img: 'https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60', name: 'Nama Produk', description: 'Deskripsi Singkat', price: '$149' },
            { img: 'https://images.unsplash.com/photo-1651950519238-15835722f8bb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8Mjh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60', name: 'Product Name', description: 'Brand', price: '$149', oldPrice: '$199' },
            { img: 'https://images.unsplash.com/photo-1651950537598-373e4358d320?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MjV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60', name: 'Product Name', description: 'Brand', price: '$149', oldPrice: '$199' },
            { img: 'https://images.unsplash.com/photo-1651950540805-b7c71869e689?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8Mjl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60', name: 'Product Name', description: 'Brand', price: '$149', oldPrice: '$199' }
        ] }">
            <div class="relative w-full overflow-hidden">
                <div class="flex transition-transform duration-500" :style="{ transform: `translateX(-${currentIndex * 100 / 3}%)` }">
                    <template x-for="(product, index) in products" :key="index">
                        <div class="w-1/3 flex-shrink-0">
                            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl mx-auto">
                                <a href="#">
                                    <img :src="product.img" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                                    <div class="px-4 py-3 w-72">
                                        <span class="text-lg font-bold text-black truncate block capitalize" x-text="product.name"></span>
                                        <p class="text-gray-400 mr-3 uppercase text-xs" x-text="product.description"></p>
                                        <div class="flex items-center">
                                            <p class="text-lg font-semibold text-black cursor-auto my-3" x-text="product.price"></p>
                                            <div class="ml-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </template>
                </div>
                <button @click="currentIndex = (currentIndex > 0) ? currentIndex - 1 : Math.ceil(products.length / 3) - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                    &#10094;
                </button>
                <button @click="currentIndex = (currentIndex < Math.ceil(products.length / 3) - 1) ? currentIndex + 1 : 0" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                    &#10095;
                </button>
            </div>
        </div>
        
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Shop by Category</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative">
                <img src="https://via.placeholder.com/400x300" alt="New Arrivals" class="w-full h-full object-cover rounded-lg">
                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 rounded-b-lg">
                    <h2 class="text-xl font-semibold">New Arrivals</h2>
                    <a href="#" class="text-blue-300">Shop now</a>
                </div>
            </div>
            <div class="relative">
                <img src="https://via.placeholder.com/400x300" alt="Accessories" class="w-full h-full object-cover rounded-lg">
                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 rounded-b-lg">
                    <h2 class="text-xl font-semibold">Accessories</h2>
                    <a href="#" class="text-blue-300">Shop now</a>
                </div>
            </div>
            <div class="relative">
                <img src="https://via.placeholder.com/400x300" alt="Workspace" class="w-full h-full object-cover rounded-lg">
                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 rounded-b-lg">
                    <h2 class="text-xl font-semibold">Workspace</h2>
                    <a href="#" class="text-blue-300">Shop now</a>
                </div>
            </div>
        </div>
    </div>


        <!-- 🛑 Grid Section - Ends Here -->
    </div>
</div>
