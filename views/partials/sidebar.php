<!-- Sidebar -->
<main class="flex mx-auto">
    <div class="bg-slate-400 border-r border-zinc-800 h-screen p-4 w-12 sm:w-32 md:w-48">
        <h2 class="text-xl font-bold mb-4 hidden sm:block">
            <?= $_SESSION['user']['username']  ?? 'Hello, Guest' ?>
        </h2>
        <!-- Home -->
        <a href="/"
            class="<?= urlIs('/') ?> flex items-center py-2 text-gray-700 hover:text-slate-700 hover:bg-slate-300 rounded-lg">
            <i class="material-icons mr-2">home</i>
            <div class="hidden sm:block">
                Home
            </div>
        </a>
        <!-- Notes -->
        <?php if ($_SESSION['user'] ?? false): ?>
            <a href="/characters"
                class="<?= urlIs('/characters') ?> flex items-center py-2 text-gray-700 hover:text-slate-700 hover:bg-slate-300 rounded-lg">
                <i class="material-icons mr-2">group</i>
                <div class="hidden sm:block">
                    Characters
                </div>
            </a>
        <?php endif ?>
        <!-- About -->
        <a href="/about"
            class="<?= urlIs('/about') ?> flex items-center py-2 text-gray-700 hover:text-slate-700 hover:bg-slate-300 rounded-lg">
            <i class="material-icons mr-2">info</i>
            <div class="hidden sm:block">
                About
            </div>
        </a>
        <!-- Notes -->
        <?php if ($_SESSION['user'] ?? false): ?>
            <a href="/notes"
                class="<?= urlIs('/notes') ?> flex items-center py-2 text-gray-700 hover:text-slate-700 hover:bg-slate-300 rounded-lg">
                <i class="material-icons mr-2">note</i>
                <div class="hidden sm:block">
                    Notes
                </div>
            </a>
        <?php endif ?>
        <!-- Characters -->
        <div class="relative">
            <a href="#" class="flex items-center py-2 text-gray-700 hover:text-slate-700 hover:bg-slate-300 rounded-lg"
                id="chat">
                <i class="material-icons mr-2">group</i>
                <div class="hidden sm:block">
                    Characters
                </div>
                <i class="material-icons hidden sm:block md:ml-18 sm:ml-5">expand_more</i>
            </a>
            <div class="flex border-2 border-zinc-800 rounded bg-slate-300" id="chatDropdown" style="display:none;">
                <a href="/contact"
                    class="<?= urlIs('/contact') ?> flex items-center py-2 text-slate-700 hover:text-gray-700 bg-slate-300 hover:bg-slate-400">
                    <i class="material-icons mr-2">email</i>
                    <div class="hidden sm:block">
                        Contact
                    </div>
                </a>
                <a href="#"
                    class="flex items-center py-2 text-slate-700 hover:text-gray-700 bg-slate-300 hover:bg-slate-400">
                    <i class="material-icons mr-2">forum</i>
                    <div class="hidden sm:block">
                        Discord
                    </div>
                </a>
            </div>
        </div>
        <!-- Chat -->
        <div class="relative">
            <a href="#" class="flex items-center py-2 text-gray-700 hover:text-slate-700 hover:bg-slate-300 rounded-lg"
                id="chat">
                <i class="material-icons mr-2">chat</i>
                <div class="hidden sm:block">
                    Chat
                </div>
                <i class="material-icons hidden sm:block md:ml-18 sm:ml-5">expand_more</i>
            </a>
            <div class="flex border-2 border-zinc-800 rounded bg-slate-300" id="chatDropdown" style="display:none;">
                <a href="/contact"
                    class="<?= urlIs('/contact') ?> flex items-center py-2 text-slate-700 hover:text-gray-700 bg-slate-300 hover:bg-slate-400">
                    <i class="material-icons mr-2">email</i>
                    <div class="hidden sm:block">
                        Contact
                    </div>
                </a>
                <a href="#"
                    class="flex items-center py-2 text-slate-700 hover:text-gray-700 bg-slate-300 hover:bg-slate-400">
                    <i class="material-icons mr-2">forum</i>
                    <div class="hidden sm:block">
                        Discord
                    </div>
                </a>
            </div>
        </div>
        
        <hr class="my-4 border border-zinc-800" />
        <!-- Login -->
        <?= $_SESSION['user']['username']  ?? 'User Status' ?>
        
    </div>