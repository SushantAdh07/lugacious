<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background-color: rgba(100, 116, 139, 0.4);
      border-radius: 9999px;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 z-30 bg-white shadow px-6 py-4 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-blue-700">Admin Dashboard</h1>
    <div class="flex items-center space-x-4">
      <span class="text-gray-600 hidden sm:block">Welcome, Admin</span>
      <img src="https://i.pravatar.cc/40" alt="avatar" class="w-10 h-10 rounded-full border-2 border-blue-500" />
    </div>
  </header>

  <!-- Layout -->
  <div class="flex pt-20">

    <!-- Sidebar -->
    <aside class="w-64 fixed top-16 left-0 h-[calc(100vh-4rem)] bg-white shadow-lg overflow-y-auto z-20">
      <nav class="p-6 space-y-2">
        <a href="#" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 font-medium transition">
          🏠 Dashboard
        </a>
        <a href="#" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 font-medium transition">
          👥 Users
        </a>
        <a href="#" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 font-medium transition">
          ⚙️ Settings
        </a>
        <a href="#" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-700 font-medium transition">
          📊 Reports
        </a>
        <a href="#" class="block px-4 py-3 rounded-lg text-red-600 hover:bg-red-100 hover:text-red-700 font-medium transition">
          🚪 Logout
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 w-full p-8 space-y-8">

      <!-- Cards -->
      <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition duration-300 border-t-4 border-blue-500">
          <h2 class="text-gray-500 text-sm uppercase">Total Users</h2>
          <p class="text-3xl font-bold text-blue-600 mt-2">1,245</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition duration-300 border-t-4 border-green-500">
          <h2 class="text-gray-500 text-sm uppercase">Revenue</h2>
          <p class="text-3xl font-bold text-green-600 mt-2">$58,430</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition duration-300 border-t-4 border-purple-500">
          <h2 class="text-gray-500 text-sm uppercase">New Signups</h2>
          <p class="text-3xl font-bold text-purple-600 mt-2">320</p>
        </div>
      </section>

      <!-- Activity Log -->
      <section class="bg-white rounded-2xl shadow p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
        <ul class="divide-y divide-gray-200">
          <li class="py-2">📥 <span class="text-gray-700">New user <strong>John Doe</strong> signed up.</span></li>
          <li class="py-2">⚙️ <span class="text-gray-700">Settings updated by <strong>Admin</strong>.</span></li>
          <li class="py-2">📊 <span class="text-gray-700">Monthly report generated.</span></li>
        </ul>
      </section>

    </main>
  </div>

</body>
</html>
