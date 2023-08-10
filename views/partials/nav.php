<!-- Navbar -->
<nav class="bg-slate-400 border-b border-zinc-800 flex justify-between items-center p-4">
    <!-- Logo and Company Name -->
    <div class="flex items-center">
        <img src="logo.jpg" alt="Logo" class="w-10 h-10 mr-4" />
        <h1 class="text-xl font-bold">EQ2Emu DB Editor</h1>
    </div>
    <!-- User Dropdown -->
      <div class="relative">
        <?php if ($_SESSION['user'] ?? false) : ?>

          <button id="userDropdownButton" class="flex items-center text-gray-800 hover:bg-gray-400">
            <!-- User Image -->
            <img src="user.png" alt="User Image" class="h-8 w-8 rounded-full">
            <!-- User Dropdown Icon -->
            <i class="material-icons ml-1">arrow_drop_down</i>
          </button>
          <!-- User Dropdown Menu -->
          <div id="userDropdown" class="absolute top-full right-0 mt-2 py-2 bg-slate-300 rounded-lg shadow-xl w-48 text-gray-800" style="display: none;">
            <!-- Logout -->
            <?php if ($_SESSION['user' ?? false]) : ?>
              <div class="flex items-center py-2 text-gray-800 hover:bg-gray-400">
                <form method="POST" action="/session">
                  <input type="hidden" name="_method" value="DELETE" />
                  

                  <i class="material-icons mr-2">logout</i>
                  <button>Logout</button>

                </form>
              </div>
            <?php endif; ?>
            <!-- Settings -->
            <a href="#" class="flex items-center py-2 text-gray-800 hover:bg-gray-400">
              <i class="material-icons mr-2">settings</i>
              Settings
            </a>

            <?php else : ?>
              <a href="/register" class="<?= urlIs('/register') ?>items-center p-2 text-gray-700 hover:text-slate-900">Register</a>
              <a href="/login" class="<?= urlIs('/login') ?>items-center p-2 text-gray-700 hover:text-slate-900">Login</a>
            <?php endif; ?>
          
          </div>
      </div>
</nav>
