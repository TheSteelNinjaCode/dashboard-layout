<!-- Button to Open the Dialog -->
<div class="flex justify-center mt-8">
    <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" onclick="document.getElementById('profileDialog').showModal()">
        Open Profile Dialog
    </button>
</div>

<!-- Dialog -->
<dialog id="profileDialog" class="w-full max-w-md bg-white rounded-lg shadow-lg p-0">
    <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gray-800">Profile</h2>
        <button class="text-gray-400 hover:text-gray-600" onclick="document.getElementById('profileDialog').close()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="p-6">
        <div class="flex items-center space-x-4">
            <img src="https://via.placeholder.com/100" alt="Profile Picture" class="w-24 h-24 rounded-full">
            <div>
                <h3 class="text-lg font-medium text-gray-800">John Doe</h3>
                <p class="text-sm text-gray-600">john.doe@example.com</p>
            </div>
        </div>
        <div class="mt-4">
            <p class="text-sm text-gray-600">Phone: +1 (555) 123-4567</p>
            <p class="text-sm text-gray-600">Address: 123 Main St, Springfield</p>
        </div>
    </div>
    <div class="flex justify-end px-6 py-3 border-t border-gray-200">
        <button class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600" onclick="document.getElementById('profileDialog').close()">Close</button>
        <button class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit Profile</button>
    </div>
</dialog>