<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Students - School Register App</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="p-6 shadow-lg w-full flex flex-row items-center justify-between">
      <div>
        <h1 class="text-2xl">Register</h1>
      </div>
      <ul>
        <li><a href="">Home</a></li>
      </ul>
    </nav>

    <!-- Main content -->
    <main class="flex flex-col justify-center items-center">
        <div class="p-6 shadow-lg rounded-lg w-fit mb-5 mt-10">
          <h2 class="text-2xl font-bold mb-2">Add Student</h2>
          <form action="{{ route('students.store') }}" method="POST" class="w-fit">
            @csrf

            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
              </label>
              <input
                class="border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name"
                name="name"
                type="text"
                placeholder="Enter student name"
                value="{{ old('name') }}"
                required
              />
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="email">
                Email
              </label>
              <input
                class="border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email"
                name="email"
                type="text"
                placeholder="Enter student email"
              />
            </div>


            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="phone">
                Phone
              </label>
              <input
                class="border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="phone"
                name="phone"
                type="number"
                placeholder="Enter student phone number"
              />
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="class">
                Gender
              </label>
              <select
                class="border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="gender"
                name="gender"  
                placeholder="Enter student class">
              
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="class">
                Class
              </label>
              <input
                class="border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="class"
                name="class"
                type="text"
                placeholder="Enter student class"
              />
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="admi">
                Admission No
              </label>
              <input
                class="border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="admi"
                name="no"
                type="number"
                placeholder="Enter student admission no"
              />
            </div>

            
            <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              type="submit"
            >
              Add
            </button>
          </form>
        </div>

    </main>

    <script src="{{ asset('js/tailwind.js') }}"></script>
  </body>

  
</html>