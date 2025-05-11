@extends('backend.admin-dashboard')
@section('content')
    <!-- Main Content -->
    <main class="ml-64 w-full p-8 space-y-8">

      <!-- Cards -->
      <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-xl transition duration-300 border-t-4 border-blue-500">
          <h2 class="text-gray-500 text-sm uppercase">Total Users</h2>
          <p class="text-3xl font-bold text-blue-600 mt-2">{{ $users->count() }}</p>
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
@endsection
