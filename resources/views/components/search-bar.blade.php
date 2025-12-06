<div x-data="{ focused:false }" id="search_box" :class="focused ? 'outline-3 outline-lime-600/50' : ''" class="relative flex bg-light-primary/5 w-fit items-center pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/7">
    <form method="GET" class="flex gap-2">
        <button type="submit">
            <x-local-icon icon="search" class="{{ $accent }} hover:brightness-120 cursor-pointer" width="24px" height="24px" stroke="currentColor" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
        </button>
        <input @focus="focused = true" @blur="focused = false" id="search" type="text" name="search" value="{{ $search }}" class="w-70 outline-none" placeholder="{{ __('search_bar.search') }}">
    </form>        
    <button id="clear_content" class="hidden bg-light-primary/5 p-1 rounded-xl transition-colors cursor-pointer dark:bg-dark-primary/5 hover:bg-light-primary/10 dark:hover:bg-dark-primary/10">
        <x-local-icon icon="x-cross" width="16px" height="16px" viewBox="0 0 200 200" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
    </button>
    <div id="shortcut" class="text-light-primary/50 bg-light-primary/5 px-2 rounded-lg dark:text-dark-primary/50 dark:bg-dark-primary/5">t</div>
</div>
<script>
    const clearBtn = document.getElementById('clear_content');
    const searchTb = document.getElementById('search');
    const shortcut = document.getElementById('shortcut');
    const debug = document.getElementById('debug');

    searchTb.addEventListener('input', function() {
        if (searchTb.value === '') {
            clearBtn.classList.add('hidden');
            shortcut.classList.remove('hidden');
        } else {
            clearBtn.classList.remove('hidden');
            shortcut.classList.add('hidden');
        }
    });

    searchTb.addEventListener('focus', function() {
        if (searchTb.value === '') {
            clearBtn.classList.add('hidden');
            shortcut.classList.remove('hidden');
        } else {
            clearBtn.classList.remove('hidden');
            shortcut.classList.add('hidden');
        }
        cursorEndLine();
    });

    window.addEventListener('DOMContentLoaded', function() {
        if (searchTb.value === '') {
            clearBtn.classList.add('hidden');
            shortcut.classList.remove('hidden');
        } else {
            clearBtn.classList.remove('hidden');
            shortcut.classList.add('hidden');
        }
    });

    window.addEventListener('keydown', function(event) {
        if (event.key === 't') {
            if (document.activeElement != searchTb) {
                event.preventDefault();
            }
            cursorEndLine();
            searchTb.focus();
        }
    });
    
    clearBtn.addEventListener('click', function() {
        const url = new URL(window.location.href);
        url.search = '';
        window.location.href = url.toString();
        searchTb.value = '';
    });

    function cursorEndLine() {
        const length = searchTb.value.length;
        searchTb.setSelectionRange(length, length);
    }

</script>