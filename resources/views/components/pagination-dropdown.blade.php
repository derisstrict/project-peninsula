<div class="relative" x-data="{ isDrop: false }">
    <button @click="isDrop = !isDrop" @click.outside="isDrop = false" id="dropdown" aria-expanded="false" class="relative flex gap-2 bg-light-primary/10 p-2 px-3 rounded-xl items-center cursor-pointer hover:bg-light-primary/15 dark:bg-dark-primary/7 dark:hover:bg-dark-primary/15 transition-colors" type="button">
        <span class="font-semibold text-lime-600">View: </span> {{ $page }}
        <x-local-icon icon="arrow-head" class="transition-transform rotate-90" x-bind:class="isDrop ? 'rotate-270' : ''" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
    </button>
    <div x-cloak x-show="isDrop" id="lang-menu" class="absolute z-10 right-50 left-0 mt-4 h-10 bg-bglight p-3 gap-2 w-30 h-fit rounded-xl outline-2 outline-light-primary/10 dark:bg-bgdark dark:outline-dark-primary/10">
        <form id="maxResultForm" method="GET">
            <ul class="flex flex-col gap-2">
                <li id="li-1" class="radio-li text-left p-2 rounded-md cursor-pointer hover:bg-light-primary/5 dark:hover:bg-dark-primary/10">
                    <input type="radio" id="list-1" class="hidden" name="max_result" value="6">
                    <label for="list-1" class="cursor-pointer">6</label>
                </li>
                <li id="li-2" class="radio-li text-left p-2 rounded-md cursor-pointer hover:bg-light-primary/5 dark:hover:bg-dark-primary/10">
                    <input type="radio" id="list-2" class="hidden" name="max_result" value="12">
                    <label for="list-2" class="cursor-pointer">12</label>
                </li>
                <li id="li-3" class="radio-li text-left p-2 rounded-md cursor-pointer hover:bg-light-primary/5 dark:hover:bg-dark-primary/10">
                    <input type="radio" id="list-3" class="hidden" name="max_result" value="18">
                    <label for="list-3" class="cursor-pointer">18</label>
                </li>
                <li id="li-3" class="radio-li text-left p-2 rounded-md cursor-pointer hover:bg-light-primary/5 dark:hover:bg-dark-primary/10">
                    <input type="radio" id="list-3" class="hidden" name="max_result" value="24">
                    <label for="list-3" class="cursor-pointer">24</label>
                </li>
            </ul>
        </form>
    </div>
</div>
<p id="debug1"></p>

<script>
    // document.querySelector('#list-1').form.submit()
    // document.addEventListener('DOMContentLoaded', () => {
    //     const form = document.querySelector('#maxResultForm');
    //     const radios = form.querySelectorAll('input[type="radio"][name="max_result]');

    //     radios.forEach(radio => {
    //         radio.addEventListener('change', () => {
    //             form.submit();
    //         })
    //     })
    // })

    const form = document.querySelector('#maxResultForm');
    const radioForm = document.getElementById('list-1');
    const radioForms = document.querySelectorAll('[name=max_result]');
    const debug1 = document.getElementById('debug1');
    const allLi = document.querySelectorAll('.radio-li');

    for (let i = 0; i < radioForms.length; i++) {
        radioForms[i].addEventListener('click', function() {
            form.submit();
        })

        if (radioForms[i].value === "{{ $page }}") {
            radioForms[i].checked = true;
            allLi[i].classList.add('text-lime-600');
            allLi[i].classList.add('font-semibold');
            allLi[i].classList.add('bg-lime-600/15');
            allLi[i].classList.remove('hover:bg-light-primary/5');
            allLi[i].classList.remove('dark:hover:bg-dark-primary/10');
        }

        allLi[i].addEventListener('click', function() {
            radioForms[i].click();
        })
    }
</script>