<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
    <!-- Modal Container -->
    <div class="bg-white rounded-xl shadow-xl w-full max-w-2xl">
        <!-- Modal Header -->
        <div class="bg-emerald-600 text-white px-6 py-4 rounded-t-xl">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold">Share Your Recipe</h2>
                <button class="text-white hover:text-emerald-100">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Modal Body -->
        <div class="p-6 max-h-[80vh] overflow-y-auto">
            <form>
                <!-- Recipe Image Upload -->
                <div class="mb-6">
                    <div class="border-2 border-dashed border-emerald-200 rounded-lg p-8 text-center hover:border-emerald-300 transition-colors">
                        <i class="fas fa-camera text-4xl text-emerald-500 mb-2"></i>
                        <p class="text-gray-600">Upload your dish photo</p>
                        <p class="text-sm text-gray-500 mt-1">Click to upload or drag and drop</p>
                    </div>
                </div>

                <!-- Basic Info Section -->
                <div class="space-y-4 mb-6">
                    <input type="text"
                           placeholder="Recipe Title"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 text-lg">

                    <div class="grid grid-cols-2 gap-4">
                        <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                            <option value="">Select Meal Type</option>
                            <option value="iftar">Iftar</option>
                            <option value="suhoor">Suhoor</option>
                        </select>

                        <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                            <option value="">Select Category</option>
                            <option value="main">Main Course</option>
                            <option value="soup">Soup</option>
                            <option value="appetizer">Appetizer</option>
                            <option value="dessert">Dessert</option>
                            <option value="drink">Drink</option>
                        </select>
                    </div>
                </div>

                <!-- Recipe Details -->
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <label class="block text-sm text-gray-600 mb-2">Prep Time (mins)</label>
                        <input type="number"
                               placeholder="30"
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 mb-2">Cook Time (mins)</label>
                        <input type="number"
                               placeholder="45"
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 mb-2">Servings</label>
                        <input type="number"
                               placeholder="4"
                               class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                </div>

                <!-- Ingredients -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3">Ingredients</h3>
                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <input type="text"
                                   placeholder="Ingredient"
                                   class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                            <input type="text"
                                   placeholder="Amount"
                                   class="w-32 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                        </div>
                        <button class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                            <i class="fas fa-plus mr-1"></i> Add Another Ingredient
                        </button>
                    </div>
                </div>

                <!-- Instructions -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3">Instructions</h3>
                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-semibold">1</span>
                            <textarea placeholder="Enter step instructions..."
                                      class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 min-h-[80px]"></textarea>
                        </div>
                        <button class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                            <i class="fas fa-plus mr-1"></i> Add Another Step
                        </button>
                    </div>
                </div>

                <!-- Additional Notes -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3">Additional Notes</h3>
                    <textarea placeholder="Share any tips, variations, or special notes about your recipe..."
                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 min-h-[100px]"></textarea>
                </div>
            </form>
        </div>

        <!-- Modal Footer -->
        <div class="border-t border-gray-200 px-6 py-4">
            <div class="flex justify-end space-x-3">
                <button class="px-6 py-2 rounded-lg border border-gray-300 hover:bg-gray-50">
                    Cancel
                </button>
                <button class="px-6 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700">
                    Share Recipe
                </button>
            </div>
        </div>
    </div>
</div>
